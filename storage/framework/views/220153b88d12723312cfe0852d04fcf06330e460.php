

<?php $__env->startSection('content'); ?>

<div class="container" style="color:black">
    <div class='row'>
        <div class='col-sm-4'>
        <h3>Editar novedad:<?php echo e($novedad->cuerpo_novedad); ?></h3>
        <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
            <form action="<?php echo e(route('novedades.update', $novedad->id)); ?>" method="POST">
                <?php echo method_field('PATCH'); ?>
                

                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="cuerpo_novedad">Titulo Novedad</label>
                    <input type="text" class="form-control" name="cuerpo_novedad" value='<?php echo e($novedad->cuerpo_novedad); ?>' placeholder="Escribe tu nombre">
                </div>
                <div class="form-group">
                    <label for="tipo_novedad">Descripcion Novedad</label>
                    <textarea  rows="14"  type="text-area" class="form-control" name="tipo_novedad" 
                     placeholder="Escribe tu correo">
                    <?php echo e($novedad->tipo_novedad); ?></textarea> </div>

                <div class="form-group">
                    <label for="fecha_novedad">fecha_novedad</label>
                    <input type="date" class="form-control" name="fecha_novedad" value='<?php echo e($novedad->fecha_novedad); ?>' placeholder="Escribe tu correo">
                </div>

  
               
                <body>
  <div class="container" >
<div class="modal fade" tabindex="-1" id="modal1">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
      Novedades
      <button class="close" data-dismiss="modal">&times;</button>
       </div>
       <div class="modal-body">
       ¿Estas seguro de actualizar la novedad?
       </div>
       <div class= "modal-footer">
       <button type=submit class="btn btn-primary">Aceptar</button>
       <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
       </div>
      </div>
    </div>
  </div>
</div>

       
</body>

<button type="button" class="btn btn-primary btn-sm " data-toggle="modal" data-target="#modal1">Actualizar</button>
                <button type="reset" class="btn btn-danger btn-sm ">Cancelar</button>
            </form>
        </div>
    </div>
</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.demo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\admin\resources\views/novedades/edit.blade.php ENDPATH**/ ?>