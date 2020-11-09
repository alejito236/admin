

<?php $__env->startSection('content'); ?>

<div class="container"  style="color:black">
    <div class='row'>
        <div class='col-sm-4'>
        <h3>Editar Usuario:<?php echo e($user->name); ?></h3>
        <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
            <form action="<?php echo e(route('usuarios.update', $user->id)); ?>" method="POST">
                <?php echo method_field('PATCH'); ?>
                

                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" value='<?php echo e($user->name); ?>' placeholder="Escribe tu nombre">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value='<?php echo e($user->email); ?>' placeholder="Escribe tu correo">
                </div>


                <button type="submit" class="btn btn-primary">Actualizar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.demo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\admin\resources\views/usuarios/edit.blade.php ENDPATH**/ ?>