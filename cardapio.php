<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>cardápio  UNIFAA</title>
   
</head>
      
        <nav>
         <ul class="menu-site">
            <li><a href="index.php">Home</a></li>
            <li><a class="ativo" href="cardapio.php">Sabores da Itália</a></li>
            <li><a href="carrinho.php">carrinho</a></li>
            <li><a href="bebidas.php">Bebidas</a></li>
            <li><a href="sobrenos.php">Sobre nós UNIFAA</a></li>
          </ul>
        </nav>
     <body>   
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="./imagens/sabor1.jpg" alt="milão">
      <div class="carousel-caption">
        <h1>Frango de Milão</h1>
        <p>frango-tomate-alho poro-brocolis!</p>
      </div>
    </div>

    <div class="item">
      <img src="./imagens/sabor2.jpg" alt="toscana">
        <div class="carousel-caption">
           <h1>Toscana</h1>
           <p>Lombo-azeitona-mangericão-tomate-mussarela!</p>
        </div>
      </div>

    <div class="item">
      <img src="./imagens/sabor3.jpg" alt="New York"width="100%" >
        <div class="carousel-caption">
           <h1>Queijo da Mama</h1>
           <p>provolone-mussarela-parmesão!</p>
        </div>
      </div>
    </div>

  <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
       <span class="glyphicon glyphicon-chevron-left"></span>
       <span class="sr-only">Previous</span></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
       <span class="glyphicon glyphicon-chevron-right"></span>
       <span class="sr-only">Next</span>
    </a>
    </div>
      <footer>
        
          <ul>
            <div class="rodape">
              <h1>Faça seu pedido!</h1>
              <a href="carrinho.php">
              <img src="./imagens/link.jpg"width="60" height="60" ></a>
            </div>
          </ul>
       
      </footer>     
  </body>
  
</html>