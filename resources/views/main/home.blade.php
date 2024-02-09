@extends('layouts.femaster')
@section('content2')
    segundo conteúdo
@endsection
@section('content')
    <h3>Hello World,estamos nas Views.</h3>
    @auth
        <h3> Olá, {{ Auth::user()->name }}</h3>

    @endauth
    <h5>Tens disponiveis estes links:</h5>
    <ul>
        <li><a href="{{ route('bemvindos') }}">Vai para casa!</a></li>
        <li><a href="{{ route('users.all') }}">Todos os Utilizadores</a></li>
        <li><a href="{{ route('users.add') }}">Aqui podes adicionar users!</a></li>
        <li><a href="{{ route('tasks.all') }}">Todas as Tarefas</a></li>
    </ul>


    {{-- <h2>Dados do Cesae</h2>
    <p>Nome:{{ $info['name'] }}</p>
    <p>Morada:{{ $info['address'] }}</p>
    <p>Email:{{ $info['email'] }}</p> --}}
@endsection
@section('content2')
    <h2>outro conteúdo</h2>
@endsection
