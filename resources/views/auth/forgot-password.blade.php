<x-guest-layout>
    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">
            <div class="row w-100 mx-0 auth-page">
                <div class="col-md-8 col-xl-6 mx-auto">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-4 pr-md-0">
                                <div class="auth-left-wrapper" style="background-image:url('https://images.unsplash.com/photo-1618401479427-c8ef9465fbe1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1443&q=10')">
                                </div>
                            </div>
                            <div class="col-md-8 pl-md-0">
                                <div class="auth-form-wrapper px-4 py-5">
                                    <a href="#" class="noble-ui-logo d-block mb-2">Easy<span>AR</span></a>
                                    <h5 class="text-muted font-weight-normal mb-4">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</h5>
                                    <form class="forms-sample" method="POST" action="{{ route('password.email') }}">
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
                                            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Correo" required>
                                        </div>

                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">
                                                Recuperar
                                            </button>
                                        </div>

                                        <a href="{{ route('dashboard') }}" class="d-block mt-3 text-muted">Volver al inicio</a>
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
