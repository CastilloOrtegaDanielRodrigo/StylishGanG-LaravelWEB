@extends('layouts.master')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Registrar Proveedor</h1>
<div class="container">
    <a role="button" href="{{ route('home') }}" class="btn btn-primary">
        Regresar
    </a>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registar Proveedor</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('proveedores.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}">

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="rfc" class="col-md-4 col-form-label text-md-end">RFC</label>

                            <div class="col-md-6">
                                <input id="rfc" type="text" class="form-control @error('rfc') is-invalid @enderror" name="rfc" value="{{ old('rfc') }}">

                                @error('rfc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="row mb-3">
                            <label for="colonia" class="col-md-4 col-form-label text-md-end">Colonia</label>

                            <div class="col-md-6">
                                <input id="colonia" type="text" class="form-control @error('colonia') is-invalid @enderror" name="colonia" value="{{ old('colonia') }}" >
                                @error('colonia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="cp" class="col-md-4 col-form-label text-md-end">CP</label>

                            <div class="col-md-6">
                                <input id="cp" type="number" class="form-control @error('cp') is-invalid @enderror" name="cp" value="{{ old('cp') }}">
                                @error('cp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="calle" class="col-md-4 col-form-label text-md-end">Calle</label>

                            <div class="col-md-6">
                                <input id="calle" type="text" class="form-control @error('calle') is-invalid @enderror" name="calle" value="{{ old('calle') }}">
                                @error('calle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="numero" class="col-md-4 col-form-label text-md-end">Numero exterior</label>

                            <div class="col-md-6">
                                <input id="numero" type="number" class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{ old('numero') }}">
                                @error('numero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="municipio" class="col-md-4 col-form-label text-md-end">Municipio</label>

                            <div class="col-md-6">
                                <select class="form-select @error('municipio') is-invalid @enderror" name="municipio">
                                    <option value="">Selecciona un Municipio</option>
                                    @forelse ($municipios as $municipio)
                                    <option value="{{$municipio->id}}">{{$municipio->nombre}}, {{$municipio->estado->nombre}}</option>
                                    @empty
                                    <option value="">Sin municipios</option>
                                    @endforelse
                                    </select>
                                    @error('municipio')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div> -->
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">


                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
