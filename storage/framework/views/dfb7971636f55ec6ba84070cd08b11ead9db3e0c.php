

<?php $__env->startSection('content'); ?>


<?php if($flash = Session::get('exito') ): ?>
 
 <div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Genial!</strong> <?php echo e($flash); ?>

<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>


<?php endif; ?>

<div class="titulos" style="  background-color: #73b6c6;
  padding: 1em; color:#fff; margin: 1em 1em 1em 0em; border-radius:5px; ">
        <?php if($search): ?>
        <div class="alert alert-primary" role="alert">
            Los resultados de tu busqueda '<?php echo e($search); ?>' son:
        </div>
        <?php endif; ?>

        
   
        
   
        <h1 style=" text-align:center" >lista de usuarios<a href="usuarios/create" " ><br><button type="button" class="btn btn-info btn-success btn-sm" style=>Agregar
                    Usuario</button> </a></h1>


    </div>
 
   
   
   
   
   
    <table class="table table-striped"   >
  <thead class="table-info" >
  <style type="text/css">

table, th, td {
  border:1px solid black;
  border-collapse:collapse; 
 
}

th, td {
  padding:15px;

}
</style>
    <tr >
      <th style='border:1px solid #000' scope="col">ID</th>
      <th  style='border:1px solid #000' scope="col">NOMBRE</th>
      <th  style='border:1px solid #000' scope="col">Email</th> 
      <th   style='border:1px solid #000'scope="col">OPCIONES</th>
    

     
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
        <body>
  <div class="container" >
<div class="modal fade" tabindex="-1" id="modal1">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
      Usuarios
      <button class="close" data-dismiss="modal">&times;</button>
       </div>
       <div class="modal-body">
       ¿Estas seguro de eliminar el usuario?
       </div>
       <div class= "modal-footer">
       <button type="submit" class="btn btn-primary">Aceptar</button>
       <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
       </div>
      </div>
    </div>
  </div>
</div>

       
</body>
        <a href="<?php echo e(route('usuarios.show',$user->id)); ?>" target="_blank"><button type="button" class="btn btn-info btn-sm ">Ver</button></a>
       
        <a href="<?php echo e(route('usuarios.edit',$user->id)); ?>"><button type="button" class="btn btn-primary btn-sm ">Actualizar</button></a>
        <button type="button" class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#modal1">Eliminar</button>

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