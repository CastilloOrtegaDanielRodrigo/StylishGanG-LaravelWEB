@extends('layouts.master')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Marca</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registar Marca</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('marcas.store') }}">
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
                            <label for="categoria" class="col-md-4 col-form-label text-md-end">Categoria</label>

                            <div class="col-md-6">
                                <select class="form-select @error('categoria') is-invalid @enderror" name="categoria">
                                    <option value="">Selecciona una Opcion</option>
                                    @forelse ($categorias as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                    @empty
                                    <option value="">Sin categorias</option>
                                    @endforelse
                                  </select>
                                    @error('categoria')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover mt-5">
        <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Categoria</th>
              <th scope="col">Creado el</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($marcas as $marca)
            <tr>
                <td>{{$marca->nombre}}</td>
                <td>{{$marca->categoria->nombre}}</td>
                <td>{{$marca->created_at}}</td>
            </tr>

            @empty
            <option value="">Sin marcas</option>
            @endforelse
          </tbody>
      </table>
</div>
@endsection
