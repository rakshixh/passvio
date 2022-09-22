<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Passvio | Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="css/log.css"/>
<link rel="icon" type="image/x-icon" href="img/passvioFavicon.svg">
</head>
<body>
<?php
require('connect.php');
session_start();
if (isset($_POST['uemail'])){
	$uemail = stripcslashes($_REQUEST['uemail']);
	$uemail = mysqli_real_escape_string($conn,$uemail);
	$upassword = stripcslashes($_REQUEST['upassword']);
	$upassword = mysqli_real_escape_string($conn,$upassword);
        $query = "SELECT * FROM `users` WHERE uemail='$uemail' and upassword='$upassword'";
	$result = mysqli_query($conn,$query);
	$rw = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['uemail'] = $uemail;
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>

        <img src="img/passvioIMG.svg" style="width: 700px;">

<div class="card" style="width: 300px; height: 400px;">
<h1>Log In</h1>
<div class="form flog">
    <form action="" method="post" name="login">
      <input type="email" name="uemail" placeholder="Email" required />
      <input type="password" name="upassword" placeholder="Password" required />
      <br>
      <input name="submit" type="submit" value="Sign In" />
    </form>
    <div class="para"> <p>Not registered yet? <a href='registration.php'>Register Here</a></p> </div>
</div>
</div>

<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
