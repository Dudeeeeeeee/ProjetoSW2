<?php

session_start();

if (!isset($_SESSION["nome"]) )
{
    header("location: login.php");
}

?>

<?php

    $servidor = "localhost";
    $bancodados = "projetosw";
    $usuario = "root";
    $senha = "";

    $datasource = "mysql:host=$servidor;dbname=$bancodados;charset=UTF8";

    $conexao = new PDO($datasource, $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>