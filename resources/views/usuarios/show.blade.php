@extends('layouts.demo')

@section('content')
<div class="jumbotron jumbotron-fluid"  style="color:black">
  <div class="container">
    <h1 class="display-4">{{$user->name}}</h1>
    <p class="lead">{{$user->email}}</p>
  </div>
</div>
</div>


@endsection