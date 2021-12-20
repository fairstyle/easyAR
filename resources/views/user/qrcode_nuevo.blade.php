<x-app-layout>
    <link rel="stylesheet" href="{{ asset('theme/css/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/bootstrap-colorpicker.min.css') }}">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Códigos QR</h4>
        </div>
    </div>

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">CRUD</a></li>
            <li class="breadcrumb-item"><a href="{{ route('qrcode') }}">Códigos QR</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nuevo</li>
        </ol>
    </nav>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{ route('qrcode.nuevo_post') }}">
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
                            <label class="col-form-label">Descripción</label>
                        </div>
                        <div class="col-lg-8">
                            <textarea id="desc" name="desc" class="form-control" maxlength="100" rows="8" placeholder="Descripción con un limite de 100 caracteres." required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Institución</label>
                        </div>
                        <div class="col-lg-8">
                                <select name="inst" id="inst">
                                    @foreach($instituciones as $institucion)
                                        <option value="{{$institucion->id}}">{{$institucion->name}}</option>
                                    @endforeach
                                </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Color</label>
                        </div>
                        <div class="col-lg-8">
                            <div id="color_picker" class="input-group mb-2" data-color="rgb(0, 0, 0)"
                                 title="Using data-color attribute in the colorpicker element">
                                <input type="text" id="color_picker" name="color_picker" class="form-control input-lg"/>
                                <span class="input-group-append">
                                    <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Color Degrades</label>
                        </div>
                        <div class="col-lg-8">
                            <div id="color_picker2" class="input-group mb-2" data-color="rgb(0, 0, 0)"
                                 title="Using data-color attribute in the colorpicker element">
                                <input type="text" id="color_picker2" name="color_picker2" class="form-control input-lg"/>
                                <span class="input-group-append">
                                    <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                </span>
                            </div>
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Imagen</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="card">
                                <input required type="file" id="dropify" name="imagenqr" class="border" data-allowed-file-extensions="jpg jpeg png svg gif"/>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block btn-icon-text mb-2 mb-md-0">
                        <i class="btn-icon-prepend" data-feather="save"></i>
                        Nuevo QR
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('theme/js/dropify.min.js') }}" defer></script>
    <script src="{{ asset('theme/js/bootstrap-maxlength.min.js') }}" defer></script>
    <script src="{{ asset('theme/js/bootstrap-colorpicker.min.js') }}" defer></script>
    <script src="{{ asset('theme/js/app/dropify.js') }}" defer></script>

</x-app-layout>
