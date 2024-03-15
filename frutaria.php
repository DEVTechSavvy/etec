<?php

class fruta{
    
    public $nome;
    public $cor;
}

$banana = new fruta();
$banana ->nome = "banana";
$banana ->cor ="amarela";

$cereja=new fruta();
$cereja->nome ="cereja";
$cereja->cor ="vermelha";

$maca=new fruta();
$maca->nome ="maca";
$maca->cor ="vermelha";

$macaverde=new fruta();
$macaverde->nome ="macaverde";
$macaverde->cor ="verde";

$abacaxi=new fruta();
$abacaxi->nome ="abacaxi";
$abacaxi->cor ="amarelo";

$melancia=new fruta();
$melancia->nome ="melancia";
$melancia->cor ="verde";

print $banana ->cor . "\n";
print $cereja ->cor . "\n";
print $maca ->cor . "\n";
print $macaverde ->cor . "\n";
print $melancia ->cor . "\n";

?>
