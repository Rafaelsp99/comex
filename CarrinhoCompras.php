<?php

require_once 'Cliente.php';
require_once 'Pedido.php';
require_once 'EstoqueInsuficienteException.php';

class CarrinhoDeCompras {
    private $produtos = [];

    public function adicionaProduto($produto) {
        $this->produtos[] = $produto;
    }

    public function removeProduto($produto) {
        $key = array_search($produto, $this->produtos);
        if ($key !== false) {
            unset($this->produtos[$key]);
        }
    }

    public function calculaDesconto($desconto) {
        $indice = 0;
        foreach ($this->produtos as $produto) {
            $indice += $produto->getPreco() * $desconto;
        }
        return $indice;
    }

    public function calculaFrete() {
        $Total = $this->calculaTotal();
        if ($Total > 100) {
            return 0;
        } else {
            return 9.99;
        }
    }

    public function calculaTotal() {
        $valor = 0;
        foreach ($this->produtos as $produto) {
            $valor += $produto->getPreco();
        }
        return $valor;
    }

    public function listaProdutos() {
        return $this->produtos;
    }
}

class Produto {
    private $nome_produto;
    private $preco;

    public function __construct($nome_produto, $preco) {
        $this->nome_produto = $nome_produto;
        $this->preco = $preco;
    }

    public function getNome() {
        return $this->nome_produto;
    }

    public function getPreco() {
        return $this->preco;
    }
}

$cliente1 = new Cliente ("Rafael Silva de Paula " . PHP_EOL , "(16)99149-7430" . PHP_EOL, "rafael.spaula@sp.senac.br" . PHP_EOL,  'Rua: Bahia 921 Cep: 14405-182 Jardins - Franca - SP'. PHP_EOL);
echo "Cliente: " . $cliente1->getNome(), "Celular: ". $cliente1->getCelular(), "E-mail: ". $cliente1->getEmail(), "Endereço: " . $cliente1->getEndereco(); 
$novocarrinho = new CarrinhoDeCompras();
$produtoA = new Produto("britadeira", 18000.00);
$produtoB = new Produto("Furadeira industrial", 8000.00);
$novocarrinho->adicionaProduto($produtoA);
$novocarrinho->adicionaProduto($produtoB);
$total = $novocarrinho->calculaTotal();
echo "Total da Compra: R$ " . $total . PHP_EOL;
$indice = $novocarrinho->calculaDesconto(0.2);
echo "Desconto: R$ " . $indice . PHP_EOL;
$frete = $novocarrinho->calculaFrete();
echo "Frete: R$ " . $frete . PHP_EOL;
$produtosNoCarrinho = $novocarrinho->listaProdutos();
echo "Carrinho: ". PHP_EOL;
foreach ($produtosNoCarrinho as $produto) {
    echo "Produto: " . $produto->getNome() . ", Preço: R$ "  .$produto->getPreco() . PHP_EOL  ;
}
?>