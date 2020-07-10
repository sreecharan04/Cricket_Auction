<?php
session_start();
if(!isset($_SESSION['sess_user1']))
{
	
	header("Location: /project/admin_login.php"); 
		
}
?>
<?php include 'dbconn.php';?>
<?php
       $gen=$_POST['player_id'];
       echo $gen;
       //echo $ownername,$nationality,$username,$password;
	   $conn->query("delete from players where Player_Id='$gen'");  
       	     header("Location: /project/admin/index=.php");
   ?>

