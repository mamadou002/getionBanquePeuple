<?php
  
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BanqueDuPeuple</title>
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
</head>
<body>
	<nav class="nav navbar-expand-sm bg-primary text-center">
			<h1>ADMIN</h1>
	</nav>


	<ul class="nav nav-pills nav-justified">
    <li class="nav-item">
      <a class="nav-link " href="../index.php">AjoutClient</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="liste.php">lister</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="modifier.php">modifier</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="supprimer.php">supprimer</a>
    </li>
  
</ul>

<ul class="nav nav-pills nav-justified">
    <li class="nav-item">
      <a class="nav-link " href="../index.php">CLIENT</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="view/ajoutCompte.php">COMPTE</a>
    </li>
  
</ul>
	<div class="tab-content" id="pills-tabContent">
  	<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
  	<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
  	<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">idcompte</th>
      <th scope="col">solde</th>
      <th scope="col">idClient</th>
    </tr>
  </thead>
  <tbody>
    <?php

      include("../model/recuperation.php");
      $del = $_GET["id"];
      $cle = recuperationCompte($del);
      foreach($cle as $ac){


    ?>
    <tr>
      <td><?=$ac[0]?></td>
      <td><?=$ac[1]?></td>
      <td><?=$ac[2]?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

</body>
</html>
