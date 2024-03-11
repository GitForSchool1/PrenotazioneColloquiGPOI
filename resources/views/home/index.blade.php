@extends('layouts.app')
@section('title',$viewData['title'])
@section('subtitle','QG dei Franchi')
@section('content')

  <div class='row'>
    <div class="col-md-6 col-lg-4 md-2">
      <img src="{{asset("storage/default.jpg")}}" class="img-fluid rounded">
    </div>
    <div class="col-md-6 col-lg-4 md-2">
      <img src="{{asset("storage/default.jpg")}}" class="img-fluid rounded">
    </div>
    <div class="col-md-6 col-lg-4 md-2">
      <img src="{{asset("storage/default.jpg")}}" class="img-fluid rounded">
    </div>
  </div>

@endsection