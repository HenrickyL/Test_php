@extends('admin.layouts.master')
@section("title") Editar Cupom - Painel
@endsection
@section('content')
<div class="page-header">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-circle-right2 mr-2"></i>
                <span class="font-weight-bold mr-2">Editar</span>
                <span class="badge badge-primary badge-pill animated flipInX">"{{ $coupon->name }} -> {{ $coupon->code }}"</span>
            </h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>
<div class="content">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.updateCoupon') }}" method="POST">
                    <legend class="font-weight-semibold text-uppercase font-size-sm">
                        <i class="icon-address-book mr-2"></i> Detalhes do Cupom
                    </legend>
                    <input type="hidden" name="id" value="{{ $coupon->id }}">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Nome:</label>
                        <div class="col-lg-9">
                            <input value="{{ $coupon->name }}" type="text" class="form-control form-control-lg" name="name"
                                placeholder="Nome do cupom" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Descrição:</label>
                        <div class="col-lg-9">
                            <input value="{{ $coupon->description }}" type="text" class="form-control form-control-lg" name="description"
                                placeholder="Descrição do cupom">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Codigo:</label>
                        <div class="col-lg-9">
                            <input value="{{ $coupon->code }}" type="text" class="form-control form-control-lg" name="code"
                                placeholder="Codigo do cupom" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Tipo de Desconto:</label>
                        <div class="col-lg-9">
                            <select class="form-control select-search select" name="discount_type" required>
                            <option value="AMOUNT" class="text-capitalize" @if($coupon->discount_type == "AMOUNT") selected="selected" @endif>
                            Valor Fixo
                            </option>
                            <option value="PERCENTAGE" class="text-capitalize" @if($coupon->discount_type == "PERCENTAGE") selected="selected" @endif>
                            Valor em %
                            </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row @if($coupon->discount_type =="AMOUNT") hidden @endif" id="max_discount">
                        <label class="col-lg-3 col-form-label">Desconto Max</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg max_discount" name="max_discount"
                                placeholder="Cupom Maximo aplicado em {{ config('settings.currencyFormat') }}" value="{{ $coupon->max_discount }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Desconto do Cupom::</label>
                        <div class="col-lg-9">
                            <input value="{{ $coupon->discount }}" type="text" class="form-control form-control-lg discount" name="discount"
                                placeholder="Desconto do Cupom" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Expira em:</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-control-lg daterange-single" value="{!! $coupon->expiry_date->format('m-d-Y') !!}" name="expiry_date">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Lojas:</label>
                        <div class="col-lg-9">
                            <select class="form-control select-search" name="restaurant_id" required>
                                <option value="0" class="text-capitalize" selected="selected">Todas</option>
                                @foreach ($restaurants as $restaurant)
                                <option value="{{ $restaurant->id }}" class="text-capitalize" @if($coupon->restaurant_id == $restaurant->id) selected="selected" @endif>{{ $restaurant->name }}</option>
                                @endforeach
                            </select>
                            <span class="help-text text-muted">Selecione a primeira opção <b>"Todas"</b> se o cupom puder ser aplicado a todas as lojas.</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Quantidade de cupons::</label>
                        <div class="col-lg-9">
                            <input value="{{ $coupon->max_count }}" type="text" class="form-control form-control-lg max_count" name="max_count"
                                placeholder="Quantidade de cupons a serem usados" required>
                                </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Subtotal mínimo</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg min_subtotal" name="min_subtotal"
                                placeholder="Min subtotal required for coupon in {{ config('settings.currencyFormat') }}" value="{{ $coupon->min_subtotal }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Mensagem de subtotal não alcançado</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg" name="subtotal_message"
                                placeholder="Mensagem de subtotal não alcançado" value="{{ $coupon->subtotal_message }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Esta Ativo?</label>
                        <div class="col-lg-9">
                            <div class="checkbox checkbox-switchery">
                                <label>
                                <input value="true" type="checkbox" class="switchery-primary isactive" @if($coupon->is_active) checked="checked" @endif name="is_active">
                                </label>
                            </div>
                        </div>
                    </div>
                    @csrf
                    <div class="text-left">
                        <a class="btn btn-danger text-white" data-toggle="modal" data-target="#deleteCouponConfirmModal" id="deleteCouponButton">
                        DELETAR
                        <i class="icon-trash ml-1"></i>
                        </a>
                    </div>
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
<div id="deleteCouponConfirmModal" class="modal fade mt-5" tabindex="-1">
    <div class="modal-dialog modal-xs">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><span class="font-weight-bold">Are you sure?</span></h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="modal-footer mt-4">
                    <a href="{{ route('admin.deleteCoupon', $coupon->id) }}" class="btn btn-primary">Yes</a>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('.select').select2();
    
        var isactive = document.querySelector('.isactive');
        new Switchery(isactive, { color: '#f44336' });
        
        $('.form-control-uniform').uniform();
        
        $('.daterange-single').daterangepicker({ 
            singleDatePicker: true,
        });
        
                $('[name="discount_type"]').change(function(event) {
         console.log($(this).val());
            if ($(this).val() == "PERCENTAGE") {
             $('#max_discount').removeClass('hidden');
            } else {
              $('#max_discount').addClass('hidden');
            }
        });
        $('.min_subtotal').numeric({ allowThouSep:false, maxDecimalPlaces: 2, allowMinus: false });
        $('.max_discount').numeric({ allowThouSep:false, maxDecimalPlaces: 2, allowMinus: false });
        $('.max_count').numeric({ allowThouSep:false, maxDecimalPlaces: 0, allowMinus: false });
        $('.discount').numeric({ allowThouSep:false, maxDecimalPlaces: 2, allowMinus: false });
    });
</script>
@endsection