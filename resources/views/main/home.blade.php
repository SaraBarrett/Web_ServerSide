@extends('layouts.femaster')
@section('content2')
    segundo conteúdo
@endsection
@section('content')
    <h3>Hello World,estamos nas Views.</h3>
    <h5>Tens disponiveis estes links:</h5>
    <ul>
        <li><a href="{{ route('bemvindos') }}">Vai para casa!</a></li>
        <li><a href="{{ route('users.all') }}">Todos os Utilizadores</a></li>
        <li><a href="{{ route('users.add') }}">Aqui podes adicionar users!</a></li>
    </ul>
@endsection
@section('content2')
    <h2>outro conteúdo</h2>
@endsection
