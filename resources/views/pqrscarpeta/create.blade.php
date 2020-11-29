@extends('layouts.demo')

@section('content')





@if($flash = Session::get('exito') )
 
 <div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Genial!</strong> {{ $flash  }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>


@endif

<div class="container" style="color:black">
    <div class='row'>
        <div class='col-sm-4'>
            <form action='/pqrs' method='POST' enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="cuerpo_pqrs">Nombres</label>
                    <input type="text" class="form-control" name="cuerpo_pqrs" placeholder="Escribe tus nombres">
                </div>
                <div class="form-group">
                    <label for="apellido_pqrs">Apellidos</label>
                    <input type="text" class="form-control" name="apellido_pqrs" placeholder="Escribe tus apellidos">
                </div>
                <div class="form-group">
                    <label for="email_pqrs">E-mail</label>
                    <input type="text" class="form-control" name="email_pqrs" placeholder="Correo">
                </div>
                <div class="form-group">
                    <label for="tipoid_pqrs">Tipo de identificacion</label>
                    <input type="text" class="form-control" name="tipoid_pqrs" placeholder="Tipo de documento">
                </div>
                <div class="form-group">
                    <label for="numeroid_pqrs">Numero de identificacion</label>
                    <input type="text" class="form-control" name="numeroid_pqrs" placeholder="Numero de documento">
                </div>
                <div class="form-group">
                    <label for="telefono_pqrs">Telefono</label>
                    <input type="text" class="form-control" name="telefono_pqrs" placeholder="Telefono">
                </div>
                <div class="form-group">
                    <label for="tiposolicitud_pqrs">Tipo de solicitud</label>
                    <input type="text" class="form-control" name="tiposolicitud_pqrs" placeholder="Select">
                </div>
                <div class="form-group">
                    <label for="solicitud_pqrs">Solicitud</label>
                    <input type="text" class="form-control" name="solicitud_pqrs" placeholder="Select">
                </div>
                <div class="form-group">

                
                    <label for="contenido_pqrs">Contenido</label>
                    <input type="text" class="form-control" name="contenido_pqrs" placeholder="contenido">
               
                </div>
                <div class="form-group">
                    <label for="fecha_pqrs">Fecha</label>
                    <input type="date" class="form-control" name="fecha_pqrs">
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
       ¿Estas seguro de envair su petición?
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

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">Enviar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
   
            </form>
        </div>
    </div>
</div>
</div>



@endsection
