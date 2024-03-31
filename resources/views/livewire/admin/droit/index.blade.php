<div>
    <div class="row gx-4">
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="card-header ">
                    <h5 class="card-title">Listes des droits</h5>
                </div>
                <div class="card-body">
                    <div class="table-outer">
                        <div class="table-responsive">
                            <table class="table align-middle table-hover m-0 truncate">
                                <thead>
                                    <tr>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Access</th>
                                        <th scope="col">Route</th>
                                        <th scope="col">Type Droit</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($droits as $droit)
                                        <tr>
                                            <td>{{ $droit->nom }}</td>
                                            <td>
                                                @if ($droit->acces == 1)
                                                    <span class="btn btn-success btn-sm">Activer</span>
                                                @else
                                                    <span class="btn btn-danger btn-sm">Desactiver</span>
                                                @endif
                                            </td>
                                            <td>{{ Route($droit->route) }}</td>
                                            <td>{{ $droit->type_droit->nom }}</td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="#"><i
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
