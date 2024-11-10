@extends('layouts.app')

@section('title', 'Lista de Salas')

@section('content')
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h2 class="text-center">Salas</h2>
        </div>
        <div class="card-body">
            <!-- Botão para Adicionar Nova Sala -->
            <a href="{{ route('salas.create') }}" class="btn btn-success mb-3">Adicionar Sala</a>

            <!-- Tabela de Salas -->
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($salas as $sala)
                        <tr>
                            <th scope="row">{{ $sala->id }}</th>
                            <td>{{ $sala->nome }}</td>
                            <td>
                                <!-- Botões para Ações -->
                                <a href="{{ route('salas.edit', $sala->id) }}" class="btn btn-warning btn-sm">Editar</a>

                                <!-- Formulário para Deletar -->
                                <form action="{{ route('salas.destroy', $sala->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
