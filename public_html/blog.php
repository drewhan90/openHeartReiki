<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Open Heart Reiki</title>
	<link rel="stylesheet" href="css/app.css">
</head>
<body id="blog">
	<!-- HEADER + NAV MENU -->
	<?php include 'partials/header.php' ?>
	<!-- PAGE CONTENT : CENTERED -->
	<div class="center-page">
		<!-- BLOG POSTS : SHOW 3 -->
		<section class="blogs medium-10 columns">

			<?php
			// CONNECT TO DATABASE
			include("cms/dbconfig.php");
			if(!$dbconfig){
				echo "Connection Failed";
			}
			else {
				
				//$base_url = 'https://localhost/pagi/'; 
				$per_page = 4;   //number of results to shown per page 
				$num_links = 8;  // how many links you want to show
				
				$cur_page = 1;  // set default current page to 1
				$offset = ($cur_page-1)*$per_page;      			
				
				$blog_query = "SELECT * FROM blog_table WHERE category='blog' LIMIT ".$per_page." OFFSET ".$offset;
				if(isset($_GET['page'])) {
					$cur_page = $_GET['page'];
					$cur_page = ($cur_page < 1)? 1 : $cur_page;
				}
				$blog_result = mysqli_query($dbconfig,$blog_query);
				$blog_count=mysqli_num_rows($blog_result);
				$total_rows = $blog_count; 
				$pages = ceil($total_rows/$per_page);
				$start = (($cur_page - $num_links) > 0) ? ($cur_page - ($num_links - 1)) : 1;
				$end   = (($cur_page + $num_links) < $pages) ? ($cur_page + $num_links) : $pages;
				if($blog_count > 0){
					// echo blog table content
					while($blog_row = mysqli_fetch_assoc($blog_result)) {
						$dir = 'img/uploads/';
						$post_id = $blog_row["id"];
						$post_title = $blog_row["title"];
				  		//$post_category = $blog_row["category"];
						$post_timg = $blog_row["thumbnail"];
						$post_text = $blog_row["comment"];
						$post_date = $blog_row["uploaded"];
						echo '<article class="post">';
						echo '<h2 class="title">'.$post_title.'</h2>';
						echo '<h4 class="date">'.$post_date.'</h4>';
						echo '<div class="img-wrap"><img src="'.$post_timg.'" alt="'.$post_title.'"></div>'.$post_text;
						echo '<button class="primary-btn cta-btn"><a data-open="read-more-'.$post_id.'">read more</a></button></article>';
						echo '<div class="reveal" id="read-more-'.$post_id.'" data-reveal>';
						echo '<article class="more-post">';
						echo '<h2 class="title">'.$post_title.'</h2>';
						echo '<h4 class="date">'.$post_date.'</h4>';
						echo '<div class="img-wrap"><img src="'.$post_timg.'" alt="'.$post_title.'"></div>';
						echo '<div class="post-text">'.$post_text.'</div>';
						echo '<button class="close-button" data-close aria-label="Close modal" type="button"><span aria-hidden="true">&times;</span></button></div>';
					}

				}
				else {
					echo '<p>Please upload a post</p>';
				}

			}
			?>
			<!-- ADD BLOG MODAL BOX -->
			<div class="reveal" id="read-more-blog" data-reveal>
				
				<!-- MODAL CLOSE -->
				<button class="close-button" data-close aria-label="Close modal" type="button">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<ul class="pagination" role="navigation" aria-label="pagination">
				<?php
				if(isset($pages)) {  
					if($pages > 1) {    
						if($cur_page > 1) {
							$dir = "prev";
							echo '<li class="pagination-previous disabled"><span id="prev" class="show-for-sr"> <a href="'.$_SERVER['PHP_SELF'].'?page='.($cur_page-1).'">'.$dir.'</a> </span></li>';
						}                 

						for($cur_page=$start; $cur_page<=$end; $cur_page++) {
							echo '<li><a href="'.$_SERVER['PHP_SELF'].'?page='.$x.'" aria-label="page '.$x.'">'.$x.'</a></li>';
						}
						if($cur_page < $pages )
							{   $dir = "next";
						echo '<li class="pagination-previous disabled"><span id="next" class="show-for-sr"> <a href="'.$_SERVER['PHP_SELF'].'?page='.($cur_page+1).'">'.$dir.'</a> </span></li>';
					}
				}
			}
			?>
		</ul>
		<!-- ADD BLOG MODAL BOX -->
		<div class="reveal" id="read-more-blog" data-reveal>

			<!-- MODAL CLOSE -->
			<button class="close-button" data-close aria-label="Close modal" type="button">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<!-- PAGINATION -->
				<!-- <ul class="pagination" role="navigation" aria-label="pagination">
					<li class="pagination-previous disabled">previous <span class="show-for-sr">page</span></li>
					<li class="current"><span class="show-for-sr">you're on page</span> 1</li>
					<li><a href="#" aria-label="page 2">2</a></li>
					<li><a href="#" aria-label="page 3">3</a></li>
					<li><a href="#" aria-label="page 4">4</a></li>
					<li class="ellipsis" aria-hidden="true"></li>
					<li><a href="#" aria-label="Page 12">12</a></li>
					<li><a href="#" aria-label="Page 13">13</a></li>
					<li class="pagination-next"><a href="#" aria-label="Next page">Next <span class="show-for-sr">page</span></a></li>
				</ul> -->
			</section>
			<!-- SIDE NAV -->
			<section class="medium-2 columns hide-for-small-only">
				<ul class="side-nav" role="navigation" title="blog navigation">
					<li class="title"><h2>recent post</h2></li>
					<?php
					// CONNECT TO DATABASE
					include("cms/dbconfig.php");
					if(!$dbconfig){
						echo "Connection Failed";
					}
					else {

						$blog_query = "SELECT id,title FROM blog_table ORDER BY id DESC LIMIT 4 ";
						$blog_result = mysqli_query($dbconfig,$blog_query);
						$blog_count=mysqli_num_rows($blog_result);
						if($blog_count > 0){
							// echo blog table content
							while($blog_row = mysqli_fetch_assoc($blog_result)) {
								$post_id = $blog_row["id"];
								$post_title = $blog_row["title"];

								echo '<li role="menuitem">';
								echo '<a data-open="read-more-'.$post_id.'">'.$post_title.'</a></li>';
							}
							
						}
						else {
							echo '<p>Please upload a post</p>';
						}

					}
					?>
					<!-- <li class="divider"></li>
					<li class="title"><h2>categories</h2></li>
					<li role="menuitem">
						<a href="#">testimonials</a>
					</li>
					<li role="menuitem">
						<a href="#">tips</a>
					</li> -->
				</ul>
			</section>

		</div>
		<!-- CAROUSEL -->
		<section class="testimonials orbit medium-12 columns module" role="testimonials" aria-label="Testimonials" data-orbit>
			<div class="title center-page">
				<h2>testimonials</h2>
				<span class="divider">divider</span>
			</div>
			<ul class="orbit-container">
				<!-- CAROUSEL BUTTONS -->
				<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span> &#9664;&#xFE0E;</button>
				<button class="orbit-next"><span class="show-for-sr">Next Slide</span> &#9654;&#xFE0E;</button>
				<!-- CAROUSEL CONTENT -->
				<?php
				// CONNECT TO DATABASE
				include("cms/dbconfig.php");
				if(!$dbconfig){
					echo "Connection Failed";
				}
				else {   			
					
					$blog_query = "SELECT * FROM blog_table WHERE category='testimonial'";
					$blog_result = mysqli_query($dbconfig,$blog_query);
					$blog_count=mysqli_num_rows($blog_result);
					$total_rows = $blog_count; 
					if($blog_count > 0){
						// echo blog table content
						while($blog_row = mysqli_fetch_assoc($blog_result)) {
							$dir = 'img/uploads/';
							$post_id = $blog_row["id"];
							$post_title = $blog_row["title"];
					  		//$post_category = $blog_row["category"];
							$post_timg = $blog_row["thumbnail"];
							$post_text = $blog_row["comment"];
							$post_date = $blog_row["uploaded"];
							echo '<li class="orbit-slide"><article class="row">';
							echo '<div class="medium-3 columns"><img class="post-img" src="'.$post_timg.'" alt="'.$post_title.'"></div>';
							echo '<div class="medium-9 columns"><h3>'.$post_title.'</h3>';
							echo '<h4>'.$post_date.'</h4>'.$post_text.'</div></article></li>';
							echo '';
						}

					}
					else {
						echo '<p>Please upload a post</p>';
					}
				}
				?>
			</ul>
		</section>
		<!-- FOOTER + TOP BTN + SCRIPT LINKS-->
		<?php require 'partials/footer.php' ?>
	</body>
	</html>