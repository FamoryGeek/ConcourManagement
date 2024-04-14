<div>
    <div class="row gx-4">
        <div class="col-sm-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">Enregistrement des notes</h5>
                </div>
                <div class="card-body">

                    <!-- Row starts -->
                    <form action="" method="post">
                        <div class="row gx-4">
                            <div class="col-lg-3 col-sm-4 col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="a14">Annee</label>
                                    <select class="form-select" id="a14">
                                        <option value="">Choisissez l'annee</option>
                                        <option value="2023-2024">2023-2024</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="a15">Corps</label>
                                    <select class="form-select" id="a15">
                                        <option value="0">Choisir le corp</option>
                                        @foreach ($corps as $corp)
                                            <option value="{{ $corp->id }}">
                                                {{ $corp->nom }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="a16">Localite</label>
                                    <select class="form-select" id="a16">
                                        <option value="0">Choisir la localite</option>
                                        @foreach ($localites as $localite)
                                            <option value="{{ $localite->id }}">
                                                {{ $localite->nom }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="a17">Cadre</label>
                                    <select class="form-select" id="a17">
                                        <option value="0">Choisir le cadre</option>
                                        @foreach ($cadres as $cadre)
                                            <option value="{{ $cadre->id }}">
                                                {{ $cadre->nom }}
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
                    <form action="" method="post">
                        <div class="">
                            <h4>Choisir la matière et affecter les notes aux candidats</h4>
                        </div>
                        <div class="col-sm-3">
                            <select name="module" id="module" class="form-select">
                                <option value="">choisissez la matière</option>
                                @foreach ($modules as $module)
                                    <option value="{{ $module->id }}">
                                        {{ $module->nom }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <hr>
                        <div class="alert alert-info alert-dismissible alert-alt fade show m-3">
                            <strong>Attention ! utiliser les points (.) en lieu et place des virgules (,)</strong>.
                        </div>
                        <table class="table align-middle table-hover m-0 truncate">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nina</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prenom</th>
                                    <th scope="col">note</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12345678F</td>
                                    <td>Keita</td>
                                    <td>Famory</td>
                                    <td>
                                        <input type="text" class="form-control" name="note">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center">
                            <input type="submit" value="Sauvegarder les notes" class="btn btn-primary text-center">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
