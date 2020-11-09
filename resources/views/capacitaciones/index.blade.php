@extends('layouts.demo')

@section('content')
<div >

    <div class="titulos" style="  background-color: #113049;
  padding: 1em; color:#fff; margin: 1em 1em 1em 0em; border-radius:5px;">

        @if($search)
        <div class="alert alert-primary" role="alert">
            Los resultados de tu busqueda '{{$search}}' son:
        </div>
        @endif
        <h1>Capacitaciones<a href="capacitaciones/create"><br><button type="button" class="btn btn-success btn-lg ">Agregar
                    capacitacion</button></a></h1>


    </div>



    @foreach($capacitaciones as $capacitacion)
    <div class="card w-75  " style="width: 18rem;">
        <div class="row no-gutters justify-content-center">
           
            <div class="col-md-8">
                <div class="card-body"style="margin-left:-165px">
                    <h5 class="card-title">{{$capacitacion->cuerpo_capacitacion}}</h5>
                    <p class="card-text">{{$capacitacion->tipo_capacitacion}}</p>
                    <p class="card-text">{{$capacitacion->fecha_capacitacion}}</p>

                    <form action="{{route('capacitaciones.destroy',$capacitacion->id)}}" class="justify-content-end" method=POST>
                        @csrf
                        @method('DELETE')
                        <a href="{{route('capacitaciones.edit',$capacitacion->id)}}"><button type="button"
                                class="btn btn-primary">Actualizar</button></a>
                        <button type="submit" class="btn btn-danger">Eliminar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


    @endforeach

</div>

<div class="row">
    <div class="mx-auto">
        {{$capacitaciones->links()}}
    </div>
</div>
</div>




</div>
</div>
@endsection
