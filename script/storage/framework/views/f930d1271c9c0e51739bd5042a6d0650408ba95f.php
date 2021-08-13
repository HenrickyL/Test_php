<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="apple-touch-icon" sizes="180x180"
            href="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/global_assets/images/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32"
            href="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/global_assets/images/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16"
            href="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/global_assets/images/favicons/favicon-16x16.png">
        <title><?php echo $__env->yieldContent("title"); ?></title>
        <!-- Global stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
            type="text/css">
        <link href="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet"
            type="text/css">
        <link href="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/css/combined.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/css/layout.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/css/components.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/css/colors.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/global_assets/css/extras/animate.min.css" rel="stylesheet"
            type="text/css">
        <link href="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/css/backend-custom.css" rel="stylesheet"
            type="text/css">
        <link href="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/css/bootstrap-material-datetimepicker.css" rel="stylesheet"
            type="text/css">
        <!-- /global stylesheets -->
        
        <?php if(Request::is('store-owner/*')): ?>
        <!-- The core Firebase JS SDK is always required and must be listed first -->
            <script src="https://www.gstatic.com/firebasejs/7.5.0/firebase-app.js"></script>
            <script src="https://www.gstatic.com/firebasejs/7.5.0/firebase-messaging.js"></script>
        <?php endif; ?>

        <!-- Core JS files -->
        <script type="text/javascript" src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/global_assets/js/main/jquery.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.10.2/Sortable.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-sortablejs@latest/jquery-sortable.js"></script>


        <script type="text/javascript" src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/global_assets/js/main/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/global_assets/js/plugins/loaders/blockui.min.js"></script>
        <script type="text/javascript" src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/global_assets/js/plugins/ui/slinky.min.js"></script>
        <!-- /core JS files -->
        <!-- Theme JS files -->
        <script type="text/javascript" src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/global_assets/js/plugins/ui/sticky.min.js"></script>
        <script type="text/javascript" src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/global_assets/js/plugins/buttons/spin.min.js"></script>
        <script type="text/javascript" src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/global_assets/js/plugins/buttons/ladda.min.js"></script>
        <?php if(!Request::is('admin/dashboard')): ?>
        <script type="text/javascript" src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/global_assets/js/plugins/notifications/jgrowl.min.js"></script>
        <script type="text/javascript" src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/global_assets/js/plugins/forms/selects/select2.min.js"></script>
        <script type="text/javascript" src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
        <script type="text/javascript" src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/global_assets/js/plugins/forms/styling/switchery.min.js"></script>
        <script type="text/javascript" src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/global_assets/js/plugins/pickers/color/spectrum.js"></script>
        <script type="text/javascript" src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/global_assets/js/plugins/editors/summernote/summernote.js"></script>
        <script type="text/javascript" src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/global_assets//js/plugins/ui/moment/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/global_assets/js/plugins/pickers/daterangepicker.js"></script>
        <script type="text/javascript" src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/global_assets/js/plugins/uploaders/dropzone.min.js"></script>
        <?php endif; ?>
        <script type="text/javascript" src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/global_assets/js/plugins/visualization/echarts/echarts.js"></script>
        <script type="text/javascript" src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/js/app.js"></script>
        <script type="text/javascript" src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/js/navbar-sticky.js"></script>
        <script type="text/javascript" src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/js/printThis.js"></script>
        <script type="text/javascript" src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/js/jquery-alphanum.js"></script>
        <?php if(Request::is('admin/settings')): ?>
        <script type="text/javascript" src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/global_assets/js/plugins/editors/ace/ace.js"></script>
        <?php endif; ?> 

        <?php if(Request::is('admin/stores') || Request::is('admin/store/*') || Request::is('store-owner/stores') || Request::is('store-owner/store/*') || Request::is('admin/popular-geo-locations')): ?>
        <!-- Load GMAPS Only when needed -->
            
            
        <?php endif; ?>
        
        <script type="text/javascript" src="<?php echo e(substr(url("/"), 0, strrpos(url("/"), '/'))); ?>/assets/backend/js/bootstrap-material-datetimepicker.js"></script>

        <!-- /theme JS files -->
        <link rel="manifest" href="<?php echo e(URL::asset('backend-manifest.json')); ?>">
    </head>
    <body>
        <?php if(!Request::is('auth/login')): ?>
            <?php echo $__env->make("admin.includes.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <div class="page-content container pt-0">
            <div class="content-wrapper">
                <?php echo $__env->yieldContent("content"); ?>
            </div>
        </div>
        <?php echo $__env->make('admin.includes.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <script>
            $(function() {
                $('form').submit(function(){
                    $(this).find(':input[type=submit]').prop('disabled', true);
                });
                $('.note-codable').on('blur', function() {
                  var codeviewHtml        = $(this).val();
                  var $summernoteTextarea = $(this).closest('.note-editor').siblings('textarea');
                  $summernoteTextarea.val(codeviewHtml);
                 });
            });
        </script>
    </body>
</html><?php /**PATH /home2/migfoo99/teste1.foodmart.site/resources/views/admin/layouts/master.blade.php ENDPATH**/ ?>