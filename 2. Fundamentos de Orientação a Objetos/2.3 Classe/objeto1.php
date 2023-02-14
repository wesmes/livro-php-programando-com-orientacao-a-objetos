<?php

// Por motivos didáticos nesse exemplo vamos programar do "jeito errado"
// Utilizando atributos públicos.

class Produto {
    public $descricao;
    public $estoque;
    public $preco;
}

$p1 = new Produto;
$p1->descricao = 'Chocolate';
$p1->estoque   = 10;
$p1->preco      = 7;

$p2 = new Produto;
$p2->descricao = 'Café';
$p2->estoque   = 20;
$p2->preco      = 4;

// Output objeto inteiro
var_dump($p1);
var_dump($p2);



