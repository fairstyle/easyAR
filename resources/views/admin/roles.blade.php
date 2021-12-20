<x-app-layout>

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Roles</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
        </div>
    </div>

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin panel</a></li>
            <li class="breadcrumb-item active" aria-current="page">Roles</li>
        </ol>
    </nav>

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Roles</h6>
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
                        @foreach ($roles as $rol)
                            <tr>
                                <th>{{$rol->id}}</th>
                                <td>{{$rol->name}}</td>
                                <td>{{$rol->guard_name}}</td>
                                <td>
                                    <button onclick="goTo(this);" rol_id="{{$rol->id}}" type="button" class="btn btn-primary btn-icon">
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
        function goTo(yo){
            window.location.href = "{!! route('admin.roles') !!}/"+yo.getAttribute('rol_id');
        }
    </script>
</x-app-layout>
