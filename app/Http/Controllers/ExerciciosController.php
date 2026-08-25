<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LDAP\Result;

class ExerciciosController extends Controller
{
    /*Exercício 1*/

    public function abrirFormExer1(){
        return view('exer1');
    }

    public function respostaExer1(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $result = $valor1 + $valor2;
        return view('exer1', ['result' => $result]);
    }

    /*Exercício 2*/

    public function abrirFormExer2(){
        return view('exer2');
    }

    public function respostaExer2(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $result = $valor1 - $valor2;
        return view('exer2', ['result' => $result]);
    }

    /*Exercício 3*/

    public function abrirFormExer3(){
        return view('exer3');
    }

    public function respostaExer3(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $result = $valor1 * $valor2;
        return view('exer3', ['result' => $result]);
    }

    /*Exercício 4*/

    public function abrirFormExer4(){
        return view('exer4');
    }

    public function respostaExer4(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $result = $valor1 / $valor2;
        return view('exer4', ['result' =>$result]);
    }

    /*Exercício 5*/

    public function abrirFormExer5(){
        return view('exer5');
    }

    public function respostaExer5(Request $request){
        $nota1 = $request->nota1;
        $nota2 = $request->nota2;
        $nota3 = $request->nota3;
        $media = ($nota1 + $nota2 + $nota3) / 3;
        return view('exer5', ['media' => $media]);
    }

    /*Exercício 6*/
    public function abrirFormExer6(){
        return view('exer6');
    }

    public function respostaExer6(Request $request){
        $tempCel = $request->tempCel;
        $tempF = ($tempCel * 1.8) + 32;
        return view('exer6', ['tempF' => $tempF]);
    }
}