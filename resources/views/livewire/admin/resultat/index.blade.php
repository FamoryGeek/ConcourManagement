<div>
    @include('livewire.admin.resultat.modal')
    <div class="row gx-4">
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title">Resultat Global</h5>
                    {{--  <a class="btn btn-primary btn-sm" href="{{ route('candidat.create') }}">Ajouter<i
                                class="bi bi-plus"></i></a> --}}
                </div>
                <div class="card-body">
                    <div class="table-outer">
                        <div class="table-responsive">
                            <table class="table align-middle table-hover m-0 truncate">
                                <thead>

                                </thead>
                                <tbody>
                                    @foreach ($candidats->groupBy('corp_id') as $corpId => $candidatsByCorp)
                                        <tr>
                                            <th scope="col" colspan="10" class="text-center text-bold">
                                                <button class="btn btn-secondary btn-sm" data-bs-toggle="collapse" data-bs-target="#corp-{{ $corpId }}">
                                                    {{ $candidatsByCorp->first()->corp->nom }} <i class="bi bi-chevron-down"></i>
                                                </button>
                                            </th>
                                        </tr>
                                        <tr id="corp-{{ $corpId }}" class="collapse">
                                            <td colspan="10">
                                                <table class="table align-middle table-hover m-0 truncate">
                                                    <tbody>
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
                                                        @foreach ($candidatsByCorp as $candidat)
                                                            <tr>
                                                                <td>{{ $candidat->id }}</td>
                                                                <td>{{ $candidat->nina }}</td>
                                                                <td>{{ $candidat->nom }}</td>
                                                                <td>{{ $candidat->prenom }}</td>
                                                                <td>{{ $candidat->dateNaissance }}</td>
                                                                <td>{{ $candidat->genre }}</td>
                                                                <td>{{ $candidat->adresse }}</td>
                                                                <td>{{ $candidat->numero }}</td>
                                                                <td>{{ $candidat->status }}</td>
                                                                <td>
                                                                    <a href="#" class="btn btn-primary btn-sm" wire:click="show({{ $candidat->id }})" data-bs-toggle="modal"
                                                                        data-bs-target="#Modal"><i class="bi bi-eye"></i></a>
                                                                        @if ($candidat->etat == 1)
                                                                        <a href="#" class="btn btn-danger btn-sm " wire:click="bloquer({{ $candidat->id }})"><strong><i class="bi bi-lock me-2"></i>Suspendre</strong></a>
                                                                        @else
                                                                        <a href="#" class="btn btn-success btn-sm" wire:click="debloquer({{ $candidat->id }})"><strong><i class="bi bi-unlock me-2"></i>Debloquer</strong></a>
                                                                        @endif
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
