@extends('layout')
@section('titulo', 'exercicio20')
@section('conteudo')

        <h1>Exercício 20</h1>
        <form method="post" action="/exer20resp">
            <div class="mb-3">
                <label for="distancia" class="form-label">Digite a distância: </label>
                <input type="number" id="distancia" name="distancia" class="form-control" step="any" required="">
            </div>
            <div class="mb-3">
                <label for="tempo" class="form-label">Digite o tempo: </label>
                <input type="number" id="tempo" name="tempo" class="form-control" step="any" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($velocidade)
            <p> Velocidade: {{ $velocidade }} </p>
        @endisset
        
@endsection