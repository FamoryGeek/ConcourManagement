@extends('layouts.admin')
@section('content')
    @include('admin.role.modal')
    <div class="row gx-4">
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title">Listes des Roles</h5>
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
                                        <th class="l-days">Etat</th>
                                        <th class="l-assignee">Utilisateurs</th>
                                        <th class="l-assignee">Droits</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td class="role_id">{{ $role->id }}</td>
                                            <td class="role_nom">{{ $role->nom }}</td>
                                            <td class="d-none type_id">{{ $role->type }}</td>
                                            <td class="type_nom">
                                                @if ($role->type == 1)
                                                    <span class="btn btn-success btn-sm">Activer</span>
                                                @else
                                                    <span class="btn btn-danger btn-sm">Desactiver</span>
                                                @endif
                                            </td>
                                            <td>{{ count($role->users) }}</td>
                                            <td>{{ count($role->droits) }}</td>
                                            <td>
                                                <a class="btn btn-info btn-sm update_modal" data-bs-toggle="modal"
                                                    data-bs-target="#edit_custom_policy" href="#"><i
                                                        class="bi bi-pencil"></i>
                                                </a>
                                                <a class="btn btn-danger
                                                 btn-sm delete_modal"
                                                    data-bs-toggle="modal" data-bs-target="#delete_custom_policy"
                                                    href="#"><i class="bi bi-trash"></i>
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
@endsection
@section('script')
    <script>
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
@endsection
