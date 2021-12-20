<x-app-layout>

    <link rel="stylesheet" href="{{ asset('theme/css/sweetalert2.min.css') }}">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Modelos 3D</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a type="button"  class="disabled btn btn-info btn-icon-text text-white mb-2 mb-md-0" href="{{ route('qrcode.nuevo') }}">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Nuevo Modelo 3D
            </a>
        </div>
    </div>

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">CRUD</a></li>
            <li class="breadcrumb-item active" aria-current="page">Modelos 3D</li>
        </ol>
    </nav>

    @if (session('created'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Perfecto!</strong> Creaste una nuevo Modelo 3D.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        {{session(['created' => false])}}
    @endif

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>UUID</th>
                            <th>Creado</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('theme/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('theme/js/app/qrcode.js') }}"></script>

</x-app-layout>
