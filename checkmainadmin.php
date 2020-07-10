<?php include 'dbconn.php';?>
<?php
   if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
       $user=$_POST['user'];  
       $pass=$_POST['pass'];
       //$conn->query("select password from users ")
   $query=mysqli_prepare($conn,"SELECT * FROM admin WHERE Adminname=?"." AND password=?");
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
       $_SESSION['sess_user2']=$user;  
     
       /* Redirect browser */  
       header("Location: /project/Admin/admin.php");  
       //}  
       } else {  
       header("Location: /project/mainadmin_login.php?message2=1");
       }  
     
   } else {  
       header("Location: /project/mainadmin_login.php?message2=1");
   } 	   
   ?>
