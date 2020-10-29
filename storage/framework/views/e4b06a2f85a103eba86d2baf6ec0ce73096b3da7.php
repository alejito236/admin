

<?php $__env->startSection('content'); ?>
<div class="container"  style="color:black">
    <div class='row'>
        <div class='col-sm-4'>
<form action='/usuarios' method ='POST'>
    <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" name="name" placeholder="Escribe tu nombre">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Escribe tu correo">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary">Registrar</button>
  <button type="reset" class="btn btn-danger">Cancelar</button>
</form>
        </div>
    </div>
</div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.demo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\admin\resources\views/usuarios/create.blade.php ENDPATH**/ ?>