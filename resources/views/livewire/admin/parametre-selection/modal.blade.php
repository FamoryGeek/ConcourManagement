{{-- add Modal --}}
<div wire:ignore.self class="modal fade" id="addRole" tabindex="-1" aria-labelledby="exampleModalLgLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="exampleModalLgLabel">
                    Ajouter un paramtre de selection
                </h5>
                <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="save">
                    @csrf
                    <div class="card-body">
                        <!-- Row starts -->
                        <div class="row gx-2">
                            <div class=" ">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a1">Nombre à selectionner</label>
                                    <input type="number" class="form-control" id="a1" wire:model="nombre"
                                        placeholder="Entrez le nombre à selectionner" autofocus>
                                </div>
                                @error('nombre')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row gx-2">

                            <div class="col-lg-6 col-sm-6 col-6">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a4">Corp</label>
                                    <select class="form-select" id="a4" wire:model="corp_id">
                                        <option value="">Choisir le corp</option>
                                        @foreach ($corps as $corp)
                                            <option value="{{ $corp->id }}">{{ $corp->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('corp_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-sm-6 col-6">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a3">Session</label>
                                    <select class="form-select" id="a3" wire:model="session_id">
                                        <option value="">Choisir la session</option>
                                        @foreach ($sessions as $session)
                                            <option value="{{ $session->id }}">{{ $session->annee }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('session_id')
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
                    Mettre à jour un parametre de selection
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="update">
                    @csrf
                    <div class="card-body">
                        <!-- Row starts -->
                        <div class="row gx-2">
                            <div class="">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a1">Nombre à selectionner</label>
                                    <input type="number" class="form-control" id="a1" wire:model="nombre"
                                        placeholder="Entrez le nombre à selectionner" autofocus>
                                </div>
                                @error('nombre')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row gx-2">

                            <div class="col-lg-6 col-sm-6 col-6">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a4">Corp</label>
                                    <select class="form-select" id="a4" wire:model="corp_id">
                                        <option value="">Choisir le corp</option>
                                        @foreach ($corps as $corp)
                                            <option value="{{ $corp->id }}">{{ $corp->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('corp_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-sm-6 col-6">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a3">Session</label>
                                    <select class="form-select" id="a3" wire:model="session_id">
                                        <option value="">Choisir la session</option>
                                        @foreach ($sessions as $session)
                                            <option value="{{ $session->id }}">{{ $session->annee }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('session_id')
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

{{-- delete Modal --}}
<div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    suprimer un parametre de selection
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="destroyCorp">
                    <div class="card-body">
                        <!-- Row starts -->
                        <div class="row gx-4">
                            <div class="">
                                Voulez vous vraiment suprimer ce parametre  ?
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
