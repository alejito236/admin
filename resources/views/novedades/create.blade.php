@extends('layouts.demo')

@section('content')
<div class="container" style="color:black">
    <div class='row'>
        <div class='col-sm-4'>
            <form action='/novedades' method='POST' enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="cuerpo_novedad">Titulo Novedad</label>
                    <input type="text" class="form-control" name="cuerpo_novedad" placeholder="Escribe el titulo de la novedad">
                </div>
                <div class="form-group">
                    <label for="tipo_novedad">Cotenido novedad</label>
                    <input type="text" class="form-control" name="tipo_novedad" placeholder="Escribe el contenido de la novedad">
                </div>
                <div class="form-group">
                    <label for="fecha_novedad">Fecha novedad</label>
                    <input type="date" class="form-control" name="fecha_novedad">
                </div>
                <div class="form-group">
                    <label for="imagen_novedad">imagen novedad</label>
                    <input type="file" class="form-control" name="imagen_novedad">
                </div>


                <button type="submit" class="btn btn-primary">Registrar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
</div>
</div>



@endsection
