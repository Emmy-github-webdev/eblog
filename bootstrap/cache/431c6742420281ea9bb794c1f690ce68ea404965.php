<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('data-page-id', 'auth'); ?>

<?php $__env->startSection('content'); ?>
    <div class="auth" id="auth">
        <section class="login_form">
            <div class="row">
                <div class="small-8 medium-4 medium-centered">
                    <h2 class="text-center">Login</h2>
                    <?php echo $__env->make('includes.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <form action="/login" method="post">
                        <input type="text" name="username" placeholder="Your Username or Email"
                               value="<?php echo e(\App\Classes\Request::old('post', 'username')); ?>">
    
                        <input type="password" name="password" placeholder="Your Password">
                        <input type="hidden" name="token" value="<?php echo e(\App\Classes\CSRFToken::_token()); ?>">
                        <button class="button float-right">Login</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/login.blade.php ENDPATH**/ ?>