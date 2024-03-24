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

            <form action="{{route('admin.archivio.update',$viewData['archivio']->getId())}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name:</label>
                                <div class="col-lg-10 col-md-6 col-md-12">
                                    <input name="name" value="{{$viewData['archivio']->getName()}}" type="text" class="form-control">
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Surname:</label>
                                <div class="col-lg-10 col-md-6 col-md-12">
                                    <input name="surname" value="{{$viewData['archivio']->getSurname()}}" type="text" class="form-control">
                                </div>
                            </label>
                        </div>
                    </div>    
                </div>
                
                <div class="row">
                    <div class="col">
                        <div class="mb-4 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Documents:</label>
                                <div class="col-lg-10 col-md-6 col-md-12">
                                    <textarea name="document" class="form-control">{{$viewData['archivio']->getDocument()}}</textarea>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">   
                        <div class="mb-4 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Tipo:</label>
                                <div class="col-lg-10 col-md-6 col-md-12">
                                    <textarea name="type" class="form-control">{{$viewData['archivio']->getType()}}</textarea>

                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">   
                        <div class="mb-4 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">email:</label>
                                <div class="col-lg-10 col-md-6 col-md-12">
                                    <textarea email="type" class="form-control">{{$viewData['archivio']->getEmail()}}</textarea>

                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">   
                        <div class="mb-4 row">
                                <div class="col-lg-10 col-md-6 col-md-12">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                

            </form>
        </div>
    </div>



    <div class="card">
        <div class="card-header">
            Gestione Franchi
        </div>
        <div class="card-body">

        </div>
    </div>



@endsection