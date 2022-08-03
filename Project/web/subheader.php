<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Catchy Carz a classified ads  Category Flat Bootstrap Responsive Website Template | Sell Single Page :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Catchy Carz Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
			<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
</head>
<body>
<!--/banner-section-->
		<div id="demo-1" class="banner-inner">
	 <div class="banner-inner-dott">
       <div class="header-top">
		    <!-- /header-left -->
		          <div class="header-left">
				  <!-- /sidebar -->
				      <div id="sidebar"> 
						     <h4 class="menu">Menu</h4>
						          <ul>
							    <li><a href="cars">New Cars <i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
							      <ul>
									<li><a href="index"><span>Home</span></a></li>
									  <li><a href="cars"><span>Find Cars</span></a></li>
									  <li><a href="find"><span>Company Cars</span></a></li>
								   </ul>
							   </li>
							   <li><a href="feedback"> Feedback</a></li>
							   <li><a href="contact">Contact</a></li>
						   </ul>
						   <div id="sidebar-btn">
							   <span></span>
							   <span></span>
							   <span></span>
						   </div>
					   </div>

							 <script>
								  var sidebarbtn = document.getElementById('sidebar-btn');
									var sidebar = document.getElementById('sidebar');
								   sidebarbtn.addEventListener('click', function () {
								  if(sidebar.classList.contains('visible')){
										sidebar.classList.remove('visible'); 
								   }else {
										sidebar.className = 'visible';
									}
								  });
								</script>
					    <!-- //sidebar -->
						
					<?php
					if(isset($_SESSION['email']))
					{
					?>
					  <div class="tag"><a href="logout"><span class="glyphicon glyphicon-log-in"></span>Logout</a></div>
					   <div class="tag"><a href="myprofile"><span class="glyphicon glyphicon-log-in"></span>My Profile</a></div>	
					<?php
					}
					else
					{
					?>	
					  <div class="tag"><a href="login" ><span class="glyphicon glyphicon-log-in"></span> login</a></div>
					  <div class="tag"><a href="signup"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></div>
					<?php
					}
					?>
					</div>
					
				
				   
						
					</div>
					<div class="clearfix"></div>