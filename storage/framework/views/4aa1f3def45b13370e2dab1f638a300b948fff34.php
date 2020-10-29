

<?php $__env->startSection('content'); ?>
<div class="jumbotron jumbotron-fluid"  style="color:black">
  <div class="container">
    <h1 class="display-4"><?php echo e($user->name); ?></h1>
    <p class="lead"><?php echo e($user->email); ?></p>
  </div>
</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.demo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\admin\resources\views/usuarios/show.blade.php ENDPATH**/ ?>