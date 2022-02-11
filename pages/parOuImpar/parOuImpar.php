<?php
    require_once('../../modolo/config.php');
    require_once('../../modolo/functions.php');

    $numeroInicial = (int) 0;
    $numeroFinal = (int) 500;

    $resultadoPares = (string) null;
    $resultadoImpares = (string) null;
    $contagemPares = (string) null;
    $contagemImpares = (string) null;

    $acumuladorOptionPares = gerarOptions(0, 500);
    $acumuladorOptionImpares = gerarOptions(100, 1000);

    if(isset($_POST['btnCalcular'])){

        $numeroInicial = $_POST['numeroInicial'];
        $numeroFinal = $_POST['numeroFinal'];

        if(!is_numeric($numeroInicial) || !is_numeric($numeroFinal)){

            echo(ERRO_MENSAGEM_ESCOLHER_NUMERO);
        
        }else{

            if($numeroInicial >= $numeroFinal){
                echo(ERRO_MENSAGEM_ORDEM_VALORES);
            
            }else{
                $resultadoPares = definirParesEImpares($numeroInicial, $numeroFinal, 0);
                $resultadoImpares = definirParesEImpares($numeroInicial, $numeroFinal, 1);

                $contagemPares = contarParesEImpares($numeroInicial, $numeroFinal, 0);
                $contagemImpares = contarParesEImpares($numeroInicial, $numeroFinal, 1);

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
    <link rel="stylesheet" href="./cssParOuImpar/parOuImpar.css">
    <script src="../../js/home.js" defer></script>
    <title>Pares ou Impares</title>
</head>
<body>
    <div class="form-container">
        <form action="#" name="formularioParImpar" method="POST">
            <div class="parte-superior">
                <div class="label-container">
                    <label>Nº inicial:</label>
                    <label>Nº final:</label>
                </div>
                <div class="select-container">
                    <select name="numeroInicial" id="">
                        <option value="selecioneUmNumeroInicial">Selecione um número</option>
                        <?=$acumuladorOptionPares?>
                    </select>
                    <select name="numeroFinal" id="">
                        <option value="selecioneUmNumeroFinal">Selecione um número</option>
                        <?=$acumuladorOptionImpares?>
                    </select>
                </div>
                <input type="submit" value="Calcular" name="btnCalcular" class="btnCalcular">
            </div>
        </form>
        <div class="container-resultados">
            <div class="container-total-pares">
                <p class="p-label">Números pares:</p>
                <div class="container-pares"><?=$resultadoPares?></div>
                <p>Quantidade de pares: <?=$contagemPares?></p>
            </div>
            <div class="container-total-impares">
                <p class="p-label">Números impares: </p>
                <div class="container-impares"><?=$resultadoImpares?></div>
                <p>Quantidade de impares: <?=$contagemImpares?></p>
            </div>
        </div>
    </div>
    <div class="menu-burger-container">
        <i class="menu-burger"></i>
    </div>
    <div class="menu">
        <ul class="dropdown-menu">
          <li><a href="../../home.html">Home</a></li>
          <li>
            <a href="">Média</a>
          </li>
          <li>
            <a href="">Calculadora</a>
          </li>
          <li><a href="../tabuada/tabuada.php">Tabuada</a></li>
          <li><a href="parOuImpar.php">Pares e impares</a></li>
        </ul>
    </div>
</body>
</html>