

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar perfil</h1>
        <form action="{{ route('perfil.actualitzar') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nom:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
            </div>
            <!-- Altres camps del perfil aquí -->
            <button type="submit" class="btn btn-primary">Actualitzar perfil</button>
        </form>
    </div>
@endsection
