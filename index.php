<?php
session_start();

if(!isset($_SESSION["uemail"]))
{ header("Location: login.php"); exit(); }

?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Passvio | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="css/index.css"/>
<link rel="icon" type="image/x-icon" href="img/passvioFavicon.svg">
</head>
<body style="background-color: #E9C46A;">

<!-- text -->
<div class="text-center">
    <h2>Hello User!!</h2>
</div>

<!-- first image and button -->
<div class="container">

   <div class="main1">
      <div class="imgg">
        <img class="floating" src="img/passeye.svg" style="width: 175px;">
      </div>

      <div class="bttn">
        <a href="showPass.php"> <button> Show Passwords </button> </a>
      </div>
   </div>

   <!-- second image and button -->
   <div class="main2">
      <div class="imgg">
        <img class="floating" src="img/passmanage.svg" style="width: 175px;">
      </div>

      <div class="bttn">
        <a href="managePass.php"> <button> Manage Passwords </button> </a>
      </div>
   </div>

</div>

   <!-- account section -->
   <!-- =============== -->
   <div class="account">
     
   <!-- heading -->
     <div class="details">
       <h3>Account</h3>
     </div>

     <!-- email php -->
     <div class="email">
        <p>User Email :</p>
     </div>

     <!-- no of passwords -->
     <div class="noofpass">
     <p>Total number of passwords:</p>
     </div>

     <div class="bttn lgoutbtn">
        <a href="logout.php"><button> Log out </button></a>
     </div>

   </div>

<?php include 'footer.php'; ?>
</body>
</html>
