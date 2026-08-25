@extends('layout')
@section('titulo', 'exercicio6')
@section('conteudo')

        <h1>Exercício 6</h1>
        <form method="post" action="/exer6resp">
            <div class="mb-3">
                <label for="tempCel" class="form-label">Digite o valor em Celsius: </label>
                <input type="number" id="tempCel" name="tempCel" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($tempF)
            <p> Temperatura em Fahrenheit: {{ $tempF }} </p>
        @endisset
        
@endsection