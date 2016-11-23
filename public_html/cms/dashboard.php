<?php
session_start();
if(!isset($_SESSION['login_user'])){
	header("Location: login.php");
}
else{
	$login_session=$_SESSION['login_user'];
	?>
	<!doctype html>
	<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Open Heart Reiki</title>
		<link rel="stylesheet" href="../css/app.css">
	</head>
	<body id="dashboard" class="cms">
		<div id="tabs">
			<div class="medium-1 columns">
				<ul>
					<li><a href="#tabs-1">home</a></li>
					<li><a href="#tabs-2">media</a></li>
					<li><a href="#tabs-3">about page</a></li>
					<li><a href="#tabs-3">services page</a></li>
					<li><a href="#tabs-3">blog page</a></li>
					<li><a href="logout.php">log out</a></li>
				</ul>
			</div>
			<div class="medium-11 columns">
				<!-- HOME TAB -->
				<div id="tabs-1">
					<section>
						<h1>Welcome <?php echo $login_session;?></h1>
					</section>
					<section>
						<h2>My Recent Updates</h2>
					</section>
				</div>
				<!-- MEDIA -->
				<div id="tabs-2">
					<div class="medium-10 columns">
						<form action="upload.php" class="dropzone" id="my-awesome-dropzone" method="post" enctype="multipart/form-data">
						</form>
					</div>
					<div class="medium-2 columns">
					</div>
				</div>
				<div id="tabs-3">
					<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
					<p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
				</div>
			</div>
		</div>

		<script src="../bower_components/jquery/dist/jquery.min.js"></script>
		<script src="../bower_components/what-input/what-input.js"></script>
		<script src="../bower_components/foundation-sites/dist/foundation.min.js"></script>
		<!-- JQUERY UI -->
		<script
		src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
		integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
		crossorigin="anonymous"></script>
		<!-- FONT AWESOME -->
		<script src="https://use.fontawesome.com/a2ca25c584.js"></script>
		<script src="../js/dropzone.js"></script>
		<script src="../js/app.js"></script>

	</body>
	</html>
	<?php
} // SESSION
?>