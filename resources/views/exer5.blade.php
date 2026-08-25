@extends('layout')
@section('titulo', 'exercicio5')
@section('conteudo')

        <h1>Exercício 5</h1>
        <form method="post" action="/exer5resp">
            <div class="mb-3">
                <label for="nota1" class="form-label">Digite o valor da primeira nota: </label>
                <input type="number" id="nota1" name="nota1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="nota2" class="form-label">Digite o valor da segunda nota: </label>
                <input type="number" id="nota2" name="nota2" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="nota3" class="form-label">Digite o valor da terceira nota: </label>
                <input type="number" id="nota3" name="nota3" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($media)
            <p> Média: {{ $media }} </p>
        @endisset
        
@endsection