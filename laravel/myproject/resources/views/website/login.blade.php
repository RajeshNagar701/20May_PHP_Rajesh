@extends('website.layout.structure')

@section('main_content')


		    <!--banner-info-->
			<div class="banner-info">
			  <h1><a href="index.html">Catchy <span class="logo-sub">Carz</span> </a></h1>
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
							<li>Login</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Login</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
			<!-- /find new cars -->
		<!-- Services -->
	<div class="updates-agile">
	     <div class="container">
		      <h3 class="tittle">Login</h3>
				
				 <form action="" method="post" enctype="multipart/form-data">
					
					Email: <input type="email" name="email"  placeholder="Email" class="form-control" required=""/><br>
					Password: <input type="password" name="password"  placeholder="Password" class="form-control" required=""/><br>
					
					<input type="submit" name="submit" value="Login"  class="btn btn-primary" />
				</form>
				</div>
		</div>
		<div class="clearfix"></div>
		<!-- //Services -->
	        <!-- //find new cars -->
	@endsection