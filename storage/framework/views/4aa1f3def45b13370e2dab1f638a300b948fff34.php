

<?php $__env->startSection('content'); ?>
<div class="col-md-6 offset-md-3   " >
<div class="jumbotron jumbotron-fluid bg-info "  style="color:black; border-radius:15px">

  <div class="container">
  
    <h1 class="display-4"><?php echo e($user->name); ?></h1>
    <div class="float-right">
                            <img src="<?php echo e(asset('dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
                        </div>
    <p class="lead"><?php echo e($user->tipodocumentol); ?></p>
    <p class="lead"><?php echo e($user->telefono); ?></p>
    <p class="lead"><?php echo e($user->fecha_cumpleanios); ?></p>
    <p class="lead"><?php echo e($user->email); ?></p>
  
    
  </div>
</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.demo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\admin\resources\views/usuarios/show.blade.php ENDPATH**/ ?>