@extends('layouts.demo')

@section('content')

<div class="container" style="color:black">
    <div class='row'>
        <div class='col-sm-4'>
        <h3>Editar novedad:{{$novedad->cuerpo_novedad}}</h3>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <form action="{{route('novedades.update', $novedad->id)}}" method="POST">
                @method('PATCH')
                

                @csrf
                <div class="form-group">
                    <label for="cuerpo_novedad">Titulo Novedad</label>
                    <input type="text" class="form-control" name="cuerpo_novedad" value='{{$novedad->cuerpo_novedad}}' placeholder="Escribe tu nombre">
                </div>
                <div class="form-group">
                    <label for="tipo_novedad">Descripcion Novedad</label>
                    <textarea  rows="14"  type="text-area" class="form-control" name="tipo_novedad" 
                     placeholder="Escribe tu correo">
                    {{$novedad->tipo_novedad}}</textarea> </div>

                <div class="form-group">
                    <label for="fecha_novedad">fecha_novedad</label>
                    <input type="date" class="form-control" name="fecha_novedad" value='{{$novedad->fecha_novedad}}' placeholder="Escribe tu correo">
                </div>

  


                <button type="submit" class="btn btn-primary">Actualizar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
</div>
</div>


@endsection