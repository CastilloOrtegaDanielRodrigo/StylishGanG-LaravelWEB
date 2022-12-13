@extends('layouts.master')

@section('content')

<h1 class="h3 mb-2 text-gray-800">Productos</h1>
<div class="card mb-5">
    <div class="card-body">
        <form method="POST" action="{{ route('productos.store') }}" enctype="multipart/form-data" >
            @csrf

            <div class="form-group">
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

            <div class="form-group">
                <label for="imagen" class="col-md-4 col-form-label text-md-end">Imagen</label>
                <div class="col-md-6">
                    <input type="file" class="form-control @error('imagen') is-invalid @enderror" id="imagen" name="imagen">
                    @error('imagen')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

              </div>

            <div class="form-group">
                <label for="descripcion" class="col-md-4 col-form-label text-md-end">Descripcion</label>

                <div class="col-md-6">
                    <input id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') }}">

                    @error('descripcion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="precio" class="col-md-4 col-form-label text-md-end">Precio</label>

                <div class="col-md-6">
                    <input id="precio" type="number" class="form-control @error('precio') is-invalid @enderror" name="precio" value="{{ old('precio') }}">

                    @error('precio')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            {{-- <div class="form-group">
                <label for="iva" class="col-md-4 col-form-label text-md-end">IVA</label>

                <div class="col-md-6">
                    <input id="iva" type="number" class="form-control @error('iva') is-invalid @enderror" name="iva" value="{{ old('iva') }}" >
                    @error('iva')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div> --}}

            {{-- <div class="row mb-3">
                <label for="neto" class="col-md-4 col-form-label text-md-end">Precio Neto</label>

                <div class="col-md-6">
                    <input id="neto" type="number" class="form-control @error('neto') is-invalid @enderror" name="neto" value="{{ old('neto') }}">
                    @error('neto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div> --}}
            <div class="form-group">
                <label for="existencia" class="col-md-4 col-form-label text-md-end">Existencia</label>

                <div class="col-md-6">
                    <input id="existencia" type="number" class="form-control @error('existencia') is-invalid @enderror" name="existencia" value="{{ old('existencia') }}">
                    @error('existencia')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="proveedor" class="col-md-4 col-form-label text-md-end">Proveedor</label>

                <div class="col-md-6">
                    <select class="form-control @error('proveedor') is-invalid @enderror" name="proveedor">
                        <option value="">Selecciona una Opcion</option>
                        @forelse ($proveedores as $proveedor)
                        <option value="{{$proveedor->id}}">{{$proveedor->razon_social}}</option>
                        @empty
                        <option value="">Sin proveedores</option>
                        @endforelse
                      </select>
                        @error('proveedor')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="categoria" class="col-md-4 col-form-label text-md-end">Categoria</label>

                <div class="col-md-6">
                    <select class="form-control @error('categoria') is-invalid @enderror" name="categoria">
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
            <div class="form-group">
                <label for="marca" class="col-md-4 col-form-label text-md-end">Marca</label>

                <div class="col-md-6">
                    <select class="form-control @error('marca') is-invalid @enderror" name="marca">
                        <option value="">Selecciona una Opcion</option>
                        @forelse ($marcas as $marca)
                        <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                        @empty
                        <option value="">Sin marcas</option>
                        @endforelse
                      </select>
                        @error('marca')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>

            <div class="row mb-0">
                <div class="form-group">


                    <button type="submit" class="btn btn-primary">
                        {{ __('Registrar') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
  </div>
@endsection
