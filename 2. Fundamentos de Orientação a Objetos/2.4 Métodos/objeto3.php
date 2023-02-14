<?php

class Produto {
    
    // Protege os atributos do acesso externo direto
    private $descricao;
    private $estoque;
    private $preco;

}

// Resulta em Fatal error
$p1 = new Produto;
$p1->descricao = 'Chocolate';
$p1->estoque   = 10;
$p1->preco      = 8;


