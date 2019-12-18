<?php
	require_once "db.php";
	function addEnregistrement($nom, $prenom, $adress,$tel)
	{
		$conn = getConnection();

		$sql = "INSERT INTO client VALUES(null,'$nom','$prenom','$adress',$tel) ";
		

		$conn->exec($sql);
	} 


	function EnregistrerCompte($idclient, $montant)
	{
		$con = getConnection();

		$sql = "INSERT INTO compte VALUES(null, $montant, $idclient) ";
		$con->exec($sql);
	}
?>