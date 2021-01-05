

<?php $__env->startSection('content'); ?>


    <div class="titulos" style="  background-color: #113049;
  padding: 1em; color:white; margin: 1em 1em 1em 0em; border-radius:5px;">



        <?php if($search): ?>
        <div class="alert alert-primary" role="alert">
            Los resultados de tu busqueda '<?php echo e($search); ?>' son:
        </div>
        <?php endif; ?>

        <?php if($flash = Session::get('exito') ): ?>
 
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Genial!</strong> <?php echo e($flash); ?>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div >

<?php endif; ?>
    
        <h1>Capacitaciones<a href="capacitaciones/create"><br>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('administrador')): ?>
        <button type="button" class="btn btn-success btn-sm ">Agregar capacitación
                   </button>
                  <?php endif; ?></a></h1>


    </div>
    <div>
        <div class="col-sm-3 bg-light float-right">
            <div class="card">
                <div class="card-body">

                    <p class="card-text"><iframe width="100%" height="315"
                            src="https://www.youtube.com/embed/UX9Cf36fSOU" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe></p>

                </div>
            </div>
        </div>
    </div>



    <?php $__currentLoopData = $capacitaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $capacitacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card w-75"  style="background-color:transparent" style="width: 18rem; color:black">
        <div class="row no-gutters justify-content-center">
           
        
            <div class="col-md-8" >
                <div class="card-body" style="margin-left:-165px; color:black" >
                    <h5 class="card-title"><?php echo e($capacitacion->cuerpo_capacitacion); ?></h5>
                    <p class="card-text"><?php echo e($capacitacion->tipo_capacitacion); ?></p>
                    <p class="card-text"><?php echo e($capacitacion->fecha_capacitacion); ?></p>

                    <form action="<?php echo e(route('capacitaciones.destroy',$capacitacion->id)); ?>" class="justify-content-end"  method=POST>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        
 <body>
  <div class="container" >
    <div class="modal fade" tabindex="-1" id="modal1">
      <div class="modal-dialog ">
        <div class="modal-content">
          <div class="modal-header">
          <p class="text-dark">Capacitaciones</p>
             <button class="close" data-dismiss="modal">&times;</button>
          </div>
            <div class="modal-body">
            <p class="text-dark">¿Seguro que quieres borrar la capacitacion?</p>
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


<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('administrador')): ?>
                        <a href="<?php echo e(route('capacitaciones.edit',$capacitacion->id)); ?>">
                        <button type="button"
                               class="btn btn-primary btn-sm "   >Actualizar</button></a>
                                <button type="button" class="btn btn-danger btn-sm " data-toggle="modal" data-target="#modal1">Eliminar</button>
                               
         

                    </form>
                    <?php endif; ?>                
                  </div>
            </div>
        </div>
    </div>


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<div class="row">
    <div class="mx-auto">
        <?php echo e($capacitaciones->links()); ?>

    </div>
</div>
</div>




</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.demo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\admin\resources\views/capacitaciones/index.blade.php ENDPATH**/ ?>