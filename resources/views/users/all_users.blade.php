@extends('layouts.femaster')
@section('content')
    <h3>Olá, sou todos os users</h3>

    {{-- <p>{$hello</p>
    <p>$helloAgain</p>
    <p>$daysOfWeek[2]</p>
    <p>{{ $info['name'] }}</p>
    <p>{{ $info['modules'][0] }}</p> --}}

    <form method="GET">
        <input type="text" value="" name="search" id="">
        <button class="btn btn-info" type="submit">Procurar</button>
    </form>


    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td scope="row">{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="{{ route('users.view', $user->id) }}" class="btn btn-info">Ver / Actualizar</a></td>
                    <td><a href="{{ route('users.delete', $user->id) }}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
