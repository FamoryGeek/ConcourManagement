@extends('layouts.admin')
@section('content')
    <!-- Row starts -->
    <div class="row gx-4">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card mb-4 bg-primary">
                <div class="card-body">
                    <div class="m-0 text-white">
                        <div class="fw-semibold mb-3">Cadre</div>
                        <div class="">
                            <h2 class="m-0">300</h2>

                            <i class="bi bi-border-all display-3 opacity-25 position-absolute end-0 top-0 me-2"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card mb-4 bg-primary">
                <div class="card-body">
                    <div class="m-0 text-white">
                        <div class="fw-semibold mb-3">Corp</div>
                        <div class="">
                            <h2 class="m-0">600</h2>
                            <i class="bi bi-person display-3 opacity-25 position-absolute end-0 top-0 me-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card mb-4 bg-primary">
                <div class="card-body">
                    <div class="m-0 text-white">
                        <div class="fw-semibold mb-3">Specialité</div>
                        <div class="">
                            <h2 class="m-0">900</h2>
                            <i class="bi bi-award display-3 opacity-25 position-absolute end-0 top-0 me-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card mb-4 bg-primary">
                <div class="card-body">
                    <div class="m-0 text-white">
                        <div class="fw-semibold mb-3">Candidat</div>
                        <div class="">
                            <h2 class="m-0">200</h2>
                            {{-- <span class="badge bg-light-subtle text-danger small mb-2">
                                <i class="bi bi-exclamation-circle-fill me-1 text-warning"></i>7 orders cancelled
                            </span> --}}

                            <i class="bi bi-person-badge display-3 opacity-25 position-absolute end-0 top-0 me-2"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row ends -->

    <!-- Row starts -->

    <!-- Row ends -->
@endsection
