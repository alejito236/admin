
@extends('layouts.demo')

@section('content')
<div class="container" style="color:black">
    <div class='row'>
        <div class='col-sm-4'>
            <form action='/capacitaciones' method='POST' enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="cuerpo_capacitacion">Titulo capacitacion</label>
                    <input type="text" class="form-control" name="cuerpo_capacitacion" placeholder="Escribe el titulo de la capacitacion">
                </div>
                <div class="form-group">
                    <label for="tipo_capacitacion">Contenido capacitacion</label>
                    <input type="text" class="form-control" name="tipo_capacitacion" placeholder="Escribe el contenido de la capacitacion">
                </div>
                <div class="form-group">
                    <label for="fecha_capacitacion">Fecha capacitacion</label>
                    <input type="date" class="form-control" name="fecha_capacitacion">
                </div>
               


                <button type="submit" class="btn btn-primary">Registrar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
</div>
</div>



@endsection
