<?php
include_once "config.php";

global $connection;

if(isset($_GET["ra"])){
    $ra = intval($_GET["ra"]);

    $sql = "SELECT * FROM Aluno WHERE ra=$ra";
    $result = $connection->query($sql);
    $row = $result ->fetch_assoc();

    $ra = $row["ra"];
    $nome = $row["nome"];
    $dataNasc = $row["dataNasc"];
    $dataNasc = new DateTime();
    $email = $row["email"];
    $renda = $row["renda"];
}

   
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="style/style.css" />

    <title>Edição de Cadastro</title>
</head>
<body>
    <!--A classe container é o ponto de partida do bootstrap-->
    <div class="container container-cadastro">

      <!--Card que envolve o conteúdo-->
      <div class="card card-cadastro">
        <div class="card-body">

          <!--Formulário de cadastro de alunos-->
          <form class="row g-3 formulario-cadastro" action="salvarAlteracoes.php" method="post" id="form-cadastro">
            
            <!--Título da Página-->
            <div class="row-md-6" align="Center">
              <h1><b>Cadastro de Aluno</b></h1>
            </div>

            <!-- Input para o ra-->
        
            <!-- Input para o nome do aluno-->
            <div class="row justify-content-center">
              <div class="col">
                <label class="form-label"> <b>Nome do aluno</b> </label>
                <input
                  type="text"
                  class="form-control"
                  id="nome"
                  name="nome"
                  placeholder="Digite o nome do aluno"
                  value="<?php echo $nome?>"
                />
              </div>
            </div>

            <!-- Input para o e-mail-->
            <div class="row justify-content-center">
              <div class="col">
                <label class="form-label"><b>E-mail</b> </label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  id="inputEmail4"
                  placeholder="Digite o e-mail do aluno"
                  value="<?php echo $email?>"
                />
              </div>
            </div>

            <!--Row para data de nascimento e renda-->
            <div class="row justify-content-center">
              <!-- Input para o data de nascimento-->
              <div class="col justify-content-center">
                <label class="form-label"><b>Data de Nascimento</b></label>
                <div class="input-group date" id="datepicker">
                  <input
                    type="text"
                    class="form-control"
                    id="date"
                    name="dataNasc"
                    value="<?php echo $dataNasc ->format('m/d/Y')?>"
                  />
                  <span class="input-group-append">
                    <span class="input-group-text bg-light d-block">
                      <i class="fa fa-calendar"></i>
                    </span>
                  </span>
                </div>
              </div>

              <!--Input para renda-->
              <div class="col">
                <label class="form-label"> <b>Renda do Aluno</b> </label>
                <input
                  type="text"
                  name="renda"
                  id="renda"
                  class="form-control"
                  placeholder="Informe a renda do aluno"
                  value="<?php echo $renda?>"
                />
              </div>
            </div>
            <!--Fim data nascimento e renda-->

            <!--ra-->
            <input type="hidden" name="ra" value=<?php echo $ra;?>>

            <!--Submit Button-->
            <div class="row justify-content-center">
              <div class="col-md-4">
                <button type="submit" class="btn btn-primary btn-lg btn-cadastro">
                  Salvar Alterações
                </button>
              </div>
            </div>

            <!--Alerta - não visível class='d-none'-->
            <div class="alert alert-danger text-center justify-content-center alerta-erro d-none" role="alert">
                  <b>Preencha o campo <span id="campo-erro"></span>!</b>
            </div>

          </form>
          <!--Fim do formulário-->
        </div>
      </div>
    </div>
    <!--Fim da div 'container'-->

 <!--Scripts-->
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
      $(function () {
        $("#datepicker").datepicker();
      });
    </script>
   <script src="scripts/form.js"></script>
</body>

</html>