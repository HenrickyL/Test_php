@extends('admin.layouts.master')
@section("title") Editar Usuarios - Painel
@endsection
@section('content')
<style>
    #showPassword {
    cursor: pointer;
    padding: 5px;
    border: 1px solid #E0E0E0;
    border-radius: 0.275rem;
    color: #9E9E9E;
    }
    #showPassword:hover {
    color: #616161;
    }
</style>
<div class="page-header">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-circle-right2 mr-2"></i>
                <span class="font-weight-bold mr-2">Editar</span>
                <span class="badge badge-primary badge-pill animated flipInX">"{{ $user->email }}"</span>
            </h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>

<div class="content">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.updateUser') }}" method="POST" enctype="multipart/form-data">
                        <legend class="font-weight-semibold text-uppercase font-size-sm">
                            <i class="icon-address-book mr-2"></i> Detalhes do usuario
                        </legend>
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Nome:</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-control-lg" name="name"
                                    value="{{ $user->name }}" placeholder="Nome completo" required
                                    autocomplete="new-name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">E-mail:</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-control-lg" name="email"
                                    value="{{ $user->email }}" placeholder="Endereço de e-mail" required
                                    autocomplete="new-email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Telefone:</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-control-lg" name="phone" value="{{ $user->phone }}" 
                                    placeholder="Numero do telefone" required autocomplete="new-phone">
                            </div>
                        </div>
                        <div class="form-group row form-group-feedback form-group-feedback-right">
                            <label class="col-lg-3 col-form-label">Senha:</label>
                            <div class="col-lg-9">
                                <input id="passwordInput" type="password" class="form-control form-control-lg"
                                    name="password" placeholder="Digite uma senha (min 6 characters)"
                                    autocomplete="new-password">
                            </div>
                            <div class="form-control-feedback form-control-feedback-lg">
                                <span id="showPassword"><i class="icon-unlocked2"></i> Mostrar</span>
                            </div>
                        </div>
                        <legend class="font-weight-semibold text-uppercase font-size-sm">
                            <i class="icon-tree7 mr-2"></i> Gerenciamento de Funções
                        </legend>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Função Atual:</label>
                            <div class="col-lg-9">
                                @foreach ($user->roles as $role)
                                <span class="badge badge-flat border-grey-800 text-default text-capitalize font-size-lg">
                                {{ $role->name }}
                                </span> @endforeach
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Nova Função:</label>
                            <div class="col-lg-9">
                                @if($user->id == "1")
                                <span>A função de superadministrador não pode ser alterada</span>
                                @else
                                <select class="form-control select" data-fouc name="roles">
                                    <option></option>
                                   @foreach ($roles as $key => $role)
                                    @if($key != 1)
                                        <option value="{{ $role->name }}" class="text-capitalize">{{ $role->name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                @endif
                            </div>
                        </div>
                        @if($user->hasRole("Delivery Guy"))
                            <legend class="font-weight-semibold text-uppercase font-size-sm" id="deliveryGuyDetails">
                                <i class="icon-truck mr-2"></i> Detalhes do Entregador
                            </legend>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Nome ou Apelido:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control form-control-lg" name="delivery_name"
                                        value="{{ !empty($user->delivery_guy_detail->name) ? $user->delivery_guy_detail->name : "" }}" placeholder="Digite o nome ou apelido do entregador" required
                                        autocomplete="new-name">
                                        <span class="help-text text-muted">Este nome será exibido para o usuário/clientes</span>
                                </div>
                                
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Idade</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control form-control-lg" name="delivery_age"
                                        value="{{ !empty($user->delivery_guy_detail->age) ? $user->delivery_guy_detail->age : "" }}" placeholder="Idade do entregador">
                                </div>
                            </div>
                            <div class="form-group row">
                                @if(!empty($user->delivery_guy_detail->photo))
                                <div class="col-lg-9 offset-lg-3">
                                    <img src="{{ substr(url('/'), 0, strrpos(url('/'), '/')) }}/assets/img/delivery/{{ $user->delivery_guy_detail->photo }}" alt="delivery-photo" class="img-fluid mb-2" style="width: 90px; border-radius: 50%">
                                </div>
                                @endif
                                <label class="col-lg-3 col-form-label">Foto:</label>
                                <div class="col-lg-9">
                                    <input type="file" class="form-control-uniform" name="delivery_photo" data-fouc>
                                    <span class="help-text text-muted">Tamanho 250x250</span>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Descrição</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control form-control-lg" name="delivery_description"
                                        value="{{ !empty($user->delivery_guy_detail->description) ? $user->delivery_guy_detail->description : "" }}" placeholder="Descrição curta do entregador">
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Placa do Veiculo</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control form-control-lg" name="delivery_vehicle_number"
                                        value="{{ !empty($user->delivery_guy_detail->vehicle_number) ? $user->delivery_guy_detail->vehicle_number : "" }}" placeholder="Placa do veiculo do entregador.">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">SMS Notification para novos pedidos?</label>
                                <div class="col-lg-9">
                                    <div class="checkbox checkbox-switchery mt-2">
                                        <label>
                                        <input value="true" type="checkbox" class="switchery-primary"
                                        @if(!empty($user->delivery_guy_detail->is_notifiable) && $user->delivery_guy_detail->is_notifiable) checked="checked" @endif name="is_notifiable">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Comissão</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control form-control-lg commission_rate" name="delivery_commission_rate" placeholder="Comissão em %" value="{{  !empty($user->delivery_guy_detail->commission_rate) ? $user->delivery_guy_detail->commission_rate : "0" }}" required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Máximo de pedidos na fila</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control form-control-lg max_orders" name="max_accept_delivery_limit" placeholder="Máximo de pedidos na fila" value="{{  !empty($user->delivery_guy_detail->max_accept_delivery_limit) ? $user->delivery_guy_detail->max_accept_delivery_limit : "100" }}" required="required">
                                </div>
                            </div>
                        @endif
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">
                            ATUALIZAR
                            <i class="icon-database-insert ml-1"></i>
                            </button>
                        </div>
                        @csrf
                        <div class="text-left">
                            <div class="btn-group btn-group-justified" style="width: 150px">
                                @if($user->is_active)
                                <a class="btn btn-danger" href="{{ route('admin.banUser', $user->id) }}" data-popup="tooltip" title="O usuário não poderá fazer pedidos se for banido">
                                    Banir Usuario
                                    <i class="icon-switch2 ml-1"></i>
                                </a>
                                @else
                                <a class="btn btn-primary" href="{{ route('admin.banUser', $user->id) }}" data-popup="tooltip" title="Atualmente, {{ $user->name }} foi proibido de fazer pedidos">
                                    Reativar Usuario
                                    <i class="icon-switch2 ml-1"></i>
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <legend class="font-weight-semibold text-uppercase font-size-sm">
                            <i class="icon-piggy-bank mr-2"></i> Balanço atual da {{ config("settings.walletName") }}:  <span style="font-size: 1rem;">{{ config('settings.currencyFormat') }} {{ $user->balanceFloat }}</span>
                            <button class="btn btn-md btn-default" id="viewTransactions" style="float: right; border: 1px solid #ccc; line-height: 10px;">Ver Transações</button>
                    </legend>
                    <button class="btn btn-primary btn-labeled btn-labeled-left mr-2" id="addAmountButton"><b><i class="icon-plus2"></i></b> Add valor</button>
                    <button class="btn btn-secondary btn-labeled btn-labeled-left mr-2" id="substractAmountButton"><b><i class="icon-minus3"></i></b> Retirar Valor</button>

                    <form action="{{ route('admin.addMoneyToWallet') }}" method="POST" id="addAmountForm" class="hidden" style="margin-top: 2rem;">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                         <div class="form-group row">
                            <label class="col-lg-4 col-form-label"><span class="text-danger">*</span>Add Dinheiroy:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control form-control-lg balance" name="add_amount"
                                    placeholder="Amount in {{ config('settings.currencyFormat') }}" required>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-lg-4 col-form-label"><span class="text-danger">*</span>Mensagem:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control form-control-lg" name="add_amount_description"
                                    placeholder="Breve descrição ou mensagem" required>
                            </div>
                        </div>
                        @csrf
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">
                            Atualizar Balanço
                            <i class="icon-database-insert ml-1"></i>
                            </button>
                        </div>
                    </form>

                    <form action="{{ route('admin.substractMoneyFromWallet') }}" method="POST" id="substractAmountForm" class="hidden" style="margin-top: 2rem;">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                         <div class="form-group row">
                            <label class="col-lg-4 col-form-label"><span class="text-danger">*</span>Retirar Dinheiro:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control form-control-lg balance" name="substract_amount"
                                    placeholder="Amount in {{ config('settings.currencyFormat') }}" required>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-lg-4 col-form-label"><span class="text-danger">*</span>Mensagem:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control form-control-lg" name="substract_amount_description"
                                    placeholder="Breve descrição ou mensagem" required>
                            </div>
                        </div>
                        @csrf
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">
                            Atualizar Balanço
                            <i class="icon-database-insert ml-1"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="tansactionsDiv">
         <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                     <legend class="font-weight-semibold text-uppercase font-size-sm">
                            <i class="icon-transmission mr-2"></i> TRANSAÇÕES na {{ config('settings.walletName') }}
                    </legend>
                    @if(count($user->transactions) > 0)
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        Tipo
                                    </th>
                                    <th width="20%">
                                        Valor
                                    </th>
                                    <th>
                                        Descrição
                                    </th>
                                    <th>
                                        Data
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user->transactions->reverse() as $transaction)
                                <tr>
                                    <td>
                                        @if($transaction->type === "deposit")
                                            <span class="badge badge-flat border-grey-800 text-success text-capitalize">{{$transaction->type}}</span>
                                        @else
                                            <span class="badge badge-flat border-grey-800 text-danger text-capitalize">{{$transaction->type}}</span>
                                        @endif
                                    </td>
                                    <td>
                                        {{ config('settings.currencyFormat') }} {{ number_format($transaction->amount / 100, 2,'.', '') }}
                                    </td>
                                    <td>
                                        {{ $transaction->meta["description"] }}
                                    </td>
                                    <td>
                                        {{ $transaction->created_at->diffForHumans() }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p class="text-muted text-center mb-0">Nenhuma transação feita na carteira. {{ config('settings.walletName') }}</p>
                    @endif   
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {

        if (Array.prototype.forEach) {
                 var elems = Array.prototype.slice.call(document.querySelectorAll('.switchery-primary'));
                 elems.forEach(function(html) {
                     var switchery = new Switchery(html, { color: '#2196F3' });
                 });
             }
             else {
                 var elems = document.querySelectorAll('.switchery-primary');
                 for (var i = 0; i < elems.length; i++) {
                     var switchery = new Switchery(elems[i], { color: '#2196F3' });
                 }
             }
             
        $('.form-control-uniform').uniform();

        $("#showPassword").click(function (e) { 
            $("#passwordInput").attr("type", "text");
        });
        $('.select').select2({
            minimumResultsForSearch: Infinity,
            placeholder: 'Select Role (Old role will be revoked and the new role will be applied)',
        });
        $('.balance').numeric({allowThouSep:false, maxDecimalPlaces: 2 });

        $("#addAmountButton").click(function(event) {
            $('#addAmountButton').hide();
            $('#substractAmountButton').hide();
            $("#addAmountForm").removeClass('hidden');
            $("#substractAmountForm").addClass('hidden');
        });

        $("#substractAmountButton").click(function(event) {
            $('#addAmountButton').hide();
            $('#substractAmountButton').hide();
            $("#addAmountForm").addClass('hidden');
            $("#substractAmountForm").removeClass('hidden');
        });

        $("#viewTransactions").click(function(event) {
            var targetOffset = $('#tansactionsDiv').offset().top - 70;
            $('html, body').animate({scrollTop: targetOffset}, 500);
        });

        $('.commission_rate').numeric({ allowThouSep:false, maxDecimalPlaces: 2, max: 100, allowMinus: false });
        $('.max_orders').numeric({ allowThouSep:false, maxDecimalPlaces: 0, max: 99999, allowMinus: false });
    });
</script>
@endsection