
<?php $__env->startSection("title"); ?> Lojas - Painel
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<style>
    .delivery-div {
        background-color: #fafafa;
        padding: 1rem;
    }

    .location-search-block {
        position: relative;
        top: -26rem;
        z-index: 999;
    }
</style>
<div class="page-header">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-circle-right2 mr-2"></i>
                <?php if(empty($query)): ?>
                <span class="font-weight-bold mr-2">TOTAL</span>
                <span class="badge badge-primary badge-pill animated flipInX"><?php echo e($count); ?></span>
                <?php else: ?>
                <span class="font-weight-bold mr-2">TOTAL</span>
                <span class="badge badge-primary badge-pill animated flipInX mr-2"><?php echo e($count); ?></span>
                <span class="font-weight-bold mr-2">Resultados para "<?php echo e($query); ?>"</span>
                <?php endif; ?>
            </h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
        <div class="header-elements d-none py-0 mb-3 mb-md-0">
            <div class="breadcrumb">
                <a href="<?php echo e(route('admin.sortStores')); ?>"
                    class="btn btn-secondary btn-labeled btn-labeled-left mr-2">
                    <b><i class="icon-sort"></i></b>
                    Classificar Lojas
                </a>
                <?php if(!Request::is('admin/stores/pending-acceptance')): ?>
                <a href="<?php echo e(route('admin.pendingAcceptance')); ?>"
                    class="btn btn-secondary btn-labeled btn-labeled-left mr-2">
                    <b><i class="icon-exclamation"></i></b>
                    Aprovação Pendente
                </a>
                <?php endif; ?>
                <?php if(Request::is('admin/stores')): ?>
                <button type="button" class="btn btn-secondary btn-labeled btn-labeled-left mr-2" id="addNewRestaurant"
                    data-toggle="modal" data-target="#addNewRestaurantModal">
                    <b><i class="icon-plus2"></i></b>
                    Add Loja
                </button>
                <button type="button" class="btn btn-secondary btn-labeled btn-labeled-left" id="addBulkRestaurant"
                    data-toggle="modal" data-target="#addBulkRestaurantModal">
                    <b><i class="icon-database-insert"></i></b>
                    Bulk CSV Upload
                </button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <form action="<?php echo e(route('admin.post.searchRestaurants')); ?>" method="GET">
        <div class="form-group form-group-feedback form-group-feedback-right search-box">
            <input type="text" class="form-control form-control-lg search-input" placeholder="Procurar loja pelo nome ..."
                name="query">
            <div class="form-control-feedback form-control-feedback-lg">
                <i class="icon-search4"></i>
            </div>
        </div>
        <button type="submit" class="hidden">Search</button>
        <?php echo csrf_field(); ?>
    </form>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imagem</th>
                            <th>Nome</th>
                            <th>Proprietario</th>
                            <th style="width: 15%">Criado em</th>
                            <th class="text-center" style="width: 10%;"><i class="
                                icon-circle-down2"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $restaurants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $restaurant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($restaurant->id); ?></td>
                            <td><img src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?><?php echo e($restaurant->image); ?>"
                                    alt="<?php echo e($restaurant->name); ?>" height="80" width="80"
                                    style="border-radius: 0.275rem;"></td>
                            <td><?php echo e($restaurant->name); ?></td>
                            <?php if(count($restaurant->users)): ?>
                            <?php
                                $resUsercount = 0
                            ?>
                                <?php $__currentLoopData = $restaurant->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $restaurantUser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($restaurantUser->hasRole("Store Owner")): ?>
                                    <?php
                                        $resUsercount++;
                                    ?>
                                    <td>
                                        <a href="<?php echo e(route('admin.get.editUser', $restaurantUser->id)); ?>"><?php echo e($restaurantUser->name); ?></a>
                                        <a href="<?php echo e(route('admin.impersonate', $restaurantUser->id)); ?>"
                                                    class="badge badge-default badge-icon ml-2"  data-popup="tooltip"
                                        data-placement="left" title="Acessar Painel <?php echo e($restaurantUser->name); ?>" style="border: 1px solid #BDBDBD;"> <i
                                                    class="icon-arrow-right15"></i></a>
                                    </td>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php if($resUsercount == 0): ?>
                                <td>
                                    <span class="badge badge-flat border-grey-800 text-default text-capitalize">
                                        NÂO ATRIBUIDO
                                    </span>
                                </td>
                            <?php endif; ?>
                            <?php else: ?>
                            <td>
                                <span class="badge badge-flat border-grey-800 text-default text-capitalize">
                                    NÂO ATRIBUIDO
                                </span>
                            </td>
                            <?php endif; ?>
                            <td><?php echo e($restaurant->created_at->diffForHumans()); ?></td>
                            <td class="text-center">
                                <div class="btn-group btn-group-justified align-items-center">
                                    <a href="<?php echo e(route('admin.get.editRestaurant', $restaurant->id)); ?>"
                                        class="badge badge-primary badge-icon"> Editar <i
                                            class="icon-database-edit2 ml-1"></i></a>
                                     <a href="<?php echo e(route('admin.getRestaurantItems', $restaurant->id)); ?>"
                                        class="badge badge-primary badge-icon ml-1" data-popup="tooltip"
                                        title="Ver produtos do(a) <?php echo e($restaurant->name); ?>" data-placement="bottom"> <i
                                            class="icon-arrow-right5"></i> </a>

                                    <div class="checkbox checkbox-switchery ml-1" style="padding-top: 0.8rem;">
                                        <label>
                                        <input value="true" type="checkbox" class="action-switch"
                                        <?php if($restaurant->is_active): ?> checked="checked" <?php endif; ?> data-id="<?php echo e($restaurant->id); ?>">
                                        </label>
                                    </div>

                                    <?php if(Request::is('admin/stores/pending-acceptance')): ?>
                                    <a href="<?php echo e(route('admin.acceptRestaurant', $restaurant->id)); ?>"
                                        class="badge badge-primary badge-icon ml-1" data-popup="tooltip" title="Aceitar"
                                        data-placement="bottom" style="background-color: #FF5722"> <i
                                            class="icon-check"></i> </a>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="mt-3">
                    <?php echo e($restaurants->appends($_GET)->links()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<div id="addNewRestaurantModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><span class="font-weight-bold">Add nova loja</span></h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('admin.saveNewRestaurant')); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Nome:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg" name="name" placeholder="Nome da loja"
                                required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Descrição:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg" name="description"
                                placeholder="Descrição curta" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Imagem:</label>
                        <div class="col-lg-9">
                            <img class="slider-preview-image hidden" />
                            <div class="uploader">
                                <input type="file" class="form-control-lg form-control-uniform" name="image" required
                                    accept="image/x-png,image/gif,image/jpeg" onchange="readURL(this);">
                                <span class="help-text text-muted">Icone Tamanho: 160x117</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Pontuação:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg rating" name="rating"
                                placeholder="Pontuação entre 1 e 5" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Tempo de Entrega:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg delivery_time" name="delivery_time"
                                placeholder="Tempo em minutos" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Valor medio:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg price_range" name="price_range"
                                placeholder="Valor medio para 2 pessoas em <?php echo e(config('settings.currencyFormat')); ?>"
                                required>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Endereço:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg" name="address"
                                placeholder="Endereço completo da loja." required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label" data-popup="tooltip"
                            title="Pincode / Postcode / Zip Code" data-placement="bottom">CEP:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg" name="pincode"
                                placeholder="CEP da cidade/rua da loja">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Referencia:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg" name="landmark"
                                placeholder="Coloque uma referencia se houver">
                        </div>
                    </div>
                    <fieldset class="gllpLatlonPicker">
                        
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label class="col-form-label">Latitude:</label><input type="text"
                                    class="form-control form-control-lg gllpLatitude latitude" value="40.6976701"
                                    name="latitude" placeholder="Latitude da loja" required="required">
                            </div>
                            <div class="col-lg-6">
                                <label class="col-form-label">Longitude:</label><input type="text"
                                    class="form-control form-control-lg gllpLongitude longitude" value="-74.2598672"
                                    name="longitude" placeholder="Longitude da loja" required="required">
                            </div>
                        </div>
                        
                        <span class="text-muted">Use Serviços como: <a
                                href="https://www.mapcoordinates.net/en">https://www.mapcoordinates.net/en</a></span>
                        <br> Coloque corretamente ou sua loja nao aparecerá no aplicativo..
                    </fieldset>
                    <hr>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">CPF/CNPJ:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg" name="certificate"
                                placeholder="CPF ou CNPJ se houver">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Taxas (Pacotes/Extra):</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg restaurant_charges"
                                name="restaurant_charges"
                                placeholder="Taxas em <?php echo e(config('settings.currencyFormat')); ?>">
                        </div>
                    </div>
                    <?php if(config("settings.enSPU") == "true"): ?>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Atendimento:</label>
                        <div class="col-lg-9">
                            <select class="form-control select-search" name="delivery_type" required>
                                <option value="1" class="text-capitalize">Entrega</option>
                                <option value="2" class="text-capitalize">Retirada</option>
                                <option value="3" class="text-capitalize">Entrega e Retirada</option>
                            </select>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Raio de Entrega em Km:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg delivery_radius"
                                name="delivery_radius"
                                placeholder="Raio de entrega em KM, se deixar em branco sera 10">
                        </div>
                    </div>
                    <div class="delivery-div">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Taxa de Entrega:</label>
                            <div class="col-lg-9">
                                <select class="form-control select-search" name="delivery_charge_type" required>
                                    <option value="FIXED" class="text-capitalize">Taxa fixa</option>
                                    <option value="DYNAMIC" class="text-capitalize">Taxa Dinamica</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row" id="deliveryCharge">
                            <label class="col-lg-3 col-form-label">Taxa de Entrega:</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-control-lg delivery_charges"
                                    name="delivery_charges"
                                    placeholder="Taxa em <?php echo e(config('settings.currencyFormat')); ?>">
                            </div>
                        </div>
                        <div id="dynamicChargeDiv" class="hidden">
                            <div class="form-group">
                                <div class="col-lg-12 row">
                                    <div class="col-lg-3">
                                        <label class="col-lg-12 col-form-label">Taxa Base:</label>
                                        <input type="text" class="form-control form-control-lg base_delivery_charge"
                                            name="base_delivery_charge"
                                            placeholder="Em <?php echo e(config('settings.currencyFormat')); ?>">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="col-lg-12 col-form-label">Distancia Base:</label>
                                        <input type="text" class="form-control form-control-lg base_delivery_distance"
                                            name="base_delivery_distance" placeholder="Em (KM)">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="col-lg-12 col-form-label">Taxa Extra:</label>
                                        <input type="text" class="form-control form-control-lg extra_delivery_charge"
                                            name="extra_delivery_charge"
                                            placeholder="Em <?php echo e(config('settings.currencyFormat')); ?>">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="col-lg-12 col-form-label">Distancia Extra:</label>
                                        <input type="text" class="form-control form-control-lg extra_delivery_distance"
                                            name="extra_delivery_distance" placeholder="Em (KM)">
                                    </div>
                                </div>
                                <p class="help-text mt-2 mb-0 text-muted"> As taxas de entrega básicas serão aplicadas a distância base de entrega. E para cada distância extra de entrega, taxa de entrega extra
Serão aplicados.</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">É Vegano?</label>
                        <div class="col-lg-9">
                            <div class="checkbox checkbox-switchery mt-2">
                                <label>
                                    <input value="true" type="checkbox" class="switchery-primary" checked="checked"
                                        name="is_pureveg">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Entrega Gratis?</label>
                        <div class="col-lg-9">
                            <div class="checkbox checkbox-switchery mt-2">
                                <label>
                                    <input value="true" type="checkbox" class="switchery-primary" name="is_featured">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Valor Minimo <i class="icon-question3 ml-1"
                                data-popup="tooltip" title="Coloque um valor ou sera 0."
                                data-placement="top"></i></label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg min_order_price"
                                name="min_order_price"
                                placeholder="Valos nao sera descontado taxas e entrega. <?php echo e(config('settings.currencyFormat')); ?>"
                                value="0" required="required">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Comissão:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg commission_rate"
                                name="commission_rate" placeholder="Comissão em %" required>
                        </div>
                    </div>
                    <?php echo csrf_field(); ?>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">
                            SALVAR
                            <i class="icon-database-insert ml-1"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<div id="addBulkRestaurantModal" class="modal fade mt-5" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><span class="font-weight-bold">CSV Bulk Upload</span></h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('admin.restaurantBulkUpload')); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Arquivo CSV: </label>
                        <div class="col-lg-10">
                            <div class="uploader">
                                <input type="file" accept=".csv" name="restaurant_csv"
                                    class="form-control-uniform form-control-lg" required>
                            </div>
                        </div>
                    </div>
                    <div class="text-left">
                        <button type="button" class="btn btn-primary" id="downloadSampleRestaurantCsv">
                            Download CSV
                            <i class="icon-file-download ml-1"></i>
                        </button>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">
                            Upload
                            <i class="icon-database-insert ml-1"></i>
                        </button>
                    </div>
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function readURL(input) {
       if (input.files && input.files[0]) {
           let reader = new FileReader();
           reader.onload = function (e) {
               $('.slider-preview-image')
                   .removeClass('hidden')
                   .attr('src', e.target.result)
                   .width(160)
                   .height(117)
                   .css('borderRadius', '0.275rem');
           };
           reader.readAsDataURL(input.files[0]);
       }
    }
    
    $(document).ready(function() {
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
        
        $('#downloadSampleRestaurantCsv').click(function(event) {
            event.preventDefault();
            window.location.href = "<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/docs/restaurants-sample-csv.csv";
        });
         
         $('.rating').numeric({allowThouSep:false,  min: 1, max: 5, maxDecimalPlaces: 1 });
         $('.delivery_time').numeric({allowThouSep:false});
         $('.price_range').numeric({allowThouSep:false});
         $('.latitude').numeric({allowThouSep:false});
         $('.longitude').numeric({allowThouSep:false});
         $('.restaurant_charges').numeric({ allowThouSep:false, maxDecimalPlaces: 2, allowMinus: false });
         $('.delivery_charges').numeric({ allowThouSep:false, maxDecimalPlaces: 2, allowMinus: false });
         $('.commission_rate').numeric({ allowThouSep:false, maxDecimalPlaces: 2, max: 100, allowMinus: false });
        
        $('.delivery_radius').numeric({ allowThouSep:false, maxDecimalPlaces: 2, allowMinus: false });
        
        $('.base_delivery_charge').numeric({ allowThouSep:false, maxDecimalPlaces: 2, allowMinus: false });
        $('.base_delivery_distance').numeric({ allowThouSep:false, maxDecimalPlaces: 0, allowMinus: false });
        $('.extra_delivery_charge').numeric({ allowThouSep:false, maxDecimalPlaces: 2, allowMinus: false });
        $('.extra_delivery_distance').numeric({ allowThouSep:false, maxDecimalPlaces: 0, allowMinus: false });

        $('.min_order_price').numeric({ allowThouSep:false, maxDecimalPlaces: 2, allowMinus: false });
        
    
         $("[name='delivery_charge_type']").change(function(event) {
             if ($(this).val() == "FIXED") {
                 $("[name='base_delivery_charge']").val(null);
                 $("[name='base_delivery_distance']").val(null);
                 $("[name='extra_delivery_charge']").val(null);
                 $("[name='extra_delivery_distance']").val(null);
                 $('#dynamicChargeDiv').addClass('hidden');
                 $('#deliveryCharge').removeClass('hidden')
             } else {
                 $("[name='delivery_charges']").val(null);
                 $('#deliveryCharge').addClass('hidden');
                 $('#dynamicChargeDiv').removeClass('hidden')
             }
         });
        
        //Switch Action Function
        if (Array.prototype.forEach) {
               var elems = Array.prototype.slice.call(document.querySelectorAll('.action-switch'));
               elems.forEach(function(html) {
                   var switchery = new Switchery(html, { color: '#8360c3' });
               });
           }
           else {
               var elems = document.querySelectorAll('.action-switch');
               for (var i = 0; i < elems.length; i++) {
                   var switchery = new Switchery(elems[i], { color: '#8360c3' });
               }
           }

         $('.action-switch').click(function(event) {
            let id = $(this).attr("data-id")
            let url = "<?php echo e(url('/admin/store/disable/')); ?>/"+id;
            window.location.href = url;
         });
    });
    
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/migfoo99/teste1.foodmart.site/resources/views/admin/restaurants.blade.php ENDPATH**/ ?>