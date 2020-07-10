<?php include 'dbconn.php';?>
<?php
$conn->query("update players set Auction_Flag=0,Sold_Flag=0,Team_Id_Fk=NULL,price=30");
$conn->query("update team set no_of_batmen=0,no_of_bowlers=0,no_of_all=0,Rem_Intake=18");
$conn->query("update owners set Purse_Left_Inlakh=6000,Purse_Spent=0");
$conn->query("delete from auction_order");
header("Location: /project/Admin/index.php");
?>