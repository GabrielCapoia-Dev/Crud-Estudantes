@extends('layouts.app')

@section('title', 'Lista de Estudantes')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h2>Lista de Estudantes</h2>
    </div>
    <div class="card-body">

        <!-- Verifica se existem salas cadastradas -->
        @if($salas->isEmpty())
        <!-- Modal de alerta -->
        <div class="alert alert-warning">
            <strong>Atenção!</strong> Não há salas cadastradas. Você precisa cadastrar uma sala primeiro.
            <a href="{{ route('salas.create') }}" class="btn btn-warning btn-sm mt-2">Cadastrar Sala</a>
        </div>
        @else
        <a href="{{ route('estudantes.create') }}" class="btn btn-success mb-3">Adicionar Estudante</a>
        @endif

        <!-- Listagem de Estudantes -->
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Data de Nascimento</th>
                    <th>Sala</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estudantes as $estudante)
                <tr>
                    <td>{{ $estudante->nome }}</td>
                    <td>{{ $estudante->cpf }}</td>
                    <td>{{ \Carbon\Carbon::parse($estudante->nascimento)->format('d/m/Y') }}</td>
                    <td>{{ $estudante->sala ? $estudante->sala->nome : 'Nenhuma Sala' }}</td>
                    <td>
                        <a href="{{ route('estudantes.show', $estudante->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('estudantes.edit', $estudante->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('estudantes.destroy', $estudante->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@push('scripts')
<script>
    if (isEmpty($salas))
        alert('Não há salas cadastradas! Você precisa cadastrar uma sala primeiro.');
    endif
</script>
@endpush