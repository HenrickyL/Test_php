@extends('admin.layouts.master')
@section("title") Editar Categorias - Painel
@endsection
@section('content')
<div class="page-header">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-circle-right2 mr-2"></i>
                <span class="font-weight-bold mr-2">Editar</span>
                <span class="badge badge-primary badge-pill animated flipInX">"{{ $addonCategory->name }}"</span>
            </h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>
<div class="content">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.updateAddonCategory') }}" method="POST" enctype="multipart/form-data">
                    <legend class="font-weight-semibold text-uppercase font-size-sm">
                        <i class="icon-address-book mr-2"></i> Detalhes da categoria
                    </legend>
                    <input type="hidden" name="id" value="{{ $addonCategory->id }}">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Nome:</label>
                        <div class="col-lg-9">
                            <input value="{{ $addonCategory->name }}" type="text" class="form-control form-control-lg" name="name"
                                placeholder="Addon Category Name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Tipe:</label>
                        <div class="col-lg-9">
                            <select name="type" class="form-control form-control-lg">
                                <option value="SINGLE" @if($addonCategory->type == "SINGLE") selected="selected" @endif> Seleção unica </option>
                                <option value="MULTI" @if($addonCategory->type == "MULTI") selected="selected" @endif> Seleção multipla </option>
                            </select>
                        </div>
                    </div>
                    @csrf
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">
                        ATUALIZAR
                        <i class="icon-database-insert ml-1"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection