<x-app-layout>

    <link rel="stylesheet" href="{{ asset('theme/css/sweetalert2.min.css') }}">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Códigos QR</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a type="button" class="btn btn-info btn-icon-text text-white mb-2 mb-md-0" href="{{ route('qrcode.nuevo') }}">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Nuevo Código QR
            </a>
        </div>
    </div>

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">CRUD</a></li>
            <li class="breadcrumb-item active" aria-current="page">Códigos QR</li>
        </ol>
    </nav>

    @if (session('created'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Perfecto!</strong> Creaste un nuevo Código QR.
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
                                @foreach ($qrs as $qr)
                                    <tr>
                                        <th>{{$qr->id}}</th>
                                        <td>{{$qr->name}}</td>
                                        <td>{{$qr->desc}}</td>
                                        <td>{{$qr->uuid}}</td>
                                        <td>{{$qr->created_at}}</td>
                                        <td>
                                            <button onclick="borrarImagen(this)" url="{{ route('qrcode').'/delete/'.$qr->id }}" type="button" class="btn btn-danger btn-icon">
                                                <i data-feather="trash"></i>
                                            </button>

                                            <button onclick="abrirImagen(this)" url="{{ url($qr->qrFoto()) }}" target="_blank" type="button" class="btn btn-warning text-white btn-icon">
                                                <i data-feather="image"></i>
                                            </button>

                                            <button onclick="cargarQR(this)" uuid="{{$qr->uuid}}" url="{{ url($qr->qrCode()) }}" imprimir="{{ route('qrcode').'/imprimir/'.$qr->id }}" type="button" class="btn btn-info text-white btn-icon">
                                                <i data-feather="printer"></i>
                                            </button>

                                            <button onclick="descargarQR(this)" url="{{ route('qrcode').'/descargar/'.$qr->id }}" type="button" class="btn btn-success text-white btn-icon">
                                                <i data-feather="download"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
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
