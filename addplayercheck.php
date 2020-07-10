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
       $country=$_POST['field'];
       $playername=$_POST['player_name'];  
       $baseprice=$_POST['base_price'];
	   $runs=$_POST['runs'];  
       $matches=$_POST['matches'];
       $innings=$_POST['innings'];  
       
	   $highscore=$_POST['highscore'];
	   $centuries=$_POST['centuries'];
	   $bowling_econ=$_POST['bowling_econ'];
	   $halfcen=$_POST['half_cen'];
       //echo $ownername,$nationality,$username,$password;
	   if($gen=='Batsman')
       $conn->query("insert into players (Name,Country,Base_Price_Inlakh,Runs,matches,Innings_Played,Highest_Score,100s,50s,Bowling_econ,Is_batsmen,Is_Bowler) values('$playername','$country','$baseprice','$runs','$matches','$innings','$highscore','$centuries','$halfcen','$bowling_econ',1,0)");  
        else if($gen=='Bowler')
	$conn->query("insert into players (Name,Country,Base_Price_Inlakh,Runs,matches,Innings_Played,Highest_Score,100s,50s,Bowling_econ) values('$playername','$country','$baseprice','$runs','$matches','$innings','$highscore','$centuries','$halfcen','$bowling_econ',0,1)");  		
	     header("Location: /project/admin/index.php");
   ?>

