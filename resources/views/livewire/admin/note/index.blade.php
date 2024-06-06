<div>
    <div class="row gx-4">
        <div class="col-xl-4 col-sm-6 col-12">
            <div class="card mb-4 bg-primary">
                <div class="card-body text-white">
                    <div class="d-flex align-items-center">
                        <div class="p-2 border border-white rounded-circle me-3">
                            <div class="icon-box md bg-white rounded-5">
                                <i class="bi bi-menu-button-wide fs-4 text-primary"></i>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <h2 class="m-0 lh-1">1</h2>
                            <p class="m-0 opacity-50">Gestion Notes</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-1">
                        <a class="text-white" href="{{ route('note.create') }}">
                            <span>Ajouter une note</span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                        {{-- <div class="text-end">
                            <p class="mb-0 text-warning">+20%</p>
                            <span class="text-white small">this month</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-2 border border-info rounded-circle me-3">
                            <div class="icon-box md bg-info-subtle rounded-5">
                                <i class="bi bi-menu-button-wide fs-4 text-info"></i>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <h2 class="lh-1">2</h2>
                            <p class="m-0 opacity-50">Gestion Notes</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-1">
                        <a class="text-info" href="{{ route('note.show') }}">
                            <span>Voir les notes</span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                        {{-- <div class="text-end">
                            <p class="mb-0 text-danger">+40%</p>
                            <span class="badge bg-danger-subtle text-danger small">this month</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 col-12">
          <div class="card mb-4">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="p-2 border border-danger rounded-circle me-3">
                  <div class="icon-box md bg-danger-subtle rounded-5">
                    <i class="bi bi-menu-button-wide fs-4 text-danger"></i>
                  </div>
                </div>
                <div class="d-flex flex-column">
                  <h2 class="lh-1">3</h2>
                  <p class="m-0 opacity-50">Gestion Notes</p>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-between mt-1">
                <a class="text-danger" href="javascript:void(0);">
                  <span>Modifier une note</span>
                  <i class="bi bi-arrow-right ms-2"></i>
                </a>
                {{-- <div class="text-end">
                  <p class="mb-0 text-danger">+30%</p>
                  <span class="badge bg-danger-subtle text-danger small">this month</span>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
         {{--<div class="col-xl-3 col-sm-6 col-12">
          <div class="card mb-4">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="p-2 border border-danger rounded-circle me-3">
                  <div class="icon-box md bg-danger-subtle rounded-5">
                    <i class="bi bi-box fs-4 text-danger"></i>
                  </div>
                </div>
                <div class="d-flex flex-column">
                  <h2 class="lh-1">9900</h2>
                  <p class="m-0 opacity-50">Themes</p>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-between mt-1">
                <a class="text-danger" href="javascript:void(0);">
                  <span>View All</span>
                  <i class="bi bi-arrow-right ms-2"></i>
                </a>
                <div class="text-end">
                  <p class="mb-0 text-danger">+60%</p>
                  <span class="badge bg-danger-subtle text-danger small">this month</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card mb-4 bg-primary">
            <div class="card-body text-white">
              <div class="d-flex align-items-center">
                <div class="p-2 border border-white rounded-circle me-3">
                  <div class="icon-box md bg-white rounded-5">
                    <i class="bi bi-box fs-4 text-primary"></i>
                  </div>
                </div>
                <div class="d-flex flex-column">
                  <h2 class="m-0 lh-1">8800</h2>
                  <p class="m-0 opacity-50">Payments</p>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-between mt-1">
                <a class="text-white" href="javascript:void(0);">
                  <span>View All</span>
                  <i class="bi bi-arrow-right ms-2"></i>
                </a>
                <div class="text-end">
                  <p class="mb-0 text-warning">+20%</p>
                  <span class="text-white small">this month</span>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
    </div>
</div>
