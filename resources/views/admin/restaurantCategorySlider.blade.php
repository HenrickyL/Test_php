@extends('admin.layouts.master')
@section("title") Categorias de Lojas -Painel
@endsection
@section('content')
<div class="page-header">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-circle-right2 mr-2"></i>
                <span class="font-weight-bold mr-2">Total Categories</span>
                <span class="badge badge-primary badge-pill animated flipInX">{{ $categoriesCount }}</span>
            </h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
        <div class="header-elements d-none py-0 mb-3 mb-md-0">
            <div class="breadcrumb">
                <button type="button" class="btn btn-secondary btn-labeled btn-labeled-left"
                    data-toggle="modal" data-target="#addNewRestaurantCategory">
                <b><i class="icon-plus2"></i></b>
                Add Categoria
                </button>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="card">
        <div class="card-body">
            <div class="col-lg-12">
                @foreach($restaurantCategories as $rC)
                <span class="badge @if($rC->is_active) badge-primary @else badge-warning @endif badge-pill animated">{{ $rC->name }}</span>
                @endforeach
                <button class="btn btn-md btn-primary btn-labeled btn-labeled-left float-right"  data-toggle="modal" data-target="#manageRestaurantCategory"><b><i class="icon-grid52"></i></b> Gerenciar Categorias</button>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.saveRestaurantCategorySliderSettings') }}" method="POST">
                
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Ativar Slide das categorias: </label>
                    <div class="col-lg-9">
                        <div class="checkbox checkbox-switchery mt-2">
                            <label>
                            <input value="true" type="checkbox" class="switchery-primary" @if(config('settings.enRestaurantCategorySlider') == "true") checked="checked" @endif name="enRestaurantCategorySlider">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Posição:</label>
                    <div class="col-lg-9">
                        <select name="restaurantCategorySliderPosition" class="form-control form-control-lg" required="required">
                            <option @if(config('settings.restaurantCategorySliderPosition') == "1") selected="selected" @endif value="1">Apartir da 1ª Loja</option>
                            <option @if(config('settings.restaurantCategorySliderPosition') == "2") selected="selected" @endif value="2">Apartir da 2ª Loja</option>
                            <option @if(config('settings.restaurantCategorySliderPosition') == "3") selected="selected" @endif value="3">Apartir da 3ª Loja</option>
                            <option @if(config('settings.restaurantCategorySliderPosition') == "4") selected="selected" @endif value="4">Apartir da 4ª Loja</option>
                            <option @if(config('settings.restaurantCategorySliderPosition') == "5") selected="selected" @endif value="5">Apartir da 5ª Loja</option>
                            <option @if(config('settings.restaurantCategorySliderPosition') == "6") selected="selected" @endif value="6">Apartir da 6ª Loja</option>
                            <option @if(config('settings.restaurantCategorySliderPosition') == "7") selected="selected" @endif value="7">Apartir da 7ª Loja</option>
                            <option @if(config('settings.restaurantCategorySliderPosition') == "8") selected="selected" @endif value="8">Apartir da 8ª Loja</option>
                            <option @if(config('settings.restaurantCategorySliderPosition') == "9") selected="selected" @endif value="9">Apartir da 9ª Loja</option>
                            <option @if(config('settings.restaurantCategorySliderPosition') == "10") selected="selected" @endif value="10">Apartir da 10ª Loja</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Tamanho:</label>
                    <div class="col-lg-9">
                        <select name="restaurantCategorySliderSize" class="form-control form-control-lg">
                            <option @if(config('settings.restaurantCategorySliderSize') == "1") selected="selected" @endif value="1">Muito Pequeno</option>
                            <option @if(config('settings.restaurantCategorySliderSize') == "2") selected="selected" @endif value="2">Pequeno</option>
                            <option @if(config('settings.restaurantCategorySliderSize') == "3") selected="selected" @endif value="3">Medio</option>
                            <option @if(config('settings.restaurantCategorySliderSize') == "4") selected="selected" @endif value="4">Grande</option>
                            <option @if(config('settings.restaurantCategorySliderSize') == "5") selected="selected" @endif value="5">Muito Grande</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Stilo:</label>
                    <div class="col-lg-9">
                        <select name="restaurantCategorySliderStyle" class="form-control form-control-lg">
                            <option @if(config('settings.restaurantCategorySliderStyle') == "1") selected="selected" @endif value="1">Quadrado</option>
                            <option @if(config('settings.restaurantCategorySliderStyle') == "0.4") selected="selected" @endif value="0.4">Padrao</option>
                            <option @if(config('settings.restaurantCategorySliderStyle') == "10") selected="selected" @endif value="10">Circular</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Mostrar Texto nas Categorias: </label>
                    <div class="col-lg-9">
                        <div class="checkbox checkbox-switchery mt-2">
                            <label>
                            <input value="true" type="checkbox" class="switchery-primary" @if(config('settings.showRestaurantCategorySliderLabel') == "true") checked="checked" @endif name="showRestaurantCategorySliderLabel">
                            </label>
                        </div>
                    </div>
                </div>

                @csrf
                <div class="text-right">
                    <button type="submit" class="btn btn-primary btn-labeled btn-labeled-left">
                        <b><i class="icon-database-insert ml-1"></i></b>
                        Salvar Configurações
                    </button>
                </div>

            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            @if(count($restaurantCategorySlider) == 0)
            <div id="noSlidesContainer">
                <strong>Sem Slide</strong>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary" id="addSlide">
                    ADD SLIDE
                    <i class="icon-plus3 ml-1"></i>
                    </button>
                </div>
            </div>
            @else
            <div class="row" id="sortable">
                @foreach($restaurantCategorySlider as $slide)
                <div class="col-md-2 mb-2 each-slide" data-id="{{ $slide->id }}">
                    <p class="h6 mb-1"><strong>{{ $slide->name }}</strong></p>
                    <img src="{{ substr(url("/"), 0, strrpos(url("/"), '/')) }}{{ $slide->image }}" alt="{{ $slide->name }}" width="150" height="150">
                    <div class="btn-group btn-group-justified" style="width: 150px">
                        <a href="{{ route('admin.deleteRestaurantCategorySlide', $slide->id) }}" class="btn btn-danger rounded-0" data-popup="tooltip" title="Deletar Slide" data-placement="bottom"> <i class="icon-trash ml-1"></i> </a>
                        @if($slide->is_active)
                        <a href="{{ route('admin.disableRestaurantCategorySlide', $slide->id) }}" class="btn btn-secondary rounded-0" data-popup="tooltip" title="Desativar Slide" data-placement="bottom"> <i class="icon-switch2 ml-1"></i> </a>
                        @else
                        <a href="{{ route('admin.disableRestaurantCategorySlide', $slide->id) }}" class="btn btn-warning rounded-0" data-popup="tooltip" title="Ativar Slide" data-placement="bottom"> <i class="icon-switch2 ml-1"></i> </a>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-labeled btn-labeled-left" id="addSlide">
                <b><i class="icon-plus3"></i></b>ADD SLIDE
                </button>
            </div>
            @endif
            <form action="{{ route('admin.createRestaurantCategorySlide') }}" method="POST" id="slideForm" class="mt-3 hidden" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Nome:</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control form-control-lg" name="name" placeholder="Slide Nome" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Imagme:</label>
                    <div class="col-lg-9">
                        <img class="slider-preview-image hidden"/>
                        <div class="uploader">
                            <input type="file" class="form-control-uniform" name="image" required accept="image/x-png,image/gif,image/jpeg" onchange="readURL(this);">
                            <span class="help-text text-muted">Dimensão minima das imagens 384x384</span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Link:</label>
                    <div class="col-lg-9">
                        <select class="form-control form-control-lg select" multiple="multiple" data-fouc name="restaurant_categories[]" required>
                            @foreach($restaurantCategoriesActive as $resCat)
                            <option value="{{ $resCat->id }}">{{ $resCat->name }}</option>
                            @endforeach
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
<div id="addNewRestaurantCategory" class="modal fade mt-5" tabindex="-1">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><span class="font-weight-bold">Nova Categoria</span></h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.newRestaurantCategory') }}" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Nome:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg" name="name"
                                placeholder="Nome da categoria" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Está ativo?</label>
                        <div class="col-lg-9">
                            <div class="checkbox checkbox-switchery mt-2">
                                <label>
                                <input value="true" type="checkbox" class="switchery-primary" checked="checked" name="is_active">
                                </label>
                            </div>
                        </div>
                    </div>
                    @csrf
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary btn-labeled btn-labeled-left">
                            <b><i class="icon-database-insert ml-1"></i></b>
                            Salvar Categoria
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="manageRestaurantCategory" class="modal fade mt-5" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><span class="font-weight-bold">Gerenciar Categorias das lojas</span></h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    @foreach($restaurantCategories as $resCategory)
                    <div class="col-lg-6 col-xs-12 col-sm-12 mb-4">
                        <form action="{{ route('admin.updateRestaurantCategory') }}" method="POST" enctype="multipart/form-data" class="updateRestaurantCategory p-2" style="border-radius: 0.375rem; border: 1px solid #ddd;">
                            <input type="hidden" name="id" value="{{ $resCategory->id }}">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Nome:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control form-control-lg" name="name"
                                        placeholder="Nome da categoria" required value="{{ $resCategory->name }}">
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label class="col-lg-3 col-form-label">Está Ativa?</label>
                                <div class="col-lg-9">
                                    <div class="checkbox checkbox-switchery mt-2">
                                        <label>
                                        <input value="true" type="checkbox" class="switchery-primary" @if($resCategory->is_active) checked="checked" @endif name="is_active">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @csrf
                            <div class="text-right">
                                <button type="submit" class="btn btn-secondary btn-md w-25">SALVAR</button>
                            </div>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="token" value="{{ csrf_token() }}">
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function (e) {
                $('.slider-preview-image')
                    .removeClass('hidden')
                    .attr('src', e.target.result)
                    .width(120)
                    .height(120);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    
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
    
          $('.select').select2({
             minimumResultsForSearch: Infinity,
             placeholder: 'Select addons if applicable',
         });
    
        $("#addSlide").click(function(event) {
            $("#slideForm").removeClass('hidden');
            $("#noSlidesContainer").remove();
            $(this).remove();
        });

        $(".updateRestaurantCategory").submit(function(event) {
            event.preventDefault();
            console.log($(this).serialize());
            $.ajax({
                url: '{{ route('admin.updateRestaurantCategory') }}',
                type: 'POST',
                dataType: 'JSON',
                data: $(this).serialize(),
            })
            .done(function(data) {
                console.log("success");
                $.jGrowl("", {
                    position: 'bottom-center',
                    header: 'Operation Successful ✅',
                    theme: 'bg-success',
                    life: '2000'
                }); 
            })
            .fail(function(data) {
                console.log("error");
                $.jGrowl("Something went wrong! Please try again later.", {
                    position: 'bottom-center',
                    header: 'Wooopsss ⚠️',
                    theme: 'bg-warning',
                });
            })
        });
        $('#manageRestaurantCategory').on('hidden.bs.modal', function () {
            window.location.reload();
        })

        $('.slider-size').numeric({ allowThouSep:false, maxDecimalPlaces: 0, allowMinus: false, min:1, max: 5});
        $('#sortable').sortable({
            animation: 350,
            easing: "cubic-bezier(0.42, 0, 0.58, 1.0)",
            ghostClass: "sortable-placeholder",
            onUpdate: function (evt) {
                let newSortOrder = {};
                $('.each-slide').each(function() {
                    newSortOrder[$(this).index()] = $(this).data('id');
                });
                $.ajax({
                  url: '{{ route('admin.updateCategorySlidePosition') }}',
                  type: 'POST',
                  dataType: 'JSON',
                  data: {newOrder: newSortOrder, _token: $('#token').val()},
              })
              .done(function(res) {
                   $.jGrowl("Slides sorted successfully", {
                       position: 'bottom-center',
                       header: 'Done ✅',
                       theme: 'bg-success',
                       life: '2000',
                   }); 
              })
              .fail(function() {
                  console.log("error");
                  $.jGrowl("Something went wrong! Reload the page and try again later.", {
                      position: 'bottom-center',
                      header: 'Wooopsss ⚠️',
                      theme: 'bg-warning',
                  });
              })
            },
        });
    });
</script>
@endsection