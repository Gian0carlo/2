<?php
$pagamento = readline('forma de pagamento:');
$valor_total = readline('valor do produto:');
switch ($pagamento){
    case 'avista':
    $desconto =10;
    break;
    case 'cartao':
    $desconto =5;
    break;
    case 'parcelado':
        $desconto = 0;
        break;
}
$total_des = $valor_total-(($valor_total / 100)*$desconto);
echo'valor resultante com os descontos aplicados = R$';
echo $total_des
?>