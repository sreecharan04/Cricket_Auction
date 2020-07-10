<?php include 'dbconn.php';?>
<?php
   if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
       $user=$_POST['user'];  
       $pass=$_POST['pass'];
       //$conn->query("select password from users ")
   $query=mysqli_prepare($conn,"SELECT * FROM login WHERE username=?"." AND password=SHA2(?, 256)");
       mysqli_stmt_bind_param($query,'ss',$user,$pass);
       mysqli_stmt_execute($query);
       $result=mysqli_stmt_get_result($query);
       $numrows=mysqli_num_rows($result);  
       if($numrows==1)  
		  {  
	  
	  echo $user;
       $row=mysqli_fetch_assoc($result); 
       $flag=$row["flag"];
	   echo $flag;
       /*$dbusername=$row['username'];  
       $dbpassword=$row['password'];  
         echo $dbpassword;
     
       if($user == $dbusername && $pass == $dbpassword)  
       { */ 
   //echo 'hii';
   if($flag=='1')
   {
	    session_start();  
       $_SESSION['sess_user1']=$user;  
     
       /* Redirect browser */  
       header("Location: Admin/index.php");  
      
   }
else if($flag=='0')
{ 
      session_start();  
       $_SESSION['sess_user2']=$user;  
     
       /* Redirect browser */  
      header("Location: /project/Admin/admin.php");  
       //}  
} 
else if($flag=='2')
{
	session_start();  
       $_SESSION['sess_user']=$user;  
     
       /* Redirect browser */  
       header("Location: Owner_dash/dash.php");
}
		  }
	else {  
       header("Location: /project/index.php?message=1");
       }  
     
   } else {  
       header("Location: /project/index.php?message=1");
   } 	   
   ?>
