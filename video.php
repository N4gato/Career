<?php 
// On démarre la session AVANT d'écrire du code HTML
session_start();
// On s'amuse à créer quelques variables de session dans $_SESSION
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/uikit.min.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<link rel="stylesheet" href="css/tree.css">
	<title>Make your Career</title>
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

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
					<li class="active">
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
	if (isset($_SESSION['username']) && isset($_SESSION['pwd'])) {
		# code...
?>

				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="singed.php">
							<?php echo $_SESSION['username'] ?></a>
					</li>
					<li>
						<a href="#manager" data-uk-offcanvas>Action Manager</a>
					</li>
				</ul>
			</li>

			<!-- This is the off-canvas sidebar -->
			<div id="manager" class="uk-offcanvas">
				<div class="uk-offcanvas-bar uk-offcanvas-bar-flip uk-offcanvas-bar-show">
					<ul class="uk-nav uk-nav-offcanvas" data-uk-nav>

						<li class="uk-active">
							<a href="">Action Manager</a>
						</li>

						<li class="uk-parent">
							<a href="#">Parent</a>
							<div style="overflow: hidden; height: 0px; position: relative;">
								<ul class="uk-nav-sub">
									<li>
										<a href="">Sub item</a>
									</li>
									<li>
										<a href="">Sub item</a>
										<ul>
											<li>
												<a href="">Sub item</a>
											</li>
											<li>
												<a href="">Sub item</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</li>

						<li class="uk-parent">
							<a href="#">Parent</a>
							<div style="overflow: hidden; height: 0px; position: relative;">
								<ul class="uk-nav-sub">
									<li>
										<a href="">Sub item</a>
									</li>
									<li>
										<a href="">Sub item</a>
									</li>
								</ul>
							</div>
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
		</div>
		<?php
}else{
 ?>
		<ul class="nav navbar-nav navbar-right">
			<li>

				<form class="navbar-form navbar-right" role="form" method="POST" action="singed.php">
					<div class="form-group">
						<input type="text" name="username" placeholder="Username" class="form-control"></div>
					<div class="form-group">
						<input type="CNE" name="pwd" placeholder="Password" class="form-control"></div>
					<button type="submit" name="submit" class="btn btn-success">Sign in</button>
				</form>
			</li>
		</ul>
		<?php } ?>
		<!-- /.navbar-collapse -->
	</div>

	<!-- /.container-fluid -->
</div>
<article>
	<div class="acc">

		<div class="subacc">
			<?php 
	if (isset($_SESSION['username']) && isset($_SESSION['pwd'])) {
		
?>
			<div class="fb-share-button" data-href="https://www.facebook.com/
			otmane.bouayad.9" data-type="button_count" data-uk-toggle="{target:'#my-id'}"></div>
			<div id="my-id">Thanks for Sharing our link</div>
			<?php 
	}else{
?>
			<!-- This is a button toggling the off-canvas sidebar -->
			<button type="button" class="btn btn-primary btn-lg" data-uk-offcanvas="{target:'#my-id'}">Register Now</button>
			<?php 
}
 ?>
			<!-- This is the off-canvas sidebar -->
			<div id="my-id" class="uk-offcanvas">
				<div class="uk-offcanvas-bar">

					<div class="uk-panel">Regestration</div>

					<div class="uk-panel">
						<form action="">
							<fieldset>
								<legend></legend>
							</fieldset>
							<br />
							<br />
							<br />
							<input class="form-control input-sm" type="text" placeholder="Name">
							<br />
							<input class="form-control input-sm" type="text" placeholder="Prenom">
							<br />
							<input class="form-control input-sm" type="text" placeholder="Mail">
							<br />
							<input class="form-control input-sm" type="text" placeholder="CNE = mdp">
							<br />
							<input class="form-control input-sm" type="text" placeholder="UserName">
							<br />

							<button type="submit" class="btn btn-primary btn-sm">Small Regist</button>
						</form>
						<br />

						<div class="uk-panel">
							Vous pouvez a tout memont suprimer vitre compte ou c
							hanger votre mot de passe. il est possible que votre compte 
							subis un controle administrative
						</div>

					</div>

				</div>
			</div>

		</div>
	</div>

	<div class="uk-grid">
		<div class="uk-width-medium-1-4">
			<div class="uk-panel uk-panel-box uk-scrollspy-init-inview uk-scrollspy-inview uk-animation-fade" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true ,delay:1000}">
				<h3>Fade</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
		</div>
	</div>
	<div class="uk-grid">
		<div class="uk-width-medium-1-4 uk-push-1-4">
			<div class="uk-panel uk-panel-box uk-scrollspy-init-inview uk-scrollspy-inview uk-animation-scale-up" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true ,delay:1000}">
				<h3>Scale up</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
		</div>
	</div>
	<div class="uk-grid">
		<div class="uk-width-medium-1-4 uk-push-3-4">
			<div class="uk-panel uk-panel-box uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true}">
				<h3>Slide top</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
		</div>
	</div>
	<div class="uk-grid">
		<div class="uk-width-medium-1-4 uk-push-2-4">
			<div class="uk-panel uk-panel-box uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
				<h3>Slide bottom</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
		</div>
	</div>
	<div class="uk-grid">
		<div class="uk-width-medium-1-4 uk-push-1-4">
			<div class="uk-panel uk-panel-box uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true}">
				<h3>Slide right</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
		</div>
	</div>
	<div class="uk-grid">
		<div class="uk-width-medium-1-4">
			<div class="uk-panel uk-panel-box uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}">
				<h3>Slide left</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
		</div>
	</div>
	<div class="uk-grid">
		<div class="uk-width-medium-1-4">
			<div class="uk-panel uk-panel-box uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
				<h3 class="uk-panel-title">Delay</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
		</div>
		<div class="uk-width-medium-1-4">
			<div class="uk-panel uk-panel-box uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-fade', delay:300, repeat: true}">
				<h3 class="uk-panel-title">Delay</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
		</div>
		<div class="uk-width-medium-1-4">
			<div class="uk-panel uk-panel-box uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-fade', delay:600, repeat: true}">
				<h3 class="uk-panel-title">Delay</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
		</div>
		<div class="uk-width-medium-1-4">
			<div class="uk-panel uk-panel-box uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-fade', delay:900, repeat: true}">
				<h3 class="uk-panel-title">Delay</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
		</div>
	</div>
</article>
<!--Foooter-->
<div class="tm-footer">
	<div class="uk-container uk-container-center uk-text-center">

		<ul class="uk-subnav uk-subnav-line">
			<li>
				<a href="http://github.com/uikit/uikit">GitHub</a>
			</li>
			<li>
				<a href="http://github.com/uikit/uikit/issues">Issues</a>
			</li>
			<li>
				<a href="http://github.com/uikit/uikit/blob/master/CHANGELOG.md">Changelog</a>
			</li>
			<li>
				<a href="https://twitter.com/getuikit">Twitter</a>
			</li>
		</ul>

		<div class="uk-panel">
			<p>
				Made by
				<a href="http://www.yootheme.com">YOOtheme</a>
				with love and caffeine.
				<br>
				Licensed under
				<a href="http://opensource.org/licenses/MIT">MIT license</a>
				.
			</p>
			<a href="../index.html">
				<img src="images/logo_uikit.svg" width="90" height="30" title="UIkit" alt="UIkit"></a>
		</div>

	</div>
</div>
</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="js/uikit.min.js"></script>
</html>