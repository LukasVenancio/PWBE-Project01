<?php
	/**************************************************************
	 * 	Comandos para fazer importação de funções:
	 * 
	 *			 include()
	 *			 require()
	 * 
	 * 	Quando utilizamos o complemento _once nesses comando fazemos 
	 * com que que seja impossível o servidor importar essas funções 
	 * novamente para que não ocupe memória desnecessária 
	 * 
	 * 			include_once()
	 * 			require_once()
	 ****************************************************************/
	require_once('../../modolo/config.php');
    require_once('../../modolo/functions.php');

	$valor1 = (double) 0;
	$valor2 = (double) 0;
	$opcao = (string) null;
	$resultado = (double) 0;

	// comando settype permite definir o tipo que se deseja que uma variável receba

	//Validação para detectar se o botão calcular foi clicado e se as variáveis foram postadas
	if(isset($_POST['btncalc'])){
		
		$valor1 = $_POST['txtn1'];
		$valor2 = $_POST['txtn2'];

		//Validção para saber se as caixas de texto foram preenchidas
		if($_POST['txtn1'] == "" || $_POST['txtn2'] == "")
			echo(ERRO_MENSAGEM_CAIXA_VAZIA);
		else{
			//Validação para saber se a o operação foi selecionada
			if(!isset($_POST['rdocalc']))
				echo(ERRO_MENSAGEM_OPERACAO_NAO_SELECIONADA);
			else{
				//Para saber se foram digitados apenas números
				if(!is_numeric($valor1) || !is_numeric($valor2) )
					echo(ERRO_MENSAGEM_CARACTER_INVALIDO);
				else{
					// strtoupper() Converte textos para maiúsculas
					// strtolower() Converte textos para minúsculas
					$opcao = strtolower($_POST['rdocalc']);

					$resultado = operacaoMatematica($valor1, $valor2, $opcao);
				}
			}
			
		}
	}
?>
<html>
    <head>
        <title>Calculadora - Simples</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="../../cssHome/menu.css">
		<script src="../../js/home.js" defer></script>
    </head>
	<body>
        
        <div id="conteudo">
            <div id="titulo">
                Calculadora Simples
            </div>

            <div id="form">
                <form name="frmcalculadora" method="post" action="">
						Valor 1:<input type="text" name="txtn1" value="<?=$valor1;?>" > <br>
						Valor 2:<input type="text" name="txtn2" value="<?=$valor2;?>" > <br>
						<div id="container_opcoes">

							<!-- Estrutura de decisão ternária para determinar qual radio deve permanecer com o checked -->
							<input type="radio" name="rdocalc" value="somar" <?=$opcao == 'somar'?'checked':null;?> >Somar <br>
							<input type="radio" name="rdocalc" value="subtrair" <?=$opcao == 'subtrair'?'checked':null;?>>Subtrair <br>
							<input type="radio" name="rdocalc" value="multiplicar" <?=$opcao == 'multiplicar'?'checked':null;?> >Multiplicar <br>
							<input type="radio" name="rdocalc" value="dividir" <?=$opcao == 'dividir'?'checked':null;?>>Dividir <br>
							
							<input type="submit" name="btncalc" value ="Calcular" >
							
						</div>	
						<div id="resultado">
						<?=$resultado?>
						</div>
					</form>
			</div>
			
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
				<a href="calculadora_simples.php">Calculadora</a>
			</li>
			<li><a href="../tabuada/tabuada.php">Tabuada</a></li>
			<li><a href="../parOuImpar/parOuImpar.php">Pares e impares</a></li>
			</ul>
		</div>    
		
	</body>

</html>