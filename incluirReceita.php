<?php include 'head.php'; ?>

<form name="receita" method="POST">
<center>	   
      <B> Nome da Receita: </B>  <BR>
      <INPUT TYPE="TEXT" SIZE=60 MAXLENGTH=80 NAME="nomer" STYLE="width:550PX"> </INPUT> 

      <p>
      <B> Ingredientes:</B> <BR> 
      <TEXTAREA MAXLENGTH=60 NAME="ingredientes" ROWS='6' COLS='76'> </TEXTAREA> 

      <p>
      <B> Modo de Preparo:</B> <BR>
      <TEXTAREA MAXLENGTH=60 NAME="preparo" ROWS='6' COLS='76'> </TEXTAREA> 

      <p>
      <B> Observações:</B> <BR>
      <TEXTAREA MAXLENGTH=60 NAME="obs" ROWS='6' COLS='76'> </TEXTAREA> 
<p>

<br>
<hr size="3" color="#C0C0C0">
<br>

<input type="submit" value="Enviar">
<input type="reset" value="Apagar">
</center>
<?php
include 'receita.class.php';
include_once('conexao.php');

$receita = new Receita();
//recuperando
if (isset($_POST['nomer'])) {

$nomer = $_POST['nomer'];
$ingredientes = $_POST['ingredientes'];
$preparo = $_POST['preparo'];
$obs = $_POST['obs'];

$receita->addReceita($nomer, $ingredientes, $preparo, $obs);
header("Location: index.php");

}
?>