<?php if(!isset($_SESSION['id'])) {session_start();}
require_once('includes/Database.php'); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
<?php require_once('Haut_de_page.php');
require_once('fonction.php'); ?>
  <style>li.navelement.experiences{color:white;font-size: 30px;}
  li.navelement.experiences:hover{color:white;font-size: 30px;cursor: default;}</style>
    <title>Expériences</title>
  </head>
  <main>
  <body>
    <header>
    <a href="index.php"><img class="logo" src="assets/logo.png" alt="Bastien Philibert"></a>

    <a href="competence.php"><button class="boutonExpComp" type="button" name="button">Compétences</button></a>
  </header>
    <?php require_once('menunavigation.php'); ?>

    <div class="containerExperiences">
      <?php
      $q = $db->prepare('SELECT * FROM experience');
      $q->execute();
      while($data = $q->fetch()){
      ?>

          <div class="experience">
            <div class="banniereExp" ><center><img src="assets/exps/cards/<?php echo $data['exp']; ?>.png" alt=""></center></div>
            <div class="descExpContainer">
                <p class="nomExp"><b><?php echo $data['exp']; ?></b></p>
                <p class="descExp"><?php echo $data['descCard']; ?></p>
                <div class="footerCard">
                  <p class="dateExp"><i><?php dureeExp($db,$data['id_exp']); ?></i></p>
                  <a href="exp.php?id=<?php echo $data['id_exp']; ?>"><button class="boutonExpDecouverte" type="button" name="button">Decouvrir</button></a>
                </div>
            </div>
          </div>
<?php } ?>



    </div>


    </div>
            <center><a href="contact.php"><button class="boutonContact" type="button" name="button">Contactez moi</button></a></center>
  </body>
</main>
  </html>