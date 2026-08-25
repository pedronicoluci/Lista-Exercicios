@extends('layout')
@section('titulo', 'exercicio7')
@section('conteudo')

        <h1>Exercício 7</h1>
        <form method="post" action="/exer7resp">
            <div class="mb-3">
                <label for="tempF" class="form-label">Digite o valor em Fahrenheit: </label>
                <input type="number" id="tempF" name="tempF" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($tempCel)
            <p> Temperatura em Celsius: {{ $tempCel }} </p>
        @endisset
        
@endsection