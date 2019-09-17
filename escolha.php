<?php include 'head.php'; 
include_once 'conexao.php';
include 'receita.class.php';

$receita = new Receita();
?>

<table border="1" width="auto">
    <tr>
        <th>CÓDIGO</th>
        <th>NOME</th>
        <th>CONSULTAR</th>
        <th>ALTERAR</th>
        <th>EXCLUIR</th>
    </tr>

   <?php

	$lista=$receita->consulta();

    foreach($lista as $item):
    $id = $item['id'];
    ?>
    <tr>
        <td><?php echo $item['id']; ?></td>
        <td><?php echo $item['nomer']; ?></td>
        <td><a href="consultarReceita.php?id=<?php echo $item['id']; ?> ">CONSULTAR</a></td>
        <td><a href="alterarReceita.php?id=<?php echo $item['id']; ?> ">ALTERAR</a></td>
        <td><a href="excluirReceita.php?id=<?php echo $item['id']; ?> ">EXCLUIR</a></td>
    </tr>
    <?php endforeach; 
exit;
    ?>
</table>

<form> 
<input type="submit">
</form>