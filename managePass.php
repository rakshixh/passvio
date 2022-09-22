<?php  
  global $nopass;
  $user_err = $nopass = "";
  require_once("controllers/dashboardController.php");

?>

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Passvio | Manage Password</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" href="img/passvioFavicon.svg">
  <link rel="stylesheet" type="text/css" href="css/managePass.css" />

  <script type="text/javascript" src="js/dashboard.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
  <div id="main">
    <div id="site_content">
      <div id="">

        <div class='crdalign'>
					  <div class='card'>
              <h2 style="color: wheat;"> Add New Password</h2>
					      <div class='container'>
					        <form style="margin-top: 30px;" method="post" name="addpass">
                    <div class="form_settings">
                      <input type="text" name="websitename" placeholder="Enter Website Name" required /></p>
                      <input type="text" name="loginid" placeholder="Enter Login ID" required /></p>
                      <input type="password" name="password" placeholder="Enter Password" required /></p>
                      <input class="submit" type="submit" name="add" value="Add" /></p>
                   </div>
                 </form>
					     </div>
					  </div>
				</div>

        <h2 style="font-size: 35px; color:wheat; margin-top:40px; margin-bottom:40px;" class="text-center">Manage Passwords</h2>
        
        <div class="tb">
        <table class="table table-bordered">
          <tr>
            <th>Website Name</th>
            <th>Login ID</th>
            <th>Password</th>
            <th>Action</th>
          </tr>
          <?php retrievepass($_SESSION['uemail']); ?>
        </table>
        </div>

        <div style="text-align: center;">
          <label><?php if($nopass != ""){ echo "{$nopass}"; } ?></label>
        </div>

        <div class="bttns">
          <button class="btns" onclick="location.href = 'clearPass.php';" name="clearall" id='clearall' >Clear All</button>
          <a href="logout.php"> <button class="btns">Logout</button> </a>
          <a href="index.php"> <button class="btns">Back</button> </a>
        </div>
        

        <div style="margin-top: 10px; margin-left: 175px;">
        <label style="color: red; font-size: 14px;"><?php if($user_err != ""){ echo "{$user_err}"; } ?></label> 
        </div>

      </div>
    </div>

    <?php  

    	include('footer.php');

    ?>
    
  </div>
</body>
</html>