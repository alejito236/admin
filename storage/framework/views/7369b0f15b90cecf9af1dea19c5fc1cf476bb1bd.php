

<?php $__env->startSection('content'); ?>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><?php echo e($novedad->cuerpo_novedad); ?></h1>
    <p class="lead"><?php echo e($novedad->tipo_novedad); ?></p>
    <p class="lead"><?php echo e($novedad->fecha_novedad); ?></p>
    <p class="lead"><?php echo e($novedad->imagen_novedad); ?></p>
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.demo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\admin\resources\views/novedades/show.blade.php ENDPATH**/ ?>