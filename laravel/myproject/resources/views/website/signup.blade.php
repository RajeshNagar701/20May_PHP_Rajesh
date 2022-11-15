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
							<li>Signup</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Signup</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
			<!-- /find new cars -->
		<!-- Services -->
	<div class="updates-agile">
	     <div class="container">
		      <h3 class="tittle">Signup</h3>
				
				<form action="{{url('/signup_store')}}" method="post" enctype="multipart/form-data">
					@csrf
					Name: <input type="text" name="name"  placeholder="Name" class="form-control" required=""/><br>
					Email: <input type="email" name="unm"  placeholder="Email" class="form-control" required=""/><br>
					Password: <input type="password" name="pass"  placeholder="Password" class="form-control" required=""/><br>
					
					Gender: <br>
					Male: <input type="radio" name="gen"  value="Male"/>
					Female: <input type="radio" name="gen" value="Female" /><br><br>
					
					Launguages: <br>
					Hindi: <input type="checkbox" name="lag[]"  value="Hindi"/>
					Gujarati: <input type="checkbox" name="lag[]"  value="Gujarati"/>
					English: <input type="checkbox" name="lag[]"  value="English"/>
					<br>	
					<br>
					Upload Profile: <input type="file" name="file"  placeholder="file" class="form-control" required=""/><br>
					<br>
					<select name="cid" class="form-control" >
						<option value="">Select Countries</option>
						@foreach($data as $d)
							<option value="{{$d->id}}">{{$d->cnm}}</option>	
						@endforeach
					</select>
					<br>
					
					
					<input type="submit" name="submit"  class="btn btn-primary" />
				</form>
				
				</div>	
		</div>
		<div class="clearfix"></div>
		<!-- //Services -->
	        <!-- //find new cars -->
		@endsection