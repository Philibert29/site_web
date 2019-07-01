

<?php include 'Haut_de_page.php'; ?>
<?php if(!isset($_SESSION['id'])) {session_start();}
require_once('includes/Database.php'); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
<?php require_once('Haut_de_page.php');
require_once('fonction.php'); ?>
  <style>li.navelement.competences{color:white;font-size: 30px;}
  li.navelement.competences:hover{color:white;font-size: 30px;cursor: default;}</style>
    <title>Compétences</title>
  </head>
  <main>
  <body>
    <header>
    <a href="index.php"><img class="logo" src="assets/logo.png" alt="Bastien Philibert"></a>

    <a href="experience.php"><button class="boutonExpComp" type="button" name="button">Expériences</button></a>
  </header>
  <?php require_once('menunavigation.php'); ?>
    <div class="containerCompetences">
    <?php
    $q = $db->prepare("SELECT * FROM competence");
    $q->execute();
    while($data = $q->fetch()){?>
        <div class="competence">
        <div class="nomComp" ><img data-toggle="tooltip" data-placement="top" title="<?php echo $data['comp']; ?>" class="nomComp" src="assets/comps/logos/<?php echo mb_strtolower($data['comp']); ?>.png" alt="<?php echo $data['comp']; ?>"></div>
        <img src="assets/comps/levels/<?php echo $data['niveau']; ?>.png" class="niveauComp" alt="<?php echo $data['niveau']; ?>">
        </div>
    <?php };
    ?>

    </div>
            <center><a href="contact.php"><button class="boutonContact" type="button" name="button">Contactez moi</button></a></center>
  </body>
</main>
  </html>