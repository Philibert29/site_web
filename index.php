<?php session_start();
    
    // session_unset();
    // session_destroy();

    // echo $_SESSION['pseudo'];

    // var_dump($_SESSION);

?>
<!DOCTYPE html>

<html lang="fr">
    <head>
        <title>Mon CV - Rue de l'info</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link type="text/css" rel="stylesheet" href="css/cv.css" media="screen" />
        <link type="text/css" rel="stylesheet" href="css/cvpc.css" media="screen" />
        <link type="text/css" rel="stylesheet" href="css/cvmob.css" media="screen" />
        <link type="text/css" rel="stylesheet" href="css/normalize.css" media="all" />
    </head>
    
    <body>
    


  
    <!-- Menu de Navigation -->
      <?php include 'menunavigation.php';  
        include 'includes/Database.php';
        global $db;

      ?>

        <header>Etudiant en Informatique</header>
 
        <div id="civil">
 
        
            <img src="img/photo_moi.jpg" />
 
            <h1>Bastien Philibert</h1>
            <p>156, chemin de st jean la cride</p>
            <p>04 42 61 88 48</p>
            <p>06 46 10 60 15</p>
            <email>bastien.philibert@ynov.com</email>
        </div>
 
        <main>
            <section id="formation">
    <header>FORMATION</header>
    <table>
                    <tbody>
    <tr>
                            <td>Sept 2012 – Juin 2013</td>
                            <th>Brevet des collèges</th>
    </tr>
    <tr>
                            <td>espace insécable</td>
                            <td>Collèges Jean Jaurès</td>
    </tr>
    <tr>
                            <td>Sept 2017 – Juin 2018</td>
                            <th>Baccalauréat Série S</th>
    </tr>
    <tr>
                            <td>espace insécable</td>
                            <td>Lycée Paul Cézanne</td>
    </tr>
                    </tbody>
                </table>
            </section>
            <section id="expe">
    <header>EXPERIENCES PROFESSIONNELLES</header>
 
    <h1>
                    <span>Jan 2013 – Fev 2013</span><span>stage au centre de recherche de cadarache</span>
                    <img src="images/TriangleP2.png" width="14" height="14" alt="triangle pour détailler" />
                </h1>
    <ul>
                    <li>Observation de recherche scientifique en biologie</li>
                    <li>Expérimentation et test</li>
                 
    </ul>
    <h1>
                    <span>Jan 2014 – Fev 2014</span><span>stage au CSTI</span>
                    <img src="images/TriangleP2.png" width="14" height="14" alt="triangle pour détailler" />
                </h1>
    <ul>
                    <li>Modélisation de protection nucléaire</li>
                    <li>test et fabrication des pièces</li>

    </ul>
    <h1>
                    <span>Juil 2016 – Aout 2016</span><span>emploi saisonnier Mairie de village</span>
                    <img src="images/TriangleP2.png" width="14" height="14" alt="triangle pour détailler" />
                </h1>
    <ul>
                    <li>service technique</li>
                    <li>réparation</li>
                    <li>montage</li>
    </ul>
            </section> <!-- fin expe -->
        </main>
        
        <aside id="divers">
            <h2>ETAT CIVIL<img src="images/TriangleP2.png" width="14" height="14" alt="triangle pour détailler" /></h2>
            <ul>
    <li>20 ans</li>
    <li>Nationalité Française</li>
    <li>Permis B</li>
            </ul>
            <h2>INFORMATIQUE<img src="images/TriangleP2.png" width="14" height="14" alt="triangle pour détailler" /></h2>
            <ul>
    <li>Html/CSS</li>
    <li>PHP</li>
    <li>CCNA1</li>
    <li>Internet (formée à <a target="_blank" href="https://www.ynov.com/">Ynov Aix</a>)</li>
            </ul>
            <h2>SPORTS<img src="images/TriangleP2.png" width="14" height="14" alt="triangle pour détailler" /></h2>
            <ul>
    <li>Aikido</li>
    <li>Musculation</li>
            </ul>
            <h2>LOISIRS<img src="images/TriangleP2.png" width="14" height="14" alt="triangle pour détailler" /></h2>
            <ul>
    <li>Jeux vidéo</li>
    <li>Cinéma</li>
            </ul>
            <h2>VOYAGES<img src="images/TriangleP2.png" width="14" height="14" alt="triangle pour détailler" /></h2>
            <ul>
    <li>Espagne</li>
    <li>Italie</li>
    <li>Belgique</li>
            </ul>
        </aside>

      <!--   <?php 

         if (isset($_SESSION['email']) && (isset($_SESSION['date']))) 
         {
          
            ?>

              <p>Votre Email : <?= $_SESSION['email']; ?> </p>
            <p>Votre Date : <?= $_SESSION['date']; ?></p>

            <?php

         }else{
          echo "Veuillez vous connectez à votre compte";
         }

   ?> -->
      

      <h1>Login</h1>
      <form method="post">
          <input type="email" name="lemail" id="lemail" placeholder="Votre Email" required></br>
          <input type="password" name="lpassword" id="lpassword" placeholder="Votre Mot de passe" required></br>
          <input type="submit" name="formlogin" id="formlogin" value="Login">
      </form>

      <?php include 'includes/login.php'; ?>


      <h1>Signin</h1>
      <form method="post">
          <input type="email" name="semail" id="semail" placeholder="Votre Email" required></br>
          <input type="password" name="password" id="password" placeholder="Votre Mot de passe" required></br>
          <input type="password" name="cpassword" id="cpassword" placeholder="Confirmer votre Mot de passe" required></br>
          <input type="submit" name="formsend" id="formsend" value="OK">
      </form>

      <?php include 'includes/signin.php'; ?>

    </body>
</html>

	