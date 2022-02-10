<?php

    function gerarOptions($numeroInicial, $numeroFinal){

        $internoNumeroInicial = (int) $numeroInicial;
        $internoNumeroFinal = (int) $numeroFinal;

        for($numeroInicial; $numeroInicial <= $numeroFinal; $numeroInicial++){
            $option .= '<option value="' . $numeroInicial . '">'.$numeroInicial.'</option>';
        }
    }

?>