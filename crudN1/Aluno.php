<?php

class Aluno{

//Atributos: nome, data de nascimento, ra(chave primária), renda, email
private $ra;
private $nome;
private $dataNasc;
private $renda;
private $email;

//construtor da classe
function __construct($ra,$nome,$dataNasc, $renda, $email){

    $this->ra = $ra;
    $this->nome = $nome;
    $this->dataNasc = $dataNasc;
    $this->renda = $renda;
    $this->email = $email;

    }

//métodos get e set
function getRa(){
    return $this -> ra;
}

function setRa($ra){
    $this -> ra;
}

function getNome(){
    return $this -> nome;
}

function setNome($nome){
    $this -> nome;
}

function getDataNasc(){
    return $this -> dataNasc;
}

function setDataNasc($dataNasc){
    $this -> dataNasc;
}

function getRenda(){
    return $this -> renda;
}

function setRenda($renda){
    $this -> renda;
}

function getEmail(){
    return $this -> email;
}

function setEmail($email){
    $this -> email;
}

}

?>