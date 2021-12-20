<x-guest-layout>
    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">
            <div class="row w-100 mx-0 auth-page">
                <div class="col-md-8 col-xl-6 mx-auto">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-4 pr-md-0">
                                <div class="auth-left-wrapper" style="background-image: url('https://images.unsplash.com/photo-1596265371388-43edbaadab94?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=687&q=10')">
                                </div>
                            </div>
                            <div class="col-md-8 pl-md-0">
                                <div class="auth-form-wrapper px-4 py-5">
                                    <a href="#" class="noble-ui-logo d-block mb-2">Easy<span>AR</span></a>
                                    <h5 class="text-muted font-weight-normal mb-4">Crea tu cuenta.</h5>
                                    <form class="forms-sample" method="POST" action="{{ route('register') }}">
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
                                            <label for="name">Nombre</label>
                                            <input type="text" class="form-control" id="name" name="name" autocomplete="name" placeholder="Nombre" value="{{old('name')}}" autofocus required>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Correo</label>
                                            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Correo" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="password">Contraseña</label>
                                            <input type="password" class="form-control" id="password" name="password" autocomplete="new-password" placeholder="Password" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="password_confirmation">Confirmar contraseña</label>
                                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" autocomplete="current-password" required>
                                        </div>

                                        <div style="overflow-y: hidden;">
                                            <div style="float: left;" class="form-check form-check-flat form-check-primary">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="terms" id="terms">
                                                </label>
                                            </div>
                                            {!! __('Acepto los :terms_of_service y <br> :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank" href="'.route('login').'">'.__('Términos de servicio').'</a>',
                                                    'privacy_policy' => '<a target="_blank" href="'.route('login').'">'.__('Política de privacidad').'</a>',
                                            ]) !!}

                                        </div>

                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">
                                                Registrarme
                                            </button>
                                        </div>
                                        <a href="{{ route('login') }}" class="d-block mt-3 text-muted">Ya tienes cuenta? Conectate</a>
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
