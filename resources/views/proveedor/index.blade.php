@extends('layouts.master')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Proveedor</h1>
<div class="container">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5 mb-5">
        <a role="button" href="{{ route('proveedores.create') }}" class="btn btn-primary">
            Crear proveedor
        </a>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">RFC</th>
              <th scope="col">Correo</th>
              
              <th scope="col">Creado el</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($proveedores as $proveedor)
            <tr>
                <td>{{$proveedor->razon_social}}</td>
                <td>{{$proveedor->rfc}}</td>
                <td>{{$proveedor->correo}}</td>
                

                <td>{{$proveedor->created_at}}</td>
            </tr>

            @empty
            <option value="">Sin proveedores</option>
            @endforelse
          </tbody>
      </table>
</div>
@endsection

