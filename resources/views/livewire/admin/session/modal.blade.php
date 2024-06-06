<div wire:ignore.self class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                 Ajouter une session
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="save">
                    <div class="card-body">
                        <!-- Row starts -->
                        <div class="row gx-4">
                            <div class="col-sm-6 col-6">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a1">Annee<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="a1" wire:model="annee"
                                        placeholder="Entrez l'année" autofocus>
                                </div>
                                @error('annee')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-sm-6 col-6">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="ai">Etat<span
                                        class="text-danger">*</span></label>
                                    <select class="form-select" id="ai" wire:model="etat">
                                        <option value="">--Etat--</option>
                                        <option value="1">En cours</option>
                                        <option value="0">Terminé</option>
                                    </select>
                                </div>
                                @error('etat')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- Row ends -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">
                            Fermer
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Enregistrer
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
{{-- edit modal --}}
<div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Mettre à jour une session
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="update">
                    <div class="card-body">
                        <!-- Row starts -->
                        <div class="row gx-4">
                            <div class="col-sm-6 col-6">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a1">Annee<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="a1" wire:model="annee"
                                        placeholder="Entrez l'année" autofocus>
                                </div>
                                @error('annee')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-sm-6 col-6">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="ai">Etat<span
                                        class="text-danger">*</span></label>
                                    <select class="form-select" id="ai" wire:model="etat">
                                        <option value="">--Etat--</option>
                                        <option value="1">En cours</option>
                                        <option value="0">Terminé</option>
                                    </select>
                                </div>
                                @error('etat')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- Row ends -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">
                            Fermer
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Mettre à jour
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
{{-- delete modal --}}
<div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    suprimer une session
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="destroy">
                    <div class="card-body">
                        <!-- Row starts -->
                        <div class="row gx-4">
                            <div class="">
                                Voulez vous vraiment suprimer cette session ?
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
