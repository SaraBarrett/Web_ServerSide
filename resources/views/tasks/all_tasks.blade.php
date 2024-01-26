@extends('layouts.femaster')
@section('content')
    <h1>Olá, sou tarefas</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tarefa</th>
                <th scope="col">Descrição</th>
                <th scope="col">Data</th>
                <th scope="col">Estado</th>
                <th scope="col">Nome</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $item)
                <tr>
                    <td scope="row">{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->due_at }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->usname }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
