<?php require_once("cabecalho.php");
      require_once("logica-usuario.php"); ?>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <style>
            .linhaComTexto {
  width: 100%;
  height: 20px;
  border-bottom: 1px solid black;
  text-align: center;
}

.linhaComTexto > span {
  font-size: 20px;
  background-color: #F3F5F6;
  padding: 0 10px;
}
        </style>
</head>

<?php if(usuarioEstaLogado()) { ?>
<div class="alert alert-warning" role="alert"> Bem vindo, você está logado como <?= usuarioLogado() ?>. </div><a class="btn btn-primary" href="logout.php" role="button">Deslogar</a></p>
<?php } else { ?>
  
    <div class="container">
    <center>
        <div class="alert alert-secondary" role="alert">
            <img src="logotipo.png" class="rounded float-left" width="200px" height="70px">

            <br>   <br> 
<form action="login.php" method="post">
    Login: <input type="email" name="email"/>
    Senha: <input type="password" name="senha"/>
    <input type="submit"  class="btn btn-primary" name="logon" value="Entrar"/>
</form>
                  <br>  
         <div id="carouselsite" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselsite" data-slide-to="0" class="active"></li>
    <li data-target="#carouselsite" data-slide-to="1"></li>
    <li data-target="#carouselsite" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="DetetivePikachu.png" class="img-fluid d" >
    </div>
    <div class="carousel-item">
      <img src="MulherMaravilha.png" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="SuckerPunch.png" class="d-block w-100" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
        </div> 
<div class="linhaComTexto">
  <span>MAIS POR MENOS</span>
</div>
        <br>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="Card3.png" alt="Imagem de capa do card">
    <div class="card-body" >
      <div class="card-header">Saia adidas Originals Curta CLRDO Preta</div> 
      <p class="card-text"> R$: 99,99 <br>Confira agora nossa linda saia agora em promoção ilimitada ou até durarem os estoques. <br> <h2> <a href="#" class="btn btn-primary">COMPRAR</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Atualizado a 3 minutos atrás</small>
    </div>
  </div>
    <div class="card">
                         <img class="card-img-top" src="Card1.png"  alt="Imagem de capa do card">
    <div class="card-body">
      <div class="card-header"> Sandália DAFITI SHOES Tiras Preta</div>
      <p class="card-text"> R$: 49,99 <br>Confira agora nossa linda sandália agora em promoção ilimitada ou até durarem os estoques. <br> <h2> <a href="#" class="btn btn-primary">COMPRAR</a></p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Atualizado a 10 minutos atrás</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="Card2.png" alt="Imagem de capa do card">
    <div class="card-body">
        <div class="card-header">Camisa Polo Lacoste Logo Azul-Marinho            </div>
      <p class="card-text">R$: 199,99 <br>Confira agora nossa linda camisa agora em promoção ilimitada ou até durarem os estoques. <br> <h2> <a href="#" class="btn btn-primary">COMPRAR</a></a></p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Atualizado há 1 hora atrás</small>
    </div>
  </div>
</div>
    </body>
</html>


<?php } ?>

<?php require_once("rodape.php"); ?>
