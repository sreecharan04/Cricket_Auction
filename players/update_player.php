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
						<h4>update Player</h4>
						<ul>
							<li><input class="text-box-dark" placeholder="Country" name="Country" type="text" required></li>
							<li><input class="text-box-dark" placeholder="Base Price" name="Base Price" type="text" required></li>
						</ul>
						<ul>
							<li><input class="text-box-dark" placeholder="Runs"  name="Runs" type="text" required></li>
							<li><input class="text-box-dark" placeholder="Matches" name="Matches" type="text" required></li>
						</ul>
						<ul>
							<li><input class="text-box-dark" placeholder="Innings" name="Innings" type="text" required></li>
							<li><input class="text-box-dark" placeholder="Highest Score" name="High_score" type="text" required></li>
						</ul>	 
						<div class="clear"> </div>
						<div class="payment-type">
							<h4>Choose type</h4> 
							
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
							<ul class="col_checkbox">
							<input type="checkbox" name="Bat" value="Bat">Batsmam<br>
						   <input type="checkbox" name="Ball" value="Bat">Bowler<br>
                           <input type="checkbox" name="Wicketkeeper" value="Wicketkeeper">Wicketkeeper<br>
                           
						   </ul>
							<ul class="payment-sendbtns">
							  <li><input type="submit" value="Add"></li>
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