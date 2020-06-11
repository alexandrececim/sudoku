<?php
    require "../model/Sudoku.php";

    
    $gr = explode("&", $_GET['dadosUser']);
    
    $grade = [];
    $gradeLinha_1 = [];
    $gradeLinha_2 = [];
    $gradeLinha_3 = [];
    $gradeLinha_4 = [];
    $gradeLinha_5 = [];
    $gradeLinha_6 = [];
    $gradeLinha_7 = [];
    $gradeLinha_8 = [];
    $gradeLinha_9 = [];
    
    //linha 01
    $gradeColuna = array('C1'=> $gr[0], 'C2'=> $gr[1], 'C3'=> $gr[2],
                         'C4'=> $gr[3], 'C5'=> $gr[4], 'C6'=> $gr[5],
                         'C7'=> $gr[6], 'C8'=> $gr[7], 'C9'=> $gr[8]);
    /*
    //Bloco de teste
    echo 'C1 = '.$gr[0].' C2 = '.$gr[1].' C3 = '.$gr[2].' C4 = '
                .$gr[3].' C5 = '.$gr[4].' C6 = '.$gr[5].' C7 = '
                .$gr[6].' C8 = '.$gr[7].' C9 = '.$gr[8].'<br>';
    echo "<br>------------------------------------- <br>";
    print_r($gradeColuna);
    echo "<br>------------------------------------- <br>";
    */
    $gradeLinha_1  = array($gradeColuna);
    
    //linha 02
    $gradeColuna = array('C1'=> $gr[9], 'C2'=> $gr[10], 'C3'=> $gr[11],
                         'C4'=> $gr[12], 'C5'=> $gr[13], 'C6'=> $gr[14],
                         'C7'=> $gr[15], 'C8'=> $gr[16], 'C9'=> $gr[17]);
    $gradeLinha_2  = array($gradeColuna);
    
    //linha 03
    $gradeColuna = array('C1'=> $gr[18], 'C2'=> $gr[19], 'C3'=> $gr[20],
                         'C4'=> $gr[21], 'C5'=> $gr[22], 'C6'=> $gr[23],
                         'C7'=> $gr[24], 'C8'=> $gr[25], 'C9'=> $gr[26]);
    $gradeLinha_3  = array($gradeColuna);
    
    //linha 04
    $gradeColuna = array('C1'=> $gr[27], 'C2'=> $gr[28], 'C3'=> $gr[29],
                         'C4'=> $gr[30], 'C5'=> $gr[31], 'C6'=> $gr[32],
                         'C7'=> $gr[33], 'C8'=> $gr[34], 'C9'=> $gr[35]);
    $gradeLinha_4  = array($gradeColuna);
    
    //linha 05
    $gradeColuna = array('C1'=> $gr[36], 'C2'=> $gr[37], 'C3'=> $gr[38],
                         'C4'=> $gr[39], 'C5'=> $gr[40], 'C6'=> $gr[41],
                         'C7'=> $gr[42], 'C8'=> $gr[43], 'C9'=> $gr[44]);
    $gradeLinha_5  = array($gradeColuna);
    
    //linha 06
    $gradeColuna = array('C1'=> $gr[45], 'C2'=> $gr[46], 'C3'=> $gr[47],
                         'C4'=> $gr[48], 'C5'=> $gr[49], 'C6'=> $gr[50],
                         'C7'=> $gr[51], 'C8'=> $gr[52], 'C9'=> $gr[53]);
    $gradeLinha_6  = array($gradeColuna);
    
    //linha 07
    $gradeColuna = array('C1'=> $gr[54], 'C2'=> $gr[55], 'C3'=> $gr[56],
                         'C4'=> $gr[57], 'C5'=> $gr[58], 'C6'=> $gr[59],
                         'C7'=> $gr[60], 'C8'=> $gr[61], 'C9'=> $gr[62]);
    $gradeLinha_7  = array($gradeColuna);
    
    //linha 08
    $gradeColuna = array('C1'=> $gr[63], 'C2'=> $gr[64], 'C3'=> $gr[65],
                         'C4'=> $gr[66], 'C5'=> $gr[67], 'C6'=> $gr[68],
                         'C7'=> $gr[69], 'C8'=> $gr[70], 'C9'=> $gr[71]);
    $gradeLinha_8  = array($gradeColuna);
    
    //linha 09
    $gradeColuna = array('C1'=> $gr[72], 'C2'=> $gr[73], 'C3'=> $gr[74],
                         'C4'=> $gr[75], 'C5'=> $gr[76], 'C6'=> $gr[77],
                         'C7'=> $gr[78], 'C8'=> $gr[79], 'C9'=> $gr[80]);
    $gradeLinha_9  = array($gradeColuna);
    
    //adiciona as linhas a grede para o processamento
    $gradeUser = array($gradeLinha_1, $gradeLinha_2, $gradeLinha_3, 
       $gradeLinha_4, $gradeLinha_5, $gradeLinha_6,
       $gradeLinha_7, $gradeLinha_8, $gradeLinha_9);

    //Finaliza carregando o resultado   
    $dados = new Sudoku($gradeUser);
    //preencherTeste($gradeUser);


    function preencherTeste($grade){
        $quadrante = [];
        $contaGrade = 0;
        echo "<table>";
        foreach ($grade as $linha => $value) {
            foreach($value as $coluna){
                
                $contaGrade++;
                echo "<tr class='status'>"."<td> <input type='text' 
                                                value='".$coluna['C1']."' id='L".$contaGrade."C1' maxlength='1' class='grade'/></td>
                        <td> <input type='text' value='".$coluna['C2']."' id='L".$contaGrade."C2' maxlength='1' class='grade'/></td>
                        <td> <input type='text' value='".$coluna['C3']."' id='L".$contaGrade."C3' maxlength='1' class='grade'/></td>
                        <td> <input type='text' value='".$coluna['C4']."' id='L".$contaGrade."C4' maxlength='1' class='grade'/></td>
                        <td> <input type='text' value='".$coluna['C5']."' id='L".$contaGrade."C5' maxlength='1' class='grade'/></td>
                        <td> <input type='text' value='".$coluna['C6']."' id='L".$contaGrade."C6' maxlength='1' class='grade'/></td>
                        <td> <input type='text' value='".$coluna['C7']."' id='L".$contaGrade."C7' maxlength='1' class='grade'/></td>
                        <td> <input type='text' value='".$coluna['C8']."' id='L".$contaGrade."C8' maxlength='1' class='grade'/></td>
                        <td> <input type='text' value='".$coluna['C9']."' id='L".$contaGrade."C9' maxlength='1' class='grade'/></td>
                        </tr> ";  

                                  
            }            
            
        }
        echo "</table>"; 
    }
     
    

 ?>