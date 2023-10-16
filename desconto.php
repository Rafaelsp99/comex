<?php
//Criar uma função que verifica a possibilidade de desconto
//Receba o valor total de uma compra como parâmetro
//Se o valor for maior ou igual a R$ 100,00, aplique um desconto de 10% 
//e devolva o valor com desconto
//Se não, apenas devolva o valor da compra
//Após executar a função, exiba o valor inicial e o valor final,
// a fim do cliente ver se teve ou não desconto.

$valortotal = 200.00;
function Desconto($valortotal)
{        
    if($valortotal >= 100.00)
    {
        $valortotal = $valortotal/100*90;
        return $valortotal;
    }
    return $valortotal;
}

$valorcomDesconto = Desconto($valortotal);

echo "O valor total da compra é de:R$ " . $valortotal . PHP_EOL . "porém com pagamento à vista concedemos um desconto de 10% ficando o total de:R$ " .  $valorcomDesconto;