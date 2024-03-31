{{-- add Modal --}}
<div wire:ignore.self class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Formulaire d'inscription
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="saveCandidat">
                    @csrf
                    <div class="card-body">

                        <!-- Wizard #3 -->
                        <div id="smartwizard3">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#step-3a">
                                        <div class="num">1</div>
                                        Information personnelle
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#step-3b">
                                        <span class="num">2</span>
                                        Profile
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#step-3c">
                                        <span class="num">3</span>
                                        Dossier
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#step-3d">
                                        <span class="num">4</span>
                                        validation
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="step-1a" class="tab-pane" role="tabpanel" aria-labelledby="step-1a">

                                    <!-- Row starts -->
                                    <div class="row gx-2">
                                        <div class="">
                                            <div class="mb-3">
                                                <label class="form-label" for="aa">N° nina<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="aa"
                                                    wire:model="nina" placeholder="Entrez votre numero nina">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="ab">Nom<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="ab"
                                                    wire:model="nom" placeholder="Entrez votre nom">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="ac">Prénom<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="ac"
                                                    placeholder="Entrez votre prénom " wire:model="prenom">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="ad">Date de naissance<span
                                                        class="text-danger">*</span></label>
                                                <input type="date" class="form-control" id="ad"
                                                    wire:model="dateNaissance">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="ak">Lieu de naissance<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="ak"
                                                    wire:model="lieuNaissance">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="al">Adresse<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="al"
                                                    wire:model="adresse">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="am">Numero de téléphone<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="am"
                                                    wire:model="tel">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="an">Genre<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="an"
                                                    wire:model="genre">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="ao">Status<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="ao"
                                                    wire:model="status">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row ends -->
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div id="step-1b" class="tab-pane" role="tabpanel" aria-labelledby="step-1b">

                                    <!-- Row starts -->
                                    <div class="row gx-2">
                                        <div class="col-lg-6 col-sm-6 col-6">
                                            <div class="mb-3">
                                                <label class="form-label mb-3" for="ap">Niveau d'étude<span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select" id="ap" wire:model="diplome">
                                                    <option value="">Choisir votre niveau d'étude</option>
                                                    @foreach ($diplomes as $diplome)
                                                        <option value="{{ $diplome->id }}">{{ $diplome->nom }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <p class="text-danger">
                                                @error('diplome')
                                                    {{ $message }}
                                                    !
                                                @enderror
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-6">
                                            <div class="mb-3">
                                                <label class="form-label mb-3" for="aq">Type Candidat<span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select" id="aq"
                                                    wire:model="typeCandidat_id">
                                                    <option value="">Choisir le type de candidat</option>
                                                    @foreach ($typeCandidats as $typeCandidat)
                                                        <option value="{{ $typeCandidat->id }}">
                                                            {{ $typeCandidat->nom }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <p class="text-danger">
                                                @error('typeCandidat_id')
                                                    {{ $message }}
                                                    !
                                                @enderror
                                            </p>
                                        </div>
                                        <div class="">
                                            <div class="mb-3">
                                                <label class="form-label mb-3" for="ar">Corp<span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select" id="ar" wire:model="corp_id">
                                                    <option value="">Choisir le corp</option>
                                                    @foreach ($corps as $corp)
                                                        <option value="{{ $corp->id }}">{{ $corp->nom }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <p class="text-danger">
                                                @error('corp_id')
                                                    {{ $message }}
                                                    !
                                                @enderror
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Row ends -->
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div id="step-1c" class="tab-pane" role="tabpanel" aria-labelledby="step-1c">

                                    <!-- Row starts -->
                                    <div id="wizard_Details" class="tab-pane" role="tabpanel">
                                        <div class="alert alert-info alert-dismissible alert-alt fade show m-3">
                                            {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    </button> --}}
                                            <strong>Veuillez choisir une image sous format (png, jpg, jpeg)!</strong>.
                                        </div>
                                        <div class="row gx-2">
                                            <div class="col-sm-6 col-12">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="m-0">
                                                            <label for="as" class="form-label">Image du
                                                                diplôme<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="file"
                                                                id="as">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="m-0">
                                                            <label for="as" class="form-label">Image du
                                                                diplôme<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="file"
                                                                wire:model="imageDiplome" id="as">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="m-0">
                                                            <label for="as" class="form-label">Image de la fiche
                                                                individuelle<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="file"
                                                                wire:model="imageFicheIndividuelle" id="as">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="m-0">
                                                            <label for="as" class="form-label">Image du
                                                                nina<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="file"
                                                                wire:model="imageNina" id="as">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="m-0">
                                                            <label for="as" class="form-label">Image de l'acte
                                                                de
                                                                naissance<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="file"
                                                                wire:model="acteNaissance" id="as">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="m-0">
                                                            <label for="as" class="form-label">Image du
                                                                certificat
                                                                de nationalité<span
                                                                    class="text-danger">*</span></label>
                                                            <input class="form-control" type="file"
                                                                wire:model="certificatNationalite" id="as">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="m-0">
                                                            <label for="as" class="form-label">Image de la
                                                                lettre
                                                                d'équivalence (etranger) <span
                                                                    class="text-danger">*</span></label>
                                                            <input class="form-control" type="file"
                                                                wire:model="certificatMedical" id="as">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Row ends -->
                                            <!-- -->
                                        </div>
                                        <div id="step-1d" class="tab-pane" role="tabpanel"
                                            aria-labelledby="step-1d">

                                            <!-- Row starts -->

                                            <!-- Row ends -->

                                        </div>
                                    </div>

                                    <!-- Include optional progressbar HTML -->
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 0%"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
