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
							<img src="{{url('Frontend/upload/customer/'.$fetch->file)}}" alt="Used Car" height="250px" width="100%"/>
						  </figure>	
					  </div>
					  <div class="clearfix"> </div>
					   <h1></h1>
				</div>
			<div class="col-md-5 new-car-used">
					  <h3 class="tittle top">ID : {{$fetch->id}}</h3>
					  <h3 class="tittle top">Name : {{$fetch->name}}</h3>
					  <h6 class="sub">Email : {{ $fetch->unm}} </h6>
					  <h6 class="sub">Gender : {{$fetch->gen}}</h6>
					  <h6 class="sub">Laungauges : {{$fetch->lag}}</h6>
					  <a href="{{url('myprofile/'.$fetch->id)}}" class="btn btn-primary">Edit</a>
					  <div class="clearfix"> </div>
				</div>							
			</div>	
		</div>
		<div class="clearfix"></div>
		<!-- //Services -->
	        <!-- //find new cars -->
		@endsection