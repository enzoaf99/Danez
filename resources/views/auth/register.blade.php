@extends('layouts.navbar')
<br><br><br>

<div class="container text-light">
    <div class="row justify-content-center">

            <!--CARD REGISTER-->
                
                    <div class="col-md-8">
                        <div class="" style="font-family: 'Oswald', sans-serif; font-size: 30px;">{{ __('REGISTRO') }}</div>

                            <div class="">
                                <form name="formulario" method="POST" action="{{ route('register') }}">
                                    @csrf

            <!--NOMBRE-->

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right" style="font-family: 'Oswald', sans-serif; font-size: 20px;">{{ __('Nombre') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

            <!--APELLIDO-->

                                    <div class="form-group row">
                                        <label for="surname" class="col-md-4 col-form-label text-md-right" style="font-family: 'Oswald', sans-serif; font-size: 20px;">{{ __('Apellido') }}</label>

                                        <div class="col-md-6">
                                            <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                            @error('surname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

            <!--MAIL-->

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right" style="font-family: 'Oswald', sans-serif; font-size: 20px;">{{ __('E-Mail') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

            <!--CONTRASEÑA-->

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right " style="font-family: 'Oswald', sans-serif; font-size: 20px;">{{ __('Contraseña') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

            <!--CONFIRMAR CONTRASEÑA-->

                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="font-family: 'Oswald', sans-serif; font-size: 20px;">{{ __('Confirmar Contraseña') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

            <!--BOTÓN DE REGISTER-->
                                
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-outline-light">
                                                {{ __('REGISTRATE!') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                
                
                    </div>
                </div>
            </div>

@extends('layouts.footer')