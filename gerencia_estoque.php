<?php
//Criar funções/variáveis para gerenciar o estoque

$produtos =

[    

[   
   "produto" => "Fita Isolante 3.0",
   "valor"   => 6.00,
   "estoque"  => 5

],

[

   
    "produto" => "Alicate",
    "valor"   => 16.00,
    "estoque"  => 2
],
[

   
    "produto" => "Chave de fenda",
    "valor"   => 9.00,
    "estoque"  => 6
],
[

   
    "produto" => "Martelo",
    "valor"   => 15.00,
    "estoque"  => 25
],   
[

   
    "produto" => "Furadeira elétrica",
    "valor"   => 350.00,
    "estoque"  => 6
],
[

   
    "produto" => "Torneira",
    "valor"   => 36.00,
    "estoque"  => 1
],  

[

   
    "produto" => "Carriola",
    "valor"   => 200.00,
    "estoque"  => 3
],  

[

   
    "produto" => "Caixa de ferramentas",
    "valor"   => 150.00,
    "estoque"  => 39
],  
[

   
    "produto" => "Fita métrica",
    "valor"   => 15.00,
    "estoque"  => 68
],  
[

   
    "produto" => "Pá escavadeira",
    "valor"   => 18.00,
    "estoque"  => 2
],  

];

 
 function addProduto($produtos, $Adciona)
{
    $produtos["estoque"] += $Adciona;
    return $produtos;
}



function removerProduto($produtos, $Remove)
{
    if($produtos["estoque"] >= $Remove)
    {
        $produtos["estoque"] -= $Remove;
    }
    else
    {
        echo "não há estoque do  " . $produtos["produto"]  . PHP_EOL;
    }    
    return $produtos;
}

function disponibilidadeEstoque($produtos)
{
    echo "No estoque do(a)" . $produtos["produto"], ", há   " .  $produtos["estoque"] . " disponíveis em = estoque" . PHP_EOL;
    return $produtos;
}

$produtos[0] = addProduto($produtos[0], 1);
$produtos[1] = removerProduto($produtos[1], 3);
disponibilidadeEstoque($produtos[2]);

foreach ($produtos as $item)
{
    echo $item["produto"] . " - " . $item["estoque"] . PHP_EOL;
      }