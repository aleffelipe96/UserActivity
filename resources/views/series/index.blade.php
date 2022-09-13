@extends('components.layout')

@section('titulo', 'Séries')

@section('conteudo')
    <a href="{{ route('series.create') }}" class="btn btn-primary mb-2">Adicionar</a>

    @isset($mensagem)
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endisset

    <ul class="list-group mb-5">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $serie->nome }}

                <span class="d-flex">
                    <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-secondary me-1">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>

                    <form action="{{ route('series.destroy', $serie->id) }}" method="post">
                        @csrf
                        <button class="btn btn-danger">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </form>
                </span>
            </li>
        @endforeach
    </ul>
@endsection
