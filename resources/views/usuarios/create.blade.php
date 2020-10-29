@extends('layouts.demo')

@section('content')
<div class="container"  style="color:black">
    <div class='row'>
        <div class='col-sm-4'>
<form action='/usuarios' method ='POST'>
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
 
  <button type="submit" class="btn btn-primary">Registrar</button>
  <button type="reset" class="btn btn-danger">Cancelar</button>
</form>
        </div>
    </div>
</div>
</div>


@endsection
