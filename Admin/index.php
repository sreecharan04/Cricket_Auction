<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
if(!isset($_SESSION['sess_user1']))
{
	
	header("Location: /project/admin_login.php"); 
		
} 
	if(isset($_GET['message']))
  {
	  $message= $_GET['message'];
	  ?>
	  <script>
	  alert('Sorry! You are not authorised for this action');
	  </script>
	  <?php
  }
	

$user=$_SESSION['sess_user1'];

$conn=mysqli_connect("localhost","root","newrootpassword","cricket");
	  if($conn-> connect_error)
	  {
		  die("Connection failed".$conn-> connect_error);
	  }  
  $sql="SELECT * from users where username='$user'";
	  $result= $conn-> query($sql);
	 // echo "$Id";
	   while($row = $result-> fetch_assoc())
	  {
		  $role=$row["role"];
		  
	  }

if(isset($_GET['approved']))
{
	?>
     <script>
	 alert('approved');
     </script>	 
	<?php
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Auctioneer<?php echo $role;?></title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="stylesheet" href="css/bar.css">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="css/pignose.calender.css" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="#"><?php echo $user; ?></a>
                </h1>
                
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="index.html">
                        <i class="fas fa-th-"></i>
						<?php if($role=='lev1' or $role=='lev2')
						{
							  echo '<a href="/project/players/auction_players/approveowner.php"><h5>Approve Owner</h5></a>';
						}
						else
						{
							  echo '<a href="/project/Admin/index.php?message=1"><h5>Approve Owner</h5></a>';
						}							
						?> 
                            
							<a href="/project/reset.php"><h5>Reset all data</h5></a>
                    </a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        Player
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="/project/players/auction_players/view.php">View players</a>
                        </li>
						<li>
						<?php if($role=='lev1' or $role=='lev3')
						{
							  echo '<a href="/project/add_player.php">Add Player</a>';
						}
						else
						{
							  echo '<a href="/project/Admin/index.php?message=1"><h5>Add player</h5></a>';
						}							
						?> 
                            
                        </li>
                        <li>
						<?php if($role=='lev1' or $role=='lev3')
						{
							  echo '  <a href="/project/remove_player.php"><font color="red">Remove Player</font></a>';
						}
						else
						{
							  echo '<a href="/project/Admin/index.php?message=1"><h5>remove player</h5></a>';
						}
						?>
                          
                        </li>
                        <li>
                            <a href="/project/players/auction_players/start_player_auction.php">Start player auction</a>
                        </li>
                        <li>
                            <a href="/project/players/auction_players/end_player_auction.php">End player Auction</a>
                        </li>
						
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                         Owners
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu1">
                    	  <li>
						  <?php if($role=='lev1' or $role=='lev2')
						{
							  echo '<a href="/project/remove_owner.php"><font color="red">Remove Owner</font></a>';
						}
						else
						{
							  echo '<a href="/project/Admin/index.php?message=1"><h5>remove owner</h5></a>';
						}
						?>
                            
                        </li>
                        
                    </ul>
                </li>
                
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">
                                    <a href="/project/adminlogout.php"><h2>logout</h2></a>
                    <!--// Search-from -->
                    <ul class="top-icons-agileits-w3layouts float-right">
                        <li class="nav-item dropdown">
                            <div class="dropdown-menu top-grid-scroll drop-1">
                                                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--// top-bar -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Stats -->
                    <div class="outer-w3-agile col-xl">
                        <div class="stat-grid p-3 d-flex align-items-center justify-content-between bg-primary">
                            <div class="s-l">
                                <a href="/project/players/auction_players/team.php"><h5>View teams</h5></a>
                                <p class="paragraph-agileits-w3layouts text-white">To view all the teams and their details</p>
                            </div>
                            <div class="s-r">
                                <h6>num</h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-success">
                            <div class="s-l">
							
                                <a href="/project/auction/order/allorder.php"><h5>Order of auction</h5></a>
                                <p class="paragraph-agileits-w3layouts">Order of auction for sold players</p>
                            </div>
                            <div class="s-r">
                                <h6>num
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-danger">
                            <div class="s-l">
                                <a href="/project/players/auction_players/sold_player_list.php"><h5>Sold Players</h5></a>
                                <p class="paragraph-agileits-w3layouts">list of sold players and their Details</p>
                            </div>
                            <div class="s-r">
                                <h6>num</h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-warning">
                            <div class="s-l">
                                <a href="/project/players/auction_players/unsold_player_list.php"><h5>Unsold Players</h5></a>
                                <p class="paragraph-agileits-w3layouts">List of auctioned and unsold players</p>
                            </div>
                            <div class="s-r">
                                <h6>num </h6>
                            </div>
                        </div>
						
                    </div>
                    <!--// Stats -->
                
                </div>
            </div>
           

            
     
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->
    
    <!-- loading-gif Js -->
    <script src="js/modernizr.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    
  



    
   

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>