<div>
    @include('livewire.admin.anciens-sujets.modal')
    <div class="row gx-4">
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title">Listes des anciens sujets</h5>
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
                                        <th scope="col">Titre</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Date de publication</th>
                                        {{-- <th scope="col">Fichiers</th> --}}
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sujets as $sujet)
                                        <tr>
                                            <td>{{ $sujet->id }}</td>
                                            <td>{{ strToUpper($sujet->titre) }}</td>
                                            <td>{{ $sujet->description }}</td>
                                            <td>{{ $sujet->date_publication }}</td>
                                            {{-- <td></td> --}}
                                            <td>
                                                <a wire:click="edit({{ $sujet->id }})"
                                                    class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#editModal" href="#"><i
                                                        class="bi bi-pencil"></i>
                                                </a>
                                                <a wire:click="delete({{ $sujet->id }})"
                                                    class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal" href="#"><i
                                                        class="bi bi-trash"></i>
                                                </a>
                                                <a href="#" wire:click.prevent="download({{ $sujet->id }})"
                                                    class="btn btn-secondary btn-sm"> <i class="bi bi-download"></i></a>
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
