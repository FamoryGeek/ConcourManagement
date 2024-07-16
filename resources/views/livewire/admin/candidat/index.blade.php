<div>
    @include('livewire.admin.candidat.modal')
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
                                        <th scope="col">Etat</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($candidats->groupBy('corp_id') as $corpId => $candidatsByCorp)
                                        <tr>
                                            <th scope="col" colspan="10" class="text-center text-bold">
                                                <button class="btn btn-secondary btn-sm" data-bs-toggle="collapse" data-bs-target="#corp-{{ $corpId }}">
                                                    {{ strToUpper($candidatsByCorp->first()->corp->nom) }} <i class="bi bi-chevron-down"></i>
                                                </button>
                                            </th>
                                        </tr>
                                        <tr id="corp-{{ $corpId }}" class="collapse">
                                            <td colspan="10">
                                                <table class="table align-middle table-hover m-0 truncate">
                                                    <tbody>
                                                        @foreach ($candidatsByCorp as $candidat)
                                                            <tr>
                                                                <td>{{ $candidat->id }}</td>
                                                                <td>{{ $candidat->nina }}</td>
                                                                <td>{{ strToUpper($candidat->nom) }}</td>
                                                                <td>{{ $candidat->prenom }}</td>
                                                                <td>{{ $candidat->dateNaissance }}</td>
                                                                <td>{{ $candidat->genre }}</td>
                                                                <td>{{ $candidat->adresse }}</td>
                                                                <td>{{ $candidat->numero }}</td>
                                                                <td>
                                                                    @if ($candidat->etat === 1)
                                                                    <span class="badge border border-warning text-warning">
                                                                        <i class="bi bi-circle-fill"></i>
                                                                        En cours
                                                                    </span>
                                                                    @elseif ($candidat->etat === 2)
                                                                    <span class="badge border border-success text-success">
                                                                        {{-- <i class="bi bi-circle-fill"></i> --}}
                                                                        Valider
                                                                    </span>
                                                                    @else
                                                                    <span class="badge border border-danger text-danger">
                                                                        <i class="bi bi-circle-fill"></i>
                                                                        Rejeter
                                                                    </span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    {{-- <a wire:click="#"
                                                                            class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                                            data-bs-target="#editModal" href="#"><i
                                                                                class="bi bi-pencil"></i>
                                                                        </a> --}}
                                                                        {{-- <a href="" class="btn btn-"></a> --}}
                                                                    <a href="#" wire:click="viewFile({{ $candidat->id }})" class="btn btn-info btn-sm"  data-bs-toggle="modal"
                                                                        data-bs-target="#addModal"><i class="bi bi-eye"></i></a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
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
