<?php
    require "Matriz_9x9.php";
    /**
     * Classe encaregada de separa a exrutura 9x9 e 'quadrantes' 3x3
     * para empregar as regras de não repetição de valores no mesmo
     * quadrante, porem primeiramente consultando a regra anterior de
     * não repetir os valores em linhas e colunas 
     */
    class Matriz_3x3 {
        private $quadrante_01 ;

        function __construct()
        {
            
        }
        public function gradeocupada($grade_3x3){

            //if($grade_3x3 == 1) return null;
            //$this->$quadrante_01 = array_push(1);
            $resultado = [];
            if($grade_3x3 == 1){
                $resultado = $this->quadrante_01;
                //echo "<br> **** [".print_r($resultado)."] ****<br>";
            } 
            return $resultado;
        }
        
     public function carregarGrade($grade, $quadro3x3){
            $quadrante = [];
            foreach ($grade as $linha => $value) {
                foreach($value as $coluna){                  
                    
                    //quadrante 01
                    if ($quadro3x3 == 1) {
                        if($linha == 0 ){                            
                            //echo "<br>"."Linha: $linha | ".$coluna['C1']." ".$coluna['C2']." ".$coluna['C3']." |";
                            array_push($quadrante,  $coluna['C1'], $coluna['C2'], $coluna['C3']);
                            //array_push($this->quadrante_01,  $coluna['C1'], $coluna['C2'], $coluna['C3']);
                            //echo "<br> **** [".print_r($quadrante)."] ****<br>";
                        }
                        if($linha == 1 ){                            
                            //echo "<br>"."Linha: $linha | ".$coluna['C1']." ".$coluna['C2']." ".$coluna['C3']." |";
                            array_push($quadrante,  $coluna['C1'], $coluna['C2'], $coluna['C3']);
                                                       
                        }
                        if($linha == 2 ){                            
                            //echo "<br>"."Linha: $linha | ".$coluna['C1']." ".$coluna['C2']." ".$coluna['C3']." |";
                            array_push($quadrante,  $coluna['C1'], $coluna['C2'], $coluna['C3']);
                           // echo "<br> **** [".print_r($quadrante)."] ****<br>";                           
                        }
                    }

                    //quadrante 02
                    if ($quadro3x3 == 2) {
                        if($linha == 0 ){
                            //echo "<br>"."Linha: $linha | ".$coluna['C4']." ".$coluna['C5']." ".$coluna['C6']." |";
                            array_push($quadrante, $coluna['C4'], $coluna['C5'], $coluna['C6']);                                                       
                        }
                        if($linha == 1 ){
                            //echo "<br>"."Linha: $linha | ".$coluna['C4']." ".$coluna['C5']." ".$coluna['C6']." |";
                            array_push($quadrante, $coluna['C4'], $coluna['C5'], $coluna['C6']);                                                       
                        }
                        if($linha == 2 ){
                            //echo "<br>"."Linha: $linha | ".$coluna['C4']." ".$coluna['C5']." ".$coluna['C6']." |";
                            array_push($quadrante, $coluna['C4'], $coluna['C5'], $coluna['C6']);                                                       
                        }
                    }

                    //quadrante 03
                    if ($quadro3x3 == 3) {
                        if($linha == 0 ){
                            array_push($quadrante, $coluna['C7'], $coluna['C8'], $coluna['C9']);                                                       
                        }
                        if($linha == 1 ){
                            array_push($quadrante, $coluna['C7'], $coluna['C8'], $coluna['C9']);                                                       
                        }
                        if($linha == 2 ){
                            array_push($quadrante, $coluna['C7'], $coluna['C8'], $coluna['C9']);                                                       
                        }
                    }

                    //quadrante 04
                    if ($quadro3x3 == 4) {
                        if($linha == 3 ){
                            array_push($quadrante, $coluna['C1'], $coluna['C2'], $coluna['C3']);
                                                       
                        }
                        if($linha == 4 ){
                            array_push($quadrante, $coluna['C1'], $coluna['C2'], $coluna['C3']);
                                                       
                        }
                        if($linha == 5 ){
                            array_push($quadrante, $coluna['C1'], $coluna['C2'], $coluna['C3']);
                                                       
                        }
                    }

                    //quadrante 05
                    if ($quadro3x3 == 5) {
                        if($linha == 3 ){
                            array_push($quadrante, $coluna['C4'], $coluna['C5'], $coluna['C6']);
                                                       
                        }
                        if($linha == 4 ){
                            array_push($quadrante, $coluna['C4'], $coluna['C5'], $coluna['C6']);
                                                       
                        }
                        if($linha == 5 ){
                            array_push($quadrante, $coluna['C4'], $coluna['C5'], $coluna['C6']);
                                                       
                        }
                    }
                    //quadrante 06
                    if ($quadro3x3 == 6) {
                        if($linha == 3 ){
                            array_push($quadrante, $coluna['C7'], $coluna['C8'], $coluna['C9']);
                                                       
                        }
                        if($linha == 4 ){
                            array_push($quadrante, $coluna['C7'], $coluna['C8'], $coluna['C9']);
                                                       
                        }
                        if($linha == 5 ){
                            array_push($quadrante, $coluna['C7'], $coluna['C8'], $coluna['C9']);
                                                       
                        }
                    }

                    //quadrante 07
                    if ($quadro3x3 == 7) {
                        if($linha == 6 ){
                            array_push($quadrante, $coluna['C1'], $coluna['C2'], $coluna['C3']);
                                                       
                        }
                        if($linha == 7 ){
                            array_push($quadrante, $coluna['C1'], $coluna['C2'], $coluna['C3']);
                                                       
                        }
                        if($linha == 8 ){
                            array_push($quadrante, $coluna['C1'], $coluna['C2'], $coluna['C3']);
                                                       
                        }
                    }

                    //quadrante 08
                    if ($quadro3x3 == 8) {
                        if($linha == 6){
                            array_push($quadrante, $coluna['C4'], $coluna['C5'], $coluna['C6']);
                                                       
                        }
                        if($linha == 7){
                            array_push($quadrante, $coluna['C4'], $coluna['C5'], $coluna['C6']);
                                                       
                        }
                        if($linha == 8){
                            array_push($quadrante, $coluna['C4'], $coluna['C5'], $coluna['C6']);
                                                       
                        }
                    }
                    //quadrante 09
                    if ($quadro3x3 == 9) {
                        if($linha == 6 ){
                            array_push($quadrante, $coluna['C7'], $coluna['C8'], $coluna['C9']);
                                                       
                        }
                        if($linha == 7 ){
                            array_push($quadrante, $coluna['C7'], $coluna['C8'], $coluna['C9']);
                                                       
                        }
                        if($linha == 8 ){
                            array_push($quadrante, $coluna['C7'], $coluna['C8'], $coluna['C9']);
                                                       
                        }
                    }


                   
                }
            }
            //return array_values($quadrante);
            return $quadrante;
        }

       
    }