@extends('layouts.admin')
@section('title',$viewData['title'])
@section('content')
    <div class="card">
        <div class="card-header">
            Modifica archivio
        </div>
        <div class="card-body">
            @if($errors->any())
            <ul class="alert alert-danger list-unstyled">
                @foreach($errors->all() as $error)
                <li>- {{$error}}</li>
                @endforeach
            </ul>
            @endif


@endsection