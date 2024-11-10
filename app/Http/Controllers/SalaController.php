<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use Illuminate\Http\Request;

class SalaController extends Controller
{
    /**
     * Busca todas as salas no banco
     * Retorna a view com as salas
     */
    public function index()
    {
        $salas = Sala::all();
        return view('salas.index', compact('salas'));
    }


    /**
     * Retorna a view do formulário de criação
     */
    public function create()
    {
        return view('salas.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        Sala::create($validated);

        return redirect()->route('salas.index')->with('success', 'Sala criada com sucesso!');
    }


    /**
     * Retorna a view com os detalhes da sala
     */
    public function show(Sala $sala)
    {
        return view('salas.show', compact('sala'));
    }


    /**
     * Retorna a view do formulário de edição
     */
    public function edit($id)
    {
        $sala = Sala::findOrFail($id);
        return view('salas.edit', compact('sala'));
    }


    /**
     * Atualiza os dados no banco
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $sala = Sala::findOrFail($id);

        $sala->update($validated);

        return redirect()->route('salas.index')->with('success', 'Sala atualizada com sucesso!');
    }


    /**
     * Exclui a sala do banco
     */
    public function destroy(Sala $id)
    {
        $id->delete();

        return redirect()->route('salas.index')->with('success', 'Sala excluída com sucesso!');
    }
}
