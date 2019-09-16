<?php include 'head.php'; ?>
<form name="produto" method="POST">

<center>
<B> Código: </B> <br> <br>
<INPUT TYPE="TEXT" SIZE=40 MAXLENGTH=60 NAME="id" PLACEHOLDER="Código" STYLE="width:550PX"> <P> 

<br> 
<hr size="3" color="#C0C0C0">
<br>

<input type="submit" value="Enviar">
<input type="reset" value="Apagar">
</center>


<?php
include_once 'conexao.php';
include 'receita.class.php';

$receita = new Receita();
//recuperando
if (isset($_POST['id'])==true) {

$id = $_POST['id'];

$receita->excluirReceita($id);

header("location: index.php");

// echo  "<script>alert(Receita Excluida com Sucesso!);</script>";
}
?>

