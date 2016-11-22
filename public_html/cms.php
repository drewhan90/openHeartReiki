<?php
	if(!isset($_SESSION['login_user'])){
		header("Location: login.php");
	}
	else{
		$login_session=$_SESSION['login_user'];
?>

Welcome <?php echo $login_session;?>

<?php
	}
?>