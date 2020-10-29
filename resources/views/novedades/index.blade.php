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
        <h1>Novedades<a href="novedades/create"><br><button type="button" class="btn btn-success btn-lg ">Agregar
                    novedad</button></a></h1>


    </div>

    <div>
        <div class="col-sm-3 bg-light float-right">
            <div class="card">
                <div class="card-body">

                    <p class="card-text"><iframe width="100%" height="315"
                            src="https://www.youtube.com/embed/UX9Cf36fSOU" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe></p>

                </div>
            </div>
        </div>
    </div>



    @foreach($novedades as $novedad)
    <div class="card w-75  " style="width: 18rem;">
        <div class="row no-gutters justify-content-center">
            <div class="col-md-4">
                <img src="/public/dist/images/{{$novedad->imagen_novedad}}" class="card-img " style="margin:10px"
                    alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$novedad->cuerpo_novedad}}</h5>
                    <p class="card-text">{{$novedad->tipo_novedad}}</p>
                    <p class="card-text">{{$novedad->fecha_novedad}}</p>

                    <form action="{{route('novedades.destroy',$novedad->id)}}" class="justify-content-end" method=POST>
                        @csrf
                        @method('DELETE')
                        <a href="{{route('novedades.edit',$novedad->id)}}"><button type="button"
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
        {{$novedades->links()}}
    </div>
</div>
</div>




</div>
</div>
@endsection
