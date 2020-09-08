<!DOCTYPE html>
<html>
<head>
	<title>Chat Club</title>
<meta http-equiv="refresh" content="25">
	<link rel="stylesheet" type="text/css" href="public/site_chat/web/css/my_style.css">
</head>
<body>

<div class="scroll">
  <div class="container">
	<?php
	if (isset($AllMessage)) {
		if(isset($AllAuthor)) {
			foreach ($AllAuthor as $key => $value) {
				$compteur = $manager->getOldestMessage();
				echo "<div class='message blank'></div>"."<div class='message you'><span><a href='index.php?action=SeeProfile&amp;id=".htmlspecialchars($value['id'])."'>";
				$path = 'uploads/'.htmlspecialchars($value['id']).'.jpg';
            if (file_exists($path)) {
              echo "<img class='img-circle' src='uploads/".htmlspecialchars($value['id']).".jpg''>";
            }   
            else {
                if(htmlspecialchars($value['sexe']) == 'Homme') {
                    echo "<img class='img-circle' src='uploads/user.png'	>";

                } elseif(htmlspecialchars($value['sexe']) == 'Femme') {
                   echo "<img class='img-circle' src='uploads/girl.jpeg'>";
                } elseif(htmlspecialchars($value['sexe']) == 'Non Binaire') {
                   echo "<img class='img-circle' src='uploads/gay.jpeg' >";
             }
           }echo "</a><strong>".htmlspecialchars($value['prenom']).' '.htmlspecialchars($value['nom']).' </strong>';

				$data = $AllMessage->fetch();
				echo htmlspecialchars($data['date']).' : '.htmlspecialchars($data['message'])."</span>"."</div>"; 
				
			}

			if (count($AllAuthor) > 7 ) {
				$lol = $manager->autoDelete($compteur['id']);
					
			}
			
		}
		
	}
	?>


</div>
</div>

<img src="public/site_chat/web/images/logo.jpeg">;
<form method="POST" action="index.php?action=InsertMessage">
		<input type="text" name="message" autocomplete="off">
		<input type="submit" name="Envoyer">

	<a href="index.php?action=GetBack"><p>Get Back</p></a>
	</form>
<style type="text/css">
		.img-circle {
  width: 70px;
  height: 70px; 
  position: relative;  
  right: 0px;
  bottom: 0px;
  z-index: 1; 
  text-align: center;
  clear: both; 
  margin: auto; 
  position: relative;
  border-radius: 50%;
  
}
</style>
<script type="text/javascript">
	$(function() {
  $(".scroll").scrollTop($(".container").height());
}); 
</script>
</body>
</html>