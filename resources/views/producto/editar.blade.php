@extends('layouts.master')

@section('content')
<div class="container">
    <a role="button" href="{{ route('home') }}" class="btn btn-primary">
        Regresar
    </a>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registar Producto</div>

                <div class="card-body">
                    <div class="text-center mb-2"><img src="{{ asset("images/$producto->url_imagen") }}"  width="200" alt="..."></div>
                    <form method="POST" action="{{ route('productos.update', $producto->id) }}" enctype="multipart/form-data" >
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{$producto->nombre }}">

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
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

                        <div class="row mb-3">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">Descripcion</label>

                            <div class="col-md-6">
                                <input id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{$producto->descripcion}}">

                                @error('descripcion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="precio" class="col-md-4 col-form-label text-md-end">Precio</label>

                            <div class="col-md-6">
                                <input id="precio" type="number" class="form-control @error('precio') is-invalid @enderror" name="precio" value="{{$producto->precio}}">

                                @error('precio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="row mb-3">
                            <label for="iva" class="col-md-4 col-form-label text-md-end">IVA</label>

                            <div class="col-md-6">
                                <input id="iva" type="number" class="form-control @error('iva') is-invalid @enderror" name="iva" value="{{$producto->iva}}" >
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
                                <input id="neto" type="number" class="form-control @error('neto') is-invalid @enderror" name="neto" value="{{$producto->precio_neto}}">
                                @error('neto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}
                        <div class="row mb-3">
                            <label for="existencia" class="col-md-4 col-form-label text-md-end">Existencia</label>

                            <div class="col-md-6">
                                <input id="existencia" type="number" class="form-control @error('existencia') is-invalid @enderror" name="existencia" value="{{$producto->existencia}}">
                                @error('existencia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="proveedor" class="col-md-4 col-form-label text-md-end">Proveedor</label>

                            <div class="col-md-6">
                                <select class="form-select @error('proveedor') is-invalid @enderror" name="proveedor">
                                    <option value="">Selecciona una Opcion</option>
                                    @forelse ($proveedores as $proveedor)
                                    <option value="{{$proveedor->id}}" @if($producto->proveedor_id == $proveedor->id) selected @endif>{{$proveedor->razon_social}}</option>
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
                        <div class="row mb-3">
                            <label for="categoria" class="col-md-4 col-form-label text-md-end">Categoria</label>

                            <div class="col-md-6">
                                <select class="form-select @error('categoria') is-invalid @enderror" name="categoria">
                                    <option value="">Selecciona una Opcion</option>
                                    @forelse ($categorias as $categoria)
                                    <option value="{{$categoria->id}}" @if($producto->categoria_id == $categoria->id) selected @endif>{{$categoria->nombre}}</option>
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
                        <div class="row mb-3">
                            <label for="marca" class="col-md-4 col-form-label text-md-end">Marca</label>

                            <div class="col-md-6">
                                <select class="form-select @error('marca') is-invalid @enderror" name="marca">
                                    <option value="">Selecciona una Opcion</option>
                                    @forelse ($marcas as $marca)
                                    <option value="{{$marca->id}}" @if($producto->marca_id == $marca->id) selected @endif>{{$marca->nombre}}</option>
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
                            <div class="col-md-6 offset-md-4">


                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualizar') }}
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
