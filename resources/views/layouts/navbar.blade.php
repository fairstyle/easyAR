<!-- Izquierda a derecha -->
<nav class="navbar">

    <!-- Icono buscar (se agrega fuera para que haya una separación entre la barra izquierda y la superior al achicar la ventana)-->
    <a href="#" class="sidebar-toggler">
        <i data-feather="menu"></i>
    </a>

    <div class="navbar-content">

        <!-- Input buscar -->
        <form class="search-form">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i data-feather="search"></i>
                    </div>
                </div>
                <input type="text" class="form-control" id="navbarForm" placeholder="Buscar...">
            </div>
        </form>

        <ul class="navbar-nav">

            <!-- Boton dark theme -->
            <li class="nav-item dropdown nav-messages">
                <a class="nav-link" href="#" role="button" onclick="darkTheme(this);" url="{{route('theme.toDark')}}">
                    @if(cache()->get('darkTheme'))
                        <i id="" data-feather="sun" style="color: #E5D539;"></i>
                    @else
                        <i id="" data-feather="moon" style="color: #727cf5;"></i>
                    @endif
                </a>
            </li>

            <li class="nav-item dropdown nav-messages">

                <!-- Icono correo -->
                <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="mail"></i>
                </a>

                <!-- Mensajes -->
                <div class="dropdown-menu" aria-labelledby="messageDropdown">
                    <div class="dropdown-header d-flex align-items-center justify-content-between">
                        <p class="mb-0 font-weight-medium">0 Mensajes</p>
                        <a href="javascript:;" class="text-muted">Borrar Todos</a>
                    </div>
                    <div class="dropdown-body">

                        <!-- AQUI VAN LOS MENSAJES, ABAJO MENSAJE DE EJEMPLO -->
                        <!--<a href="javascript:;" class="dropdown-item">
                            <div class="figure">
                                <img src="https://via.placeholder.com/30x30" alt="user">
                            </div>
                            <div class="content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p>Usuario 5</p>
                                    <p class="sub-text text-muted">5 hrs</p>
                                </div>
                                <p class="sub-text text-muted">Mensaje corto...</p>
                            </div>
                        </a>-->

                    </div>
                    <div class="dropdown-footer d-flex align-items-center justify-content-center">
                        <a href="javascript:;">Ver todos</a>
                    </div>
                </div>
            </li>
            <!-- Termino Mensajes -->

            <!-- Notificaciones -->
            <li class="nav-item dropdown nav-notifications">

                <!-- Icono Campana -->
                <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="bell"></i>

                    <!-- Punto indica nuevos mensajes -->
                    <div class="indicator">
                        <div class="circle"></div>
                    </div>
                </a>
                <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                    <div class="dropdown-header d-flex align-items-center justify-content-between">
                        <p class="mb-0 font-weight-medium">0 Notificaciones</p>
                        <a href="javascript:;" class="text-muted">Borrar Todas</a>
                    </div>

                    <div class="dropdown-body">

                        <!-- AQUI VAN LAS NOTIFICACIONES, ABAJO NOTIFICACION DE EJEMPLO -->
                        <!--<a href="javascript:;" class="dropdown-item">
                            <div class="icon">
                                <i data-feather="user-plus"></i>
                            </div>
                            <div class="content">
                                <p>Nuevo modelo registrado</p>
                                <p class="sub-text text-muted">2 sec</p>
                            </div>
                        </a>-->

                    </div>
                    <div class="dropdown-footer d-flex align-items-center justify-content-center">
                        <a href="javascript:;">Ver todas</a>
                    </div>
                </div>
            </li>
            <!-- Termino notificaciones -->

            <!-- Perfil de usuario -->
            <li class="nav-item dropdown nav-profile">

                <!-- Imagen perfil -->
                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ url(Auth::user()->profilePhotoUrlAttribute()) }}" alt="profile">
                </a>

                <div class="dropdown-menu" aria-labelledby="profileDropdown">

                    <div class="dropdown-header d-flex flex-column align-items-center">
                        <!-- Imagen perfil -->
                        <div class="figure mb-3">
                            <img src="{{ url(Auth::user()->profilePhotoUrlAttribute()) }}" alt="">
                        </div>

                        <!-- Datos perfil -->
                        <div class="info text-center">
                            <p class="name font-weight-bold mb-0">{{ Auth::user()->name }}</p>
                            <p class="email text-muted mb-3">{{ Auth::user()->email }}</p>
                        </div>
                    </div>

                    <div class="dropdown-body">
                        <ul class="profile-nav p-0 pt-3">
                            <!-- Opciones perfil -->
                            <li class="nav-item">
                                <a href="{{ route('user.perfil') }}" class="nav-link">
                                    <i data-feather="user"></i>
                                    <span>Perfil</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        <i data-feather="log-out"></i>
                                        <span>Desconectar</span>
                                    </a>
                                </form>
                            </li>

                        </ul>
                    </div>
                </div>
            </li>
            <!-- Termino perfil de usuario -->
        </ul>
    </div>
</nav>
