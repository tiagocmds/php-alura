   
<?php include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php") ;
$categorias = listaCategorias($conexao);
?>

<html>
    <form action="adiciona-produto.php" method="post">
    <table class="table">
        <tr>
            <td>Nome:</td>
            <td><input class="form-control" type="text" name="nome"></br></td>
        </tr>
        <tr>
            <td>Preco:</td>
            <td><input class="form-control" type="text" name="preco"></br></td>
        </tr>
        <tr>
            <td>Descriçao</td>
            <td><textarea class="form-control" name="descricao"></textarea></td>
        </tr>
            <td></td>
            <td><input type="checkbox" name="usado" value="true">Usado</td>    
        <tr>
            <td>Categoria</td>
            <td>
                <select name="categoria_id" class="form-control">
                <?php foreach($categorias as $categoria) : ?>
                    <option value="<?=$categoria["id"]?>">
                    <?=$categoria["nome"]?>
                    </option>
                <?php endforeach ?>
                </select>
            </td>    
        </tr>        
        <tr>
            <td><button class="btn btf-primary" type="submit">Cadastrar</button></td>
        </tr>
        
        
        
    </form>
</html>  

<?php include("rodape.php") ?>