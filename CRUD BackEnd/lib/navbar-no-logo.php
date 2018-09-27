<?php

  $id = $_SESSION['user_id'];
  $user_name = $_SESSION['user_name'];

  echo <<< EOT

  <div class="background"></div>
  <nav class="navbar-logged navbar-no-logo">
    <div class="menu-content">
      <ul>
        <li>
          <div class="hamburger">
            <div class="hamburger-1"></div>
            <div class="hamburger-2"></div>
            <div class="hamburger-3"></div>
          </div>
        </li>
        <li class="li-pencil">
          <a href="new_post.php"><span class="glyphicon glyphicon-pencil"></span></a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="side-menu side-no-logo">
    <ul>
      <a href="profile.php" class="img-a"><img src="imgs/blur.PNG" class="img-circle center-block" alt="foto-usuário"></a>
      <li><a href="profile.php" class="user-name"> $user_name </a></li>
      <li><a href="dashboard.php"><span class="glyphicon glyphicon-home"></span> Dashboard </a></li>
      <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Perfil </a></li>
      <li><a href="page.php"><span class="glyphicon glyphicon-globe"></span> Página </a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Sair </a></li>
    </ul>
  </div>
  <div class="blur-div"></div>

EOT;
?>
