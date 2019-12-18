<?php
	require_once "db.php";
	function suppression($id)
	{
		$recup = getConnection();

		$sql = "DELETE  FROM client WHERE idClient =$id ";
		

		return $recup->query($sql)->fetchAll();

	} 
?>