<div wire:ignore.self class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Ajouter un cadre
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="store">
                    <div class="card-body">
                        <!-- Row starts -->
                        <div class="row gx-4">
                            <div class=" ">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a1">Titre<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="a1" wire:model="titre"
                                        placeholder="Entrez le titre du sujet" autofocus>
                                </div>
                                @error('titre')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- Row ends -->
                        <!-- Row starts -->
                        <div class="row gx-4">
                            <div>
                                <div class="mb-3">
                                    <label class="form-label" for="abc6">Description</label>
                                    <textarea class="form-control" id="abc6" placeholder="Une petite description..." rows="3" wire:model="description"></textarea>
                                </div>
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                         <!-- Row ends -->
                         <!-- Row starts -->
                         <div class="row gx-4">
                            <div>
                                <label class="form-label mb-3" for="a2">Date de publication<span
                                    class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="a2" wire:model="date_publication"
                                >
                            </div>
                            @error('date_publication')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                         </div>
                          <!-- Row ends -->
                          <!-- Row starts -->
                          <div class="row gx-4">
                            <div class=" ">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a3">Fichier<span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="a3" wire:model="fichier"
                                        >
                                </div>
                                @error('fichier')
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
                    Mettre à jour un cadre
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="update">
                    <div class="card-body">
                        <!-- Row starts -->
                        <div class="row gx-4">
                            <div class=" ">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a1">Titre<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="a1" wire:model="titre"
                                        placeholder="Entrez le titre du sujet" autofocus>
                                </div>
                                @error('titre')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- Row ends -->
                        <!-- Row starts -->
                        <div class="row gx-4">
                            <div>
                                <div class="mb-3">
                                    <label class="form-label" for="abc6">Description</label>
                                    <textarea class="form-control" id="abc6" placeholder="Une petite description..." rows="3" wire:model="description"></textarea>
                                </div>
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                         <!-- Row ends -->
                         <!-- Row starts -->
                         <div class="row gx-4">
                            <div>
                                <label class="form-label mb-3" for="a2">Date de publication<span
                                    class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="a2" wire:model="date_publication"
                                >
                            </div>
                            @error('date_publication')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                         </div>
                          <!-- Row ends -->
                          <!-- Row starts -->
                          <div class="row gx-4">
                            <div class=" ">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a3">Fichier<span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="a3" wire:model="fichier"
                                        >
                                </div>
                                @error('fichier')
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
{{-- delete modal --}}
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
                <form wire:submit.prevent="destroyCadre">
                    <div class="card-body">
                        <!-- Row starts -->
                        <div class="row gx-4">
                            <div class="">
                                Voulez vous vraiment suprimer ce sujet ?
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
