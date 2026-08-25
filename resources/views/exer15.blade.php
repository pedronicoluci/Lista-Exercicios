@extends('layout')
@section('titulo', 'exercicio15')
@section('conteudo')

        <h1>Exercício 15</h1>
        <form method="post" action="/exer15resp">
            <div class="mb-3">
                <label for="alt" class="form-label">Digite a altura: </label>
                <input type="number" id="alt" name="alt" class="form-control" step="any" required="">
            </div>
            <div class="mb-3">
                <label for="peso" class="form-label">Digite o peso: </label>
                <input type="number" id="peso" name="peso" class="form-control" step="any" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($imc)
            <p> IMC: {{ $imc }} </p>
        @endisset
        
@endsection