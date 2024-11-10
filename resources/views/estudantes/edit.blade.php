@extends('layouts.app')

@section('title', 'Editar Estudante')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h2>Editar Estudante</h2>
    </div>
    <div class="card-body">
        <form id="formEstudante" action="{{ route('estudantes.update', $estudante->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $estudante->nome }}" required>
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $estudante->cpf }}" required maxlength="14" inputmode="numeric">
            </div>
            <div class="mb-3">
                <label for="nascimento" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="nascimento" name="nascimento" value="{{ $estudante->nascimento }}" required>
            </div>
            <button type="submit" class="btn btn-warning">Atualizar</button>
        </form>
    </div>
</div>


<script>
    function mascaraCPF(cpf) {
        cpf = cpf.replace(/\D/g, '')
        cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2')
        cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2')
        cpf = cpf.replace(/(\d{3})(\d{1,2})$/, '$1-$2')
        return cpf
    }

    document.getElementById('cpf').addEventListener('input', function() {
        var cpf = this.value
        this.value = mascaraCPF(cpf)
    })

    document.getElementById('cpf').addEventListener('keypress', function(event) {
        if (!/[0-9]/.test(event.key)) {
            alert('Por favor, insira apenas números no campo CPF.')
            event.preventDefault()
        }
    })

    document.getElementById('formEstudante').addEventListener('submit', function(event) {
        var cpfInput = document.getElementById('cpf')
        var cpf = cpfInput.value.replace(/\D/g, '')

        if (cpf.length !== 11) {
            alert('O CPF deve conter 11 dígitos numéricos.')
            event.preventDefault()
        } else {
            cpfInput.value = mascaraCPF(cpfInput.value)
        }
    })
</script>

@endsection