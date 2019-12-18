<?php 
	include("../model/suppression.php");
	$del = $_GET["id"];

	suppression($del);
	header("location:supprimer.php");

 ?>