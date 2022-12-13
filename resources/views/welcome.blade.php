<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>VAYCO - Inicio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset("css/owl.carousel.min.css") }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset("css/style.css") }}" rel="stylesheet" />
  </head>

  <body>
    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0"
    >
      <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center">
        <img class="logo-size" src="{{ asset("img/logo.svg") }}" alt="Image" />
        <h1 class="m-0 fs-3 ms-2">
        VAYCO
        </h1>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-3 py-lg-0">
          <a href="{{ url('/') }}" class="nav-item nav-link {{ (request()->is('/')) ? 'active' : '' }}">inicio</a>
          <a href="{{ route('historia') }}" class="nav-item nav-link {{ (request()->is('historia')) ? 'active' : '' }}">Historia</a>
          <a href="{{ route('productos.inicio') }}" class="nav-item nav-link {{ (request()->is('productos-inicio')) ? 'active' : '' }}">Productos</a>
          <a href="{{ route('contactanos') }}" class="nav-item nav-link {{ (request()->is('contactanos')) ? 'active' : '' }}">Contáctanos</a>
          @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}" class="nav-item nav-link">Home</a>
            @else
                <a href="{{ route('login') }}" class="nav-item nav-link">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 nav-item nav-link">Registrar</a>
                @endif
            @endauth
        @endif
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-4 col-md-6">
            <div class="navbar-brand d-flex align-items-center">
              <img class="logo-size" src="{{ asset("img/logo.svg") }}" alt="Image" />
              <h1 class="text-white m-0 ms-2">
                VAYCO
              </h1>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <h4 class="text-light mb-4">Dirección</h4>
            <p>
              <i class="fa fa-map-marker-alt me-3"></i>Av. Isidro Fabela S/N Col. Isidro Fabela San Mateo Atenco, Mex. Cp. 52000
            </p>
            <p><i class="fa fa-phone-alt me-3"></i>7282853828</p>
            <p><i class="fa fa-envelope me-3"></i>ventas@vaycorm.com</p>
          </div>
          <div class="col-lg-4 col-md-6">
            <h4 class="text-light mb-4">Enlaces rápidos</h4>
            <a class="btn btn-link" href="">Inicio</a>
            <a class="btn btn-link" href="">Historia</a>
            <a class="btn btn-link" href="">Productos</a>
            <a class="btn btn-link" href="">Contactanos</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset("js/wow.min.js") }}"></script>
    <script src="{{ asset("js/owl.carousel.min.js") }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset("js/main.js") }}"></script>
  </body>
</html>
