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
        
        function cadastro(){//as funçoes
            return "CADASTRADO";
        }
        
        function func_emp(){
            return "este funcionario esta adaptado a continuar na empresa";
        }
        
        function sai_emp(){
            return "este funcionario nao esta adaptado entao sera demitido";
        }
        
        function demisao(){
            return "DEMITIDO";
        }
         function promovido(){
            return "Este funcionario esta promovido";
        }//final das funçoes
        
    }   //final da classe   
    
    
    //aqui e o registro dos funcionarios    
    $funcionario1 = new RH;//funcionario 1
    $funcionario1->nome_func = "Enzo";
    $funcionario1->idade = "17";
    $funcionario1->cargo = "Menor-Aprendiz";
    $funcionario1->salario = "2500";
    
    $funcionario2 = new RH;//funcionario 2
    $funcionario2->nome_func = "Gabriel";
    $funcionario2->idade = "28";
    $funcionario2->cargo = "Ajundante";
    $funcionario2->salario = "1400";

    $funcionario3 = new RH;//funcionario 3
    $funcionario3->nome_func = "Daniel";
    $funcionario3->idade = "23";
    $funcionario3->cargo = "Gerente";
    $funcionario3->salario = "6000";
    
    $funcionario4 = new RH;//funcionario 4
    $funcionario4->nome_func = "Robson";
    $funcionario4->idade = "40";
    $funcionario4->cargo = "Tesoureiro";
    $funcionario4->salario = "2700";
    
    $funcionario5 = new RH;//funcionario 5
    $funcionario5->nome_func = "Adrian";
    $funcionario5->idade = "16";
    $funcionario5->cargo = "Menor-Aprendiz";
    $funcionario5->salario = "2000";
    
    $funcionario6 = new RH;//funcionario 6
    $funcionario6->nome_func = "Pedro";
    $funcionario6->idade = "20";
    $funcionario6->cargo = "Ajundante";
    $funcionario6->salario = "1400";
    
    $funcionario7 = new RH;//funcionario 7
    $funcionario7->nome_func = "Antonio";
    $funcionario7->idade = "17";
    $funcionario7->cargo = "Ajundante do Ajundante";
    $funcionario7->salario = "600";
    
    //prints das funçoes
    print $funcionario1->nome_func . "\n";
    print $funcionario1->idade . "\n";
    print $funcionario1->cargo . "\n";
    print $funcionario1->salario . "\n";
    print $funcionario1->cadastro() . "\n\n";
    
    print $funcionario2->nome_func . "\n";
    print $funcionario2->idade . "\n";
    print $funcionario2->cargo . "\n";
    print $funcionario2->salario . "\n";
    print $funcionario2->func_emp() . "\n\n";
    
    print $funcionario3->nome_func . "\n";
    print $funcionario3->idade . "\n";
    print $funcionario3->cargo . "\n";
    print $funcionario3->salario . "\n";
    print $funcionario3->sai_emp() . "\n";
    print $funcionario3->demisao() . "\n\n";
    
    print $funcionario4->nome_func . "\n";
    print $funcionario4->idade . "\n";
    print $funcionario4->cargo . "\n";
    print $funcionario4->salario . "\n";
    print $funcionario4->promovido() . "\n\n";
    
    print $funcionario5->nome_func . "\n";
    print $funcionario5->idade . "\n";
    print $funcionario5->cargo . "\n";
    print $funcionario5->salario . "\n";
    print $funcionario5->func_emp() . "\n\n";
    
    print $funcionario6->nome_func . "\n";
    print $funcionario6->idade . "\n";
    print $funcionario6->cargo . "\n";
    print $funcionario6->sai_emp() . "\n";
    print $funcionario6->demisao() . "\n\n";
    
    print $funcionario7->nome_func . "\n";
    print $funcionario7->idade . "\n";
    print $funcionario7->cargo . "\n";
    print $funcionario7->salario . "\n";
    print $funcionario7->cadastro() . "\n\n";

   

?>
