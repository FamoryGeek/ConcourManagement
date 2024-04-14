{{-- add Modal --}}
<div wire:ignore.self class="modal fade" id="addRole" tabindex="-1" aria-labelledby="exampleModalLgLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="exampleModalLgLabel">
                    Postuler a un corp
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="concourSave">
                    @csrf
                    <div class="card-body">
                        <!-- Row starts -->
                        <div class="row gx-2">
                            <div class="col-lg-6 col-sm-2 col-6 ">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a1">Annee<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="a1" wire:model="annee"
                                        placeholder="Entrez l'annee de concours" autofocus>
                                    @error('annee')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-lg-6 col-sm-6 col-6">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a7">Corps<span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" id="a7" wire:model="corp_id">
                                        <option  selected>---</option>
                                        @forelse ($corps as $corp)
                                            <option value="{{ $corp->id }}">{{ $corp->nom }}</option>
                                        @empty
                                            <option selected disabled>pas de Corps</option>
                                        @endforelse
                                    </select>
                                </div>
                                @error('corp_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-lg-6 col-sm-6 col-6">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a7">Candidats<span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" id="a7" wire:model="candidat_id">
                                        <option  selected>---</option>
                                        @forelse ($candidats as $candidat)
                                            <option value="{{ $candidat->id }}">{{ $candidat->nom }}</option>
                                        @empty
                                            <option selected disabled>pas de Corps</option>
                                        @endforelse
                                    </select>
                                </div>
                                @error('candidat_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>
                        <!-- Row ends -->
                    </div>
                    <div class="card-footer">
                        <div class="d-flex gap-2 justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                Postuler
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
                    Annulation de candidature
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="destroyConcour">
                    <div class="card-body">
                        <!-- Row starts -->
                        <div class="row gx-4">
                            <div class=" ">
                                Voulez vous vraiment annuler votre candidature  ?
                            </div>
                        </div>
                        <!-- Row ends -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">
                            Fermer
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Confirmer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
