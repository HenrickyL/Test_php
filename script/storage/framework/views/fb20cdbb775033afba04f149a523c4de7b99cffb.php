<style>
.extra-menu{min-width:500px}@media (min-width:320px) and (max-width:767px){.extra-menu{min-width:auto}}
</style>
<div class="navbar navbar-expand-md navbar-dark">
    <div class="navbar-brand wmin-0 mr-5">
        <?php if(auth()->check() && auth()->user()->hasRole("Admin")): ?>
        <a href="<?php echo e(route('admin.dashboard')); ?>" class="d-inline-block">
        <img src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/img/logos/logo.png" alt="Dashboard">
        </a>
        <?php endif; ?>
        <?php if(auth()->check() && auth()->user()->hasRole("Store Owner")): ?>
        <a href="<?php echo e(route('restaurant.dashboard')); ?>" class="d-inline-block">
        <img src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/img/logos/logo.png" alt="Dashboard">
        </a>
        <?php endif; ?>
    </div>
    <div class="d-md-none">
        <button class="navbar-toggler dropdown-toggle" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <span><?php echo e(Auth::user()->name); ?></span>
        </button>
        <div class="dropdown-menu dropdown-menu-right" id="navbar-mobile">
            <a href="<?php echo e(route('logout')); ?>" class="dropdown-item"><i class="icon-switch2"></i> <?php echo e(__('storeDashboard.navLogout')); ?></a>
            <?php if(auth()->check() && auth()->user()->hasRole("Store Owner")): ?>
                <a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropdown">
                <span><i class="icon-earth"></i></span>
                </a>
                <div class="dropdown-menu">
                    <?php $__currentLoopData = $translationLangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(url('locale', $lang)); ?>" class="dropdown-item <?php if(app()->getLocale() === $lang): ?> active <?php endif; ?>" style="text-transform: uppercase;"> <?php echo e($lang); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                <span><?php echo e(Auth::user()->name); ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="<?php echo e(route('logout')); ?>" class="dropdown-item"><i class="icon-switch2"></i> <?php echo e(__('storeDashboard.navLogout')); ?></a>
                </div>
            </li>
            <?php if(auth()->check() && auth()->user()->hasRole("Store Owner")): ?>
                <li class="nav-item dropdown dropdown-user">
                    <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                    <span><i class="icon-earth mx-2"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <?php $__currentLoopData = $translationLangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(url('locale', $lang)); ?>" class="dropdown-item <?php if(app()->getLocale() === $lang): ?> active <?php endif; ?>" style="text-transform: uppercase;"> <?php echo e($lang); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </li>
                <?php if (is_impersonating()) : ?>
                <li class="nav-item">
                    <a class="navbar-nav-link active" href="<?php echo e(route('impersonate.leave')); ?>"><i class="icon-arrow-left15 mr-1"></i>Go back to Admin</a>
                </li>
                <?php endif; ?>
            <?php endif; ?>
        </ul>
    </div>
