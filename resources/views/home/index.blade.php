@extends('layouts.app')
@section('title',$viewData['title'])
@section('subtitle','Benvenuto nella pagina per la prenotazione dei colloqui')
@section('content')
<<<<<<< HEAD
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <div class="row">
        <label class="intro">Benvenuti all'interno della piattaforma per prenotare dei colloqui della scuola ITIS Mario Delpozzo</label>
    </div>
    <div class="row">
        <form method="post">
            <a href="{{route("login")}}" class="nav-link">Hai già un account</a>
            <a href="{{route("register")}}" class="nav-link">Crea un nuovo account</a>
        </form>
=======
    <div class="row">
        <label>Pagina Iniziale</label>
>>>>>>> ed8441dcfaf4fd1c8e7e75b1a7f3d03f14b4a83f
    </div>

@endsection