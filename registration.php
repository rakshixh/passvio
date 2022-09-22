<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
     <title>Passvio | Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="css/log.css"/>
<link rel="icon" type="image/x-icon" href="img/passvioFavicon.svg">

     <script>
        function validate() 
        {
                var email = document.registration.uemail;
                var paassword = document.registration.upassword;

                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                var passlen = password.value.length;

                if (email.value.length <= 0) {    
                alert("Email Id is required");    
                email.focus();    
                return false;
                }

                if(email.value.match(mailformat))
                { return true; }
                else
                { alert("You have entered an invalid email address!");
                  email.focus();
                  return false;
                }
        }
     </script>
</head>
<body>
<?php
require('connect.php');
if (isset($_REQUEST['uemail'])){
	$uemail = stripcslashes($_REQUEST['uemail']);
	$uemail = mysqli_real_escape_string($conn,$uemail); 
	$upassword = stripcslashes($_REQUEST['upassword']);
	$upassword = mysqli_real_escape_string($conn,$upassword);
        $query = "INSERT into `users` (uemail, upassword) VALUES ('$uemail','$upassword' )";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<div>
            <h2> You are registered successfully. </h2>
            <br/> 
            <h3> Click here to <a href='login.php'> Login </a> </h3>
            </div>";
        }
    }
    
    else{
?>

<img src="img/passvioIMG.svg" style="width: 700px;">

<div class="card" style="width: 300px; height: 400px;">
<h1>Registration</h1>

<div class="form flog">
<form name="registration" action="" method="post" onsubmit="return validate()">
<input type="email" name="uemail" placeholder="Email" required  />
<input type="password" name="upassword" placeholder="Password" required />
<input type="submit" name="submit" value="Sign Up" />
</form>
<div class="para"> <p>Already have an account? <a href='login.php'>Login Here</a></p> </div>
</div>
<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>