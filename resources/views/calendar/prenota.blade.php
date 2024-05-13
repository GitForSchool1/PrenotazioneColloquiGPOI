@extends('layouts.app')
@section('title',$viewData['title'])
@section('subtitle',$viewData['subtitle'])
@section('content')
<form action="{{route('calendar.allPrenotazioni',$viewData['user']->getId())}}" method="post">


@csrf
<div class="row">

<div class="row">
    <div class="col-md-auto">
        <label>Name:</label>
    </div>
    <div class="col-md-auto">
        <input disabled value="{{$viewData['user']->getNameProfessore()}}" class="form-control">
    </div>    
    
    <div class="col-md-auto">
        <label>Cognome Professore:</label>
    </div>
    <div class="col-md-auto">
        <input disabled value="{{$viewData['user']->getSurnameProfessore()}}" type="text" class="form-control">
    </div>
    
    
    <div class="col-md-auto">
        <label>Giorno</label>
    </div>
    <div class="col-md-auto">
        <input name="role" value="{{$viewData['user']->getDay()}}" type="text" class="form-control">
    </div>
    
    <div class="col-md-auto">
        <label>Metodologia</label>
    </div>
    <div class="col-md-auto">
        <select name="Metodologia" id="metodologia">
            <option value="1">Online</option>
            <option value="2">Presenza</option>
        </select>
    </div>
    
    
</div>



    <div class="row">
        <div class="col">   
            <div class="mb-4 row">
                    <div class="col-lg-10 col-md-6 col-md-12">
                        <button type="submit" class="btn btn-primary">Prenota</button>
                    </div>
                </label>
            </div>
        </div>
    </div>
</form>

@endsection