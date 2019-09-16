<HTML>

<HEAD>
<TITLE> Site de culinário  </TITLE>
</HEAD>

<FONT FACE="algerian" SIZE=20 COLOR="white">   
<MARQUEE BEHAVIOR=scroll WIDTH=100% BGCOLOR=#0080FF> Receitas (ALTERAR) </MARQUEE>
<br>

<BODY BGCOLOR="#08298A">
<FONT FACE="arial" SIZE=5>

<BR>

<center> Alterar Receitas  </center>

<hr size=7 color"#0404B4">

<br> 

<?php

include_once('conexao.php');

$id = $_POST['id'];
$nomer = $_POST['nomer'];
$ingredientes = $_POST['ingredientes'];
$preparo = $_POST['preparo'];
$obs = $_POST['obs'];

$sqlupdate = "update tbreceita set nomer='".$nomer."' ,ingredientes='".$ingredientes."' ,preparo='".$preparo."' ,obs= $obs where id= $id";

$resultado = @mysql_query($conxecao, $sqlupdate);
if (!$resultado){
	die ('Query Inválida: ' . @mysqli_error($conxecao));
} else {
	echo "Receita Alterada com Sucesso";
}
mysql_close($conxecao);

?>

<br><br>

<input type="button" onclick="window.location='escolha.html';" value="Voltar">

</body>
</html>