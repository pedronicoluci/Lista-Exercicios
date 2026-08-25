@extends('layout')
@section('titulo', 'exercicio2')
@section('conteudo')

        <h1>Exercício 2</h1>
        <form method="post" action="/exer2resp">
            <div class="mb-3">
                <label for="valor1" class="form-label">Digite o primeiro valor: </label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor2" class="form-label">Digite o segundo valor: </label>
                <input type="number" id="valor2" name="valor2" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($result)
            <p> Resultado: {{ $result }} </p>
        @endisset
        
@endsection