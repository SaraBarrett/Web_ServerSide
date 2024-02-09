@extends('layouts.femaster')

@section('content')
    <div class="container">
        <br>
        <h2>Adicionar Tarefas</h2>
        <br>
        <form method="POST" action="{{ route('tasks.create') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input type="text" value="{{ old('name') }}" name="name" class="form-control"
                    id="exampleFormControlInput1" placeholder="Nome" required>
                @error('name')
                    <div class='alert alert-danger'>
                        Tarefa inválida
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Descrição</label>
                <input type="text" value="{{ old('description') }}" name = "description" class="form-control"
                    id="exampleFormControlInput1">
                @error('description')
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
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">
                            {{ $user->name }} </option>
                    @endforeach 
                </select>

            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <br>
        <a class= "btn btn-success" href="{{ route('home.index') }}">Voltar</a>
        <br>
        <br>

    </div>
@endsection
