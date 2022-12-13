@extends('welcome')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5" >
    <div id="header-carousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="{{ asset("img/ban1.jpg") }}" alt="Image" />
          <div class="carousel-caption">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                  <h5
                    class="text-light text-uppercase mb-3"
                  >
                    Bienvenido a VAYCO
                  </h5>
                  <h1 class="display-3 text-light mb-3">
                    Somos La Solución Para El Control, Monitoreo Y Transportación De Fluidos
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="w-100" src="{{ asset("img/ban2.jpg") }}" alt="Image" />
          <div class="carousel-caption">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                  <h5
                    class="text-light text-uppercase mb-3"
                  >
                  Bienvenido a VAYCO
                  </h5>
                  <h1 class="display-2 text-light mb-3">
                    Servicios Profesionales de Distribucion y Comercializacion
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#header-carousel"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#header-carousel"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
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
              <h1 class="display-6 mb-0">
                ¡Soluciones Únicas Para Industrias!
              </h1>
            </div>
            <p>
                A nombre de las Comercializadora VAYCO, reciba un cordial saludo y al mismo tiempo le recordamos que estamos a sus órdenes para la distribución de insumos y productos para el mantenimiento Industrial.
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
                  <h6 class="mb-0">Servicio de 12 horas</h6>
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
<!-- About End -->
@endsection
