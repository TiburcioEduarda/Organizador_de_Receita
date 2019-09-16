<?php
class Receita{
	private $pdo;
    //Conectando ao Banco de Dados.
    public function __construct(){
        $this->pdo = new PDO("mysql:dbname=cozinha;host=localhost","root","");
    }

    public function excluirReceita($id){
    	$sql = "DELETE FROM tbreceita WHERE id=:id";
    	$sql = $this->pdo->prepare($sql);
    	$sql->bindValue(':id', $id);
    	$sql->execute();
    	return true;
    }

    public function addReceita($nomer, $ingredientes, $preparo, $obs){
    	$sql = "INSERT INTO tbreceita(nomer, ingredientes, preparo, obs) VALUES (:nomer, :ingredientes, :preparo, :obs)";
    	$sql = $this->pdo->prepare($sql);
    	$sql->bindValue(':nomer', $nomer);
    	$sql->bindValue(':ingredientes', $ingredientes);
    	$sql->bindValue(':preparo', $preparo);
    	$sql->bindValue(':obs', $obs);
    	$sql->execute();
    	return true;
    // WHERE id=:id
    }

    public function consulta(){
    	$sql = "SELECT * FROM tbreceita ";
    	$sql = $this->pdo->prepare($sql);
    	// $sql->bindValue(':id', $id);
    	$sql->execute();

    	if ($sql->rowCount() > 0) {
            return $sql->fetchAll();
        }else {
            return array();
        }
    }
    public function getFinal($id){
    	$sql = "SELECT * FROM tbreceita WHERE id=:id";
    	$sql = $this->pdo->prepare($sql);
    	$sql->bindValue(':id', $id);
    	$sql->execute();

    	if ($sql->rowCount() > 0) {
            return $sql->fetchAll();
        }else {
            return array();
        }
    }

    public function alterar($id, $nomer, $ingredientes, $preparo, $obs){
    	$sql = "UPDATE  tbreceita SET nomer = :nomer,ingredientes = :ingredientes, preparo = :preparo, obs =:obs WHERE  id = :id";
	$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':id', $id);
    	$sql->bindValue(':nomer', $nomer);
    	$sql->bindValue(':ingredientes', $ingredientes);
    	$sql->bindValue(':preparo', $preparo);
    	$sql->bindValue(':obs', $obs);
    	$sql->execute();
    	return true;
    }


}

























?>