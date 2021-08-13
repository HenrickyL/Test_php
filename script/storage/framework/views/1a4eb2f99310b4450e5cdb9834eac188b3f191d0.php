<?php if(Session::has('success')): ?>
<script>
    $(function () {
        $.jGrowl("<?php echo e(Session::get('success')); ?>", {
            position: 'bottom-center',
            header: 'SUCCESS 👌',
            theme: 'bg-success',
        });    
    });
</script>
<?php endif; ?>
<?php if(Session::has('message')): ?>
<script>
    $(function () {
        $.jGrowl("<?php echo e(Session::get('message')); ?>", {
            position: 'bottom-center',
            header: 'Wooopsss ⚠️',
            theme: 'bg-warning',
        });    
    });
</script>
<?php endif; ?>
<?php if($errors->any()): ?>
<script>
    $(function () {
        $.jGrowl("<?php echo e(implode('', $errors->all(':message'))); ?>", {
            position: 'bottom-center',
            header: 'ERROR ⁉️',
            theme: 'bg-danger',
        });    
    });
</script>
<?php endif; ?><?php /**PATH /home2/migfoo99/teste1.foodmart.site/resources/views/admin/includes/notification.blade.php ENDPATH**/ ?>