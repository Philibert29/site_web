<!DOCTYPE html PUBLIC >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title> ADMIN</title>
	<meta name="description" content="desc"/>
	<meta name="keywords" content="keyword"/>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.mir">
</head>
<body>
<?php
  require_once '../Database_admin.php';
  $req = $db->query('SELECT * FROM users'); 
  $user = $req->fetch();
?>

<div class="header">
	
<nav>
	
 <div class="nav-wrapper">
 	<a href="#!" class="brand-logo">Site CV</a>
 	<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
 	<ul class="right hide-on-med-and-down">
 		<li><a href="index.php"><i class="material-icons">star</i>Home</a></li>
 		<li><a href="article.php"><i class="material-icons">library_books</i>Article</a></li>
 		<li><a href="admin/"><i class="material-icons">perm_identity</i>Administration</a></li>
 	</ul>
 	<ul class="side-nav" id="mobile-demo">
 		<li><a href="index.php"><i class="material-icons">star</i>Home</a></li>
 		<li><a href="article.php"><i class="material-icons">library_books</i>Article</a></li>
 		<li><a href="admin/"><i class="material-icons">perm_identity</i>Administration</a></li>
 	
 	</ul>

 </div>
</nav>

<div class="container">
  <?php


  ?>
  	
  </div>
  <script type="text/javascript" src="https://code.jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script src="../js/app.js"></script>
</div>
</body>
</html>