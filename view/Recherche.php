<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="author" content="colorlib.com">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,800" rel="stylesheet" />
  <link href="public/site_recherche/web/css/main.css" rel="stylesheet" />
  <link href="public/site_recherche/web/css/my_style.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="public/site_recherche/web/css/style.css">
</head>
<body>
  <div class="collapse navbar-collapse">
    <nav>
      <a class="dropdown-toggle" href="#" title="Menu">Menu</a>
      <ul class="dropdown">
        <li><a href="index.php?action=GetBack">Home</a></li>
        <li><a href="index.php?action=LogOut">Deconnexion</a></li>
      </ul>
    </nav>


  </div>

  <div class="s004">
    <fieldset>
      <legend><h2>What are you looking for?</h2></legend>
      <div class="inner-form">
        <div class="input-field">
          <form action="index.php?action=SearchPeople" method="post">
            <select name="gender">
              <option value="sexe">Choissez le sexe</option>
              <option value="Homme">Homme</option>
              <option value="Femme">Femme</option>
              <option value="Non Binaire">Autres</option>
            </select>
            <select name="year">
              <option value="tranche">Tranche d'age</option>
              <option value="1825">18-25</option>
              <option value="2535">25-35</option>
              <option value="3545">35-45</option>
              <option value="4599">45+</option>
            </select>
            <input type="checkbox" id="Strasbourg" name="checklist[]" value="Strasbourg">
            <label for="Strasbourg">Strasbourg</label>
            <input type="checkbox" id="Paris" name="checklist[]" value="Paris">
            <label for="Paris">Paris</label>
            <input type="checkbox" id="Lyon" name="checklist[]" value="Lyon">
            <label for="Lyon">Lyon</label>
            <input type="checkbox" id="Marseille" name="checklist[]" value="Marseille">
            <label for="Marseille">Marseille</label>
            <input type="checkbox" id="Bordeaux" name="checklist[]" value="Bordeaux">
            <label for="Bordeaux">Bordeaux</label>
            <input type="checkbox" id="Lille" name="checklist[]" value="Lille">
            <label for="Lille">Lille</label>
            <input type="checkbox" id="Montpellier" name="checklist[]" value="Montpellier">
            <label for="Montpellier">Montpellier</label>

            <input type="submit" name="Rechercher">
          </form>
        </div>
      </div>
    </fieldset>
    <?php
    if (!empty($result)) {


     ?>   

     <section>
      <ul class="carousel">
        <?php 
        foreach ($result as $key => $value) {

          static $count = 0;
          $count++;
          ?>
          <li class="items main-pos" id="<?= $count ?>">
            <?php 
            $path = 'uploads/'.htmlspecialchars($value['id']).'.jpg';
            if (file_exists($path)) {
              echo "<img class='picture' src='uploads/".htmlspecialchars($value['id']).".jpg''>";
            }   
            else {
                if(htmlspecialchars($value['sexe']) == 'Homme') {
                    echo "<img class='picture' src='uploads/user.png'>";

                } elseif(htmlspecialchars($value['sexe']) == 'Femme') {
                   echo "<img class='picture' src='uploads/girl.jpeg'>";
                } elseif(htmlspecialchars($value['sexe']) == 'Non Binaire') {
                   echo "<img class='picture' src='uploads/gay.jpeg'>";
             }
           }
           ?>
           <p>
             <?=  htmlspecialchars($value['prenom'])."  " .htmlspecialchars($value['nom']) ?><br>
             <?=  htmlspecialchars($value['age'])."ans" ?><br>
             <?= htmlspecialchars($value['sexe']) ?><br>
             <?= htmlspecialchars($value['ville']) ?><br>
             <a href= <?='mailto:'.htmlspecialchars($value['email']).'?Subject=Hello%20I%20Saw%20You%20On%20My_meetic' ?> target="_top">Contacter Par mail</a>
           </p></li>
           <?php

         }

         ?> 
       </ul>
       <span>
        <input type="button" value="Prev" id="prev">
        <input type="button" value="Next" id="next">
      </span>
    </section>
    <?php
  }
  elseif(empty($result) && isset($result)){
    echo "<h3> Aucun résultat trouver veuillez réesayer avec d'autre critère de selection</h3>";
  }
  ?>
  <script src="public/site_recherche/web/js/extention/choices.js"></script>
  <script>
    var textPresetVal = new Choices('#choices-text-preset-values',
    {
      removeItemButton: true,
    });

  </script>
  <script src="public/site_recherche/web/js/jquery.js"></script>
  <script src="public/site_recherche/web/js/my_script.js"></script>
  <script src="public/site_membre/web/js/my_script.js"></script>

</body>
</html>
