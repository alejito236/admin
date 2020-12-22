

<?php $__env->startSection('content'); ?>
<div >

    <div class="titulos" style="  background-color: #113049;
  padding: 1em; color:#fff; margin: 1em 1em 1em 0em; border-radius:5px;">

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
        <h1>Novedades<a href="novedades/create"><br><button type="button" class="btn btn-success btn-sm  ">Agregar
                    novedad</button></a></h1>


    </div>

    <div>
        <div class="col-sm-3 bg-light float-right">
            <div class="card" style="background-color:transparent">
                <div class="card-body" >

                    <p class="card-text"><iframe width="100%" height="315"
                            src="https://www.youtube.com/embed/UX9Cf36fSOU" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe></p>

                </div>
            </div>
        </div>
    </div>



    <?php $__currentLoopData = $novedades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $novedad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card w-75  " style="background-color:transparent" style="width: 18rem;">
        <div class="row no-gutters justify-content-center">
            <div class="col-md-4">
                <img src="/public/dist/images/<?php echo e($novedad->imagen_novedad); ?>" class="card-img " style="margin:10px"
                    alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body" style="color:black">
                    <h5 class="card-title"><?php echo e($novedad->cuerpo_novedad); ?></h5>
                    <p class="card-text"><?php echo e($novedad->tipo_novedad); ?></p>
                    <p class="card-text"><?php echo e($novedad->fecha_novedad); ?></p>

                    <form action="<?php echo e(route('novedades.destroy',$novedad->id)); ?>" class="justify-content-end" method=POST>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
<body>
<div class="container" >
 <div class="modal fade" tabindex="-1" id="modal1">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
      <p class="text-dark">Novedades</p>
      <button class="close" data-dismiss="modal">&times;</button>
       </div>
       <div class="modal-body">
       <p class="text-dark">¿Seguro que quieres borrar la Novedad?</p>
       </div>
       <div class= "modal-footer">
       <button type="submit" class="btn btn-primary">Aceptar</button>
       <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
       </div>
      </div>
    </div>
  </div>
</div>

       
</body>
                        <a href="<?php echo e(route('novedades.edit',$novedad->id)); ?>"><button type="button"
                        class="btn btn-primary btn-sm ">Actualizar</button></a>
                         <button type="button" class="btn btn-danger btn-sm " data-toggle="modal" data-target="#modal1">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<div class="row">
    <div class="mx-auto">
        <?php echo e($novedades->links()); ?>

    </div>
</div>
</div>




</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.demo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\admin\resources\views/novedades/index.blade.php ENDPATH**/ ?>