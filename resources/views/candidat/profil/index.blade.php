@extends('layouts.candidat')
@section('content')
<div>
<div class="app-body">

<!-- Row starts -->
<div class="row gx-4">
    <div class="col-xxl-12">
        <div class="card">
            <div class="card-body">

                <!-- Custom tabs start -->
                <div class="custom-tabs-container">


                    <!-- Tab content start -->
                    <div class="tab-content h-300">
                        <form method="POST" action="{{route('candidat.updateProfil')}}">
                            @csrf
                            <div class="tab-pane fade show active" id="oneA" role="tabpanel">

                                <!-- Row starts -->
                                <div class="row gx-4">
                                    <div class="col-sm-12 col-12">
                                        <div class="card border mb-3">
                                            <div class="card-body">
                                                <i class="bi bi-person me-2">Information
                                                    Personnelle</i>
                                                <hr>
                                                <!-- Row starts -->
                                                <div class="row gx-2">
                                                    <div class="col-sm-6 col-6">



                                                        <!-- Form field start -->
                                                        <div class="mb-3">
                                                            <label for="nom" class="form-label">
                                                                Nom</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                    <i class="bi bi-person"></i>
                                                                </span>
                                                                <input type="text" class="form-control"
                                                                    id="nom" name="nom" wire:model="nom" placeholder="nom"
                                                                    value="{{ $candidats->nom }}">
                                                            </div>
                                                        </div>
                                                        <!-- Form field end -->

                                                    </div>
                                                    <div class="col-sm-6 col-6">



                                                        <!-- Form field start -->
                                                        <div class="mb-3">
                                                            <label for="prenom" class="form-label">
                                                                Prenom</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                    <i class="bi bi-person"></i>
                                                                </span>
                                                                <input type="text" class="form-control"
                                                                    id="prenom" name="prenom" wire:model="prenom"  placeholder="Prenom"
                                                                    value="{{ $candidats->prenom }}">
                                                            </div>
                                                        </div>
                                                        <!-- Form field end -->

                                                    </div>
                                                    <div class="col-sm-6 col-6">



                                                        <!-- Form field start -->
                                                        <div class="mb-3">
                                                            <label for="dateNaissance" class="form-label">
                                                                Date de naissance</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                    <i class="bi bi-calendar4"></i>
                                                                </span>
                                                                <input type="date" name="dateNaissance" wire:model="dateNaissance" class="form-control"
                                                                    id="dateNaissance"
                                                                    value="{{ $candidats->dateNaissance }}">
                                                            </div>
                                                        </div>
                                                        <!-- Form field end -->

                                                    </div>
                                                    <div class="col-sm-6 col-6">



                                                        <!-- Form field start -->
                                                        <div class="mb-3">
                                                            <label for="lieuNaissance" class="form-label">
                                                                Lieu de naissance</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                    <i class="bi bi-map"></i>
                                                                </span>
                                                                <input type="text" class="form-control"
                                                                    id="lieuNaissance"
                                                                    name="lieuNaissance" wire:model="lieuNaissance"  placeholder="Lieu de naissance"
                                                                    value="{{ $candidats->lieuNaissance }}">
                                                            </div>
                                                        </div>
                                                        <!-- Form field end -->

                                                    </div>
                                                    <div class="col-sm-6 col-6">

                                                        <!-- Form field start -->
                                                        <div class="mb-3">
                                                            <label for="email" class="form-label">Email</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                    <i class="bi bi-envelope"></i>
                                                                </span>
                                                                <input type="email" class="form-control"
                                                                    name="email" wire:model="email"  id="email" placeholder="email"
                                                                    value="{{ $candidats->email }}">
                                                            </div>
                                                        </div>
                                                        <!-- Form field end -->

                                                    </div>
                                                    <div class="col-sm-6 col-6">



                                                        <!-- Form field start -->
                                                        <div class="mb-3">
                                                            <label for="adresse" class="form-label">
                                                                Adresse</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                    <i class="bi bi-house"></i>
                                                                </span>
                                                                <input type="text" class="form-control"
                                                                    name="adresse" wire:model="adresse"    id="adresse" placeholder="Full name"
                                                                    value="{{ $candidats->adresse }}">
                                                            </div>
                                                        </div>
                                                        <!-- Form field end -->

                                                    </div>
                                                    <div class="col-sm-6 col-6">

                                                        <!-- Form field start -->
                                                        <div class="mb-3">
                                                            <label for="numero" class="form-label">Numero de
                                                                téléphone</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                    <i class="bi bi-phone"></i>
                                                                </span>
                                                                <input type="text" class="form-control"
                                                                    name="numero" wire:model="numero"  id="numero" placeholder="Numero"
                                                                    value="{{ $candidats->numero }}">
                                                            </div>

                                                        </div>
                                                        <!-- Form field end -->

                                                    </div>
                                                    <div class="col-sm-6 col-6">

                                                        <!-- Form field start -->
                                                        <div class="mb-3">
                                                            <label for="nina" class="form-label">Nina</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                    <i class="bi bi-key"></i>
                                                                </span>
                                                                <input type="text" class="form-control"
                                                                    name="nina" wire:model="nina"  id="nina" placeholder=""
                                                                    value="{{ $candidats->nina }}">
                                                            </div>
                                                        </div>
                                                        <!-- Form field end -->

                                                    </div>
                                                    <div class="col-sm-6 col-6">



                                                        <!-- Form field start -->
                                                        <div class="mb-3">
                                                            <label for="genre" class="form-label">
                                                                Genre</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                    <i class="bi bi-gender-ambiguous"></i>
                                                                </span>
                                                                <select class="form-select" name="genre" id="genre"
                                                                    wire:model="genre">
                                                                    <option value="">--Genre--</option>
                                                                    <option value="Masculin">Masculin</option>
                                                                    <option value="Féminin">Féminin</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- Form field end -->

                                                    </div>
                                                    <div class="col-sm-6 col-6">



                                                        <!-- Form field start -->
                                                        <div class="mb-3">
                                                            <label for="status" class="form-label">
                                                                Status</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                    <i class="bi bi-gender-neuter"></i>
                                                                </span>
                                                                <select class="form-select" name="status" id="status"
                                                                    wire:model="status">
                                                                    <option value="">--Status--</option>
                                                                    <option value="Célibataire">Célibataire
                                                                    </option>
                                                                    <option value="Fiancé">Fiancé</option>
                                                                    <option value="Marié">Marié</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- Form field end -->

                                                    </div>

                                                    <!-- Row starts -->


                                <i class="bi bi-info-circle me-2"></class=>Profile</i>
                                <hr>
                                <div class="row gx-2">

                                    <div class="col-sm-6 col-6">



                                        <!-- Form field start -->
                                        <div class="mb-3">
                                            <label for="aj" class="form-label">
                                                Niveau d'etude</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="bi bi-mortarboard"></i>
                                                </span>
                                                <select class="form-select" name="diplome_id" id="aj"
                                                    wire:model="diplome_id">
                                                    <option value="">Choisir votre niveau d'étude
                                                    </option>
                                                    @foreach ($diplomes as $diplome)
                                                        <option value="{{ $diplome->id }}">
                                                            {{ $diplome->nom }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Form field end -->

                                    </div>
                                    <div class="col-sm-6 col-6">



                                        <!-- Form field start -->
                                        <div class="mb-3">
                                            <label for="ak" class="form-label">
                                                Type Candidat</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="bi bi-person-lines-fill"></i>
                                                </span>
                                                <select class="form-select" name="type_candidat_id" id="ak"
                                                    wire:model="type_candidat_id">
                                                    <option value="">Choisir le type de candidat
                                                    </option>
                                                    @foreach ($typeCandidats as $typeCandidat)
                                                        <option value="{{ $typeCandidat->id }}">
                                                            {{ $typeCandidat->nom }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Form field end -->

                                    </div>
                                    <div class="col-sm-6 col-6">



                                        <!-- Form field start -->
                                        <div class="mb-3">
                                            <label for="dateNaissance" class="form-label">
                                                Corp</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="bi bi-people"></i>
                                                </span>
                                                <select class="form-select" name="corp_id" id="al" wire:model="corp_id">
                                                    <option value="">Choisir le corp</option>
                                                    @foreach ($corps as $corp)
                                                        <option value="{{ $corp->id }}">
                                                            {{ $corp->nom }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Form field end -->

                                    </div>
                                    <div class="col-sm-6 col-6">



                                        <!-- Form field start -->
                                        <div class="mb-3">
                                            <label for="lieuNaissance" class="form-label">
                                                Specialité</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="bi bi-award"></i>
                                                </span>
                                                <select class="form-select" name="specialite_id" id="specialite_select"
                                                    wire:model="specialite_id">
                                                    <option value="">Choisir le specialité</option>
                                                    @if (!empty($specialites))
                                                        @foreach ($specialites as $specialite)
                                                            <option value="{{ $specialite->id }}">
                                                                {{ $specialite->nom }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Form field end -->

                                    </div>
                                    <div class="">

                                        <!-- Form field start -->
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Localité</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="bi bi-pin-map"></i>
                                                </span>
                                                <select class="form-select" name="localite_id" id="al"
                                                    wire:model="localite_id">
                                                    <option value="">Choisir la Localite</option>
                                                    @foreach ($localites as $localite)
                                                        <option value="{{ $localite->id }}">
                                                            {{ $localite->nom }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Form field end -->

                                        <i class="bi bi-credit-card-2-front me-2">Dossier</i>
                                        <hr>
                                            <!-- Row starts -->
                            <div class="row gx-2">
                                <div class="col-sm-6 col-12">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="m-0">
                                                <label for="am" class="form-label">Image
                                                    du
                                                    diplôme<span class="text-danger">*</span></label>
                                                <input class="form-control" name="diplomeImage" type="file" id="am"
                                                    wire:model="diplomeImage">
                                            </div>
                                        </div>
                                        @error('diplomeImage')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="m-0">
                                                <label for="an" class="form-label">Image
                                                    du
                                                    Certificat Medical<span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" name="certificatMedical" type="file" id="an"
                                                    wire:model="certificatMedical">
                                            </div>
                                        </div>
                                        @error('certificatMedical')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="m-0">
                                                <label for="ao" class="form-label">Image
                                                    de
                                                    la fiche
                                                    individuelle<span class="text-danger">*</span></label>
                                                <input class="form-control" name="ficheIndividuelle" type="file"
                                                    wire:model="ficheIndividuelle" id="ao">
                                            </div>
                                        </div>
                                    </div>
                                    @error('ficheIndividuelle')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="m-0">
                                                <label for="ap" class="form-label">Image
                                                    du
                                                    nina<span class="text-danger">*</span></label>
                                                <input class="form-control" name="nina_image" type="file"
                                                    wire:model="nina_image" id="ap">
                                            </div>
                                        </div>
                                    </div>
                                    @error('nina_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="m-0">
                                                <label for="aq" class="form-label">Image
                                                    de
                                                    l'acte de
                                                    naissance<span class="text-danger">*</span></label>
                                                <input class="form-control" name="acteNaissance" type="file"
                                                    wire:model="acteNaissance" id="aq">
                                            </div>
                                        </div>
                                    </div>
                                    @error('acteNaissance')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="m-0">
                                                <label for="ar" class="form-label">Image
                                                    du
                                                    certificat
                                                    de nationalité<span class="text-danger">*</span></label>
                                                <input class="form-control" name="certificatNationalite" type="file"
                                                    wire:model="certificatNationalite" id="ar">
                                            </div>
                                        </div>
                                    </div>
                                    @error('certificatNationalite')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="m-0">
                                                <label for="as" class="form-label">Image
                                                    de
                                                    la lettre
                                                    d'équivalence (etranger) <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" name="lettreEquivalence" type="file"
                                                    wire:model="lettreEquivalence" id="as">
                                            </div>
                                        </div>
                                    </div>
                                    @error('lettreEquivalence')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                    <!-- Buttons start -->
                                <div class="d-flex gap-2 justify-content-end">
                                    <button type="button" class="btn btn-outline-dark">
                                        Anuler
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        Mettre a jour
                                    </button>
                                </div>
                                <!-- Buttons end -->
                        </form>
                        <div class="row align-items-end">
                            <div class="col-xl-4 col-sm-6 col-12">
                                <div class="p-3">
                                    <img src="{{ asset('assets/images/login.svg') }}" alt="Contactez-nous" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-sm-4 col-12">
                                <div class="card border mb-3">
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('candidat.updatePassword') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label" for="currentPassword">Mot de passe actuel <span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <input type="password" name="currentPassword" id="currentPassword" placeholder="Entrez votre mot de passe actuel" class="form-control">
                                                    <button class="btn btn-outline-secondary" type="button">
                                                        <i class="bi bi-eye text-black"></i>
                                                    </button>
                                                </div>
                                                @error('currentPassword') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="pwd">Nouveau mot de passe <span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <input type="password" name="password" id="pwd" class="form-control" placeholder="Votre nouveau mot de passe doit comporter au moins 10 caractères">
                                                    <button class="btn btn-outline-secondary" type="button">
                                                        <i class="bi bi-eye text-black"></i>
                                                    </button>
                                                </div>
                                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="pwd2">Confirmer le nouveau mot de passe <span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <input type="password" name="password_confirmation" id="pwd2" placeholder="Confirmez votre nouveau mot de passe" class="form-control">
                                                    <button class="btn btn-outline-secondary" type="button">
                                                        <i class="bi bi-eye text-black"></i>
                                                    </button>
                                                </div>
                                                <p id="pwd2msg" class="fw-semibold mt-2"></p>
                                            </div>

                                            <div class="col-12 alert" id="message">
                                                <div class="col-12 d-flex justify-content-start">
                                                    <div class="form-group has-icon-left">
                                                        <h4 class="text-danger">Le mot de passe doit contenir :</h4>
                                                        <span class="invalid" id="letter">Une lettre minuscule</span><br>
                                                        <span class="invalid" id="capital">Une lettre majuscule</span><br>
                                                        <span class="invalid" id="caract">Un des caractères spéciaux suivants : @, . , -</span><br>
                                                        <span class="invalid" id="number">Un chiffre</span><br>
                                                        <span class="invalid" id="lenght">10 caractères minimum</span><br>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button id="sauv" type="submit" class="btn btn-primary" disabled>Mettre à jour</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Row ends -->

                                    </div>

                                </div>
                                <!-- Row ends -->

                                                </div>
                                                <!-- Row ends -->

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Tab content end -->
                </div>
                <!-- Custom tabs end -->
            </div>
        </div>
    </div>
</div>
<!-- Row ends -->

</div>
</div>

{{-- Script pour les critères de validation du mot de passe --}}
<script>
    var pwd = document.getElementById('pwd');
    var letter = document.getElementById('letter');
    var capital = document.getElementById('capital');
    var number = document.getElementById('number');
    var lenght = document.getElementById('lenght');
    var caract = document.getElementById('caract');
    var msg = document.getElementById('message');

    // Afficher les critères au clic sur le champ de mot de passe
    pwd.onfocus = function(){
        document.getElementById("message").style.display = "block";
    }

    // Faire disparaître les critères lorsque le champ de mot de passe perd le focus
    pwd.onblur = function(){
        document.getElementById("message").style.display = "none";
    }

    // Vérification des critères à chaque frappe dans le champ de mot de passe
    pwd.onkeyup = function(){
        // Validation des minuscules
        var minuscule = /[a-z]/g;
        if(pwd.value.match(minuscule)){
            letter.classList.remove('invalid');
            letter.classList.add('valid');
        } else {
            letter.classList.remove('valid');
            letter.classList.add('invalid');
        }

        // Validation des caractères spéciaux
        var caractere = /[@.,-]/g;
        if(pwd.value.match(caractere)){
            caract.classList.remove('invalid');
            caract.classList.add('valid');
        } else {
            caract.classList.remove('valid');
            caract.classList.add('invalid');
        }

        // Validation des majuscules
        var majuscule = /[A-Z]/g;
        if(pwd.value.match(majuscule)){
            capital.classList.remove('invalid');
            capital.classList.add('valid');
        } else {
            capital.classList.remove('valid');
            capital.classList.add('invalid');
        }

        // Validation des chiffres
        var chiffre = /[0-9]/g;
        if(pwd.value.match(chiffre)){
            number.classList.remove('invalid');
            number.classList.add('valid');
        } else {
            number.classList.remove('valid');
            number.classList.add('invalid');
        }

        // Validation de la longueur minimale
        if(pwd.value.length >= 10){
            lenght.classList.remove('invalid');
            lenght.classList.add('valid');
        } else {
            lenght.classList.remove('valid');
            lenght.classList.add('invalid');
        }

        // Activer le bouton de soumission si tous les critères sont valides
        const button = document.getElementById('sauv');
        const npwd = document.getElementById('pwd2');

        if(pwd.value.length >= 10 && pwd.value.match(chiffre) && pwd.value.match(caractere) && pwd.value.match(majuscule) && pwd.value.match(minuscule)){
            button.disabled = false;
            npwd.disabled = false;

            lenght.classList.remove('valid');
            lenght.classList.add('ok');

            caract.classList.remove('valid');
            caract.classList.add('ok');

            number.classList.remove('valid');
            number.classList.add('ok');

            capital.classList.remove('valid');
            capital.classList.add('ok');

            letter.classList.remove('valid');
            letter.classList.add('ok');
        } else {
            button.disabled = true;
            npwd.disabled = true;

            lenght.classList.remove('ok');
            lenght.classList.add('invalid');

            capital.classList.remove('ok');
            capital.classList.add('invalid');

            caract.classList.remove('ok');
            caract.classList.add('invalid');

            letter.classList.remove('ok');
            letter.classList.add('invalid');

            number.classList.remove('ok');
            number.classList.add('invalid');
        }
    }
</script>
@endsection
