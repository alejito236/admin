

<?php $__env->startSection('content'); ?>

<div class="titulos" style="  background-color: #113049;
  padding: 1em; color:#fff; margin: 1em 1em 1em 0em; border-radius:5px;">

        <?php if($search): ?>
        <div class="alert alert-primary" role="alert">
            Los resultados de tu busqueda '<?php echo e($search); ?>' son:
        </div>
        <?php endif; ?>
        <h1>lista de usuarios<a href="usuarios/create"><br><button type="button" class="btn btn-success btn-lg ">Agregar
                    usuarios</button></a></h1>


    </div>

<table class="table" style="color:black">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">CORREO</th>
      <th scope="col">OPCIONES</th>

     
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <th scope="row"><?php echo e($user->id); ?></th>
      <td><?php echo e($user->name); ?></td>
      <td><?php echo e($user->email); ?></td>
      <td>
      
      <form action="<?php echo e(route('usuarios.destroy',$user->id)); ?>" method=POST>
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <a href="<?php echo e(route('usuarios.show',$user->id)); ?>"><button type="button" class="btn btn-secondary">Ver</button></a>
        <a href="<?php echo e(route('usuarios.edit',$user->id)); ?>"><button type="button" class="btn btn-primary">Actualizar</button></a>
        <button type="submit" class="btn btn-danger">Eliminar</button>

      </form>
      
      </td>

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
  </tbody>
</table>
  <div class="row">
    <div class="mx-auto">
       <?php echo e($users->links()); ?>

      </div>
    </div>
  </div>
  </div>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.demo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\admin\resources\views/usuarios/index.blade.php ENDPATH**/ ?>