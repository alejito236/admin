@extends('layouts.demo')

@section('content')
@if (session('exito'))
<div class="alert alert-success" role="alert">
    {{(session('exito'))}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="col-md-10 ml-auto mr-auto">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">PQRS</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="background-color:white;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container " style="color: #000000; background-color: white;">

                                <form action='/pqrs' method='POST' enctype="multipart/form-data">
                                    @csrf
                                    <div class="row align-items-start">
                                        <div class="form-group">
                                            <label for="cuerpo_pqrs">Nombres</label>
                                            <input type="text" class="form-control" name="cuerpo_pqrs" placeholder="Escribe tus nombres" required>
                                        </div>
                                        <div class="col-md-3 offset-md-1" >
                                            <div class="form-group">
                                                <label for="apellido_pqrs">Apellidos</label>
                                                <input type="text" class="form-control" name="apellido_pqrs" placeholder="Escribe tus apellidos" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3 offset-md-1">
                                            <div class="form-group">
                                                <label for="email_pqrs">E-mail</label>
                                                <input type="text" class="form-control" name="email_pqrs" placeholder="Correo" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="form-group">
                                            <label for="tipoid_pqrs">Tipo de identificación</label>
                                            <select input type="text" class="form-control" name="tipoid_pqrs" placeholder="Tipo de documento" required>
                                                <option value="1">C.C</option>
                                                <option value="2">Cedula de extranjeria</option>
                                                <option value="3">T.I</option>

                                            </select>
                                        </div>
                                        <div class="col-md-3 offset-md-1" >
                                            <div class="form-group">
                                                <label for="numeroid_pqrs">Numero de identificación</label>
                                                <input type="text" class="form-control" name="numeroid_pqrs" placeholder="Numero de documento" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3 offset-md-1">
                                            <div class="form-group">
                                                <label for="telefono_pqrs">Teléfono</label>
                                                <input type="text" class="form-control" name="telefono_pqrs" placeholder="Telefono" required>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row align-items-start">
                                        <div class="form-group">
                                            <label for="tiposolicitud_pqrs">Tipo de solicitud</label>
                                            <select input type="text" class="form-control" name="tiposolicitud_pqrs" placeholder="Select" required>
                                            <option value="1">Petición</option>
                                                <option value="2">Queja</option>
                                                <option value="3">Reclamo</option>
                                                <option value="3">Sugerencias y/o otros</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 offset-md-1" >
                                            <div class="form-group">
                                                <label for="solicitud_pqrs">Titulo de solicitud</label>
                                                <input type="text" class="form-control" name="solicitud_pqrs" placeholder="Titulo de su pqrs" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3 offset-md-1">
                                            <div class="form-group">
                                                <label for="fecha_pqrs">Fecha</label>
                                                <input type="date" class="form-control" name="fecha_pqrs" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-11" >
                                        <div class="form-group">
                                            <label for="contenido_pqrs">Contenido de solicitud</label>

                                            <textarea class="form-control form-control-sm mb-3" rows="10" cols="30" name="contenido_pqrs" placeholder="Describa su problema" required></textarea>

                                        </div>

                                    </div>

                                    </body>
                                    <div class="container">
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
                                                    <div class="modal-footer">
                                                        <button type=submit class="btn btn-primary">Aceptar</button>
                                                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    </body>
                                    <div class="" style="margin-top:20px">
                                        <button type="button" class="btn btn-primary btn-sm " data-toggle="modal" data-target="#modal1">Enviar</button>
                                        <button type="reset" class="btn btn-danger btn-sm ">Cancelar</button>


                                    </div>
                                </form>
                            </div>
                            <!-- /.form-group -->
                        </div>

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->


                    <!-- /.row -->
                </div>

            </div>
            
    </section>
  
</div>


@endsection
