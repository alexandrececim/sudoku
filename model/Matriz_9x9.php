<?php
/**
 * Classe que carrega toda estrurura de alocação 9x9, com os
 * metodos de consulta dos eixos x(linha) e o eixo y(coluna)
 * bem como a função que 'grava' os valores na grade.
 * 
 * @author Carlos Alexandre de Souza Cecim
 * 
 * @copyright  GPL © 2020
 */
    class Matriz_9x9 {
        private $grade = [0];
        function __construct()
        {
            ///*
            $gradeColuna = array('C1'=>"",'C2'=>"", 'C3'=>"", 'C4'=>"",'C5'=>"", 'C6'=>"", 'C7'=>"",'C8'=>"", 'C9'=>"");
            $gradeLinha_1  = array($gradeColuna);

            $gradeColuna = array('C1'=>"",'C2'=>"", 'C3'=>"", 'C4'=>"",'C5'=>"", 'C6'=>"", 'C7'=>"",'C8'=>"", 'C9'=>"");
            $gradeLinha_2  = array($gradeColuna);

            $gradeColuna = array('C1'=>"",'C2'=>"", 'C3'=>"", 'C4'=>"",'C5'=>"", 'C6'=>"", 'C7'=>"",'C8'=>"", 'C9'=>"");
            $gradeLinha_3  = array($gradeColuna);

            $gradeColuna = array('C1'=>"",'C2'=>"", 'C3'=>"", 'C4'=>"",'C5'=>"", 'C6'=>"", 'C7'=>"",'C8'=>"", 'C9'=>"");
            $gradeLinha_4  = array($gradeColuna);

            $gradeColuna = array('C1'=>"",'C2'=>"", 'C3'=>"", 'C4'=>"",'C5'=>"", 'C6'=>"", 'C7'=>"",'C8'=>"", 'C9'=>"");
            $gradeLinha_5  = array($gradeColuna);

            $gradeColuna = array('C1'=>"",'C2'=>"", 'C3'=>"", 'C4'=>"",'C5'=>"", 'C6'=>"", 'C7'=>"",'C8'=>"", 'C9'=>"");
            $gradeLinha_6  = array($gradeColuna);

            
            $gradeColuna = array('C1'=>"",'C2'=>"", 'C3'=>"", 'C4'=>"",'C5'=>"", 'C6'=>"", 'C7'=>"",'C8'=>"", 'C9'=>"");
            $gradeLinha_7  = array($gradeColuna);

            $gradeColuna = array('C1'=>"",'C2'=>"", 'C3'=>"", 'C4'=>"",'C5'=>"", 'C6'=>"", 'C7'=>"",'C8'=>"", 'C9'=>"");
            $gradeLinha_8  = array($gradeColuna);

            $gradeColuna = array('C1'=>"",'C2'=>"", 'C3'=>"", 'C4'=>"",'C5'=>"", 'C6'=>"", 'C7'=>"",'C8'=>"", 'C9'=>"");
            $gradeLinha_9  = array($gradeColuna);
           // */
            /*
            $gradeColuna = array('C1'=>"0",'C2'=>"0", 'C3'=>"5", 'C4'=>"0",'C5'=>"0", 'C6'=>"0", 'C7'=>"0",'C8'=>"0", 'C9'=>"3");
            $gradeLinha_1  = array($gradeColuna);

            $gradeColuna = array('C1'=>"0",'C2'=>"0", 'C3'=>"0", 'C4'=>"0",'C5'=>"4", 'C6'=>"6", 'C7'=>"0",'C8'=>"0", 'C9'=>"0");
            $gradeLinha_2  = array($gradeColuna);

            $gradeColuna = array('C1'=>"0",'C2'=>"0", 'C3'=>"7", 'C4'=>"0",'C5'=>"0", 'C6'=>"0", 'C7'=>"0",'C8'=>"0", 'C9'=>"2");
            $gradeLinha_3  = array($gradeColuna);
                                                                //##############################       
            $gradeColuna = array('C1'=>"0",'C2'=>"1", 'C3'=>"0", 'C4'=>"4",'C5'=>"7", 'C6'=>"3", 'C7'=>"0",'C8'=>"6", 'C9'=>"9");
            $gradeLinha_4  = array($gradeColuna);

            $gradeColuna = array('C1'=>"0",'C2'=>"4", 'C3'=>"0", 'C4'=>"6",'C5'=>"8", 'C6'=>"9", 'C7'=>"0",'C8'=>"5", 'C9'=>"0");
            $gradeLinha_5  = array($gradeColuna);

            $gradeColuna = array('C1'=>"9",'C2'=>"8", 'C3'=>"0", 'C4'=>"2",'C5'=>"5", 'C6'=>"1", 'C7'=>"0",'C8'=>"7", 'C9'=>"0");
            $gradeLinha_6  = array($gradeColuna);               //#############################

            
            $gradeColuna = array('C1'=>"2",'C2'=>"0", 'C3'=>"0", 'C4'=>"0",'C5'=>"0", 'C6'=>"0", 'C7'=>"9",'C8'=>"0", 'C9'=>"0");
            $gradeLinha_7  = array($gradeColuna);

            $gradeColuna = array('C1'=>"0",'C2'=>"0", 'C3'=>"0", 'C4'=>"8",'C5'=>"1", 'C6'=>"0", 'C7'=>"0",'C8'=>"0", 'C9'=>"0");
            $gradeLinha_8  = array($gradeColuna);

            $gradeColuna = array('C1'=>"6",'C2'=>"0", 'C3'=>"0", 'C4'=>"0",'C5'=>"0", 'C6'=>"0", 'C7'=>"4",'C8'=>"0", 'C9'=>"0");
            $gradeLinha_9  = array($gradeColuna);
            */
            /*
           $gradeColuna = array('C1'=>"4",'C2'=>"6", 'C3'=>"5", 'C4'=>"7",'C5'=>"2", 'C6'=>"8", 'C7'=>"1",'C8'=>"9", 'C9'=>"3");
           $gradeLinha_1  = array($gradeColuna);

           $gradeColuna = array('C1'=>"1",'C2'=>"2", 'C3'=>"9", 'C4'=>"3",'C5'=>"4", 'C6'=>"6", 'C7'=>"7",'C8'=>"8", 'C9'=>"5");
           $gradeLinha_2  = array($gradeColuna);

           $gradeColuna = array('C1'=>"8",'C2'=>"3", 'C3'=>"7", 'C4'=>"1",'C5'=>"9", 'C6'=>"5", 'C7'=>"6",'C8'=>"4", 'C9'=>"2");
           $gradeLinha_3  = array($gradeColuna);
                                                               //##############################       
           $gradeColuna = array('C1'=>"5",'C2'=>"1", 'C3'=>"2", 'C4'=>"4",'C5'=>"7", 'C6'=>"3", 'C7'=>"8",'C8'=>"6", 'C9'=>"9");
           $gradeLinha_4  = array($gradeColuna);

           $gradeColuna = array('C1'=>"7",'C2'=>"4", 'C3'=>"3", 'C4'=>"6",'C5'=>"8", 'C6'=>"9", 'C7'=>"2",'C8'=>"5", 'C9'=>"1");
           $gradeLinha_5  = array($gradeColuna);

           $gradeColuna = array('C1'=>"9",'C2'=>"8", 'C3'=>"6", 'C4'=>"2",'C5'=>"5", 'C6'=>"1", 'C7'=>"3",'C8'=>"7", 'C9'=>"4");
           $gradeLinha_6  = array($gradeColuna);               //#############################

           
           $gradeColuna = array('C1'=>"2",'C2'=>"7", 'C3'=>"1", 'C4'=>"0",'C5'=>"0", 'C6'=>"0", 'C7'=>"9",'C8'=>"3", 'C9'=>"8");
           $gradeLinha_7  = array($gradeColuna);

           $gradeColuna = array('C1'=>"3",'C2'=>"9", 'C3'=>"4", 'C4'=>"8",'C5'=>"1", 'C6'=>"0", 'C7'=>"5",'C8'=>"2", 'C9'=>"6");
           $gradeLinha_8  = array($gradeColuna);

           $gradeColuna = array('C1'=>"6",'C2'=>"5", 'C3'=>"8", 'C4'=>"0",'C5'=>"0", 'C6'=>"0", 'C7'=>"4",'C8'=>"1", 'C9'=>"7");
           $gradeLinha_9  = array($gradeColuna);
           */


            $this->grade = array($gradeLinha_1, $gradeLinha_2, $gradeLinha_3, 
                                    $gradeLinha_4, $gradeLinha_5, $gradeLinha_6,
                                    $gradeLinha_7, $gradeLinha_8, $gradeLinha_9);

                   
        }

        public function consultaColuna($grade, $colunaN){
            $resposta = false;
            $coluna = [];
            
            for ($i=0; $i < 9; $i++) {                 
                $arrayColuna = array_column($grade[$i], $colunaN);
                array_push($coluna, $arrayColuna[0]);
            }
           
           return $coluna;
        }

        public function consultaLinha($grade, $linhaN){
            $resposta = false;
            $linha = $grade[$linhaN];
            
           return array_values($linha[0]);
        }

        public function getGrade(){
            return $this->grade;
        }

        public function addNumero($grade, $linha, $coluna, $valor){
            $campoUtilizado = $grade[$linha][0][$coluna];
            if($campoUtilizado == 0){
                $grade[$linha][0][$coluna] = $valor;
            }            
            return $grade;
        }
    }