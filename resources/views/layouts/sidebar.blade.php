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

            @hasanyrole('super-admin|admin')
            <!-- CRUD -->
            <li class="nav-item nav-category">CRUD</li>

            <li class="nav-item">
                <a href="{{ route('model') }}" class="nav-link">
                    <i class="link-icon" data-feather="codepen"></i>
                    <span class="link-title">Modelos 3D</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('qrcode') }}" class="nav-link">
                    <i class="link-icon" data-feather="activity"></i>
                    <span class="link-title" >Códigos QR</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('institucion') }}" class="nav-link">
                    <i class="link-icon" data-feather="briefcase"></i>
                    <span class="link-title" >Instituciones</span>
                </a>
            </li>

            <!-- ADMIN PANEL -->
            <li class="nav-item nav-category">Admin panel</li>

            <li class="nav-item">
                <a href="{{ route('admin.datos') }}" class="nav-link">
                    <i class="link-icon" data-feather="bar-chart-2"></i>
                    <span class="link-title">Datos</span>
                </a>
            </li>

            @role('super-admin')
            <li class="nav-item">
                <a href="{{ route('admin.tema') }}" class="nav-link">
                    <i class="link-icon" data-feather="aperture"></i>
                    <span class="link-title">Tema</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.roles') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Roles</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.permisos') }}" class="nav-link">
                    <i class="link-icon" data-feather="key"></i>
                    <span class="link-title">Permisos</span>
                </a>
            </li>
            @endrole

            <li class="nav-item">
                <a href="{{ route('admin.configuracion') }}" class="nav-link">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Configuración</span>
                </a>
            </li>

            @endhasanyrole
        </ul>
    </div>
    <!-- Termino Cuerpo Barra lateral Izquierda -->
</nav>