</div>
<div class="navbar navbar-expand-md navbar-light navbar-sticky">
    <div class="container">
        <div class="text-center d-md-none w-100">
            <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-navigation">
            <i class="icon-unfold mr-2"></i>
            Menu
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-navigation">
            <ul class="navbar-nav">
                <?php if(auth()->check() && auth()->user()->hasRole("Admin")): ?>
                <li class="nav-item">
                    <a href="<?php echo e(route("admin.restaurants")); ?>" class="navbar-nav-link <?php echo e(Request::is('admin/stores') ? 'active' : ''); ?>">
                    <i class="icon-store2 mr-2"></i>
                    Lojas
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="navbar-nav-link dropdown-toggle <?php echo e(Request::is('admin/items')  || Request::is('admin/addons') ? 'active' : ''); ?>" data-toggle="dropdown">
                    <i class="icon-stack-star mr-2"></i>
                    Produtos & Menu
                    </a>
                    <div class="dropdown-menu">
                    <a href="<?php echo e(route("admin.addonCategories")); ?>" class="dropdown-item <?php echo e(Request::is('admin/addoncategories') ? 'active' : ''); ?>">
                    <i class="icon-tree6 mr-2"></i>
                    Categorias Adicionais
                    </a>
                    <a href="<?php echo e(route("admin.addons")); ?>" class="dropdown-item <?php echo e(Request::is('admin/addons') ? 'active' : ''); ?>">
                    <i class="icon-list2 mr-2"></i>
                    Adicionais
                    </a>
                    <a href="<?php echo e(route("admin.itemcategories")); ?>" class="dropdown-item <?php echo e(Request::is('admin/itemcategories') ? 'active' : ''); ?>">
                    <i class="icon-grid52 mr-2"></i>
                    Menus
                    </a>
                    <a href="<?php echo e(route("admin.items")); ?>" class="dropdown-item <?php echo e(Request::is('admin/items') ? 'active' : ''); ?>">
                    <i class="icon-grid mr-2"></i>
                    Produtos
                    </a>
                     </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="navbar-nav-link dropdown-toggle  <?php echo e(Request::is('admin/users') || Request::is('admin/manage-delivery-guys') ? 'active' : ''); ?>" data-toggle="dropdown">
                    <i class="icon-users2 mr-2"></i>
                    Usuarios
                    </a>
                    <div class="dropdown-menu">
                        <a href="<?php echo e(route("admin.users")); ?>" class="dropdown-item <?php echo e(Request::is('admin/users') ? 'active' : ''); ?>"> <i class="icon-users4 mr-2"></i> Todos</a>
                        <a href="<?php echo e(route('admin.manageRestaurantOwners')); ?>" class="dropdown-item <?php echo e(Request::is('admin/manage-store-owners') ? 'active' : ''); ?>"> <i class="icon-user-tie mr-2"></i> Lojistas</a>
                        <a href="<?php echo e(route('admin.manageDeliveryGuys')); ?>" class="dropdown-item <?php echo e(Request::is('admin/manage-delivery-guys') ? 'active' : ''); ?>"> <i class="icon-truck mr-2"></i> Entregadores</a> 
                    </div>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route("admin.orders")); ?>" class="navbar-nav-link <?php echo e(Request::is('admin/orders') ? 'active' : ''); ?>">
                    <i class="icon-basket mr-2"></i>
                    Pedidos
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="navbar-nav-link dropdown-toggle  <?php echo e(Request::is('admin/sliders') || Request::is('admin/coupons') || Request::is('admin/notifications') ? 'active' : ''); ?>" data-toggle="dropdown">
                    <i class="icon-strategy mr-2"></i>
                    Modulos
                    </a>
                    <div class="dropdown-menu">
                        <div class="row extra-menu">
                            <div class="col-md-6">
                                <a href="<?php echo e(route('admin.sliders')); ?>" class="dropdown-item <?php echo e(Request::is('admin/sliders') ? 'active' : ''); ?>">
                                <i class="icon-image2 mr-2"></i>
                                Slide Promocionais
                                </a>
                                 <a href="<?php echo e(route("admin.restaurantCategorySlider")); ?>" class="dropdown-item <?php echo e(Request::is('admin/store-category-slider') ? 'active' : ''); ?>">
                                <i class="icon-grid52 mr-2"></i>
                                Categoria de Lojas
                                </a>
                                <a href="<?php echo e(route('admin.coupons')); ?>" class="dropdown-item <?php echo e(Request::is('admin/coupons') ? 'active' : ''); ?>">
                                <i class="icon-price-tags2 mr-2"></i>
                                Cupons
                                </a>
                                <a href="<?php echo e(route('admin.pages')); ?>" class="dropdown-item <?php echo e(Request::is('admin/pages') ? 'active' : ''); ?>">
                                <i class="icon-files-empty mr-2"></i>
                                Paginas
                                </a>
                                <a href="<?php echo e(route("admin.popularGeoLocations")); ?>" class="dropdown-item <?php echo e(Request::is('admin/popular-geo-locations') ? 'active' : ''); ?>">
                                <i class="icon-location3 mr-2"></i>
                                Regiões Populares
                                </a>
                                <a href="<?php echo e(route('admin.notifications')); ?>" class="dropdown-item <?php echo e(Request::is('admin/notifications') ? 'active' : ''); ?>">
                                <i class="icon-bubble-dots4 mr-2"></i>
                                Notificação Push
                                </a>
                                <a href="<?php echo e(route("admin.modules")); ?>" class="dropdown-item <?php echo e(Request::is('admin/modules') ? 'active' : ''); ?>">
                                <i class="icon-stars mr-2"></i>
                                Premium Modules <span class="badge badge-flat border-grey-800 text-danger text-capitalize ml-1 float-right">Novo</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="<?php echo e(route('admin.restaurantpayouts')); ?>" class="dropdown-item <?php echo e(Request::is('admin/store-payouts') ? 'active' : ''); ?>">
                                <i class="icon-piggy-bank mr-2"></i>
                                Pagamento de Lojas
                                </a>
                                <a href="<?php echo e(route("admin.translations")); ?>" class="dropdown-item <?php echo e(Request::is('admin/translations') ? 'active' : ''); ?>">
                                <i class="icon-font-size2 mr-2"></i>
                                Tradutor
                                </a>
                                <a href="<?php echo e(route("admin.deliveryCollections")); ?>" class="dropdown-item <?php echo e(Request::is('admin/delivery-collections') ? 'active' : ''); ?>">
                                <i class="icon-cash3 mr-2"></i>
                                Relatorio de Entregador
                                </a>
                                <a href="<?php echo e(route("admin.deliveryCollectionLogs")); ?>" class="dropdown-item <?php echo e(Request::is('admin/delivery-collection-logs') ? 'active' : ''); ?>">
                                <i class="icon-database-time2 mr-2"></i>
                                Logs de Entregador
                                </a>
                                <a href="<?php echo e(route("admin.walletTransactions")); ?>" class="dropdown-item <?php echo e(Request::is('admin/wallet/transactions') ? 'active' : ''); ?>">
                                <i class="icon-transmission mr-2"></i>
                                Carteira
                                </a>
                                <a href="<?php echo e(route("admin.viewTopItems")); ?>" class="dropdown-item <?php echo e(Request::is('admin/reports/top-items') ? 'active' : ''); ?>">
                                <i class="icon-graph mr-2"></i>
                                Relatórios
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <ul class="navbar-nav ml-md-auto">
                    <li class="nav-item">
                        <a href="<?php echo e(route('admin.settings')); ?>" class="navbar-nav-link <?php echo e(Request::is('admin/settings') ? 'active' : ''); ?>" data-popup="tooltip" title="Gerais" data-placement="bottom">
                        <i class="icon-cog3 mr-2"></i>
                        Definições
                        </a>
                    </li>
                </ul>
                <?php endif; ?>
                <?php if(auth()->check() && auth()->user()->hasRole("Store Owner")): ?>
                <li class="nav-item">
                    <a href="<?php echo e(route("restaurant.restaurants")); ?>" class="navbar-nav-link <?php echo e(Request::is('restaurant-owner/restaurants') ? 'active' : ''); ?>">
                    <i class="icon-store2 mr-2"></i>
                    <?php echo e(__('storeDashboard.navStores')); ?>

                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="navbar-nav-link dropdown-toggle <?php echo e(Request::is('restaurant-owner/items')  || Request::is('restaurant-owner/addons') ? 'active' : ''); ?>" data-toggle="dropdown">
                    <i class="icon-stack-star mr-2"></i>
                    <?php echo e(__('storeDashboard.navItemsMenu')); ?>

                    </a>
                    <div class="dropdown-menu">
                    <a href="<?php echo e(route("restaurant.addonCategories")); ?>" class="dropdown-item <?php echo e(Request::is('restaurant-owner/addoncategories') ? 'active' : ''); ?>">
                    <i class="icon-tree6 mr-2"></i>
                    <?php echo e(__('storeDashboard.navSubAddonCat')); ?>

                    </a>
                    <a href="<?php echo e(route("restaurant.addons")); ?>" class="dropdown-item <?php echo e(Request::is('restaurant-owner/addons') ? 'active' : ''); ?>">
                    <i class="icon-list2 mr-2"></i>
                    <?php echo e(__('storeDashboard.navSubAddon')); ?>

                    </a>
                    <a href="<?php echo e(route("restaurant.itemcategories")); ?>" class="dropdown-item <?php echo e(Request::is('restaurant-owner/itemcategories') ? 'active' : ''); ?>">
                    <i class="icon-grid52 mr-2"></i>
                    <?php echo e(__('storeDashboard.navSubMenuCat')); ?>

                    </a>
                    <a href="<?php echo e(route("restaurant.items")); ?>" class="dropdown-item <?php echo e(Request::is('restaurant-owner/items') ? 'active' : ''); ?>">
                    <i class="icon-grid mr-2"></i>
                    <?php echo e(__('storeDashboard.navSubItems')); ?>

                    </a>
                     </div>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route("restaurant.orders")); ?>" class="navbar-nav-link <?php echo e(Request::is('restaurant-owner/orders') ? 'active' : ''); ?>">
                    <i class="icon-basket mr-2"></i>
                    <?php echo e(__('storeDashboard.navOrders')); ?>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route("restaurant.earnings")); ?>" class="navbar-nav-link <?php echo e(Request::is('restaurant-owner/earnings/*') ? 'active' : ''); ?>">
                    <i class="icon-coin-dollar mr-2"></i>
                    <?php echo e(__('storeDashboard.navEarnings')); ?>

                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div><?php /**PATH /home2/migfoo99/teste1.foodmart.site/resources/views/admin/includes/header.blade.php ENDPATH**/ ?>