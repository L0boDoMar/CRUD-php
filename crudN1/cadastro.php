<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php
    include_once "Aluno.php";
    include 'AlunoDao.php';
   $ra = NULL;
   $nome=$_POST["nome"];
   $formato = "m/d/Y";
   $dataNasc = DateTime::createFromFormat($formato,$_POST["dataNasc"]);
   $renda = floatval($_POST["renda"]);
   $email=$_POST["email"];
   $Aluno = new Aluno($ra, $nome, $dataNasc->format("Y-m-d"), $renda, $email);
   $dao = new AlunoDao();
    if ($dao -> inserir($Aluno)){
        echo "Inserido com sucesso";
    } else{
        echo "Ocorreu um erro na inserção";
    };

    header("location: index.php");
    exit;
    ?>
</body>
</html>