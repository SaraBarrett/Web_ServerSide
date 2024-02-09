@extends('layouts.femaster')

@section('content')
    <h1>Nossa tarefa</h1>
    <form method="POST" action="{{ route('tasks.update') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $myTask->id }}" id="">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
            <input type="text" value="{{ $myTask->name }}" name="name" class="form-control"
                id="exampleFormControlInput1" placeholder="Nome" required>
            @error('name')
                <div class='alert alert-danger'>
                    Tarefa inválida
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Descrição</label>
            <input type="text" value="{{ $myTask->description }}" name = "description" class="form-control"
                id="exampleFormControlInput1">
            @error('description')
                <div class='alert alert-danger'>
                    Tarefa inválida
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Prazo</label>
            <input type="date" value="{{ $myTask->description }}" name ="due_at" class="form-control"
                id="exampleFormControlInput1">
            @error('due_at')
                <div class='alert alert-danger'>
                    Tarefa inválida
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">User ID</label>
            {{-- <input type="number" name="user_id" id="">
            @error('user_id')
                Não pode atribuir a tarefa a este user!
            @enderror --}}
            <select name="user_id" id="">
                <option value="" selected> Seleccione um User</option>
                @foreach ($users as $user)
                    <option @if ($user->id == $myTask->user_id) selected @endif value="{{ $user->id }}">
                        {{ $user->name }} </option>
                @endforeach
            </select>

        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
