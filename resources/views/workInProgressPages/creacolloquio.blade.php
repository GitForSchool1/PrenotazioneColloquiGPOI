@extends('layouts.insegnante')
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
        <form method="POST" action="{{ route('home') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Cognome:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="cognome" value="{{ old('cognome') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nome:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="nome" value="{{ old('nome') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Aula:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="aula" value="{{ old('aula') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Data:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input wire:model.lazy="data" name="data" type="date" required class="" placeholder="yyyy-mm-dd" pattern="\d{4}-\d{2}-\d{2}" title="Provide a date in the format yyyy-mm-dd">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Orario inizio:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="OrarioInizio" value="{{ old('OrarioInizio') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Orario fine:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="OrarioFine" value="{{ old('OrarioFine') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3">
                    <label class="form-label">Materia:</label>
                    <input name="materia" value="{{ old('materia') }}" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Modalita':</label>
                    <input name="materia" value="{{ old('materia') }}" type="text" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Gestisci i colloqui
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Cognome</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Aula</th>
                    <th scope="col">Data</th>
                    <th scope="col">OrarioInizio</th>
                    <th scope="col">OrarioFine</th>
                    <th scope="col">Materia</th>
                    <th scope="col">Modalità</th>                    
                    <th scope="col">Modifica</th>
                    <th scope="col">Elimina</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["products"] as $product)
                <tr>
                    <td>{{ $product["id"] }}</td>
                    <td>{{ $product["professore"] }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('professore.colloqui.modifica' , $product->getId())}}">modifica</a>
                    </td>
                    <form action="{{route('professore.colloqui.elimina', $product->getId())}}" method="POST">
                        <td>
                            <button class="btn btn-primary">cancella</button>
                            @csrf
                            @method('DELETE')
                        </td>
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection