@extends('layouts.femaster')
@section('content')
    <h2>Aqui podes adicionar utilizadores</h2>
    <div class="container">
        <form method="POST" action="{{route('users.create')}}">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input type="texto" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Nome"
                    required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                    placeholder="email@exemplo.com" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleFormControlInput1"
                    placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <br>
        <a href="{{ route('home.index') }}"><input type="submit" value="Voltar"></a>
        <br>

    </div>
@endsection
