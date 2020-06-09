<?php
    require "Matriz_9x9.php";
    /**
     * Classe encaregada de separa a exrutura 9x9 em 'quadrantes' 3x3
     * para empregar as regras de não repetição de valores no mesmo
     * quadrante.
     * 
     * @author Carlos Alexandre de Souza Cecim
     * 
     * @copyright  GPL © 2020
     */
    class Matriz_3x3 {
        
        public function carregarGrade($grade, $quadro3x3){
            $quadrante = [];
            foreach ($grade as $linha => $value) {
                foreach($value as $coluna){                  
                    
                    //quadrante 01
                    if ($quadro3x3 == 1) {
                        if($linha == 0 or $linha == 1 or $linha == 2 or $linha == 3 && 
                        $coluna == 'C1' or 
                        $coluna == 'C2'or
                        $coluna == 'C3'){
                            array_push($quadrante, $coluna['C1'], $coluna['C2'], $coluna['C3']);
                           
                        }
                    }
                    

                    //quadrante 02
                    if ($quadro3x3 == 2) {
                        if($linha == 0 or $linha == 1 or $linha == 2 or $linha == 3 && 
                        $coluna == 'C4' or 
                        $coluna == 'C5'or
                        $coluna == 'C6'){
                            array_push($quadrante, $coluna['C4'], $coluna['C5'], $coluna['C6']);
                                                       
                        }
                    }

                    //quadrante 03
                    if ($quadro3x3 == 3) {
                        if($linha == 0 or $linha == 1 or $linha == 2 or $linha == 3 && 
                        $coluna == 'C7' or 
                        $coluna == 'C8'or
                        $coluna == 'C9'){
                            array_push($quadrante, $coluna['C7'], $coluna['C8'], $coluna['C9']);
                                                       
                        }
                    }
                    //quadrante 04
                    if ($quadro3x3 == 4) {
                        if($linha == 3 or $linha == 4 or $linha == 5 or $linha == 6 && 
                        $coluna == 'C1' or 
                        $coluna == 'C2'or
                        $coluna == 'C3'){
                            array_push($quadrante, $coluna['C1'], $coluna['C2'], $coluna['C3']);
                                                       
                        }
                    }

                    //quadrante 05
                    if ($quadro3x3 == 5) {
                        if($linha == 3 or $linha == 4 or $linha == 5 or $linha == 6 && 
                        $coluna == 'C4' or 
                        $coluna == 'C5'or
                        $coluna == 'C6'){
                            array_push($quadrante, $coluna['C4'], $coluna['C5'], $coluna['C6']);
                                                       
                        }
                    }

                    //quadrante 06
                    if ($quadro3x3 == 6) {
                        if($linha == 3 or $linha == 4 or $linha == 5 or $linha == 6 && 
                        $coluna == 'C7' or 
                        $coluna == 'C8'or
                        $coluna == 'C9'){
                            array_push($quadrante, $coluna['C7'], $coluna['C8'], $coluna['C9']);
                                                       
                        }
                    }

                    //quadrante 07
                    if ($quadro3x3 == 7) {
                        if($linha == 6 or $linha == 7 or $linha == 8 or $linha == 9 && 
                        $coluna == 'C1' or 
                        $coluna == 'C2'or
                        $coluna == 'C3'){
                            array_push($quadrante, $coluna['C1'], $coluna['C2'], $coluna['C3']);
                                                       
                        }
                    }

                    //quadrante 08
                    if ($quadro3x3 == 8) {
                        if($linha == 6 or $linha == 7 or $linha == 8 or $linha == 9 &&
                        $coluna == 'C4' or 
                        $coluna == 'C5'or
                        $coluna == 'C6'){
                            array_push($quadrante, $coluna['C4'], $coluna['C5'], $coluna['C6']);
                                                       
                        }
                    }

                    //quadrante 09
                    if ($quadro3x3 == 9) {
                        if($linha == 6 or $linha == 7 or $linha == 8 or $linha == 9 &&
                        $coluna == 'C7' or 
                        $coluna == 'C8'or
                        $coluna == 'C9'){
                            array_push($quadrante, $coluna['C7'], $coluna['C8'], $coluna['C9']);
                                                       
                        }
                    }

                   
                }
            }
            return $quadrante;
        }

      
    }