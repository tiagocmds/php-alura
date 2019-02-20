   
<?php include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php") ;
include("banco-produto.php");

$id = $_GET["id"];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
?>

<html>
    <form action="altera-produto.php" method="post">
        <input type="hidden" name="id" value="<?=$produto["id"]?>">
    <table class="table">
        <tr>
            <td>Nome:</td>
            <td><input class="form-control" type="text" name="nome" value="<?=$produto["nome"]?>"></br></td>
        </tr>
        <tr>
            <td>Preco:</td>
            <td><input class="form-control" type="text" name="preco" value="<?=$produto["preco"]?>"></br></td>
        </tr>
        <tr>
            <td>Descriçao</td>
            <td><textarea class="form-control" name="descricao"><?=$produto["descricao"]?></textarea></td>
        </tr>
            <td></td>
            <td><input type="checkbox" name="usado" value="true">Usado</td>    
        <tr>
            <td>Categoria</td>
            <td>
                <select name="categoria_id" class="form-control">
                <?php foreach($categorias as $categoria) : 
                    $essaEahACategoria = $produto["categoria_id"] == $categoria['id'];
                    $selecao = $essaEahACategoria ? "selected='selected'" : "";
                    ?>
                    <option value="<?=$categoria["id"]?>" <?=$selecao?>>
                    <?=$categoria["nome"]?>
                    </option>
                <?php endforeach ?>
                </select>
            </td>    
        </tr>        
        <tr>
            <td><button class="btn btf-primary" type="submit">Alterar</button></td>
        </tr>
        
        
        
    </form>
</html>  