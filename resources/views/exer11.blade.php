@extends('layout')
@section('titulo', 'exercicio11')
@section('conteudo')

        <h1>Exercício 11</h1>
        <form method="post" action="/exer11resp">
            <div class="mb-3">
                <label for="raio" class="form-label">Digite o raio do circulo: </label>
                <input type="number" id="raio" name="raio" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($perC)
            <p> Perímetro do círculo: {{ $perC }} </p>
        @endisset
        
@endsection