<?php

    class Pessoa{                                          
        public $nome;                                       
        public $rg;    
        public $genero;
        public $cpf;
     
        function __construct($nome, $rg, $genero, $cpf){
            $this->nome = $nome;
            $this->rg = $rg;
            $this->genero = $genero;
            $this->cpf = $cpf;
        }                     
        function get_nome(){
            return $this->nome;
        }
        function get_rg(){
            return $this->rg;
        }
        function get_genero(){
            return $this->genero;
        }
        function get_cpf(){
            return $this->cpf;
        }
    }                                               
  
    $Pessoa1 = new Pessoa("Joao", "1234", "MASCULINO", "55302842807");   
    print $Pessoa1->get_nome() . "\n";
    print $Pessoa1->get_rg() . "\n";
    print $Pessoa1->get_genero() . "\n";
    print $Pessoa1->get_cpf() . "\n";

?>