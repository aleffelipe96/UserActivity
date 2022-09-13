@extends('components.layout')

@section('titulo', "Editar $serie->nome")

@section('conteudo')
    <form action="{{ route('series.update', $serie->id) }}" method="post">
        @csrf
        <div>
            <label for="nome" class="form-label">Nome</label>
            <input
                type="text"
                class="form-control"
                id="nome"
                name="nome"
                value="{{ $serie->nome }}"
            >
        </div>

        <button type="submit" class="btn btn-primary mt-2">Salvar</button>
    </form>
@endsection
