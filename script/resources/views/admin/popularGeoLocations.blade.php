@extends('admin.layouts.master')
@section("title") Regiões Populares - Dashboard
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
                <button type="button" class="btn btn-secondary btn-labeled btn-labeled-left mr-2" id="addNewLocation"
                    data-toggle="modal" data-target="#addNewLocationModal">
                <b><i class="icon-plus2"></i></b>
                Add Localização
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
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Status</th>
                            <th class="text-center" style="width: 10%;"><i class="
                                icon-circle-down2"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($locations as $location)
                        <tr>
                            <td>{{ $location->name }}</td>
                            <td>{{ $location->latitude }}</td>
                            <td>{{ $location->longitude }}</td>
                            <td>
                                @if($location->is_active)
                                <span class="badge badge-flat border-grey-800 text-primary text-capitalize mr-1">
                                Ativo
                                </span>
                                @else
                                <span class="badge badge-flat border-grey-800 text-default text-capitalize mr-1">
                                Inativo
                                </span>
                                @endif
                            </td>
                            <td class="text-center">
                                <div class="btn-group btn-group-justified">
                                    @if($location->is_active)
                                    <a href="{{ route('admin.disablePopularGeoLocation', $location->id) }}" class="badge badge-primary badge-icon ml-1" data-popup="tooltip" title="Desativar Location" data-placement="bottom"> <i class="icon-switch2"></i> </a>
                                    @else
                                    <a href="{{ route('admin.disablePopularGeoLocation', $location->id) }}" class="badge badge-danger badge-icon ml-1" data-popup="tooltip" title="Ativar Location" data-placement="bottom"> <i class="icon-switch2"></i> </a>
                                    @endif
                                    <a href="{{ route('admin.deletePopularGeoLocation', $location->id) }}" class="badge badge-danger badge-icon ml-1 doubleClickDelete" data-popup="tooltip" title="Duplo Clique para deletar {{ $location->name }}" data-placement="bottom"> <i class="icon-trash"></i> </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-3">
                    {{ $locations->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<div id="addNewLocationModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><span class="font-weight-bold">Add Geo Location</span></h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.saveNewPopularGeoLocation') }}" method="POST" enctype="multipart/form-data" id="geoLocationForm">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Nome:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg" name="name"
                                placeholder="Nome da cidade" required id="nameKey">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Latitude:</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-control-lg gllpLatitude latitude" name="latitude" placeholder="Latitude da região" required="required">
                            </div>
                        </div>
                    <div class="form-group row">
                         <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Longitude:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg gllpLongitude longitude" name="longitude" placeholder="Longitude da região" required="required">
                        </div>
                    </div>
                    <fieldset class="gllpLatlonPicker">
                        {{-- <div width="100%" id="map" class="gllpMap" style="position: relative; overflow: hidden;"></div> --}}
                        
                        {{-- <input type="hidden" class="gllpZoom" value="20">
                        <div class="d-flex justify-content-center">
                            <div class="col-lg-6 d-flex location-search-block">       
                                <input type="text" class="form-control form-control-lg gllpSearchField" placeholder="Search for city, town or country">
                                <button type="button" class="btn btn-primary gllpSearchButton">Search</button>
                            </div>
                        </div> --}}
                        <span class="text-muted">Use Seriços como: <a href="https://www.mapcoordinates.net/en">https://www.mapcoordinates.net/en</a></span> <br> Se deixar em branco nao vai funcionar.
                    </fieldset>
                    <div class="form-group row mt-3">
                        <label class="col-lg-3 col-form-label">Esta Ativo?</label>
                        <div class="col-lg-9">
                            <div class="checkbox checkbox-switchery mt-2">
                                <label>
                                <input value="true" type="checkbox" class="switchery-primary" name="is_active" checked="checked">
                                </label>
                            </div>
                        </div>
                    </div>
                    @csrf
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
<script>
    $(function() {
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
            
        $('#nameKey').bind('keydown', function(e) {
            if (e.keyCode == 13) {
                e.preventDefault();
            }
        });
        $('.gllpSearchField').bind('keydown', function(e) {
            if (e.keyCode == 13) {
                e.preventDefault();
            }
        });
        
        $('.doubleClickDelete').click(function() {
            return false;
        }).dblclick(function() {
            window.location = this.href;
            return false;
        });
    });
</script>
@endsection