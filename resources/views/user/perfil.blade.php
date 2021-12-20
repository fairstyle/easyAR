<x-app-layout>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{ route('profile.update') }}">
                    @csrf

                    <h4 class="card-title">Actualizar perfil</h4>
                    <div class="profile-header mb-2">
                        <div class="cover">
                            <div class="cover-body d-flex justify-content-between align-items-center">
                                <img id="imgPerfil" style="height: 128px;width: 128px;" class="profile-pic rounded" src="{{ url(Auth::user()->profilePhotoUrlAttribute(128)) }}" alt="profile">
                            </div>
                        </div>
                    </div>

                    <input name="imagenPerfil" id="imagenPerfil" class="d-none" accept="image/*" type="file" >
                    <button id="bimagenPerfil" class="btn btn-primary mb-2" type="button">
                        <i class="btn-icon-prepend" data-feather="image"></i>
                        Cargar Imagen
                    </button>

                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Nombre</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" maxlength="50" value="{{ Auth::user()->name }}" name="name" id="name" type="text" placeholder="Nombre">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Correo</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" value="{{ Auth::user()->email }}" disabled type="text">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-8">
                            <button type="submit" class="btn btn-success btn-block btn-icon-text mb-2 mb-md-0">
                                <i class="btn-icon-prepend" data-feather="save"></i>
                                Actualizar datos
                            </button>
                        </div>
                    </div>

                    @if (session('profile_updated'))
                    <div class="form-group row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-8">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Perfecto!</strong> Actualizaste tus datos.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    {{session(['profile_updated' => false])}}
                    @endif

                </form>
            </div>
        </div>
    </div>

    @php $token = Auth::user()->tokens @endphp

    @if (count($token) < 1)
        @role('super-admin')
        <div class="col-lg-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body text-center">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('admin.crear_token') }}">
                        @csrf

                        <h4 class="card-title">Generar Token API</h4>

                        <button type="submit" class="btn btn-warning btn-block btn-icon-text mb-2 mb-md-0">
                            <i class="btn-icon-prepend" data-feather="save"></i>
                            Generar token
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endrole
    @else
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Token API</h4>

                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Nombre token</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" disabled maxlength="20" value="API" name="name" id="name" type="text" placeholder="Nombre token">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Token (Hash256)</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" disabled maxlength="20" value="{{ $token[0]->token }}" name="name" id="name" type="text" placeholder="Nombre token">
                        </div>
                    </div>

                    @if(Illuminate\Support\Facades\Cache::has('easyAR_token_API_plaintext'))
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Token Text (Cache Temporal)</label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" disabled maxlength="20" value="{{Illuminate\Support\Facades\Cache::get('easyAR_token_API_plaintext')}}" name="name" id="name" type="text" placeholder="Nombre token">
                            </div>
                        </div>
                    @endif

                    <div class="form-group row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-8">
                            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.eliminar_token') }}">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-block btn-icon-text mb-2 mb-md-0">
                                    <i class="btn-icon-prepend" data-feather="trash"></i>
                                    Eliminar Token
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-8">
                            @if(Illuminate\Support\Facades\Cache::has('easyAR_token_API_plaintext'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    Se recomienda guardar el <strong>Token Text</strong> ya que tiene una duración de 10 minutos, despues desaparecera.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endif
    <script src="{{ asset('theme/js/bootstrap-maxlength.min.js') }}" defer></script>
    <script src="{{ asset('theme/js/app/bootstrap-maxlength.js') }}" defer></script>

</x-app-layout>
