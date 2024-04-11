@extends('layouts.candidat')
@section('content')
 <!-- Row starts -->
 <div class="row gx-4">
    <div class="col-xl-3 col-sm-6 col-12">
      <div class="card mb-4 bg-primary">
        <div class="card-body">
          <div class="m-0 text-white">
            <div class="fw-semibold mb-3">New Orders</div>
            <div class="position-relative">
              <h2 class="m-0">300</h2>
              <span class="badge bg-secondary-subtle text-body small mb-2">
                <i class="bi bi-exclamation-circle-fill me-1 text-warning"></i>8 new orders
              </span>
              <div class=""><span class="badge bg-danger me-1">+28%</span>Compared to
                last week</div>
              <i class="bi bi-box-seam display-3 opacity-25 position-absolute end-0 top-0 me-2"></i>
            </div>
            <div class="mt-3">
              <div class="small">Last updated on <span class="opacity-50">Jan 10, 6:30:59 AM</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
      <div class="card mb-4 bg-primary">
        <div class="card-body">
          <div class="m-0 text-white">
            <div class="fw-semibold mb-3">Orders Delivered</div>
            <div class="position-relative">
              <h2 class="m-0">600</h2>
              <span class="badge bg-secondary-subtle text-body small mb-2">
                <i class="bi bi-exclamation-circle-fill me-1 text-warning"></i>4 orders delivered
              </span>
              <div class=""><span class="badge bg-danger me-1">+20%</span>Compared to
                last week</div>
              <i class="bi bi-bar-chart display-3 opacity-25 position-absolute end-0 top-0 me-2"></i>
            </div>
            <div class="mt-3">
              <div class="small">Last updated on <span class="opacity-50">Jan 12, 8:20:30 AM</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
      <div class="card mb-4 bg-primary">
        <div class="card-body">
          <div class="m-0 text-white">
            <div class="fw-semibold mb-3">Orders Pending</div>
            <div class="position-relative">
              <h2 class="m-0">900</h2>
              <span class="badge bg-secondary-subtle text-body small mb-2">
                <i class="bi bi-exclamation-circle-fill me-1 text-warning"></i>5 pending orders
              </span>
              <div class=""><span class="badge bg-danger me-1">+36%</span>Compared to
                last week</div>
              <i class="bi bi-sticky display-3 opacity-25 position-absolute end-0 top-0 me-2"></i>
            </div>
            <div class="mt-3">
              <div class="small">Last updated on <span class="opacity-50">Jan 14, 9:45:35 AM</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
      <div class="card mb-4 bg-primary">
        <div class="card-body">
          <div class="m-0 text-white">
            <div class="fw-semibold mb-3">Orders Cancelled</div>
            <div class="position-relative">
              <h2 class="m-0">200</h2>
              <span class="badge bg-light-subtle text-danger small mb-2">
                <i class="bi bi-exclamation-circle-fill me-1 text-warning"></i>7 orders cancelled
              </span>
              <div class=""><span class="badge bg-danger me-1">+39%</span>Compared to last week</div>
              <i class="bi bi-wallet2 display-3 opacity-25 position-absolute end-0 top-0 me-2"></i>
            </div>
            <div class="mt-3">
              <div class="small">Last updated on <span class="opacity-50">Jan 18, 9:29:59 AM</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Row ends -->

  <!-- Row starts -->
  <div class="row gx-4">
    <div class="col-sm-12">
      <!-- Card starts -->
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-title">Orders Summary</h5>
        </div>
        <div class="card-body">

          <div class="graph-body auto-align-graph">
            <div id="orders"></div>
          </div>

        </div>
      </div>
      <!-- Card ends -->

    </div>
  </div>
  <!-- Row ends -->
@endsection
