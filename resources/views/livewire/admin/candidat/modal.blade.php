<div wire:ignore.self class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLgLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLgLabel">
                    Verification de dossier
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row gx-4">
                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="card-body">

                                <!-- Custom tabs start -->
                                <div class="custom-tabs-container">

                                    <!-- Nav tabs start -->
                                    <ul class="nav nav-tabs" id="customTab2" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="tab-oneA" data-bs-toggle="tab"
                                                href="#oneA" role="tab" aria-controls="oneA"
                                                aria-selected="true"><i class="bi bi-1-circle me-2"></i>Diplôme</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="tab-twoA" data-bs-toggle="tab" href="#twoA"
                                                role="tab" aria-controls="twoA" aria-selected="false"><i
                                                    class="bi bi-2-circle me-2"></i>Fiche individuelle</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="tab-threeA" data-bs-toggle="tab" href="#threeA"
                                                role="tab" aria-controls="threeA" aria-selected="false"><i
                                                    class="bi bi-3-circle me-2"></i>Nationalité</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="tab-fourA" data-bs-toggle="tab" href="#fourA"
                                                role="tab" aria-controls="fourA" aria-selected="false"><i
                                                    class="bi bi-4-circle me-2"></i>Acte de Naissance</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="tab-fiveA" data-bs-toggle="tab" href="#fiveA"
                                                role="tab" aria-controls="fiveA" aria-selected="false"><i
                                                    class="bi bi-5-circle me-2"></i>Certificat Medical</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="tab-sixA" data-bs-toggle="tab" href="#sixA"
                                                role="tab" aria-controls="sixA" aria-selected="false"><i
                                                    class="bi bi-6-circle me-2"></i>Nina</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="tab-sevenA" data-bs-toggle="tab" href="#sevenA"
                                                role="tab" aria-controls="sevenA" aria-selected="false"><i
                                                    class="bi bi-7-circle me-2"></i>Lettre Equivalence</a>
                                        </li>

                                    </ul>
                                    <!-- Nav tabs end -->

                                    <!-- Tab content start -->
                                    <div class="tab-content h-300">
                                        <div class="tab-pane fade show active" id="oneA" role="tabpanel">

                                            <!-- Row starts -->
                                            <div class="row gx-2">
                                                @if ($candidat)
                                                    @if ($diplomeExt !== 'pdf')
                                                        <img src="{{ asset('uploads/uploads/candidats/' . $candidat->diplomeImage) }}"
                                                            alt="">
                                                    @else
                                                        <div
                                                            class="alert alert-info alert-dismissible alert-alt fade show ">
                                                            <strong>Ce fichier est sous format (pdf)!</strong>.
                                                        </div>
                                                        <a href="{{ asset('uploads/uploads/candidats/' . $candidat->diplomeImage) }}"
                                                            target="_blank" rel="noopener noreferrer"><u>cliquez pour
                                                                voir le diplôme</u></a>
                                                    @endif
                                                @endif

                                            </div>
                                            <!-- Row ends -->

                                        </div>
                                        <div class="tab-pane fade" id="twoA" role="tabpanel">

                                            <!-- Row starts -->
                                            <div class="row gx-2">
                                                @if ($candidat)
                                                    @if ($ficheIndividuelleExt !== 'pdf')
                                                        <img src="{{ asset('uploads/uploads/candidats/' . $candidat->ficheIndividuelle) }}"
                                                            alt="">
                                                    @else
                                                        <div
                                                            class="alert alert-info alert-dismissible alert-alt fade show ">
                                                            <strong>Ce fichier est sous format (pdf)!</strong>.
                                                        </div>
                                                        <a href="{{ asset('uploads/uploads/candidats/' . $candidat->ficheIndividuelle) }}"
                                                            target="_blank" rel="noopener noreferrer"><u>cliquez pour
                                                                voir la fiche individuelle</u></a>
                                                    @endif
                                                @endif

                                            </div>
                                            <!-- Row ends -->

                                        </div>
                                        <div class="tab-pane fade" id="threeA" role="tabpanel">

                                            <!-- Row starts -->
                                            <div class="row gx-2">
                                                @if ($candidat)
                                                    @if ($nationaliteExt !== 'pdf')
                                                        <img src="{{ asset('uploads/uploads/candidats/' . $candidat->certificatNationalite) }}"
                                                            alt="">
                                                    @else
                                                        <div
                                                            class="alert alert-info alert-dismissible alert-alt fade show ">
                                                            <strong>Ce fichier est sous format (pdf)!</strong>.
                                                        </div>
                                                        <a href="{{ asset('uploads/uploads/candidats/' . $candidat->certificatNationalite) }}"
                                                            target="_blank" rel="noopener noreferrer"><u>cliquez pour
                                                                voir le certificat de nationalité</u></a>
                                                    @endif
                                                @endif
                                            </div>
                                            <!-- Row ends -->

                                        </div>
                                        <div class="tab-pane fade" id="fourA" role="tabpanel">

                                            <!-- Row starts -->
                                            <div class="row gx-2">
                                                @if ($candidat)
                                                    @if ($acteNaissanceExt !== 'pdf')
                                                        <img src="{{ asset('uploads/uploads/candidats/' . $candidat->acteNaissance) }}"
                                                            alt="">
                                                    @else
                                                        <div
                                                            class="alert alert-info alert-dismissible alert-alt fade show ">
                                                            <strong>Ce fichier est sous format (pdf)!</strong>.
                                                        </div>
                                                        <a href="{{ asset('uploads/uploads/candidats/' . $candidat->acteNaissance) }}"
                                                            target="_blank" rel="noopener noreferrer"><u>Cliquez pour
                                                                voir l'acte de naissance</u></a>
                                                    @endif
                                                @endif
                                                <!-- Row ends -->
                                                <!-- -->
                                            </div>
                                            <!-- Row ends -->

                                        </div>
                                        <div class="tab-pane fade" id="fiveA" role="tabpanel">

                                            <!-- Row starts -->
                                            <div class="row gx-2">
                                                @if ($candidat)
                                                    @if ($certificatMedicalExt !== 'pdf')
                                                        <img src="{{ asset('uploads/uploads/candidats/' . $candidat->certificatMedical) }}"
                                                            alt="">
                                                    @else
                                                        <div
                                                            class="alert alert-info alert-dismissible alert-alt fade show ">
                                                            <strong>Ce fichier est sous format (pdf)!</strong>.
                                                        </div>
                                                        <a href="{{ asset('uploads/uploads/candidats/' . $candidat->certificatMedical) }}"
                                                            target="_blank" rel="noopener noreferrer"><u>cliquez pour
                                                                voir le certificat medical</u></a>
                                                    @endif
                                                @endif
                                                <!-- Row ends -->
                                                <!-- -->
                                            </div>
                                            <!-- Row ends -->

                                        </div>
                                        <div class="tab-pane fade" id="sixA" role="tabpanel">

                                            <!-- Row starts -->
                                            <div class="row gx-2">
                                                @if ($candidat)
                                                    @if ($ninaExt !== 'pdf')
                                                        <img src="{{ asset('uploads/uploads/candidats/' . $candidat->nina_image) }}"
                                                            alt="">
                                                    @else
                                                        <div
                                                            class="alert alert-info alert-dismissible alert-alt fade show ">
                                                            <strong>Ce fichier est sous format (pdf)!</strong>.
                                                        </div>
                                                        <a href="{{ asset('uploads/uploads/candidats/' . $candidat->nina_image) }}"
                                                            target="_blank" rel="noopener noreferrer"><u>cliquez pour
                                                                voir la carte nina </u></a>
                                                    @endif
                                                @endif

                                            </div>
                                            <!-- Row ends -->

                                        </div>
                                        <div class="tab-pane fade" id="sevenA" role="tabpanel">

                                            <!-- Row starts -->
                                            <div class="row gx-2">
                                                @if ($candidat)
                                                    @if ($lettreEquivalenceExt !== 'pdf')
                                                        <img src="{{ asset('uploads/uploads/candidats/' . $candidat->lettreEquivalence) }}"
                                                            alt="">
                                                    @else
                                                        <div
                                                            class="alert alert-info alert-dismissible alert-alt fade show ">
                                                            <strong>Ce fichier est sous format (pdf)!</strong>.
                                                        </div>
                                                        <a href="{{ asset('uploads/uploads/candidats/' . $candidat->lettreEquivalence) }}"
                                                            target="_blank" rel="noopener noreferrer"><u>cliquez pour
                                                                voir la lettre d'equivalence</u></a>
                                                    @endif
                                                @endif
                                                <!-- Row ends -->
                                                <!-- -->
                                            </div>
                                            <!-- Row ends -->

                                        </div>


                                    </div>
                                    <!-- Tab content end -->

                                </div>
                                <!-- Custom tabs end -->

                                <!-- Buttons start -->
                                @if ($candidat)
                                    <div class="d-flex gap-2 justify-content-end">
                                        <button wire:click="rejeter({{ $candidat->id }})" type="button"
                                            class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            Rejeter
                                        </button>
                                        <button wire:click="valider({{ $candidat->id }})" class="btn btn-primary">
                                            Valider
                                        </button>
                                    </div>
                                @endif
                                <!-- Buttons end -->

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Modal rejet modal -->
<div wire:ignore.self class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    Detail sur le rejet
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="confirmerRejet">
                <div class="modal-body">

                    <label class="form-label" id="description">Description<span class="text-danger">*</span></label>
                    <textarea class="form-control" wire:model="description" id="description"
                        placeholder="Une petite precision pour le candidat" aria-label="With textarea" autofocus></textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

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
