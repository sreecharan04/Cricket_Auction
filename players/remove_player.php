<html>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dorsa" rel="stylesheet">

<body>
<div class="main">	
<div class="">
			<div class="pop_up">
				<div class="payment-online-form-left">
					<form action="#" method="post"> 
						<h4>Delete Player</h4>
						<ul>
							<li><input class="text-box-dark" placeholder="enter Id here" name="playerid" type="text" required></li>
						</ul>
						<div class="clear"> </div>
						<div class="payment-type">
							
							<!--<li><span class="col_checkbox">
									<input type="radio" id="f-option" name="selector">
									<label for="f-option"><div class="visa"> </div></label>
									<div class="check"></div>
								</span>	 
							</li>
							<li>
								<span class="col_checkbox">
									<input type="radio" id="t-option" name="selector">
									 <label for="t-option"><div class="paypal"> </div></label>
									<div class="check"><div class="inside"></div></div>
								</span>
							</li>-->
							<ul class="payment-sendbtns">
							  <li><input type="submit" value="Delete"></li>
							  </ul>
						</div> 
						
					</form>
				</div>
			</div>
		</div>
		</div>
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
</body>
</html>