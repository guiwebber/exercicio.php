<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Cadastro de Saldo</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
      <div class="Espacamento">
          <?php
              include("Menu.php");
          ?>
      </div>

      <?php
      $sql = "SELECT * FROM usuario"
      /*
      incluir classe de conexao
      criar e executar um select que busque todos os usuarios
      percorrer os usuarios e pra cada usuario criar um option no select
      
      */
      ?>
      <div class= "Fila">
          <h1>Cadastro de Saldo</h1>
            <br>
          <div class="col-lg-6">
            <form action="SaldoGravar.php" method="POST">
             <div class="cadastro">
              <div class="form-group">
                <label for="exampleInputEmail1">Usuário</label>
                <select class="form-control" id="exampleFormControlSelect1" name="usuario_codigo">

                  <option value="1">Guilherme</option>
                  
                  </select>
              </div>
              
              <div class="margem">
                <label for="exampleFormControlSelect1">Saldo atual</label>
                <input class="form-control" type="text" readonly>
                <label for="exampleFormControlSelect1">Saldo a ser adicionado</label>
                <input type="text" class="form-control" id="Inputsaldo"  name="SaldoAdc">
          
                <br>
              </div>


              <div class="text-center">
                <button type="submit" class="btn btn-success">Salvar</button>
                <button type="button" class="btn btn-danger">Cancelar</button>
              </div>
            </form>
          </div>
            </div>
      </div>
  </body>
</html>
