<?php
session_start();
if(!isset($_SESSION['sess_user1']))
{
	
	header("Location: /project/admin_login.php"); 
		
}
?>
<?php include 'dbconn.php';?>
<?php
       $gen=$_POST['owner_name'];
	   $result=$conn->query("select Owner_Id from owners where Owner_Name='$gen'");
	   while($row= $result->fetch_assoc())
	   {
		   $id=$row["Owner_Id"];
	   }
       //echo $ownername,$nationality,$username,$password
	   $conn->query("delete from team where Owner_Id_Fk='$id'");
	   $conn->query("delete from owners where Owner_Name='$gen'");  
       	     header("Location: /project/admin/index.php");
   ?>

