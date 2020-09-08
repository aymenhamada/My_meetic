<!DOCTYPE html>
<html>
<head>
<?php
	while ($profil = $profile->fetch()) 
	{
			$name = htmlspecialchars($profil['prenom'])." ".htmlspecialchars($profil['nom']);
?>
	<title><?= htmlspecialchars($name) ?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="public/site_SeeProfile/web/css/my_style.css">
</head>
<body>
<a href="index.php?action=GetBackToChat">Get Back</a>
		<div class="card">
			<?php 
			$path = 'uploads/'.htmlspecialchars($profil['id']).'.jpg';
			if (file_exists($path)) {
				echo "<img class='img-circle' src='uploads/".htmlspecialchars($profil['id']).".jpg''>";
			}   
			else {
				if(htmlspecialchars($profil['sexe']) == 'Homme') {
					echo "<img class='img-circle' src='uploads/user.png'>";

				} elseif(htmlspecialchars($profil['sexe']) == 'Femme') {
					echo "<img class='img-circle' src='uploads/girl.jpeg'>";
				} elseif(htmlspecialchars($profil['sexe']) == 'Non Binaire') {
					echo "<img class='img-circle' src='uploads/gay.jpeg'>";
				}
			}
			?>
			<h1><?= htmlspecialchars($profil['prenom']).' '.htmlspecialchars($profil['nom'])?></h1>
			<p class="title"><?= htmlspecialchars($profil['ville']).", FR"?></p>
			<p><?= htmlspecialchars($profil['sexe'])?></p>
			<p><?= htmlspecialchars($profil['age'])." ans"?></p>
			<a href="#"><i class="fa fa-dribbble"></i></a> 
			<a href="#"><i class="fa fa-twitter"></i></a> 
			<a href="#"><i class="fa fa-linkedin"></i></a> 
			<a href="#"><i class="fa fa-facebook"></i></a> 
			<p><button>Contact</button></p>
			<?php	
		}
		?>
	</div>
</body>
</html>