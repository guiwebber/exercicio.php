<html>
    <head>
        <title>
            Cadastro de Documentos
        </title>

    </head>
    <link rel="shortcut icon" href="imagens/image.png">
    <link rel="stylesheet" href="css/Estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
    <div class="Espacamento">
        <?php
            include("Menu.php");
         ?>
    
    <div class = "text-center">
        <h1>
        Documentos
    </h1> 
    
    </div>
    <div class= "usuario">

    </div>
    <form>
  <div class="form-group">
  <form action="DocumentoGravar.php" method="POST">
    <label for="exampleFormControlFile1">Escolha um arquivo a ser enviado</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>

<div class="form-group">
    <label for="exampleFormControlSelect1"> Número de cópias</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>


<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Preto e branco
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Colorido
  </label>
</div>
<div class="text-center">

   <button type="button" class="btn btn-success ">Enviar arquivo</button>
 </div>

 <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Data/Hora submetida</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Nome do documento</th>
                    <th scope="col">Cópias</th>
                    <th scope="col">Custo</th>
                    <th scope="col">Tipo de impressão</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
           


                </tr>
            </tbody>
        </table>
    </html>