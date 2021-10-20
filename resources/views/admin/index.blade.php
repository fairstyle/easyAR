<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>EasyAR</title>
        <link rel="stylesheet" href="http://easyar.test/css/theme.css">
        <link rel="shortcut icon" href="http://easyar.test/images/favicon.png" />
    </head>
    <body>
    <div class="main-wrapper">

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
                        <a href="pages/apps/chat.html" class="nav-link">
                            <i class="link-icon" data-feather="message-square"></i>
                            <span class="link-title">Modelos 3D</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="pages/apps/calendar.html" class="nav-link">
                            <i class="link-icon" data-feather="calendar"></i>
                            <span class="link-title">Codigos QR</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Termino Cuerpo Barra lateral Izquierda -->
        </nav>
        <!-- Termino Barra lateral Izquierda -->

        <!-- Barra Superior -->
        <div class="page-wrapper">

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

                        <li class="nav-item dropdown nav-messages">

                            <!-- Icono correo -->
                            <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="mail"></i>
                            </a>

                            <!-- Mensajes -->
                            <div class="dropdown-menu" aria-labelledby="messageDropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <p class="mb-0 font-weight-medium">9 Mensajes</p>
                                    <a href="javascript:;" class="text-muted">Borrar Todos</a>
                                </div>
                                <div class="dropdown-body">

                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="user">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Usuario 1</p>
                                                <p class="sub-text text-muted">2 min</p>
                                            </div>
                                            <p class="sub-text text-muted">Mensaje corto...</p>
                                        </div>
                                    </a>

                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="user">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Usuario 2</p>
                                                <p class="sub-text text-muted">30 min</p>
                                            </div>
                                            <p class="sub-text text-muted">Mensaje corto...</p>
                                        </div>
                                    </a>

                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="user">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Usuario 3</p>
                                                <p class="sub-text text-muted">1 hrs</p>
                                            </div>
                                            <p class="sub-text text-muted">Mensaje corto...</p>
                                        </div>
                                    </a>

                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="user">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Usuario 4</p>
                                                <p class="sub-text text-muted">2 hrs</p>
                                            </div>
                                            <p class="sub-text text-muted">Mensaje corto...</p>
                                        </div>
                                    </a>

                                    <a href="javascript:;" class="dropdown-item">
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
                                    </a>

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
                                    <p class="mb-0 font-weight-medium">6 Notificaciones</p>
                                    <a href="javascript:;" class="text-muted">Borrar Todas</a>
                                </div>

                                <div class="dropdown-body">

                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="user-plus"></i>
                                        </div>
                                        <div class="content">
                                            <p>Nuevo modelo registrado</p>
                                            <p class="sub-text text-muted">2 sec</p>
                                        </div>
                                    </a>

                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="gift"></i>
                                        </div>
                                        <div class="content">
                                            <p>Nueva orden registrada</p>
                                            <p class="sub-text text-muted">30 min</p>
                                        </div>
                                    </a>

                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="alert-circle"></i>
                                        </div>
                                        <div class="content">
                                            <p>Limite del servidor alcanzado!</p>
                                            <p class="sub-text text-muted">1 hrs</p>
                                        </div>
                                    </a>

                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="layers"></i>
                                        </div>
                                        <div class="content">
                                            <p>Aplicaciones listas para actualizar</p>
                                            <p class="sub-text text-muted">5 hrs</p>
                                        </div>
                                    </a>

                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="download"></i>
                                        </div>
                                        <div class="content">
                                            <p>Descarga completa</p>
                                            <p class="sub-text text-muted">6 hrs</p>
                                        </div>
                                    </a>

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
                                <img src="{{ Auth::user()->profile_photo_url }}" alt="profile">
                            </a>

                            <div class="dropdown-menu" aria-labelledby="profileDropdown">

                                <div class="dropdown-header d-flex flex-column align-items-center">
                                    <!-- Imagen perfil -->
                                    <div class="figure mb-3">
                                        <img src="{{ Auth::user()->profile_photo_url }}" alt="">
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
                                            <a href="{{ route('profile.show') }}" class="nav-link">
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
            <!-- partial -->

            <!-- Contenido de pagina -->
            <div class="page-content">
            </div>

            <!-- Pie de pagina -->
            <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
                <p class="text-muted text-center text-md-left">Copyright © 2021 <a href="" target="_blank">Andrw</a>. Todos los derechos reservados</p>
            </footer>

        </div>
        <!-- Termino Barra superior -->
    </div>

    <script src="http://easyar.test/js/theme.js"></script>
    <!-- ICONOS -->
    <script src="http://easyar.test/js/feather.min.js"></script>

    </body>
</html>
