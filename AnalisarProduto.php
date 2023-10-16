<?php
//Analisar uma lista de produtos e encontrar o mais caro e a média de preço

$produtos = [    
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
    "valor"   => 15,
    "estoque"  => 25
],   
[  
    "produto" => "Furadeira elétrica",
    "valor"   => 350,
    "estoque"  => 6
],
[   
    "produto" => "Torneira",
    "valor"   => 36,
    "estoque"  => 1
],  
[   
    "produto" => "Carriola",
    "valor"   => 200,
    "estoque"  => 3
],  
[  
    "produto" => "Caixa de ferramentas",
    "valor"   => 150.00,
    "estoque"  => 39
],  
[   
    "produto" => "Fita métrica",
    "valor"   => 15,
    "estoque"  => 68
],  
[   
    "produto" => "Pá escavadeira",
    "valor"   => 18,
    "estoque"  => 2
],  

];

function ValorMaisAlto($produtos)
{
    $ValorMaisAlto = 0;

    foreach ($produtos as $aux => $item)
    {
        if($item["valor"] > $produtos[$ValorMaisAlto]["valor"])
        {
            $ValorMaisAlto = $aux;            
        }
    }

    echo "O produto com o maior preço é: " . $produtos[$ValorMaisAlto]["produto"] . ", que tem o valor de : " . $produtos[$ValorMaisAlto]["valor"]  . PHP_EOL;
}

function ValorMaisBaixo($produtos)
{
    $ValorMaisBaixo = 0;

    foreach ($produtos as $aux => $item)
    {
        if($item["valor"] < $produtos[$ValorMaisBaixo]["valor"])
        {
            $ValorMaisBaixo = $aux;            
        }
    }

    echo "O produto com o menor preço é: " . $produtos[$ValorMaisBaixo]["produto"] . ", que tem o valor de : " . $produtos[$ValorMaisBaixo]["valor"] .  PHP_EOL;
}

ValorMaisAlto($produtos);
ValorMaisBaixo($produtos);
