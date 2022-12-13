@extends('layouts.app')

@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Crear cuenta</h1>
                    </div>
                    <form class="user" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <input id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nombre">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}"
                                placeholder="Correo Electronico">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                    id="password" name="password" placeholder="Contraseña">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="col-sm-6">
                                <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" placeholder="Repetir Contraseña">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-user btn-block">
                            Registrar Cuenta
                        </button>
                    </form>
                    <hr>

                    @if (Route::has('password.request'))
                        <div class="text-center">
                            <a class="small" href="{{ route('password.request') }}">
                                ¿Olvidaste la contraseña?
                            </a>   
                        </div>
                    @endif
                    
                    <div class="text-center">
                        <a class="small" href="{{ route('login') }}">¿Ya tienes una cuenta? ¡Inicia sesión!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
