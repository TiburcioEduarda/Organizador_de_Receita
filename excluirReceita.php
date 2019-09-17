<?php include 'head.php'; ?>
<?php
include_once 'conexao.php';
include 'receita.class.php';

$receita = new Receita();

$id=$_GET['id'];
//recuperand

$receita->excluirReceita($id);

header("location: index.php");

// echo  "<script>alert(Receita Excluida com Sucesso!);</script>";

?>

