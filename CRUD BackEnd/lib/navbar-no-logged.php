<?php

  echo <<< EOT

  <div class="background"></div>
  <nav class="navbar-logged navbar-no-logged navbar-no-logo">
    <div class="menu-content">
      <ul>
        <li>
          <div class="hamburger">
            <div class="hamburger-1"></div>
            <div class="hamburger-2"></div>
            <div class="hamburger-3"></div>
          </div>
        </li>
        <li>
          <a href="home.php"><img src="imgs/logo.png" class="center-block logo" alt=""></a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="side-menu side-no-logo side-no-logged">
    <ul>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Entrar </a></li>
      <li><a href="register.php"><span class="glyphicon glyphicon-plus"></span> Registrar </a></li>
    </ul>
  </div>
  <div class="blur-div"></div>

EOT;
?>
