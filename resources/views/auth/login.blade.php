@extends('layouts.navbar')
<br><br><br>
<!--FORMULARIO DE LOGUEO-->

<div class="container text-light">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="" style="font-family:'Oswald', sans-serif; font-size: 30px;">{{ __('LOGUEO') }}</div>

                <div class="">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

<!--EMAIL-->

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="font-family: 'Oswald', sans-serif; font-size: 20px;">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--CONTRASEÑA-->

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"  style="font-family: 'Oswald', sans-serif; font-size: 20px;">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--RECUERDAME-->

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label "  style="font-family: 'Oswald', sans-serif; font-size: 15px;" for="remember">
                                        {{ __('Recordar sesión') }}
                                    </label>
                                </div>
                            </div>
                        </div>

<!--BOTON DE LOGIN-->                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-outline-light">
                                    {{ __('LOGUEATE!') }}
                                </button>

<!--FORGOT-->

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>

@extends('layouts.footer')