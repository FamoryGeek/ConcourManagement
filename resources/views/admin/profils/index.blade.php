@extends('layouts.admin')
@section('content')
<div class="app-container">

<!-- App body starts -->
<div class="app-body">

<!-- Stats starts -->
<div class="p-4 bg-primary mb-4 rounded-4">
<div class="d-flex align-items-center flex-row flex-wrap">

<!-- User details starts -->
<img src="{{ URL::to('storage/photo/' . Auth::user()->photo) }}" class="img-5x rounded-circle"
alt="Admin Dashboard">
<div class="ms-3 text-white">
<h5 class="mb-1">{{ Auth::user()->name }}</h5>
<h6 class="m-0 fw-light">Développeur</h6>
</div>
<!-- User details ends -->

<!-- User details starts -->
<div class="d-flex gap-3 text-white ms-3">
<div class="px-3 d-flex align-items-center border-start">
    <i class="bi bi-envelope-open fs-2 lh-1 me-2"></i>
    <div>
        <h6 class="mb-1">Email</h6>
        <p class="m-0 fw-light small">{{ Auth::user()->email }}</p>
    </div>
</div>
<div class="px-3 d-flex align-items-center border-start">
    <i class="bi bi-phone fs-2 lh-1 me-2"></i>
    <div>
        <h6 class="mb-1">Contact</h6>
        <p class="m-0 fw-light small">{{ Auth::user()->telephone }}</p>
    </div>
</div>
<div class="px-3 d-flex align-items-center border-start">
    <i class="bi bi-pin-map fs-2 lh-1 me-2"></i>
    <div>
        <h6 class="mb-1">Adresse</h6>
        <p class="m-0 fw-light small">{{ Auth::user()->adresse }}</p>
    </div>
</div>
</div>
<!-- User details ends -->

<div class="ms-auto d-flex gap-2">
<button type="button" class="btn btn-dark">
    Active
</button>
</div>

</div>
</div>
<!-- Stats ends -->

<!-- Row starts -->

<div class="col-xl-12 col-sm-12 col-12">
<div class="card mb-4 card-height-350">
<div class="card-header">
<h5 class="card-title">Detail Personnelle</h5>
</div>
<div class="card-body">
<!-- Row starts -->



<!-- Form field start -->
<form action="{{ route('adminprofil.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row gx-4">
        <div class="col-sm-6 col-12">
            <div class="mb-3">
                <label for="fullName" class="form-label">Nom</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-person"></i>
                    </span>
                    <input type="text" name="name" value="{{ Auth::user()->name }}"
                        class="form-control" id="fullName" placeholder="Name">
                </div>
            </div>
            <!-- Form field end -->
        </div>
        <div class="col-sm-6 col-12">
            <div class="mb-3">
                <label for="yourEmail" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-envelope"></i>
                    </span>
                    <input type="email" name="email" value="{{ Auth::user()->email }}"
                        class="form-control" id="yourEmail" placeholder="Email ID" value="Email">
                </div>
            </div>
        </div>
    </div>
    <div class="row gx-4">
        <div class="col-sm-6 col-12">
            <div class="mb-3">
                <label for="adresse" class="form-label">adresse</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-map"></i>
                    </span>
                    <input type="text" name="adresse" class="form-control" id="adresse"
                        placeholder="adresse" value="{{ Auth::user()->adresse }}">
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-12">
            <div class="mb-3">
                <label for="telephone" class="form-label">Telephone</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-phone"></i>
                    </span>
                    <input type="text" name="telephone" class="form-control" id="birthDay"
                        placeholder="telephone" value="{{ Auth::user()->telephone }}">
                </div>
            </div>
        </div>
    </div>
    <div class="row gx-4">
        <div class="mb-3">
            <label for="photo" class="form-label">photo</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-file"></i>
                </span>
                <input type="file" name="photo" class="form-control" id="photo"
                    placeholder="Photo">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>
</div>


</div>
</div>
<div class="col-xl-12 col-sm-12 col-12">
<div class="card mb-4 card-height-350 d-flex ">
<div class="row gx-4 justify-contents-center">
<div class="col-xl-6 col-sm-6 col-12">
    <div class="card mb-4 card-height-350">
        <div class="card-header">
            <h5 class="card-title">Changer Mot de Passe</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('adminprofil.mdp') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="currentPwd">Actuel Mot de Passe <span
                            class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="password" name="current_password" id="currentPwd"
                            placeholder="Enter Actuel Mot de Passe" class="form-control">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="bi bi-eye text-black"></i>
                        </button>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="newPwd">Nouveau Mot de Passe<span
                            class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="password" name="password" id="newPwd"
                            class="form-control" placeholder="">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="bi bi-eye text-black"></i>
                        </button>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="confNewPwd">Confirmer nouveau mot de passe
                        <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="password" name="password_confirmation" id="confNewPwd"
                            placeholder="Confirmer nouveau mot de passe" class="form-control">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="bi bi-eye text-black"></i>
                        </button>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">MODIDFIER</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
