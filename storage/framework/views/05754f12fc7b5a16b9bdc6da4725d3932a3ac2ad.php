
<?php $__env->startSection('title', 'Mi Formulario'); ?>

<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar'); ?>
##parent-placeholder-c63e3c1cfa2ff651ad4cfadea3e21265ffcf8ca3##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
        <h1>Login</h1>
        <br>
        <form action="<?php echo e(action('UserController@login')); ?>" method="post" >
        <?php echo csrf_field(); ?>
        <label for="user">Usuario</label>
        <input type="text" name="user" ><br>

        <label for="password">Password</label>
        <input type="password" name="password"><br>
        
        <input type="submit" value="Submit">
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>

##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Formulario\resources\views/login.blade.php ENDPATH**/ ?>