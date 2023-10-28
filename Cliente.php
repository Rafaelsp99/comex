<?php
//Criar uma classe de Cliente
use Rafael\Pedido;
use Rafael\CarrinhoCompras;
use Rafael\Produto;

class Cliente
{
    public $nome;
    public $celular;
    public $email;
    public $endereco;
    private float $totalCompras;
   

    public function __construct(string $nome, string $celular ,string $email, string $endereco )
    {

        try {
            $this->validaNome($nome);
        } catch (Exception $e) {
            echo $e->getMessage() . PHP_EOL;
            return;
        }
 
        {   $this->nome = $nome;
            $this->celular = $celular;
            $this->email = $email;
            $this->endereco = $endereco;
            $this->totalCompras = 0;
        }
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function validaNome(string $nome)
    {
        if (strlen($nome) <4) {
            throw new \InvalidArgumentException ('Nome não pode ter menos que 4 caracteres.');
    }
    }

    
    public function getCelular(): string
    {
        return $this->celular;
    }

    public function setcelular(string $celular):void 
    {

        $this->celular;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email):void 
    {

        $this->email;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }
    public function setEndereco(string $endereco):void 
    {

        $this->endereco;
    }
    public function getTotalCompras(): float {
        return $this->totalCompras;
    }

    public function adicionarCompra($valor) {
        $this->totalCompras += $valor;
    }
}





