@php
    use Carbon\Carbon;
@endphp
<div>
    <div class="row gx-4">
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between ">
                        <div class="aling-item-center">
                            <h2 class="card-title">Resultats</h2>
                        </div>
                        <!-- Search starts -->
                        {{--<div class="aling-item-center">
                            <div class="">
                                <div class="">
                                    --}}{{--<input type="text" class="form-control" id="searchContact" placeholder="Rechercher un sujet" wire:model="search">--}}{{--
                                     <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#createNewContact">Add</button>
                                </div>
                            </div>
                        </div>--}}
                    </div>

                    <!-- Search ends -->

                    <!-- Create New Contact Modal -->
                    <div class="modal fade" id="createNewContact" tabindex="-1" aria-labelledby="createNewContactLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header flex-column">
                                    <div class="text-center">
                                        <h4 class="text-primary">Create New Contact</h4>
                                        <p class="m-0">
                                            Enter the contact's name and an email or phone number. To pick the account
                                            where you
                                            want to save the contact.
                                        </p>
                                    </div>
                                </div>
                                <div class="modal-body">

                                    <!-- Row starts -->
                                    <div class="row gx-4">
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label for="fullName" class="form-label">Full Name<span
                                                        class="text-danger fs-5">*</span></label>
                                                <input type="text" class="form-control" id="fullName"
                                                       placeholder="Enter your full name">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label for="yourEmail" class="form-label">Email <span
                                                        class="text-danger fs-5">*</span></label>
                                                <input type="email" class="form-control" id="yourEmail"
                                                       placeholder="Enter your email">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label for="yourPhone" class="form-label">Phone</label>
                                                <input type="text" class="form-control" id="yourPhone"
                                                       placeholder="Enter your phone number">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label for="yourDesignation" class="form-label">Designation</label>
                                                <input type="text" class="form-control" id="yourDesignation"
                                                       placeholder="Enter your designation">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row ends -->

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="button" class="btn btn-primary">
                                        Create
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row gx-4">
        <form wire:submit.prevent="rechercher" method="post">
            <div class="row gx-4">
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="a14">Annee</label>
                        <select class="form-select" id="a14" wire:model="session">
                            <option value="">Choisissez l'annee</option>
                            @foreach($sessions as $session)
                                <option value="{{ $session->annee }}" selected>
                                    {{ $session->annee }}
                                </option>
                            @endforeach
                        </select>
                        @error('session_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="a17">Cadre</label>
                        <select class="form-select" id="a17" wire:model="cadre_id">
                            <option value="0">Choisir le cadre</option>
                            @foreach ($cadres as $cadre)
                                <option value="{{ $cadre->id }}">
                                    {{ $cadre->nom }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('cadre_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="a15">Corps</label>
                        <select class="form-select" id="cadre_select" wire:model="corp_id">
                            <option value="0">Choisir le corp</option>
                            @if (!empty($corps))
                                @foreach ($corps as $corp)
                                    <option value="{{ $corp->id }}">
                                        {{ $corp->nom }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    @error('corp_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="a16">Specialité</label>
                        <select name="module" id="specialite_select" wire:model="specialite_id"
                                class="form-select">
                            <option value="">Choisissez la spécialité</option>
                            @if (!empty($specialites))
                                @foreach ($specialites as $specialite)
                                    <option value="{{ $specialite->id }}">{{ $specialite->nom }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    @error('specialite_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="">
                    <div class="mb-3">
                        <label class="form-label" for="nombre">Nombre</label>
                        <input type="number" class="form-control" id="nombre"  wire:model="nombre">
                    </div>
                    @error('localite_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="d-flex gap-2 justify-content-end ">
                    <div class="mb-3 ">
                        <button type="submit" class="btn btn-primary">
                            Afficher
                        </button>
                    </div>
                </div>

            </div>
        </form>

        @if ($resultats)
            @if (!empty($resultats))

                    <table class="table align-middle table-hover m-0 truncate">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nina</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Date de Naissance</th>
                            <th scope="col">Localité</th>
                            <th scope="col">Moyenne</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($resultats as $index => $candidat)
                            <tr>
                                <td>{{ $candidat->id }}</td>
                                <td>{{ $candidat->nina }}</td>
                                <td>{{ $candidat->nom }}</td>
                                <td>{{ $candidat->prenom }}</td>
                                <td>{{  Carbon::parse($candidat->dateNaissance)->format('d-m-Y') }}</td>
                                <td>{{ $candidat->localite->nom }}</td>
                                <td>{{ ($candidat->note->epreuveTechnique+$candidat->note->cultureGeneral)/2  }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        <button wire:click="generatePDF" class="btn btn-primary text-center">Imprimer</button>
                    </div>

            @endif
        @endif
    </div>
</div>
