<?php 

// On démarre la session AVANT d'écrire du code HTML
session_start();

$name = mysql_real_escape_string($_POST['reg_name']);
$prenom = mysql_real_escape_string($_POST['reg_prenom']);
$mail = mysql_real_escape_string($_POST['reg_mail']);
$CNE = mysql_real_escape_string($_POST['reg_CNE']);
$username = mysql_real_escape_string($_POST['reg_username']);

// On s'amuse à créer quelques variables de session dans $_SESSION

try {
	function chargerClasse($classe){

	require './class/'.$classe . '.class.php'; // On inclut la classecorrespondante au paramètre passé.
	}

	spl_autoload_register('chargerClasse'); // On enregistre lafonction en autoload pour qu'elle soit appelée dès qu'oninstanciera une classe non déclarée.
	
} catch (Exception $e) {
	echo "Erreuuur".$e->getMessage();
}



		
			echo "string";

			$info = array(
				'name' => $name ,
				'prenom' => $prenom ,
				'mail' => $mail ,
				'CNE' => $CNE ,
				'userName' => $username ,
				'pwd' => '' ,
				'pwdSh1' => ''  // for futer cryp use
				);

			$user = new User($info);
			$manager = new UserManager('tuto','users');
			$manager->insert($user);
		
header("location:index.php"); //to redirect back to "index.php" after logging out
exit();

 ?>
