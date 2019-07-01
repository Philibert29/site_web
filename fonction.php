<?php
  function CompByCat($cat, $db){
    $rqt = "SELECT * FROM competences WHERE cat = ?";
    $q = $db->prepare($rqt);
    $q->execute(array($cat));
    while ($data=$q->fetch()) { ?>

  <div class="competence">
    <p class="nomComp"><?php echo $data['comp']; ?></p>
    <img src="assets/levels/<?php echo $data['niveau']; ?>.png" class="niveauComp" alt="<?php echo $data['niveau']; ?>">
  </div>

<?php  }
}
 function OpenFileRead($fileName){
   $fichier = fopen($fileName, "r");
   $texte = fgets($fichier);
   fclose($fichier);
   echo $texte;
 }
 function OpenFileWrite($text, $filename){
   if(isset($_SESSION['id'])){
     $fichier = fopen($filename, 'w');
     fwrite($fichier,$text);
     fclose($fichier);
   }
 }
 function dureeExp($db, $id){
   $q = $db->prepare('SELECT dateDebut, dateFin FROM experiences WHERE id_exp = ?');
   $q->execute(array($id));
   $data = $q->fetch();
   if(!isset($data['dateFin'])) {
     $dateFin = "Aujourd'hui";
   }else {
     $dateFin = date('M Y', strtotime($data['dateFin']));
   }
   $dateDebut = date('M Y', strtotime($data['dateDebut']));
   echo $dateDebut . ' - ' . $dateFin;
 }
 ?>