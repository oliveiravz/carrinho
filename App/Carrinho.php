<?php
namespace App;

use App\Produto;
use exceptionQuantidade\QuantidadeException;

class Carrinho {

    private array $produtos = [];

    public function adicionar(Produto $produto) {

        if($produto->getQuantidade() > 20) {
            throw new QuantidadeException('Limite de 20 itens excedido');
        }

        $this->produtos[] = $produto;

        return $produtos ?? [];
    
    }

    public function totalCarrinho() {

        $total = 0;

        foreach($this->produtos as $prod) {
            $total += $prod->getPreco();
        }
        
        return $total;
    }

}


$car = new Carrinho();
$car->adicionar(new Produto(1, 'Celular', 21, 15.50));
$car->adicionar(new Produto(1, 'Caneta', 10, 1.50));
$car->totalCarrinho();

var_dump($car);