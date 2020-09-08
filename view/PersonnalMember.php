<?php
if (!isset($_SESSION))
{
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Account Settings</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="public/site_accountmembre/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/site_inscription/web/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/site_accountmembre/css/my_style.css">
</head>
<body>
    <style type="text/css">
    body {
        background:url('public/site_accountmembre/images/setting.jpg') no-repeat 0% 87% fixed;
        background-size: cover;
        font-family: 'Lato', sans-serif;
        text-align:center;
    }
</style>
<div class="container">
    <div class="row">

        <div class="col-sm-4 col-md-4 user-details">

            <div class="user-image">
                <?php
                $path = 'uploads/'.htmlspecialchars($_SESSION['id']).'.jpg';
                if (file_exists($path)) {
                  echo "<img  src='uploads/".htmlspecialchars($_SESSION['id']).".jpg'class='img-circle''> ";
              }   
              else {
                if(htmlspecialchars($_SESSION['sexe']) == 'Homme') {
                    echo "<img  src='uploads/user.png' class='img-circle'>";

                } elseif($_SESSION['sexe'] == 'Femme') {
                 echo "<img  src='uploads/girl.jpeg' class='img-circle'>";
             } elseif(htmlspecialchars($_SESSION['sexe']) == 'Non Binaire') {
                 echo "<img  src='uploads/gay.jpeg' class='img-circle'>";
             }
         }
         ?>
         
     </div>
     <div class="user-info-block">
        <div class="user-heading">
           <nav>
            <a class="dropdown-toggle" href="#" title="Menu">Menu</a>
            <ul class="dropdown">
                <li><a href="index.php?action=GetBack">Home</a></li>
                <li><a href="index.php?action=LogOut">Deconnexion</a></li>
            </ul>
        </nav>  
        <h3> <?= htmlspecialchars($_SESSION['nom']).' '.htmlspecialchars($_SESSION['prenom']) ?>  </h3>
        <span class="help-block"> <?= htmlspecialchars($_SESSION['ville']) ?>, FR</span>
    </div>
    <ul class="navigation" id="tabs">
        <li class="active">
            <a data-toggle="tab" href="#tab1">
                <p>Profil</p>   
                <span class="glyphicon glyphicon-user"></span>
            </a>
        </li>
        <li>
            <a data-toggle="tab" href="#tab2">
                <p>Password</p>
                <span class="glyphicon glyphicon-cog"></span>
            </a>
        </li>
        <li>
            <a data-toggle="tab" href="#tab3">
                <p>Delete Acct</p>
                <span class="glyphicon glyphicon-trash"></span>
            </a>
        </li>
        <div class="tab_container">
          <div id="tab1" class="tab_content">
           <div class="user-body">
            <div class="tab-content">
                <div id="information" class="tab-pane active">
                    <p style="color: red;font-size: 25px;">ACCOUNT INFORMATION</p>

                    <div class="sub-main"> 
                        <form action="index.php?action=UpdateMember" method="post">
                            <input placeholder="Nom" name="nom" class="name" type="text" required autocomplete="off" autofocus value=<?= htmlspecialchars($_SESSION['nom'])?>>
                            <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span><br>
                            <input placeholder="Prénom" name="prenom" class="name2" type="text" required autocomplete="off"value=<?= htmlspecialchars($_SESSION['prenom'])?>>
                            <span class="icon2"><i class="fa fa-user" aria-hidden="true"></i></span><br>
                            <input placeholder="date" name="date" class="number" type="date" required autocomplete="off" value=<?= htmlspecialchars($_SESSION['date'])?>>
                            <span class="icon3"><i class="fa fa-phone" aria-hidden="true"></i></span><br>
                            <p> sexe : <?= htmlspecialchars($_SESSION['sexe']) ?></p>
                            <select name ="sexe" size="1">
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                                <option value="Non binaire">Non Binaire</option>
                            </select><br/>
                            <select name="ville">
                              <option value="Strasbourg">Strasbourg</option>
                              <option value="Paris">Paris</option>
                              <option value="Lyon">Lyon</option>
                              <option value="Marseille">Marseille</option>
                              <option value="Bordeaux">Bordeaux</option>
                              <option value="Lille">Lille</option>
                              <option value="Montpellier">Montpellier</option>
                          </select><br/><br>
                          <input placeholder="Email" name="email" class="mail" type="text" required autocomplete="off"value= <?= htmlspecialchars($_SESSION['email'])?>>  

                          <input type="submit" value="Save Change">
                      </form>
                      <?php 
                      if (isset($validate)) {
                        echo '<p>'.$validate.'</p>';
                    }
                    ?>
                </div>
            </div>
            <div id="settings" class="tab-pane">
                <h4>Settings</h4>
            </div>
            <div id="email" class="tab-pane">
                <h4>Send Message</h4>
            </div>
            <div id="events" class="tab-pane">
                <h4>Events</h4>
            </div>
        </div>
    </div>
</div>
</div>
<div id="tab2" class="tab_content">

 <form action="index.php?action=ChangePassWord" method="post">
    <input  placeholder="Old Password" name="oldpasswd" class="pass" type="password" required>
    <input  placeholder="New Password" name="newpasswd" class="pass" type="password"required >
    <input  placeholder="Confirm New Password" name="checknewpasswd" class="pass" type="password" required><br/>
    <input type="submit" value="Save Change">
    <?php
    if (isset($changepasswd)) {
        echo '<p>Votre mot de passe a bien étais modifié</p>';
    }
    ?>
</form>


</div>
<div id="tab3" class="tab_content">
    <p>Are you sure you want to Delete your account?</p>
    <a href="index.php?action=DeleteAccount"><input type="submit" value="Oui chef !"></a>
</div>
</div>

</ul>

</div>
</div>
</div>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="public/site_accountmembre/js/my_script.js"></script>
</body>
</html>


