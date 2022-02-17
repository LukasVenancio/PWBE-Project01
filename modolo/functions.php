<?php

/**********************************************************************************
 *      Arquivo criado para centralizar todas as funções das páginas na aplicação
 * possibilitando a padronização das URL's de todas as importações.
 * 
 *      Autor: Lukas Santos Venancio 17/02/2022
***********************************************************************************/

// Funções Par Impar

    //Função idealizada para gerar todos os options necessários para ambos os selects da página de
//forma generica, possibilitando a criação de uma única função para os dois selects.
    function gerarOptions($numeroInicial, $numeroFinal){

        $internoNumeroInicial = (int) $numeroInicial;
        $internoNumeroFinal = (int) $numeroFinal;
        $acumuladorOption = (string) null;

        for($internoNumeroInicial; $internoNumeroInicial <= $internoNumeroFinal; $internoNumeroInicial++){
            
            //Variável usada para acumular e criar os elementos option dentro do HTML posteriormente.
            $acumuladorOption .= '<option value="' . $internoNumeroInicial . '">'.$internoNumeroInicial.'</option>';
        }

        return $acumuladorOption;
    }

    //Função genérica para definir tanto números pares quanto impares, através da comparação do
// resto da divisão que deve ser informado no momento em que a função for chamada.     
    function definirParesEImpares($numeroInicial, $numeroFinal, $restoDesejado){

        $internoNumeroInicial = (int) $numeroInicial;
        $internoNumeroFinal = (int) $numeroFinal;
        $InternoRestoDesejado = (int) $restoDesejado;
        $resultado = (string) null;

        for($internoNumeroInicial; $internoNumeroInicial <= $internoNumeroFinal; $internoNumeroInicial++){

            //Comparação do resto informado, que faz com que a função seja genérica.
            if($internoNumeroInicial % 2 == $InternoRestoDesejado){
                $resultado .= $internoNumeroInicial . '<br>';
            }
        }

        return $resultado;

    }

    //Função semelhante à função "definirParesEImpares", entretanto, serve apenas para definir a quantidade
// dos números desejados.
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

            $produto = (int) $internoMultiplicando * $contador;

            //Variável acumuladora que retornará todas as linhas da tabuada.
            $resultado .= $internoMultiplicando . ' X ' . $contador . ' = ' . $produto . '<br>';
        }    
        return $resultado;
    }

    //função calculadora
    function operacaoMatematica($numero1, $numero2, $operacao){

        $internoNumero1 = (double) $numero1;
        $internoNumero2 = (double) $numero2;
        $internoResultado = (double) 0;
        $internoOperacao = (string) $operacao;
    
        //Demonstração do uso do Switch Case para realizar decisões simples.
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
        //Limita a quantidade de casas decimais e se necessário arredonda o valor.
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

        //Calcula a média e a retorna.
        $media = ($internoNota1 + $internoNota2 + $internoNota3 + $internoNota4) / 4;

        return $media;
    }

?>