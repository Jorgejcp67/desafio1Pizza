<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/base.css">
    <title>Carrinho</title>
</head>
    <nav>
        <ul class="menu-site">
          <li><a href="index.php">Home</a></li>
          <li><a href="cardapio.php">Sabores da Itália</a></li>
          <li><a class="ativo" href="carrinho.php">carrinho</a></li>
          <li><a href="bebidas.php">Bebidas</a></li>
          <li><a href="sobrenos.php">Sobre nós UNIFAA</a></li>
        </ul>
    </nav>
    <body>

    <div class="pedido">
        <h1>solicite o pedido</h1>
        <img src="./imagens/caixa4.jpg" alt="" width="90%" > 
        <!--campo de email-->
        <div class="grupo">
         <label for="produto 1">Pedido</label><br>
         <input id="produto" type="text"placeholder="sabor 1">
        </div>
       
        <!--criar senha-->
        <div>
         <label for="Bebida">Bebida</label><br>
         <input id="bebida" type="id bebida"placeholder="refrigerante">
        </div>
        <!--botão entrar-->
      
        <button id="btn-entrar">Pedido aprovado</button>
        <!--link esqueci minha senha-->
        
        <a href="#">cadastro</a>
        

    </div>    
    
</body>
</html>