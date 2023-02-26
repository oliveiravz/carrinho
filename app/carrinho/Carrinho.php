<?php
namespace App\carrinho;

use App\produto\Produto;
use exceptions\QuantidadeException;

class Carrinho{

    private array $produtos = [];

    /**
     * @param object $produto
     * @return array
     */
    public function adicionar(Produto $produto) {

        if($produto->getQuantidade() > 20) {
            throw new QuantidadeException();
        }

        $this->produtos[] = $produto;

        return $produtos ?? [];
    
    }

    /**
     * @return int
     */
    public function totalItensCarrinho() {

        if(!empty($this->produtos)) {
            $totalItens = count($this->produtos);
        }

        return $totalItens;
    }

    /**
     * @return float
     */
    public function descontoProdutoMaisBarato() {

        $arrValores = [];
        $arrProdutos = (array) $this->produtos;

        foreach($arrProdutos as $key => $value) {
            $arrValores[] = $value->getPreco();
        }

        if(count($arrValores) > 0) {
            $menorValor = min($arrValores);
        }

        $desconto = $menorValor - (0.25 * 100);
        
        return $desconto;
    }

    /**
     * @return float
     */
    public function valorTotalCarrinho() {

        $total = 0;

        foreach($this->produtos as $prod) {
            $total += $prod->getPreco();
        }
        
        return $total;
    }

}

