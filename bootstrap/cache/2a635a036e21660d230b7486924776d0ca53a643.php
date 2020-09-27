<?php $__env->startSection('body'); ?>
<!--Navigation-->
<?php echo $__env->make('includes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--Site wraper-->
<div class="site_wrapper">

    <?php echo $__env->yieldContent('content'); ?>

</div>

<?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/layouts/app.blade.php ENDPATH**/ ?>