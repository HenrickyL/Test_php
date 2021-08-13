@extends('admin.layouts.master')
@section("title") Promo Slides - Painel
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
        <div class="header-elements d-none py-0 mb-3 mb-md-0">
            <div class="breadcrumb">
                <button type="button" class="btn btn-secondary btn-labeled btn-labeled-left" id="addNewSlider"
                    data-toggle="modal" data-target="#addNewSliderModal">
                <b><i class="icon-plus2"></i></b>
                Add Slide
                </button>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Status</th>
                            <th>No. de Slides</th>
                            <th>Posição</th>
                            <th>Tamanho</th>
                            <th>Criado em</th>
                            <th class="text-center" style="width: 10%;"><i class="
                                icon-circle-down2"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $slider)
                        <tr>
                            <td>{{ $slider->name }}</td>
                            <td>@if($slider->is_active)
                                <span class="badge badge-flat border-grey-800 text-default text-capitalize">
                                Ativo
                                </span>
                                @else
                                <span class="badge badge-flat border-grey-800 text-default text-capitalize">
                                Inativo
                                </span>
                                @endif
                            </td>
                            <td>{{ count($slider->slides) }}</td>
                            @if($slider->position_id == 0)
                            <td>Principal</td>
                            @endif
                            @if($slider->position_id == 1)
                            <td>Apartir da 1º loja</td>
                            @endif
                            @if($slider->position_id == 2)
                            <td>Apartir da 2º loja</td>
                            @endif
                            @if($slider->position_id == 3)
                            <td>Apartir da 3º loja</td>
                            @endif
                            @if($slider->position_id == 4)
                            <td>Apartir da 4º loja</td>
                            @endif
                            @if($slider->position_id == 5)
                            <td>Apartir da 5º loja</td>
                            @endif
                            @if($slider->position_id == 6)
                            <td>Apartir da 6º loja</td>
                            @endif
                            
                            @if($slider->size == 1)
                            <td>Extra Small</td>
                            @endif
                            @if($slider->size == 2)
                            <td>Small</td>
                            @endif
                            @if($slider->size == 3)
                            <td>Medium</td>
                            @endif
                            @if($slider->size == 4)
                            <td>Large</td>
                            @endif
                            @if($slider->size == 5)
                            <td>Extra Large</td>
                            @endif
                            
                            <td>{{ $slider->size }}</td>
                            <td>{{ $slider->created_at->diffForHumans() }}</td>
                            <td class="text-center">
                                <div class="btn-group btn-group-justified">
                                    <a href="{{ route('admin.get.editSlider', $slider->id) }}"
                                        class="badge badge-primary badge-icon"> Editar <i
                                        class="icon-database-edit2 ml-1"></i></a>
                                    @if($slider->is_active)
                                    <a href="{{ route('admin.disableSlider', $slider->id) }}" class="badge badge-primary badge-icon ml-1" data-popup="tooltip" title="Desativar Slide" data-placement="bottom"> <i class="icon-switch2"></i> </a>
                                    @else
                                    <a href="{{ route('admin.disableSlider', $slider->id) }}" class="badge badge-primary badge-icon ml-1 badge-danger" data-popup="tooltip" title="Ativar Slide" data-placement="bottom"> <i class="icon-switch2"></i> </a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="addNewSliderModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><span class="font-weight-bold">Add Slide</span></h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.createSlider') }}" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Nome:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg" name="name"
                                placeholder="Digite nome do slide" required>
                            <span class="help-text text-muted">O novo slide ficará INATIVO por padrão.</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Posição:</label>
                        <div class="col-lg-9">
                            <select name="position_id" class="form-control form-control-lg">
                                <option value="0">Posição principal</option>
                                <option value="1">Apartir da 1ª Loja</option>
                                <option value="2">Apartir da 2ª Loja</option>
                                <option value="3">Apartir da 3ª Loja</option>
                                <option value="4">Apartir da 4ª Loja</option>
                                <option value="5">Apartir da 5ª Loja</option>
                                <option value="6">Apartir da 6ª Loja</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Tamanho:</label>
                        <div class="col-lg-9">
                            <select name="size" class="form-control form-control-lg" required="required">
                                 <option value="1">Muito Pequeno</option>
                                 <option value="2">Pequeno</option>
                                 <option value="3">Medio</option>
                                 <option value="4">Grande</option>
                                 <option value="5">Muito Grande</option>
                            </select>
                        </div>
                    </div>
                    @csrf
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">
                        SALVAR
                        <i class="icon-database-insert ml-1"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $('.select').select2({
            minimumResultsForSearch: Infinity,
    });

    $('.slider-size').numeric({ allowThouSep:false, maxDecimalPlaces: 0, allowMinus: false, min:1, max: 5});
</script>
@endsection