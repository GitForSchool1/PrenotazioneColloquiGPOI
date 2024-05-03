@extends('layouts.app')
@section('title',$viewData['title'])
@section('subtitle','Benvenuto nella pagina per la prenotazione dei colloqui')
@section('content')
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <div class="row">
        <label class="intro">Benvenuti all'interno della piattaforma per prenotare dei colloqui della scuola ITIS Mario Delpozzo</label>
    </div>
<<<<<<< HEAD

=======
    <div class="row">
        @if(Auth::user()&& Auth::user()->getRole()== "guest")
        <form method="post">
            <a href="#" class="nav-link">Vai al tuo account</a> <!-- Bisogna mettere la Nuova route per andare all'account e fare la parte di front end -->
        </form>
        @else
        @endif
    </div>
>>>>>>> c61cc774b7649c113848a9c7e3b5299021a06805

@endsection