<?php 
include 'head.php'; 
include_once 'conexao.php';
include 'receita.class.php';

$receita = new Receita();

$id = $_GET['id'];

$item=$receita->getFinal($id);
foreach($item as $r):

?>


<font size="7"> CONSULTA </font>

<br> <br> <br>

<b> Código </b> <br> <input type="number" style="width:550px" value="<?php echo $r["id"]; ?>" readonly> <br> <br>

<b> Nome da Receita: </b> <br> <input type="text" maxlength="60" style="width:550px" value="<?php echo $r["nomer"]; ?>" readonly> <br> <br>

<b> Ingredientes: </b> <br> <textarea rows="6" cols="76" style="resize: nome;" readonly> <?php echo $r["ingredientes"]; ?> </textarea> <br> <br>

<b> Modo de Preparo: </b> <br> <textarea rows="6" cols="76" style="resize: nome;" readonly> <?php echo $r["preparo"]; ?> </textarea> <br> <br>

<b> Observações: </b> <br> <textarea rows="6" cols="76" style="resize: nome;" readonly> <?php echo $r["obs"]; ?> </textarea> <br> <br> <br>
<?php endforeach  ?>

<input type='button' onclick="window.location='escolha.php';" value="Voltar">