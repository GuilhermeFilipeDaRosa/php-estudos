<?php 

function ordernarArray(array $dados) : array {
     sort($dados);
    return $dados;
}

$teste = ordernarArray(["a", "c", "b"]);

var_dump( $teste);