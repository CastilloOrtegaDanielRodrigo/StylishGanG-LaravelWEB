@extends('layouts.app')

@section('content')
<!-- Outer Row -->

<div class="row justify-content-center">
    
    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
>

<!-- Nested Row within Card Body -->
                <div class="row">
                <div class="col-lg-12">
                    
<!-- IMAGEN DEL LOGIN -->
                    <img class="img-fluid" src="https://logosmarcas.net/wp-content/uploads/2020/11/Razer-Emblema.png" />
                </div>
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Bienvenido</h1>
                            </div>
                            

 <!-- INFORMACION DEL FORMULARIO -->
                                    <form class="user" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror form-control-user"
                                                id="email"
                                                value="{{ old('email') }}" name="email" aria-describedby="emailHelp"
                                                placeholder="correo electronico">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror form-control-user"
                                                id="password" placeholder="contraseña">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success btn-user btn-block">
                                            Iniciar Sesion
                                        </button>
                                        <hr>
                                    </form>

                            <div class="text-center">
                                @if (Route::has('password.request'))
                                <a class="small" href="{{ route('password.request') }}">¿Olvidaste la contraseña?</a>
                                @endif
                            </div>
                            <div class="text-center">
                                @if (Route::has('register'))
                                    <a class="small" href="{{ route('register') }}">{{ __('Crear cuenta') }}</a>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
