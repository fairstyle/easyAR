<x-app-layout>

    <link rel="stylesheet" href="{{ asset('theme/css/dropify.min.css') }}">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Instituciones</h4>
        </div>
    </div>

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">CRUD</a></li>
            <li class="breadcrumb-item"><a href="{{ route('institucion') }}">Instituciones</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nuevo</li>
        </ol>
    </nav>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{ route('institucion.nuevo_post') }}">
                    @csrf

                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Nombre</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" value="" name="name" id="name" type="text" maxlength="20" placeholder="Nombre" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Imagen</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="card">
                                <input required type="file" id="dropify" name="imagenins" class="border" data-allowed-file-extensions="jpg jpeg png svg gif"/>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block btn-icon-text mb-2 mb-md-0">
                        <i class="btn-icon-prepend" data-feather="save"></i>
                        Nueva Institución
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('theme/js/dropify.min.js') }}" defer></script>
    <script src="{{ asset('theme/js/bootstrap-maxlength.min.js') }}" defer></script>
    <script src="{{ asset('theme/js/app/dropify.js') }}" defer></script>


</x-app-layout>
