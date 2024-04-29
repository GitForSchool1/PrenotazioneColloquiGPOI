@extends('layouts.app')
@section('title',$viewData['title'])
@section('subtitle',$viewData['subtitle'])
@section('content')
<form action="{{route('calendar.allPrenotazioni',$viewData['user']->getId())}}" method="post">


@csrf
<div class="row">
        
        <div class="col">
            <div class="mb-3 row">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name:</label>
                    <div class="col-lg-10 col-md-6 col-md-12">
                        <input disabled value="{{$viewData['user']->getNameProfessore()}}" class="form-control">
                    </div>
                </label>
            </div>
        </div>
        
        <div class="row">

        <div class="col">
            <div class="mb-3 row">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Cognome:</label>
                    <div class="col-lg-10 col-md-6 col-md-12">
                        <input disabled value="{{$viewData['user']->getSurnameProfessore()}}" type="text" class="form-control">
                    </div>
                </label>
            </div>
        </div>
    
        <div class="col">
            <div class="mb-3 row">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Day:</label>
                    <div class="col-lg-10 col-md-6 col-md-12">
                        <input name="role" value="{{$viewData['user']->getDay()}}" type="text" class="form-control">
                    </div>
                </label>
            </div>
        </div>
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