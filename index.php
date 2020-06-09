<?php 
  require "controller/Controller.php";
?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
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
          <a href="#" class="btn btn-lg btn-secondary" id="button">Executar</a>
        </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Desafio PHP Sudoku com <a href="https://getbootstrap.com/">Bootstrap</a>, feito pelo <a href="https://www.linkedin.com/in/carlos-alexandre-cecim-42b96825/">Alexande</a>.</p>
        </div>
      </footer>
    </div>

    
    <script>
    $(document).ready(function () {
        $('#button').click(function(){
            $.get("/controller/execSudoku.php?executar=ok", function (result) {
                $('#sudoku').html(result);
                
                
            });
        });
            
        
    });
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
}
 
table, td {
    width: 1px;
    height: 1px;
    border: 1px solid white;
    font-size: 15px;
    border-radius: 5px;
    -moz-border-radius: 5px;
    padding: 2px;
    
    
}

.table-responsive{
  width: 100% !important;
}

.table {
    
    width: 10% !important; 
    margin: auto;
}


</style>