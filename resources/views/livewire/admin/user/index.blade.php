<div>
    @include('livewire.admin.user.modal')
    <div class="row gx-4">
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title">Listes des utilisateurs</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Ajouter
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-outer">
                        <div class="table-responsive">
                            <table class="table align-middle table-hover m-0 truncate">
                                <thead>
                                    <tr>
                                        <th scope="col">Nom</th>
                                        <th scope="col">E-mail</th>
                                        <th scope="col">Type Utilisateur</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->role_type_user->role_type }}</td>
                                            <td>{{ $user->role->nom }}</td>
                                            <td>
                                                @if ($user->role->type == 1)
                                                    <span class="btn btn-success btn-sm">Active</span>
                                                @else
                                                    <span class="btn btn-danger btn-sm">Inactive</span>
                                                @endif

                                            </td>
                                            <td>
                                                <a wire:click="editUser({{ $user->id }})" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalEdit" href="#"><i
                                                        class="bi bi-pencil"></i>
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
