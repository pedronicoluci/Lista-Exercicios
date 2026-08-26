@extends('layout')
@section('titulo', 'exercicio19')
@section('conteudo')

        <h1>Exercício 19</h1>
        <form method="post" action="/exer19resp">
            <div class="mb-3">
                <label for="dias" class="form-label">Digite a quantidade em dias: </label>
                <input type="number" id="dias" name="dias" class="form-control" step="any" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($tempo)
            <p> Quantidade em horas, minutos e segundos: {{ $tempo }} </p>
        @endisset
        
@endsection