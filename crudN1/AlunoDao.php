<?php

include_once "Aluno.php";
include_once "config.php";

class AlunoDao{

    function inserir(Aluno $aluno){
    
        global $connection;
    
        $sql = $connection-> prepare ("INSERT INTO ALUNO VALUES (?,?,NULL,?,?)");
        $sql-> bind_param("ssds",$p1,$p2,$p3,$p4);
        $p1 = $aluno-> getNome(); 
        $p2 = $aluno-> getDataNasc(); 
        $p3 = $aluno-> getRenda(); 
        $p4 = $aluno-> getEmail(); 
        $sql->execute();
        if($sql->affected_rows>0){
            return true;
        }
    }

    function alterar($aluno){

        global $connection;

        $sql = $connection-> prepare ("UPDATE Aluno SET nome=?,dataNasc=?,renda=?,email=? WHERE ra=?");
        
        $p1 = $aluno-> getNome(); 
        $p2 = $aluno-> getDataNasc(); 
        $p3 = $aluno-> getRenda(); 
        $p4 = $aluno-> getEmail(); 
        $p5 = $aluno-> getRa(); 
        $sql-> bind_param("ssdsi",$p1,$p2,$p3,$p4,$p5);
        $sql->execute();
        if($sql->affected_rows>0){
            return true;

        } 

    }
    
    function excluir($aluno){
        global $connection;
        $sql = $connection-> prepare ("DELETE FROM Aluno WHERE ra=?");
        $sql-> bind_param("i",$p1);
        $p1 = $aluno-> getRa(); 
        $sql->execute();
        if($sql->affected_rows>0){
            return true;
        }
    
    }
    
    

    
    }


?>