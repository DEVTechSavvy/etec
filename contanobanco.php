<?php
class cliente {
    
    public $nome;
    public $dataDnascimeto;
    public $cpf;
    
    public function __construct($nome, $dataDnascimento, $cpf){
        $this->nome = $nome;
        $this->dataDnascimento = $dataDnascimento;
        $this->cpf =$cpf;
    }
    
    function get_nome(){
        return $this->nome;
    }
    
    function set_nome($nome){
        $this->nome = $nome;
    }
    
    function get_dataDnascimento(){
        return $this->dataDnascimento;
    }
    
    function set_dataDnascimento($datadnascimento){
        $this->dataDnascimento = $datadnascimento;
    }
    
    function get_cpf(){
        return $this->cpf;
    }
    
    function set_cpf($cpf){
        $this->cpf = $cpf;
    }
}

$cliente = new cliente('antonio', '29/12/2006', '11111111111');

$cliente->set_nome('antonio');
$cliente->set_dataDnascimento('29/12/2006');
$cliente->set_cpf('11111111111');

print $cliente->get_nome() . "\n";
print $cliente->get_dataDnascimento() . "\n";
print $cliente->get_cpf() . "\n";

?>