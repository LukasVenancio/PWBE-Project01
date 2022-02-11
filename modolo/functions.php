<?php
// Funções Par Impar
    function gerarOptions($numeroInicial, $numeroFinal){

        $internoNumeroInicial = (int) $numeroInicial;
        $internoNumeroFinal = (int) $numeroFinal;
        $acumuladorOption = (string) null;

        for($internoNumeroInicial; $internoNumeroInicial <= $internoNumeroFinal; $internoNumeroInicial++){
            $acumuladorOption .= '<option value="' . $internoNumeroInicial . '">'.$internoNumeroInicial.'</option>';
        }

        return $acumuladorOption;
    }

    function definirParesEImpares($numeroInicial, $numeroFinal, $restoDesejado){

        $internoNumeroInicial = (int) $numeroInicial;
        $internoNumeroFinal = (int) $numeroFinal;
        $InternoRestoDesejado = (int) $restoDesejado;
        $resultado = (string) null;

        for($internoNumeroInicial; $internoNumeroInicial <= $internoNumeroFinal; $internoNumeroInicial++){

            if($internoNumeroInicial % 2 == $InternoRestoDesejado){
                $resultado .= $internoNumeroInicial . '<br>';
            }
        }

        return $resultado;

    }

    function contarParesEImpares($numeroInicial, $numeroFinal, $restoDesejado){

        $internoNumeroInicial = (int) $numeroInicial;
        $internoNumeroFinal = (int) $numeroFinal;
        $InternoRestoDesejado = (int) $restoDesejado;
        $contagem = (string) null;

        for($internoNumeroInicial; $internoNumeroInicial <= $internoNumeroFinal; $internoNumeroInicial++){

            if($internoNumeroInicial % 2 == $InternoRestoDesejado){
                $contagem++; 
            }
        }

        return $contagem;

    }

    // Função tabuada
    function gerarTabuada($maximoMultiplicador, $multiplicando){
        $internoMultiplicando = (int) $multiplicando;
        $InternoMaximoMultiplicador = (int) $maximoMultiplicador;
        $contador = (int) 0;
        $resultado = (string) null;

        for($contador; $contador <= $InternoMaximoMultiplicador; $contador++){

            $produto = (int) $multiplicando * $contador;
            $resultado .= $multiplicando . ' X ' . $contador . ' = ' . $produto . '<br>';
        }    
        return $resultado;
    }

    //função calculadora
    function operacaoMatematica($numero1, $numero2, $operacao){

        //Declaração de variáveis internas para preservar os valores de entrada
        $internoNumero1 = (double) $numero1;
        $internoNumero2 = (double) $numero2;
        $internoResultado = (double) 0;
        $internoOperacao = (string) $operacao;
    
        switch($internoOperacao){
                        
            case "somar":
                $internoResultado = $internoNumero1 + $internoNumero2;
                break;
            case "subtrair":
                $internoResultado = $internoNumero1 - $internoNumero2;
                break;
            case "multiplicar":
                $internoResultado = $internoNumero1 * $internoNumero2;
                break;
            case "dividir":
                if($internoNumero2 == 0)
                    echo(ERRO_MENSAGEM_DIVIDIR_POR_ZERO);
                 else
                     $internoResultado = $internoNumero1 / $internoNumero2;
                break;
            default:	 	
        }
        //Limita a quantidade de casas decimais e se necessário arredonda o valor
        $internoResultado = round($internoResultado, 2);
    
        return $internoResultado;
    }

    //Função média
    function calcularMedia($nota1,$nota2,$nota3,$nota4){
        $internoNota1 = (double) $nota1;
        $internoNota2 = (double) $nota2;
        $internoNota3 = (double) $nota3;
        $internoNota4 = (double) $nota4;
        $media = (double) 0;

        $media = ($internoNota1 + $internoNota2 + $internoNota3 + $internoNota4) / 4;

        return $media;
    }

?>