<x-app-layout>

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Permisos</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
        </div>
    </div>

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin panel</a></li>
            <li class="breadcrumb-item active" aria-current="page">Permisos</li>
        </ol>
    </nav>

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Permisos</h6>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Guardian</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($permisos as $permiso)
                                <tr>
                                    <th>{{$permiso->id}}</th>
                                    <td>{{$permiso->name}}</td>
                                    <td>{{$permiso->guard_name}}</td>
                                    <td>
                                        <button onclick="goTo(this);" url="{{ route('admin.permisos').'/'.$permiso->id }}" type="button" class="btn btn-primary btn-icon">
                                            <i data-feather="align-justify"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        function goTo(element){
            window.location.href = element.getAttribute('url');
        }
    </script>
</x-app-layout>
