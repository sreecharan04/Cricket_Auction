
<?php include 'dbconn.php';?>
<?php
   if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
       $user=$_POST['user'];  
       $pass=$_POST['pass'];  
       
    $query=mysqli_prepare($conn,"SELECT * FROM owners WHERE Owner_Name=?"." AND Password=?");
       mysqli_stmt_bind_param($query,'ss',$user,$pass);
       mysqli_stmt_execute($query);
       $result=mysqli_stmt_get_result($query);
       $numrows=mysqli_num_rows($result);  
       if($numrows==1)  
		  {  
       $row=mysqli_fetch_assoc($result);  
       $dbusername=$row['Owner_Name'];  
       $dbpassword=$row['Password'];  
       
     
       if($user == $dbusername && $pass == $dbpassword)  
       {  
       session_start();  
       $_SESSION['sess_user']=$user;  
     
       /* Redirect browser */  
       header("Location: Owner_dash/dash.php");  
       }  
       } else {  
        header("Location: /project/owner_login.php?message=1");
       }  
     
   } else {  
        header("Location: /project/owner_login.php?message=1");
   }  
   
   
   
   
   ?>

