<?php
	require_once "db.php";
	function recuperation()
	{
		$recup = getConnection();

		$sql = "SELECT * FROM client ";
		

		return $recup->query($sql)->fetchAll();

	} 

	function recuperationCompte($idc)
	{
		$recup = getConnection();

		$sql = "SELECT * FROM compte WHERE idClientC = $idc ";
		

		return $recup->query($sql)->fetchAll();

	} 
?>