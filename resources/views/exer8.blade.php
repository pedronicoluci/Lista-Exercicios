@extends('layout')
@section('titulo', 'exercicio8')
@section('conteudo')

        <h1>Exercício 8</h1>
        <form method="post" action="/exer8resp">
            <div class="mb-3">
                <label for="alt" class="form-label">Digite a altura do retângulo: </label>
                <input type="number" id="alt" name="alt" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="larg" class="form-label">Digite a largura do retângulo: </label>
                <input type="number" id="larg" name="larg" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($area)
            <p> Área do retângulo: {{ $area }} </p>
        @endisset
        
@endsection