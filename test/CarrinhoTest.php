<?php
namespace test;

use PHPUnit\Framework\TestCase;
use App\Carrinho;
use Exceptions\ExceptionQuantidade\QuantidadeException;
use App\Produto;

class carrinhoTest extends TestCase {

    /**
     * @test
    */
    public function test_verifica_carrinho_vazio() {
        
        $carrinho = new Carrinho();

        // $this->assertEmpty($carrinho->adicionar($produto));
    }

    /**
     * @test
     */
    public function test_verifica_quantidade_limite_carrinho() {

        $this->expectException(QuantidadeException::class);

        $carrinho = new Carrinho();
        
        // $p1 = new Produto();
        // $p2 = new Produto();
        // $p3 = new Produto();
        // $p4 = new Produto();

        // $carrinho->adicionar($p1);
        // $carrinho->adicionar($p2);
        // $carrinho->adicionar($p3);
        // $carrinho->adicionar($p4);

    }
}