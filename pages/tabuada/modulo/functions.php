<?php

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
?>