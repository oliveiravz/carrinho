<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\carrinho\Carrinho;
use App\produto\Produto;

$carrinho = new Carrinho();
$carrinho->adicionar(new Produto(1, "Teclado", 10, 200.00));
$carrinho->adicionar(new Produto(2, "Mouse", 10, 100.00));
$carrinho->adicionar(new Produto(3, "Monitor", 10, 1500.00));
$carrinho->remover(3);
$carrinho->remover(1);

// $total = $carrinho->valorTotalCarrinho();
// $totalComDesconto = $carrinho->valorTotalCarrinhoComDesconto();

echo '<pre>';
print_r($carrinho);
echo '</pre>';