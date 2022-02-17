<?php

  require_once('../../modolo/config.php');
  require_once('../../modolo/functions.php');

    $multiplicando = (int) 0;
    $maximoMultiplicador = (int) 0;
    $contador = (int) 0;
    $resultado = (string) null;

    if(isset($_POST['btn-calcular'])){

      $multiplicando = $_POST['multiplicando'];
      $maximoMultiplicador = $_POST['maximoMultiplicador'];

      if($multiplicando == '' || $maximoMultiplicador == '' ){
          echo(ERRO_MENSAGEM_CAIXA_VAZIA);
      
      }else{
          if(!is_numeric($multiplicando) || !is_numeric($maximoMultiplicador)){
              echo(ERRO_MENSAGEM_CARACTER_INVALIDO);
          
          }else{
              if($multiplicando == 0 || $maximoMultiplicador == 0){
                echo(ERRO_MENSAGEM_ZERO);
              
              }else{
                  $resultado = gerarTabuada($maximoMultiplicador, $multiplicando);
              }
          }
      }
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../cssHome/menu.css">
    <link rel="stylesheet" href="./cssTabuada/tabuada.css">
    <script src="../../js/home.js" defer></script>
    <title>TABUADA</title>
</head>
<body>
    <div class="formularioTabuadaContainer">
        <form name="formTabuada" class="formTabuada" action="#" method="post">
           <div class="parte-superior"> 
              <div class="label-container">
                <label>Multiplicando:</label>
                <label>Máximo Multiplicador:</label>
              </div>
              <div class="input-container">
                <input type="text" name="multiplicando" value="<?=$multiplicando?>">
                <input type="text" name="maximoMultiplicador" value="<?=$maximoMultiplicador?>">
              </div>
              <input type="submit" value="Calcular" class="btn-calcular" name="btn-calcular">
          </div>
          <div class="resultado-tabuada-container" id="resultado-tabuada-container">
            <?=$resultado?>
          </div>
        </form>
    </div>
    <div class="menu-burger-container">
        <i class="menu-burger"></i>
    </div>
    <div class="menu">
        <ul class="dropdown-menu">
          <li><a href="../../home.html">Home</a></li>
          <li>
            <a href="../media/media.php">Média</a>
          </li>
          <li>
            <a href="../calculadora/calculadora_simples.php">Calculadora</a>
          </li>
          <li><a href="tabuada.php">Tabuada</a></li>
          <li><a href="../parOuImpar/parOuImpar.php">Pares e impares</a></li>
        </ul>
    </div>    
</body>
</html>