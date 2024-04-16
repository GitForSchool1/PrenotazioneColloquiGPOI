@extends('layouts.admin')
@section('title',$viewData['title'])
@section('subtitle',$viewData['subtitle'])
@section('content')

    <div class="card">
        <div class="card-body">
            Show all Users
        </div>
        <div>
            {{$viewData['users']}}
        </div>
    </div>

@endsection