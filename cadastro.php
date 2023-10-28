<?php

require_once 'Cliente.php';

require_once 'Produto.php';

require_once 'Pedido.php';



$cadastro = new Cliente($nome="RAFAEL SILVA DE PAULA " ,$celular="16 9125-9888",$email="rafael@umemail.com",$endereco="Rua: Bahia 951 Jardim Planalto - Franca - SP", );


echo $cadastro->getNome();PHP_EOL;
echo $cadastro->getCelular();PHP_EOL;
echo $cadastro->getEmail();PHP_EOL;
echo $cadastro->getEndereco();PHP_EOL;
echo "Total de compras  R$" . $cadastro->getTotalCompras();
$cadastro->adicionarCompra(100);
echo "compras do cliente: R$" . $cadastro->getTotalCompras();

//Produto

$novoProduto = new Produto ($nome_produto="Martelo   ", $preco= 10.0, $qtd_estoque =50);
echo "          Nome do produto:         " . $novoProduto->getNome_produto();
echo "          Preço de produto:       " . $novoProduto->getPreco();
echo "          Quantidade em estoque:   " . $novoProduto->getQtd_estoque();

$novoProduto->adicionaProduto(30);//adiconando 30 unidades
$novoProduto->removeProduto(10);//removendo 10

echo "   Valor total:   $" . $novoProduto->calculaValorTotal();

//Pedido


$novoPedido = new Pedido($ID=1528,$cliente="Rafael Silva de Paula",$produto="Maçarico ");
echo "          ID do pedido:         " .   $novoPedido->getID();
echo "          Preço de produto:       " . $novoPedido->getCliente();
echo "          Quantidade em estoque:   " .$novoPedido->getProduto();

?>