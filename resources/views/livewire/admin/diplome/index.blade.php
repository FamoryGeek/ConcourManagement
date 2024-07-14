<div>
    @include('livewire.admin.diplome.modal')
    <div class="row gx-4">
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title">Listes des diplomes</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                        Ajouter
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-outer">
                        <div class="table-responsive">
                            <table class="table align-middle table-hover m-0 truncate">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($diplomes as $diplome)
                                        <tr>
                                            <td>{{ $diplome->id }}</td>
                                            <td>{{ strToUpper($diplome->nom) }}</td>
                                            <td>
                                                <a wire:click="editDiplome({{ $diplome->id }})"
                                                    class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#editModal" href="#"><i
                                                        class="bi bi-pencil"></i>
                                                </a>
                                                <a wire:click="deleteDiplome({{ $diplome->id }})"
                                                    class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal" href="#"><i
                                                        class="bi bi-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
