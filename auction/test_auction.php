<?php

$conn=mysqli_connect("localhost","root","newrootpassword","cricket");
	  if($conn-> connect_error)
	  {
		  die("Connection failed".$conn-> connect_error);
	  }  
    
	$result1=$conn->query("select team_name,price from team,players where players.Team_Id_Fk=team.Team_Id and Player_Id=22");
				 while($row1 = $result1-> fetch_assoc())
				 {
					  
					 $teamname=$row1["team_name"];
					 $price=$row1["price"];
				 }
	 echo $teamname,$price;
	  ?>
<html>
<button onclick="myFunction('<?php echo $Owner_Id;?>');this.onclick=null;">This button works only once</button>
<button onclick="myFunction()">This button works always</button>

<script>

     function   myFunction(id)
			 {
				 alert(id+' is already sold');
			 }
</script>
</html>
<?php
?>