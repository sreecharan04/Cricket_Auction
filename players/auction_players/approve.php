<?php

$id = $_GET['id'];
$conn=mysqli_connect("localhost","root","newrootpassword","cricket");
	  if($conn-> connect_error)
	  {
		  die("Connection failed".$conn-> connect_error);
	  }  
  $sql="SELECT * from register where signupid='$id'";
	  $result= $conn-> query($sql);
	   while($row = $result-> fetch_assoc())
	  {
		$teamname=$row['team_name'];
	   $nationality=$row['nationality'];  
       $profession=$row['profession'];
       $phone=$row['phone'];         
	   $gender=$row['gender'];
	   $date=$row['dob'];
	   $username=$row['username'];
	   $password=$row['password'];
	   
	  }
	  $conn ->query("insert into owners(Owner_name,Password,nationality,profession,phone,dob,gender)values('$username','$password','$nationality','$profession','$phone','$date','$gender')");
	  
	  $result1=$conn->query("select Owner_Id from owners where Owner_Name='$username'");
	  while($row1=$result1->fetch_assoc())
	  {
		  $ownerid=$row1["Owner_Id"];
	  }
	  $conn->query("insert into team (owner_Id_Fk,team_name) values('$ownerid','$teamname')");
      $conn ->query("delete from register where signupid='$id'");
	  header("Location: /project/admin/index.php"); 
?>