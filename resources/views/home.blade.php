@extends('layouts.master')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Productos</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Listado de Productos</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio</th>
                        <th scope="col">IVA</th>
                        <th scope="col">Precio Neto</th>
                        <th scope="col">Existencia</th>
                        <th scope="col">Proveedor</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($productos as $producto)
            <tr>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->iva}}</td>
                <td>{{$producto->precio_neto}}</td>
                <td>{{$producto->existencia}}</td>
                <td>{{$producto->proveedor->razon_social}}</td>
                <td>{{$producto->categoria->nombre}}</td>
                <td>{{$producto->marca->nombre}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <form method="POST" action="{{ route('productos.destroy', $producto->id) }}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger btn-icon" title="Borrar">
                                ????
                            </button>
                        </form>
                        <a href="{{route('productos.show',$producto->id)}}" role="button" class="btn btn-primary">Ver</a>
                        <a href="{{route('productos.edit',$producto->id)}}" role="button" class="btn btn-info">Editar</a>
                    </div>
                </td>
            </tr>

            @empty
            <option value="">Sin proveedores</option>
            @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
