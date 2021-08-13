@extends('admin.layouts.master')
@section("title") Logs de Entregador - Painel
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
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Dinheiro na mão</th>
                            <th class="text-center"><i class="
                                icon-circle-down2"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($deliveryCollections as $dC)
                        <tr>
                            <td><a href="{{ route('admin.get.editUser', $dC->user->id) }}">{{ $dC->user->name }}</a></td>
                            <td>{{ $dC->user->email }}</td>
                            <td>{{ $dC->user->phone }}</td>
                            <td>
                               {{ config('settings.currencyFormat') }} {{ $dC->amount }}
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-primary collectCashBtn" data-toggle="modal" data-target="#collectCashModal{{$dC->id}}"> Processo <i
                                    class="icon-pencil7 ml-1"></i></button>
                                <a href="{{ route('admin.deliveryCollectionLogsForSingleUser', $dC->user_id) }}" class="btn btn-sm btn-primary collectCashBtn" data-popup="tooltip" data-placement="left" title="Exibir logs de entregas anteriores de {{ $dC->user->name }}"> Ver Logs <i
                                    class="icon-database-time2 ml-1"></i></a>
                            </td>
                        </tr>
                        <div id="collectCashModal{{$dC->id}}" class="modal fade" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><span class="font-weight-bold">Dinheiro na conta: {{ config('settings.currencyFormat') }} {{ $dC->amount }}</span></h5>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin.collectDeliveryCollection', $dC->user_id) }}" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="delivery_collection_id" value="{{ $dC->id }}">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Tipo:</label>
                                                <div class="col-lg-9">
                                                    <select class="form-control form-control-lg amountType" name="type">
                                                        <option value="FULL">Valor Total</option>
                                                        <option value="CUSTOM">Valor Parcial</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row hidden customAmountDiv">
                                                <label class="col-lg-3 col-form-label">Valor:</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control form-control-lg custom_amount" name="custom_amount"
                                                        placeholder="Digite um valor em {{ config('settings.currencyFormat') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Mensagem:</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control form-control-lg" name="message"
                                                        placeholder="Mensagem ou Descrição">
                                                </div>
                                            </div>
                                            @csrf
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-primary">
                                                Coletar
                                                <i class="icon-cash3 ml-1"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-3">
                    {{ $deliveryCollections->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
    $('.custom_amount').numeric({ allowThouSep:false, maxDecimalPlaces: 2, allowMinus: false });
      $('body').on("change", ".amountType", function(e) {
        if ($(this).val() == "FULL") {
             $(this).parents('.modal-body').find("[name='custom_amount']").removeAttr('required');
             $(this).parents('.modal-body').find(".customAmountDiv").addClass('hidden');
        }
        if ($(this).val() == "CUSTOM") {
             $(this).parents('.modal-body').find("[name='custom_amount']").val("").attr('required', 'required');
             $(this).parents('.modal-body').find(".customAmountDiv").removeClass('hidden');
        }
    });
    });
</script>
@endsection
