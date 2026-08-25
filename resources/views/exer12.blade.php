@extends('layout')
@section('titulo', 'exercicio12')
@section('conteudo')

        <h1>Exercício 12</h1>
        <form method="post" action="/exer12resp">
            <div class="mb-3">
                <label for="base" class="form-label">Digite o valor da base: </label>
                <input type="number" id="base" name="base" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="exp" class="form-label">Digite o valor do expoente: </label>
                <input type="number" id="exp" name="exp" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($result)
            <p> Resultado: {{ $result }} </p>
        @endisset
        
@endsection