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
							<li>Edit Profile</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Edit Profile</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
			<!-- /find new cars -->
		<!-- Services -->
	<div class="updates-agile">
	     <div class="container">
		      <h3 class="tittle">Edit Profile</h3>
				
				<form action="{{url('myprofileupdate/'.$fetch->id)}}" method="post" enctype="multipart/form-data">
					@csrf
					Name: <input type="text" name="name" value="<?php echo $fetch->name?>"  placeholder="Name" class="form-control"/>
					@error('name')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					<br>
					Email: <input type="email" name="unm" value="<?php echo $fetch->unm?>"  placeholder="Email" class="form-control" readonly />
					@error('unm')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					<br>
					
					Gender: <br>
					<?php 
					$gender=$fetch->gen;
					if($gender=="Male")
					{
					?>
					Male: <input type="radio" name="gen"  value="Male" checked/>
					Female: <input type="radio" name="gen" value="Female" /><br><br>
					<?php
					}
					else
					{
					?>
					Male: <input type="radio" name="gen"  value="Male" />
					Female: <input type="radio" name="gen" value="Female" checked /><br><br>
					<?php
					}
					?>
					Launguages: <br>
					
					Hindi: <input type="checkbox" name="lag[]"  value="Hindi" <?php
					$lag=$fetch->lag;
					$lag_arr=explode(",",$lag);
					if(in_array("Hindi",$lag_arr))
					{
						echo "checked";
					}		
					?>/>
					Gujarati: <input type="checkbox" name="lag[]"  value="Gujarati" <?php
					$lag=$fetch->lag;
					$lag_arr=explode(",",$lag);
					if(in_array("Gujarati",$lag_arr))
					{
						echo "checked";
					}		
					?>/>
					English: <input type="checkbox" name="lag[]"  value="English" <?php
					$lag=$fetch->lag;
					$lag_arr=explode(",",$lag);
					if(in_array("English",$lag_arr))
					{
						echo "checked";
					}		
					?>/>
					<br>	
					<br>
					Upload Profile: <input type="file" name="file"  placeholder="file" class="form-control"/><br>
					<img src="{{url('Frontend/upload/customer/'.$fetch->file)}}" alt="Used Car" width="50px"/>
					@error('file')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					<br><br>

					<select name="cid" class="form-control" >
						<option value="">Select Countries</option>
						@foreach($data as $d)
							@if($d->id==$fetch->cid)
								<option value="{{$d->id}}" selected>{{$d->cnm}}</option>
							@else
							<option value="{{$d->id}}">{{$d->cnm}}</option>		
							@endif		
						@endforeach
					</select>
					@error('cid')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					<br>
					<input type="submit" name="submit" value="Save"  class="btn btn-primary" />
				</form>
				
				</div>	
		</div>
		<div class="clearfix"></div>
		<!-- //Services -->
	        <!-- //find new cars -->
			@endsection