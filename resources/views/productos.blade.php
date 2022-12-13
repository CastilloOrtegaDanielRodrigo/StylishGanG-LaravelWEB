@extends('welcome')
@section('content')

<div
class="container-fluid page-header py-5 mb-5 wow fadeIn"
data-wow-delay="0.1s"
>
<div class="container text-center py-5">
  <h1 class="display-4 text-white animated slideInDown mb-4">
   Productos
  </h1>
  <nav aria-label="breadcrumb animated slideInDown">
  </nav>
</div>
</div>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

            @forelse ($productos as $producto)
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset("images/$producto->url_imagen") }}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{$producto->nombre}}</h5>
                            <p>{{$producto->categoria->nombre}}</p>
                            <p>{{$producto->marca->nombre}}</p>
                            <!-- Product price-->
                            <p class="fs-5 fw-bolder">${{$producto->precio_neto}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            @endforelse

        </div>
    </div>
</section>
@endsection
