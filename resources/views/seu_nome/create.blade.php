@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Novo Registro</h1>

        <form action="{{ route('seu_nome.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="number" name="idade" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection
