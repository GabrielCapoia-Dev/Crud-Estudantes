@extends('layouts.app')

@section('title', 'Editar Sala')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h2>Editar Sala</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('salas.update', $sala->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nome" class="form-label">Nome da Sala</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $sala->nome }}" required>
            </div>

            <button type="submit" class="btn btn-warning">Atualizar Sala</button>
        </form>
    </div>
</div>
@endsection