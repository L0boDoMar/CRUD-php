<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão</title>
</head>
<body>
    <?php
    include_once "Aluno.php";
    include_once "AlunoDao.php";

    if(isset($_GET["ra"])){

    $ra = intval($_GET["ra"]);
    $aluno = new Aluno($ra,NULL,NULL,NULL,NULL);
    $aluno->setRa($ra);
    $dao= new AlunoDao();
    $dao->excluir($aluno);
    }

    header("location: index.php");
    exit;
    ?>
</body>
</html>