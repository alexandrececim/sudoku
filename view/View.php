<?php
    class View {
        public function tela($dados){
            
           echo $this->preencherCampo($dados);
            
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
    