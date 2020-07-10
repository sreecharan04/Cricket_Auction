
<?php
$id = $_GET['id'];
echo $id;
$conn=mysqli_connect("localhost","root","newrootpassword","cricket");
	  if($conn-> connect_error)
	  {
		  die("Connection failed".$conn-> connect_error);
	  }  
	  $sql="update users set role='lev3' where username='$id'";
	  $result= $conn-> query($sql);
	 // echo "$Id";
	 header("Location:  /project/Admin/admin.php");
?>