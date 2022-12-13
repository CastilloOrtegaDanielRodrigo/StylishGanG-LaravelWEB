@extends('layouts.master')

@section('content')
<div class="container">
    <a role="button" href="{{ route('home') }}" class="btn btn-primary">
        Regresar
    </a>

    <div class="card mt-3">
        <div class="row g-0">
            <div class="col-4">
                <img src="{{ asset("images/$producto->url_imagen") }}" class="card-img-top " alt="..." height="300">
            </div>
            <div class="col-8">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Detalle de Producto</h5>
                    <div class="fw-bold">Nombre: <span class="fw-normal">{{$producto->nombre}}</span> </div>
                    <div class="fw-bold">Descripcion: <span class="fw-normal">{{$producto->descripcion}}</span> </div>
                    <div class="fw-bold">Precio:  <span class="fw-normal">{{$producto->precio}}</span> </div>
                    <div class="fw-bold">IVA:  <span class="fw-normal">{{$producto->iva}}</span> </div>
                    <div class="fw-bold">Precio Neto:  <span class="fw-normal">{{$producto->precio_neto}}</span> </div>
                    <div class="fw-bold">Existencia:  <span class="fw-normal">{{$producto->existencia}}</span> </div>
                    <div class="fw-bold">Proveedor:  <span class="fw-normal">{{$producto->proveedor->razon_social}}</span> </div>
                    <div class="fw-bold">Categoria:  <span class="fw-normal">{{$producto->categoria->nombre}}</span> </div>
                    <div class="fw-bold">Marca:  <span class="fw-normal">{{$producto->marca->nombre}}</span> </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
