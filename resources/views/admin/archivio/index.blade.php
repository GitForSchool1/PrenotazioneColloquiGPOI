@extends('layouts.admin')
@section('title',$viewData['title'])
@section('content')
    <div class="card">
        <div class="card-header">
            Crea Archivio
        </div>
        <div class="card-body">
            @if($errors->any())
            <ul class="alert alert-danger list-unstyled">
                @foreach($errors->all() as $error)
                <li>- {{$error}}</li>
                @endforeach
            </ul>
            @endif
            <form action="{{route('admin.archivio.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name:</label>
                                <div class="col-lg-10 col-md-6 col-md-12">
                                    <input name="name" value="{{old('name')}}" type="text" class="form-control">
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Surname:</label>
                                <div class="col-lg-10 col-md-6 col-md-12">
                                    <input name="surname" value="{{old('surname')}}" type="text" class="form-control">
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
                                    <textarea name="documents" class="form-control">{{old('documents')}}</textarea>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">   
                        <div class="mb-4 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Type:</label>
                                <div class="col-lg-10 col-md-6 col-md-12">
                                    <textarea name="type" class="form-control">{{old('type')}}</textarea>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">   
                        <div class="mb-4 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Email:</label>
                                <div class="col-lg-10 col-md-6 col-md-12">
                                    <textarea name="email" class="form-control">{{old('email')}}</textarea>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">   
                        <div class="mb-4 row">
                                <div class="col-lg-10 col-md-6 col-md-12">
                                    <button type="submit" class="btn btn-primary">Aggiungi</button>
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
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EDIT</th>
                    <th>DELETE</button></th>
                </tr>
                @foreach ($viewData['archivio'] as $archivio)
                    
                    <tr>
                        <td>{{$archivio->getId()}}</td>
                        <td>{{$archivio->getName()}}</td>
                            <td><a type="submit" class="btn btn-primary" href="{{route('admin.archivio.edit',$archivio->getId())}}">EDIT</a></td>
                        
                        <form method="POST" action="{{route('admin.archivio .delete',$archivio->getId())}}">
                        <td><button type="submit" class="btn btn-primary" name="btnDelete">DELETE</td>
                        
                        @csrf
                        <!-- /*
                            Per evitare il cross reference, per valudare con il token
                            Solo la pagina in riferimento può mandare delle richieste valide al server
                        */-->
                        @method('DELETE')
                        </form>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>



@endsection