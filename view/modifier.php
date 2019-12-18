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
      <a class="nav-link active" href="modifier.php">modifier</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="supprimer.php">supprimer</a>
    </li>
  
</ul>
	<div class="tab-content" id="pills-tabContent">
  	<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
  	<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
  	<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>



  	<div class="container">
  		<div class="row">
  			<div class="offset-md-3 col-md-6 border py-4 rounded bg-primary">
  				<form method="post" class="form-group">
  					<label>NOM:</label>
					<input type="text" name="nom" method="POST" class="form-control">
					<label>PRENOM:</label>
					<input type="text" name="prenom" method="POST" class="form-control">
					<label>ADRESS:</label>
					<input type="text" name="adress" method="POST" class="form-control">
					<label>TELEPHONE:</label>
					<input type="text" name="tel" method="POST" class="form-control">
					<div class="row">
						
						<div>
							<button class="form-control ">Enregistrer</button>
						</div>
	  					<div>
	  						<button class="form-control">Annuler</button>
	  					</div>
					</div>	
  				</form>
  				
  				
  			</div>
  			
  		</div>
		
	</div>

</body>
</html>
