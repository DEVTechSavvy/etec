<?php

function calculo_imc($altura, $peso){
    $altura = $altura * $altura;
    $imc = $peso / $altura;
    return $imc;
}
print calculo_imc(1.80,126.00) . "\n";
print calculo_imc(1.90,126.00) . "\n";
print calculo_imc(1.70,126.00) . "\n";
print calculo_imc(1.60,126.00) . "\n";
print calculo_imc(1.50,126.00) . "\n";
print calculo_imc(1.40,126.00) . "\n";
?>