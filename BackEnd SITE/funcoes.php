<?php
$configDB["User"] = "";
$configDB["Name"] = "";
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
    $query->execute(array($titulo,$texto));
}



/* FUNÇÃO DE LISTAGEM DE NOTÍCIA */
function listaNoticia() {
    $pdo = ConnectaNoBanco();

    $query = $pdo->prepare('SELECT * FROM `noticias`');
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
}
