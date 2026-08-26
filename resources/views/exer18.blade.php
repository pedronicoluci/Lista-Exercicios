@extends('layout')
@section('titulo', 'exercicio18')
@section('conteudo')

        <h1>Exercício 18</h1>
        <form method="post" action="/exer18resp">
            <div class="mb-3">
                <label for="capital" class="form-label">Digite o capital: </label>
                <input type="number" id="capital" name="capital" class="form-control" step="any" required="">
            </div>
            <div class="mb-3">
                <label for="taxa" class="form-label">Digite a taxa de juros: </label>
                <input type="number" id="taxa" name="taxa" class="form-control" step="any" required="">
            </div>
            <div class="mb-3">
                <label for="periodo" class="form-label">Digite o período: </label>
                <input type="number" id="periodo" name="periodo" class="form-control" step="any" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($montante)
            <p> Montante: {{ $montante }} </p>
        @endisset
        
@endsection