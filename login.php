<?php
include("conecta.php");
include("banco-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if($usuario == null) {
    header("Location: index.php?login=0");
} else {
    header("Location: index.php?login=1");
}
die();

function buscaUsuario($conexao, $email, $senha) {
    $senhaMd5 = md5($senha);
    $query = "select * from usuarios where email='{$email}' and senha='{$senhaMd5 }'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}