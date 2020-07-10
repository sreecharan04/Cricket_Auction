<?php

$id = $_GET['id'];
$conn=mysqli_connect("localhost","root","newrootpassword","cricket");
	  if($conn-> connect_error)
	  {
		  die("Connection failed".$conn-> connect_error);
	  }  
 
      $conn ->query("delete from register where signupid='$id'");
	  header("Location: /project/admin/index.php"); 
?>