@extends('layouts.demo')

@section('content')

<div class="titulos" style="  background-color: #113049;
  padding: 1em; color:#fff; margin: 1em 1em 1em 0em; border-radius:5px;">

        @if($search)
        <div class="alert alert-primary" role="alert">
            Los resultados de tu busqueda '{{$search}}' son:
        </div>
        @endif
        <h1>lista de usuarios<a href="usuarios/create"><br><button type="button" class="btn btn-success btn-lg ">Agregar
                    Usuario</button></a></h1>


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
    @foreach($users as $user)
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>
      
      <form action="{{route('usuarios.destroy',$user->id)}}" method=POST>
        @csrf
        @method('DELETE')
        <a href="{{route('usuarios.show',$user->id)}}"><button type="button" class="btn btn-secondary">Ver</button></a>
        <a href="{{route('usuarios.edit',$user->id)}}"><button type="button" class="btn btn-primary">Actualizar</button></a>
        <button type="submit" class="btn btn-danger">Eliminar</button>

      </form>
      
      </td>

    </tr>
    @endforeach
   
  </tbody>
</table>
  <div class="row">
    <div class="mx-auto">
       {{$users->links()}}
      </div>
    </div>
  </div>
  </div>
  
@endsection