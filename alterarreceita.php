<?php include 'head.php'; 
include 'receita.class.php';
include_once('conexao.php');

$receita = new Receita();

$id=$_GET['id'];

$item=$receita->getFinal($id);

foreach($item as $dados):

?>



<font size="7"> ALTERAR </font>

<br> <br> <br>

<FORM method="post">
	
<!-- <b> Código </b> <br> <input type="number" name="id" value="<?php echo $dados['id']; ?>" readonly> <br> <br> -->

<b> Nome da Receita: </b> <br> <input type="text"  name="nomer" size="40" maxlength="60" style="width:500px" value="<?php echo $dados['nomer']; ?>" > <br> <br>

<b> Ingredientes: </b> <br> <input type="text" name="ingredientes"  style="width:500px" value="<?php echo $dados['ingredientes']; ?>">  </input> <br> <br>

<b> Modo de Preparo: </b> <br> <input type="text" name="preparo"  style="width:500px" value="<?php echo $dados['preparo']; ?>">  </input> <br> <br>

<b> Observações: </b> <br> <input type="text" name="obs"  style="width:500px" value="<?php echo $dados['obs']; ?>">  </input> <br> <br>
<input type="submit">
</form>
<input type='button' onclick="window.location='consultarReceita.php';" value="Voltar">

<?php

endforeach;

if (isset($_POST['nomer'])) {
$nomer = $_POST['nomer'];
$ingredientes = $_POST['ingredientes'];
$preparo = $_POST['preparo'];
$obs = $_POST['obs'];

$receita->alterar($id, $nomer, $ingredientes, $preparo, $obs);

header("Location: escolha.php");
}
?>

</body>
</html>