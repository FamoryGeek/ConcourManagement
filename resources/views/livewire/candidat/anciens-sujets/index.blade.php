<div>
    <div class="row gx-4">
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between ">
                        <div class="aling-item-center">
                            <h5 class="card-title">Liste des anciens sujets</h5>
                        </div>
                        <!-- Search starts -->
                        <div class="aling-item-center">
                            <div class="">
                                <div class="">
                                    <input type="text" class="form-control" id="searchContact" placeholder="Rechercher un sujet" wire:model="search">
                                    {{-- <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#createNewContact">Add</button> --}}
                                </div>
                            </div>
                        </div>
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
        @foreach ($sujets as $sujet)
        <div class="col-xl-4 col-sm-6 col-12">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex align-items-center flex-row">
                        <div class="icon-shape icon-lg rounded-3 bg-light-warning">
                            <a href="#"  wire:click.prevent="download({{ $sujet->id }})">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-text text-warning" viewBox="0 0 16 16">
                                    <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"></path>
                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="ms-3">
                            <h5 class="mb-1">{{ $sujet->titre }}</h5>
                            <p class="mb-1">{{ $sujet->date_publication }}</p>
                            <p class="m-0 text-secondary small">Web Developer</p>
                        </div>
                        <div class="ms-auto">
                            <a href="#"  wire:click.prevent="download({{ $sujet->id }})" class="icon-box sm bg-secondary-subtle rounded-circle"><i
                                    class="bi bi-download lh-1 text-danger"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
