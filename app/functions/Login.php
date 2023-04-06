<?php 

$access = new PDO("mysql:host=localhost;dbname=projeto_academia", "root", "");
$query = $access->prepare("SELECT loginUser, passUser FROM usuario WHERE loginUser = :USUARIO AND passUser = :SENHA");
$query->bindValue(":USUARIO", $_POST['usuario']);
$query->bindValue(":SENHA", $_POST['senha']);
$query->execute();

$result = $query->fetch(PDO::FETCH_ASSOC);

var_dump($result);
// To do Eliminar var_dump

?>