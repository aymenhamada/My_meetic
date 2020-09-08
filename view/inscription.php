
<!DOCTYPE html>
<html>
<head>
<title>My_meetic Sign Up</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat Sign Up Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="public/site_inscription/web/css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="public/site_inscription/web/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">

<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="public/site_inscription/web/css/my_style.css">

<style type="text/css">
    body {
    background:url('public/site_inscription/web/images/meet.jpg') no-repeat 0% 90% fixed;
    background-size: cover;
    font-family: 'Lato', sans-serif;
    text-align:center;
}
.main-agileits {
    margin: 2% auto;
    background: rgb(242, 242, 242,0.30);
    width: 32%;
    font-family: 'Lato', sans-serif;
}
.icon7 {
    top :390px;
}
.icon1,.icon2,.icon3,.icon4,.icon5,.icon6,.icon7{
    position: absolute;
    left: 60px;
    font-size: 18px;
    color: rgba(0, 0, 0, 0.83);
    width: 22px;
}
</style>
</head>
<body>

    <div class="header-w3l">
        <h1>My_meetic Sign Up</h1>
    </div>

<div class="main-agileits">
    <h2 class="sub-head">Sign Up</h2>
        <div class="sub-main">  
            <form action="index.php?action=addMember" method="post" enctype="multipart/form-data">
                <input placeholder="Nom" name="nom" class="name" type="text" required autocomplete="off" autofocus>
                    <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span><br>
                <input placeholder="Prénom" name="prenom" class="name2" type="text" required autocomplete="off">
                    <span class="icon2"><i class="fa fa-user" aria-hidden="true"></i></span><br>
                <input placeholder="date" name="date" class="number" type="date" required autocomplete="off">
                <span class="icon3"><i class="fa fa-calendar" aria-hidden"true" style="margin-right:-280px;"></i></span><br>
                    <select name ="sexe" size="1">
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                        <option value="Non Binaire">Non Binaire</option>
                    </select><br/>
                     <select name="ville">
                        <option>Ville</option>
                        <option value="Strasbourg">Strasbourg</option>
                        <option value="Paris">Paris</option>
                        <option value="Lyon">Lyon</option>
                        <option value="Marseille">Marseille</option>
                        <option value="Bordeaux">Bordeaux</option>
                        <option value="Lille">Lille</option>
                        <option value="Montpellier">Montpellier</option>
                    </select><br>
                    <p>Votre photos :</p><input type="file" name="monfichier">
                <input placeholder="Email" name="email" class="mail" type="text" required autocomplete="off">
                     <span class="icon4"><i class="fa fa-envelope" aria-hidden="true"></i></span><br>
                <input  placeholder="Password" name="passwd" class="pass" type="password" required>
                   <span class="icon5"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>
                <input  placeholder="Confirm Password" name="checkpasswd" class="pass" type="password"required >
                    <span class="icon6"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>
                
                <input type="submit" value="sign up">
            </form>
        </div>
        <div class="clear"></div>
</div>
<div class="footer-w3">

</div>
    
</form>
</body>
</html>

    


  

    