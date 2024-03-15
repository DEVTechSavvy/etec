<?php

/*
    Professor: Rafael
    Aula: SW
    Data: 08-03-2024
*/

    class RH{           //classe do RH                               
        public $nome_func;
        public $idade;
        public $cargo;
        public $salario;
        
        function __construct($nome_func, $idade, $cargo, $salario){
            $this->nome_func = $nome_func;
            $this->idade = $idade;
            $this->cargo = $cargo;
            $this->salario = $salario;
        }   
        function get_nome_func(){
            return $this->nome_func;
        }
        function get_idade(){
            return $this->idade;
        }
        function get_cargo(){
            return $this->cargo;
        }
        function get_salario(){
            return $this->salario;
        }
    }   //final da classe   
    
    
    $funcionario1 = new RH("Enzo", "17", "CHEFE", "10000000000");
    print $funcionario1->get_nome_func() . "\n";
    print $funcionario1->get_idade() . "\n";
    print $funcionario1->get_cargo() . "\n";
    print $funcionario1->get_salario() . "\n";

?>
