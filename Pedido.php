<?php
//Criar uma classe de pedido
class Pedido
{
    public $ID;
    public $cliente;
    public $produto;
    
   

    public function __construct( $ID,  $cliente , $produto, )
    {
        {   $this->ID = $ID;
            $this->cliente = $cliente;
            $this->produto = $produto;
         
        }
    }

    public function getID()
    {
        return $this->ID;
    }

    public function getCliente()
    {
        return $this->cliente;
    }
    public function getProduto()
    {
        return $this->produto;
    }
    
    

    

    
}



