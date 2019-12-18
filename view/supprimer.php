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
      <a class="nav-link " href="lister.php">lister</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="modifier.php">modifier</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="supprimer.php">supprimer</a>
    </li>
  
</ul>
	<div class="tab-content" id="pills-tabContent">
  	<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
  	<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
  	<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>



  	<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">idClient</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Adresse</th>
      <th scope="col">telephone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php

      include("../model/recuperation.php");
      $cl = recuperation();
      foreach($cl as $a){


    ?>
    <tr>
      <td><?=$a[0]?></td>
      <td><?=$a[1]?></td>
      <td><?=$a[2]?></td>
      <td><?=$a[3]?></td>
      <td><?=$a[4]?></td>
      <td><a href="delete.php?id='<?=$a[0]?>'">supprimer</a></td>

    </tr>
    <?php } ?>
  </tbody>
</table>

</body>
</html>
