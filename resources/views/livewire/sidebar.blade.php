<!-- Barra lateral Izquierda -->
<nav class="sidebar">

    <!-- Titulo y Icono menu mobil-->
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Easy<span>AR</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <!-- Cuerpo Barra lateral Izquierda -->
    <div class="sidebar-body">

        <ul class="nav">

            <!-- Main -->
            <li class="nav-item nav-category">Main</li>

            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>

            <!-- CRUD -->
            <li class="nav-item nav-category">CRUD</li>

            <li class="nav-item">
                <a href="{{ route('crud.modelos3d') }}" class="nav-link">
                    <i class="link-icon" data-feather="codepen"></i>
                    <span class="link-title">Modelos 3D</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('crud.codigosqr') }}" class="nav-link">
                    <svg style="width:16px;height:16px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M3,11H5V13H3V11M11,5H13V9H11V5M9,11H13V15H11V13H9V11M15,11H17V13H19V11H21V13H19V15H21V19H19V21H17V19H13V21H11V17H15V15H17V13H15V11M19,19V15H17V19H19M15,3H21V9H15V3M17,5V7H19V5H17M3,3H9V9H3V3M5,5V7H7V5H5M3,15H9V21H3V15M5,17V19H7V17H5Z" />
                    </svg>
                    <span class="link-title" style="margin-left:15px !important;">Códigos QR</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Termino Cuerpo Barra lateral Izquierda -->
</nav>
