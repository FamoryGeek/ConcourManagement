{{-- Add Role --}}
<div class="modal fade" id="addRole" tabindex="-1" aria-labelledby="exampleModalLgLabel"
                      aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title h4" id="exampleModalLgLabel">
                             Ajouter un role
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="{{ route('role.store') }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <!-- Row starts -->
                                    <div class="row gx-2">
                                        <div class="col-lg-6 col-sm-2 col-6 ">
                                            <div class="mb-3">
                                                <label class="form-label mb-3" for="a1">Nom du Role<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="a1" name="nom"
                                                    placeholder="Entrez le nom du role" autofocus>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-6">
                                            <div class="mb-3">
                                                <label class="form-label mb-3" for="a7">Etat<span class="text-danger">*</span></label>
                                                <select class="form-select" id="a7" name="type">
                                                    <option value="" selected disabled>Choisir</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        @foreach ($droits as $droit)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="id{{ $droit->id }}" name="role_droits[]" value="{{ $droit->id }}">
                                            <label class="form-check-label" for="id{{ $droit->id }}">{{ $droit->nom }}</label>
                                          </div>
                                          @endforeach
                                    </div>
                                    <!-- Row ends -->
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex gap-2 justify-content-end">
                                        <button type="submit" class="btn btn-primary">
                                            Enregistrer
                                        </button>
                                    </div>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

{{-- Edit Role --}}
<div id="edit_custom_policy" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modifier le Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('role.update') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                            <input type="hidden" id="e_role_id" name="id">
                            <label>Nom du Role<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="" id="e_role_nom"
                                name="nom">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label>Etat du Role <span class="text-danger">*</span></label>
                            <select name="type" class="form-control" id="e_role_type">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" id="droits_listes">

                    </div>
                    <div class="submit-section">
                        <button type="submit" class="btn btn-primary submit-btn">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Delete Role --}}
<div class="modal custom-modal fade" id="delete_custom_policy" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('role.delete') }}" method="POST">
                @csrf
                <input type="hidden" name="id" class="e_role_id">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Supprimer le droit</h3>
                        <p>Des Utilisateurs peuvent être en cours d'utilisation de ce droit,
                            Êtes vous sûr ?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary continue-btn">Supprimer</button>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-dismiss="modal"
                                    class="btn btn-primary cancel-btn">Annuler</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
