<?php

$produto = array();
$produto['descricao'] = 'Chocolate Amargo';
$produto['estoque']   = 100;
$produto['preco']     = 7;

$objeto = new StdClass;

foreach($produto as $chave => $valor)
{
    $objeto->$chave = $valor;
}

print_r($objeto);