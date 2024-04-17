@extends('layouts.admin')
@section('title',$viewData['title'])
@section('subtitle',$viewData['subtitle'])
@section('content')
<form action="{{route('admin.gestore.update',$viewData['user']->getId())}}" method="post">


@csrf
@method('PUT')
<div class="row">
        
        <div class="col">
            <div class="mb-3 row">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name:</label>
                    <div class="col-lg-10 col-md-6 col-md-12">
                        <input disabled value="{{$viewData['user']->getName()}}" class="form-control">
                    </div>
                </label>
            </div>
        </div>
        
        <div class="col">
            <div class="mb-3 row">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">ID:</label>
                    <div class="col-lg-10 col-md-6 col-md-12">
                        <input disabled value="{{$viewData['user']->getId()}}" type="text" class="form-control">
                    </div>
                </label>
            </div>
        </div>
        <div class="row">

        <div class="col">
            <div class="mb-3 row">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Email:</label>
                    <div class="col-lg-10 col-md-6 col-md-12">
                        <input disabled value="{{$viewData['user']->getEmail()}}" type="text" class="form-control">
                    </div>
                </label>
            </div>
        </div>
    
        <div class="col">
            <div class="mb-3 row">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Role:</label>
                    <div class="col-lg-10 col-md-6 col-md-12">
                        <input name="role" value="{{$viewData['user']->getRole()}}" type="text" class="form-control">
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
                        <button type="submit" class="btn btn-primary">Modifica</button>
                    </div>
                </label>
            </div>
        </div>
    </div>
</form>

@endsection