@extends('website.layout.structure')

@section('main_content')

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
				
				<form action="" method="post" enctype="multipart/form-data">
					Name: <input type="text" name="name"  placeholder="Name" class="form-control" required=""/><br>
					Email: <input type="email" name="email"  placeholder="Email" class="form-control" required=""/><br>
					Message : <textarea name="message" class="form-control"></textarea><br>
					<input type="submit" name="submit"  class="btn btn-primary" />
				</form>
				
				</div>	
		</div>
		<div class="clearfix"></div>
		<!-- //Services -->
	        <!-- //find new cars -->
		@endsection