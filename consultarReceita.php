<?php include 'head.php'; 
include_once 'conexao.php';
include 'receita.class.php';

$receita = new Receita();
?>

<table border="1" width="auto">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>VER</th>
        <th>FUNCOES</th>
    </tr>

   <?php

	$lista=$receita->consulta();

    foreach($lista as $item):
    $id = $item['id'];
    ?>
    <tr>
        <td><?php echo $item['id']; ?></td>
        <td><?php echo $item['nomer']; ?></td>
        <td><a href="receita.php?id=<?php echo $item['id']; ?> ">Ver</a></td>
        <td><a href="alterar.php?id=<?php echo $item['id']; ?> ">EDITAR</a></td>
    </tr>
    <?php endforeach; 
exit;
    ?>
</table>


























 <form name="produto" action="consultarreceita.php" method="POST">

<center>
<B> Código: </B> <br> <br>
<INPUT TYPE="TEXT" SIZE=40 MAXLENGTH=60 NAME="id" PLACEHOLDER="Código" STYLE="width:550PX"> <p>

<br>
<hr size="3" color="#C0C0C0">
<br>

<input type="submit" value="Enviar">
<input type="reset" value="Apagar">
</center>
