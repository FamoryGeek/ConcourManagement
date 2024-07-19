<div>
    <div class="app-body" style="height: auto; padding: 1rem 1.5rem 1.25rem 1.5rem;">
        <!-- Row starts -->
        <div class="row gx-4">
            <div class="col-sm-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between">
                        <h3 class="card-title">Fiche d'inscritpion</h3>
                        <a class="btn btn-primary btn-sm" href="{{ URL('/') }}"><i
                                class="bi bi-arrow-left-circle"></i>Accueil</a>
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

                                        <h2><span class="num"><i class="bi bi-1-circle"></i></span> Information personnelle</h2>
                                    </a>
                                </li>
                            @endif
                            @if ($step === 2)
                                <li class="nav-item">
                                    <a class="nav-link" href="#">

                                        <h2><span class="num"><i class="bi bi-2-circle"></i></span> Profiles</h2>
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
                                    <div class="col-sm-6 col-6">
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
                                            <label class="form-label" for="ac">Prénom(s)<span
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
                                            <label class="form-label" for="ab">Email<span
                                                    class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="ab" wire:model="email"
                                                placeholder="Entrez votre email">
                                        </div>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 col-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="af">Adresse<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="af"
                                                wire:model="adresse">
                                        </div>
                                        @error('adresse')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-3 col-3">
                                        <div class="mb-3">
                                            <label class="form-label" for="ag">Numero de
                                                téléphone<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="ag"
                                                wire:model="numero">
                                        </div>
                                        @error('numero')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-3 col-3">
                                        <div class="mb-3">
                                            <label class="form-label" for="ag">Numero de
                                                téléphone (Cas d'urgence)<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="ag"
                                                wire:model="numeroSecondaire">
                                        </div>
                                        @error('numeroSecondaire')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 col-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="ah">Genre<span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="ah" wire:model="genre">
                                                <option value="">--Choissir le genre--</option>
                                                <option value="Masculin">Masculin</option>
                                                <option value="Féminin">Féminin</option>
                                            </select>
                                        </div>
                                        @error('genre')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 col-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="ai">Statut<span
                                                    class="text-danger">*</span></label>
                                                <select class="form-select" id="ai" wire:model="status">
                                                    <option value="">--Choisir le statut--</option>
                                                    <option value="Célibataire">Célibataire</option>
                                                    <option value="Fiancé">Fiancé</option>
                                                    <option value="Marié">Marié</option>
                                                    <option value="Veuf(ve)">Veuf(ve)</option>
                                                </select>
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
                                    <div class="col-lg-6 col-sm-6 col-6">
                                        <div class="mb-3">
                                            <label class="form-label mb-3" for="al">Corps<span
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

                                    <!-- Champ pour sélectionner la spécialité -->
                                    <div class="col-lg-6 col-sm-6 col-6">
                                        <div class="mb-3">
                                            <label class="form-label mb-3" for="al">Specialités<span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="specialite_select"
                                                wire:model="specialite_id">
                                                <option value="">Choisir le specialité</option>
                                                @if (!empty($specialites))
                                                    @foreach ($specialites as $specialite)
                                                        <option value="{{ $specialite->id }}">{{ $specialite->nom }}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        @error('specialite_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="">
                                        <div class="mb-3">
                                            <label class="form-label mb-3" for="al">Localité<span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="al" wire:model="localite_id">
                                                <option value="">Choisir la Localite</option>
                                                @foreach ($localites as $localite)
                                                    <option value="{{ $localite->id }}">
                                                        {{ $localite->nom }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('localite_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Ajoutez d'autres champs selon vos besoins -->

                                <!-- Boutons de navigation -->
                                <div class="modal-footer">
                                    <button type="button" class="me-3 btn btn-primary"
                                        wire:click="previousStep">Précédent</button>
                                        <button type="submit" class="btn btn-primary">Envoyer</button>
                                </div>
                            @endif

                            <!-- Étape 3 : Dossier -->
                            {{-- @if ($step === 3)
                                <div class="alert alert-info alert-dismissible alert-alt fade show m-3">
                                    <strong>Veuillez choisir un fichier sous format (pdf, png, jpg,jpeg)!</strong>.
                                </div>

                                <!-- Vos champs pour le dossier -->
                                <div class="row gx-2">
                                    <div class="col-sm-6 col-12">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="m-0">
                                                    <label for="am" class="form-label">
                                                       Fichier du diplôme
                                                        <span class="text-danger">*</span></label>
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
                                                    <label for="an" class="form-label">
                                                        Fichier du certificat medical(pour les personnes handicapés)
                                                        <span class="text-danger">*</span></label>
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
                                                    <label for="ao" class="form-label">
                                                        Fichier de la fiche individuelle
                                                        <span class="text-danger">*</span></label>
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
                                                    <label for="ap" class="form-label">
                                                        Fichier du nina
                                                        <span class="text-danger">*</span></label>
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
                                                    <label for="aq" class="form-label">
                                                        Fichier de l'acte de naissance
                                                        <span class="text-danger">*</span></label>
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
                                                    <label for="ar" class="form-label">
                                                        Fichier du certificat de nationalité<span class="text-danger">*</span></label>
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
                                                    <label for="as" class="form-label">
                                                        Fichier de la lettre d'équivalence (pour les etrangers)
                                                        <span
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
                            @endif --}}
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>
