<?php
$configDB["User"] = "root";
$configDB["Name"] = "backnerdwerb";
$configDB["Pass"] = "";
$configDB["Host"] = "localhost";
$configDB["Port"] = 3306;

/* FUNÇÃO DE CONEXÃO COM O BANCO DE DADOS (NÃO ALTERAR) */
function ConnectaNoBanco () {

    global $configDB;

    if (!isset($configDB["Port"], $configDB["User"], $configDB["Pass"], $configDB["Host"], $configDB["Name"])) {
        die("Database Not Initialized, Please load the configuration file");
    }

    $user = $configDB["User"];
    $dbname = $configDB["Name"];
    $pass = $configDB["Pass"];
    $host = $configDB["Host"];
    $port = $configDB["Port"];

    // Set DSN
    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
    // Set options
    $options = array(PDO::ATTR_PERSISTENT => TRUE, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    // Create a new PDO instanace
    try {
        $dbh = new PDO($dsn, $user, $pass, $options);
        return $dbh;
    } // Catch any errors
    catch (PDOException $e) {
        var_dump($e->getMessage());
    }
    return NULL;
}



/* FUNÇÃO DE INSERÇÃO DE NOTÍCIA */
function insereNoticia($titulo,$texto) {
    $pdo = ConnectaNoBanco();

    $query = $pdo->prepare('INSERT INTO `noticias` (`titulo`, `texto`) VALUES (?, ?);');
    if($query->execute(array($titulo,$texto))){
      return true;
    }else
      return false;
}



/* FUNÇÃO DE LISTAGEM DE NOTÍCIA */
function listaNoticia() {
    $pdo = ConnectaNoBanco();
    $query = $pdo->prepare('SELECT * FROM `noticias`');
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function carregaRegistro($id){
  $pdo = ConnectaNoBanco();
  $query = $pdo->prepare('SELECT * FROM `noticias` where `idnoticias` = (?)');
  $query->execute(array($id));
  return $query->fetch();
}

function editarNoticia($id, $titulo, $texto){
  $pdo = ConnectaNoBanco();
  $query = $pdo->prepare('UPDATE `noticias` SET `idnoticias`=(?),`titulo`=(?), `texto`=(?) where `idnoticias`=(?);');
  if($query->execute(array($id,$titulo,$texto,$id))){
    return true;
  }else
    return false;
}

function verifica_campo($texto){
  $texto = trim($texto);
  $texto = stripslashes($texto);
  $texto = htmlspecialchars($texto);
  return $texto;
}
