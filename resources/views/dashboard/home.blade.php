@extends('layouts.femaster')


@section('content')
    <h1>Olá,
        @auth
            {{ Auth::user()->name }}
        @endauth estás no Back Office.
    </h1>

    @auth

        @if ($message)
            <div class="alert alert-success">
                <h4>Boa, és admin desta app.</h4>
            </div>
        @endif
    @endauth
@endsection
