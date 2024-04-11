<div>

        <div class="row gx-4">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title">Liste des candidats</h5>
                       {{--  <a class="btn btn-primary btn-sm" href="{{ route('candidat.create') }}">Ajouter<i
                                class="bi bi-plus"></i></a> --}}
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
                                            <th scope="col">Nina</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Prenom</th>
                                            <th scope="col">Date de Naissance</th>
                                            <th scope="col">Genre</th>
                                            <th scope="col">Adresse</th>
                                            <th scope="col">Numero</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($candidats as $candidat)
                                            <tr>
                                                <td>
                                                    {{-- <img class="rounded-circle img-3x me-2"
                                                src="{{ asset('assets/images/user1.png') }}" alt="Bootstrap Gallery"> --}}
                                                    {{ $candidat->id }}
                                                </td>
                                                <td>{{ $candidat->nina }}</td>
                                                <td>{{ $candidat->nom }}</td>
                                                <td>{{ $candidat->prenom }}</td>
                                                <td>{{ $candidat->dateNaissance }}</td>
                                                <td>{{ $candidat->genre }}</td>
                                                <td>{{ $candidat->adresse }}</td>
                                                <td>{{ $candidat->numero }}</td>
                                                <td>{{ $candidat->status }}</td>
                                                <td>
                                                    <a wire:click="#"
                                                        class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#editModal" href="#"><i
                                                            class="bi bi-pencil"></i>
                                                    </a>
                                                    <a wire:click="#"
                                                        class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal" href="#"><i
                                                            class="bi bi-trash"></i>
                                                    </a>
                                                    <a class="btn btn-info btn-sm" href=""><i
                                                            class="bi bi-eye"></i></a>
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
