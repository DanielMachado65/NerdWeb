<?php

  require "db_functions.php";

  $error = false;
  $success = false;
  $name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["nome"]) && isset($_POST["email"])) {
    $conn = connect_db();

    $name = mysqli_real_escape_string($conn,$_POST["nome"]);
    $email = mysqli_real_escape_string($conn,$_POST["email"]);

    $sql = "INSERT INTO usuario (nome, email) VALUES ('$name', '$email')";

    if(mysqli_query($conn, $sql)){
      $success = true;
    } else {
      $error_msg = mysqli_error($conn);
      $error = true;
    }
  }
  else {
    $error_msg = "Por favor, preencha todos os dados.";
    $error = true;
  }
}
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
  <title> Cadastro Usuário</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-light bg-light">
      <nav class="navbar navbar-light bg-light">
        <a href="dashboard.php?pagina=1">
          <button type="button" class="btn btn-outline-secondary"> Usuários </button>
        </a>
      </nav>
    </nav>
  </header>
<?php
  echo <<< EOT
  <div class="container">
  <h1> Cadastro de Usuário </h1>
EOT;

  if ($success) {
    echo <<< EOT
    <h4> Usuário criado com sucesso!</h4>
    <a href="home.php" class="center-block"> Voltar para a tela de inicio </a>
EOT;
  } elseif ($error) {
    echo <<< EOT
    <div class="alert alert-danger" role="alert">
       Email já cadastrado no Banco de Dados
    </div>
EOT;
  }

  echo <<< EOT
    <div class="col-md-12">
      <form action="register.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="usuario">Usuário: </label>
          <input type="text" name="nome" class="form-control" id="usuario" aria-describedby="usuarioHelp" placeholder="Entre com o nome do usuário" value="$name">
        </div>
        <div class="form-group">
          <label for="email">Email: </label>
          <input type="email"  name="email" class="form-control" id="email" aria-describedby="usuarioHelp" placeholder="Entre um email" value="$email">
        </div>
        <button type="submit" class="btn btn-outline-success">Submit</button>
      </form>
    </div>
  </div>
EOT;
 ?>

</body>
</html>
