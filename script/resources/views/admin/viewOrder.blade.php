@extends('admin.layouts.master')
@section("title") Detalhes do Pedido - Painel
@endsection
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-8 mt-4" id="printThis">
            <div class="card">
                <div href="#" class="btn btn-block content-group" style="text-align: left; background-color: #8360c3; color: #fff; border-radius: 0;"><strong style="font-size: 1.3rem;">{{ $order->unique_order_id }}</strong>
                    <a href="javascript:void(0)" id="printButton" class="btn btn-sm" style="color: #fff; border: 1px solid #ccc; float: right;">Imprimir</a>
                </div>
                <div class="p-3">
                    <div class="form-group">
                        <label class="control-label no-margin text-semibold mr-2"><strong>Dados do pedido: </strong></label>
                        {{ $order->created_at}}  ( {{ $order->created_at->diffForHumans() }} )
                    </div>
                    <hr>
                    <div class="form-group">
                        <label class="control-label no-margin text-semibold mr-2"><strong>Detalhes: </strong></label>
                        <br>
                        <p><b>Nome: </b> {{ $order->user->name }}</p>
                        <p><b>Email: </b> {{ $order->user->email }}</p>
                        <p><b>Telefone: </b> {{ $order->user->phone }}</p>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label class="control-label no-margin text-semibold mr-2"><strong>Nome da Loja: </strong></label>
                        {{ $order->restaurant->name }}
                    </div>
                    <div class="form-group">
                        <label class="control-label no-margin text-semibold mr-2"><strong>Status:</strong></label>
                        <span class="badge badge-flat border-grey-800 text-default text-capitalize">
                        @if ($order->orderstatus_id == 1) Pedido Realizado @endif
                        @if ($order->orderstatus_id == 2) Pedido Aceito @endif
                        @if ($order->orderstatus_id == 3) Entregador Atribuido @endif
                        @if ($order->orderstatus_id == 4) Retirada @endif
                        @if ($order->orderstatus_id == 5) Concluido @endif
                        @if ($order->orderstatus_id == 6) Cancelado @endif
                        @if ($order->orderstatus_id == 7) Pronto para Retirada @endif
                        </span>
                        @if($order->accept_delivery !== null)
                        @if($order->orderstatus_id > 2 && $order->orderstatus_id  < 6)
                        <span class="badge badge-flat border-grey-800 text-default text-capitalize">
                        Delivery by: <b>{{ $order->accept_delivery->user->name }}</b>
                        </span>
                        @endif
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="control-label no-margin text-semibold mr-2"><strong>Endereço: </strong></label>
                        <p>{{ $order->address }}</p>
                    </div>
                    <div class="form-group">
                        <label class="control-label no-margin text-semibold mr-2"><strong>Pagamento: </strong></label>
                        <span class="badge badge-flat border-grey-800 text-default text-capitalize">
                        {{ $order->payment_mode }}
                        </span>
                    </div>
                    <div class="form-group">
                        <label class="control-label no-margin text-semibold mr-2"><strong>Comentarios: </strong></label>
                        <span>
                        {{ $order->order_comment }}
                        </span>
                    </div>
                    <hr>
                    @php
                    function calculateAddonTotal($addons) {
                    $total = 0;
                    foreach ($addons as $addon) {
                    $total += $addon->addon_price;
                    }
                    return $total;
                    }
                    @endphp
                    <div class="text-right">
                        <div class="form-group">
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col-md-12 p-2 mb-3" style="background-color: #f7f8fb; float: right; text-align: left;">
                                    @foreach($order->orderitems as $item)
                                    <div>
                                        <div class="d-flex mb-1 align-items-start" style="font-size: 1.2rem;">
                                            <span class="badge badge-flat border-grey-800 text-default mr-2">x{{ $item->quantity }}</span>
                                            <strong class="mr-2" style="width: 100%;">{{ $item->name }}</strong>
                                            <span class="badge badge-flat border-grey-800 text-default">{{ config('settings.currencyFormat') }} {{ ($item->price +calculateAddonTotal($item->order_item_addons)) * $item->quantity }}</span>
                                        </div>
                                        @if(count($item->order_item_addons))
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Categoria</th>
                                                        <th>Adicionais</th>
                                                        <th>Valor</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($item->order_item_addons as $addon)
                                                    <tr>
                                                        <td>{{ $addon->addon_category_name }}</td>
                                                        <td>{{ $addon->addon_name }}</td>
                                                        <td>{{ config('settings.currencyFormat') }}{{ $addon->addon_price }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        @endif
                                        @if(!$loop->last)
                                        <div class="mb-2" style="border-bottom: 2px solid #c9c9c9;"></div>
                                        @endif
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <label class="control-label no-margin text-semibold mr-2"><strong>Cupom: </strong></label>
                            @if($order->coupon_name == NULL) NONE @else
                            <span class="badge badge-flat border-grey-800 text-default text-capitalize">
                            {{ $order->coupon_name }}
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label no-margin text-semibold mr-2"><strong>Taxas da Loja: </strong></label>
                            {{ config('settings.currencyFormat') }}{{ $order->restaurant_charge }}
                        </div>
                        <div class="form-group">
                            <label class="control-label no-margin text-semibold mr-2"><strong>Entrega: </strong></label>
                            {{ config('settings.currencyFormat') }}{{ $order->delivery_charge }}
                        </div>
                        @if(!$order->tax == NULL)
                        <div class="form-group">
                            <label class="control-label no-margin text-semibold mr-2"><strong>Taxas: </strong></label>
                            {{ $order->tax }}%
                        </div>
                        @endif
                        <hr>
                        <div class="form-group">
                            <h3>
                                <label class="control-label no-margin text-semibold mr-2"><strong>TOTAL</strong></label>
                                <strong> {{ config('settings.currencyFormat') }} {{ $order->total }} </strong>
                            </h3>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="form-group d-flex">
                        @if($order->orderstatus_id == 1) 
                        <form action="{{ route('admin.acceptOrderFromAdmin') }}" class="mr-2" method="POST">
                            <input type="hidden" name="id" value="{{ $order->id }}">
                            @csrf
                            <button 
                                class="btn btn-primary btn-labeled btn-labeled-left mr-2"> <b><i
                                class="icon-checkmark3 ml-1"></i> </b> Aceitar Pedido </button>
                        </form>
                        @endif  
                        @if($order->orderstatus_id == 1 || $order->orderstatus_id == 2 || $order->orderstatus_id == 3 || $order->orderstatus_id == 4 || $order->orderstatus_id == 7) 
                        <a href="javascript:void(0)" class="btn btn-danger btn-labeled dropdown-toggle" data-toggle="dropdown">
                        Cancelar Pedido
                        </a>
                        <div class="dropdown-menu">
                            <form action="{{ route('admin.cancelOrderFromAdmin') }}" method="POST">
                                <input type="hidden" name="order_id" value="{{ $order->id }}">
                                <input type="hidden" name="refund_type" value="NOREFUND">
                                @csrf
                                <button class="dropdown-item" type="submit">
                                Cancelar e nao reenbolsar
                                </button>
                            </form>
                            <form action="{{ route('admin.cancelOrderFromAdmin') }}" method="POST">
                                <input type="hidden" name="order_id" value="{{ $order->id }}">
                                <input type="hidden" name="refund_type" value="FULL">
                                @csrf
                                <button class="dropdown-item" type="submit">
                                Cancelar com reembolso total
                                </button>
                            </form>
                            <form action="{{ route('admin.cancelOrderFromAdmin') }}" method="POST">
                                <input type="hidden" name="order_id" value="{{ $order->id }}">
                                <input type="hidden" name="refund_type" value="HALF">
                                @csrf
                                <button class="dropdown-item" type="submit">
                                Cancelar com metade do reembolso
                                </button>
                            </form>
                        </div>
                        @endif
                    </div>
                    @if($order->delivery_type==1)
                        @if($order->orderstatus_id ==  1) 
                            <label class="control-label no-margin text-semibold mr-2"><strong>Atribuir entregador</strong></label>
                            <form action="{{route('admin.assignDeliveryFromAdmin')}}" method="POST">
                                <input type="text" hidden value="{{$order->id}}" name="order_id">
                                <input type="text" hidden value="{{$order->user->id}}" name="customer_id">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <select class="form-control select" data-fouc  name="user_id" required="required">
                                            <option></option>
                                            @foreach ($users as $user)
                                            @if ($user->hasRole('Delivery Guy'))
                                            <option value="{{$user->id}}" @if(!$user->delivery_guy_detail) disabled="disabled" @endif>{{$user->name}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-secondary mr-2">
                                        Atribuir entrega
                                        </button>
                                    </div>
                                </div>
                            </form>
                        @endif
                    @endif 
                    <hr>
                    @if($order->delivery_type==1)
                        @if( $order->orderstatus_id == 3 || $order->orderstatus_id == 4 || $order->orderstatus_id == 5)
                            <p> <strong>Assigned Delivery Guy: {{ $order->accept_delivery->user->name }}</strong></p>
                            <form action="{{route('admin.reAssignDeliveryFromAdmin')}}" method="POST">
                                <input type="text" hidden value="{{$order->id}}" name="order_id">
                                <input type="text" hidden value="{{$order->user->id}}" name="customer_id">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <select class="form-control select" data-fouc name="user_id" required="required">
                                            <option></option>
                                            @foreach ($users as $user)
                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-secondary mr-2">
                                        Reatribuir entrega
                                        </button>
                                    </div>
                                </div>
                            </form>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#printButton').on('click',function(){
        $('#printThis').printThis();
    })
    
     $('.select').select2({
         placeholder: 'Select Delivery Guy',
        allowClear: true,
     }); 
</script>
@endsection