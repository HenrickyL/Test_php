@extends('admin.layouts.master')
@section("title")Entragador |Painel
@endsection
@section('content')
<div class="page-header">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-circle-right2 mr-2"></i>
                <span class="font-weight-bold mr-2">TOTAL</span>
                <span class="badge badge-primary badge-pill animated flipInX">{{ $count }}</span>
            </h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>
<div class="content">
    <form action="{{ route('admin.post.searchUsers') }}" method="GET">
        <div class="form-group form-group-feedback form-group-feedback-right search-box">
            <input type="text" class="form-control form-control-lg search-input"
                placeholder="Procure Pelo nome ou e-mail..." name="query">
            <div class="form-control-feedback form-control-feedback-lg">
                <i class="icon-search4"></i>
            </div>
        </div>
        @csrf
    </form>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 20%;">Nome</th>
                            <th style="width: 50%">E-mail</th>
                            <th style="width: 20%;">Criado</th>
                            <th style="width: 10%;">Função</th>
                            <th class="text-center" style="width: 10%;"><i class="
                                icon-circle-down2"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                            <td>
                                @foreach ($user->roles as $role)
                                <span class="badge badge-flat border-grey-800 text-default text-capitalize">
                                {{ $role->name }}
                                </span> @endforeach
                            </td>
                            <td class="text-center">
                                <div class="btn-group btn-group-justified">
                                    <a href="{{ route('admin.get.manageDeliveryGuysRestaurants', $user->id) }}"
                                        class="badge badge-primary badge-icon"> Gerenciar <i
                                        class="icon-link ml-1"></i></a>
                                    <a href="{{ route('admin.get.editUser', $user->id) }}"
                                    class="badge bg-secondary badge-icon ml-2"> Editar <i
                                    class="icon-database-edit2 ml-1"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-3">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection