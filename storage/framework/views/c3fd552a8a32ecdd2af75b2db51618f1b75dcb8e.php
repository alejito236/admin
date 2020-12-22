

<?php $__env->startSection('content'); ?>





<?php if($flash = Session::get('exito') ): ?>
 
 <div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Genial!</strong> <?php echo e($flash); ?>

<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>


<?php endif; ?>
<div class="container " style="color:black" >

<form action='/pqrs' method='POST' enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
  <div class="row align-items-start">
  <div class="form-group">
                    <label for="cuerpo_pqrs">Nombres</label>
                    <input type="text" class="form-control" name="cuerpo_pqrs" placeholder="Escribe tus nombres">
                </div>
                <div class="col-md-3 offset-md-1" style= "margin-left:100px" >
                <div class="form-group" >
                    <label for="apellido_pqrs" >Apellidos</label>
                    <input type="text" class="form-control"  name="apellido_pqrs" placeholder="Escribe tus apellidos">
                </div>
                </div>
                <div class="col-md-3 offset-md-1">
                <div class="form-group">
                    <label for="email_pqrs">E-mail</label>
                    <input type="text" class="form-control" name="email_pqrs" placeholder="Correo">
                </div>
                </div>
  </div>
  <div class="row align-items-center">
  <div class="form-group">
                
                <label for="tipoid_pqrs" >Tipo de identificacion</label>
                <select input type="text" class="form-control" name="tipoid_pqrs" placeholder="Tipo de documento">
                 
                 
                          
<option value="1">C.C</option> 
<option value="2">Cedula de extranjeria</option> 
<option value="3">T.I</option>

</select>
            </div>
            <div class="col-md-3 offset-md-1" style= "margin-left:113px" >
            <div class="form-group">
                    <label for="numeroid_pqrs">Numero de identificacion</label>
                    <input type="text" class="form-control" name="numeroid_pqrs" placeholder="Numero de documento">
                </div>
            </div>
            <div class="col-md-3 offset-md-1">
                <div class="form-group">
                    <label for="telefono_pqrs">Telefono</label>
                    <input type="text" class="form-control" name="telefono_pqrs" placeholder="Telefono">
                </div>
                </div>

  </div>
  <div class="row align-items-end ">
  <div class="form-group">
                    <label for="tiposolicitud_pqrs">Tipo de solicitud</label>
                     <select input type="text" class="form-control" name="tiposolicitud_pqrs" placeholder="Select">
                    <option value="1">Petición</option> 
                    <option value="2">Queja</option> 
                    <option value="3">Reclamo</option>
                    <option value="4">Sugerencias</option> 
                    </select> 

                </div>
                <div class="col-md-3 offset-md-2" style= "margin-left:170px">
                <div class="form-group">
                    <label for="solicitud_pqrs">Titulo de solicitud</label>
                    <input type="text" class="form-control" name="solicitud_pqrs"  placeholder="Nombre de su pqrs">
                </div>
                </div>
                <div class="col-md-3 offset-md-1">
                <div class="form-group">
                    <label for="fecha_pqrs">Fecha</label>
                    <input type="date" class="form-control" name="fecha_pqrs">
                </div>
                </div>
  </div>
  <div class="col-4"  style= "margin-left:-30px">
  <div class="form-group">
                    <label for="contenido_pqrs">Contenido de solicitud</label>

                    <textarea class="form-control form-control-sm mb-3" rows="10"  name="contenido_pqrs" placeholder="Describa su problema"></textarea>
                    
                </div>
               
  </div>





                


 
              
  


                
               
                
                
                
                
               
                
             
              

                       </body>
                           <div class="container" >
                             <div class="modal fade" tabindex="-1" id="modal1">
                               <div class="modal-dialog ">
                                 <div class="modal-content">
                                   <div class="modal-header">
                                        Buzon de sugerencias
                                     <button class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                 <div class="modal-body">
                                  ¿Estas seguro de envair su PQRS?
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
<div class="" style="margin-top:20px" >
<button type="button" class="btn btn-primary btn-sm " data-toggle="modal" data-target="#modal1">Enviar</button>
                <button type="reset" class="btn btn-danger btn-sm ">Cancelar</button>


    </div>
            </form>
        </div>
    </div>
</div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.demo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\admin\resources\views/pqrscarpeta/create.blade.php ENDPATH**/ ?>