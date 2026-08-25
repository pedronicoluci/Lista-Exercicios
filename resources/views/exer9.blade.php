@extends('layout')
@section('titulo', 'exercicio9')
@section('conteudo')

        <h1>Exercício 9</h1>
        <form method="post" action="/exer9resp">
            <div class="mb-3">
                <label for="raio" class="form-label">Digite o raio do circulo: </label>
                <input type="number" id="raio" name="raio" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($areaC)
            <p> Área do círculo: {{ $areaC }} </p>
        @endisset
        
@endsection