@extends('layouts.app')

@section('title', 'Criar Sala')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h2>Criar Sala</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('salas.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome da Sala</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</div>
@endsection
