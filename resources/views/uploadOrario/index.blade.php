@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Crea Colloquio
    </div>
    <div class="card-body">
        @if($errors->any())
        <ul class="alert alert-danger list-unstyled">
        @foreach($errors->all() as $error)
            <li>* {{ $error }}</li>
        @endforeach
        </ul>
        @endif
                
        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-1">
                    <p>Modalità</p>
                </div>
                <div class="col">
                    <select name="mod" id="mod" >
                        <option value="-1" selected disabled hidden>Seleziona</option>
                        <option value="1">Online</option>
                        <option value="0">Presenza</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-1">
                    <label>Name:</label>
                </div>
                <div class="col">
                    <input disabled placeholder={{Auth::user()->getName()}}></input>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-1">
                    <p>Giorno</p>
                </div>
                <div class="col">
                    <input type="date" name="DayFree" id="DayFree">
                </div>
            </div>
            <input type="submit" value="Crea Data" class="btn btn-primary">
        </form>
    </div>
</div>

@endsection