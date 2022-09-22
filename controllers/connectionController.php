<!-- all functions -->

<?php

function createConn(){
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "passvio";
   $conn = new mysqli($servername, $username, $password, $dbname);
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   return $conn;
}

?>


<?php 

	function resetpass($uemail, $upassword){
		$conn = createConn();
		$sql = "UPDATE users SET upassword = '".$upassword."' WHERE uemail = '".$uemail."';";
		if ($conn->query($sql) === TRUE) {
    		$success = "1";
		} else {
    		$success = "2";
		}
		return $success;
	}


	function addpass($uemail, $websitename, $loginid, $password){
		$conn = createConn();
		$sql = "INSERT INTO passwords(uemail, websitename, loginid, password) VALUES('".$uemail."','".$websitename."', '".$loginid."', '".$password."');";
		if($conn -> query($sql) === TRUE){
			return "1";
		}
		else{
			return "-1";
		}
	}

	function retrievepass($uemail){
		$conn = createConn();
		$sql = "SELECT * FROM passwords WHERE uemail = '".$uemail."';";
		$result = $conn -> query($sql);
		if($result -> num_rows > 0){
			$GLOBALS['nopass'] = "";
			while($row = $result -> fetch_assoc()){
				echo "<tr>
				      <td id='wname'> {$row["websitename"]} </td>
					  <td id='tloginid'> {$row['loginid']} </td>
					  <td style='text-align: center;'>
					    <input style='text-align: center;' type='password' class='passfield' name='password' value={$row['password']} disabled />
					  </td>
					  <td style='text-align: center;'> "?> <a href="remove.php?pid=<?php echo $row['pid']; ?>"><button type="button" class="btn-trash"> Remove </button></a>
					 <?php "</td></tr>";
			}
		}
		else{
			$GLOBALS['nopass'] = " <h3 style='color:rgb(245, 222, 179);'>You have not saved any passwords</h3>";
		}
	}


	function showpass($uemail){
		$conn = createConn();
		$sql = "SELECT * FROM passwords WHERE uemail = '".$uemail."';";
		$result = $conn -> query($sql);
		if($result -> num_rows > 0){
			$GLOBALS['nopass'] = "";
			while($row = $result -> fetch_assoc()){
				echo "
					  <div class='crdalign'>
					  <div class='card'>
					  <div class='container'>
					  <p id='wname'><b>Website Name :</b> {$row['websitename']} </p>
					  <p id='loginid'><b>Login Id :</b> {$row['loginid']} </p>
					  <p id='password'><b>Password :</b> {$row['password']} </p>
					  </div>
					  </div>
					  </div>
					  ";
			}
		}
		else{
			$GLOBALS['nopass'] = "You have not saved any passwords";
		}
	}


	function clearallpass($uemail){
		$conn = createConn();
		$sql = "DELETE FROM passwords WHERE uemail = '".$uemail."';";
		$conn -> query($sql);
	}


	function deletefromusers($uemail){
		$conn = createConn();
		$sql = "DELETE FROM users WHERE uemail = '".$uemail."';";
		if($conn -> query($sql) === TRUE){
			return "1";
		}
		else{
			return "0";
		}
	}

	?>
