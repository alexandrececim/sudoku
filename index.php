<?php 
  require "controller/Controller.php";
?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Basicamente ele trabalha com manipulações de array's e numeros aleatórios do Sudoku
(1, 2, 3, 4, 5, 6, 7, 8, 9) aplicando as três regras do referido jogo, foi um desafio
como avalição para uma vaga de programador PHP, portanto foi utilisado a estrutura MVC
(Model, View, Controller) alem de usar o framework Bootstrap.">

    <meta name="author" content="Carlos Alexandre de Souza Cecim">
    <link rel="icon" href="https://getbootstrap.com.br/favicon.ico">

    <title>Desafio-Sudoku</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://getbootstrap.com.br/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com.br/docs/4.1/dist/js/bootstrap.min.js"></script>

  </head>


<body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      
    
      <main role="main" class="inner cover">
        <h1 class="cover-heading">Sudoku 'Força Bruta'.</h1>
        <div class="container">
          <div class="table-responsive">
                      
            <p class="lead" id=sudoku>
         <?php
                    
            
          $controle = new Controller();
          $controle->index();
            
        ?>
        </p>
        
      </div>
    </div>
      
        <p class="lead">
          <a href='#' class='btn btn-lg btn-secondary' id='buttonEnviar'>Executar</a>
          <div id='divButton'></div>
        </p>
      
        
      </main>
      

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Para preservar o Servidor, ha um limite de 9 escolhas.</p>
          <p>Desafio PHP Sudoku, feito pelo <a href="https://www.linkedin.com/in/carlos-alexandre-cecim-42b96825/">Alexande Cecim</a> e publicado no  <a href="https://github.com/alexandrececim/sudoku">GITHUB</a>.</p>
        </div>
      </footer>
    </div>

    
    <script>

   // $(document).ready(function () {
      var gradeClicados = [];
      var newGrade = 0;
      var dados = ""; 
      var digitosUsados = 0;

        $('#buttonEnviar').click(function(){
          if(newGrade < 1){
            dados = gravaDadoDaGrade();
          }
           
           enviarDados(gradeClicados, dados);  
           
           newGrade++;
           

        });

        $('.grade').click(function(){
          $(this).select();
          
        });

        //ação que insere os numeros escolhidos pelo usuario e pinta a respectivo campo
        $('.grade').focusout(function(){
          if($(this).val() != 0 && digitosUsados < 9){
            $(this).css({color:"#FFF", backgroundColor: "blue" });
            
              gradeClicados.push($(this).attr('id'));
              digitosUsados++;
          }else{
            $(this).val("0");
          }
          
        });
            
        
   // });

    function pintaGrade(gradeClicados){
      for (let index = 0; index < gradeClicados.length; index++) {
        $('#'+gradeClicados[index]).css({color:"#FFF", backgroundColor: "blue" });
        
      }
    }

    function gravaDadoDaGrade(){
      montagem = "";
      var linha = 0;

      //carrega os dados da grade se for um novo jogo
      
        do {
        linha++;
        for (let index = 1; index < 10; index++) {
          montagem = montagem+$('#'+"L"+linha+"C"+index).val()+"&" ;
        }
      }while(linha < 10 );
      return montagem;
    }

    function enviarDados(gradeClicados, montagem){
      
      $.ajax({
        url: "/controller/execSudoku.php",
        type: 'GET', // Tipo de requisição, podendo alterar para GET, POST, PUT , DELETE e outros metodos http
        data: {dadosUser: montagem},
        beforeSend: function () {
        //Aqui adicionas o loader 
            $("#sudoku").html("<h3>###*** Processando ! ***###</h3>");
        },
        success: function(resposta){
          //Bloco com a resposta do servidor caso a requisição ocorra normalmente
          $('#sudoku').html(resposta);
          pintaGrade(gradeClicados);
          $('#divButton').html("<a  href='#' class='btn btn-lg btn-secondary' onClick='window.location.reload()'>Novo Jogo</a>");
        },
        error: function(resposta){
          //Entrará aqui caso não de certo a requisição 
          alert("Erro: favor verificar a sua internet");
        }
      });
     
    }
</script>
  </body>
</html>

<style>
    
body{
    background-color: black;
    color: white;
}

table {
    border-collapse: separate;
    border-spacing: 0;
    width: 10% !important; 
    margin: auto;
}

table input{
  width: 20px;
  height: 25px;
  font-size: 15px;
  background-color: black;
  color: white; 
    
} 

table td {
    width: 1px;
    height: 1px;
    border: 1px solid white;
    font-size: 5px;
    border-radius: 5px;
    -moz-border-radius: 5px;
    padding: 2px;
    
    
}

table tr {
  width: 1px;
  height: 1px;
}

.table-responsive{
 width: 100% !important; 
}

.table {
    
    width: 10% !important; 
    margin: auto;
   
}

 
</style>