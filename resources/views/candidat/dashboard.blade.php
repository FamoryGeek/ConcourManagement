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
                  <div class="p-3">

                    <!-- Row starts -->
                    <div class="row g-4">
                      <div class="col-sm-6 col-12">
                        <div class="card bg-primary">
                          <div class="card-body text-white">
                            <div class="d-flex mb-2">
                              <div class="icon-box md bg-white rounded-5 me-3">
                                <i class="bi bi-box fs-4 text-primary"></i>
                              </div>
                              <div class="d-flex flex-column">
                                <h2 class="m-0 lh-1">40k</h2>
                                <p class="m-0 opacity-50">Salaries</p>
                              </div>
                            </div>
                            <div class="m-0">
                              <div class="progress thin mb-2 bg-secondary">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <p class="m-0 small fw-light">30 higher than last month.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-12">
                        <div class="card bg-info">
                          <div class="card-body text-white">
                            <div class="d-flex mb-2">
                              <div class="icon-box md bg-white rounded-5 me-3">
                                <i class="bi bi-box fs-4 text-info"></i>
                              </div>
                              <div class="d-flex flex-column">
                                <h2 class="m-0 lh-1">10k</h2>
                                <p class="m-0 opacity-50">Food</p>
                              </div>
                            </div>
                            <div class="m-0">
                              <div class="progress thin mb-2 bg-secondary">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <p class="m-0 small fw-light">50 higher than last month.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-12">
                        <div class="card bg-danger">
                          <div class="card-body text-white">
                            <div class="d-flex mb-2">
                              <div class="icon-box md bg-white rounded-5 me-3">
                                <i class="bi bi-box fs-4 text-danger"></i>
                              </div>
                              <div class="d-flex flex-column">
                                <h2 class="m-0 lh-1">10k</h2>
                                <p class="m-0 opacity-50">Rents</p>
                              </div>
                            </div>
                            <div class="m-0">
                              <div class="progress thin mb-2  bg-secondary">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <p class="m-0 small fw-light">30 higher than last month.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-12">
                        <div class="card bg-success">
                          <div class="card-body text-white">
                            <div class="d-flex mb-2">
                              <div class="icon-box md bg-white rounded-5 me-3">
                                <i class="bi bi-box fs-4 text-success"></i>
                              </div>
                              <div class="d-flex flex-column">
                                <h2 class="m-0 lh-1">20k</h2>
                                <p class="m-0 opacity-50">Transport</p>
                              </div>
                            </div>
                            <div class="m-0">
                              <div class="progress thin mb-2 bg-secondary">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <p class="m-0 small fw-light">20 higher than last month.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Row ends -->

                  </div>
                </div>
              </div>
              <!-- Row ends -->

            </div>
          </div>
        </div>
      </div>
@endsection
