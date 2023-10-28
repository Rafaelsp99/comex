<?php
//Criar uma classe de Produto
class Produto
{
    public $nome_produto;
    public $preco;
    public $qtd_estoque;
    
   

    public function __construct(string  $nome_produto, float $preco , $qtd_estoque, )
    {
        {   $this->nome_produto = $nome_produto;
            $this->preco = $preco;
            $this->qtd_estoque = $qtd_estoque;
         
        }
    }

    public function getNome_produto(): string
    {
        return $this->nome_produto;
    }

    public function getPreco()
    {
        return $this->preco;
    }
    public function getQtd_estoque()
    {
        return $this->qtd_estoque;
    }
    
    
    public function adicionaProduto(float $addProduto): void
    {
        try {
            if ($addProduto < 0) {
                throw new \InvalidArgumentException('A quantidade  não pode ser negativa.');
            }
        } catch (\Exception $erro) {
            echo $erro->getMessage() . PHP_EOL;
            return;
        }
        $this->qtd_estoque += $addProduto;
    }


    public function removeProduto(float $addProduto) : void
     {
        try {
            if ($addProduto < 0) {
                throw new \InvalidArgumentException('A quantidade a reduzir não pode ser negativa.');
            }

            if ($addProduto > $this->qtd_estoque) {
                throw new EstoqueInsuficienteException($addProduto,$this->qtd_estoque);
            }
        } catch (\Exception $erro) {
            echo $erro->getMessage().PHP_EOL;
            return;
        }
        $this->qtd_estoque -= $addProduto;
    }
    

    
    public function calculaValorTotal()
    {
        return $this->preco * $this-> qtd_estoque;
    }

    
}



