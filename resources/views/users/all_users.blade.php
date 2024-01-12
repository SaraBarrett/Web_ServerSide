@extends('layouts.femaster')
@section('content')
    <h3>Olá, sou todos os users</h3>

    <p>{{ $hello }}</p>
    <p>{{ $helloAgain }}</p>
    <p>{{ $daysOfWeek[2] }}</p>
@endsection
