@extends('layouts.admin')
@section('title',$viewData['title'])
@section('subtitle',$viewData['subtitle'])
@section('content')

    <div class="card">
        <div class="card-header">
            Show all Users
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <th>ID</th>
                <th>NOME</th>
                <th>MAIL</th>
                <th>RUOLO</th>
                @foreach($viewData['users'] as $user)
                    <tr>
                        <td>{{$user->getId()}}</td>
                        <td>{{$user->getName()}}</td>
                        <td>{{$user->getEmail()}}</td>
                        <td>{{$user->getRole()}}</td>
                        <td>
                            <a type="submit" class="btn btn-primary" href="{{route('admin.gestore.edit',$user->getId())}}">EDIT ROLE</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection