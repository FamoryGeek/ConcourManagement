<div>
    <div class="row gx-4">
        <div class="col-sm-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">Enregistrement des notes</h5>
                </div>
                <div class="card-body">

                    <!-- Row starts -->
                    <form wire:submit.prevent="rechercher" method="post">
                        <div class="row gx-4">
                            <div class="col-lg-3 col-sm-4 col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="a14">Annee</label>
                                    <select class="form-select" id="a14" wire:model="annee">
                                        <option value="">Choisissez l'annee</option>
                                        <option value="{{ now()->format('Y') }}" selected>{{ now()->format('Y') }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="a17">Cadre</label>
                                    <select class="form-select" id="a17" wire:model="cadre_id">
                                        <option value="0">Choisir le cadre</option>

                                            @foreach ($cadres as $cadre)
                                                <option value="{{ $cadre->id }}">
                                                    {{ $cadre->nom }}
                                                </option>
                                            @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="a15">Corps</label>
                                    <select class="form-select" id="cadre_select" wire:model="corp_id">
                                        <option value="0">Choisir le corp</option>
                                        @if (!empty($corps))
                                        @foreach ($corps as $corp)
                                            <option value="{{ $corp->id }}">
                                                {{ $corp->nom }}
                                            </option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="a16">Localite</label>
                                    <select class="form-select" id="a16" wire:model="localite_id">
                                        <option value="0">Choisir la localite</option>
                                        @foreach ($localites as $localite)
                                            <option value="{{ $localite->id }}">
                                                {{ $localite->nom }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="d-flex gap-2 justify-content-end ">
                                <div class="mb-3 ">
                                    <button type="submit" class="btn btn-primary">
                                        Formulaire
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>
                    <!-- Row ends -->
                    @if ($resultats)
                        @if ($resultats->isNotEmpty())
                            <form action="" method="post">
                                <div>
                                    <h4>Choisir la spécialité et affecter les notes aux candidats</h4>
                                </div>
                                <div class="col-sm-3">
                                    <select name="module" id="specialite_select"
                                    wire:model="specialite_id" class="form-select" >
                                        <option value="">Choisissez la spécialité</option>
                                        @if (!empty($specialites))
                                        @foreach ($specialites as $specialite)
                                            <option value="{{ $specialite->id }}">{{ $specialite->nom }}
                                            </option>
                                        @endforeach
                                    @endif
                                    </select>
                                </div>
                                <hr>
                                <div class="alert alert-info alert-dismissible alert-alt fade show m-3">
                                    <strong>Attention ! Utilisez les points (.) en lieu et place des virgules
                                        (,)</strong>.
                                </div>
                                <table class="table align-middle table-hover m-0 truncate">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nina</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Prenom</th>
                                            <th scope="col">Epreuve Technique</th>
                                            <th scope="col">Culture Générale</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($resultats as $index => $candidat)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $candidat->nina }}</td>
                                                <td>{{ $candidat->nom }}</td>
                                                <td>{{ $candidat->prenom }}</td>
                                                <td>
                                                    <input type="text" class="form-control" name="technique[]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="cultureGenerale[]">
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <input type="submit" value="Sauvegarder les notes"
                                        class="btn btn-primary text-center">
                                </div>
                            </form>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
