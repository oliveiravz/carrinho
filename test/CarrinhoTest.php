<?php
namespace test;

use PHPUnit\Framework\TestCase;
use App\carrinho\Carrinho;
use exceptions\QuantidadeException;
use App\produto\Produto;

class carrinhoTest extends TestCase {

    /**
     * @test
    */
    public function test_verifica_total_itens() {
        
        $p1 = new Produto(1, "Teclado", 10, 129.99);
        $p2 = new Produto(1, "Mouse", 10, 112.99);
        $p3 = new Produto(1, "Monitor", 10, 1599.99);
        
        $carrinho = new Carrinho();
        $carrinho->adicionar($p1);
        $carrinho->adicionar($p2);
        $carrinho->adicionar($p3);

        $this->assertEquals(3, $carrinho->totalItensCarrinho());

    }

    /**
     * @test
     */
    public function test_verifica_valor_total_carrinho() {
        
        $p1 = new Produto(1, "Teclado", 10, 200.00);
        $p2 = new Produto(1, "Mouse", 10, 100.00);
        $p3 = new Produto(1, "Monitor", 10, 1500.0);

        $carrinho = new Carrinho();
        $carrinho->adicionar($p1);
        $carrinho->adicionar($p2);
        $carrinho->adicionar($p3);

        $this->assertEquals(1800.00, $carrinho->valorTotalCarrinho());
    }

    /**
     * @test
     */
    public function test_verifica_quantidade_limite_carrinho_por_item() {
        
        $this->expectException(QuantidadeException::class);
        $this->expectExceptionMessage("O limite de 20 unidades por produto foi excedido!");
        
        $produto = new Produto(1, "Teclado", 25, 15.99);
        $carrinho = new Carrinho();
        $carrinho->adicionar($produto);

    }

    public function test_verifica_desconto_para_o_item_mais_barato() {
        
        $p1 = new Produto(1, "Teclado", 10, 200.00);
        $p2 = new Produto(1, "Mouse", 10, 100.00);
        $p3 = new Produto(1, "Monitor", 10, 1500.0);

        $carrinho = new Carrinho();
        $carrinho->adicionar($p1);
        $carrinho->adicionar($p2);
        $carrinho->adicionar($p3);

        $this->assertEquals(75, $carrinho->descontoProdutoMaisBarato(), "25% de desconto para o produto Mouse");
    }
}