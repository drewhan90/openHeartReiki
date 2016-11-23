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
			<div class="side-tabs medium-1 columns">
				<ul>
					<li><a href="#tabs-1">home</a></li>
					<li><a href="#tabs-2">media</a></li>
					<li><a href="#tabs-3">about page</a></li>
					<li><a href="#tabs-4">services page</a></li>
					<li><a href="#tabs-5">blog page</a></li>
					<li><a href="logout.php">log out</a></li>
				</ul>
			</div>
			<div class="tab-content medium-11 columns">
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
					<div class="medium-12 columns">
						<form action="file_Upload.php" class="dropzone" id="my-awesome-dropzone" method="post" enctype="multipart/form-data">
						</form>
					</div>
					<div class="medium-12 columns">
						<?php
							// CONNECT TO DATABASE
						include("dbconfig.php");
						if(!$dbconfig){
							echo "Connection Failed";
						}
						else {

							$sql_query = "SELECT * FROM files_table";
							$result = mysqli_query($dbconfig,$sql_query);
							$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
							$count=mysqli_num_rows($result);
							if($count == 1){
								$fileName = $row["file_name"];
								$uploaded = $row["uploaded"];
								// file url (change)
								$url = "http://localhost/projects/openHeartReiki/public_html/img/uploads/";
								echo '<div class="upload-preview medium-4 columns">';
								echo '<img src="../img/uploads/'.$fileName.'">';
								echo '<p class="medium-10 columns">uploaded on '.$uploaded.'</p>';
								echo '<a class="medium-2 columns"href="delete.php">delete</a>';
								echo '<button id="clip-btn" class="button expanded" data-clipboard-text="'.$url.$fileName.'">
    									Copy URL to clipboard
										</button></div>';
							}
							else {
								echo '<p>0 file uploaded</p>';
							}
						}
						?>
					</div>
				</div>
				<!-- ABOUT PAGE -->
				<div id="tabs-3">
					<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
					<p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
				</div>
				<!-- SERVICES PAGE -->
				<div id="tabs-4">
					<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
					<p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
				</div>
				<!-- BLOG PAGE -->
				<div id="tabs-5">
					<h2>blog page</h2>
					<a data-open="add-blog">add blog</a>
					<!-- ADD BLOG MODAL BOX -->
					<div class="reveal" id="add-blog" data-reveal>
						<h2>write a new blog</h2>
						<form action="post_Upload.php" method="post">
							<label>title</label>
							<input type="text" name="title" required>
							<label>categories</label>
							<input type="radio" name="category" value="tip" checked> tips
							<input type="radio" name="category" value="testimonial"> testimonial <br>
							<label>thumbnail image</label>
							<input type="text" name="thumbnail" placeholder="image url">
							<textarea name="editor1" required></textarea>
							<input type="submit" name="post-blog" value="post">
						</form>
						<!-- MODAL CLOSE -->
						<button class="close-button" data-close aria-label="Close modal" type="button">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<!-- BLOG TABLE -->
					<table class="hover stack">
						<thead>
							<tr>
								<th><input type="checkbox" id="select_all"></th>
								<th>id</th>
								<th>title</th>
								<th>categories</th>
								<th>date</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input name="checkbox[]" type="checkbox" id="checkbox[]" class="checkbox" value="<?php ?>"></td>
								<td>1</td>
								<td><a href="postDetail.php?id=<?php ?>">Reiki Not Yet Mainstream</a></td>
								<td>tips</td>
								<td>nov 17 2016</td>
							</tr>
						</tbody>
					</table>
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
		<!-- CKEDITOR -->
		<script src="../bower_components/ckeditor/ckeditor.js"></script>
		<!-- CLIPBOARD JS -->
		<script src="../bower_components/clipboard/dist/clipboard.min.js"></script>
		<script src="../js/app.js"></script>

	</body>
	</html>
	<?php
} // SESSION
?>