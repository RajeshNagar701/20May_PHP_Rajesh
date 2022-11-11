@extends('website.layout.structure')

@section('main_content')

<?php
/*
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
*/
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
					  <div class="used-one">
					     <figure class="effect-zoe">
							<img src="upload/customer/<?php echo $fetch->file;?>" alt="Used Car" width="100%"/>
						  </figure>	
					  </div>
					  <div class="clearfix"> </div>
					   <h1></h1>
				</div>
			<div class="col-md-5 new-car-used">
					  <h3 class="tittle top">ID : <?php echo $fetch->cust_id;?></h3>
					  <h3 class="tittle top">Name : <?php echo $fetch->name;?></h3>
					  <h6 class="sub">Email : <?php echo $fetch->email;?> </h6>
					  <h6 class="sub">Gender : <?php echo $fetch->gender;?></h6>
					  <h6 class="sub">Laungauges : <?php echo $fetch->lag;?></h6>
					  <a href="edit?edit_cust_id=<?php echo $fetch->cust_id;?>" class="btn btn-primary">Edit</a>
					  <div class="clearfix"> </div>
				</div>							
			</div>	
		</div>
		<div class="clearfix"></div>
		<!-- //Services -->
	        <!-- //find new cars -->
		@endsection