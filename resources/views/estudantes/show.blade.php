@extends('layouts.app')

@section('title', 'Detalhes do Estudante')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h2>Detalhes do Estudante</h2>
    </div>
    <div class="card-body">
        <p><strong>Nome:</strong> {{ $estudante->nome }}</p>
        <p><strong>CPF:</strong> {{ $estudante->cpf }}</p>
        <p><strong>Data de Nascimento:</strong> {{ \Carbon\Carbon::parse($estudante->nascimento)->format('d/m/Y') }}</p>
        <p><strong>Sala:</strong> {{ $estudante->sala ? $estudante->sala->nome : 'Nenhuma Sala' }}</p> <!-- Nome da Sala -->
        <a href="{{ route('estudantes.index') }}" class="btn btn-primary">Voltar</a>
    </div>
</div>
@endsection