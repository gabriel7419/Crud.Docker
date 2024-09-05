@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Registro</h1>

        <form action="{{ route('seu_nome.update', $seuNome->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" class="form-control" value="{{ $seuNome->nome }}" required>
            </div>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="number" name="idade" class="form-control" value="{{ $seuNome->idade }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
@endsection
    