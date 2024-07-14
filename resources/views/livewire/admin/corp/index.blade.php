<div>
    @include('livewire.admin.corp.modal')
    <div class="row gx-4">
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title">Liste des corps</h5>
                    <button class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal"
                    data-bs-target="#addRole">Ajouter</button>
                </div>
                @if (session('status'))
                    <h5 class="alert alert-success">{{ session('status') }}</h5>
                @endif
                <div class="card-body">
                    <div class="table-outer">
                        <div class="table-responsive">
                            <table class="table align-middle table-hover m-0 truncate">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Cadre</th>
                                        <th scope="col">Categorie</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($corps as $corp)
                                        <tr>
                                            <td>
                                                {{ $corp->id }}
                                            </td>
                                            <td>{{ strToUpper($corp->nom) }}</td>
                                            <td>{{ strToUpper($corp->cadre->nom) }}</td>
                                            <td>{{ strToUpper($corp->categorie->nom) }}</td>
                                            <td>
                                                <a wire:click="editCorp({{ $corp->id }})"  class="btn btn-info btn-sm update_modal" data-bs-toggle="modal"
                                                    data-bs-target="#editModal" href="#"><i
                                                        class="bi bi-pencil"></i>
                                                </a>
                                                <a wire:click="deleteCorp({{ $corp->id }})"  class="btn btn-danger btn-sm delete_modal" data-bs-toggle="modal"
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
