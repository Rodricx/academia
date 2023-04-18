<?php 
require "../database/conn.php";
require "../config/config.php";


$verificarTipoCampo = isEmpty($_POST, "Necessário preencher o campo", "field-warning", "alert alert-warning", 1, 2);

$validate = validate($verificarTipoCampo);

$query = $access->prepare("SELECT loginUser, passUser FROM usuario WHERE loginUser = :USUARIO AND passUser = :SENHA");
$query->bindValue(":USUARIO", $validate->text);
$query->bindValue(":SENHA", $validate->password);
$query->execute();

if($query->rowCount() > 0){
    echo json_encode([
        "msg" => "Aguarde enquanto redirecionamos você ...",
        "class" => "alert alert-success",
        "field" => [$_POST['user'][2], $_POST['pass'][2]]
    ]);
} else {
    echo json_encode([
        "msg" => "Acesso negado !",
        "class" => "alert alert-danger",
        "field" => [$_POST['user'][2], $_POST['pass'][2]]
    ]);
};

?>