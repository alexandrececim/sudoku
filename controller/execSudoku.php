<?php
    require "../model/Sudoku.php";
    $pedidoCliente = $_GET['executar'];

    if (isset($pedidoCliente)) {
        if( $pedidoCliente == 'ok'){
            $dados = new Sudoku();
        }else{
            echo ":)";
        }
    }
 ?>