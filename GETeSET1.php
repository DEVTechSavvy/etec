<?php
class carro {
    
    public $placa;
    public $nome;
    
    //metodo construtor
    public function __construct($placa, $nome){
        $this->placa = $placa;
        $this->nome = $nome;
    }
    
    function get_placa(){
        return $this->placa;
    }
    
    function set_placa($placa){
        $this->placa = $placa;
    }
    
    function get_nome(){
        return $this->nome;
    }
    
    function set_nome($nome){
        $this->nome = $nome;
    }
}

$fusca = new carro('gol', 'yyy-0000');

$fusca->set_nome('fusca');
$fusca->set_placa('xxx-0000');

print $fusca->get_nome() . "\n";
print $fusca->get_placa() . "\n";

?>
