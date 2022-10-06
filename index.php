<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio de Orientacao a Objetos</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<style>
    .gabriel {
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-gap: 30px;
    }
    h1 {
      text-align: center;
    }
    .gabriel__btn {
      display: grid;
    }
</style>
</head>
<body>
<div><h1>Cadastrar Lutador</h1></div>
<form method="POST" class="gabriel container" action="obrigado.php">
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome">
  </div>
  <div class="mb-3">
    <label for="nacionalidade" class="form-label">Nacionalidade</label>
    <input type="text" class="form-control" id="nacionalidade" name="nacionalidade">
  </div>
  <div class="mb-3">
    <label for="dataNascimento" class="form-label">Data Nascimento</label>
    <input type="date" class="form-control" id="dataNascimento" name="dataNascimento">
  </div>
  <div class="mb-3">
    <label for="altura" class="form-label">Altura</label>
    <input type="number" class="form-control" id="altura" name="altura">
  </div>
  <div class="mb-3">
    <label for="peso" class="form-label">Peso</label>
    <input type="number" class="form-control" id="peso" name="peso">
  </div>
  <div class="mb-3">
    <label for="vitorias" class="form-label">Vitorias</label>
    <input type="number" class="form-control" id="vitorias" name="vitorias">
  </div>
  <div class="mb-3">
    <label for="derrotas" class="form-label">Derrotas</label>
    <input type="number" class="form-control" id="derrotas" name="derrotas">
  </div>
  <div class="mb-3">
    <label for="empates" class="form-label">Empates</label>
    <input type="number" class="form-control" id="empates" name="empates">
  </div>
  <div><button type="submit" name="submit" class="btn btn-primary">Cadastrar Lutador</button></div>

  <?php
    require_once 'Lutador.php';
    //array de lutadores a serem cadastrados
    $lutadores = [];
    if(isset($_POST['submit'])){
      $nome = $_POST['nome'];
      $nacionalidade = $_POST['nacionalidade'];
      $dataNascimento = (int) $_POST['dataNascimento'];
      $altura = $_POST['altura'];
      $peso = $_POST['peso'];
      $vitorias = $_POST['vitorias'];
      $derrotas = $_POST['derrotas'];
      $empates = $_POST['empates'];
  
      $lutadores[$count] = new Lutador($nome, $nacionalidade,$dataNascimento,$altura,$peso,$vitorias,$derrotas,$empates);
      $count++;
      echo '<h3>Quantidade de Lutadores Cadastrados: '. $count.'</h3>';
    }
  ?>
</form>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

