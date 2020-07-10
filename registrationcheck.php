

<?php include 'dbconn.php';?>
<?php
   if(!empty($_POST['owner_name']) && !empty($_POST['team_name']) && !empty($_POST['nationality']) && !empty($_POST['profession']) 
	   && !empty($_POST['phone']) && !empty($_POST['dob']) && !empty($_POST['username']) && !empty($_POST['password'])) 
	   {  
       $ownername=$_POST['owner_name'];  
       $teamname=$_POST['team_name'];
	   $nationality=$_POST['nationality'];  
       $profession=$_POST['profession'];
       $phone=$_POST['phone'];  
       
	   $gender=$_POST['gender'];
	   $date=$_POST['dob'];
	   $username=$_POST['username'];
	   $password=$_POST['password'];
	   
       //echo $ownername,$nationality,$username,$password;
       $conn->query("insert into register (owner_name,team_name,nationality,profession,phone,dob,gender,username,password) values('$ownername','$teamname','$nationality','$profession','$phone','$date','$gender','$username','$password')");  
        header("Location: /project/register_owner.php?message=1");
	   }  
   ?>

