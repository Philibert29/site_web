<?php


    if(isset($_POST['formlogin']))
    {
    	extract($_POST);

    	if(!empty($lemail) && !empty($lpassword))
    	{

    	    $v = $db->prepare("SELECT * FROM users WHERE email = :email");
    	    $v->execute(['email' => $lemail]);
    	    $result = $v->fetch();

    	    if($result == true)
    	    {
    	    	//le compte existe bien

    	    	$hashpassword = $result['password'];
    	    	if(password_verify($lpassword, $hashpassword))
    	    	{
    	    		echo "Le mot de passe est bon, connection en cours";

    	    		    $_SESSION['email'] = $result['email'];
                        $_SESSION['date'] = $result['date'];
    	    	}
    	    	else
    	    	{
    	    		echo "le mot de passe n'est pas correcte";
    	    	}
    	    }
    	    else
    	    {
    	    	echo "Le compte portant l'email " . $lemail . " n'existe pas";
    	    }


    	}
    	else
        {
        	echo "Veuillez completer l'ensemble des champs";
        }
    }

?>