<?php
    require "Matriz_3x3.php";   
/**
 * Classe que 'plota' o resultado do Sudoku utilizando 3 etapas:
 * 1) Carrega a grade instanciando um objeto da classe Matriz_9x9().
 * 
 * 2) Utiliza um loop, (do-while), com o metodo persistencia() para 
 * dar um novo 'ciclo' de tentativas até atingir a solução so Sudoku
 * ou gatilho maximo de ciclos.
 * 
 * 3) O ciclo que resolverá o Sudoku utiliza os metodos: 
 * 
 *  3.1) plotar(), metodo encarregado de gravar por 'linha' no Sudoku
 * 
 *  3.2) gravarGrade(), que vai aplicar as regras de restição do Sudoku
 * 
 *  3.3) valida(), metodo que soma os valores do array($grade) resultante, esperando
 *       resultado '405'.
 * 
 * Os outros metodos são metodos auxiliares: 
 *  a) cargaGrade3x3(), que auxilia na consulta de restrições, identofocando o numero
 * do 'quadrante' para ser aplicado a regra de não poder ter repetição.
 *  
 *  b) preencherCampo(), responsavel pela parte visual da resposta do Sudoku já 'pronto'.
 * 
 * @author Carlos Alexandre de Souza Cecim
 * 
 * @copyright  GPL © 2020
 * 
 */
    class Sudoku {
        
        function __construct()
        {
            $matriz_9x9 = new Matriz_9x9("9");
            
            $grade = $matriz_9x9->getGrade();
            $matriz_original = $matriz_9x9->getGrade();
            
            $contador = 0;

            do{
               $grade = $this->persistencia($matriz_original ,$matriz_9x9);
                $contador++;
                if($contador == 810){
                    echo "Ciclos limite atingido, tente novamente !";
                    break;
                } 
            } while($this->valida($grade) != 405);

            echo "*Quantidade de ciclos:[ ".$contador." ]<br>";
            $this->preencherCampo($grade);
            //echo json_encode($grade);
           
        }

        public function persistencia($grade ,$matriz_9x9){
            $grade = $this->plotar($grade, 0, $matriz_9x9);
            $grade = $this->plotar($grade, 1, $matriz_9x9);
            $grade = $this->plotar($grade, 2, $matriz_9x9);
            $grade = $this->plotar($grade, 3, $matriz_9x9);
            $grade = $this->plotar($grade, 4, $matriz_9x9);
            $grade = $this->plotar($grade, 5, $matriz_9x9);
            $grade = $this->plotar($grade, 6, $matriz_9x9);
            $grade = $this->plotar($grade, 7, $matriz_9x9);
            $grade = $this->plotar($grade, 8, $matriz_9x9);
            return $grade;
        }

        public function valida($grade){
            $total = [];
            foreach ($grade as $linha => $value) {
                foreach($value as $coluna){ 
                    array_push($total, $coluna['C1'], $coluna['C2'], $coluna['C3'],
                                $coluna['C4'], $coluna['C5'], $coluna['C6'],
                                $coluna['C7'], $coluna['C8'], $coluna['C9']);
                }
            }
            return array_sum($total);
        }
        public function gravarGrade($grade, $linha, $colunaN, $matriz_9x9, $arrayNumeros){
            $matriz_3x3 = new Matriz_3x3(); 
            $arrayNumeros = array("1", "2", "3", "4", "5", "6", "7", "8", "9"); 
            //Regra (1) do Sudoku: não repetir numeração da linha da 'Grade'
            $linhaCarregada =  $matriz_9x9->consultaLinha($grade, $linha);

            if($linha > 0){
            //Regra (2) do Sudoku: não repetir numeração da coluna da 'Grade'
            $coluna = $matriz_9x9->consultaColuna($grade, $colunaN);

            //Regra (3) do Sudoku: não repetir numeração da grade_3x3 respectiva | gradeocupada
           $grade_3x3_usado = $this->cargaGrade3x3($grade, $linha, $colunaN);
          
           $somando_usados = array_merge($linhaCarregada, $coluna, $grade_3x3_usado);
           $sobra = array_diff($arrayNumeros, $somando_usados);

            //_____________Testes________________________________________________________

                if($linha == 6 && $colunaN == "C8"){
                   // echo "<br>-> Usados: ".print_r($somando_usados)."  <br>";
                   // echo "<br>-> 3x3: ".print_r($grade_3x3_usado)."  <br>";
                    //echo "<br>#############################  <br>";
                   // echo "<br>-> Sobra: ".print_r($sobra)."  (Coluna: $colunaN)<br>";
                }

            }
            //Para a 'linha 0' a regra limita-se a pesquisar a linha
            else{
                $sobra = array_diff($arrayNumeros, $linhaCarregada);
                
            }
            //embaralha os valores remanescentes
            shuffle($sobra);
            
            $valorN = current($sobra);
            //opção usada para registrar as regras que não foram cumpridas
            if($valorN ==null){
               
                    $valorN = 0;
            } 
            
            $grade = $matriz_9x9->addNumero($grade, $linha, $colunaN, $valorN);

            unset($sobra[0]);
            //o retorno consiste de dois array's
            $dados = array($grade, $sobra);
            return $dados;
        }



        
        public function plotar($grade, $linha, $matriz_9x9){
            $arrayNumeros = array("1", "2", "3", "4", "5", "6", "7", "8", "9");
            shuffle($arrayNumeros);   
            $conta = 0;
            
            for ($ic=1; $ic < 10; $ic++) { 
                $conta = $ic;
                $coluna = $conta; 
                
                //Bloco-01
                if($conta == 1){
                   $coluna = "C1";
                   $opGravar = $this->gravarGrade($grade, $linha, $coluna, $matriz_9x9, $arrayNumeros);
                   $grade = $opGravar[0];
                   $arrayNumeros = $opGravar[1];
                }
                if($conta == 2){
                   $coluna = "C2";
                   $opGravar = $this->gravarGrade($grade, $linha, $coluna, $matriz_9x9, $arrayNumeros);
                   $grade = $opGravar[0];
                   $arrayNumeros = $opGravar[1];
                }
                if($conta == 3){
                   $coluna = "C3";
                   $opGravar = $this->gravarGrade($grade, $linha, $coluna, $matriz_9x9, $arrayNumeros);
                   $grade = $opGravar[0];
                   $arrayNumeros = $opGravar[1];
                }
               
                
                //Bloco-02
                if($conta == 4){
                    $coluna = "C4";
                    $opGravar = $this->gravarGrade($grade, $linha, $coluna, $matriz_9x9, $arrayNumeros);
                    $grade = $opGravar[0];
                    $arrayNumeros = $opGravar[1];
                }
                if($conta == 5){
                    $coluna = "C5";
                    $opGravar = $this->gravarGrade($grade, $linha, $coluna, $matriz_9x9, $arrayNumeros);
                    $grade = $opGravar[0];
                    $arrayNumeros = $opGravar[1];
                }
                if($conta == 6){
                    $coluna = "C6";
                    $opGravar = $this->gravarGrade($grade, $linha, $coluna, $matriz_9x9, $arrayNumeros);
                    $grade = $opGravar[0];
                    $arrayNumeros = $opGravar[1];
                }

                //Bloco-03
                if($conta == 7){
                    $coluna = "C7";
                    $opGravar = $this->gravarGrade($grade, $linha, $coluna, $matriz_9x9, $arrayNumeros);
                    $grade = $opGravar[0];
                    $arrayNumeros = $opGravar[1];
                }
                if($conta == 8){
                    $coluna = "C8";
                    $opGravar = $this->gravarGrade($grade, $linha, $coluna, $matriz_9x9, $arrayNumeros);
                    $grade = $opGravar[0];
                    $arrayNumeros = $opGravar[1];
                }
                if($conta == 9){
                    $coluna = "C9";
                    $opGravar = $this->gravarGrade($grade, $linha, $coluna, $matriz_9x9, $arrayNumeros);
                    $grade = $opGravar[0];
                    $arrayNumeros = $opGravar[1];
                }
               $conta++;
            }          
            
            return $grade;
                       

        }

        public function cargaGrade3x3($grade, $linha, $colunaN){
            $matriz_3x3 = new Matriz_3x3();
            $grade_usada = [];

            //Primeiro grupo de 3
            
            if($linha == 1 or $linha == 2){

                if($colunaN == "C1" or $colunaN == "C2" or $colunaN == "C3"){
                    $grade_usada = $matriz_3x3->carregarGrade($grade, 1);
                }
                 if($colunaN == "C4" or $colunaN == "C5" or $colunaN == "C6"){
                    $grade_usada = $matriz_3x3->carregarGrade($grade, 2);
                }
                if($colunaN == "C7" or $colunaN == "C8" or $colunaN == "C9"){
                    $grade_usada = $matriz_3x3->carregarGrade($grade, 3);
                }
            } 
                
        //Segundo grupo de 3
            if($linha == 3 or $linha == 4 or $linha == 5){
                if($colunaN == "C1" or $colunaN == "C2" or $colunaN == "C3"){
                    $grade_usada = $matriz_3x3->carregarGrade($grade, 4);
                }
                if($colunaN == "C4" or $colunaN == "C5" or $colunaN == "C6"){
                    $grade_usada = $matriz_3x3->carregarGrade($grade, 5);
                }
                if($colunaN == "C7" or $colunaN == "C8" or $colunaN == "C9"){
                    $grade_usada = $matriz_3x3->carregarGrade($grade, 6);
                }
                
            } 
            
        //Terceiro grupo de 3
            if($linha == 6 or $linha == 7 or $linha == 8){

                if($colunaN == "C1" or $colunaN == "C2" or $colunaN == "C3"){
                    $grade_usada = $matriz_3x3->carregarGrade($grade, 7);
                }
                if($colunaN == "C4" or $colunaN == "C5" or $colunaN == "C6"){
                    $grade_usada = $matriz_3x3->carregarGrade($grade, 8);
                }
                if($colunaN == "C7" or $colunaN == "C8" or $colunaN == "C9"){
                    $grade_usada = $matriz_3x3->carregarGrade($grade, 9);
                }
            
            } 
            return $grade_usada;
        }

        public function preencherCampo($grade){
            $quadrante = [];
            foreach ($grade as $linha => $value) {
                foreach($value as $coluna){
                    
                    echo "<table  class='table'>";

                    echo "<tr class='status'>"."<td> ".$coluna['C1']." </td><td> ".$coluna['C2']." </td><td> ".$coluna['C3'].
                        " </td><td> ".$coluna['C4']." </td><td> ".$coluna['C5']." </td><td> ".$coluna['C6'].
                        " </td><td> ".$coluna['C7']." </td><td> ".$coluna['C8']." </td><td> ".$coluna['C9']."</td></tr>"; 
                    echo "</table>";   
                }              
                
            }
            
            return null;
        }
    }