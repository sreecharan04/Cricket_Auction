
<?php
session_start(); 
$user=$_SESSION['sess_user2'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin<?php echo $user;?></title>
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
                <span>Admin</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#">
                         
                    </a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        Auctioneer
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="/project/players/auction_players/auctioneer_list.php">View Auctioneer</a>
                        </li>
						<li>
                            <a href="/project/add_auctioneer.php">Add Auctioneer</a>
                        </li>
                        <li>
                            <a href="/project/remove_auctioneer.php"><font color="red">Remove Auctioneer</font></a>
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
                                    <a href="/project/mainadminlogout.php"><h2>logout</h2></a>
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
                                <a href="/project/players/auction_players/auctioneer_level1.php"><h5>Level 1 Auctioneers</h5></a>
                                <p class="paragraph-agileits-w3layouts text-white">Able to  add or remove owners as well as players</p>
                            </div>
                            <div class="s-r">
                                <h6>num</h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-success">
                            <div class="s-l">
							
                                <a href="/project/players/auction_players/auctioneer_level2.php"><h5>level 2 Auctioneers</h5></a>
                                <p class="paragraph-agileits-w3layouts">Able to  add or remove owners</p>
                            </div>
                            <div class="s-r">
                                <h6>num
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-danger">
                            <div class="s-l">
                                <a href="/project/players/auction_players/auctioneer_level3.php"><h5>Level 3 Auctioneers</h5></a>
                                <p class="paragraph-agileits-w3layouts">Able to add or remove players</p>
                            </div>
                            <div class="s-r">
                                <h6>num</h6>
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