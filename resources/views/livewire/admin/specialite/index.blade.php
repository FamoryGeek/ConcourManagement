<div>
    @include('livewire.admin.specialite.modal')
    <div class="row gx-4">
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title">Listes des Specialite</h5>
                    <button class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal"
                    data-bs-target="#addRole">Ajouter</button>
                </div>
                <div class="card-body">
                    <div class="table-outer">
                        <div class="table-responsive">
                            <table class="table align-middle table-hover m-0 truncate">
                                <thead>
                                    <tr>
                                        <th class="l-name" style="width: 30px;">#</th>
                                        <th class="l-name">Nom</th>
                                        <th class="l-days">Corps</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($specialites as $specialite)
                                        <tr>
                                            <td>{{ $specialite->id }}</td>
                                            <td>{{ strToUpper($specialite->nom) }}</td>
                                            <td>{{ strToUpper($specialite->corp->nom) }}</td>
                                            <td>
                                                <a wire:click="editSpecialite({{ $specialite->id }})"  class="btn btn-info btn-sm update_modal" data-bs-toggle="modal"
                                                    data-bs-target="#editModal" href="#"><i
                                                        class="bi bi-pencil"></i>
                                                </a>
                                                <a wire:click="deleteSpecialite({{ $specialite->id }})"  class="btn btn-danger btn-sm delete_modal" data-bs-toggle="modal"
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
