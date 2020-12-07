@extends('layouts.demo')

@section('content')
<div class="container"  style="color:black">
    <div class='row'>
        <div class='col-sm-4'>
<form method="POST" action="{{ route('register') }}">
    @csrf
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" name="name" placeholder="Escribe tu nombre">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Escribe tu correo">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password">
  </div>

  <div class="form-group">
    <label for="password"> confirm Password</label>
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
  </div>

  </body>
  <div class="container" >
<div class="modal fade" tabindex="-1" id="modal1">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
      Usuarios
      <button class="close" data-dismiss="modal">&times;</button>
       </div>
       <div class="modal-body">
       ¿Estas seguro de crear el usuario?
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

 
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">Registrar</button>
  <button type="reset" class="btn btn-danger">Cancelar</button>
</form>
        </div>
    </div>
</div>
</div>


@endsection


