<?php 
// On démarre la session AVANT d'écrire du code HTML
session_start();

$mail		= $_POST['mail'];
$new 		 = $_POST['newpwd'];
$confirme = $_POST['confirmepwd'];


// On s'amuse à créer quelques variables de session dans $_SESSION

try {
	function chargerClasse($classe){

	require './class/'.$classe . '.class.php'; // On inclut la classecorrespondante au paramètre passé.
	}

	spl_autoload_register('chargerClasse'); // On enregistre lafonction en autoload pour qu'elle soit appelée dès qu'oninstanciera une classe non déclarée.
	
} catch (Exception $e) {
	echo "Erreuuur".$e->getMessage();
}


	if (isset($_POST['submit2'])) {
		
			echo "string";
		
			
			$_SESSION['pwd'] = $_POST['newpwd']; 

			$bdd = new PDO('mysql:host=localhost;dbname=tuto','root','9obi9aT/now*',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		
		

		$rep = $bdd->prepare("UPDATE users SET CNE = ?  where id = ?");

		$rep->execute(array($_POST['newpwd'],$_SESSION['iduser']));
		
	}


//header("location:index.php"); //to redirect back to "index.php" after logging out
//exit();

 ?>