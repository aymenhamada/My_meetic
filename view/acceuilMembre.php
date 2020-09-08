<!DOCTYPE html>
<html lang="fr">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Bienvenue sur my meetic !</title>
	<link rel="stylesheet" type="text/css" href="public/site_membre/web/css/my_style.css">
	<link rel="stylesheet" href="public/site_membre/web/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/site_membre/web/css/font-awesome.min.css">

	<link rel="stylesheet" href="public/site_membre/web/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">
	

</head>
<body>


	<div class="preloader">
		<div class="sk-spinner sk-spinner-wordpress">
			<span class="sk-inner-circle"></span>
		</div>
	</div>



	<div class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">

			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a  class="navbar-brand">My_Meetic</a>
			</div>
			<div class="collapse navbar-collapse">
				<nav>
					<a class="dropdown-toggle" href="#" title="Menu">Menu</a>
					<ul class="dropdown">
						<li><a href="index.php?action=AccountMember">My account</a></li>
						<li><a href="index.php?action=LogOut">Deconnexion</a></li>
						<li><a href="index.php?action=ChatClub">Chat Club</a></li>
					</ul>
				</nav>


			</div>

		</div>
	</div>



	<section id="home" class="main-home parallax-section">
		<div class="overlay"></div>
		<div id="particles-js"></div>
		<div class="container">
			<div class="row">

				<div class="col-md-12 col-sm-12">
					<h1>Hello! <?= htmlspecialchars(($_SESSION['nom'])).' '.htmlspecialchars($_SESSION['prenom']) ?></h1>
					<a href="index.php?action=SearchLove" class="smoothScroll btn btn-default">Rechercher votre âme soeur</a>
				</div>

			</div>
		</div>
	</section>


	<!-- Footer Section -->

	<footer>
		<div class="container">
			<div class="row">

				<div class="col-md-5 col-md-offset-1 col-sm-6">
					<h3>My_Meetic Studio</h3>
					<p>The best dating site in the world ! created and designed by Aymen HAMADA	</p>
					<div class="footer-copyright">
						<p>Copyright &copy; 2019 My_Meetic </p>
					</div>
				</div>

				<div class="col-md-4 col-md-offset-1 col-sm-6">
					<h3>Talk to us</h3>
					<p><i class="fa fa-globe"></i> Epitech Strasbourg</p>
					<p><i class="fa fa-phone"></i> Fake number</p>
					<p><i class="fa fa-save"></i> aymen.hamada@epitech.eu</p>
				</div>

				<div class="clearfix col-md-12 col-sm-12">
					<hr>
				</div>

				<div class="col-md-12 col-sm-12">
					<ul class="social-icon">
						<li><a href="#" class="fa fa-facebook"></a></li>
						<li><a href="#" class="fa fa-twitter"></a></li>
						<li><a href="#" class="fa fa-google-plus"></a></li>
						<li><a href="#" class="fa fa-dribbble"></a></li>
						<li><a href="#" class="fa fa-linkedin"></a></li>
					</ul>
				</div>

			</div>
		</div>
	</footer>

	<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>



	<script src="public/site_membre/web/js/jquery.js"></script>
	<script src="public/site_membre/web/js/custom.js"></script>
	<script src="public/site_membre/web/js/my_script.js"></script>
	
<style type="text/css">
	.main-home{
  background: url('public/site_membre/web/images/va.jpg') no-repeat;
  height: 100vh;

}
</style>
</body>
</html>
