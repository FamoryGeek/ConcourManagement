<div>
    @include('livewire.admin.programmation.modal')
    <div class="row gx-4">
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title">Liste des emplois du temps</h5>
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
                                        <th class="l-name">Centre</th>
                                        <th class="l-days">Corps</th>
                                        <th class="l-days">Date</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($programmations as $programmation)
                                        <tr>
                                            <td>{{ $programmation->id }}</td>
                                            <td>{{ $programmation->centre->nom }}</td>
                                            <td>{{ $programmation->corp->nom }}</td>
                                            <td>{{ $programmation->date  }}</td>
                                            <td>
                                                <a wire:click="editProgrammation({{ $programmation->id }})"  class="btn btn-info btn-sm delete_modal" data-bs-toggle="modal"
                                                    data-bs-target="#editModal" href="#"><i
                                                            class="bi bi-pencil"></i>
                                                    </a>
                                                <a wire:click="deleteProgrammation({{ $programmation->id }})"  class="btn btn-danger btn-sm delete_modal" data-bs-toggle="modal"
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
