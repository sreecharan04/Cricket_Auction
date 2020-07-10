
<?php
$id = $_GET['id'];
$conn=mysqli_connect("localhost","root","newrootpassword","cricket");
	  if($conn-> connect_error)
	  {
		  die("Connection failed".$conn-> connect_error);
	  }

	  
      $sql1="select Owner_Id_Fk,Bid_amount as Bid from auction_order  where player_Id_Fk='$id' and Bid_amount=(select max(Bid_amount) from auction_order where Player_Id_Fk='$id')";
	  $result1= $conn-> query($sql1);
	  
	 while($row1= $result1->fetch_assoc())
	  {
		  $owner=$row1["Owner_Id_Fk"];
		  $price=$row1["Bid"];
	  }
	  
	  if($owner!=NULL)
	  {
        echo $owner;
        echo $price;
	  
	  
	   
	  
	   
	   $sql2="select * from players  where player_Id='$id'";
	   $result2= $conn-> query($sql2);
	   while($row2 = $result2-> fetch_assoc())
	   {
		   if($row2["Is_Batsmen"]==1 and $row2["Is_Bowler"]==1)
			   $type='allrounder';
		   else if($row2["Is_Batsmen"]==1)
			   $type='batsmen';
		   else
			   $type='bowler';
	   }
	   
	   
       if($type=='allrounder')
	   {
		   $sql3="update team set no_of_all=no_of_all+1 where Owner_Id_Fk='$owner'";
		   $conn->query($sql3);
	   }
	   else if($type=='batsmen')
		{
			
		   $sql3="update team set no_of_batmen=no_of_batmen+1 where Owner_Id_Fk='$owner'";
	       $conn->query($sql3);
	    }   
	    else 
		{
		   $sql3="update team set no_of_bowlers=no_of_bowlers+1 where Owner_Id_Fk='$owner'";
	       $conn->query($sql3);
	    }
		$conn->query("update team set Rem_Intake=Rem_Intake-1 where Owner_Id_Fk='$owner'");
		$result3=$conn->query("select Team_Id from team where Owner_Id_Fk='$owner'");
		while($row3= $result3->fetch_assoc())
		{
			$team=$row3["Team_Id"];
		}
		$conn->query("update players set Auction_Flag=2,Sold_Flag=1,price='$price',Team_Id_Fk='$team' where Player_Id='$id'");
		$conn->query("update owners set Purse_Left_InLakh=Purse_Left_InLakh-'$price',Purse_Spent=Purse_Spent+'$price' where Owner_id='$owner'");
	  }
	  else
	  {
      
      $sql="update players set Auction_Flag=2 where Player_Id='$id' and Auction_Flag=1";
	  $result= $conn-> query($sql);
	  }
	 header("Location: /project/players/auction_players/end_player_auction.php");
?>