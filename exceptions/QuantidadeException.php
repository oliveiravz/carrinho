<?php
namespace exceptions;

use Exception;

class QuantidadeException extends Exception {

    public function __construct() {
        parent::__construct("O limite de 20 unidades por produto foi excedido!");
    }
}

class CarrinhoVazioException extends Exception {

    public function __construct() {
        parent::__construct("Adicione um produto no carrinho!");
    }
}