<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Eror 404...</title>

	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">

	
	<link type="text/css" rel="stylesheet" href="public/site_error/web/css/style.css" />

</head>

<body>

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>4<span></span>4</h1>
			</div>
			<h2><?= htmlspecialchars($message) ?> </h2>
			<p>Turn back <a href="javascript:history.back()">HERE</a></p>
			<a href="../my_meetic">Back to website</a>
		</div>
	</div>

</body>

</html>
