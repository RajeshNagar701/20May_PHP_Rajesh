
<?php

if(isset($_SESSION['email']))
{
	
}
else
{
	echo "<script> 
		alert('Login first');
		window.location='index';
		</script>";
}

include_once('subheader.php');
?>


		    <!--banner-info-->
			<div class="banner-info">
			  <h1><a href="index">Catchy <span class="logo-sub">Carz</span> </a></h1>
			    <h2><span>COME LOOK </span> <span>AT THE SELECTION! </span></h2>
				<p>Eye it – try it – buy it!</p>
			     
			</div>
		<!--//banner-info-->	
		</div>
	 </div>

				
				
				
		
		    <div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left w3">
						<ul>
							<li><a href="index">Home</a> <i>|</i></li>
							<li>Contact</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Contact</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
			<!-- /find new cars -->
		<!-- Services -->
	<div class="updates-agile">
	     <div class="container">
		      <h3 class="tittle">Contact</h3>
				
				<div class="col-md-5 new-car-used">
					  <h3 class="tittle top">USED CARS</h3>
					  <h6 class="sub">Used Cars at Shocking Prices.</h6>
					  <div class="used-one">
					     <figure class="effect-zoe">
							 <a href="used.html"><img src="images/used_car.jpg" alt="Used Car"></a>
							
					  </div>
					  <div class="clearfix"> </div>
					   <h1></h1>
					</div>				
				</div>	
		</div>
		<div class="clearfix"></div>
		<!-- //Services -->
	        <!-- //find new cars -->
			<?php
include_once('footer.php');
?>	