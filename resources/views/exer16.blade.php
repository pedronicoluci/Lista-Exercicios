@extends('layout')
@section('titulo', 'exercicio16')
@section('conteudo')

        <h1>Exercício 16</h1>
        <form method="post" action="/exer16resp">
            <div class="mb-3">
                <label for="preco" class="form-label">Digite o preço original: </label>
                <input type="number" id="preco" name="preco" class="form-control" step="any" required="">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Digite a porcentagem de desconto: </label>
                <input type="number" id="desc" name="desc" class="form-control" step="any" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($preco_fin)
            <p> Preço final: {{ $preco_fin }} </p>
        @endisset
        
@endsection