<div wire:ignore.self class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Ajouter un type de candidat
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="saveTypeCandidat">
                    <div class="card-body">
                        <!-- Row starts -->
                        <div class="row gx-4">
                            <div class=" ">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a1">Nom du type de candidat<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="a1" wire:model="nom"
                                        placeholder="Entrez le nom du type de candidat" autofocus>
                                </div>
                                @error('nom')
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
                    Mettre à jour un module
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="updateTypeCandidat">
                    <div class="card-body">
                        <!-- Row starts -->
                        <div class="row gx-4">
                            <div class=" ">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a1">Nom du type de candidat<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="a1" wire:model="nom"
                                        placeholder="Entrez le nom du module" autofocus>
                                </div>
                                @error('nom')
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
                    Suppresion d'un type de candidat
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="destroyTypeCandidat">
                    <div class="card-body">
                        <!-- Row starts -->
                        <div class="row gx-4">
                            <div class=" ">
                                Voulez vous vraiment suprimer cet type de candidat ?
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
