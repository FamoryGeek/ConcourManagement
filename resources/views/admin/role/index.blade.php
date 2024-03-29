@extends('layouts.admin')
@section('content')
    @include('admin.role.modal')
    <div class="row gx-4">
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="card-header">
                    <button class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal"
                    data-bs-target="#addRole">Ajouter</button>
                    <h5 class="card-title">Listes des Roles</h5>
                </div>
                <div class="card-body">
                    <div class="table-outer">
                        <div class="table-responsive">
                            <table class="table align-middle table-hover m-0 truncate">
                                <thead>
                                    <tr>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Etat</th>
                                        <th scope="col">Utilisateurs</th>
                                        <th scope="col">roles</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{ $role->nom }}</td>
                                            <td>
                                                @if ($role->type == 1)
                                                    <span class="btn btn-success btn-sm">Activer</span>
                                                @else
                                                    <span class="btn btn-danger btn-sm">Desactiver</span>
                                                @endif
                                            </td>
                                            <td>{{ count($role->users) }}</td>
                                            <td>{{ count($role->droits) }}</td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="#"><i class="bi bi-pencil"></i>
                                                </a>
                                                <a class="btn btn-info btn-sm" href="#"><i class="bi bi-trash"></i>
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
    <script>
        < script >
            $(document).on('click', '.update_modal', function() {
                var _this = $(this).parents('tr');
                $('#e_role_id').val(_this.find('.role_id').text());
                var role_id = $('#e_role_id').val();
                $('#e_role_nom').val(_this.find('.role_nom').text());
                var type_nom = (_this.find(".type_nom").text());
                var _option = '<option selected value="' + _this.find('.type_id').text() + '">' + type_nom + '</option>'
                $(_option).appendTo("#e_role_type");

                $.ajax({
                    url: '/admin/exceptDroit',
                    type: 'POST',
                    data: '&id=' + role_id + '&_token={{ csrf_token() }}',
                    success: function(resultat) {
                        $('#edit_customleave_select').html(resultat);
                    }
                });

                $.ajax({
                    url: '/admin/getDroit',
                    type: 'POST',
                    data: '&id=' + role_id + '&_token={{ csrf_token() }}',
                    success: function(resultat) {
                        $('#droits_listes').html(resultat);
                    }
                });

            })
        $(document).on('click', '.delete_modal', function() {
            var _this = $(this).parents('tr');
            $('.e_role_id').val(_this.find('.role_id').text());
        })
    </script>
    </script>
@endsection
