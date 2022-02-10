<?php

    $numeroInicial = (int) 0;
    $numeroFinal = (int) 500;
    $option = (string) null;
    
    for($numeroInicial; $numeroInicial <= $numeroFinal; $numeroInicial++){
        $option .= '<option value="' . $numeroInicial . '">'.$numeroInicial.'</option>';
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
                        <?=$option?>
                    </select>
                    <select name="numeroFinal" id="">
                        <option value="selecioneUmNumeroFinal">Selecione um número</option>
                    </select>
                </div>
                <input type="submit" value="Calcular" name="btnCalcular" class="btnCalcular">
            </div>
        </form>
        <div class="container-resultados">
            <div class="container-total-pares">
                <p class="p-label">Números pares:</p>
                <div class="container-pares"></div>
                <p>Quantidade de pares:</p>
            </div>
            <div class="container-total-impares">
                <p class="p-label">Números impares: </p>
                <div class="container-impares"></div>
                <p>Quantidade de impares:</p>
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