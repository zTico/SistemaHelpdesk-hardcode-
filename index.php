
<?php 

session_start();

?>
<html>
  <head>

    <meta charset="utf-8" />
    <title>Sistema Help Desk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
  </head>

  <body>

  <div id="area-cabecalho">

            <div>
                <img src="images/logo.png" width="65px" id="img1" >
            </div>

            <div>
                <img src="images/logo.png" width="65px" id="img2">
            </div>

		<div id="area-logo">
			<h1>Sistema<span class="branco">Help-Desk</span></h1>
		</div>

    </div>
    
    <div class="meio"> 
  <form action="valida.php" method="POST"> 
  <div class="login">Login</div>
  <div class="form-group">
    <label>Email </label>
    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Preencha seu email" name="email">
    <small class="form-text text-muted">ex: cericesuporte@cerice.org.br</small>
  </div>
  <div class="form-group">
    <label>Senha</label>
    <input type="password" class="form-control"  placeholder="Senha" name="senha">
  </div>
  <?php if(isset($_GET['login']) && $_GET['login'] == 'erro' ) { ?>

    <div class = "text-danger" >
      Usuario ou senha incorreto
    </div>
    
  <?php } ?>

  <?php
                   

                   if(isset($_GET['login']) && $_GET['login'] == 'erro2'){ 

                   ?> 
                       <div class= "text-danger">
                      Faça Login antes de acessar as demais páginas 
                   </div>

                   <?php } ?>

  <button type="submit" class="entrar">ENTRAR</button>
</form>

</div>

    



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>