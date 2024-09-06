<?php

namespace App\Http\Controllers;

use App\Models\SeuNome;
use Illuminate\Http\Request;

class GabrielController extends Controller
{
    // Listar todos os registros
    public function index()
    {
        $registros = SeuNome::all();
        return view('seu_nome.index', compact('registros'));
    }

    // Exibir formulário de criação
    public function create()
    {
        return view('seu_nome.create');
    }

    // Armazenar um novo registro
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'idade' => 'required|integer',
        ]);

        SeuNome::create($request->all());

        return redirect()->route('seu_nome.index')
                        ->with('success', 'Registro criado com sucesso.');
    }

    // Exibir um único registro
    public function show(SeuNome $seuNome)
    {
        return view('seu_nome.show', compact('seuNome'));
    }

    // Exibir formulário de edição
    public function edit(SeuNome $seuNome)
    {
        return view('seu_nome.edit', compact('seuNome'));
    }

    // Atualizar um registro existente
    public function update(Request $request, SeuNome $seuNome)
    {
        $request->validate([
            'nome' => 'required',
            'idade' => 'required|integer',
        ]);

        $seuNome->update($request->all());

        return redirect()->route('seu_nome.index')
                        ->with('success', 'Registro atualizado com sucesso.');
    }

    // Excluir um registro
    public function destroy(SeuNome $seuNome)
    {
        $seuNome->delete();

        return redirect()->route('seu_nome.index')
                        ->with('success', 'Registro excluído com sucesso.');
    }
}
