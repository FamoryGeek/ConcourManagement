@extends('layouts.admin')
@section('content')

<div class="app-container">

    <!-- App body starts -->
    <div class="app-body">

      <!-- Stats starts -->
      <div class="p-4 bg-primary mb-4 rounded-4">
        <div class="d-flex align-items-center flex-row flex-wrap">

          <!-- User details starts -->
          <img src="{{ URL::to('storage/photo/' .Auth::user()->photo)}}" class="img-5x rounded-circle" alt="Admin Dashboard">
          <div class="ms-3 text-white">
            <h5 class="mb-1">{{Auth::user()->name}}</h5>
            <h6 class="m-0 fw-light">UX Designer</h6>
          </div>
          <!-- User details ends -->

          <!-- User details starts -->
          <div class="d-flex gap-3 text-white ms-3">
            <div class="px-3 d-flex align-items-center border-start">
              <i class="bi bi-envelope-open fs-2 lh-1 me-2"></i>
              <div>
                <h6 class="mb-1">Email</h6>
                <p class="m-0 fw-light small">{{Auth::user()->email}}</p>
              </div>
            </div>
            <div class="px-3 d-flex align-items-center border-start">
              <i class="bi bi-phone fs-2 lh-1 me-2"></i>
              <div>
                <h6 class="mb-1">Contact</h6>
                <p class="m-0 fw-light small">{{Auth::user()->telephone}}</p>
              </div>
            </div>
            <div class="px-3 d-flex align-items-center border-start">
              <i class="bi bi-pin-map fs-2 lh-1 me-2"></i>
              <div>
                <h6 class="mb-1">Adresse</h6>
                <p class="m-0 fw-light small">{{Auth::user()->adresse}}</p>
              </div>
            </div>
          </div>
          <!-- User details ends -->

          <div class="ms-auto d-flex gap-2">
            <button type="button" class="btn btn-dark">
              Follow
            </button>
          </div>

        </div>
      </div>
      <!-- Stats ends -->

      <!-- Row starts -->
      <div class="row gx-4">
        <div class="col-xl-3 col-sm-6">
          <div class="card mb-4">
            <div class="card-body">
              <h2 class="mb-2 d-flex align-items-center justify-content-between">
                <div class="p-3 border border-dark rounded-5 d-flex">
                  <i class="bi bi-twitter-x fs-4 lh-1"></i>
                </div>
                <span>5690</span>
              </h2>
              <p class="m-0">
                Posts<span class="badge bg-primary-subtle float-end text-black">45%</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card mb-4">
            <div class="card-body">
              <h2 class="mb-2 d-flex align-items-center justify-content-between">
                <div class="p-3 border border-dark rounded-5 d-flex">
                  <i class="bi bi-twitter-x fs-4 lh-1"></i>
                </div>
                <span>3390</span>
              </h2>
              <p class="m-0">
                Shares<span class="badge bg-primary-subtle float-end text-black">55%</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card mb-4">
            <div class="card-body">
              <h2 class="mb-2 d-flex align-items-center justify-content-between">
                <div class="p-3 border border-dark rounded-5 d-flex">
                  <i class="bi bi-twitter-x fs-4 lh-1"></i>
                </div>
                <span>9990</span>
              </h2>
              <p class="m-0">
                Followers<span class="badge bg-primary-subtle float-end text-black">65%</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card mb-4 bg-primary text-white">
            <div class="card-body">
              <h2 class="mb-2 d-flex align-items-center justify-content-between">
                <div class="p-3 border border-white rounded-5 d-flex">
                  <i class="bi bi-twitter-x fs-4 lh-1"></i>
                </div>
                <span>2690</span>
              </h2>
              <p class="m-0">
                Following<span class="badge bg-white float-end text-black">75%</span>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-12 col-sm-12 col-12">
        <div class="card mb-4 card-height-350">
          <div class="card-header">
            <h5 class="card-title">Detail Personnelle</h5>
          </div>
          <div class="card-body">
              <!-- Row starts -->
              <div class="row gx-4">
                  <div class="col-sm-3 col-12">

                    <!-- Form field start -->
                    <form action="{{route("adminprofil.update")}}" method="POST" enctype="multipart/form-data">
                        @csrf

                            <div class="mb-3">
                            <label for="fullName" class="form-label"></label>
                            <div class="input-group">
                                <span class="input-group-text">
                                <i class="bi bi-person"></i>
                                </span>
                                <input type="text" name="name" class="form-control" id="fullName" placeholder="Name">
                            </div>
                            </div>
                            <!-- Form field end -->

                        </div>
                        <div class="col-sm-3 col-12">

                            <!-- Form field start -->
                            <div class="mb-3">
                            <label for="yourEmail" class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                <i class="bi bi-envelope"></i>
                                </span>
                                <input type="email"  name="email" class="form-control" id="yourEmail" placeholder="Email ID"
                                value="Email">
                            </div>
                            </div>
                            <!-- Form field end -->

                        </div>
                        <div class="col-sm-3 col-12">

                            <!-- Form field start -->
                            <div class="mb-3">
                            <label for="photo" class="form-label">photo</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                <i class="bi bi-file"></i>
                                </span>
                                <input type="file"  name="photo" class="form-control" id="photo"
                                placeholder="Photo">
                            </div>

                        </div> 
                    <!-- Form field end -->

                    <div class="col-12">

                        <!-- Form field start -->
                        <div class="mb-3">
                        <label for="adresse" class="form-label">adresse</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="bi bi-map"></i>
                            </span>
                            <input type="text"  name="adresse" class="form-control" id="adresse"
                            placeholder="adresse">
                        </div>

                    </div>

                  </div>
                  <div class="col-12">

                    <!-- Form field start -->
                    <div class="mb-3">
                      <label for="telephone" class="form-label">Telephone</label>
                      <div class="input-group">
                        <span class="input-group-text">
                          <i class="bi bi-phone"></i>
                        </span>
                        <input type="text"  name="telephone" class="form-control" id="birthDay" placeholder="">
                      </div>
                    </div>
                    <!-- Form field end -->
                  </div>

                  <div class="col-12">

                    <!-- Form field start -->
                    {{-- <div class="m-0">
                      <label class="form-label" for="abt">About</label>
                      <div class="input-group">
                        <span class="input-group-text">
                          <i class="bi bi-filter-circle"></i>
                        </span>
                        <textarea class="form-control" id="abt" rows="4"></textarea>
                      </div>
                    </div> --}}
                    <!-- Form field end -->

                  </div>

                </div><br>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
                <!-- Row ends -->
            <div id="trainings"></div>

          </div>
        </div>
      </div>

      
      <div class="row gx-4">
        <div class="col-xl-6 col-sm-6 col-12">
          <div class="card mb-4 card-height-350">
            <div class="card-header">
              <h5 class="card-title">Changer Mot de Passe</h5>
            </div>
            <div class="card-body">

                <div class="mb-3">
                    <label class="form-label" for="currentPwd">Actuel Mot de Passe <span
                        class="text-danger">*</span></label>
                    <div class="input-group">
                      <input type="password" id="currentPwd" placeholder="Enter Actuel Mot de Passe"
                        class="form-control">
                      <button class="btn btn-outline-secondary" type="button">
                        <i class="bi bi-eye text-black"></i>
                      </button>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label class="form-label" for="newPwd">Nouveau Mot de Passe<span
                        class="text-danger">*</span></label>
                    <div class="input-group">
                      <input type="password" id="newPwd" class="form-control"
                        placeholder="">
                      <button class="btn btn-outline-secondary" type="button">
                        <i class="bi bi-eye text-black"></i>
                      </button>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label class="form-label" for="confNewPwd">Confirmer nouveau mot de passe <span
                        class="text-danger">*</span></label>
                    <div class="input-group">
                      <input type="password" id="confNewPwd" placeholder="Confirmer nouveau mot de passe"
                        class="form-control">
                      <button class="btn btn-outline-secondary" type="button">
                        <i class="bi bi-eye text-black"></i>
                      </button>
                    </div>
                  </div>


            </div>
          </div>
        </div>
      </div>
      <!-- Row ends -->

    </div>
    <!-- App body ends -->

  </div>
@endsection
