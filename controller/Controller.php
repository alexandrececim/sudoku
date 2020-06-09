<?php
    require "view/View.php";
    require "model/Sudoku.php";
    
    class Controller{
        public function index(){
            $matriz_9x9 = new Matriz_9x9("9");
            
            $grade = $matriz_9x9->getGrade();

            $paginaWeb = new View();
            $paginaWeb->tela($grade);
        }
    }
