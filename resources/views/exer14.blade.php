@extends('layout')
@section('titulo', 'exercicio14')
@section('conteudo')

        <h1>Exercício 14</h1>
        <form method="post" action="/exer14resp">
            <div class="mb-3">
                <label for="km" class="form-label">Digite o valor em quilômetros: </label>
                <input type="number" id="km" name="km" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($milha)
            <p> Valor em milhas: {{ $milha }} </p>
        @endisset
        
@endsection