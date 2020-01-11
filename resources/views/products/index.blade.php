@extends('products.layout')

@section('content')
    
<div class="container p-5">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-light">ARTÍCULOS</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-outline-light" href="{{ route('products.create') }}"> Publicar un nuevo artículo</a>
            </div>
        </div>
    </div>
   

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
        </div>
    @endif


    <table class="table table-bordered">

        @foreach ($products as $product)

        <h1 class="text-light">{{ $product->name }}</h1>
        <p class="text-light">{{ $product->detail }}</p>
        <a class="" href="{{ $product->link }}">{{ $product->link }}</a>
        <br>
        <br>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    <a class="btn btn-outline-light m-2" href="{{ route('products.show',$product->id) }}">Mostrar</a>
                    <a class="btn btn-outline-light m-2" href="{{ route('products.edit',$product->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-light m-2">Borrar artículo</button>
                </form>
        @endforeach
    </table>
    {!! $products->links() !!}
@endsection
</div>