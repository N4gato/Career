<?php 
// On démarre la session AVANT d'écrire du code HTML
session_start();
// On s'amuse à créer quelques variables de session dans $_SESSION

try {
	function chargerClasse($classe){

	require './class/'.$classe . '.class.php'; // On inclut la classecorrespondante au paramètre passé.
	}

	spl_autoload_register('chargerClasse'); // On enregistre lafonction en autoload pour qu'elle soit appelée dès qu'oninstanciera une classe non déclarée.
	
} catch (Exception $e) {
	echo "Erreuuur".$e->
getMessage();
}

	if (isset($_POST['submit'])) {
		$logmanager = new UserManager('tuto','users'); // log to the BD
		$_SESSION['loged'] = $logmanager->isUser(mysql_real_escape_string($_POST['username']),mysql_real_escape_string($_POST['pwd']));
		if ($_SESSION['loged']) {
			# code...
			$_SESSION['username'] = mysql_real_escape_string($_POST['username']);
			$_SESSION['pwd'] = mysql_real_escape_string($_POST['pwd']); 
			$_SESSION['iduser'] = $logmanager->getidd($_POST['pwd']);
		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/uikit.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="./tree.css">

	<title>Make your Career</title>
</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top" >
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" id="logo" href="#">Career</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li >
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="pdf.php">PDF</a>
					</li>
					<li>
						<a href="video.php">Video</a>
					</li>
					<li class="dropdown">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Classed <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="#my-id" data-uk-offcanvas>Register</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider"></li>
								<li class="dropdown-header">Nav header</li>
								<li>
									<a href="#">Separated link</a>
								</li>
								<li>
									<a href="#">One more separated link</a>
								</li>
							</ul>
						</li>
					</li>
				</ul>
				<?php 
if ($_SESSION['loged']) {
	# code...
?>
				<!-- --------------------------------------------------------User name and manager-->
				<ul class="nav navbar-nav navbar-right">
					<li class="active">
						<a href="singed.php">
							<?php echo $_SESSION['username'] ?></a>
					</li>
					<li>
						<a href="#manager" data-uk-offcanvas>Action Manager</a>
					</li>
				</ul>
			</li>

			<!-- --------------------------------------------------------Manager-->
			<div id="manager" class="uk-offcanvas">
				<div class="uk-offcanvas-bar uk-offcanvas-bar-flip uk-offcanvas-bar-show">
					<ul class="uk-nav uk-nav-offcanvas" data-uk-nav>

						<li class="uk-active">
							<a href="">Action Manager</a>
						</li>

						<li class="uk-parent">
							<a href="logout.php">Log out</a>
						</li>

						<li class="uk-parent">
							<a href="#mdpch" data-uk-modal>Change Password</a>
						</li>

						<li>
							<a href="">Item</a>
						</li>

						<li class="uk-nav-header">Header</li>
						<li class="uk-parent">
							<a href=""> <i class="uk-icon-star"></i>
								Parent
							</a>
						</li>
						<li>
							<a href=""> <i class="uk-icon-twitter"></i>
								Item
							</a>
						</li>
						<li class="uk-nav-divider"></li>
						<li>
							<a href="">
								<i class="uk-icon-rss"></i>
								Item
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- --------------------------------------------------------Change password-->
			<div id="mdpch" class="uk-modal">
				<div class="uk-modal-dialog">
					<a class="uk-modal-close uk-close"></a>

					<form action="pwch.php" method="POST">
						<h1>Change your password</h1>
						<br />
						<br />
						<input class="form-control input-sm" type="text" value="<?php echo $_SESSION['username'] ?>
						" placeholder="UserName">
						<br />
						<input class="form-control input-sm" type="text" name="mail" id="maillll" placeholder="Mail" onblur="maile(this.id)">

						<small>You gonna receive a message</small>
						<br />
						<br />

						<input class="form-control input-sm" id="newpwd" name="newpwd" type="password" placeholder="New password">
						<br />

						<input class="form-control input-sm" id="confirmepwd" name="confirmepwd" type="password" placeholder="Confirme password">
						<br />

						<br />
						<br />
						<input type="submit" name="submit2" class="btn btn-primary btn-sm" onmousemove="password()" value="Change Now"></form>
				</div>
			</div>

		</div>
		<?php
}else{ 
	$_SESSION['flash'] = true;
	header("location:index.php");}
 ?>

		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</div>
<div></div>

</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="js/uikit.min.js"></script>
</html>