<?php 
    include("cabecalho.php"); 
    include("conecta.php"); 
    include("banco-produto.php"); 

    $id = $_POST["id"];
    removeProduto($conexao, $id);
    //retorno para pagina produto-lista
    header("Location: produto-lista.php?removido=true");
    //Morre aqui, não executa mais nada, sempre usar depois do location!!!!!!
    die();
?>