<?php 

require "../database/conn.php";
require "../config/config.php";

validate($_POST, "Necessário preencher o campo", "field-warning", "alert alert-warning");




/**
 * To do
 *  - Criar validação para campo vazio;
 *  - Criar validação para evitar códigos maliciosos;
 * X - Separar  conexão em arquivo a parte;
 */

$query = $access->prepare("SELECT loginUser, passUser FROM usuario WHERE loginUser = :USUARIO AND passUser = :SENHA");
$query->bindValue(":USUARIO", $_POST['usuario']);
$query->bindValue(":SENHA", $_POST['senha']);
$query->execute();

if($query->rowCount() > 0){
    echo json_encode([
        "msg" => "Aguarde enquanto redirecionamos você ...",
        "class" => "alert alert-success"
    ]);
} else {
    echo json_encode([
        "msg" => "Acesso negado !",
        "class" => "alert alert-danger"
    ]);
};

// To do Eliminar var_dump
// To do rever o gitignore

?>