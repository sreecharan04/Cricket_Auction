<?php include 'dbconn.php';?>
<?php
   if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
       $user=$_POST['user'];  
       $pass=$_POST['pass'];
       //$conn->query("select password from users ")
   $query=mysqli_prepare($conn,"SELECT * FROM users WHERE username=?"." AND password=SHA2(?, 256)");
       mysqli_stmt_bind_param($query,'ss',$user,$pass);
       mysqli_stmt_execute($query);
       $result=mysqli_stmt_get_result($query);
       $numrows=mysqli_num_rows($result);  
       if($numrows==1)  
		  {  
       /*$row=mysqli_fetch_assoc($result);  
       $dbusername=$row['username'];  
       $dbpassword=$row['password'];  
         echo $dbpassword;
     
       if($user == $dbusername && $pass == $dbpassword)  
       { */ 
   //echo 'hii';
       session_start();  
       $_SESSION['sess_user1']=$user;  
     
       /* Redirect browser */  
       header("Location: Admin/index.php");  
       //}  
       } else {  
       header("Location: /project/admin_login.php?message1=1");
       }  
     
   } else {  
       header("Location: /project/admin_login.php?message1=1");
   } 	   
   ?>
