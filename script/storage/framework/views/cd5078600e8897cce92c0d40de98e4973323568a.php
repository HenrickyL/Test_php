
<?php $__env->startSection("title"); ?> Definições -Painel
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<style>
    .disable-switch {
    opacity: 0.5;
    pointer-events: none;
    }
</style>
<div class="page-header">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-circle-right2 mr-2"></i>
                <span class="font-weight-bold mr-2">DEFINIÇÔES</span>
            </h4>
        </div>
    </div>
</div>
<div class="content">
    <div class="col-md-12">
        <div class="card" style="min-height: 100vh;">
            <div class="card-body">
                <form action="<?php echo e(route('admin.saveSettings')); ?>" method="POST" enctype="multipart/form-data">
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary btn-labeled btn-labeled-left btn-lg">
                        <b><i class="icon-database-insert ml-1"></i></b>
                        Salvar Configurações
                        </button>
                    </div>
                    <div class="d-lg-flex justify-content-lg-left">
                        <ul class="nav nav-pills flex-column mr-lg-3 wmin-lg-250 mb-lg-0">
                            <li class="nav-item">
                                <a href="#generalSettings" class="nav-link active" data-toggle="tab">
                                <i class="icon-gear mr-2"></i>
                                Geral
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#designSettings" class="nav-link" data-toggle="tab">
                                <i class="icon-brush mr-2"></i>
                                Design
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#customerAppSettings" class="nav-link" data-toggle="tab">
                                <i class="icon-users4 mr-2"></i>
                                Aplicação ao Cliente
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#deliveryAppSettings" class="nav-link" data-toggle="tab">
                                <i class="icon-truck mr-2"></i>
                                Aplicação ao Entregador
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#restaurantDashboardSettings" class="nav-link" data-toggle="tab">
                                <i class="icon-user-tie mr-2"></i>
                                Notificação de Pedidos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#seoSettings" class="nav-link" data-toggle="tab">
                                <i class="icon-zoomin3 mr-2"></i>
                                CEO
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#pushNotificationSettings" class="nav-link" data-toggle="tab">
                                <i class="icon-bubble-dots4 mr-2"></i>
                                Push Notifications
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#socialLoginSettings" class="nav-link" data-toggle="tab">
                                <i class="icon-feed2 mr-2"></i>
                                Social Login
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#mapSettings" class="nav-link" data-toggle="tab">
                                <i class="icon-location4 mr-2"></i>
                                Google Maps
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#paymentGatewaySettings" class="nav-link" data-toggle="tab">
                                <i class="icon-coin-dollar mr-2"></i>
                                Gateways de Pagamento
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#smsGatewaySettings" class="nav-link" data-toggle="tab">
                                <i class="icon-bubble-lines4 mr-2"></i>
                                Definições de SMS 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#emailSettings" class="nav-link" data-toggle="tab">
                                <i class="icon-envelop3 mr-2"></i>
                                Definições de Email 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#googleAnalyticsSettings" class="nav-link" data-toggle="tab">
                                <i class="icon-graph mr-2"></i>
                                Google Analytics
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#taxSettings" class="nav-link" data-toggle="tab">
                                <i class="icon-percent mr-2"></i>
                                Definições de Taxas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.translations')); ?>" class="nav-link">
                                <i class="icon-font-size2 mr-2"></i>
                                Trandutor
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#customCSS" class="nav-link" data-toggle="tab">
                                <i class="icon-file-css mr-2"></i>
                                CSS Customizada
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#cacheSettings" class="nav-link" data-toggle="tab">
                                <i class="icon-database-refresh mr-2"></i>
                                Limpar Cache
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#fixUpdateIssues" class="nav-link" data-toggle="tab">
                                <i class="icon-magic-wand2 mr-2"></i>
                                Fixar Novos Updates
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#advanceSettings" class="nav-link" data-toggle="tab">
                                <i class="icon-user-tie mr-2"></i>
                                Definições Avançadas
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" style="width: 100%; padding: 0 25px;">
                            <div class="tab-pane fade show active" id="generalSettings">
                                <legend class="font-weight-semibold text-uppercase font-size-sm">
                                    CONFIGURAÇÕES GERAIS DO APP
                                </legend>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Nome do App:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="storeName"
                                            value="<?php echo e(config('settings.storeName')); ?>" placeholder="Enter Store Name">
                                            <span class="help-text text-muted"> Para alterar os nomes dos aplicativos progressivos da Web, consulte este <a href="https://docs.foodomaa.com/configurations/pwa-configurations" target="_blank">documentation</a></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Website URL:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="storeUrl"
                                            value="<?php echo e(config('settings.storeUrl')); ?>"
                                            placeholder="Digite o URL do site como: https://seudominio.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">
                                    <strong>Timezone:</strong>
                                    </label>
                                    <div class="col-lg-9">
                                        <select name="timezone" class="form-control form-control-lg timezone-select select">
                                            <optgroup label="General">
                                                <option value="GMT">GMT timezone</option>
                                                <option value="UTC">UTC timezone</option>
                                            </optgroup>
                                            <optgroup label="Africa">
                                                <option value="Africa/Abidjan">(GMT/UTC + 00:00) Abidjan</option>
                                                <option value="Africa/Accra">(GMT/UTC + 00:00) Accra</option>
                                                <option value="Africa/Addis_Ababa">(GMT/UTC + 03:00) Addis Ababa
                                                </option>
                                                <option value="Africa/Algiers">(GMT/UTC + 01:00) Algiers</option>
                                                <option value="Africa/Asmara">(GMT/UTC + 03:00) Asmara</option>
                                                <option value="Africa/Bamako">(GMT/UTC + 00:00) Bamako</option>
                                                <option value="Africa/Bangui">(GMT/UTC + 01:00) Bangui</option>
                                                <option value="Africa/Banjul">(GMT/UTC + 00:00) Banjul</option>
                                                <option value="Africa/Bissau">(GMT/UTC + 00:00) Bissau</option>
                                                <option value="Africa/Blantyre">(GMT/UTC + 02:00) Blantyre</option>
                                                <option value="Africa/Brazzaville">(GMT/UTC + 01:00) Brazzaville
                                                </option>
                                                <option value="Africa/Bujumbura">(GMT/UTC + 02:00) Bujumbura</option>
                                                <option value="Africa/Cairo">(GMT/UTC + 02:00) Cairo</option>
                                                <option value="Africa/Casablanca">(GMT/UTC + 00:00) Casablanca</option>
                                                <option value="Africa/Ceuta">(GMT/UTC + 01:00) Ceuta</option>
                                                <option value="Africa/Conakry">(GMT/UTC + 00:00) Conakry</option>
                                                <option value="Africa/Dakar">(GMT/UTC + 00:00) Dakar</option>
                                                <option value="Africa/Dar_es_Salaam">(GMT/UTC + 03:00) Dar es Salaam
                                                </option>
                                                <option value="Africa/Djibouti">(GMT/UTC + 03:00) Djibouti</option>
                                                <option value="Africa/Douala">(GMT/UTC + 01:00) Douala</option>
                                                <option value="Africa/El_Aaiun">(GMT/UTC + 00:00) El Aaiun</option>
                                                <option value="Africa/Freetown">(GMT/UTC + 00:00) Freetown</option>
                                                <option value="Africa/Gaborone">(GMT/UTC + 02:00) Gaborone</option>
                                                <option value="Africa/Harare">(GMT/UTC + 02:00) Harare</option>
                                                <option value="Africa/Johannesburg">(GMT/UTC + 02:00) Johannesburg
                                                </option>
                                                <option value="Africa/Juba">(GMT/UTC + 03:00) Juba</option>
                                                <option value="Africa/Kampala">(GMT/UTC + 03:00) Kampala</option>
                                                <option value="Africa/Khartoum">(GMT/UTC + 03:00) Khartoum</option>
                                                <option value="Africa/Kigali">(GMT/UTC + 02:00) Kigali</option>
                                                <option value="Africa/Kinshasa">(GMT/UTC + 01:00) Kinshasa</option>
                                                <option value="Africa/Lagos">(GMT/UTC + 01:00) Lagos</option>
                                                <option value="Africa/Libreville">(GMT/UTC + 01:00) Libreville</option>
                                                <option value="Africa/Lome">(GMT/UTC + 00:00) Lome</option>
                                                <option value="Africa/Luanda">(GMT/UTC + 01:00) Luanda</option>
                                                <option value="Africa/Lubumbashi">(GMT/UTC + 02:00) Lubumbashi</option>
                                                <option value="Africa/Lusaka">(GMT/UTC + 02:00) Lusaka</option>
                                                <option value="Africa/Malabo">(GMT/UTC + 01:00) Malabo</option>
                                                <option value="Africa/Maputo">(GMT/UTC + 02:00) Maputo</option>
                                                <option value="Africa/Maseru">(GMT/UTC + 02:00) Maseru</option>
                                                <option value="Africa/Mbabane">(GMT/UTC + 02:00) Mbabane</option>
                                                <option value="Africa/Mogadishu">(GMT/UTC + 03:00) Mogadishu</option>
                                                <option value="Africa/Monrovia">(GMT/UTC + 00:00) Monrovia</option>
                                                <option value="Africa/Nairobi">(GMT/UTC + 03:00) Nairobi</option>
                                                <option value="Africa/Ndjamena">(GMT/UTC + 01:00) Ndjamena</option>
                                                <option value="Africa/Niamey">(GMT/UTC + 01:00) Niamey</option>
                                                <option value="Africa/Nouakchott">(GMT/UTC + 00:00) Nouakchott</option>
                                                <option value="Africa/Ouagadougou">(GMT/UTC + 00:00) Ouagadougou
                                                </option>
                                                <option value="Africa/Porto-Novo">(GMT/UTC + 01:00) Porto-Novo</option>
                                                <option value="Africa/Sao_Tome">(GMT/UTC + 00:00) Sao Tome</option>
                                                <option value="Africa/Tripoli">(GMT/UTC + 02:00) Tripoli</option>
                                                <option value="Africa/Tunis">(GMT/UTC + 01:00) Tunis</option>
                                                <option value="Africa/Windhoek">(GMT/UTC + 02:00) Windhoek</option>
                                            </optgroup>
                                            <optgroup label="America">
                                                <option value="America/Adak">(GMT/UTC - 10:00) Adak</option>
                                                <option value="America/Anchorage">(GMT/UTC - 09:00) Anchorage</option>
                                                <option value="America/Anguilla">(GMT/UTC - 04:00) Anguilla</option>
                                                <option value="America/Antigua">(GMT/UTC - 04:00) Antigua</option>
                                                <option value="America/Araguaina">(GMT/UTC - 03:00) Araguaina</option>
                                                <option value="America/Argentina/Buenos_Aires">(GMT/UTC - 03:00)
                                                    Argentina/Buenos Aires
                                                </option>
                                                <option value="America/Argentina/Catamarca">(GMT/UTC - 03:00)
                                                    Argentina/Catamarca
                                                </option>
                                                <option value="America/Argentina/Cordoba">(GMT/UTC - 03:00)
                                                    Argentina/Cordoba
                                                </option>
                                                <option value="America/Argentina/Jujuy">(GMT/UTC - 03:00)
                                                    Argentina/Jujuy
                                                </option>
                                                <option value="America/Argentina/La_Rioja">(GMT/UTC - 03:00)
                                                    Argentina/La Rioja
                                                </option>
                                                <option value="America/Argentina/Mendoza">(GMT/UTC - 03:00)
                                                    Argentina/Mendoza
                                                </option>
                                                <option value="America/Argentina/Rio_Gallegos">(GMT/UTC - 03:00)
                                                    Argentina/Rio Gallegos
                                                </option>
                                                <option value="America/Argentina/Salta">(GMT/UTC - 03:00)
                                                    Argentina/Salta
                                                </option>
                                                <option value="America/Argentina/San_Juan">(GMT/UTC - 03:00)
                                                    Argentina/San Juan
                                                </option>
                                                <option value="America/Argentina/San_Luis">(GMT/UTC - 03:00)
                                                    Argentina/San Luis
                                                </option>
                                                <option value="America/Argentina/Tucuman">(GMT/UTC - 03:00)
                                                    Argentina/Tucuman
                                                </option>
                                                <option value="America/Argentina/Ushuaia">(GMT/UTC - 03:00)
                                                    Argentina/Ushuaia
                                                </option>
                                                <option value="America/Aruba">(GMT/UTC - 04:00) Aruba</option>
                                                <option value="America/Asuncion">(GMT/UTC - 03:00) Asuncion</option>
                                                <option value="America/Atikokan">(GMT/UTC - 05:00) Atikokan</option>
                                                <option value="America/Bahia">(GMT/UTC - 03:00) Bahia</option>
                                                <option value="America/Bahia_Banderas">(GMT/UTC - 06:00) Bahia Banderas
                                                </option>
                                                <option value="America/Barbados">(GMT/UTC - 04:00) Barbados</option>
                                                <option value="America/Belem">(GMT/UTC - 03:00) Belem</option>
                                                <option value="America/Belize">(GMT/UTC - 06:00) Belize</option>
                                                <option value="America/Blanc-Sablon">(GMT/UTC - 04:00) Blanc-Sablon
                                                </option>
                                                <option value="America/Boa_Vista">(GMT/UTC - 04:00) Boa Vista</option>
                                                <option value="America/Bogota">(GMT/UTC - 05:00) Bogota</option>
                                                <option value="America/Boise">(GMT/UTC - 07:00) Boise</option>
                                                <option value="America/Cambridge_Bay">(GMT/UTC - 07:00) Cambridge Bay
                                                </option>
                                                <option value="America/Campo_Grande">(GMT/UTC - 03:00) Campo Grande
                                                </option>
                                                <option value="America/Cancun">(GMT/UTC - 05:00) Cancun</option>
                                                <option value="America/Caracas">(GMT/UTC - 04:30) Caracas</option>
                                                <option value="America/Cayenne">(GMT/UTC - 03:00) Cayenne</option>
                                                <option value="America/Cayman">(GMT/UTC - 05:00) Cayman</option>
                                                <option value="America/Chicago">(GMT/UTC - 06:00) Chicago</option>
                                                <option value="America/Chihuahua">(GMT/UTC - 07:00) Chihuahua</option>
                                                <option value="America/Costa_Rica">(GMT/UTC - 06:00) Costa Rica</option>
                                                <option value="America/Creston">(GMT/UTC - 07:00) Creston</option>
                                                <option value="America/Cuiaba">(GMT/UTC - 03:00) Cuiaba</option>
                                                <option value="America/Curacao">(GMT/UTC - 04:00) Curacao</option>
                                                <option value="America/Danmarkshavn">(GMT/UTC + 00:00) Danmarkshavn
                                                </option>
                                                <option value="America/Dawson">(GMT/UTC - 08:00) Dawson</option>
                                                <option value="America/Dawson_Creek">(GMT/UTC - 07:00) Dawson Creek
                                                </option>
                                                <option value="America/Denver">(GMT/UTC - 07:00) Denver</option>
                                                <option value="America/Detroit">(GMT/UTC - 05:00) Detroit</option>
                                                <option value="America/Dominica">(GMT/UTC - 04:00) Dominica</option>
                                                <option value="America/Edmonton">(GMT/UTC - 07:00) Edmonton</option>
                                                <option value="America/Eirunepe">(GMT/UTC - 05:00) Eirunepe</option>
                                                <option value="America/El_Salvador">(GMT/UTC - 06:00) El Salvador
                                                </option>
                                                <option value="America/Fort_Nelson">(GMT/UTC - 07:00) Fort Nelson
                                                </option>
                                                <option value="America/Fortaleza">(GMT/UTC - 03:00) Fortaleza</option>
                                                <option value="America/Glace_Bay">(GMT/UTC - 04:00) Glace Bay</option>
                                                <option value="America/Godthab">(GMT/UTC - 03:00) Godthab</option>
                                                <option value="America/Goose_Bay">(GMT/UTC - 04:00) Goose Bay</option>
                                                <option value="America/Grand_Turk">(GMT/UTC - 04:00) Grand Turk</option>
                                                <option value="America/Grenada">(GMT/UTC - 04:00) Grenada</option>
                                                <option value="America/Guadeloupe">(GMT/UTC - 04:00) Guadeloupe</option>
                                                <option value="America/Guatemala">(GMT/UTC - 06:00) Guatemala</option>
                                                <option value="America/Guayaquil">(GMT/UTC - 05:00) Guayaquil</option>
                                                <option value="America/Guyana">(GMT/UTC - 04:00) Guyana</option>
                                                <option value="America/Halifax">(GMT/UTC - 04:00) Halifax</option>
                                                <option value="America/Havana">(GMT/UTC - 05:00) Havana</option>
                                                <option value="America/Hermosillo">(GMT/UTC - 07:00) Hermosillo</option>
                                                <option value="America/Indiana/Indianapolis">(GMT/UTC - 05:00)
                                                    Indiana/Indianapolis
                                                </option>
                                                <option value="America/Indiana/Knox">(GMT/UTC - 06:00) Indiana/Knox
                                                </option>
                                                <option value="America/Indiana/Marengo">(GMT/UTC - 05:00)
                                                    Indiana/Marengo
                                                </option>
                                                <option value="America/Indiana/Petersburg">(GMT/UTC - 05:00)
                                                    Indiana/Petersburg
                                                </option>
                                                <option value="America/Indiana/Tell_City">(GMT/UTC - 06:00) Indiana/Tell
                                                    City
                                                </option>
                                                <option value="America/Indiana/Vevay">(GMT/UTC - 05:00) Indiana/Vevay
                                                </option>
                                                <option value="America/Indiana/Vincennes">(GMT/UTC - 05:00)
                                                    Indiana/Vincennes
                                                </option>
                                                <option value="America/Indiana/Winamac">(GMT/UTC - 05:00)
                                                    Indiana/Winamac
                                                </option>
                                                <option value="America/Inuvik">(GMT/UTC - 07:00) Inuvik</option>
                                                <option value="America/Iqaluit">(GMT/UTC - 05:00) Iqaluit</option>
                                                <option value="America/Jamaica">(GMT/UTC - 05:00) Jamaica</option>
                                                <option value="America/Juneau">(GMT/UTC - 09:00) Juneau</option>
                                                <option value="America/Kentucky/Louisville">(GMT/UTC - 05:00)
                                                    Kentucky/Louisville
                                                </option>
                                                <option value="America/Kentucky/Monticello">(GMT/UTC - 05:00)
                                                    Kentucky/Monticello
                                                </option>
                                                <option value="America/Kralendijk">(GMT/UTC - 04:00) Kralendijk</option>
                                                <option value="America/La_Paz">(GMT/UTC - 04:00) La Paz</option>
                                                <option value="America/Lima">(GMT/UTC - 05:00) Lima</option>
                                                <option value="America/Los_Angeles">(GMT/UTC - 08:00) Los Angeles
                                                </option>
                                                <option value="America/Lower_Princes">(GMT/UTC - 04:00) Lower Princes
                                                </option>
                                                <option value="America/Maceio">(GMT/UTC - 03:00) Maceio</option>
                                                <option value="America/Managua">(GMT/UTC - 06:00) Managua</option>
                                                <option value="America/Manaus">(GMT/UTC - 04:00) Manaus</option>
                                                <option value="America/Marigot">(GMT/UTC - 04:00) Marigot</option>
                                                <option value="America/Martinique">(GMT/UTC - 04:00) Martinique</option>
                                                <option value="America/Matamoros">(GMT/UTC - 06:00) Matamoros</option>
                                                <option value="America/Mazatlan">(GMT/UTC - 07:00) Mazatlan</option>
                                                <option value="America/Menominee">(GMT/UTC - 06:00) Menominee</option>
                                                <option value="America/Merida">(GMT/UTC - 06:00) Merida</option>
                                                <option value="America/Metlakatla">(GMT/UTC - 09:00) Metlakatla</option>
                                                <option value="America/Mexico_City">(GMT/UTC - 06:00) Mexico City
                                                </option>
                                                <option value="America/Miquelon">(GMT/UTC - 03:00) Miquelon</option>
                                                <option value="America/Moncton">(GMT/UTC - 04:00) Moncton</option>
                                                <option value="America/Monterrey">(GMT/UTC - 06:00) Monterrey</option>
                                                <option value="America/Montevideo">(GMT/UTC - 03:00) Montevideo</option>
                                                <option value="America/Montserrat">(GMT/UTC - 04:00) Montserrat</option>
                                                <option value="America/Nassau">(GMT/UTC - 05:00) Nassau</option>
                                                <option value="America/New_York">(GMT/UTC - 05:00) New York</option>
                                                <option value="America/Nipigon">(GMT/UTC - 05:00) Nipigon</option>
                                                <option value="America/Nome">(GMT/UTC - 09:00) Nome</option>
                                                <option value="America/Noronha">(GMT/UTC - 02:00) Noronha</option>
                                                <option value="America/North_Dakota/Beulah">(GMT/UTC - 06:00) North
                                                    Dakota/Beulah
                                                </option>
                                                <option value="America/North_Dakota/Center">(GMT/UTC - 06:00) North
                                                    Dakota/Center
                                                </option>
                                                <option value="America/North_Dakota/New_Salem">(GMT/UTC - 06:00) North
                                                    Dakota/New Salem
                                                </option>
                                                <option value="America/Ojinaga">(GMT/UTC - 07:00) Ojinaga</option>
                                                <option value="America/Panama">(GMT/UTC - 05:00) Panama</option>
                                                <option value="America/Pangnirtung">(GMT/UTC - 05:00) Pangnirtung
                                                </option>
                                                <option value="America/Paramaribo">(GMT/UTC - 03:00) Paramaribo</option>
                                                <option value="America/Phoenix">(GMT/UTC - 07:00) Phoenix</option>
                                                <option value="America/Port-au-Prince">(GMT/UTC - 05:00) Port-au-Prince
                                                </option>
                                                <option value="America/Port_of_Spain">(GMT/UTC - 04:00) Port of Spain
                                                </option>
                                                <option value="America/Porto_Velho">(GMT/UTC - 04:00) Porto Velho
                                                </option>
                                                <option value="America/Puerto_Rico">(GMT/UTC - 04:00) Puerto Rico
                                                </option>
                                                <option value="America/Rainy_River">(GMT/UTC - 06:00) Rainy River
                                                </option>
                                                <option value="America/Rankin_Inlet">(GMT/UTC - 06:00) Rankin Inlet
                                                </option>
                                                <option value="America/Recife">(GMT/UTC - 03:00) Recife</option>
                                                <option value="America/Regina">(GMT/UTC - 06:00) Regina</option>
                                                <option value="America/Resolute">(GMT/UTC - 06:00) Resolute</option>
                                                <option value="America/Rio_Branco">(GMT/UTC - 05:00) Rio Branco</option>
                                                <option value="America/Santarem">(GMT/UTC - 03:00) Santarem</option>
                                                <option value="America/Santiago">(GMT/UTC - 03:00) Santiago</option>
                                                <option value="America/Santo_Domingo">(GMT/UTC - 04:00) Santo Domingo
                                                </option>
                                                <option value="America/Sao_Paulo">(GMT/UTC - 02:00) Sao Paulo</option>
                                                <option value="America/Scoresbysund">(GMT/UTC - 01:00) Scoresbysund
                                                </option>
                                                <option value="America/Sitka">(GMT/UTC - 09:00) Sitka</option>
                                                <option value="America/St_Barthelemy">(GMT/UTC - 04:00) St. Barthelemy
                                                </option>
                                                <option value="America/St_Johns">(GMT/UTC - 03:30) St. Johns</option>
                                                <option value="America/St_Kitts">(GMT/UTC - 04:00) St. Kitts</option>
                                                <option value="America/St_Lucia">(GMT/UTC - 04:00) St. Lucia</option>
                                                <option value="America/St_Thomas">(GMT/UTC - 04:00) St. Thomas</option>
                                                <option value="America/St_Vincent">(GMT/UTC - 04:00) St. Vincent
                                                </option>
                                                <option value="America/Swift_Current">(GMT/UTC - 06:00) Swift Current
                                                </option>
                                                <option value="America/Tegucigalpa">(GMT/UTC - 06:00) Tegucigalpa
                                                </option>
                                                <option value="America/Thule">(GMT/UTC - 04:00) Thule</option>
                                                <option value="America/Thunder_Bay">(GMT/UTC - 05:00) Thunder Bay
                                                </option>
                                                <option value="America/Tijuana">(GMT/UTC - 08:00) Tijuana</option>
                                                <option value="America/Toronto">(GMT/UTC - 05:00) Toronto</option>
                                                <option value="America/Tortola">(GMT/UTC - 04:00) Tortola</option>
                                                <option value="America/Vancouver">(GMT/UTC - 08:00) Vancouver</option>
                                                <option value="America/Whitehorse">(GMT/UTC - 08:00) Whitehorse</option>
                                                <option value="America/Winnipeg">(GMT/UTC - 06:00) Winnipeg</option>
                                                <option value="America/Yakutat">(GMT/UTC - 09:00) Yakutat</option>
                                                <option value="America/Yellowknife">(GMT/UTC - 07:00) Yellowknife
                                                </option>
                                            </optgroup>
                                            <optgroup label="Antarctica">
                                                <option value="Antarctica/Casey">(GMT/UTC + 08:00) Casey</option>
                                                <option value="Antarctica/Davis">(GMT/UTC + 07:00) Davis</option>
                                                <option value="Antarctica/DumontDUrville">(GMT/UTC + 10:00)
                                                    DumontDUrville
                                                </option>
                                                <option value="Antarctica/Macquarie">(GMT/UTC + 11:00) Macquarie
                                                </option>
                                                <option value="Antarctica/Mawson">(GMT/UTC + 05:00) Mawson</option>
                                                <option value="Antarctica/McMurdo">(GMT/UTC + 13:00) McMurdo</option>
                                                <option value="Antarctica/Palmer">(GMT/UTC - 03:00) Palmer</option>
                                                <option value="Antarctica/Rothera">(GMT/UTC - 03:00) Rothera</option>
                                                <option value="Antarctica/Syowa">(GMT/UTC + 03:00) Syowa</option>
                                                <option value="Antarctica/Troll">(GMT/UTC + 00:00) Troll</option>
                                                <option value="Antarctica/Vostok">(GMT/UTC + 06:00) Vostok</option>
                                            </optgroup>
                                            <optgroup label="Arctic">
                                                <option value="Arctic/Longyearbyen">(GMT/UTC + 01:00) Longyearbyen
                                                </option>
                                            </optgroup>
                                            <optgroup label="Asia">
                                                <option value="Asia/Aden">(GMT/UTC + 03:00) Aden</option>
                                                <option value="Asia/Almaty">(GMT/UTC + 06:00) Almaty</option>
                                                <option value="Asia/Amman">(GMT/UTC + 02:00) Amman</option>
                                                <option value="Asia/Anadyr">(GMT/UTC + 12:00) Anadyr</option>
                                                <option value="Asia/Aqtau">(GMT/UTC + 05:00) Aqtau</option>
                                                <option value="Asia/Aqtobe">(GMT/UTC + 05:00) Aqtobe</option>
                                                <option value="Asia/Ashgabat">(GMT/UTC + 05:00) Ashgabat</option>
                                                <option value="Asia/Baghdad">(GMT/UTC + 03:00) Baghdad</option>
                                                <option value="Asia/Bahrain">(GMT/UTC + 03:00) Bahrain</option>
                                                <option value="Asia/Baku">(GMT/UTC + 04:00) Baku</option>
                                                <option value="Asia/Bangkok">(GMT/UTC + 07:00) Bangkok</option>
                                                <option value="Asia/Barnaul">(GMT/UTC + 07:00) Barnaul</option>
                                                <option value="Asia/Beirut">(GMT/UTC + 02:00) Beirut</option>
                                                <option value="Asia/Bishkek">(GMT/UTC + 06:00) Bishkek</option>
                                                <option value="Asia/Brunei">(GMT/UTC + 08:00) Brunei</option>
                                                <option value="Asia/Chita">(GMT/UTC + 09:00) Chita</option>
                                                <option value="Asia/Choibalsan">(GMT/UTC + 08:00) Choibalsan</option>
                                                <option value="Asia/Colombo">(GMT/UTC + 05:30) Colombo</option>
                                                <option value="Asia/Damascus">(GMT/UTC + 02:00) Damascus</option>
                                                <option value="Asia/Dhaka">(GMT/UTC + 06:00) Dhaka</option>
                                                <option value="Asia/Dili">(GMT/UTC + 09:00) Dili</option>
                                                <option value="Asia/Dubai">(GMT/UTC + 04:00) Dubai</option>
                                                <option value="Asia/Dushanbe">(GMT/UTC + 05:00) Dushanbe</option>
                                                <option value="Asia/Gaza">(GMT/UTC + 02:00) Gaza</option>
                                                <option value="Asia/Hebron">(GMT/UTC + 02:00) Hebron</option>
                                                <option value="Asia/Ho_Chi_Minh">(GMT/UTC + 07:00) Ho Chi Minh</option>
                                                <option value="Asia/Hong_Kong">(GMT/UTC + 08:00) Hong Kong</option>
                                                <option value="Asia/Hovd">(GMT/UTC + 07:00) Hovd</option>
                                                <option value="Asia/Irkutsk">(GMT/UTC + 08:00) Irkutsk</option>
                                                <option value="Asia/Jakarta">(GMT/UTC + 07:00) Jakarta</option>
                                                <option value="Asia/Jayapura">(GMT/UTC + 09:00) Jayapura</option>
                                                <option value="Asia/Jerusalem">(GMT/UTC + 02:00) Jerusalem</option>
                                                <option value="Asia/Kabul">(GMT/UTC + 04:30) Kabul</option>
                                                <option value="Asia/Kamchatka">(GMT/UTC + 12:00) Kamchatka</option>
                                                <option value="Asia/Karachi">(GMT/UTC + 05:00) Karachi</option>
                                                <option value="Asia/Kathmandu">(GMT/UTC + 05:45) Kathmandu</option>
                                                <option value="Asia/Khandyga">(GMT/UTC + 09:00) Khandyga</option>
                                                <option value="Asia/Kolkata">(GMT/UTC + 05:30) Kolkata</option>
                                                <option value="Asia/Krasnoyarsk">(GMT/UTC + 07:00) Krasnoyarsk</option>
                                                <option value="Asia/Kuala_Lumpur">(GMT/UTC + 08:00) Kuala Lumpur
                                                </option>
                                                <option value="Asia/Kuching">(GMT/UTC + 08:00) Kuching</option>
                                                <option value="Asia/Kuwait">(GMT/UTC + 03:00) Kuwait</option>
                                                <option value="Asia/Macau">(GMT/UTC + 08:00) Macau</option>
                                                <option value="Asia/Magadan">(GMT/UTC + 10:00) Magadan</option>
                                                <option value="Asia/Makassar">(GMT/UTC + 08:00) Makassar</option>
                                                <option value="Asia/Manila">(GMT/UTC + 08:00) Manila</option>
                                                <option value="Asia/Muscat">(GMT/UTC + 04:00) Muscat</option>
                                                <option value="Asia/Nicosia">(GMT/UTC + 02:00) Nicosia</option>
                                                <option value="Asia/Novokuznetsk">(GMT/UTC + 07:00) Novokuznetsk
                                                </option>
                                                <option value="Asia/Novosibirsk">(GMT/UTC + 06:00) Novosibirsk</option>
                                                <option value="Asia/Omsk">(GMT/UTC + 06:00) Omsk</option>
                                                <option value="Asia/Oral">(GMT/UTC + 05:00) Oral</option>
                                                <option value="Asia/Phnom_Penh">(GMT/UTC + 07:00) Phnom Penh</option>
                                                <option value="Asia/Pontianak">(GMT/UTC + 07:00) Pontianak</option>
                                                <option value="Asia/Pyongyang">(GMT/UTC + 08:30) Pyongyang</option>
                                                <option value="Asia/Qatar">(GMT/UTC + 03:00) Qatar</option>
                                                <option value="Asia/Qyzylorda">(GMT/UTC + 06:00) Qyzylorda</option>
                                                <option value="Asia/Rangoon">(GMT/UTC + 06:30) Rangoon</option>
                                                <option value="Asia/Riyadh">(GMT/UTC + 03:00) Riyadh</option>
                                                <option value="Asia/Sakhalin">(GMT/UTC + 11:00) Sakhalin</option>
                                                <option value="Asia/Samarkand">(GMT/UTC + 05:00) Samarkand</option>
                                                <option value="Asia/Seoul">(GMT/UTC + 09:00) Seoul</option>
                                                <option value="Asia/Shanghai">(GMT/UTC + 08:00) Shanghai</option>
                                                <option value="Asia/Singapore">(GMT/UTC + 08:00) Singapore</option>
                                                <option value="Asia/Srednekolymsk">(GMT/UTC + 11:00) Srednekolymsk
                                                </option>
                                                <option value="Asia/Taipei">(GMT/UTC + 08:00) Taipei</option>
                                                <option value="Asia/Tashkent">(GMT/UTC + 05:00) Tashkent</option>
                                                <option value="Asia/Tbilisi">(GMT/UTC + 04:00) Tbilisi</option>
                                                <option value="Asia/Tehran">(GMT/UTC + 03:30) Tehran</option>
                                                <option value="Asia/Thimphu">(GMT/UTC + 06:00) Thimphu</option>
                                                <option value="Asia/Tokyo">(GMT/UTC + 09:00) Tokyo</option>
                                                <option value="Asia/Ulaanbaatar">(GMT/UTC + 08:00) Ulaanbaatar</option>
                                                <option value="Asia/Urumqi">(GMT/UTC + 06:00) Urumqi</option>
                                                <option value="Asia/Ust-Nera">(GMT/UTC + 10:00) Ust-Nera</option>
                                                <option value="Asia/Vientiane">(GMT/UTC + 07:00) Vientiane</option>
                                                <option value="Asia/Vladivostok">(GMT/UTC + 10:00) Vladivostok</option>
                                                <option value="Asia/Yakutsk">(GMT/UTC + 09:00) Yakutsk</option>
                                                <option value="Asia/Yekaterinburg">(GMT/UTC + 05:00) Yekaterinburg
                                                </option>
                                                <option value="Asia/Yerevan">(GMT/UTC + 04:00) Yerevan</option>
                                            </optgroup>
                                            <optgroup label="Atlantic">
                                                <option value="Atlantic/Azores">(GMT/UTC - 01:00) Azores</option>
                                                <option value="Atlantic/Bermuda">(GMT/UTC - 04:00) Bermuda</option>
                                                <option value="Atlantic/Canary">(GMT/UTC + 00:00) Canary</option>
                                                <option value="Atlantic/Cape_Verde">(GMT/UTC - 01:00) Cape Verde
                                                </option>
                                                <option value="Atlantic/Faroe">(GMT/UTC + 00:00) Faroe</option>
                                                <option value="Atlantic/Madeira">(GMT/UTC + 00:00) Madeira</option>
                                                <option value="Atlantic/Reykjavik">(GMT/UTC + 00:00) Reykjavik</option>
                                                <option value="Atlantic/South_Georgia">(GMT/UTC - 02:00) South Georgia
                                                </option>
                                                <option value="Atlantic/St_Helena">(GMT/UTC + 00:00) St. Helena</option>
                                                <option value="Atlantic/Stanley">(GMT/UTC - 03:00) Stanley</option>
                                            </optgroup>
                                            <optgroup label="Australia">
                                                <option value="Australia/Adelaide">(GMT/UTC + 10:30) Adelaide</option>
                                                <option value="Australia/Brisbane">(GMT/UTC + 10:00) Brisbane</option>
                                                <option value="Australia/Broken_Hill">(GMT/UTC + 10:30) Broken Hill
                                                </option>
                                                <option value="Australia/Currie">(GMT/UTC + 11:00) Currie</option>
                                                <option value="Australia/Darwin">(GMT/UTC + 09:30) Darwin</option>
                                                <option value="Australia/Eucla">(GMT/UTC + 08:45) Eucla</option>
                                                <option value="Australia/Hobart">(GMT/UTC + 11:00) Hobart</option>
                                                <option value="Australia/Lindeman">(GMT/UTC + 10:00) Lindeman</option>
                                                <option value="Australia/Lord_Howe">(GMT/UTC + 11:00) Lord Howe</option>
                                                <option value="Australia/Melbourne">(GMT/UTC + 11:00) Melbourne</option>
                                                <option value="Australia/Perth">(GMT/UTC + 08:00) Perth</option>
                                                <option value="Australia/Sydney">(GMT/UTC + 11:00) Sydney</option>
                                            </optgroup>
                                            <optgroup label="Europe">
                                                <option value="Europe/Amsterdam">(GMT/UTC + 01:00) Amsterdam</option>
                                                <option value="Europe/Andorra">(GMT/UTC + 01:00) Andorra</option>
                                                <option value="Europe/Astrakhan">(GMT/UTC + 04:00) Astrakhan</option>
                                                <option value="Europe/Athens">(GMT/UTC + 02:00) Athens</option>
                                                <option value="Europe/Belgrade">(GMT/UTC + 01:00) Belgrade</option>
                                                <option value="Europe/Berlin">(GMT/UTC + 01:00) Berlin</option>
                                                <option value="Europe/Bratislava">(GMT/UTC + 01:00) Bratislava</option>
                                                <option value="Europe/Brussels">(GMT/UTC + 01:00) Brussels</option>
                                                <option value="Europe/Bucharest">(GMT/UTC + 02:00) Bucharest</option>
                                                <option value="Europe/Budapest">(GMT/UTC + 01:00) Budapest</option>
                                                <option value="Europe/Busingen">(GMT/UTC + 01:00) Busingen</option>
                                                <option value="Europe/Chisinau">(GMT/UTC + 02:00) Chisinau</option>
                                                <option value="Europe/Copenhagen">(GMT/UTC + 01:00) Copenhagen</option>
                                                <option value="Europe/Dublin">(GMT/UTC + 00:00) Dublin</option>
                                                <option value="Europe/Gibraltar">(GMT/UTC + 01:00) Gibraltar</option>
                                                <option value="Europe/Guernsey">(GMT/UTC + 00:00) Guernsey</option>
                                                <option value="Europe/Helsinki">(GMT/UTC + 02:00) Helsinki</option>
                                                <option value="Europe/Isle_of_Man">(GMT/UTC + 00:00) Isle of Man
                                                </option>
                                                <option value="Europe/Istanbul">(GMT/UTC + 02:00) Istanbul</option>
                                                <option value="Europe/Jersey">(GMT/UTC + 00:00) Jersey</option>
                                                <option value="Europe/Kaliningrad">(GMT/UTC + 02:00) Kaliningrad
                                                </option>
                                                <option value="Europe/Kiev">(GMT/UTC + 02:00) Kiev</option>
                                                <option value="Europe/Lisbon">(GMT/UTC + 00:00) Lisbon</option>
                                                <option value="Europe/Ljubljana">(GMT/UTC + 01:00) Ljubljana</option>
                                                <option value="Europe/London">(GMT/UTC + 00:00) London</option>
                                                <option value="Europe/Luxembourg">(GMT/UTC + 01:00) Luxembourg</option>
                                                <option value="Europe/Madrid">(GMT/UTC + 01:00) Madrid</option>
                                                <option value="Europe/Malta">(GMT/UTC + 01:00) Malta</option>
                                                <option value="Europe/Mariehamn">(GMT/UTC + 02:00) Mariehamn</option>
                                                <option value="Europe/Minsk">(GMT/UTC + 03:00) Minsk</option>
                                                <option value="Europe/Monaco">(GMT/UTC + 01:00) Monaco</option>
                                                <option value="Europe/Moscow">(GMT/UTC + 03:00) Moscow</option>
                                                <option value="Europe/Oslo">(GMT/UTC + 01:00) Oslo</option>
                                                <option value="Europe/Paris">(GMT/UTC + 01:00) Paris</option>
                                                <option value="Europe/Podgorica">(GMT/UTC + 01:00) Podgorica</option>
                                                <option value="Europe/Prague">(GMT/UTC + 01:00) Prague</option>
                                                <option value="Europe/Riga">(GMT/UTC + 02:00) Riga</option>
                                                <option value="Europe/Rome">(GMT/UTC + 01:00) Rome</option>
                                                <option value="Europe/Samara">(GMT/UTC + 04:00) Samara</option>
                                                <option value="Europe/San_Marino">(GMT/UTC + 01:00) San Marino</option>
                                                <option value="Europe/Sarajevo">(GMT/UTC + 01:00) Sarajevo</option>
                                                <option value="Europe/Simferopol">(GMT/UTC + 03:00) Simferopol</option>
                                                <option value="Europe/Skopje">(GMT/UTC + 01:00) Skopje</option>
                                                <option value="Europe/Sofia">(GMT/UTC + 02:00) Sofia</option>
                                                <option value="Europe/Stockholm">(GMT/UTC + 01:00) Stockholm</option>
                                                <option value="Europe/Tallinn">(GMT/UTC + 02:00) Tallinn</option>
                                                <option value="Europe/Tirane">(GMT/UTC + 01:00) Tirane</option>
                                                <option value="Europe/Ulyanovsk">(GMT/UTC + 04:00) Ulyanovsk</option>
                                                <option value="Europe/Uzhgorod">(GMT/UTC + 02:00) Uzhgorod</option>
                                                <option value="Europe/Vaduz">(GMT/UTC + 01:00) Vaduz</option>
                                                <option value="Europe/Vatican">(GMT/UTC + 01:00) Vatican</option>
                                                <option value="Europe/Vienna">(GMT/UTC + 01:00) Vienna</option>
                                                <option value="Europe/Vilnius">(GMT/UTC + 02:00) Vilnius</option>
                                                <option value="Europe/Volgograd">(GMT/UTC + 03:00) Volgograd</option>
                                                <option value="Europe/Warsaw">(GMT/UTC + 01:00) Warsaw</option>
                                                <option value="Europe/Zagreb">(GMT/UTC + 01:00) Zagreb</option>
                                                <option value="Europe/Zaporozhye">(GMT/UTC + 02:00) Zaporozhye</option>
                                                <option value="Europe/Zurich">(GMT/UTC + 01:00) Zurich</option>
                                            </optgroup>
                                            <optgroup label="Indian">
                                                <option value="Indian/Antananarivo">(GMT/UTC + 03:00) Antananarivo
                                                </option>
                                                <option value="Indian/Chagos">(GMT/UTC + 06:00) Chagos</option>
                                                <option value="Indian/Christmas">(GMT/UTC + 07:00) Christmas</option>
                                                <option value="Indian/Cocos">(GMT/UTC + 06:30) Cocos</option>
                                                <option value="Indian/Comoro">(GMT/UTC + 03:00) Comoro</option>
                                                <option value="Indian/Kerguelen">(GMT/UTC + 05:00) Kerguelen</option>
                                                <option value="Indian/Mahe">(GMT/UTC + 04:00) Mahe</option>
                                                <option value="Indian/Maldives">(GMT/UTC + 05:00) Maldives</option>
                                                <option value="Indian/Mauritius">(GMT/UTC + 04:00) Mauritius</option>
                                                <option value="Indian/Mayotte">(GMT/UTC + 03:00) Mayotte</option>
                                                <option value="Indian/Reunion">(GMT/UTC + 04:00) Reunion</option>
                                            </optgroup>
                                            <optgroup label="Pacific">
                                                <option value="Pacific/Apia">(GMT/UTC + 14:00) Apia</option>
                                                <option value="Pacific/Auckland">(GMT/UTC + 13:00) Auckland</option>
                                                <option value="Pacific/Bougainville">(GMT/UTC + 11:00) Bougainville
                                                </option>
                                                <option value="Pacific/Chatham">(GMT/UTC + 13:45) Chatham</option>
                                                <option value="Pacific/Chuuk">(GMT/UTC + 10:00) Chuuk</option>
                                                <option value="Pacific/Easter">(GMT/UTC - 05:00) Easter</option>
                                                <option value="Pacific/Efate">(GMT/UTC + 11:00) Efate</option>
                                                <option value="Pacific/Enderbury">(GMT/UTC + 13:00) Enderbury</option>
                                                <option value="Pacific/Fakaofo">(GMT/UTC + 13:00) Fakaofo</option>
                                                <option value="Pacific/Fiji">(GMT/UTC + 12:00) Fiji</option>
                                                <option value="Pacific/Funafuti">(GMT/UTC + 12:00) Funafuti</option>
                                                <option value="Pacific/Galapagos">(GMT/UTC - 06:00) Galapagos</option>
                                                <option value="Pacific/Gambier">(GMT/UTC - 09:00) Gambier</option>
                                                <option value="Pacific/Guadalcanal">(GMT/UTC + 11:00) Guadalcanal
                                                </option>
                                                <option value="Pacific/Guam">(GMT/UTC + 10:00) Guam</option>
                                                <option value="Pacific/Honolulu">(GMT/UTC - 10:00) Honolulu</option>
                                                <option value="Pacific/Johnston">(GMT/UTC - 10:00) Johnston</option>
                                                <option value="Pacific/Kiritimati">(GMT/UTC + 14:00) Kiritimati</option>
                                                <option value="Pacific/Kosrae">(GMT/UTC + 11:00) Kosrae</option>
                                                <option value="Pacific/Kwajalein">(GMT/UTC + 12:00) Kwajalein</option>
                                                <option value="Pacific/Majuro">(GMT/UTC + 12:00) Majuro</option>
                                                <option value="Pacific/Marquesas">(GMT/UTC - 09:30) Marquesas</option>
                                                <option value="Pacific/Midway">(GMT/UTC - 11:00) Midway</option>
                                                <option value="Pacific/Nauru">(GMT/UTC + 12:00) Nauru</option>
                                                <option value="Pacific/Niue">(GMT/UTC - 11:00) Niue</option>
                                                <option value="Pacific/Norfolk">(GMT/UTC + 11:00) Norfolk</option>
                                                <option value="Pacific/Noumea">(GMT/UTC + 11:00) Noumea</option>
                                                <option value="Pacific/Pago_Pago">(GMT/UTC - 11:00) Pago Pago</option>
                                                <option value="Pacific/Palau">(GMT/UTC + 09:00) Palau</option>
                                                <option value="Pacific/Pitcairn">(GMT/UTC - 08:00) Pitcairn</option>
                                                <option value="Pacific/Pohnpei">(GMT/UTC + 11:00) Pohnpei</option>
                                                <option value="Pacific/Port_Moresby">(GMT/UTC + 10:00) Port Moresby
                                                </option>
                                                <option value="Pacific/Rarotonga">(GMT/UTC - 10:00) Rarotonga</option>
                                                <option value="Pacific/Saipan">(GMT/UTC + 10:00) Saipan</option>
                                                <option value="Pacific/Tahiti">(GMT/UTC - 10:00) Tahiti</option>
                                                <option value="Pacific/Tarawa">(GMT/UTC + 12:00) Tarawa</option>
                                                <option value="Pacific/Tongatapu">(GMT/UTC + 13:00) Tongatapu</option>
                                                <option value="Pacific/Wake">(GMT/UTC + 12:00) Wake</option>
                                                <option value="Pacific/Wallis">(GMT/UTC + 12:00) Wallis</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Moeda Padrão:</strong></label>
                                    <div class="col-lg-9">
                                        <select name="currencyId" class="form-control form-control-lg select">
                                        <option value="AED" <?php if(config('settings.currencyId')=="AED" ): ?> selected
                                        <?php endif; ?>>AED</option>
                                        <option value="AFN" <?php if(config('settings.currencyId')=="AFN" ): ?> selected
                                        <?php endif; ?>>AFN</option>
                                        <option value="ALL" <?php if(config('settings.currencyId')=="ALL" ): ?> selected
                                        <?php endif; ?>>ALL</option>
                                        <option value="AMD" <?php if(config('settings.currencyId')=="AMD" ): ?> selected
                                        <?php endif; ?>>AMD</option>
                                        <option value="ANG" <?php if(config('settings.currencyId')=="ANG" ): ?> selected
                                        <?php endif; ?>>ANG</option>
                                        <option value="ANG" <?php if(config('settings.currencyId')=="ANG" ): ?> selected
                                        <?php endif; ?>>ANG</option>
                                        <option value="AOA" <?php if(config('settings.currencyId')=="AOA" ): ?> selected
                                        <?php endif; ?>>AOA</option>
                                        <option value="ARS" <?php if(config('settings.currencyId')=="ARS" ): ?> selected
                                        <?php endif; ?>>ARS</option>
                                        <option value="AUD" <?php if(config('settings.currencyId')=="AUD" ): ?> selected
                                        <?php endif; ?>>AUD</option>
                                        <option value="AWG" <?php if(config('settings.currencyId')=="AWG" ): ?> selected
                                        <?php endif; ?>>AWG</option>
                                        <option value="AZN" <?php if(config('settings.currencyId')=="AZN" ): ?> selected
                                        <?php endif; ?>>AZN</option>
                                        <option value="BAM" <?php if(config('settings.currencyId')=="BAM" ): ?> selected
                                        <?php endif; ?>>BAM</option>
                                        <option value="BBD" <?php if(config('settings.currencyId')=="BBD" ): ?> selected
                                        <?php endif; ?>>BBD</option>
                                        <option value="BDT" <?php if(config('settings.currencyId')=="BDT" ): ?> selected
                                        <?php endif; ?>>BDT</option>
                                        <option value="BGN" <?php if(config('settings.currencyId')=="BGN" ): ?> selected
                                        <?php endif; ?>>BGN</option>
                                        <option value="BHD" <?php if(config('settings.currencyId')=="BHD" ): ?> selected
                                        <?php endif; ?>>BHD</option>
                                        <option value="BIF" <?php if(config('settings.currencyId')=="BIF" ): ?> selected
                                        <?php endif; ?>>BIF</option>
                                        <option value="BMD" <?php if(config('settings.currencyId')=="BMD" ): ?> selected
                                        <?php endif; ?>>BMD</option>
                                        <option value="BND" <?php if(config('settings.currencyId')=="BND" ): ?> selected
                                        <?php endif; ?>>BND</option>
                                        <option value="BOB" <?php if(config('settings.currencyId')=="BOB" ): ?> selected
                                        <?php endif; ?>>BOB</option>
                                        <option value="BOV" <?php if(config('settings.currencyId')=="BOV" ): ?> selected
                                        <?php endif; ?>>BOV</option>
                                        <option value="BRL" <?php if(config('settings.currencyId')=="BRL" ): ?> selected
                                        <?php endif; ?>>BRL</option>
                                        <option value="BSD" <?php if(config('settings.currencyId')=="BSD" ): ?> selected
                                        <?php endif; ?>>BSD</option>
                                        <option value="BTN" <?php if(config('settings.currencyId')=="BTN" ): ?> selected
                                        <?php endif; ?>>BTN</option>
                                        <option value="BWP" <?php if(config('settings.currencyId')=="BWP" ): ?> selected
                                        <?php endif; ?>>BWP</option>
                                        <option value="BYN" <?php if(config('settings.currencyId')=="BYN" ): ?> selected
                                        <?php endif; ?>>BYN</option>
                                        <option value="BZD" <?php if(config('settings.currencyId')=="BZD" ): ?> selected
                                        <?php endif; ?>>BZD</option>
                                        <option value="CAD" <?php if(config('settings.currencyId')=="CAD" ): ?> selected
                                        <?php endif; ?>>CAD</option>
                                        <option value="CDF" <?php if(config('settings.currencyId')=="CDF" ): ?> selected
                                        <?php endif; ?>>CDF</option>
                                        <option value="CHE" <?php if(config('settings.currencyId')=="CHE" ): ?> selected
                                        <?php endif; ?>>CHE</option>
                                        <option value="CHF" <?php if(config('settings.currencyId')=="CHF" ): ?> selected
                                        <?php endif; ?>>CHF</option>
                                        <option value="CHW" <?php if(config('settings.currencyId')=="CHW" ): ?> selected
                                        <?php endif; ?>>CHW</option>
                                        <option value="CLF" <?php if(config('settings.currencyId')=="CLF" ): ?> selected
                                        <?php endif; ?>>CLF</option>
                                        <option value="CLP" <?php if(config('settings.currencyId')=="CLP" ): ?> selected
                                        <?php endif; ?>>CLP</option>
                                        <option value="CNY" <?php if(config('settings.currencyId')=="CNY" ): ?> selected
                                        <?php endif; ?>>CNY</option>
                                        <option value="COP" <?php if(config('settings.currencyId')=="COP" ): ?> selected
                                        <?php endif; ?>>COP</option>
                                        <option value="COU" <?php if(config('settings.currencyId')=="COU" ): ?> selected
                                        <?php endif; ?>>COU</option>
                                        <option value="CRC" <?php if(config('settings.currencyId')=="CRC" ): ?> selected
                                        <?php endif; ?>>CRC</option>
                                        <option value="CUC" <?php if(config('settings.currencyId')=="CUC" ): ?> selected
                                        <?php endif; ?>>CUC</option>
                                        <option value="CVE" <?php if(config('settings.currencyId')=="CVE" ): ?> selected
                                        <?php endif; ?>>CVE</option>
                                        <option value="CZK" <?php if(config('settings.currencyId')=="CZK" ): ?> selected
                                        <?php endif; ?>>CZK</option>
                                        <option value="DJF" <?php if(config('settings.currencyId')=="DJF" ): ?> selected
                                        <?php endif; ?>>DJF</option>
                                        <option value="DKK" <?php if(config('settings.currencyId')=="DKK" ): ?> selected
                                        <?php endif; ?>>DKK</option>
                                        <option value="DOP" <?php if(config('settings.currencyId')=="DOP" ): ?> selected
                                        <?php endif; ?>>DOP</option>
                                        <option value="DZD" <?php if(config('settings.currencyId')=="DZD" ): ?> selected
                                        <?php endif; ?>>DZD</option>
                                        <option value="EGP" <?php if(config('settings.currencyId')=="EGP" ): ?> selected
                                        <?php endif; ?>>EGP</option>
                                        <option value="ERN" <?php if(config('settings.currencyId')=="ERN" ): ?> selected
                                        <?php endif; ?>>ERN</option>
                                        <option value="ETB" <?php if(config('settings.currencyId')=="ETB" ): ?> selected
                                        <?php endif; ?>>ETB</option>
                                        <option value="EUR" <?php if(config('settings.currencyId')=="EUR" ): ?> selected
                                        <?php endif; ?>>EUR</option>
                                        <option value="FJD" <?php if(config('settings.currencyId')=="FJD" ): ?> selected
                                        <?php endif; ?>>FJD</option>
                                        <option value="FKP" <?php if(config('settings.currencyId')=="FKP" ): ?> selected
                                        <?php endif; ?>>FKP</option>
                                        <option value="GBP" <?php if(config('settings.currencyId')=="GBP" ): ?> selected
                                        <?php endif; ?>>GBP</option>
                                        <option value="GEL" <?php if(config('settings.currencyId')=="GEL" ): ?> selected
                                        <?php endif; ?>>GEL</option>
                                        <option value="GHS" <?php if(config('settings.currencyId')=="GHS" ): ?> selected
                                        <?php endif; ?>>GHS</option>
                                        <option value="GIP" <?php if(config('settings.currencyId')=="GIP" ): ?> selected
                                        <?php endif; ?>>GIP</option>
                                        <option value="GMD" <?php if(config('settings.currencyId')=="GMD" ): ?> selected
                                        <?php endif; ?>>GMD</option>
                                        <option value="GNF" <?php if(config('settings.currencyId')=="GNF" ): ?> selected
                                        <?php endif; ?>>GNF</option>
                                        <option value="GTQ" <?php if(config('settings.currencyId')=="GTQ" ): ?> selected
                                        <?php endif; ?>>GTQ</option>
                                        <option value="GYD" <?php if(config('settings.currencyId')=="GYD" ): ?> selected
                                        <?php endif; ?>>GYD</option>
                                        <option value="HKD" <?php if(config('settings.currencyId')=="HKD" ): ?> selected
                                        <?php endif; ?>>HKD</option>
                                        <option value="HNL" <?php if(config('settings.currencyId')=="HNL" ): ?> selected
                                        <?php endif; ?>>HNL</option>
                                        <option value="HRK" <?php if(config('settings.currencyId')=="HRK" ): ?> selected
                                        <?php endif; ?>>HRK</option>
                                        <option value="HTG" <?php if(config('settings.currencyId')=="HTG" ): ?> selected
                                        <?php endif; ?>>HTG</option>
                                        <option value="HUF" <?php if(config('settings.currencyId')=="HUF" ): ?> selected
                                        <?php endif; ?>>HUF</option>
                                        <option value="IDR" <?php if(config('settings.currencyId')=="IDR" ): ?> selected
                                        <?php endif; ?>>IDR</option>
                                        <option value="ILS" <?php if(config('settings.currencyId')=="ILS" ): ?> selected
                                        <?php endif; ?>>ILS</option>
                                        <option value="INR" <?php if(config('settings.currencyId')=="INR" ): ?> selected
                                        <?php endif; ?>>INR</option>
                                        <option value="IQD" <?php if(config('settings.currencyId')=="IQD" ): ?> selected
                                        <?php endif; ?>>IQD</option>
                                        <option value="IRR" <?php if(config('settings.currencyId')=="IRR" ): ?> selected
                                        <?php endif; ?>>IRR</option>
                                        <option value="ISK" <?php if(config('settings.currencyId')=="ISK" ): ?> selected
                                        <?php endif; ?>>ISK</option>
                                        <option value="JMD" <?php if(config('settings.currencyId')=="JMD" ): ?> selected
                                        <?php endif; ?>>JMD</option>
                                        <option value="JOD" <?php if(config('settings.currencyId')=="JOD" ): ?> selected
                                        <?php endif; ?>>JOD</option>
                                        <option value="JPY" <?php if(config('settings.currencyId')=="JPY" ): ?> selected
                                        <?php endif; ?>>JPY</option>
                                        <option value="KES" <?php if(config('settings.currencyId')=="KES" ): ?> selected
                                        <?php endif; ?>>KES</option>
                                        <option value="KGS" <?php if(config('settings.currencyId')=="KGS" ): ?> selected
                                        <?php endif; ?>>KGS</option>
                                        <option value="KHR" <?php if(config('settings.currencyId')=="KHR" ): ?> selected
                                        <?php endif; ?>>KHR</option>
                                        <option value="KMF" <?php if(config('settings.currencyId')=="KMF" ): ?> selected
                                        <?php endif; ?>>KMF</option>
                                        <option value="KPW" <?php if(config('settings.currencyId')=="KPW" ): ?> selected
                                        <?php endif; ?>>KPW</option>
                                        <option value="KRW" <?php if(config('settings.currencyId')=="KRW" ): ?> selected
                                        <?php endif; ?>>KRW</option>
                                        <option value="KWD" <?php if(config('settings.currencyId')=="KWD" ): ?> selected
                                        <?php endif; ?>>KWD</option>
                                        <option value="KYD" <?php if(config('settings.currencyId')=="KYD" ): ?> selected
                                        <?php endif; ?>>KYD</option>
                                        <option value="KZT" <?php if(config('settings.currencyId')=="KZT" ): ?> selected
                                        <?php endif; ?>>KZT</option>
                                        <option value="LAK" <?php if(config('settings.currencyId')=="LAK" ): ?> selected
                                        <?php endif; ?>>LAK</option>
                                        <option value="LBP" <?php if(config('settings.currencyId')=="LBP" ): ?> selected
                                        <?php endif; ?>>LBP</option>
                                        <option value="LKR" <?php if(config('settings.currencyId')=="LKR" ): ?> selected
                                        <?php endif; ?>>LKR</option>
                                        <option value="LRD" <?php if(config('settings.currencyId')=="LRD" ): ?> selected
                                        <?php endif; ?>>LRD</option>
                                        <option value="LSL" <?php if(config('settings.currencyId')=="LSL" ): ?> selected
                                        <?php endif; ?>>LSL</option>
                                        <option value="LYD" <?php if(config('settings.currencyId')=="LYD" ): ?> selected
                                        <?php endif; ?>>LYD</option>
                                        <option value="MAD" <?php if(config('settings.currencyId')=="MAD" ): ?> selected
                                        <?php endif; ?>>MAD</option>
                                        <option value="MDL" <?php if(config('settings.currencyId')=="MDL" ): ?> selected
                                        <?php endif; ?>>MDL</option>
                                        <option value="MGA" <?php if(config('settings.currencyId')=="MGA" ): ?> selected
                                        <?php endif; ?>>MGA</option>
                                        <option value="MKD" <?php if(config('settings.currencyId')=="MKD" ): ?> selected
                                        <?php endif; ?>>MKD</option>
                                        <option value="MMK" <?php if(config('settings.currencyId')=="MMK" ): ?> selected
                                        <?php endif; ?>>MMK</option>
                                        <option value="MNT" <?php if(config('settings.currencyId')=="MNT" ): ?> selected
                                        <?php endif; ?>>MNT</option>
                                        <option value="MOP" <?php if(config('settings.currencyId')=="MOP" ): ?> selected
                                        <?php endif; ?>>MOP</option>
                                        <option value="MRU" <?php if(config('settings.currencyId')=="MRU" ): ?> selected
                                        <?php endif; ?>>MRU</option>
                                        <option value="MUR" <?php if(config('settings.currencyId')=="MUR" ): ?> selected
                                        <?php endif; ?>>MUR</option>
                                        <option value="MVR" <?php if(config('settings.currencyId')=="MVR" ): ?> selected
                                        <?php endif; ?>>MVR</option>
                                        <option value="MWK" <?php if(config('settings.currencyId')=="MWK" ): ?> selected
                                        <?php endif; ?>>MWK</option>
                                        <option value="MXN" <?php if(config('settings.currencyId')=="MXN" ): ?> selected
                                        <?php endif; ?>>MXN</option>
                                        <option value="MXV" <?php if(config('settings.currencyId')=="MXV" ): ?> selected
                                        <?php endif; ?>>MXV</option>
                                        <option value="MYR" <?php if(config('settings.currencyId')=="MYR" ): ?> selected
                                        <?php endif; ?>>MYR</option>
                                        <option value="MZN" <?php if(config('settings.currencyId')=="MZN" ): ?> selected
                                        <?php endif; ?>>MZN</option>
                                        <option value="NAD" <?php if(config('settings.currencyId')=="NAD" ): ?> selected
                                        <?php endif; ?>>NAD</option>
                                        <option value="NGN" <?php if(config('settings.currencyId')=="NGN" ): ?> selected
                                        <?php endif; ?>>NGN</option>
                                        <option value="NIO" <?php if(config('settings.currencyId')=="NIO" ): ?> selected
                                        <?php endif; ?>>NIO</option>
                                        <option value="NOK" <?php if(config('settings.currencyId')=="NOK" ): ?> selected
                                        <?php endif; ?>>NOK</option>
                                        <option value="NPR" <?php if(config('settings.currencyId')=="NPR" ): ?> selected
                                        <?php endif; ?>>NPR</option> 
                                        <option value="NZD" <?php if(config('settings.currencyId')=="NZD" ): ?> selected
                                        <?php endif; ?>>NZD</option>
                                        <option value="OMR" <?php if(config('settings.currencyId')=="OMR" ): ?> selected
                                        <?php endif; ?>>OMR</option>
                                        <option value="PAB" <?php if(config('settings.currencyId')=="PAB" ): ?> selected
                                        <?php endif; ?>>PAB</option>
                                        <option value="PEN" <?php if(config('settings.currencyId')=="PEN" ): ?> selected
                                        <?php endif; ?>>PEN</option>
                                        <option value="PGK" <?php if(config('settings.currencyId')=="PGK" ): ?> selected
                                        <?php endif; ?>>PGK</option>
                                        <option value="PHP" <?php if(config('settings.currencyId')=="PHP" ): ?> selected
                                        <?php endif; ?>>PHP</option>
                                        <option value="PKR" <?php if(config('settings.currencyId')=="PKR" ): ?> selected
                                        <?php endif; ?>>PKR</option>
                                        <option value="PLN" <?php if(config('settings.currencyId')=="PLN" ): ?> selected
                                        <?php endif; ?>>PLN</option>
                                        <option value="PYG" <?php if(config('settings.currencyId')=="PYG" ): ?> selected
                                        <?php endif; ?>>PYG</option>
                                        <option value="QAR" <?php if(config('settings.currencyId')=="QAR" ): ?> selected
                                        <?php endif; ?>>QAR</option>
                                        <option value="RON" <?php if(config('settings.currencyId')=="RON" ): ?> selected
                                        <?php endif; ?>>RON</option>
                                        <option value="RSD" <?php if(config('settings.currencyId')=="RSD" ): ?> selected
                                        <?php endif; ?>>RSD</option>
                                        <option value="RUB" <?php if(config('settings.currencyId')=="RUB" ): ?> selected
                                        <?php endif; ?>>RUB</option>
                                        <option value="RWF" <?php if(config('settings.currencyId')=="RWF" ): ?> selected
                                        <?php endif; ?>>RWF</option>
                                        <option value="SAR" <?php if(config('settings.currencyId')=="SAR" ): ?> selected
                                        <?php endif; ?>>SAR</option>
                                        <option value="SBD" <?php if(config('settings.currencyId')=="SBD" ): ?> selected
                                        <?php endif; ?>>SBD</option>
                                        <option value="SCR" <?php if(config('settings.currencyId')=="SCR" ): ?> selected
                                        <?php endif; ?>>SCR</option>
                                        <option value="SDG" <?php if(config('settings.currencyId')=="SDG" ): ?> selected
                                        <?php endif; ?>>SDG</option>
                                        <option value="SEK" <?php if(config('settings.currencyId')=="SEK" ): ?> selected
                                        <?php endif; ?>>SEK</option>
                                        <option value="SGD" <?php if(config('settings.currencyId')=="SGD" ): ?> selected
                                        <?php endif; ?>>SGD</option>
                                        <option value="SHP" <?php if(config('settings.currencyId')=="SHP" ): ?> selected
                                        <?php endif; ?>>SHP</option>
                                        <option value="SLL" <?php if(config('settings.currencyId')=="SLL" ): ?> selected
                                        <?php endif; ?>>SLL</option>
                                        <option value="SOS" <?php if(config('settings.currencyId')=="SOS" ): ?> selected
                                        <?php endif; ?>>SOS</option>
                                        <option value="SRD" <?php if(config('settings.currencyId')=="SRD" ): ?> selected
                                        <?php endif; ?>>SRD</option>
                                        <option value="SSP" <?php if(config('settings.currencyId')=="SSP" ): ?> selected
                                        <?php endif; ?>>SSP</option>
                                        <option value="STN" <?php if(config('settings.currencyId')=="STN" ): ?> selected
                                        <?php endif; ?>>STN</option>
                                        <option value="SVC" <?php if(config('settings.currencyId')=="SVC" ): ?> selected
                                        <?php endif; ?>>SVC</option>
                                        <option value="SYP" <?php if(config('settings.currencyId')=="SYP" ): ?> selected
                                        <?php endif; ?>>SYP</option>
                                        <option value="SZL" <?php if(config('settings.currencyId')=="SZL" ): ?> selected
                                        <?php endif; ?>>SZL</option>
                                        <option value="THB" <?php if(config('settings.currencyId')=="THB" ): ?> selected
                                        <?php endif; ?>>THB</option>
                                        <option value="TJS" <?php if(config('settings.currencyId')=="TJS" ): ?> selected
                                        <?php endif; ?>>TJS</option>
                                        <option value="TMT" <?php if(config('settings.currencyId')=="TMT" ): ?> selected
                                        <?php endif; ?>>TMT</option>
                                        <option value="TND" <?php if(config('settings.currencyId')=="TND" ): ?> selected
                                        <?php endif; ?>>TND</option>
                                        <option value="TOP" <?php if(config('settings.currencyId')=="TOP" ): ?> selected
                                        <?php endif; ?>>TOP</option>
                                        <option value="TRY" <?php if(config('settings.currencyId')=="TRY" ): ?> selected
                                        <?php endif; ?>>TRY</option>
                                        <option value="TTD" <?php if(config('settings.currencyId')=="TTD" ): ?> selected
                                        <?php endif; ?>>TTD</option>
                                        <option value="TWD" <?php if(config('settings.currencyId')=="TWD" ): ?> selected
                                        <?php endif; ?>>TWD</option>
                                        <option value="TZS" <?php if(config('settings.currencyId')=="TZS" ): ?> selected
                                        <?php endif; ?>>TZS</option>
                                        <option value="UAH" <?php if(config('settings.currencyId')=="UAH" ): ?> selected
                                        <?php endif; ?>>UAH</option>
                                        <option value="UGX" <?php if(config('settings.currencyId')=="UGX" ): ?> selected
                                        <?php endif; ?>>UGX</option>
                                        <option value="USD" <?php if(config('settings.currencyId')=="USD" ): ?> selected
                                        <?php endif; ?>>USD</option>
                                        <option value="USN" <?php if(config('settings.currencyId')=="USN" ): ?> selected
                                        <?php endif; ?>>USN</option>
                                        <option value="UYI" <?php if(config('settings.currencyId')=="UYI" ): ?> selected
                                        <?php endif; ?>>UYI</option>
                                        <option value="UYU" <?php if(config('settings.currencyId')=="UYU" ): ?> selected
                                        <?php endif; ?>>UYU</option>
                                        <option value="UZS" <?php if(config('settings.currencyId')=="UZS" ): ?> selected
                                        <?php endif; ?>>UZS</option>
                                        <option value="VEF" <?php if(config('settings.currencyId')=="VEF" ): ?> selected
                                        <?php endif; ?>>VEF</option>
                                        <option value="VND" <?php if(config('settings.currencyId')=="VND" ): ?> selected
                                        <?php endif; ?>>VND</option>
                                        <option value="VUV" <?php if(config('settings.currencyId')=="VUV" ): ?> selected
                                        <?php endif; ?>>VUV</option>
                                        <option value="WST" <?php if(config('settings.currencyId')=="WST" ): ?> selected
                                        <?php endif; ?>>WST</option>
                                        <option value="XAF" <?php if(config('settings.currencyId')=="XAF" ): ?> selected
                                        <?php endif; ?>>XAF</option>
                                        <option value="XCD" <?php if(config('settings.currencyId')=="XCD" ): ?> selected
                                        <?php endif; ?>>XCD</option>
                                        <option value="XDR" <?php if(config('settings.currencyId')=="XDR" ): ?> selected
                                        <?php endif; ?>>XDR</option>
                                        <option value="XOF" <?php if(config('settings.currencyId')=="XOF" ): ?> selected
                                        <?php endif; ?>>XOF</option>
                                        <option value="XPF" <?php if(config('settings.currencyId')=="XPF" ): ?> selected
                                        <?php endif; ?>>XPF</option>
                                        <option value="XSU" <?php if(config('settings.currencyId')=="XSU" ): ?> selected
                                        <?php endif; ?>>XSU</option>
                                        <option value="XUA" <?php if(config('settings.currencyId')=="XUA" ): ?> selected
                                        <?php endif; ?>>XUA</option>
                                        <option value="YER" <?php if(config('settings.currencyId')=="YER" ): ?> selected
                                        <?php endif; ?>>YER</option>
                                        <option value="ZAR" <?php if(config('settings.currencyId')=="ZAR" ): ?> selected
                                        <?php endif; ?>>ZAR</option>
                                        <option value="ZMW" <?php if(config('settings.currencyId')=="ZMW" ): ?> selected
                                        <?php endif; ?>>ZMW</option>
                                        <option value="ZWL" <?php if(config('settings.currencyId')=="ZWL" ): ?> selected
                                        <?php endif; ?>>ZWL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Simbolo da Moeda:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="currencyFormat"
                                            value="<?php echo e(config('settings.currencyFormat')); ?>"
                                            placeholder="Currency Symbol like  $ or €">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Alinhamento do Simbolo</strong></label>
                                    <div class="col-lg-9">
                                        <select name="currencySymbolAlign" class="form-control form-control-lg select">
                                        <option value="left" <?php if(config('settings.currencySymbolAlign')=="left" ): ?> selected
                                        <?php endif; ?>>Esquerda
                                        </option>
                                        <option value="right" <?php if(config('settings.currencySymbolAlign')=="right" ): ?> selected
                                        <?php endif; ?>>Direita
                                        </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Nome da Carteira:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="walletName"
                                            value="<?php echo e(config('settings.walletName')); ?>"
                                            placeholder="Digite o nome do seu sistema de carteira (Eg: Coins, PiggyBank)">
                                    </div>
                                </div>
                                
                                
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Pagamento mínimo para a loja em
                                    <?php echo e(config('settings.currencyFormat')); ?>: </strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg min-payout" name="minPayout"
                                            value="<?php echo e(config('settings.minPayout')); ?>"
                                            placeholder="Pagamento mínimo para a loja em <?php echo e(config('settings.currencyFormat')); ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Tempo Máx para Aceitar Pedido:
                                    </strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg threshold-time"
                                            name="restaurantAcceptTimeThreshold"
                                            value="<?php echo e(config('settings.restaurantAcceptTimeThreshold')); ?>">
                                        <span class="help-text text-muted">Tempo mínimo em minutos após o qual admin recebe uma notificação na página de pedidos de que o dono da loja não aceitou o pedido.</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Tempo Máx para Entregador Aceitar Pedido:
                                    </strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg threshold-time"
                                            name="deliveryAcceptTimeThreshold"
                                            value="<?php echo e(config('settings.deliveryAcceptTimeThreshold')); ?>">
                                        <span class="help-text text-muted">Tempo máximo em minutos após o qual admin recebe uma notificação na página de pedidos de que o entregador não aceitou o pedido.</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Qualidade da IMG:</strong></label>
                                    <div class="col-lg-9">
                                        <select name="uploadImageQuality" class="form-control form-control-lg select">
                                        <option value="25" <?php if(config('settings.uploadImageQuality')=="25" ): ?>
                                        selected <?php endif; ?>>Baixa</option>
                                        <option value="50" <?php if(config('settings.uploadImageQuality')=="50" ): ?>
                                        selected <?php endif; ?>>Media</option>
                                        <option value="75" <?php if(config('settings.uploadImageQuality')=="75" ): ?>
                                        selected <?php endif; ?>>Padrão</option>
                                        <option value="100" <?php if(config('settings.uploadImageQuality')=="100" ): ?>
                                        selected <?php endif; ?>>Alta</option>
                                        </select>
                                        <span class="help-text text-muted">Somente para upload de itens via Admin e Painel da loja.</span>
                                    </div>
                                </div>
                                
                                <hr style="border-top: 3px dashed rgba(103, 58, 183, 0.20);">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Modo Desensolvedor.
                                    </strong></label>
                                    <div class="col-lg-9">
                                        <div class="checkbox checkbox-switchery mt-2">
                                            <label>
                                            <input value="true" type="checkbox" class="switchery-primary"
                                            <?php if(config('settings.enDevMode')=="true" ): ?> checked="checked" <?php endif; ?>
                                            name="enDevMode">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="seoSettings">
                                <legend class="font-weight-semibold text-uppercase font-size-sm">
                                    CONFIGURAÇÕES CEO
                                </legend>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Titulo Meta: </strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="seoMetaTitle"
                                            value="<?php echo e(config('settings.seoMetaTitle')); ?>" placeholder="Titulo Meta">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Descrição Meta: </strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg"
                                            name="seoMetaDescription"
                                            value="<?php echo e(config('settings.seoMetaDescription')); ?>"
                                            placeholder="Descrição Meta">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Grafico do Titulo Aberto: </strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="seoOgTitle"
                                            value="<?php echo e(config('settings.seoOgTitle')); ?>" placeholder="Grafico do Titulo Aberto">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Descrição Grafica do Titulo:
                                    </strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="seoOgDescription"
                                            value="<?php echo e(config('settings.seoOgDescription')); ?>"
                                            placeholder="Descrição Grafica do Titulo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <?php if(config('settings.seoOgImage') !== NULL): ?>
                                    <div class="col-lg-9 offset-lg-3">
                                        <img src="<?php echo e(substr(url('/'), 0, strrpos(url('/'), '/'))); ?>/assets/img/social/<?php echo e(config('settings.seoOgImage')); ?>"
                                            alt="Open Graph Image" class="img-fluid mb-2" style="width: 30%;">
                                    </div>
                                    <?php endif; ?>
                                    <label class="col-lg-3 col-form-label"><strong>Imagem Grafica Aberta: </strong></label>
                                    <div class="col-lg-9">
                                        <input type="file" class="form-control-uniform" name="seoOgImage" data-fouc>
                                        <span class="help-text text-muted">Tamanho 1200x630 </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Twitter Cartão de Titulo:
                                    </strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="seoTwitterTitle"
                                            value="<?php echo e(config('settings.seoTwitterTitle')); ?>"
                                            placeholder="witter Cartao de Titulo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Twitter Cartão de Descrição
                                    </strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg"
                                            name="seoTwitterDescription"
                                            value="<?php echo e(config('settings.seoTwitterDescription')); ?>"
                                            placeholder="Twitter Cartão de Descrição">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <?php if(config('settings.seoTwitterImage') !== NULL): ?>
                                    <div class="col-lg-9 offset-lg-3">
                                        <img src="<?php echo e(substr(url('/'), 0, strrpos(url('/'), '/'))); ?>/assets/img/social/<?php echo e(config('settings.seoTwitterImage')); ?>"
                                            alt="Twitter Image" class="img-fluid mb-2" style="width: 30%;">
                                    </div>
                                    <?php endif; ?>
                                    <label class="col-lg-3 col-form-label"><strong>Twitter Imagem do Cartão:
                                    </strong></label>
                                    <div class="col-lg-9">
                                        <input type="file" class="form-control-uniform" name="seoTwitterImage"
                                            data-fouc>
                                        <span class="help-text text-muted">Tamanho 600x335</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="designSettings">
                                <legend class="font-weight-semibold text-uppercase font-size-sm">
                                    CONFIGURAÇÕES do Design
                                </legend>
                                <div class="form-group row">
                                    <?php if(config('settings.storeLogo') !== NULL): ?>
                                    <div class="col-lg-9 offset-lg-3">
                                        <img src="<?php echo e(substr(url('/'), 0, strrpos(url('/'), '/'))); ?>/assets/img/logos/<?php echo e(config('settings.storeLogo')); ?>"
                                            alt="logo" class="img-fluid mb-2" style="width: 135px;">
                                    </div>
                                    <?php endif; ?>
                                    <label class="col-lg-3 col-form-label"><strong>Logo: </strong></label>
                                    <div class="col-lg-9">
                                        <input type="file" class="form-control-uniform" name="logo" accept="image/x-png" data-fouc>
                                        <span class="help-text text-muted">Tamanho 320x89 - (IMG em PNG)</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <?php if(config('settings.favicon-32x32') !== NULL): ?>
                                    <div class="col-lg-9 offset-lg-3">
                                        <img src="<?php echo e(substr(url('/'), 0, strrpos(url('/'), '/'))); ?>/assets/img/favicons/<?php echo e(config('settings.favicon-96x96')); ?>"
                                            alt="favicon-96x96" class="img-fluid mb-2" style="width: 70px;">
                                    </div>
                                    <?php endif; ?>
                                    <label class="col-lg-3 col-form-label"><strong>Favicon: </strong></label>
                                    <div class="col-lg-9">
                                        <input type="file" class="form-control-uniform" name="favicon" accept="image/x-png" data-fouc>
                                        <span class="help-text text-muted">Tamanho: 512x512 (IMG em PNG)</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <?php if(config('settings.splashLogo') !== NULL): ?>
                                    <div class="col-lg-9 offset-lg-3">
                                        <img src="<?php echo e(substr(url('/'), 0, strrpos(url('/'), '/'))); ?>/assets/img/splash/<?php echo e(config('settings.splashLogo')); ?>"
                                            alt="splash screen" class="img-fluid mb-2" style="width: 30%;">
                                    </div>
                                    <?php endif; ?>
                                    <label class="col-lg-3 col-form-label"><strong>Splash Screen: </strong></label>
                                    <div class="col-lg-9">
                                        <input type="file" class="form-control-uniform" name="splashLogo" accept="image/jpeg" data-fouc>
                                        <span class="help-text text-muted">Tamanho 480x853 (IMG em JPG)</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <?php if(config('settings.firstScreenHeroImage') !== NULL): ?>
                                    <div class="col-lg-9 offset-lg-3">
                                        <img src="<?php echo e(substr(url('/'), 0, strrpos(url('/'), '/'))); ?>/<?php echo e(config('settings.firstScreenHeroImage')); ?>"
                                            alt="Hero Image" class="img-fluid mb-2" style="width: 30%;">
                                    </div>
                                    <?php endif; ?>
                                    <label class="col-lg-3 col-form-label"><strong>Hero Image: </strong></label>
                                    <div class="col-lg-9">
                                        <input type="file" class="form-control-uniform" name="firstScreenHeroImage"
                                            data-fouc>
                                        <span class="help-text text-muted">Tamanho 592x640 </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Cor dos Botôes:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control colorpicker-show-input" name="storeColor"
                                            data-preferred-format="rgb" value="<?php echo e(config('settings.storeColor')); ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Fundo da Sacola/Carrinho:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control colorpicker-show-input"
                                            name="cartColorBg" data-preferred-format="rgb"
                                            value="<?php echo e(config('settings.cartColorBg')); ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Texto da Sacola/Carrinho:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control colorpicker-show-input"
                                            name="cartColorText" data-preferred-format="rgb"
                                            value="<?php echo e(config('settings.cartColorText')); ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Novo Produto:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control colorpicker-show-input"
                                            name="newBadgeColor" data-preferred-format="rgb"
                                            value="<?php echo e(config('settings.newBadgeColor')); ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Produto Popular:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control colorpicker-show-input"
                                            name="popularBadgeColor" data-preferred-format="rgb"
                                            value="<?php echo e(config('settings.popularBadgeColor')); ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Produto Sugerido:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control colorpicker-show-input"
                                            name="recommendedBadgeColor" data-preferred-format="rgb"
                                            value="<?php echo e(config('settings.recommendedBadgeColor')); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pushNotificationSettings">
                                <legend class="font-weight-semibold text-uppercase font-size-sm">
                                    CONFIGURAÇÕES Push Notification
                                </legend>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Ativar Push
                                    Notifications</strong></label>
                                    <div class="col-lg-9">
                                        <div class="checkbox checkbox-switchery mt-2">
                                            <label>
                                            <input value="true" type="checkbox" class="switchery-primary"
                                            <?php if(config('settings.enablePushNotification')=="true" ): ?>
                                            checked="checked" <?php endif; ?> name="enablePushNotification">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Push Notifications Para Novos Pedidos</strong></label>
                                    <div class="col-lg-9">
                                        <div class="checkbox checkbox-switchery mt-2">
                                            <label>
                                            <input value="true" type="checkbox" class="switchery-primary"
                                            <?php if(config('settings.enablePushNotificationOrders')=="true" ): ?>
                                            checked="checked" <?php endif; ?> name="enablePushNotificationOrders">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Firebase Sender ID:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="firebaseSenderId"
                                            value="<?php echo e(config('settings.firebaseSenderId')); ?>"
                                            placeholder="Digite Firebase Sender ID">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Firebase Web Push
                                    Certificate:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="firebasePublic"
                                            value="<?php echo e(config('settings.firebasePublic')); ?>"
                                            placeholder="Digite Firebase Public Key (Certificate)">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Firebase Server Key:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="firebaseSecret"
                                            value="<?php echo e(config('settings.firebaseSecret')); ?>"
                                            placeholder="Digite Firebase Secret">
                                        <p class="text-default"><strong>Nota: </strong> Não cole uma chave de servidor herdada.
                                        </p>
                                    </div>
                                </div>
                                <span class="help-text text-muted"><a
                                            href="https://docs.foodomaa.com/configurations/push-notification-keys"
                                            target="_blank">Como configurar notificações push? </a></span>
                                <br>
                                <hr>
                                <span><strong class="text-danger">IMPORTANTE</strong><br> <a href="https://docs.foodomaa.com/faqs/push-notifications-and-alerts" target="_blank">Clique Aqui </a> para saber como assinantes, notificações push e alertas funcionam..</span>
                            </div>
                            <div class="tab-pane fade" id="socialLoginSettings">
                                <legend class="font-weight-semibold text-uppercase font-size-sm">
                                    CONFIGURAÇÕES Social Login
                                </legend>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Ativar Facebook
                                    Login</strong></label>
                                    <div class="col-lg-9">
                                        <div class="checkbox checkbox-switchery mt-2">
                                            <label>
                                            <input value="true" type="checkbox" class="switchery-primary"
                                            <?php if(config('settings.enableFacebookLogin')=="true" ): ?>
                                            checked="checked" <?php endif; ?> name="enableFacebookLogin">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Facebook App ID:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="facebookAppId"
                                            value="<?php echo e(config('settings.facebookAppId')); ?>"
                                            placeholder="Digite Facebook App ID">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Facebook Botão:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg"
                                            name="facebookLoginButtonText"
                                            value="<?php echo e(config('settings.facebookLoginButtonText')); ?>"
                                            placeholder="Facebook Login texto do botão">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Ativar Google Login</strong></label>
                                    <div class="col-lg-9">
                                        <div class="checkbox checkbox-switchery mt-2">
                                            <label>
                                            <input value="true" type="checkbox" class="switchery-primary"
                                            <?php if(config('settings.enableGoogleLogin')=="true" ): ?> checked="checked"
                                            <?php endif; ?> name="enableGoogleLogin">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Google App ID:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="googleAppId"
                                            value="<?php echo e(config('settings.googleAppId')); ?>"
                                            placeholder="Digite Google App ID">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Google Botâo:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg"
                                            name="googleLoginButtonText"
                                            value="<?php echo e(config('settings.googleLoginButtonText')); ?>"
                                            placeholder="Google Login texto do botão">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="mapSettings">
                                <legend class="font-weight-semibold text-uppercase font-size-sm">
                                    CONFIGURAÇÕES Google Maps
                                </legend>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Mostrar mapa na página de acompanhamento de pedidos?</strong></label>
                                    <div class="col-lg-9">
                                        <div class="checkbox checkbox-switchery mt-2">
                                            <label>
                                            <input value="true" type="checkbox" class="switchery-primary"
                                            <?php if(config('settings.showMap')=="true" ): ?> checked="checked" <?php endif; ?>
                                            name="showMap">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Google Map API Key: </strong> <br>
                                    (restrição de HTTPS)</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="googleApiKey"
                                            value="<?php echo e(config('settings.googleApiKey')); ?>"
                                            placeholder="Chave da API do Google Map com restrição de HTTPs">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Google Map API Key: </strong> <br>
                                    (restrição de IP)</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="googleApiKeyIP"
                                            value="<?php echo e(config('settings.googleApiKeyIP')); ?>"
                                            placeholder="Chave da API do Google Map com restrição de IP">
                                    </div>
                                </div>
                                <hr>
                                <a href="https://stackcanyon.com/docs/foodomaa/admin-google-maps-api" target="_blank" rel="nofollow">Clique aqui</a>
                                para aprender a configurar as chaves da API do Google.<br>
                            </div>
                            <div class="tab-pane fade" id="paymentGatewaySettings">
                                <legend class="font-weight-semibold text-uppercase font-size-sm">
                                    CONFIGURAÇÕES Gateway de pagamento
                                </legend>
                                <?php
                                $activePaymentGatewayCount = count($activePaymentGateways);
                                ?>
                                <?php $__currentLoopData = $paymentGateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paymentGateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-group row" id="paymentGatewaysData">
                                    <label class="col-lg-5 col-form-label"><strong><?php echo e($paymentGateway->name); ?>

                                    </strong>(<?php echo e($paymentGateway->description); ?>)</label>
                                    <div class="col-lg-6 mt-2">
                                        <label>
                                        <input value="<?php echo e($paymentGateway->id); ?>" type="checkbox"
                                        class="switchery-primary payment-gateway-switch"
                                        <?php if($paymentGateway->is_active && $activePaymentGatewayCount == 1): ?>
                                        checked="checked"
                                        disabled="disabled"
                                        <?php endif; ?>
                                        <?php if($paymentGateway->is_active): ?>
                                        checked="checked"
                                        <?php endif; ?>
                                        name="<?php echo e($paymentGateway->name); ?>">
                                        </label>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <hr>
                                <h2>Stripe</h2>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Stripe Public Key:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="stripePublicKey"
                                            value="<?php echo e(config('settings.stripePublicKey')); ?>"
                                            placeholder="Stripe Public Key (Deixe em branco se não estiver usando o Stripe)">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Stripe Secret Key:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="stripeSecretKey"
                                            value="<?php echo e(config('settings.stripeSecretKey')); ?>"
                                            placeholder="Stripe Secret Key (Deixe em branco se não estiver usando o Stripe)">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">
                                    <strong>Stripe Language:</strong>
                                    </label>
                                    <div class="col-lg-9">
                                        <select name="stripeLocale" class="form-control form-control-lg select">
                                        <option value="auto" <?php if(config('settings.stripeLocale')=="auto"): ?> selected <?php endif; ?> >Stripe detects the langauge of the browser</option>
                                        <option value="cs" <?php if(config('settings.stripeLocale')=="cs"): ?> selected <?php endif; ?> >Czech (Czech Republic)</option>
                                        <option value="da" <?php if(config('settings.stripeLocale')=="da"): ?> selected <?php endif; ?> >Danish</option>
                                        <option value="de" <?php if(config('settings.stripeLocale')=="de"): ?> selected <?php endif; ?> >German (Germany)</option>
                                        <option value="el" <?php if(config('settings.stripeLocale')=="el"): ?> selected <?php endif; ?> >Greek (Greece)</option>
                                        <option value="et" <?php if(config('settings.stripeLocale')=="et"): ?> selected <?php endif; ?> >Estonian (Estonia)</option>
                                        <option value="en" <?php if(config('settings.stripeLocale')=="en"): ?> selected <?php endif; ?> >English</option>
                                        <option value="es" <?php if(config('settings.stripeLocale')=="es"): ?> selected <?php endif; ?> >Spanish (Spain)</option>
                                        <option value="es-419" <?php if(config('settings.stripeLocale')=="es-419"): ?> selected <?php endif; ?> >Spanish (Latin America)</option>
                                        <option value="fi" <?php if(config('settings.stripeLocale')=="fi"): ?> selected <?php endif; ?> >Finnish (Finland)</option>
                                        <option value="fr" <?php if(config('settings.stripeLocale')=="fr"): ?> selected <?php endif; ?> >French (France)</option>
                                        <option value="hu" <?php if(config('settings.stripeLocale')=="hu"): ?> selected <?php endif; ?> >Hungarian (Hungary)</option>
                                        <option value="id" <?php if(config('settings.stripeLocale')=="id"): ?> selected <?php endif; ?> >Indonesian (Indonesia)</option>
                                        <option value="it" <?php if(config('settings.stripeLocale')=="it"): ?> selected <?php endif; ?> >Italian (Italy)</option>
                                        <option value="ja" <?php if(config('settings.stripeLocale')=="ja"): ?> selected <?php endif; ?> >Japanese</option>
                                        <option value="lt" <?php if(config('settings.stripeLocale')=="lt"): ?> selected <?php endif; ?> >Lithuanian (Lithuania)</option>
                                        <option value="lv" <?php if(config('settings.stripeLocale')=="lv"): ?> selected <?php endif; ?> >Latvian (Latvia)</option>
                                        <option value="ms" <?php if(config('settings.stripeLocale')=="ms"): ?> selected <?php endif; ?> >Malay (Malaysia)</option>
                                        <option value="mt" <?php if(config('settings.stripeLocale')=="mt"): ?> selected <?php endif; ?> >Maltese (Malta)</option>
                                        <option value="nb" <?php if(config('settings.stripeLocale')=="nb"): ?> selected <?php endif; ?> >Norwegian Bokmål</option>
                                        <option value="nl" <?php if(config('settings.stripeLocale')=="nl"): ?> selected <?php endif; ?> >Dutch (Netherlands)</option>
                                        <option value="pl" <?php if(config('settings.stripeLocale')=="pl"): ?> selected <?php endif; ?> >Polish (Poland)</option>
                                        <option value="pt-BR" <?php if(config('settings.stripeLocale')=="pt-BR"): ?> selected <?php endif; ?> >Portuguese (Brazil)</option>
                                        <option value="pt" <?php if(config('settings.stripeLocale')=="pt"): ?> selected <?php endif; ?> >Portuguese (Brazil)</option>
                                        <option value="ro" <?php if(config('settings.stripeLocale')=="ro"): ?> selected <?php endif; ?> >Romanian (Romania)</option>
                                        <option value="ru" <?php if(config('settings.stripeLocale')=="ru"): ?> selected <?php endif; ?> >Russian (Russia)</option>
                                        <option value="sk" <?php if(config('settings.stripeLocale')=="sk"): ?> selected <?php endif; ?> >Slovak (Slovakia)</option>
                                        <option value="sl" <?php if(config('settings.stripeLocale')=="sl"): ?> selected <?php endif; ?> >Slovenian (Slovenia)</option>
                                        <option value="sv" <?php if(config('settings.stripeLocale')=="sv"): ?> selected <?php endif; ?> >Swedish (Sweden)</option>
                                        <option value="tk" <?php if(config('settings.stripeLocale')=="tk"): ?> selected <?php endif; ?> >Turkish (Turkey)</option>
                                        <option value="zh" <?php if(config('settings.stripeLocale')=="zh"): ?> selected <?php endif; ?> >Chinese Simplified (China)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Aceitar AliPay ou Stripe</strong></label>
                                    <div class="col-lg-9">
                                        <div class="checkbox checkbox-switchery mt-2">
                                            <label>
                                            <input value="true" type="checkbox" class="switchery-primary"
                                            <?php if(config('settings.stripeAcceptAliPay')=="true" ): ?> checked="checked" <?php endif; ?>
                                            name="stripeAcceptAliPay">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Aceitar BitCoin ou Stripe</strong></label>
                                    <div class="col-lg-9">
                                        <div class="checkbox checkbox-switchery mt-2">
                                            <label>
                                            <input value="true" type="checkbox" class="switchery-primary"
                                            <?php if(config('settings.stripeAcceptBitCoin')=="true" ): ?> checked="checked" <?php endif; ?>
                                            name="stripeAcceptBitCoin">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h2>PayPal</h2>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Paypal:</strong></label>
                                    <div class="col-lg-9">
                                        <select name="paypalEnv" class="form-control form-control-lg select">
                                        <option value="sandbox" <?php if(config('settings.paypalEnv')=="sandbox" ): ?>
                                        selected <?php endif; ?>>Sandbox (Teste)</option>
                                        <option value="production" <?php if(config('settings.paypalEnv')=="production" ): ?>
                                        selected <?php endif; ?>>Production (Live)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Paypal Sandbox Key:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="paypalSandboxKey"
                                            value="<?php echo e(config('settings.paypalSandboxKey')); ?>"
                                            placeholder="Paypal Sandbox Client Key (Deixe em branco se não estiver usando o PayPal)">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Paypal Production
                                    Key:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg"
                                            name="paypalProductionKey"
                                            value="<?php echo e(config('settings.paypalProductionKey')); ?>"
                                            placeholder="Paypal Production Client Key (Deixe em branco se não estiver usando o PayPal)">
                                    </div>
                                </div>
                                <hr>
                                <h2>PayStack</h2>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>PayStack Public Key:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="paystackPublicKey"
                                            value="<?php echo e(config('settings.paystackPublicKey')); ?>"
                                            placeholder="PayStack Public Key (Deixe em branco se não estiver usando o PayStack)">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>PayStack Private
                                    Key:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg"
                                            name="paystackPrivateKey"
                                            value="<?php echo e(config('settings.paystackPrivateKey')); ?>"
                                            placeholder="PayStack Private Key (Deixe em branco se não estiver usando o PayStack)">
                                    </div>
                                </div>
                                <hr>
                                <h2>Razorpay</h2>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Razorpay Key Id:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="razorpayKeyId"
                                            value="<?php echo e(config('settings.razorpayKeyId')); ?>"
                                            placeholder="Razorpay Key Id (Deixe em branco se não estiver usando o Razorpay)">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>Razorpay Secret Key:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="razorpayKeySecret"
                                            value="<?php echo e(config('settings.razorpayKeySecret')); ?>"
                                            placeholder="Razorpay Secret Key (Deixe em branco se não estiver usando o Razorpay)">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="smsGatewaySettings">
                                <legend class="font-weight-semibold text-uppercase font-size-sm">
                                    CONFIGURAÇÕES de SMS
                                </legend>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>SMS Gateway</strong></label>
                                    <div class="col-lg-9">
                                        <select name="defaultSmsGateway" class="form-control form-control-lg select">
                                        <?php $__currentLoopData = $sms_gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sms_gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php if(config('settings.defaultSmsGateway') == $sms_gateway->id ): ?> selected <?php endif; ?> value="<?php echo e($sms_gateway->id); ?>"><?php echo e($sms_gateway->gateway_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div id="msg91Settings" class="<?php if(config('settings.defaultSmsGateway') != "1"): ?> hidden <?php endif; ?>">
                                <h2>MSG91</h2>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>MSG91 Auth Key:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="msg91AuthKey"
                                            value="<?php echo e(config('settings.msg91AuthKey')); ?>" placeholder="MSG91 Auth Key">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><strong>MSG91 Sender Id:</strong></label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="msg91SenderId"
                                            value="<?php echo e(config('settings.msg91SenderId')); ?>"
                                            placeholder="MSG91 Sender ID">
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div id="twilioSettings" class="<?php if(config('settings.defaultSmsGateway') != "2"): ?> hidden <?php endif; ?>">
                            <h2>Twilio</h2>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label"><strong>Twilio SID:</strong></label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control form-control-lg" name="twilioSid"
                                        value="<?php echo e(config('settings.twilioSid')); ?>" placeholder="Twilio SID">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label"><strong>Twilio Access Token:</strong></label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control form-control-lg" name="twilioAccessToken"
                                        value="<?php echo e(config('settings.twilioAccessToken')); ?>"
                                        placeholder="Twilio Access Token">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label"><strong>Twilio Phone Number:</strong></label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control form-control-lg" name="twilioFromPhone"
                                        value="<?php echo e(config('settings.twilioFromPhone')); ?>"
                                        placeholder="Twilio Phone Number">
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>Verificação de registro por SMS</strong></label>
                            <div class="col-lg-9">
                                <div class="checkbox checkbox-switchery mt-2">
                                    <label>
                                    <input value="true" type="checkbox" class="switchery-primary"
                                    <?php if(config('settings.enSOV')=="true" ): ?> checked="checked" <?php endif; ?>
                                    name="enSOV">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>Mensagem:</strong></label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-control-lg" name="otpMessage"
                                    value="<?php echo e(config('settings.otpMessage')); ?>" placeholder="OTP Mensagem: ">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>SMS Notification para pedidos na loja</strong></label>
                            <div class="checkbox checkbox-switchery mt-2">
                                <div class="col-lg-9">
                                    <label>
                                    <input value="true" type="checkbox" class="switchery-primary"
                                    <?php if(config('settings.smsRestaurantNotify') == "true" ): ?> checked="checked" <?php endif; ?>
                                    name="smsRestaurantNotify">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>Mensagem de pedido na loja: </strong></label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-control-lg" name="defaultSmsRestaurantMsg"
                                    value="<?php echo e(config('settings.defaultSmsRestaurantMsg')); ?>" placeholder="Nova mensagem de pedido na loja">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class=" col-lg-3 col-form-label"><strong>Incluir valor do pedido no SMS</strong></label>
                            <div class="checkbox checkbox-switchery mt-2 ">
                                <div class="col-lg-9">
                                    <label>
                                    <input value="true" type="checkbox" class="switchery-primary"
                                    <?php if(config('settings.smsRestOrderValue') == "true" ): ?> checked="checked" <?php endif; ?>
                                    name="smsRestOrderValue">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>SMS Notification para Entregador</strong></label>
                            <div class="col-lg-9">
                                <div class="checkbox checkbox-switchery mt-2">
                                    <label>
                                    <input value="true" type="checkbox" class="switchery-primary"
                                    <?php if(config('settings.smsDeliveryNotify') == "true" ): ?> checked="checked" <?php endif; ?>
                                    name="smsDeliveryNotify">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>Mensagem de pedido para o Entregador: </strong></label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-control-lg" name="defaultSmsDeliveryMsg"
                                    value="<?php echo e(config('settings.defaultSmsDeliveryMsg')); ?>" placeholder="Nova mensagem de pedido para o Entregador">
                            </div>
                        </div>
                        <hr>
                        
                    </div>
                    <div class="tab-pane fade" id="emailSettings">
                        <legend class="font-weight-semibold text-uppercase font-size-sm">
                            CONFIGURAÇÕES de Email
                        </legend>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>Servidor SMTP</strong></label>
                                                        <div class="col-lg-9">
                                <select name="defaultEmailGateway" class="form-control form-control-lg select">
                                <option <?php if(config('settings.defaultEmailGateway') == "sendgrid" ): ?> selected <?php endif; ?> value="sendgrid">SendGrid</option>
                                <option <?php if(config('settings.defaultEmailGateway') == "smtp" ): ?> selected <?php endif; ?> value="smtp">SMTP</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div id="sendgridSettings" class="<?php if(config('settings.defaultEmailGateway') != "sendgrid"): ?> hidden <?php endif; ?>">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>SendGrid Api Key</strong></label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-control-lg" name="sendgrid_api_key"
                                    value="<?php echo e(config('settings.sendgrid_api_key')); ?>" placeholder="SendGrid API Key">
                            </div>
                        </div>
                    </div>
                    <div id="smtpSettings" class="<?php if(config('settings.defaultEmailGateway') != "smtp"): ?> hidden <?php endif; ?>">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><strong>SMTP Host</strong></label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg" name="mail_host"
                                value="<?php echo e(config('settings.mail_host')); ?>" placeholder="SMTP host">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><strong>SMTP Port</strong></label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg" name="mail_port"
                                value="<?php echo e(config('settings.mail_port')); ?>" placeholder="SMTP Port">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><strong>SMTP Usuario</strong></label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg" name="mail_username"
                                value="<?php echo e(config('settings.mail_username')); ?>" placeholder="SMTP Usuario">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><strong>SMTP Senha</strong></label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg" name="mail_password"
                                value="<?php echo e(config('settings.mail_password')); ?>" placeholder="SMTP Senha">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><strong>SMTP Encryption</strong></label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-lg" name="mail_encryption"
                                value="<?php echo e(config('settings.mail_encryption')); ?>" placeholder="SMTP Encryption">
                        </div>
                    </div>
            </div>
            <hr>
            <div class="form-group row">
            <label class="col-lg-3 col-form-label"><strong>Email</strong></label>
            <div class="col-lg-9">
            <input type="email" class="form-control form-control-lg" name="sendEmailFromEmailAddress"
                value="<?php echo e(config('settings.sendEmailFromEmailAddress')); ?>"
                placeholder="Digite um email como do-not-reply@mywebsite.com">
            </div>
            </div>
            <div class="form-group row">
            <label class="col-lg-3 col-form-label"><strong>Nome</strong></label>
            <div class="col-lg-9">
            <input type="text" class="form-control form-control-lg" name="sendEmailFromEmailName"
                value="<?php echo e(config('settings.sendEmailFromEmailName')); ?>"
                placeholder="Digite o nome do endereço de email (Ex: Meu Delivery)">
            </div>
            </div>
            <div class="form-group row">
            <label class="col-lg-3 col-form-label"><strong>Assunto</strong></label>
            <div class="col-lg-9">
            <input type="text" class="form-control form-control-lg" name="passwordResetEmailSubject"
                value="<?php echo e(config('settings.passwordResetEmailSubject')); ?>"
                placeholder="Digite o assunto do email para o email de recuperação de senha (Ex: Nova Senha)">
            </div>
            </div>
            <div>
            <p><strong class="text-danger">IMPORTANTE:</strong>Depois de salvar as configurações, envie um email de teste para o seu email
            antes de ativar a funcionalidade de redefinição de senha
            </p>
            <button
                type="button" class="btn btn-primary btn-md" id="toggleSendTestEmail" autocomplete="false"> Enviar Email Teste</button>
            <div id="sendTestEmailBlock" style="display: none;">
            <div class="form-group row">
            <div class="col-lg-6">
            <input type="email" class="form-control form-control-lg" id="testEmail"
                placeholder="Digite Endereço de Email">
            </div>
            <button type="button"
                class="btn btn-primary btn-labeled btn-labeled-left btn-md"
                id="sendTestEmailNow">
            <b><i class="icon-mail-read ml-1"></i></b>
            Enviar email de teste
            <i class="icon-spinner10 spinner ml-1" id="testMailSpinner"
                style="display: none;"></i>
            </button>
            </div>
            </div>
            </div>
            <hr>
            <div class="form-group row">
            <label class="col-lg-3 col-form-label"><strong>Ativar redefinição de senha?</strong></label>
            <div class="col-lg-9">
            <div class="checkbox checkbox-switchery mt-2">
            <label>
            <input value="true" type="checkbox" class="switchery-primary"
            <?php if(config('settings.enPassResetEmail')=="true" ): ?> checked="checked"
            <?php endif; ?> name="enPassResetEmail">
            </label>
            </div>
            </div>
            </div>
            <div id="customSMTPDisclaimer" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"><span class="font-weight-bold text-danger"> <i class="icon-exclamation mr-2"></i> Isenção de Responsabilidade</span></h5>
            </div>
            <div class="modal-body">
            <p>
            Você optou por usar um <strong>Servidor SMTP personalizado</strong>.
            <br><br>
            Somente o Gateway de Email da API SendGrid é oficialmente suportado.
            <br><br>
            Se você configurar um servidor SMTP personalizado, estará por sua conta! 
            <br>
            O envio de e-mails não pode ser garantido com as configurações do Servidor SMTP personalizado, pois as configurações podem variar de servidor para servidor.
            <br><br>
            <strong>Quaisquer tíquetes de suporte relacionados a problemas de servidor SMTP personalizado serão <span class="text-danger">Fechados</span> automaticamente.</strong>
            </p>
            </div>
            <div class="modal-footer">
            <div class="text-right">
            <button type="button" class="btn btn-primary btn-labeled btn-labeled-left btn-lg" data-dismiss="modal">
            <b><i class="icon-checkmark ml-1"></i></b>
            Estou de Acordo
            </button>
            </div>
            </div>
            </div>
            </div>
            </div>
        </div>
        <script>
            $('#toggleSendTestEmail').click(function(event) {
                $(this).hide();
                $('#sendTestEmailBlock').toggle(500);
            });
            $('#sendTestEmailNow').click(function(event) {
                let testEmail = $('#testEmail').val();
                let token = $("#csrf").val();
                
                if (testEmail.length) {
                    $('#sendTestEmailNow').addClass('pointer-none');
                    $('#testMailSpinner').toggle();
                    $.ajax({
                        url: '<?php echo e(route('admin.sendTestmail')); ?>',
                        type: 'POST',
                        dataType: 'JSON',
                        data: {email: testEmail, _token: token},
                    })
                    .done(function(data) {
                        $.jGrowl("Please check your inbox.", {
                            position: 'bottom-center',
                            header: 'Mail Sent ✅',
                            theme: 'bg-success',
                            life: '5000'
                        }); 
                        console.log("success");
                        $('#sendTestEmailNow').removeClass('pointer-none');
                        $('#testMailSpinner').toggle();
                    })
                    .fail(function(data) {
                        console.log(data);
                        $.jGrowl(data.responseJSON.message, {
                            position: 'bottom-center',
                            header: 'Wooopsss ⚠️',
                            theme: 'bg-warning',
                            life: '999999'
                        }); 
                        $('#sendTestEmailNow').removeClass('pointer-none');
                        $('#testMailSpinner').toggle();
                    }) 
                } else {
                    $.jGrowl("Please enter an email address in a correct format.", {
                        position: 'bottom-center',
                        header: 'Wooopsss ⚠️',
                        theme: 'bg-warning',
                        life: '3500'
                    }); 
                }
            });
        </script>
        <div class="tab-pane fade" id="googleAnalyticsSettings">
        <legend class="font-weight-semibold text-uppercase font-size-sm">
        CONFIGURAÇÕES DO GOOGLE ANALYTICS
        </legend>
        <div class="form-group row">
        <label class="col-lg-3 col-form-label"><strong>Ativar Google Analytics</strong></label>
        <div class="col-lg-9">
        <div class="checkbox checkbox-switchery mt-2">
        <label>
        <input value="true" type="checkbox" class="switchery-primary"
        <?php if(config('settings.enableGoogleAnalytics')=="true" ): ?>
        checked="checked" <?php endif; ?> name="enableGoogleAnalytics">
        </label>
        </div>
        </div>
        </div>
        <div class="form-group row">
        <label class="col-lg-3 col-form-label"><strong>Analytics UA ID:</strong></label>
        <div class="col-lg-9">
        <input type="text" class="form-control form-control-lg" name="googleAnalyticsId"
            value="<?php echo e(config('settings.googleAnalyticsId')); ?>"
            placeholder="UA-00000000-00">
        </div>
        </div>
        </div>
        <div class="tab-pane fade" id="taxSettings">
        <legend class="font-weight-semibold text-uppercase font-size-sm">
        CONFIGURAÇÕES DE TAXAS
        </legend>
        <div class="form-group row">
        <label class="col-lg-3 col-form-label"><strong>Ativar Taxas:</strong></label>
        <div class="col-lg-9">
        <div class="checkbox checkbox-switchery mt-2">
        <label>
        <input value="true" type="checkbox" class="switchery-primary"
        <?php if(config('settings.taxApplicable')=="true" ): ?> checked="checked"
        <?php endif; ?> name="taxApplicable">
        </label>
        </div>
        </div>
        </div>
        <div class="form-group row">
        <label class="col-lg-3 col-form-label"><strong>% das Taxas:</strong></label>
        <div class="col-lg-9">
        <input type="text" class="form-control form-control-lg" name="taxPercentage"
            value="<?php echo e(config('settings.taxPercentage')); ?>"
            placeholder="Taxas em %">
        </div>
        </div>
        </div>
        <div class="tab-pane fade" id="customerAppSettings">
        <legend class="font-weight-semibold text-uppercase font-size-sm">
        CONFIGURAÇÕES APP DO CLIENTE
        </legend>
        <div class="form-group row">
        <label class="col-lg-3 col-form-label"><strong>Mostrar pop-up de adição personalizada do iOS à tela inicial <span class="badge badge-flat border-grey-800 text-danger text-capitalize mx-1">Novo</span> <i class="icon-question3 ml-1" data-popup="tooltip" title="Enabling this will display a custom popup on iOS device for Add To Homescreen once per user, 3 seconds after page is loaded." data-placement="top"></i>
        </strong></label>
        <div class="col-lg-9">
        <div class="checkbox checkbox-switchery mt-2">
        <label>
        <input value="true" type="checkbox" class="switchery-primary"
        <?php if(config('settings.enIOSPWAPopup')=="true" ): ?> checked="checked"
        <?php endif; ?> name="enIOSPWAPopup">
        </label>
        </div>
        </div>
        </div>
        <div class="form-group row">
        <label class="col-lg-3 col-form-label"><strong>Mostrar descrição do cupom no sucesso do cupom <span class="badge badge-flat border-grey-800 text-danger text-capitalize mx-1">Novo</span> <i class="icon-question3 ml-1" data-popup="tooltip" title="This will override the default coupon success message" data-placement="top"></i>
        </strong></label>
        <div class="col-lg-9">
        <div class="checkbox checkbox-switchery mt-2">
        <label>
        <input value="true" type="checkbox" class="switchery-primary"
        <?php if(config('settings.showCouponDescriptionOnSuccess')=="true" ): ?> checked="checked"
        <?php endif; ?> name="showCouponDescriptionOnSuccess">
        </label>
        </div>
        </div>
        </div>
        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>Use a API do Google Distance Matrix <span class="badge badge-flat border-grey-800 text-danger text-capitalize mx-1">Novo</span> <i class="icon-question3 ml-1" data-popup="tooltip" title="As APIs do Google serão usadas para calcular a taxa de entrega se a loja tiver ativado a taxa de entrega dinâmica" data-placement="top"></i>
                            </strong></label>
                            <div class="col-lg-9">
                                <div class="checkbox checkbox-switchery mt-2">
                                    <label>
                                    <input value="true" type="checkbox" class="switchery-primary"
                                    <?php if(config('settings.enGDMA')=="true" ): ?> checked="checked"
                                    <?php endif; ?> name="enGDMA"> 
                                    <span>Para saber como a API do Google Distance Matrix funciona </span><a href="https://docs.foodomaa.com/configurations/google-distance-matrix-api" target="_blank">Click aqui</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>Lojas aleatórias
                            <span class="badge badge-flat border-grey-800 text-danger text-capitalize mx-1">Novo</span> <i class="icon-question3 ml-1" data-popup="tooltip" title="As lojas de entrega e coleta automática serão randomizadas (a ordem de classificação será ignorada)" data-placement="left"></i>
                            </strong></label>
                            <div class="col-lg-9">
                                <div class="checkbox checkbox-switchery mt-2">
                                    <label>
                                    <input value="true" type="checkbox" class="switchery-primary"
                                    <?php if(config('settings.randomizeStores')=="true" ): ?>
                                    checked="checked" <?php endif; ?> name="randomizeStores">
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>Mostrar itens inativos
                            <span class="badge badge-flat border-grey-800 text-danger text-capitalize mx-1">Novo</span> <i class="icon-question3 ml-1" data-popup="tooltip" title="Os itens inativos serão exibidos, mas o botão Adicionar ao carrinho não será exibido" data-placement="left"></i>
                            </strong></label>
                            <div class="col-lg-9">
                                <div class="checkbox checkbox-switchery mt-2">
                                    <label>
                                    <input value="true" type="checkbox" class="switchery-primary"
                                    <?php if(config('settings.showInActiveItemsToo')=="true" ): ?>
                                    checked="checked" <?php endif; ?> name="showInActiveItemsToo">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>Flat/Apartamento Obrigatório no Endereço
                            </strong></label>
                            <div class="col-lg-9">
                                <div class="checkbox checkbox-switchery mt-2">
                                    <label>
                                    <input value="true" type="checkbox" class="switchery-primary"
                                    <?php if(config('settings.flatApartmentAddressRequired')=="true" ): ?> checked="checked"
                                    <?php endif; ?> name="flatApartmentAddressRequired">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>PIN Entregador
                            </strong></label>
                            <div class="col-lg-9">
                                <div class="checkbox checkbox-switchery mt-2">
                                    <label>
                                    <input value="true" type="checkbox" class="switchery-primary"
                                    <?php if(config('settings.enableDeliveryPin')=="true" ): ?> checked="checked"
                                    <?php endif; ?> name="enableDeliveryPin">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>Slide Promocional </strong></label>
                            <div class="col-lg-9">
                                <div class="checkbox checkbox-switchery mt-2">
                                    <label>
                                    <input value="true" type="checkbox" class="switchery-primary"
                                    <?php if(config('settings.showPromoSlider')=="true" ): ?> checked="checked"
                                    <?php endif; ?> name="showPromoSlider">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>Distinguir Veg/No-Vegano
                            </strong></label>
                            <div class="col-lg-9">
                                <div class="checkbox checkbox-switchery mt-2">
                                    <label>
                                    <input value="true" type="checkbox" class="switchery-primary"
                                    <?php if(config('settings.showVegNonVegBadge')=="true" ): ?>
                                    checked="checked" <?php endif; ?> name="showVegNonVegBadge">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>Data/Hora de embelezamento
                            </strong></label>
                            <div class="col-lg-9">
                                <div class="checkbox checkbox-switchery mt-2">
                                    <label>
                                    <input value="true" type="checkbox" class="switchery-primary"
                                    <?php if(config('settings.showFromNowDate')=="true" ): ?>
                                    checked="checked" <?php endif; ?> name="showFromNowDate">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>Arredonde a taxa de entrega dinâmica
                            </strong></label>
                            <div class="col-lg-9">
                                <div class="checkbox checkbox-switchery mt-2">
                                    <label>
                                    <input value="true" type="checkbox" class="switchery-primary"
                                    <?php if(config('settings.enDelChrRnd')=="true" ): ?>
                                    checked="checked" <?php endif; ?> name="enDelChrRnd">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>Controle deslizante de produtos Sugeridos
                            </strong></label>
                            <div class="col-lg-9">
                                <div class="checkbox checkbox-switchery mt-2">
                                    <label>
                                    <input value="true" type="checkbox" class="switchery-primary"
                                    <?php if(config('settings.recommendedLayoutV2')=="true" ): ?>
                                    checked="checked" <?php endif; ?> name="recommendedLayoutV2">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>Expandir produtos do menu
                            </strong></label>
                            <div class="col-lg-9">
                                <div class="checkbox checkbox-switchery mt-2">
                                    <label>
                                    <input value="true" type="checkbox" class="switchery-primary"
                                    <?php if(config('settings.expandAllItemMenu')=="true" ): ?>
                                    checked="checked" <?php endif; ?> name="expandAllItemMenu">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>GDPR Checkbox</strong></label>
                            <div class="col-lg-9">
                                <div class="checkbox checkbox-switchery mt-2">
                                    <label>
                                    <input value="true" type="checkbox" class="switchery-primary"
                                    <?php if(config('settings.showGdpr')=="true" ): ?> checked="checked" <?php endif; ?>
                                    name="showGdpr">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>Retirar Produtos </strong></label>
                            <div class="col-lg-9">
                                <div class="checkbox checkbox-switchery mt-2">
                                    <label>
                                    <input value="true" type="checkbox" class="switchery-primary"
                                    <?php if(config('settings.enSPU')=="true" ): ?> checked="checked" <?php endif; ?>
                                    name="enSPU">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>Codigo padrao de area:
                            </strong></label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-control-lg" name="phoneCountryCode"
                                    value="<?php echo e(config('settings.phoneCountryCode')); ?>"
                                    placeholder="Default Country Code on Phone field (Leave empty if not required)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>Ocultar preço do item quando zero
                            </strong></label>
                            <div class="col-lg-9">
                                <div class="checkbox checkbox-switchery mt-2">
                                    <label>
                                    <input value="true" type="checkbox" class="switchery-primary"
                                    <?php if(config('settings.hidePriceWhenZero')=="true" ): ?> checked="checked"
                                    <?php endif; ?> name="hidePriceWhenZero">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>Mostrar porcentagem de desconto do produto
                            </strong></label>
                            <div class="col-lg-9">
                                <div class="checkbox checkbox-switchery mt-2">
                                    <label>
                                    <input value="true" type="checkbox" class="switchery-primary"
                                    <?php if(config('settings.showPercentageDiscount')=="true" ): ?>
                                    checked="checked" <?php endif; ?> name="showPercentageDiscount">
                                    </label>
                                </div>
                            </div>
                        </div>
                    <div class="form-group row">
                            <label class="col-lg-3 col-form-label"><strong>Use o Simple Spinner para carregar páginas <span class="badge badge-flat border-grey-800 text-danger text-capitalize mx-1">Novo</span>
                            </strong></label>
                            <div class="col-lg-9">
                                <div class="checkbox checkbox-switchery mt-2">
                                    <label>
                                    <input value="true" type="checkbox" class="switchery-primary"
                                    <?php if(config('settings.useSimpleSpinner')=="true" ): ?>
                                    checked="checked" <?php endif; ?> name="useSimpleSpinner">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
        <div class="tab-pane fade" id="deliveryAppSettings">
        <legend class="font-weight-semibold text-uppercase font-size-sm">
        CONFIGURAÇÕES do entregador
        </legend>
        <div class="form-group row">
        <label class="col-lg-3 col-form-label"><strong>Ativar ganhos do entregador
        </strong></label>
        <div class="col-lg-9">
        <div class="checkbox checkbox-switchery mt-2">
        <label>
        <input value="true" type="checkbox" class="switchery-primary"
        <?php if(config('settings.enableDeliveryGuyEarning')=="true" ): ?>
        checked="checked" <?php endif; ?> name="enableDeliveryGuyEarning">
        </label>
        </div>
        </div>
        </div>
        <div class="form-group row">
        <label class="col-lg-3 col-form-label"><strong>O entregador está ganhando de
        </strong></label>
        <div class="col-lg-9">
        <select name="deliveryGuyCommissionFrom" class="form-control form-control-lg select">
        <option value="FULLORDER"
        <?php if(config('settings.deliveryGuyCommissionFrom')=="FULLORDER" ): ?>
        selected="selected" <?php endif; ?>>Comissão do valor total do Pedido
        </option>
        <option value="DELIVERYCHARGE"
        <?php if(config('settings.deliveryGuyCommissionFrom')=="DELIVERYCHARGE"
        ): ?> selected="selected" <?php endif; ?>>Comissão do valor da Entrega</option>
        </select>
        </div>
        </div>
        <div class="form-group row">
        <label class="col-lg-3 col-form-label"><strong>Mostrar endereço completo na Lista de pedidos
        </strong></label>
        <div class="col-lg-9">
        <div class="checkbox checkbox-switchery mt-2">
        <label>
        <input value="true" type="checkbox" class="switchery-primary"
        <?php if(config('settings.showDeliveryFullAddressOnList')=="true" ): ?> checked="checked"
        <?php endif; ?> name="showDeliveryFullAddressOnList">
        </label>
        </div>
        </div>
        </div>
        <div class="form-group row">
        <label class="col-lg-3 col-form-label"><strong>Mostrar endereço do cliente
        </strong></label>
        <div class="col-lg-9">
        <div class="checkbox checkbox-switchery mt-2">
        <label>
        <input value="true" type="checkbox" class="switchery-primary"
        <?php if(config('settings.showUserInfoBeforePickup')=="true" ): ?> checked="checked"
        <?php endif; ?> name="showUserInfoBeforePickup">
        </label>
        </div>
        </div>
        </div>
        <div class="form-group row">
        <label class="col-lg-3 col-form-label"><strong>Mostrar Adicionais do Pedidos
        </strong></label>
        <div class="col-lg-9">
        <div class="checkbox checkbox-switchery mt-2">
        <label>
        <input value="true" type="checkbox" class="switchery-primary"
        <?php if(config('settings.showOrderAddonsDelivery')=="true" ): ?> checked="checked"
        <?php endif; ?> name="showOrderAddonsDelivery">
        </label>
        </div>
        </div>
        </div>
        <div class="form-group row">
        <label class="col-lg-3 col-form-label"><strong>Mostrar preço do item, total e comentários <span class="badge badge-flat border-grey-800 text-danger text-capitalize mx-1">NOVO</span>
        </strong></label>
        <div class="col-lg-9">
        <div class="checkbox checkbox-switchery mt-2">
        <label>
        <input value="true" type="checkbox" class="switchery-primary"
        <?php if(config('settings.showPriceAndOrderCommentsDelivery')=="true" ): ?> checked="checked"
        <?php endif; ?> name="showPriceAndOrderCommentsDelivery">
        </label>
        </div>
        </div>
        </div>
        <p><strong class="text-danger">Nota Importante: </strong> Para novas configuraçoes e ncessarios sair e entrar do app entregador..</p>
        </div>
        <div class="tab-pane fade" id="restaurantDashboardSettings">
        <legend class="font-weight-semibold text-uppercase font-size-sm">
        CONFIGURAÇÕES De pedidos
        </legend>
        <div class="form-group row">
        <label class="col-lg-3 col-form-label"><strong>Tempo que vai atualizar os pedidos no painel:</strong></label>
        <div class="col-lg-9">
                                <select name="restaurantNewOrderRefreshRate" class="form-control form-control-lg select">
                                <option value="5" <?php if(config('settings.restaurantNewOrderRefreshRate') == "5"): ?> selected <?php endif; ?>>A cada 5 Segudos</option>
                                <option value="15" <?php if(config('settings.restaurantNewOrderRefreshRate') == "15"): ?> selected <?php endif; ?>>A cada 15 Segudos</option>
                                <option value="25" <?php if(config('settings.restaurantNewOrderRefreshRate') == "25"): ?> selected <?php endif; ?>>A cada 25 Segudos</option>
                                <option value="30" <?php if(config('settings.restaurantNewOrderRefreshRate') == "30"): ?> selected <?php endif; ?>>A cada 30 Segudos</option>
                                </select>
                                <span class="help-text text-muted mt-2"> O recomendando e <strong>15 Segundos </strong></span>
                            </div>
        </div>
        <div class="form-group row">
        <label class="col-lg-3 col-form-label"><strong>Som da notificação:</strong></label>
        <div class="col-lg-9">
        <select name="restaurantNotificationAudioTrack" class="form-control form-control-lg select" id="restaurantNotificationTone">
        <?php $__currentLoopData = $notificationAudioFileNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $audioFileName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($audioFileName); ?>" <?php if(config('settings.restaurantNotificationAudioTrack') == $audioFileName): ?> selected
        <?php endif; ?>><?php echo e($audioFileName); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        </div>
        </div>
        </div>
        <div class="tab-pane fade" id="customCSS">
        <legend class="font-weight-semibold text-uppercase font-size-sm">
        CONFIGURAÇÕES do CSS
        </legend>
        <p>O código abaixo afetará o estilo do aplicativo do cliente e da entrega
        Inscrição
        </p>
        <div id="css_editor1"><?php echo e(config('settings.customCSS')); ?></div>
        <textarea style="display: none" class="form-control" name="customCSS" rows="5"
            placeholder="Your CSS code goes here..."><?php echo e(config('settings.customCSS')); ?></textarea>
        </div>
        <div class="tab-pane fade" id="cacheSettings">
        <legend class="font-weight-semibold text-uppercase font-size-sm">
        CONFIGURAÇÕES de Cache
        </legend>
        <div class="row">
        <p class="col-md-3 col-xs-12"><strong>Versão do app </strong></p>
        <span class="col-md-6 col-xs-12"><?php echo e($versionMsg); ?></span>
        </div>
        <div class="row">
        <p class="col-md-3 col-xs-12"><strong>Versão do Cache: </strong></p>
        <span
            class="col-md-6 col-xs-12" id="cacheVersion"><?php echo e(implode('-', str_split($versionJson->forceCacheClearVersion, 5))); ?></span>
        </div>
        <div class="row">
        <p class="col-md-3 col-xs-12"><strong>Versão configurada: </strong></p>
        <span
            class="col-md-6 col-xs-12" id="settingsVersion"><?php echo e(implode('-', str_split($versionJson->forceNewSettingsVersion, 5))); ?></span>
        </div>
        <div class="row">
        <p class="col-md-3 col-xs-12"><strong>Versão de Saida: </strong></p>
        <span
            class="col-md-6 col-xs-12" id="logoutVersion"><?php echo e(implode('-', str_split($versionJson->forceLogoutAllCustomers, 5))); ?></span>
        </div>
        <hr>
                        <h4 class="font-weight-bold">Forçar Limpeza do Cache</h4>
                        <p>Clicar neste botão forçará a limpeza do
                            armazenar em cache em seus dispositivos e atualizar o aplicativo no dispositivo do usuário.
                        </p>
                        <a href="javascript:void(0)" data-type="CACHE" data-popup="tooltip"
                            title="Clique duas vezes para executar" data-placement="right"
                            class="btn btn-secondary btn-labeled btn-labeled-left" id="forceClearCache"> <b><i
                            class="icon-arrow-right7"></i></b> Forçar Limpeza do Cache</a>
                        <hr>
                        <h4 class="font-weight-bold">Força novas Configuraçoess</h4>
                        <p>Clicar nesse botão forçará a atualização de novas configurações para todos os usuários e entregadores.</p>
                        <a href="javascript:void(0)" data-type="SETTINGS" data-popup="tooltip"
                            title="Clique duas vezes para executar" data-placement="right"
                            class="btn btn-secondary btn-labeled btn-labeled-left" id="forceClearSettings">
                        <b><i class="icon-arrow-right7"></i></b> Força novas Configuraçoes</a>
                        <hr>
        <h4 class="font-weight-bold">Forçar Saida de Clientes </h4>
        <p>Isso fará o logout de todos os usuários do aplicativo (não para administradores e proprietários de lojas) <br>
        <b class="text-danger">Prossiga com cuidado</b></p>
        <a href="javascript:void(0)" data-type="LOGOUT" data-popup="tooltip"
            title="Double Click to Execute" data-placement="right"
            class="btn btn-secondary btn-labeled btn-labeled-left" id="forceLogoutAllCustomers">
        <b><i class="icon-arrow-right7"></i></b> Forçar Logout de Clientes</a>
        <hr>
        <p class="text-danger">
        O aplicativo do cliente precisa recarregar a página para que essas configurações tenham efeito.
        </p>
        </div>
        <div class="tab-pane fade" id="fixUpdateIssues">
                        <legend class="font-weight-semibold text-uppercase font-size-sm">
                            CONFIGURAÇÕES para Fixar Update
                        </legend>
                        <p>Após uma atualização, o aplicativo frontal (para cliente ou entrega) terá
                            alguns problemas.
                            <br> O problema pode ser devido a:
                        </p>
                        <ol>
                            <li> Erros de database</li>
                            <li> Cross-Origin Error casado por HTTPS URL</li>
                            <li> Caches</li>
                        </ol>
                        <p><strong>Clique no botão abaixo para corrigir esses problemas.</strong></p>
                        <?php if(Request::secure()): ?>
                        <a href="<?php echo e(route('admin.fixUpdateIssues')); ?>" class="btn btn-lg btn-primary">Fixar Atualização</a>
                        <?php else: ?>
                        <a href="#" onclick="return false;" style="opacity: 0.6; cursor: not-allowed;"
                            data-popup="tooltip"
                            title="Você precisa usar a versão https do URL para o painel do administrador continuar. Exemplo: https://seudominio.com/public/admin/settings"
                            data-placement="bottom" class="btn btn-lg btn-primary">Fixar Atualização</a>
                        <?php endif; ?>
                    </div>
        <div class="tab-pane fade" id="advanceSettings">
                        <legend class="font-weight-semibold text-uppercase font-size-sm">
                            CONFIGURAÇÕES AVANÇADAS
                        </legend>
                        <h2>Limpa tudo</h2>
                        <p><strong>O que será removido?</strong></p>
                        <ul>
                            <li>Todos os usuarios exceto admin</li>
                            <li>Todas as lojas</li>
                            <li>Todas as categorias e adicionais</li>
                            <li>Todos os pedidos</li>
                            <li>Todas as categorias e slides</li>
                            <li>Promoçoes slides e slides</li>
                            <li>Todas as transaçoes e seus logs</li>
                            <li>Todos os pagamentos</li>
                            <li>Todos os pagamentos de entregadores</li>
                            <li>Todos os endereços e dados do GPS</li>
                            <li>Dados internos vinculados aos pedidos</li>
                        </ul>
                        <p><strong>O que não será removido?</strong></p>
                        <ul>
                            <li>Configuraçoes gerais</li>
                            <li>Tradução</li>
                            <li>Cupons</li>
                            <li>Paginass</li>
                            <li>Geo Localização populares</li>
                        </ul>
                        <button type="button" class="btn btn-danger btn-labeled btn-labeled-left"
                            data-toggle="modal" data-target="#cleanEverything">
                        <b><i class="icon-trash"></i></b>
                        Limpa tudo
        </button>
        <div class="mt-4">
        <p class="text-danger mb-2"><strong>RECURSOS EXPERIMENTAIS </strong> - nenhuma garantia de trabalho</p>
        <a href="<?php echo e(route('admin.filesBackup')); ?>" class="btn btn-primary btn-labeled btn-labeled-left backupBtn mr-2">
        <b><i class="icon-folder-download2"></i></b>
        Backup de Arquivos
        </a>
        <a href="<?php echo e(route('admin.dbBackup')); ?>" class="btn btn-primary btn-labeled btn-labeled-left backupBtn">
        <b><i class="icon-database-time2"></i></b>
        Backup de Banco de Dados
        </a>
        <p class="mt-2"> Observe que o recurso de backup é experimental e o backup não funciona em todos os servidores (mesmo que uma mensagem de sucesso seja retornada). Nós estaremos melhorando isso nas versões futuras, se possível, ou este módulo poderá ser removido nas versões futuras.</p>
        </div>
        </div>
        <div id="cleanEverything" class="modal fade" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><span class="font-weight-bold text-danger"> <i class="icon-exclamation"></i> Esta é uma ação irreversível.</span></h5>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label class="col-lg-12 col-form-label">Digite <b>CONFIRM</b> para continuar.</label>
                                        <div class="col-lg-12">
                                            <input type="text" name="clear_confirmation" class="form-control form-control-lg">
                                        </div>
                                    </div>
                                    <i class="icon-spinner10 spinner text-warning ml-2 float-right hidden" id="cleanSpinner" style="font-size: 2.5rem;"></i>
                                    <button type="button" class="btn btn-lg btn-danger float-right btn-labeled btn-labeled-left" disabled="disabled" id="cleanEverythingButton">
                                    <b><i class="icon-arrow-right8"></i></b>
                                    Executar
        </button>
        </div>
        </div>
        </div>
        </div>
    </div>
</div>
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" id="csrf">
<div class="text-right mt-5">
<button type="submit" class="btn btn-primary btn-labeled btn-labeled-left btn-lg">
<b><i class="icon-database-insert ml-1"></i></b>
Salvar Configuraçoes
</button>
</div>
<input type="hidden" name="window_redirect_hash" value="">
</form>
</div>
</div>
</div>
</div>
<?php if($versionMsg != null): ?>
<div class="text-center mx-3" style="color: #9575cd;font-size: 0.8rem"><?php echo e($versionMsg); ?></div>
<?php endif; ?>
<script>
    $(function() {
        
        $('.select').select2();
    
        function setSwitchery(switchElement, checkedBool) {
            if((checkedBool && !switchElement.isChecked()) || (!checkedBool && switchElement.isChecked())) {
                switchElement.setPosition(true);
                switchElement.handleOnchange(true);
            }
        }
    
        $('.form-control-uniform').uniform();
    
        // Display color formats
        $(".colorpicker-show-input").spectrum({
          showInput: true
        });
    
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
    
        $('.summernote-editor').summernote({
               height: 200,
               popover: {
                   image: [],
                   link: [],
                   air: []
                 }
        });
    
        var css_editor = ace.edit("css_editor1");
        css_editor.setTheme("ace/theme/textmate");
        css_editor.getSession().setMode("ace/mode/css");
        css_editor.setShowPrintMargin(false);
    
        var customCSS1 = $('textarea[name="customCSS"]');
        css_editor.getSession().on("change", function () {
            customCSS1.val(css_editor.getSession().getValue());
        });
    
        
        $('.payment-gateway-switch').click(function(event) {
            var paymentgateway_id = $(this).val();
            var token = $("#csrf").val();
            console.log(paymentgateway_id);
    
            $.ajax({
                url: '<?php echo e(route('admin.togglePaymentGateways')); ?>',
                type: 'POST',
                dataType: 'json',
                data: {id: paymentgateway_id, _token: token},
            })
            .done(function() {
                $.jGrowl("Payment Gateway Updated", {
                    position: 'bottom-center',
                    header: 'SUCCESS 👌',
                    theme: 'bg-success',
                });
            })
            .fail(function() {
                $.jGrowl("Something went wrong! (Atleast one gateway needs to be active)", {
                    position: 'bottom-center',
                    header: 'Wooopsss ⚠️',
                    theme: 'bg-warning',
                });
                $('#paymentGatewaysData :input[value="'+ paymentgateway_id +'"]');
            })
        });
    
        $('.threshold-time').numeric({allowThouSep:false, allowDecSep:false, allowMinus: false, maxDigits: 3});
        $('.min-payout').numeric({allowThouSep:false, allowDecSep:true, allowMinus: false, maxDigits: 20});
        /* Navigate with hash */
        var hash = window.location.hash;
        $("[name='window_redirect_hash']").val(hash);
        hash && $('ul.nav a[href="' + hash + '"]').tab('show');
        $('.nav-pills a').click(function (e) {
            $(this).tab('show');
            var scrollmem = $('body').scrollTop();
            window.location.hash = this.hash;
            $("[name='window_redirect_hash']").val(this.hash);
            $('html, body').scrollTop(scrollmem);
        });
        
        $(".timezone-select").val("<?php echo e(config('app.timezone')); ?>").change();
    
        $('#forceClearCache, #forceClearSettings, #forceLogoutAllCustomers').dblclick(function(event) {
            event.preventDefault();
            let type = $(this).attr("data-type")
            let csrf = $('#csrf').val();
    
            $('#forceClearCache').addClass('disable-switch');
            $('#forceClearSettings').addClass('disable-switch');
            $('#forceLogoutAllCustomers').addClass('disable-switch');
    
            $.ajax({
                url: '<?php echo e(route('admin.forceClear')); ?>',
                type: 'POST',
                dataType: 'JSON',
                data: {type: type, _token: csrf},
            })
            .done(function(data) {
                $('#cacheVersion').html(data.newVersion.forceCacheClearVersion.match(/.{1,5}/g).join("-"))
                $('#settingsVersion').html(data.newVersion.forceNewSettingsVersion.match(/.{1,5}/g).join("-"))
                $('#logoutVersion').html(data.newVersion.forceLogoutAllCustomers.match(/.{1,5}/g).join("-"))
                
                $('#forceClearCache').removeClass('disable-switch');
                $('#forceClearSettings').removeClass('disable-switch');
                $('#forceLogoutAllCustomers').removeClass('disable-switch');
    
                $.jGrowl("Operation Successful ✅", {
                    position: 'bottom-center',
                    header: '',
                    theme: 'bg-success',
                    life: '2000'
                }); 
            })
            .fail(function(data) {
                console.log("error");
                $('#forceClearCache').removeClass('disable-switch');
                $('#forceClearSettings').removeClass('disable-switch');
    
                $.jGrowl("Something went wrong! Please try again later.", {
                    position: 'bottom-center',
                    header: 'Wooopsss ⚠️',
                    theme: 'bg-warning',
                });
            })
        });
        
        /* Playing audio notification  when selected */
        $("#restaurantNotificationTone").change(function(event) {
            //create new audio
            let selectedFile = $(this).val();
            let notification = document.createElement('audio');
               notification.setAttribute('src', '<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/tones/'+selectedFile+'.mp3');
               notification.setAttribute('type', 'audio/mp3');
               notification.play();
        });
    
        // hide show selected sms gateway settings:
        $("[name='defaultSmsGateway']").change(function() {
            let selectedSmsGateway = $(this).val();
            if (selectedSmsGateway == 1) {
                $('#msg91Settings').removeClass('hidden');
                $('#twilioSettings').addClass('hidden');
            } 
            if (selectedSmsGateway == 2) {
                $('#twilioSettings').removeClass('hidden');
                $('#msg91Settings').addClass('hidden');
            } 
        });
    
        $("[name='clear_confirmation']").on("keyup", function() {
         $("#cleanEverythingButton").attr("disabled", true);
          if( $("[name='clear_confirmation']").val() == 'CONFIRM') {
             $("#cleanEverythingButton").attr("disabled", false);
         }
        });
        $('#cleanEverythingButton').click(function(event) {
            event.preventDefault();
            let cleanEverythingButton = $(this);
            cleanEverythingButton.addClass('hidden');
            $('#cleanSpinner').removeClass('hidden');
            $.ajax({
                url: "<?php echo e(route('admin.cleanEverything')); ?>",
                type: 'POST',
                dataType: 'JSON',
                data: {_token: $('#csrf').val()},
            })
            .done(function(data) {
                console.log("success", data);
                $.jGrowl("All the databases has been cleaned", {
                    position: 'bottom-center',
                    header: 'Operation Successful ✅',
                    theme: 'bg-success',
                    life: '2000'
                }); 
                $('#cleanEverything').modal('hide');
                setTimeout(function() {
                    window.location.reload();
                }, 1000);
            })
            .fail(function(data) {
                console.log(data)
                $.jGrowl("Something went wrong! Please try again later.", {
                    position: 'bottom-center',
                    header: 'Wooopsss ⚠️',
                    theme: 'bg-warning',
                });
                cleanEverythingButton.removeClass('hidden');
                $('#cleanSpinner').addClass('hidden');
            })
        });
    
        $('.backupBtn').click(function(event) {
            $(this).attr('disabled', true);
            $(this).html('<b><i class="icon-spinner10 spinner position-left"></i></b>Please Wait...')
        });
    
        $("[name='defaultEmailGateway']").change(function() {
            let selectedEmailGateway = $(this).val();
            if (selectedEmailGateway == "sendgrid") {
                $('#sendgridSettings').removeClass('hidden');
                $('#smtpSettings').addClass('hidden');
            } 
            if (selectedEmailGateway == "smtp") {
                $('#smtpSettings').removeClass('hidden');
                $('#sendgridSettings').addClass('hidden');
                //open customSMTPDisclaimer modal
                $('#customSMTPDisclaimer').modal({
                           backdrop: 'static',
                           keyboard: false
                       });
            } 
        });
    
        $('#fixUpdateIssuesButton').click(function(event) {
            $(this).addClass("popup-order-processing").html("Please Wait... Do not hit back or refresh the page.")
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/migfoo99/teste1.foodmart.site/resources/views/admin/settings.blade.php ENDPATH**/ ?>