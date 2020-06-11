<?php
    class View {
        public function tela($dados){
            
           echo $this->preencherCampo($dados);
            
        }

        public function preencherCampo($grade){
            $quadrante = [];
            $contaGrade = 0;
            echo "<table  class='table'>";
            echo "<table>";
            foreach ($grade as $linha => $value) {
                foreach($value as $coluna){
                    
                    $contaGrade++;                    
                    echo "<tr class='status'>"."<td> <input type='texnumber' 
                                                    value='".$coluna['C1']."' id='L".$contaGrade."C1' maxlength='1' class='grade'/></td>
                            <td> <input type='number' value='".$coluna['C2']."' id='L".$contaGrade."C2' maxlength='1' class='grade'/></td>
                            <td> <input type='number' value='".$coluna['C3']."' id='L".$contaGrade."C3' maxlength='1' class='grade'/></td>
                            <td> <input type='number' value='".$coluna['C4']."' id='L".$contaGrade."C4' maxlength='1' class='grade'/></td>
                            <td> <input type='number' value='".$coluna['C5']."' id='L".$contaGrade."C5' maxlength='1' class='grade'/></td>
                            <td> <input type='number' value='".$coluna['C6']."' id='L".$contaGrade."C6' maxlength='1' class='grade'/></td>
                            <td> <input type='number' value='".$coluna['C7']."' id='L".$contaGrade."C7' maxlength='1' class='grade'/></td>
                            <td> <input type='number' value='".$coluna['C8']."' id='L".$contaGrade."C8' maxlength='1' class='grade'/></td>
                            <td> <input type='number' value='".$coluna['C9']."' id='L".$contaGrade."C9' maxlength='1' class='grade'/></td>
                            </tr> "; 
                                      
                }            
                
            }
            echo "</table>"; 
            
        }
    }
    