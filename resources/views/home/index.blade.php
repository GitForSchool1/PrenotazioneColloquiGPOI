@extends('layouts.app')
@section('title',$viewData['title'])
@section('subtitle','Benvenuto nella pagina per la prenotazione dei colloqui')
@section('content')
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <div class="row">
        <label class="intro">Benvenuti all'interno della piattaforma per prenotare dei colloqui della scuola ITIS Mario Delpozzo</label>
    </div>
    <div class="row">
        @if(Auth::user()&& Auth::user()->getRole()== "visitatore")
        <form method="post">
            <a href="#" class="nav-link">Vai al tuo account</a> <!-- Bisogna mettere la Nuova route per andare all'account e fare la parte di front end -->
        </form>
        @else
        @endif
    </div>

@endsection