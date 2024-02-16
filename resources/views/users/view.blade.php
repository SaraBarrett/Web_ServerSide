@extends('layouts.femaster')~

@section('content')
    <h1> Ver / Actualizar Dados {{ $myUser->name }}</h1>
    <form method="POST" action="{{ route('users.update') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value={{ $myUser->id }} id="">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
            <input type="texto" value="{{ $myUser->name }}" name="name" class="form-control"
                id="exampleFormControlInput1" placeholder="Nome" required>
            @error('name')
                <div class="alert alert-danger">
                    O nome que colocou é inválido.
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input disabled value="{{ $myUser->email }}" type="email" name="email" class="form-control"
                id="exampleFormControlInput1" placeholder="email@exemplo.com" required>
            @error('email')
                <div class="alert alert-danger">
                    O mail que colocou já está registado.
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Morada</label>
            <input value="{{ $myUser->address }}" type="text" name="address" class="form-control"
                id="exampleFormControlInput1">
            @error('address')
                <div class="alert alert-danger">
                    A morada que colocou está inválida.
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Telefone</label>
            <input value="{{ $myUser->phone }}" type="text" name="phone" class="form-control"
                id="exampleFormControlInput1">
            @error('phone')
                <div class="alert alert-danger">
                    O telefone que colocou está inválida.
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">User Photo</label>
            <input accept="image/*" type="file" name="photo" class="form-control" id="exampleFormControlInput1">
            @error('photo')
                <div class="alert alert-danger">
                    Photo Inválida
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-info">Actualizar</button>
    </form>
@endsection
