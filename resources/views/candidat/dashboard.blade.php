@extends('layouts.candidat')
@section('content')
    <!-- Row starts -->
    <div class="row gx-4">
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="card-body">

                    <!-- Row starts -->
                    <div class="row justify-content-center align-items-end">
                        <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
                            <div class="p-3">
                                <img src="{{ asset('assets/images/login2.svg') }}" alt="Contact Us" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-sm-12 col-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="modal position-static d-block shade-light rounded-3" tabindex="-1"
                                        role="dialog" id="modalPayment">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">

                                                <div class="modal-body p-5 text-center">
                                                    @if (session('postuler') === true)
                                                    <h1 class="display-4">
                                                        <i class="bi bi-check-circle text-success"></i>
                                                    </h1>


                                                        <h4 class="text-success">Votre candidature a été envoyé</h4>
                                                        <p>Votre dossier est en cours de traitement vous serrez informé pour la suite.</p>
                                                        <button type="button" class="btn btn-lg btn-danger w-100"
                                                            data-bs-dismiss="modal">
                                                            <a href="{{ route('candidat.annuler') }}"  class="text-white">Annuler sa candidature</a>
                                                        </button>
                                                        @else
                                                        <h1 class="display-4">
                                                            <i class="bi bi-info-circle text-info"></i>
                                                        </h1>
                                                        <h4 class="text-info">Postuler au corp: </h4>
                                                        <p>Cliquez sur le button en bas pour postuler</p>
                                                        <button type="button" class="btn btn-lg btn-primary w-100"
                                                            data-bs-dismiss="modal">
                                                            <a href="{{ route('candidat.postuler') }}" class="text-white">Postuler</a>
                                                        </button>
                                                        @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-xl-8 col-lg-8 col-sm-12 col-12">
                            <div class="alert alert-info alert-dismissible alert-alt fade show ">
                                <strong>Ce fichier est sous format (pdf)!</strong>.
                            </div>
                            <div class="p-3">

                                <!-- Row starts -->

                                <!-- Row ends -->

                            </div>
                        </div> --}}
                    </div>
                    <!-- Row ends -->

                </div>
            </div>
        </div>
    </div>
@endsection
