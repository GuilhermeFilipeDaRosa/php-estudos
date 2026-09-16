<?php 

$caminhoArquivo = __DIR__ . '/filme.js';

$conteudorquivoFilme = file_get_contents($caminhoArquivo);

$filme = json_decode($conteudorquivoFilme, true);

var_dump($filme);