@extends('layouts.master')

@section('content')
<div class="container">

    <table class="table table-striped table-hover">
        <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Email</th>
              <th scope="col">Asunto</th>
              <th scope="col">Mensaje</th>
              <th scope="col">Creado el</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($contactos as $contacto)
            <tr>
                <td>{{$contacto->nombre}}</td>
                <td>{{$contacto->email}}</td>
                <td>{{$contacto->asunto}}</td>
                <td>{{$contacto->mensaje}}</td>
                <td>{{$contacto->created_at}}</td>
            </tr>

            @empty
            <option value="">Sin marcas</option>
            @endforelse
          </tbody>
      </table>
</div>
@endsection
