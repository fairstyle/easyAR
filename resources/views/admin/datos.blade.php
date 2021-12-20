<x-app-layout>
    <div class="row">
        <div class="col-lg-7 col-xl-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title mb-2">Modelos Mensuales</h6>
                    <p class="text-muted mb-4">Cantidad de modelos subidos a la plataforma por mes.</p>
                    <div class="monthly-sales-chart-wrapper">
                        <canvas id="modelosMensualesGrafico"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-xl-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title mb-5">Cloud storage</h6>
                    <div id="progressbar1" class="mx-auto"></div>
                    <div class="row mt-4 mb-3">
                        <div class="col-6 d-flex justify-content-end">
                            <div>
                                <label class="d-flex align-items-center justify-content-end tx-10 text-uppercase font-weight-medium">Total storage <span class="p-1 ml-1 rounded-circle bg-primary-muted"></span></label>
                                <h5 class="font-weight-bold mb-0 text-right">8TB</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label class="d-flex align-items-center tx-10 text-uppercase font-weight-medium"><span class="p-1 mr-1 rounded-circle bg-primary"></span> Used storage</label>
                                <h5 class="font-weight-bold mb-0">6TB</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('theme/js/progressbar.min.js') }}" ></script>
    <script src="{{ asset('theme/js/Chart.min.js') }}" ></script>
    <script src="{{ asset('theme/js/app/admin-datos.js') }}" defer></script>
</x-app-layout>
