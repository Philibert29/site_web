 <?php require_once('Haut_de_page.php'); ?>

 <?php require_once('menunavigation.php'); ?>


 <?php
    include 'includes/Database.php';

    if(isset($_POST['Add'])){

        extract($_POST);
                      
        $v = $db->prepare("INSERT INTO competence(id_competence, libelle) VALUES(:id_competence,:libelle)");
        $v->execute([
                    'id_competence' => $id_competence,
                    'libelle' => $libelle
                    ]);
    }
//Supprime la compétence
    else { 
        if(isset($_POST["delete"])){
            extract($_POST);
            $v = "DELETE FROM competence WHERE id_competence = ? OR libelle = ?";
            $q = $db->prepare($v);
            $q->execute([$id_competence, $libelle]);
        }
    }
                   
?>


    <!-- // Affiche les 3 bouttons -->


   <form action=# method="post">
        <input type='submit' name='change' value='Modifier'>
        <input type='submit' name='delete' value='Supprimer'>
        <input type='submit' name='refresh' value='Refresh'><br>
        <input type='text' name='id_competence' placeholder='Niveau de la compétence...'>
        <input type='text' name='libelle' placeholder='Nom de la compétence...'>
        <select name='compType'>
            <option value='Dev'>Dev</option>
            <option value='Infra'>Infra</option>
            <option value='Web'>Web</option>
        </select>
        <input type='submit' name='Add' value='Ajouter'>
    </form>
              
    <?php

    $rqt = $db->prepare('SELECT * FROM competence');
    $rqt->execute();
    while ($data = $rqt->fetch()){
        echo $data['id_competence'] . ' ' . $data['libelle'] . '<br>';
    }

    ?>