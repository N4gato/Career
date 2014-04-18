<?php 

/**
* 
*/
class UserManager{

	private $table;
	private $db;
  	public $bdd;

	function __construct($db,$table){
		# code...
		$this->table = $table;
		$this->db = $db;
		$this->connection();
	}

	public function insert(User $user){
		//$this->connection();
		$rep = $this->bdd->prepare('INSERT INTO users (name,prenom,mail,CNE,username,pwd,pwd_sh1) VALUES (:name,:prenom,:mail,:CNE,:username,:pwd,:pwd_sh1)');
		$rep->execute(array(
			'name' => $user->get_name(),
			'prenom' => $user->get_prenom(),
			'mail' => $user->get_mail(),
			'CNE' => $user->get_CNE(),
			'username' => $user->get_username(),
			'pwd' => $user->get_pwd(),
			'pwd_sh1' => $user->get_pwdSh1()
			));
		
	}

	public function isUser($username,$pwd){
			$username = mysql_real_escape_string($username);
		$rep = $this->bdd->query("SELECT * FROM users WHERE username = '$username'");
		while ($donnees = $rep->fetch()) {
			if($donnees['pwd']==$pwd){
				
				return true;
				break;
			}
		}
		return false;

	}

	public function delete(){} // use it for desactiver le compte
	public function alter(){} // to change pwd

	public function getn($name){
		$rep = $this->bdd->query('SELECT * FROM users WHERE name = '.$name);
		while ($donnees = $rep->fetch()) {
			echo "Nom: ".$donnees['name']."<br /> Dex :".$donnees['dex']."<br /> STR :".$donnees['str']."<br />con".$donnees['con'];
				# code...
			}	
	}

	public function connection(){
				try {
					$this->bdd = new PDO('mysql:host=localhost;dbname='.$this->db,'root','9obi9aT/now*',array(PDO::ATTR_ERRMODE =>
					PDO::ERRMODE_EXCEPTION));
	
				} catch (Exception $e) {
					die('Erreur: '.$e->getMessage());
				}
	}
	
}


 ?>