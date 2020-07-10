<?php
session_start();
if(!isset($_SESSION['sess_user1']))
{
	
	header("Location: /project/admin_login.php"); 
		
}
?>
<?php include 'dbconn.php';?>
<?php
       $gen=$_POST['genre'];
       $auctioneer_name=$_POST['auctioneer_name'];
	   $pass=$_POST['password'];
	    $conn->query("insert into users values ('$auctioneer_name',sha2('$pass',256),'$gen')");
		echo $pass,$gen,$pass;
	   //echo $ownername,$nationality,$username,$password;
   header("Location: /project/admin/admin.php");
   ?>

