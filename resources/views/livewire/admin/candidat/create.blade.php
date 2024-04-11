<div>
    <!-- Row starts -->
    <div class="row gx-4">
        <div class="col-sm-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">Fiche d'inscritpion</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Row starts -->
    <div class="row gx-4">
        <div class="col-sm-12">
            <div class="card mb-4">
                <div class="card-header">
                    <ul class="nav">
                        @if ($step === 1)
                            <li class="nav-item">
                                <a class="nav-link" href="">

                                   <h2><span class="num">1 - </span> Information personnelle</h2>
                                </a>
                            </li>
                        @endif
                        @if ($step === 2)
                            <li class="nav-item">
                                <a class="nav-link" href="#">

                                    <h2><span class="num">2 - </span> Profile</h2>
                                </a>
                            </li>
                        @endif
                        @if ($step === 3)
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <h2> <span class="num">3 - </span> Dossier</h2>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                <form wire:submit.prevent="candidatSave" enctype="multipart/form-data">
                    <div class="card-body">
                        <!-- Étape 1 : Informations personnelles -->
                        @if ($step === 1)
                            <!-- Vos champs pour les informations personnelles -->
                            <div class="row gx-2">
                                <div class="">
                                    <div class="mb-3">
                                        <label class="form-label" for="aa">N° nina<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="aa" wire:model="nina"
                                            placeholder="Entrez votre numero nina">
                                    </div>
                                     @error('nina')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="ab">Nom<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="ab" wire:model="nom"
                                            placeholder="Entrez votre nom">
                                    </div>
                                    @error('nom')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="ac">Prénom<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="ac"
                                            placeholder="Entrez votre prénom " wire:model="prenom">
                                    </div>
                                    @error('prenom')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="ad">Date de
                                            naissance<span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="ad"
                                            wire:model="dateNaissance">
                                    </div>
                                    @error('dateNaissance')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="ae">Lieu de
                                            naissance<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="ae"
                                            wire:model="lieuNaissance">
                                    </div>
                                    @error('lieuNaissance')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="af">Adresse<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="af" wire:model="adresse">
                                    </div>
                                    @error('adresse')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="ag">Numero de
                                            téléphone<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="ag" wire:model="numero">
                                    </div>
                                    @error('numero')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="ah">Genre<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="ah" wire:model="genre">
                                    </div>
                                    @error('genre')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="ai">Status<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="ai"
                                            wire:model="status">
                                    </div>
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Ajoutez d'autres champs selon vos besoins -->

                            <!-- Bouton de soumission -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary "
                                    wire:click="nextStep">Suivant</button>
                            </div>
                        @endif

                        <!-- Étape 2 : Profil -->
                        @if ($step === 2)
                            <div class="row gx-2">
                                <div class="col-lg-6 col-sm-6 col-6">
                                    <div class="mb-3">
                                        <label class="form-label mb-3" for="aj">Niveau
                                            d'étude<span class="text-danger">*</span></label>
                                        <select class="form-select" id="aj" wire:model="diplome_id">
                                            <option value="">Choisir votre niveau d'étude
                                            </option>
                                            @foreach ($diplomes as $diplome)
                                                <option value="{{ $diplome->id }}">
                                                    {{ $diplome->nom }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('diplome_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                                </div>
                                <div class="col-lg-6 col-sm-6 col-6">
                                    <div class="mb-3">
                                        <label class="form-label mb-3" for="ak">Type
                                            Candidat<span class="text-danger">*</span></label>
                                        <select class="form-select" id="ak" wire:model="type_candidat_id">
                                            <option value="">Choisir le type de candidat
                                            </option>
                                            @foreach ($typeCandidats as $typeCandidat)
                                                <option value="{{ $typeCandidat->id }}">
                                                    {{ $typeCandidat->nom }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('type_candidat_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                                </div>
                                <div class="">
                                    <div class="mb-3">
                                        <label class="form-label mb-3" for="al">Corp<span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" id="al" wire:model="corp_id">
                                            <option value="">Choisir le corp</option>
                                            @foreach ($corps as $corp)
                                                <option value="{{ $corp->id }}">
                                                    {{ $corp->nom }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('corp_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                                </div>
                            </div>

                            <!-- Ajoutez d'autres champs selon vos besoins -->

                            <!-- Boutons de navigation -->
                            <div class="modal-footer">
                                <button type="button" class="me-3 btn btn-primary"
                                    wire:click="previousStep">Précédent</button>
                                <button type="button" class="btn btn-primary" wire:click="nextStep">Suivant</button>
                            </div>
                        @endif

                        <!-- Étape 3 : Dossier -->
                        @if ($step === 3)
                            <div class="alert alert-info alert-dismissible alert-alt fade show m-3">
                                <strong>Veuillez choisir une image sous format (png, jpg,jpeg)!</strong>.
                            </div>

                            <!-- Vos champs pour le dossier -->
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
                                                    Certificat Medical<span class="text-danger">*</span></label>
                                                <input class="form-control" type="file"
                                                    id="an" wire:model="certificatMedical">
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
                                                    <input class="form-control" type="file" wire:model="nina_image"
                                                        id="ap">
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
                                    <!-- Row ends -->
                                    <!-- -->
                                </div>
                                <!-- Boutons de navigation -->
                                <div class="modal-footer">
                                    <button type="button" class="me-3 btn btn-primary"
                                        wire:click="previousStep">Précédent</button>
                                    <button type="submit" class="btn btn-primary">Envoyer</button>
                                </div>
                        @endif
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>
