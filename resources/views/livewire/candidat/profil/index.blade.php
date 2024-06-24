<div wire:ignore>
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
                                <form wire:submit.prevent="modifierCandidatProfil">
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
                                                                            id="nom" wire:model="nom" placeholder="nom"
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
                                                                            id="prenom" wire:model="prenom"  placeholder="Prenom"
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
                                                                        <input type="date" wire:model="dateNaissance" class="form-control"
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
                                                                            wire:model="lieuNaissance"  placeholder="Lieu de naissance"
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
                                                                            wire:model="email"  id="email" placeholder="email"
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
                                                                            wire:model="adresse"    id="adresse" placeholder="Full name"
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
                                                                            wire:model="numero"  id="numero" placeholder="Numero"
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
                                                                            wire:model="nina"  id="nina" placeholder=""
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
                                                                        <select class="form-select" id="genre"
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
                                                                        <select class="form-select" id="status"
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
                                                        <select class="form-select" id="aj"
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
                                                        <select class="form-select" id="ak"
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
                                                        <select class="form-select" id="al" wire:model="corp_id">
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
                                                        <select class="form-select" id="specialite_select"
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
                                                        <select class="form-select" id="al"
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
                                                        <input class="form-control" type="file" id="am"
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
                                                        <input class="form-control" type="file" id="an"
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
                                                        <input class="form-control" type="file"
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
                                                        <input class="form-control" type="file"
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
                                                        <input class="form-control" type="file"
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
                                                        <input class="form-control" type="file"
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
                                                        <input class="form-control" type="file"
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

                                
                                    <!-- Row starts -->
                                    <div class="row align-items-end">
                                        <div class="col-xl-4 col-sm-6 col-12">
                                            <div class="p-3">
                                                <img src="{{ asset('assets/images/login.svg') }}" alt="Contact Us"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-12">
                                            <div class="card border mb-3">
                                                <div class="card-body">
                                                    <form wire:submit.prevent="updatePassword">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="currentPwd">Current
                                                                password
                                                                <span class="text-danger">*</span></label>
                                                            <div class="input-group">
                                                                <input type="password" id="currentPwd"
                                                                    placeholder="Enter Current password"
                                                                    class="form-control" wire:model="currentPassword">
                                                                <button class="btn btn-outline-secondary"
                                                                    type="button">
                                                                    <i class="bi bi-eye text-black"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label" for="newPwd">New password
                                                                <span class="text-danger">*</span></label>
                                                            <div class="input-group">
                                                                <input type="password" id="newPwd"
                                                                    class="form-control"
                                                                    placeholder="Your password must be 8-20 characters long." wire:model="newPassword">
                                                                <button class="btn btn-outline-secondary"
                                                                    type="button">
                                                                    <i class="bi bi-eye text-black"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label" for="confNewPwd">Confirm new
                                                                password <span class="text-danger">*</span></label>
                                                            <div class="input-group">
                                                                <input type="password" id="confNewPwd"
                                                                    placeholder="Confirm new password"
                                                                    class="form-control" wire:model="confirmPassword">
                                                                <button class="btn btn-outline-secondary"
                                                                    type="button">
                                                                    <i class="bi bi-eye text-black"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary ">
                                                                Mettre a jour
                                                            </button>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row ends -->
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

