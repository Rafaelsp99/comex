<?php
//Crie uma lista de produtos e exiba cada um deles

$produto1 =[

   
   "produto" => "Fita Isolante 3.0",
   "valor"   => 6.00

];

$produto2 =[

   
    "produto" => "Alicate",
    "valor"   => 16.00
 
 ];
$produto3 =[

   
    "produto" => "Chave de fenda",
    "valor"   => 9.00
 
 ];
$produto4 =[

   
    "produto" => "Martelo",
    "valor"   => 15.00
 
 ];   
$produto5 =[

   
    "produto" => "Furadeira elétrica",
    "valor"   => 350.00
 
 ];
$produto6 =[

   
    "produto" => "Torneira",
    "valor"   => 36.00
 
 ];  

$produto7 =[

   
    "produto" => "Carriola",
    "valor"   => 200.00
 
 ];  

$produto8 =[

   
    "produto" => "Caixa de ferramentas",
    "valor"   => 150.00
 
 ];  
$produto9 =[

   
    "produto" => "Fita métrica",
    "valor"   => 15.00
 
 ];  
$produto10 =[

   
    "produto" => "Pá escavadeira",
    "valor"   => 18.00
 
 ];  


$itens = [$produto1, $produto2, $produto3, $produto4, $produto5, $produto6,  $produto7, $produto8,$produto9,$produto10 ];

for ($i = 0; $i < count($itens); $i++) {
    echo "Produto " . ($i + 1) . ": " .
    $itens[$i]["produto"] . " - valor:$" . 
    $itens[$i]["valor"] . PHP_EOL;
}; 