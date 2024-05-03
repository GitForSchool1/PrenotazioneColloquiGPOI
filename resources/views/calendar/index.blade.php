@extends('layouts.app')
@section('title',$viewData['title'])
@section('subtitle',$viewData['subtitle'])
@section('content')

<div class="card">
    <div class="card-header">
        Elenco Docenti
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <th>NOME</th>
            <th>COGNOME</th>
            <th>GIORNO</th>
            <th>TIPOLOGIA</th>
            @foreach($viewData['users'] as $user)
                <tr>
                    <td>{{$user->getNameProfessore()}}</td>
                    <td>{{$user->getSurnameProfessore()}}</td>
                    <td>{{$user->getDay()}}</td>

                    <td>{{$user->getMetodologia()}}</td>

                    <td>
                        <a type="submit" class="btn btn-primary" href="{{route('calendar.prenota',$user->getId())}}">PRENOTA</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection
