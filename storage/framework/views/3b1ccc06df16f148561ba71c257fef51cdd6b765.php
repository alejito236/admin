

<?php $__env->startSection('content'); ?>
<div >

    <div class="titulos" style="  background-color: #113049;
  padding: 1em; color:#fff; margin: 1em 1em 1em 0em; border-radius:5px;">

        <?php if($search): ?>
        <div class="alert alert-primary" role="alert">
            Los resultados de tu busqueda '<?php echo e($search); ?>' son:
        </div>
        <?php endif; ?>
        <h1>Novedades<a href="novedades/create"><br><button type="button" class="btn btn-success btn-lg ">Agregar
                    novedad</button></a></h1>


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



    <?php $__currentLoopData = $novedades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $novedad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card w-75  " style="width: 18rem;">
        <div class="row no-gutters justify-content-center">
            <div class="col-md-4">
                <img src="/public/dist/images/<?php echo e($novedad->imagen_novedad); ?>" class="card-img " style="margin:10px"
                    alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($novedad->cuerpo_novedad); ?></h5>
                    <p class="card-text"><?php echo e($novedad->tipo_novedad); ?></p>
                    <p class="card-text"><?php echo e($novedad->fecha_novedad); ?></p>

                    <form action="<?php echo e(route('novedades.destroy',$novedad->id)); ?>" class="justify-content-end" method=POST>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <a href="<?php echo e(route('novedades.edit',$novedad->id)); ?>"><button type="button"
                                class="btn btn-primary">Actualizar</button></a>
                        <button type="submit" class="btn btn-danger">Eliminar</button>

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