{{-- add Modal --}}
<div wire:ignore.self class="modal fade" id="addRole" tabindex="-1" aria-labelledby="exampleModalLgLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="exampleModalLgLabel">
                    Ajouter un corp
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="saveCorp">
                    @csrf
                    <div class="card-body">
                        <!-- Row starts -->
                        <div class="row gx-2">
                            <div class="col-lg-6 col-sm-2 col-6 ">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a1">Nom du corp</label>
                                    <input type="text" class="form-control" id="a1" wire:model="nom"
                                        placeholder="Entrez le nom du corp" autofocus>
                                </div>
                                @error('nom')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-sm-2 col-6 ">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a2">Nom de la specialité</label>
                                    <input class="form-control" list="specialite" id="a2"  wire:model="specialite_id">
                                    <datalist  id="specialite" >
                                        <option value="">Choisir la specialité</option>
                                        @foreach ($specialites as $specialite)
                                            <option value="{{ $specialite->id }}">{{ $specialite->nom }}</option>
                                        @endforeach
                                    </datalist>
                                </div>
                                @error('specialite_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row gx-2">
                            <div class="col-lg-6 col-sm-6 col-6">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a3">Cadre</label>
                                    <select class="form-select" id="a3" wire:model="cadre_id">
                                        <option value="">Choisir le cadre</option>
                                        @foreach ($cadres as $cadre)
                                            <option value="{{ $cadre->id }}">{{ $cadre->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('cadre_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-sm-6 col-6">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a4">Categorie</label>
                                    <select class="form-select" id="a4" wire:model="categorie_id">
                                        <option value="">Choisir la categorie</option>
                                        @foreach ($categories as $categorie)
                                            <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('categorie_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- Row ends -->
                    </div>
                    <div class="card-footer">
                        <div class="d-flex gap-2 justify-content-end">
                            <button type="reset" class="btn btn-outline-secondary">
                                Annuler
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Enregistrer
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- edit Modal --}}
<div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLgLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="exampleModalLgLabel">
                    Mettre à jour un corp
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="updateCorp">
                    @csrf
                    <div class="card-body">
                        <!-- Row starts -->
                        <div class="row gx-2">
                            <div class="col-lg-6 col-sm-2 col-6 ">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a1">Nom du corp</label>
                                    <input type="text" class="form-control" id="a1" wire:model="nom"
                                        placeholder="Entrez le nom du corp" autofocus>
                                </div>
                                @error('nom')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-sm-2 col-6 ">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a2">Nom de la specialité</label>
                                    <select class="form-select" id="a2" wire:model="specialite_id">
                                        <option value="">Choisir la specialité</option>
                                        @foreach ($specialites as $specialite)
                                            <option value="{{ $specialite->id }}">{{ $specialite->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('specialite_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row gx-2">
                            <div class="col-lg-6 col-sm-6 col-6">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a7">Cadre</label>
                                    <select class="form-select" id="a7" wire:model="cadre_id">
                                        <option value="">Choisir le cadre</option>
                                        @foreach ($cadres as $cadre)
                                            <option value="{{ $cadre->id }}">{{ $cadre->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('cadre_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-sm-6 col-6">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a7">Categorie</label>
                                    <select class="form-select" id="a7" wire:model="categorie_id">
                                        <option value="">Choisir la categorie</option>
                                        @foreach ($categories as $categorie)
                                            <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('categorie_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- Row ends -->
                    </div>
                    <div class="card-footer">
                        <div class="d-flex gap-2 justify-content-end">
                            <button type="reset" class="btn btn-outline-secondary">
                                Annuler
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Mettre à jour
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- delete Modal --}}
<div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    suprimer un cadre
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="destroyCorp">
                    <div class="card-body">
                        <!-- Row starts -->
                        <div class="row gx-4">
                            <div class="">
                                Voulez vous vraiment suprimer ce corp ?
                            </div>
                        </div>
                        <!-- Row ends -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">
                            Fermer
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Supprimer
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
