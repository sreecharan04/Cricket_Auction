<?php
session_start();
if(!isset($_SESSION['sess_user1']))
{
	
	header("Location: /project/admin_login.php"); 
		
}
?>
<?php include 'dbconn.php';?>
<?php
       $gen=$_POST['username'];
       echo $gen;
       //echo $ownername,$nationality,$username,$password;
	   $conn->query("delete from users where username='$gen'");  
       	     header("Location: /project/admin/admin.php");
?>

