@extends('components.layout')

@section('titulo', 'Adicionar Série')

@section('conteudo')
    <form action="{{ route('series.store') }}" method="post">
        @csrf
        <div>
            <label for="nome" class="form-label">Nome</label>
            <input
                type="text"
                class="form-control"
                id="nome"
                name="nome"
                value="{{ old('nome') }}"
            >
        </div>

        <button type="submit" class="btn btn-primary mt-2">Salvar</button>
    </form>
@endsection
