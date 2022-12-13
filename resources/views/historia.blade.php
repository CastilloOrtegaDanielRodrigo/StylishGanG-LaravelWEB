
@extends('welcome')
@section('content')
<!-- Page Header Start -->
<div
class="container-fluid page-header py-5 mb-5 wow fadeIn"
data-wow-delay="0.1s"
>
<div class="container text-center py-5">
  <h1 class="display-4 text-white animated slideInDown mb-4">
    Historia
  </h1>
  <nav aria-label="breadcrumb animated slideInDown">

  </nav>
</div>
</div>
<!-- Page Header End -->

<div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6">
          <div
            class="position-relative overflow-hidden ps-5 pt-5 h-100"
            style="min-height: 400px"
          >
            <img
              class="position-absolute w-100 h-100"
              src="img/en1.jpg"
              alt=""
              style="object-fit: cover"
            />

          </div>
        </div>
        <div class="col-lg-6">
          <div class="h-100">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h6 class="text-body text-uppercase mb-2">Sobre nosotros</h6>
              <h1 class="display-6 mb-0">
                ¡Soluciones Únicas Para Industrias!
              </h1>
            </div>
            <p>
              Vayco es una empresa de distribución de insumos y productos para el mantenimiento industrial y residencial creado por un equipo de trabajo llamado ¨Hola Mundo. Se fundo en 2022 con la finalidad de llevar a cabo un proyecto integrador.
            </p>
            <p class="mb-4">
                Esperando satisfacer sus necesidades y poder contribuir de manera profesional al desarrollo y liderazgo de su empresa.
            </p>
            <div class="border-top mt-4 pt-4">
              <div class="row g-4">
                <div class="col-sm-4 d-flex">
                  <i
                    class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                  ></i>
                  <h6 class="mb-0">Puntualidad en los Servicios</h6>
                </div>
                <div class="col-sm-4 d-flex">
                  <i
                    class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                  ></i>
                  <h6 class="mb-0">Servicios</h6>
                </div>
                <div class="col-sm-4 d-flex">
                  <i
                    class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                  ></i>
                  <h6 class="mb-0">Productos verificados</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
