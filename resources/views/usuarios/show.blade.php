@extends('layouts.demo')

@section('content')
<div class="col-md-6 offset-md-3   " >
<div class="jumbotron jumbotron-fluid bg-info "  style="color:black; border-radius:15px">

  <div class="container">
  
    <h1 class="display-4">{{$user->name}}</h1>
    <div class="float-right">
                            <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                        </div>
    <p class="lead">{{$user->tipodocumentol}}</p>
    <p class="lead">{{$user->telefono}}</p>
    <p class="lead">{{$user->fecha_cumpleanios}}</p>
    <p class="lead">{{$user->email}}</p>
  
    
  </div>
</div>
</div>


@endsection