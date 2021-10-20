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
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="message-square"></i>
                    <span class="link-title">Modelos 3D</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Codigos QR</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Termino Cuerpo Barra lateral Izquierda -->
</nav>
