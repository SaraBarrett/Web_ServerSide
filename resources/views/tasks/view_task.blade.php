@extends('layouts.femaster')

@section('content')
    <h1>Nossa tarefa</h1>
    <h4>{{ $myTask->usname }}</h4>
    <h4>{{ $myTask->name }}</h4>
    <h4>{{ $myTask->description }}</h4>
@endsection
