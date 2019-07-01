<?php if(!isset($_SESSION['id'])) {session_start();}
require_once('includes/Database.php'); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
<?php require_once('Haut_de_page.php'); ?>
  <style>li.navelement.contact{color:white;font-size: 30px;}
  li.navelement.contact:hover{color:white;font-size: 30px;cursor: default;}
footer{position:absolute;}</style>
    <title>Contact</title>
  </head>
  <main>
  <body>
    <a href="index.php"><img class="logo" src="assets/logo.png" alt="Bastien Philibert"></a>
    <?php require_once('menunavigation.php'); //contactback ?>
<div class="flexContact">
    <form class="formContact" action="contact.php" method="post">
      <center><h1 class="formTitle">Contactez moi !</h1></center>
      <h4><?php if(isset($messageContact)){echo "$messageContact";} ?></h4>
      <center><div class="contactInfos">
      <input type="text" name="nameSender" class="nameSender" placeholder="Nom ou Pseudo">
      <input type="text" name="mail" placeholder="Votre adresse email *" required>
    </div></center>
    <div class="contactMessage">
      <input type="text" name="objet" placeholder="Objet du message *" class="objet" required>
      <textarea name="message" placeholder="Votre message *" class="message"  maxlength="1463" required></textarea>
    </div>
    <center><input type="submit" name="submitMess" value ="Envoyer !"></center>
    <p class="infosRequired">* Obligatoire</p>
    </form>

    <div class="infosContact">
      <center><h3 class="infosTitle">Mes coordonnées</h3></center>
      <div class="flexInfo"><i class="fas fa-at"></i><p class="textInfo">bastien.philibert<b>[at]</b>ynov.com</p></div>
      <div class="flexInfo"><i class="fas fa-phone"></i><p class="textInfo">06 46 10 60 15</p></div>
    </div>
  </div>

  </body>
</main>
  </html>