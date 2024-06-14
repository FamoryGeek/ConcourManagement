<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalXlLabel" aria-hidden="true" wire:ignore>
    <div class="modal-dialog modal-xl">
        <div class="modal-content ">
            <div class="modal-header ">
                <h2 class="text-primary" id="exampleModalXlLabel">
                    Dossier
                </h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row gx-4">
                    <div class="col-sm-12">
                        <div class="card mb-4">

                            <form wire:submit.prevent="" enctype="multipart/form-data">
                                <div class="card-body">
                                    <!-- Étape 3 : Dossier -->
                                        <!-- Vos champs pour le dossier -->
                                        <div class="row gx-2">
                                            <div class="col-sm-6 col-12">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="m-0">
                                                            <label for="am" class="form-label">Image
                                                                du
                                                                diplôme<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="file" id="am"
                                                                wire:model="diplomeImage">
                                                        </div>
                                                    </div>
                                                    @error('diplomeImage')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="m-0">
                                                            <label for="an" class="form-label">Image
                                                                du
                                                                Certificat Medical<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="file" id="an"
                                                                wire:model="certificatMedical">
                                                        </div>
                                                    </div>
                                                    @error('certificatMedical')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="m-0">
                                                            <label for="ao" class="form-label">Image
                                                                de
                                                                la fiche
                                                                individuelle<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="file"
                                                                wire:model="ficheIndividuelle" id="ao">
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('ficheIndividuelle')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="m-0">
                                                            <label for="ap" class="form-label">Image
                                                                du
                                                                nina<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="file"
                                                                wire:model="nina_image" id="ap">
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('nina_image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="m-0">
                                                            <label for="aq" class="form-label">Image
                                                                de
                                                                l'acte de
                                                                naissance<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="file"
                                                                wire:model="acteNaissance" id="aq">
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('acteNaissance')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="m-0">
                                                            <label for="ar" class="form-label">Image
                                                                du
                                                                certificat
                                                                de nationalité<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="file"
                                                                wire:model="certificatNationalite" id="ar">
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('certificatNationalite')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="m-0">
                                                            <label for="as" class="form-label">Image
                                                                de
                                                                la lettre
                                                                d'équivalence (etranger) <span
                                                                    class="text-danger">*</span></label>
                                                            <input class="form-control" type="file"
                                                                wire:model="lettreEquivalence" id="as">
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('lettreEquivalence')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <!-- Row ends -->
                                            <!-- -->
                                        </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
