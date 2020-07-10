<?php
session_start();
if(!isset($_SESSION['sess_user']))
{
	
	header("Location: ../owner_login.php"); 
		
}
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Auction Hub</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Popular Pricing Table template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Buy Now Web Templates, Flat Web Templates, Login Buy Now Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dorsa" rel="stylesheet">
<!-- //web font -->


</head>
<body>
<div class="main">	
<div class="top-nav">
    					<span class="menu"> <img src="/project/images/icon.png" alt=""/></span>
    				<ul class="res">
    					<li><a href="/project/owner_dash/dash.php">Home</a></li>
    				<div class="clearfix"> </div>
    				</ul>
    			 </div>
<h1>Players under hammer</h1>

	<!--main-->
	
		
		<div class="pricing-agileinfo">
		<?php
           $id = $_GET['id'];	
$conn=mysqli_connect("localhost","root","newrootpassword","cricket");
	  if($conn-> connect_error)
	  {
		  die("Connection failed".$conn-> connect_error);
	  }  
  $sql="SELECT * from Players where  Auction_Flag=1";
	  $result= $conn-> query($sql);
	  // purse left , owner id
	  $sql1="SELECT * from owners where Owner_Id='$id'";
	   $result1= $conn-> query($sql1);
	   while($row1 = $result1-> fetch_assoc())
	  {
		  #code...
		  $pursespent=$row1["Purse_Spent"];
		  $purseleft=$row1["Purse_Left_InLakh"];
		  $Owner=$row1["Owner_id"];
	  }
	  //no of bat bowl wks 
	  $sql2="SELECT * from owners,team where Owner_Id=Owner_Id_Fk and Owner_Id='$id'";
	  $result2= $conn-> query($sql2);
	   while($row2 = $result2-> fetch_assoc())
	  {
		  $bowlers=$row2["no_of_bowlers"];
		  $batsmen=$row2["no_of_batmen"];
		  $allrounders=$row2["no_of_all"];
		  $Rem_Intake=$row2["Rem_Intake"];
	  }
	  
	  //players
	  	 while($row = $result-> fetch_assoc())
	  {
		   if($row["Is_Bowler"]==1 and $row["Is_Batsmen"]==1)
		    $type='allrounder';
		   else if($row["Is_Bowler"]==1)
	        $type='bowler';
		  else
			$type='batsmen';
	     $player=$row["Player_Id"];
		 $ownerlatest=NULL;
		 $result4=$conn->query("select Owner_Id_Fk from auction_order where Player_Id_Fk='$player' and Bid_amount=(select max(Bid_amount) from auction_order where Player_Id_Fk='$player')");
		  while($row4=$result4->fetch_assoc())
		  {
			  $ownerlatest=$row4["Owner_Id_Fk"];
		  }
?>          
			<div class="pricing-grid grid-one">
				<div class="w3ls-top">
					<font color="black"><?php echo $row["Name"];?></font>
					<h4><span class="sup">$</span><?php echo $row["Base_Price_Inlakh"]; ?></h4>  
				</div>
				<div class="w3ls-bottom">
					<ul class="count">
						<li><?php echo $row["Country"];?></li>
						<li><font color="black">Runs : </font><?php echo   $row["Runs"]; ?></li>
						<li><font color="black">Matches    : </font><?php echo $row["matches"]; ?> </li>
						<li><font color="black">Innings    : </font><?php echo $row["Innings_Played"]; ?></li>
                        <li><font color="black">High score : </font><?php echo $row["Highest_Score"];  ?></li>	
						<li><font color="black">100s       : </font><?php echo $row["100s"]; ?></li>
						<li><font color="black">50s        : </font><?php echo $row["50s"]; ?></li>
						<li><font color="black">type        : </font><?php echo $type;?></li>
					</ul>
					<div class="more">
		<a   href="order/order.php?id=<?php echo $player;?>">Order</a>
	   <!--restriction for Money---------------------------->
	   <?php if($purseleft<=0)
		       {
		 ?> 
		         <script>
		           function   myfun()
			        {
				     alert('Can not Bid. Go to your restriction page');
			        }
			     </script>
		         <a   href="javascript:myfun()">Bid</a><?php 
               } 
      else {			   
		  ?>
		<!-- restriction for batsmen -------------------- --> 
		 <?php if($type=='batsmen')
		       {
		 ?> 
		         <script>
		           function   myfun1()
			        {
				     alert('can not Bid. Go to your restriction page');
			        }
			     </script>
		 <?php          if($batsmen==7) 
					       {
						      ?><a   href="javascript:myfun1()">Bid</a><?php 
					       }
			            else{ 
						if($ownerlatest!=$Owner or $ownerlatest=NULL){
         ?>                    <a href="bid.php?id=<?php echo $player; ?>&o_id=<?php echo $Owner;?>">Bid</a>
						<?php }}}  
		  ?>
			<!-----------------------------------------------Bowler-------------------------------------------->
           <?php if($type=='bowler')
		       {
		 ?> 
		         <script>
		           function   myfun2()
			        {
				     alert('can not Bid. Go to your restriction page');
			        }
			     </script>
		 <?php          if($bowlers==7) 
					       {
						      ?><a   href="javascript:myfun2()">Bid</a><?php 
					       }
			            else{ 
						     if($ownerlatest!=$Owner or $ownerlatest=NULL){
         ?>                    <a href="bid.php?id=<?php echo $player; ?>&o_id=<?php echo $Owner;?>">Bid</a>
							 <?php }}  }
		  ?>	
            <!----------------------------------------allrounder----------------------------------------------->
           	<?php if($type=='allrounder')
		       {
		 ?> 
		         <script>
		           function   myfun3()
			        {
				     alert('can not Bid. Go to your restriction page');
			        }
			     </script>
		 <?php          if($allrounders==5) 
					       {
						      ?><a   href="javascript:myfun3()">Bid</a><?php 
					       }
			            else {if($ownerlatest!=$Owner or $ownerlatest=NULL){
         ?>                    <a href="bid.php?id=<?php echo $player; ?>&o_id=<?php echo $Owner;?>">Bid</a>
			   <?php }  }}
	      } ?>			  
					</div>
				</div>
			</div>
			<?php } ?>
		
			<div class="clear"> </div>  
		</div>
		<!-- pop-up-grid -->
		 <div id="small-dialog" class="mfp-hide">
			<div class="pop_up">
			      			
			</div>
		</div>
		<!-- //pop-up-grid --> 
	</div>	
	<!-- //main -->
	<!--copyright-->
	
	<!-- popup.js -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script> 
	 <script>
		$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
	<!-- //popup.js -->
</body>
</html>