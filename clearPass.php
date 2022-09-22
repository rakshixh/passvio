<?php

	require_once("controllers/connectionController.php");

?>

<?php

	session_start(); 
	if(!isset($_SESSION['uemail'])){
		header("Location: login.php");
	}

	clearallpass($_SESSION['uemail']);
	header("Location: managePass.php");

?>