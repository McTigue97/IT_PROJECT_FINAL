<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	
	<!-- Font -->
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="common-css/bootstrap.css" rel="stylesheet">
	
	<link href="common-css/ionicons.css" rel="stylesheet">
	
	<link href="05-contact/css/styles.css" rel="stylesheet">
	
	<link href="05-contact/css/responsive.css" rel="stylesheet">
	
</head>
<body>
	
 	<header>
		<div class="container">
		
			<a class="logo" href="#"><img src="Logo-LOI.gif" alt="Logo"></a>
			
			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="icon ion-navicon"></i></div>
			
			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="index.html">Home</a></li>
				<li><a href="02-championship_events.html">Championship Events</a></li>
				<li><a href="03-discussion.html">Discussion Room</a></li>
				<li><a href="04-HOF.html">Hall Of Fame</a></li>
				<li><a href="05-contact.html">Contact</a></li>
			</ul><!-- main-menu -->
			
		</div><!-- container -->
	</header>

	
	<div class="main-slider" style="background-image: url(images/f1/f1_3.jpg); background-size: cover; background-position: center center">
		<div class="display-table center-text">
			<div class="display-table-cell">
				<div class="slider-content">
				
					<h5 class="pre-heading">Sign Up To</h5>
					<h1><b>The League Of Ireland</b></h1>
					
				</div><!-- slider-content-->
			</div><!--display-table-cell-->
		</div><!-- display-table-->
	</div><!-- main-slider -->
	
	
	<section class="contact-section section">
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-8">
					<div class="contact-form">
						<form method="post">
							<div class="row">
								
								<div class="col-sm-6">
									PSN Name: <input class="margin-b-30" type="text" id="psnname" name="psnname" placeholder="PSN Name"/>
								</div><!-- col-sm-6 -->
								
								<div class="col-sm-6">
									Email:<input class="margin-b-30" type="email" id="email" name="email" placeholder="Your email"/>
								</div><!-- col-sm-6 -->
								
								<div class="col-sm-6">
									Discord Name:<input class="margin-b-30" type="text" id="dname" name="dname" placeholder="Must be the same as PSN name!"/>
								</div><!-- col-sm-6 -->
								
								<div class="col-sm-6">
								<p>Austria Lap Time:</p>
									<input class="margin-b-30" type="text" id="atime" name="atime" placeholder="Your best lap in Time Trial"/>
								</div><!-- col-sm-6 -->
								
								<div class="col-sm-6">
								<p>Silverstone Lap Time:</p>
									<input class="margin-b-30" type="text" id="stime" name="stime" placeholder="Your best lap in Time Trial"/>
								</div><!-- col-sm-6 -->
								
								<div class="col-sm-6">
								<p>Bahrain Lap Time:</p>
									<input class="margin-b-30" type="text" id="btime" name="btime" placeholder="Your best lap in Time Trial"/>
								</div><!-- col-sm-6 -->



								
								<?php
									error_reporting(0);

									$psnname=$_POST['psnname'];
									$email=$_POST['email'];
									$console=$_POST['console'];
									$dname=$_POST['dname'];
									$atime=$_POST['atime'];
									$stime=$_POST['stime'];
									$btime=$_POST['btime'];

									$conn=mysqli_connect("localhost", "id18836990_root","lo\I/1[5hloi", "id18836990_feed");
									$db=mysqli_select_db($conn,'id18836990_feed');

									if(isset($_POST['sub']))
									{
										$q="INSERT INTO signup( `name`, `email`, `console`, `dname`, `atime`, `stime`, `btime`) VALUES ('$psnname','$email', '$console', '$dname', '$atime', '$stime', '$btime')";
										if($r=mysqli_query($conn,$q))
										{
											//echo 'successfully add';
										}else
										{
											
											//echo 'failed';
										}
										
										
									}




									$result=mysqli_query($conn,$query);
									while($row=mysqli_fetch_array($result))
									{
										print_r($row);
									?>



									<br>

									 <br>

									 </div>
									 <?php 
									 }
									 ?>
									 
									 
									 								<button class="btn btn-border margin-b-30" type="submit" id="sub" name="sub"><b>SEND IT</b>
										<i class="ion-chevron-right"></i><i class="ion-chevron-right"></i></button>
																							<div class="col-sm-12">
																	</div><!-- col-sm-12 -->
						</form>
					</div><!-- contact-form -->
				</div><!-- col-sm-8 -->
				
			
				
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- contact-section -->
	
	
	
	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-lg-3 col-xl-4">
					<div class="margin-b-30">
						<a class="logo margin-b-10"><img src="Logo-LOI.gif" alt="Logo"></a>
						
						<p class="margin-tb-20">Biggest Irish made Formula 1 Racing championship on PS4/PS5 +100 drivers Tier 1 - 4<p>
						<p class="font-black-lite copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> LOI F1. All rights reserved. </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
						
					</div><!-- margin-b-30 -->
				</div><!-- col-sm-6 -->
				
				<div class="hidden-lg-down col-xl-2"></div>
				
				<div class="col-md-6 col-lg-3 col-xl-2">
					<div class="footer-section margin-b-30">
						<h5 class="title margin-b-20"><b>Founder</b></h5>
						<p>LOI_BIG5LATER</p>
						<br>
						<h5 class="title margin-b-20"></b>Owners</b></h5>
						<p>LOI_BIG5LATER</p>
						<p>LOI_Colinb289</p>
						<br>
						<h5 class="title margin-b-20"></b>Race Directors</b></h5>
						<p>LOI_JonoYacunhya</p>
						<p>LOI_Timesplitter</p>
						<br>
						<h5 class="title margin-b-20"></b>Recruitment</b></h5>
						<p>LOI_IrishGary33</p>
					</div><!-- footer-section -->
				</div><!-- col-sm-2 -->
				
				<div class="col-md-6 col-lg-3 col-xl-2">
					<div class="footer-section margin-b-30">
						<h5 class="title margin-b-20"><b>Stewards</b></h5>
						<p>LOI-Con</p>
						<p>LOI_Danjo1358</p>
						<p>LOI_1OMMY</p>
						<p>LOI_BIGLE098</p>
						<p>LOI_Colinb289</p>
						<p>LOI_JonoYacunhya</p>
						<p>LOI_KACHIGGA</p>
						<p>LOI_RealJohnny</p>
						<p>LOI_Timesplitter</p>
						<p>LOI_Whelo</p>
						<p>LOI_IrishGary33</p>
					</div><!-- footer-section -->
				</div><!-- col-sm-2 -->
				
				<div class="col-md-6 col-lg-3 col-xl-2">
					<div class="footer-section margin-b-30">
						<h5 class="title margin-b-20"><b>Commentary Team</b></h5>
						<p>IDYLLANN096</p>
						<p>Josh-inator-6000</p>
						<p>KellehEU</p>
						<p>LOI_BIG5LATER</p>
						<p>LOI_Colinb289</p>
						<p>LOI_CON</p>
						<p>LOI_Niall</p>
						<p>LOI_RealJohnny</p>
						<p>LOI_ShamRock</p>
						<p>LOI_Timesplitter</p>
						<p>LOI_Whelo</p>
					</div><!-- footer-section -->
				</div><!-- col-sm-2 -->
				
			</div><!-- row -->
		</div><!-- container -->
	</footer>
	
	<!-- SCIPTS -->
	
	<script src="common-js/jquery-3.1.1.min.js"></script>
	
	<script src="common-js/tether.min.js"></script>
	
	<script src="common-js/bootstrap.js"></script>
	
	<script src="common-js/scripts.js"></script>
	
	
</body>
</html>