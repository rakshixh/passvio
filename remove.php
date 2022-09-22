<?php

include "connect.php"; 

$pid = $_GET['pid']; 

$del = mysqli_query($conn,"delete from passwords where pid = '$pid'");

if($del)
{
    mysqli_close($conn);
    header("location: managePass.php");
    exit;	
}
else
{
    echo "Error deleting record";
}
?>