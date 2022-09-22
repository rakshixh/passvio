<?php
	require_once("controllers/connectionController.php");
?>

<?php
	session_start(); 
	if(!isset($_SESSION['uemail'])){
		header("Location: login.php");
	}

	if(isset($_POST['add'])){
		$success = addpass($_SESSION['uemail'], $_POST['websitename'], $_POST['loginid'], $_POST['password']);
		if($success == "1"){
			$user_err = "";
		}
		elseif($success == "-1"){
			$user_err = "Data already exists";
		}
	}

?>