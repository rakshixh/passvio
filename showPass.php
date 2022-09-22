<?php  
  global $nopass;
  $user_err = $nopass = "";
  require_once("controllers/dashboardController.php");
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Passvio | Show Passwords</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="css/showPass.css"/>
<link rel="icon" type="image/x-icon" href="img/passvioFavicon.svg">

<script type="text/javascript" src="js/dashboard.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
  <h2 class="text-center" style="margin-top: 50px; margin-bottom:30px; color: #F1FAEE;">My Passwords</h2>

  <?php showpass($_SESSION['uemail']); ?>

  <div class="bttn">
    <a href="logout.php"><button>Logout</button></a>
    <a href="index.php"><button>Back</button></a>
  </div>


<?php include 'footer.php'; ?>
</body>
</html>