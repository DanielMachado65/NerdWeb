
<?php
  require_once "db_credentials.php";
  require "db_functions.php";
  session_start();

  $conn = connect_db();
  if (!$conn)
    die("Connection failed: " . mysqli_connect_error());

  // HACK: busca no banco de dados.
  $busca = "SELECT * FROM $table_us";

  $usuarios = mysqli_query($conn, $busca);
  $total_reg = "10";

  $pagina = $_GET['pagina'];

  (!$pagina) ? $pc = 1 : $pc = $pagina;

  $inicio = $pc - 1;
  $inicio = $inicio * $total_reg;

  $sql = "$busca limit $inicio, $total_reg";


  $limite = mysqli_query($conn, $sql);
  $todos = mysqli_query($conn, $busca);

  $tr = mysqli_num_rows($todos);
  $tp = $tr / $total_reg; // verifica o número total de páginas
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery-3.2.1.min.js" charset="utf-8"></script>
    <script src="js/general.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/home.css">
    <title> Conjunto de Usuários </title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-light bg-light">
        <nav class="navbar navbar-light bg-light">
          <a href="home.php">
            <button type="button" class="btn btn-outline-secondary"> Home </button>
          </a>
        </nav>
      </nav>
    </header>
    <div class="container">
      <div class="col-md-12">
      <table class="table table-light">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
        <tbody>
          <?php
            // vamos criar a visualização
            while ($usuario = mysqli_fetch_assoc($limite)) {
              $nome = $usuario["nome"];
              $email = $usuario["email"];
              $idusuario = $usuario["idusuario"];

              echo <<< EOT

               <tr>
                 <th scope="row"> $idusuario</th>
                 <td>$nome </td>
                 <td>$email </td>
               </tr>
EOT;
            }
          ?>
        </tbody>
        </table>
      </div>
      <div class="row">
        <?php
        // agora vamos criar os botões "Anterior e próximo"
        $anterior = $pc - 1;
        $proximo = $pc + 1;

          echo <<< EOT
          <a href='?pagina=$anterior'><button type='button' class='btn btn-outline-success'> Anterior </button></a>
          <a href='?pagina=$proximo'><button type='button' class='btn btn-outline-warning'> Proximo </button></a>
EOT;
        ?>
      </div>
    </div>
  </body>
</html>
