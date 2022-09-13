<?php

namespace App\Http\Controllers;

use App\Http\Requests\SerieRequest;
use App\Models\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::orderBy('nome')->get();

        $mensagem = $request->session()->get('mensagem');

        return view('series.index', compact('series', 'mensagem'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SerieRequest $request)
    {
        $serie = Serie::create($request->all());

        return redirect()->route('series.index')->with(
            'mensagem',
            "Série '{$serie->nome}' adicionada com sucesso"
        );
    }

    public function edit(Serie $serie)
    {
        return view('series.edit', compact('serie'));
    }

    public function update(Serie $serie, SerieRequest $request)
    {
        $serie->fill($request->all());
        $serie->save();

        return redirect()->route('series.index')->with(
            'mensagem',
            "Série atualizada com sucesso"
        );
    }

    public function destroy(Serie $serie)
    {
        $serie->delete();

        return redirect()->route('series.index')->with(
            'mensagem',
            "Série '{$serie->nome}' removida com sucesso"
        );
    }
}
