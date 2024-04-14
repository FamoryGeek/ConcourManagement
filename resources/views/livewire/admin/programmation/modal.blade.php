{{-- add Modal --}}
<div wire:ignore.self class="modal fade" id="addRole" tabindex="-1" aria-labelledby="exampleModalLgLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="exampleModalLgLabel">
                    Ajouter un emploi du temps
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="saveProgrammation">
                    @csrf
                    <div class="card-body">
                        <!-- Row starts -->
                        <div class="row gx-2">
                            <div class="col-lg-6 col-sm-2 col-6 ">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a1">Date<span
                                            class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="a1" wire:model="date"
                                        placeholder="Entrez le nom du centre" autofocus>
                                    @error('date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-lg-6 col-sm-6 col-6">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a7">Centre<span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" id="a7" wire:model="centre_id">
                                        <option  selected>---</option>
                                        @forelse ($centres as $centre)
                                            <option value="{{ $centre->id }}">{{ $centre->nom }}</option>
                                        @empty
                                            <option selected disabled>Pas de centre</option>
                                        @endforelse
                                    </select>
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
                        </div>
                        <!-- Row ends -->
                    </div>
                    <div class="card-footer">
                        <div class="d-flex gap-2 justify-content-end">
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
                    Ajouter un emploi du temps
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="updateProgrammation">
                    @csrf
                    <div class="card-body">
                        <!-- Row starts -->
                        <div class="row gx-2">
                            <div class="col-lg-6 col-sm-2 col-6 ">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a1">Date<span
                                            class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="a1" wire:model="date"
                                        placeholder="Entrez le nom du centre" autofocus>
                                    @error('date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-lg-6 col-sm-6 col-6">
                                <div class="mb-3">
                                    <label class="form-label mb-3" for="a7">Centre<span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" id="a7" wire:model="centre_id">
                                        <option  selected>---</option>
                                        @forelse ($centres as $centre)
                                            <option value="{{ $centre->id }}">{{ $centre->nom }}</option>
                                        @empty
                                            <option selected disabled>Pas de centre</option>
                                        @endforelse
                                    </select>
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
                        </div>
                        <!-- Row ends -->
                    </div>
                    <div class="card-footer">
                        <div class="d-flex gap-2 justify-content-end">
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
                    Annulation de candidature
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="destroyProgrammation">
                    <div class="card-body">
                        <!-- Row starts -->
                        <div class="row gx-4">
                            <div class=" ">
                                Voulez vous vraiment supprimer cet emploi du temps  ?
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
