<!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home')}}">
                <div class="sidebar-brand-text mx-3">StylishGanG</div>
            </a>
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home')}}">
                <div class="sidebar-brand-text mx-3">UTVT</div>
            </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    {{-- <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li> --}}

    {{-- <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li> --}}

    <!-- Nav Item - Utilities Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{Str::startsWith(request()->route()->uri(), 'productos') ? 'active' : ''}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProd"
            aria-expanded="true" aria-controls="collapseProd">
            <i class="fas fa-fw fa-folder"></i>
            <span>Productos</span>
        </a>
        <div id="collapseProd" class="collapse {{Str::startsWith(request()->route()->uri(), 'productos') ? 'show' : ''}}" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded show">
                <a class="collapse-item {{request()->routeIs('productos.index') ? 'active' : ''}}"  href="{{ route('productos.index') }}">Listado de productos</a>
                <a class="collapse-item {{request()->routeIs('productos.create') ? 'active' : ''}}" href="{{ route('productos.create') }}">Crear Producto</a>
                <a class="collapse-item {{request()->routeIs('productos.eliminado') ? 'active' : ''}}" href="{{ route('productos.eliminado') }}">Eliminados</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{Str::startsWith(request()->route()->uri(), 'proveedores') ? 'active' : ''}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProve"
            aria-expanded="true" aria-controls="collapseProve">
            <i class="fas fa-fw fa-folder"></i>
            <span>Proveedor</span>
        </a>
        <div id="collapseProve" class="collapse {{Str::startsWith(request()->route()->uri(), 'proveedores') ? 'show' : ''}}" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{request()->routeIs('proveedores.index') ? 'active' : ''}}" href="{{ route('proveedores.index') }}">Proveedor</a>
                <a class="collapse-item {{request()->routeIs('proveedores.create') ? 'active' : ''}}" href="{{ route('proveedores.create') }}">Registar Proveedor</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{Str::startsWith(request()->route()->uri(), 'marcas') ? 'active' : ''}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMar"
            aria-expanded="true" aria-controls="collapseMar">
            <i class="fas fa-fw fa-folder"></i>
            <span>Marca</span>
        </a>
        <div id="collapseMar" class="collapse {{Str::startsWith(request()->route()->uri(), 'marcas') ? 'show' : ''}}" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{request()->routeIs('marcas.index') ? 'active' : ''}}" href="{{ route('marcas.index') }}">Registrar Marca</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{Str::startsWith(request()->route()->uri(), 'categorias') ? 'active' : ''}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Categorias</span>
        </a>
        <div id="collapsePages" class="collapse {{Str::startsWith(request()->route()->uri(), 'categorias') ? 'show' : ''}}" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{request()->routeIs('categorias.index') ? 'active' : ''}}" href="{{ route('categorias.index') }}">Ver Categoria</a>
            </div>
        </div>
    </li>


    {{-- <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

