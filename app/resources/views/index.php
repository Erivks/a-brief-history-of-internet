<?= $this->layout('_layout') ?>

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
<br><br>

<form action="/action_page.php">
    <div class="Container">
    <div class="row">
        <div class="col-sm-1">
            
        </div>
        <div class="col-sm-3">Site
            <select name="cars" class="custom-select mb-3">
                <option selected value="siteTodos">Todos</option>
                <option value="">Google</option>
                <option value="">Youtube</option>
                <option value="">Facebook</option>
                <option value="">Twitter</option>
                <option value="">Instagram</option>
            </select>
        </div>
        <div class="col-sm-3">Ano
            <select name="cars" class="custom-select mb-3">
                <option selected value="anoTodos">Todos</option>
                <option value="">2019</option>
                <option value="">2018</option>
                <option value="">2017</option>
                <option value="">2016</option>
                <option value="">2015</option>
            </select>
        </div>
        <div class="col-sm-3">Mes
            <select name="cars" class="custom-select mb-3">
                <option selected value="00">Todos</option>
                <option value="01">Janeiro</option>
                <option value="02">Fevereiro</option>
                <option value="03">Março</option>
                <option value="04">Abril</option>
                <option value="05">Maio</option>
                <option value="06">Junho</option>
                <option value="07">Julho</option>
                <option value="08">Agosto</option>
                <option value="09">Setembro</option>
                <option value="10">Outubro</option>
                <option value="11">Novembro</option>
                <option value="12">Dezembro</option>
            </select>
        </div>
        <div class="col-sm-2">
            <br>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
      </div> 
      </div>
  </form>
  <br>
  <div class="container">
    <input type="range" class="custom-range" id="customRange" name="points1">
    <h2>Os 10 Mais</h2>
    <br>
    <p align="right">25.000.000</p>
    <a>Google</a> 
    <div class="progress">        
        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:98%">20.000.000.000</div>
    </div>
    <br>
    <a>Youtube</a> 
    <div class="progress">        
        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:90%">2.000.000</div>
    </div>
    <br>
    <a>Facebook</a> 
    <div class="progress">        
        <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" style="width:75%">2.000.000</div>
    </div>
    <br>
    <a>Twitter</a> 
    <div class="progress">        
        <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" style="width:68%">2.000.000</div>
    </div>
    <br>
    <a>Instagram</a> 
    <div class="progress">        
        <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" style="width:65%">2.000.000</div>
    </div>
    <br>
    <a>Amazon</a> 
    <div class="progress">        
        <div class="progress-bar bg-secondary progress-bar-striped progress-bar-animated" style="width:60%">2.000.000</div>
    </div>
    <br>
    <a>Yahoo</a> 
    <div class="progress">        
        <div class="progress-bar bg-dark progress-bar-striped progress-bar-animated" style="width:40%">2.000.000</div>
    </div>
    <br>
    <a>Spotify</a> 
    <div class="progress">        
        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:35%">2.000.000</div>
    </div>
    <br>
    <a>Netflix</a> 
    <div class="progress">        
        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:30%">2.000.000</div>
    </div>
    <br>
    <a>Ebay</a> 
    <div class="progress">        
        <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" style="width:25%">2.000.000</div>
    </div>
    <br>
  </div>
<!--2/4 - Agora copie o código inteiro para o bloco de notas do primeiro 0 até o último 1-->