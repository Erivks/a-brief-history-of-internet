<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Projeto Integrador V</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="egg.html">ABHOI</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navb">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?= url() ?>">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= url('grupo') ?>">Grupo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= url('sobre') ?>">Sobre</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-success my-2 my-sm-0" type="button" data-toggle="modal" data-target="#myModalEntrar">Entrar</button>
          </form>
        </div>
      </nav>
<br>

<!-- The Modal Login-->
<div class="modal fade" id="myModalEntrar">
    <div class="modal-dialog modal-ml">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Entrar</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="container">
                <form action="/action_page.php">
                  <div class="form-group">
                    <label for="usuario">Usuário:</label>
                    <input type="text" class="form-control" id="user" placeholder="Seu usuário" name="user">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Senha:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Sua senha" name="pswd">
                  </div>
                  <div class="form-group form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="remember"> Lembrar
                    </label>
                  </div>
                  <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
              </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>        
      </div>
    </div>
</div>

<?= $this->section('content') ?>

</body>
</html>    
