<x-app-layout>

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin panel</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.roles') }}">Roles</a></li>
            <li class="breadcrumb-item active" aria-current="page"> {{ $rol->name }} ( {{ $rol->id }} )</li>
        </ol>
    </nav>

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Roles | ({{$rol->name}})</h6>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        @foreach ($users as $u)
                            <tr>
                                <th>{{$u->id}}</th>
                                <td class="py-1">
                                    <img src="{{ url( $u->profilePhotoUrlAttribute()) }}" alt="profile">
                                </td>
                                <td>{{$u->name}}</td>
                                <td>{{$u->email}}</td>
                            </tr>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
