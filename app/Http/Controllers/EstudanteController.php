<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use App\Models\Sala;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    /**
     * Busca todos os estudantes para exibir na lista.
     * Passa as salas para a view
     */
    public function index()
    {
        $estudantes = Estudante::all();
        $salas = Sala::all();
        return view('estudantes.index', compact('estudantes', 'salas'));
    }


    /**
     * Exibe o formulário para criar um novo estudante.
     * Obtém todas as salas
     * Passa as salas para a view
     */
    public function create()
    {
        $salas = Sala::all();
        return view('estudantes.create', compact('salas'));
    }


    /**
     * Armazena um novo estudante.
     */
    public function store(Request $request)
    {
        // Validação
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:14|unique:estudantes',
            'nascimento' => 'required|date',
            'sala_id' => 'required|exists:salas,id',
        ]);

        // Criação do estudante
        Estudante::create([
            'nome' => $validated['nome'],
            'cpf' => $validated['cpf'],
            'nascimento' => $validated['nascimento'],
            'sala_id' => $validated['sala_id'],
        ]);

        return redirect()->route('estudantes.index')->with('success', 'Estudante criado com sucesso!');
    }



    /**
     * Exibe os detalhes de um estudante específico.
     */
    public function show(Estudante $estudante)
    {
        return view('estudantes.show', compact('estudante'));
    }

    /**
     * Exibe o formulário para editar um estudante existente.
     */
    public function edit(Estudante $estudante)
    {
        return view('estudantes.edit', compact('estudante'));
    }

    /**
     * Atualiza as informações de um estudante.
     */
    public function update(Request $request, Estudante $estudante)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:14|unique:estudantes,cpf,' . $estudante->id,
            'nascimento' => 'required|date',
        ]);

        $estudante->update($validated);

        return redirect()->route('estudantes.index')->with('success', 'Estudante atualizado com sucesso!');
    }

    /**
     * Deleta um estudante selecionado.
     */
    public function destroy(Estudante $estudante)
    {
        $estudante->delete();

        return redirect()->route('estudantes.index')->with('success', 'Estudante excluído com sucesso!');
    }
}
