<?php
namespace App\Carrinho;

use App\Produto\Produto;
use Exceptions\ExceptionQuantidade\QuantidadeException;

class Carrinho {

    private array $produtos = [];

    public function adicionar(Produto $produto) {
        
        $this->produtos[] = $produto;

        if(count($this->produtos) > 3) {
            throw new QuantidadeException('O carrinho não pode conter mais de 3 produtos por compra');
        }
        
    }

}