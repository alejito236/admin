@extends('layouts.demo')

@section('content')

<div class="container" style="color:black">
    <div class='row'>
        <div class='col-sm-4'>
        <h3>Editar capacitacion:{{$capacitacion->cuerpo_capacitacion}}</h3>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <form action="{{route('capacitaciones.update', $capacitacion->id)}}" method="POST">
                @method('PATCH')
                

                @csrf
                <div class="form-group">
                    <label for="cuerpo_capacitacion">Titulo capacitacion</label>
                    <input type="text" class="form-control" name="cuerpo_capacitacion" value='{{$capacitacion->cuerpo_capacitacion}}' placeholder="Escribe tu nombre">
                </div>
                <div class="form-group">
                    <label for="tipo_capacitacion">Descripcion capacitacion</label>
                    <textarea  rows="14"  type="text-area" class="form-control" name="tipo_capacitacion" 
                     placeholder="Escribe tu correo">
                    {{$capacitacion->tipo_capacitacion}}</textarea> </div>

                <div class="form-group">
                    <label for="fecha_capacitacion">fecha_capacitacion</label>
                    <input type="date" class="form-control" name="fecha_capacitacion" value='{{$capacitacion->fecha_capacitacion}}' placeholder="Escribe tu correo">
                </div>

  


                <button type="submit" class="btn btn-primary">Actualizar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
</div>
</div>


@endsection