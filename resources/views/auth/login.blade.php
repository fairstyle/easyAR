<x-guest-layout>

    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">
            <div class="row w-100 mx-0 auth-page">
                <div class="col-md-8 col-xl-6 mx-auto">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-4 pr-md-0">
                                <div class="auth-left-wrapper">

                                </div>
                            </div>
                            <div class="col-md-8 pl-md-0">
                                <div class="auth-form-wrapper px-4 py-5">
                                    <a href="#" class="noble-ui-logo d-block mb-2">Easy<span>AR</span></a>
                                    <h5 class="text-muted font-weight-normal mb-4">Bienvenido! Conectate con tu cuenta.</h5>

                                    @if (session('status'))
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <form class="forms-sample" method="POST" action="{{ route('login') }}">
                                        @csrf

                                        @if ($errors->any())
                                            <div>
                                                <div class="text-danger-muted"> Whoops! Algo salio mal.</div>

                                                <ul class="text-danger-muted">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="email">Correo</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{old('email')}}" required autofocus>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Contraseña</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" autocomplete="current-password" required>
                                        </div>

                                        <div class="form-check form-check-flat form-check-primary">
                                            <label for="remember_me" class="form-check-label">
                                                <input type="checkbox" id="remember_me" name="remember" class="form-check-input">
                                                Recuérdame
                                            </label>
                                        </div>

                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">
                                                Conectar
                                            </button>

                                            <button type="button" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0" href="{{ route('password.request') }}">
                                                <i class="btn-icon-prepend" data-feather="twitter"></i>
                                                Recuperar contraseña
                                            </button>
                                        </div>

                                        <a href="{{ route('register') }}" class="d-block mt-3 text-muted">No tienes una cuenta? Registrate aquí</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-guest-layout>
