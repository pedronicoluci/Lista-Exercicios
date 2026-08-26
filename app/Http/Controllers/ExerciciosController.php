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

    /*Exercício 7*/
    public function abrirFormExer7(){
        return view ('exer7');
    }
    public function respostaExer7(Request $request){
        $tempF = $request->tempF;
        $tempCel = ($tempF - 32) / 1.8;
        return view('exer7', ['tempCel' => $tempCel]);
    }

    /*Exercício 8*/
    public function abrirFormExer8(){
        return view ('exer8');
    }
    public function respostaExer8(Request $request){
        $alt = $request->alt;
        $larg = $request->larg;
        $area = $alt * $larg;
        return view('exer8', ['area' => $area]);
    }

    /*Exercício 9*/
    public function abrirFormExer9(){
        return view ('exer9');
    }
    public function respostaExer9(Request $request){
        $raio = $request->raio;
        $perC = 3.14 * ($raio ** 2);
        return view('exer9', ['perC' => $perC]);
    }

    /*Exercício 10*/
    public function abrirFormExer10(){
        return view ('exer10');
    }
    public function respostaExer10(Request $request){
        $alt = $request->alt;
        $larg = $request->larg;
        $per = 2 * ($alt + $larg);
        return view('exer10', ['per' => $per]);
    }

    /*Exercício 11*/
    public function abrirFormExer11(){
        return view ('exer11');
    }
    public function respostaExer11(Request $request){
        $raio = $request->raio;
        $perC = 2 * 3.14 * $raio;
        return view('exer11', ['perC' => $perC]);
    }

    /*Exercício 12*/
    public function abrirFormExer12(){
        return view('exer12');
    }

    public function respostaExer12(Request $request){
        $base = $request->base;
        $exp = $request->exp;
        $result = $base ** $exp;
        return view('exer12', ['result' => $result]);
    }

    /*Exercício 13*/
    public function abrirFormExer13(){
        return view('exer13');
    }

    public function respostaExer13(Request $request){
        $metros = $request->metros;
        $cent = $metros * 100;
        return view('exer13', ['cent' => $cent]);
    }

     /*Exercício 14*/
    public function abrirFormExer14(){
        return view('exer14');
    }

    public function respostaExer14(Request $request){
        $km = $request->km;
        $milha = $km * 0.621371;
        return view('exer14', ['milha' => $milha]);
    }

    /*Exercício 15*/
    public function abrirFormExer15(){
        return view('exer15');
    }

    public function respostaExer15(Request $request){
        $alt = $request->alt;
        $peso = $request->peso;
        $imc = $peso / ($alt ** 2);
        return view('exer15', ['imc' => $imc]);
    }

    /*Exercício 16*/
    public function abrirFormExer16(){
        return view('exer16');
    }

    public function respostaExer16(Request $request){
        $preco = $request->preco;
        $desc = $request->desc;
        $preco_fin = $preco - (($desc / 100) * $preco);
        return view('exer16', ['preco_fin' => $preco_fin]);
    }

    /*Exercício 17*/
    public function abrirFormExer17(){
        return view('exer17');
    }

    public function respostaExer17(Request $request){
        $capital = $request->capital;
        $taxa = $request->taxa;
        $periodo = $request->periodo;
        $juros_simples = $capital * ($taxa / 100) * $periodo;
        return view('exer17', ['juros_simples' => $juros_simples]);
    }

    /*Exercício 18*/
    public function abrirFormExer18(){
        return view('exer18');
    }

    public function respostaExer18(Request $request){
        $capital = $request->capital;
        $taxa = $request->taxa;
        $periodo = $request->periodo;
        $montante = $capital * (($taxa / 100 + 1) ** $periodo);
        return view('exer18', ['montante' => $montante]);
    }

    /*Exercício 19*/
    public function abrirFormExer19(){
        return view('exer19');
    }

    public function respostaExer19(Request $request){
        $dias = $request->dias;
        $tempo = ($dias * 24) . " horas, " . ($dias * 24 * 60) . " minutos e " . ($dias * 24 * 60 * 60) . " segundos";
        return view('exer19', ['tempo' => $tempo]);
    }

    /*Exercício 20*/
    public function abrirFormExer20(){
        return view('exer20');
    }

    public function respostaExer20(Request $request){
        $distancia = $request->distancia;
        $tempo = $request->tempo;
        $velocidade = $distancia / $tempo;
        return view('exer20', ['velocidade' => $velocidade]);
    }

}