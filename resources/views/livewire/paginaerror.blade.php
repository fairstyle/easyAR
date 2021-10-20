<x-guest-layout>

    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">

            <div class="row w-100 mx-0 auth-page">
                <div class="col-md-8 col-xl-6 mx-auto d-flex flex-column align-items-center">
                    <img src="{{ asset('images/error.svg') }}" class="img-fluid mb-2" alt="error">
                    <h1 class="font-weight-bold mb-22 mt-2 tx-80 text-muted">{{$codigo}}</h1>
                    <h4 class="mb-2">{{$titulo}}</h4>
                    <h6 class="text-muted mb-3 text-center">{{$desc}}</h6>
                    <a href="{{ route('dashboard') }}" class="btn btn-primary">Volver al inicio</a>
                </div>
            </div>

        </div>
    </div>

</x-guest-layout>
