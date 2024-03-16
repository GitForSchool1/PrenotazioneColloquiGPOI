@extends('layouts.app')
@section('title',$viewData['title'])
@section('subtitle','Benvenuto nella pagina per la prenotazione dei colloqui')
@section('content')
    <div class="row">
        <a class="nav-link active" href={{route('login')}}>Login</a>
        <a class="nav-link active" href={{route('register')}}>Registrati</a> <!-- Problema con la registrazione perché i professori potrebbero avere dei nomi in comune con gli alunni... esempio "Federico Dutto" (Alunno) "Federico Dutto" (Professore) -->
    </div>

@endsection