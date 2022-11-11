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
<!-- discounts-->
			<div class="modal ab fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog about" role="document">
					<div class="modal-content about">
						<div class="modal-header">
							<button type="button" class="close ab" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
								<div class="discount">
									<h3>Get Offers & Discount of</h3>
									<p>Catchy Carz Brand VL in New York</p>
										<form action="#" method="post">
											<select id="country5" onchange="change_country(this.value)" class="frm-field required">
												<option selected="selected" value="-1">-Buying Time Period-</option>
												<option value="0">Just Researching</option>
												<option value="7">1 Week</option>
												<option value="14">2 Weeks</option>
												<option value="30">1 Month</option>
												<option value="60">2 Months</option>
											</select>
											<input type="text" class="Pin code" placeholder="Pin code" required="">
										</form>
								</div>							
						</div>
						 <div class="modal-body about">
								
								<div class="dis-contact">
								  <h4>Contact Information</h4>
												<form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required="">
													<input type="text" name="email" class="email" placeholder="Email" required="">
													<input type="text" name="phone" class="phone" placeholder="Phone" required="">
													<div class="d-c">	
														<span class="checkbox1">
															<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>I agree to Terms and Conditions.</label>
														</span>													

													</div>
													<input type="submit" value="Find Offers">
													
													</form>
								</div>
						 </div>
					</div>
				</div>
			</div>
			<!-- //discounts-->
				<!-- //sign-up-->
				<div class="modal ab fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog sign" role="document">
					<div class="modal-content about">
						<div class="modal-header one">
							<button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
								<div class="discount one">
									<h3>Sign Up</h3>
									
								</div>							
						</div>
						 <div class="modal-body about">
								<div class="login-top sign-top one">
							 <form action="#" method="post">
									<input type="text" name="name" class="name active" placeholder="Your Name" required="">
									<input type="text" name="email" class="email" placeholder="Email" required="">
									<input type="password" name="password" class="password" placeholder="Password" required="">		
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span> Remember me</label>
									<div class="login-bottom one">
									<ul>
										<li>
											<a href="#">Forgot password?</a>
										</li>
										<li>
										
										  <input type="submit" value="SIGN UP">
										
										</li>
									<div class="clearfix"></div>
								</ul>
								</div>	
								</form>
							</div>
							
							
						 </div>
						 <div class="social-icons">
									<ul> 
										<li><a href="#"><span class="icons"></span><span class="text">Facebook</span></a></li>
										<li class="twt"><a href="#"><span class="icons"></span><span class="text">Twitter</span></a></li>
										<li class="ggp"><a href="#"><span class="icons"></span><span class="text">Google+</span></a></li>
									</ul> 
									</div>
								
					</div>
				</div>
			</div>
			<!-- //sign-up-->
				<!-- /location-->
				<div class="modal ab fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog sign" role="document">
					<div class="modal-content about">
						<div class="modal-header one">
							<button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
								<div class="discount one">
									<h3>Please Tell Us Your City</h3>
									
								</div>							
						</div>
						 <div class="modal-body about">
								<div class="login-top sign-top location">
								 <form action="#" method="post">
				                      <select id="country12" onchange="change_country(this.value)" class="frm-field required">
														<option value="null"> Select City</option>
														<option value="city">Amsterdam</option>
														<option value="city">Bahrain</option>
														<option value="city">Cannes</option>
														<option value="city">Dublin</option>
														<option value="city">Edinburgh</option>
														<option value="city">Florence</option>
														<option value="city">Georgia</option>
														<option value="city">Hungary</option>
														<option value="city">Hong Kong</option>
														<option value="city">Johannesburg</option>
														<option value="city">Kiev</option>
														<option value="city">London</option>
													    <option value="city">Others...</option>
										</select>
								</form>
							     </div>
							
							
						 </div>

								
					</div>
				</div>
			</div>
			<!-- //location-->
			<!-- /get-->
				<div class="modal ab fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog sign" role="document">
					<div class="modal-content about">
						<div class="modal-header one">
							<button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
								<div class="discount one">
									<h3>Make car insurance buying easier</h3>
									
								</div>							
						</div>
						 <div class="modal-body about">
								<div class="login-top sign-top get">
								  <ul class="car-insurance">
								       <li><i class="fa fa-signal" aria-hidden="true"></i><h6> Zero <br> Depreciation</h6></li>
									   <li><i class="fa fa-truck" aria-hidden="true"></i><h6> Road-side <br> assistance</h6></li>
									   <li><i class="fa fa-gavel" aria-hidden="true"></i><h6> Hydro-static <br> cover-lock</h6></li>
								     </ul>
							     <form action="#" method="post">
									 
									<input type="text" name="email" class="email" placeholder="Email" required="">
									<input type="password" name="password" class="password" placeholder="Password" required="">		
									<input type="submit" value="Submit">
								</div>	
								</form>
								
							</div>
						
							
						 </div>
								
					</div>
				</div>
			</div>
			<!-- //get-->
		<!--//banner-section-->
				<!--/breadcrumb-->
		    <div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="index.html">Home</a> <i>|</i></li>
							<li><a href="cars.html">Search Cars </a> <i>|</i></li>
							<li>Used Cars</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Used Cars</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
		<!--/sell-car -->
				<div class="sell-car w3l">
					<div class="container">
					   <div class="top-grid-used-cars">
					      <h4 class="tittle">2016 FORD MUSTANG GT</h4>
								<div class="car-details">
									 <div class="usd-img"><img src="{{url('Frontend/images/4.jpg')}}" alt="Used Cars"></div>
									<div class="car-infos">
										<div class="car-info car-info-1">
											<img src="{{url('Frontend/images/calender.png')}}" alt="Used Cars">
											<p>July 2016</p>
										</div>
										<div class="car-info car-info-2">
											<img src="{{url('Frontend/images/km.png')}}" alt="Used Cars">
											<p>47000 Kms</p>
										</div>
										<div class="car-info car-info-3">
											<img src="{{url('Frontend/images/petrol.png')}}" alt="Used Cars">
											<p>Petrol</p>
										</div>
										<div class="car-info car-info-4">
											<img src="{{url('Frontend/images/gear.png')}}" alt="Used Cars">
											<p>Automatic</p>
										</div>
										<div class="car-info car-info-5">
											<img src="{{url('Frontend/images/place.png')}}" alt="Used Cars">
											<p>Location</p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="car-form">
										<p>Starts from <span>$36000</span></p>
										<div class="location2">
											<h3>Car Location: <span>Dallas</span></h3>
										</div>
										<h4>Get Seller Details</h4>
										<div class="login-top">
											 <form action="#" method="post">
												<input type="text" name="email" class="email" placeholder="Email" required="">
												<input type="password" name="password" class="password" placeholder="Password" required="">	
												<input type="checkbox" id="brand3" value="">
												<label for="brand3"><span></span>Get updates on email</label>
											</form>
											</div>
								
										<a href="#">Ask dealer a question</a>
										<h6>Your contact details are safe with us.</h6>
									</div>
								<div class="clearfix"></div>
							</div>
								<!-- /mid-->
							<div class="middle-grid w3-agile">
									<div class="car-condition">
										<h3>Car Condition</h3>
										<ul class="col-md-6 col-sm-6">
											<li><div class="col-md-6 col-sm-6 part"><p>Engine</p></div><div class="col-md-6 col-sm-6 condition"><p>Excellent</p></div><div class="clearfix"></div></li>
											<li><div class="col-md-6 col-sm-6 part"><p>AC</p></div><div class="col-md-6 col-sm-6 condition"><p>Excellent</p></div><div class="clearfix"></div></li>
											<li><div class="col-md-6 col-sm-6 part"><p>Brakes</p></div><div class="col-md-6 col-sm-6 condition"><p>Excellent</p></div><div class="clearfix"></div></li>
											<li><div class="col-md-6 col-sm-6 part"><p>Electricals</p></div><div class="col-md-6 col-sm-6 condition"><p>Excellent</p></div><div class="clearfix"></div></li>
											<li><div class="col-md-6 col-sm-6 part"><p>Battery</p></div><div class="col-md-6 col-sm-6 condition"><p>Excellent</p></div><div class="clearfix"></div></li>
											<li><div class="col-md-6 col-sm-6 part"><p>Overall</p></div><div class="col-md-6 col-sm-6 condition"><p>Excellent</p></div><div class="clearfix"></div></li>
										</ul>
										<ul class="col-md-6 col-sm-6">
											<li><div class="col-md-6 col-sm-6 part"><p>Exterior</p></div><div class="col-md-6 col-sm-6 condition"><p>Excellent</p></div></li><div class="clearfix"></div>
											<li><div class="col-md-6 col-sm-6 part"><p>Interior</p></div><div class="col-md-6 col-sm-6 condition"><p>Excellent</p></div><div class="clearfix"></div></li>
											<li><div class="col-md-6 col-sm-6 part"><p>Suspensions</p></div><div class="col-md-6 col-sm-6 condition"><p>Excellent</p></div><div class="clearfix"></div></li>
											<li><div class="col-md-6 col-sm-6 part"><p>Tyres</p></div><div class="col-md-6 col-sm-6 condition"><p>Excellent</p></div><div class="clearfix"></div></li>
											<li><div class="col-md-6 col-sm-6 part"><p>Seats</p></div><div class="col-md-6 col-sm-6 condition"><p>Excellent</p></div><div class="clearfix"></div></li>
										</ul>
										<div class="clearfix"></div>
										<p class="certified"><span>Lamborghini Certified<sup>*</sup></span> Want more information? Contact the dealer.</p>
									</div>
								</div>
					<!-- //mid-->
					<!-- /bottom-->
					<div class="owners-comments w3l">
						<h3>Owner's Comments</h3>
						<div>
							<input type="checkbox" class="read-more-state" id="post-2" />
								<ul class="read-more-wrap">
									<li>The replacement for the Gallardo, Lamborghini’s most successful ever car, with over 14,000 sold since 2003. That gives the Huracan a suitably mountainous task, one that Lamborghini has chosen to tackle by playing against type and taking a safe option. The Huracan is no radical reimagining of the modern supercar. There are no hybrid systems here, for instance. In fact what there is, is familiarity. The 5.2-litre V10 is carried over, albeit heavily reworked, and it’s still positioned in the middle of the car and drives all four wheels.</li>
									<li class="read-more-target">It doesn’t take long on the move to confirm that the Huracan has reined in Lambo’s bad-boy schtick. The first thing you notice is how well it rides, how well mannered it is. At a motorway lick the soundtrack is oddly anodyne, sounding busy not ballsy, while the suspension isolates bumps, thumps and staves off surface irregularities ably.</li>
									<li class="read-more-target">The cabin is theatrical, dramatic and laden with both jet-inspired functionality and Audi-donated quality. There’s no central screen, instead all functions are dealt with on the main display behind the steering wheel. There’s no traditional gearlever either, while the Anima button on the wheel allows you to toggle through the various Strada/Sport/Corsa options. The driving position is good, the view out through the narrow window less so, but very emotive.</li>
									<li class="read-more-target">Lambo may be under Audi’s wing, but that’s not to say costs have been brought in line. This is still a mighty costly car to buy and run – over £200,000 with a few options added and fuel economy likely to hover in the late teens at best. Probably the least of your worries if you’re minted enough to buy one new. A lack of Porsche 911-like practicality is also unlikely to be of great concern; there’s not much showboating value to be had in Tesco’s car park. The initial batch of cars will be in great demand though, so early retained values should be high.</li>
								</ul>
							<label for="post-2" class="read-more-trigger"></label>
						</div>
					</div>
				<!-- //bottom-->
				<!-- /bottom-lost-->
				<div class="loan-agile">
		      <h3 class="tittle">LATEST CAR UPDATES</h3>
		<div class="inner_tabs loan">
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs loan" role="tablist">
							<li role="presentation" class=""><a href="#updates" id="updates-tab" role="tab" data-toggle="tab" aria-controls="updates" aria-expanded="false">Over View</a></li>
							<li role="presentation" class=""><a href="#expert" role="tab" id="expert-tab" data-toggle="tab" aria-controls="expert" aria-expanded="false">Features</a></li>
							<li role="presentation" class="active"><a href="#video-text" role="tab" id="video-text-tab" data-toggle="tab" aria-controls="video-text" aria-expanded="true">Specifications</a></li>
							
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade1" id="updates" aria-labelledby="updates-tab">
							 <div class="news-updates">
									<ul class="loan-info-text">
									<li><div class="col-md-6 col-sm-6 part"><p>Price</p></div><div class="col-md-6 col-sm-6 condition"><p>$450000</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>Year</p></div><div class="col-md-6 col-sm-6 condition"><p>April 2015</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>Odometer</p></div><div class="col-md-6 col-sm-6 condition"><p>1729 miles</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>Fuel</p></div><div class="col-md-6 col-sm-6 condition"><p>Petrol</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>Transmission</p></div><div class="col-md-6 col-sm-6 condition"><p>Automatic</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>Car Available at</p></div><div class="col-md-6 col-sm-6 condition"><p>Sant'Agata Bolognese</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>Color</p></div><div class="col-md-6 col-sm-6 condition"><p>Nero Serapis Metallic</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>Fuel Efficiency</p></div><div class="col-md-6 col-sm-6 condition"><p>NA</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>Sold By</p></div><div class="col-md-6 col-sm-6 condition"><p>Owner</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>No. of Owners</p></div><div class="col-md-6 col-sm-6 condition"><p>One</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>Registered at</p></div><div class="col-md-6 col-sm-6 condition"><p>Sant'Agata Bolognese</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>Insurance</p></div><div class="col-md-6 col-sm-6 condition"><p>Two Years (or) 30000 miles</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>Lifetime Tax</p></div><div class="col-md-6 col-sm-6 condition"><p>2020</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>Profile Id</p></div><div class="col-md-6 col-sm-6 condition"><p>CCULH0911</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>Last Updated</p></div><div class="col-md-6 col-sm-6 condition"><p>One Month ago</p></div><div class="clearfix"></div>
									</li>
									<li class="border"><div class="col-md-6 col-sm-6 part"><p>Status</p></div><div class="col-md-6 col-sm-6 condition"><p>Online</p></div><div class="clearfix"></div></li>
									
								</ul>
										
								 </div>
							</div>
							<div role="tabpanel" class="tab-pane fade1" id="expert" aria-labelledby="expert-tab">
								<div class="news-updates">
									<ul class="loan-info-text">
									<li><div class="part"><p>Safety</p></div></li>
									<li><div class="part"><p>Braking & Traction</p></div></li>
									<li><div class="part"><p>Locks & Security</p></div></li>
									<li><div class="part"><p>Seats & Upholstery</p></div></li>
									<li><div class="part"><p>Storage</p></div></li>
									<li><div class="part"><p>Doors, Windows, Mirrors & Wipers</p></div></li>
									<li><div class="part"><p>Entertainment, Information & Communication</p></div></li>
									<li class="border"><div class="part"><p>Comfort & Convenience</p></div></li>
									
								</ul>
										
								 </div>
								
							</div>
							<div role="tabpanel" class="tab-pane fade1 active in" id="video-text" aria-labelledby="video-text-tab">
								
								<div class="news-updates">
											<ul class="loan-info-text">
									<li><div class="col-md-6 col-sm-6 part"><p>Length</p></div><div class="col-md-6 col-sm-6 condition"><p>3500 mm</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>Width</p></div><div class="col-md-6 col-sm-6 condition"><p>1600 mm</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>Height</p></div><div class="col-md-6 col-sm-6 condition"><p>1490 mm</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>Wheelbase</p></div><div class="col-md-6 col-sm-6 condition"><p>2360 mm</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>Doors</p></div><div class="col-md-6 col-sm-6 condition"><p>2 Doors</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>Seating Capacity</p></div><div class="col-md-6 col-sm-6 condition"><p>2 Person</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>Fuel Tank Capacity</p></div><div class="col-md-6 col-sm-6 condition"><p>35 litres</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>Fuel Type</p></div><div class="col-md-6 col-sm-6 condition"><p>Petrol</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>No of gears</p></div><div class="col-md-6 col-sm-6 condition"><p>5 Gears</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>Transmission Type</p></div><div class="col-md-6 col-sm-6 condition"><p>Automatic</p></div><div class="clearfix"></div></li>
									<li><div class="col-md-6 col-sm-6 part"><p>Registered at</p></div><div class="col-md-6 col-sm-6 condition"><p>Sant'Agata Bolognese</p></div><div class="clearfix"></div></li>
							
									<li class="border"><div class="col-md-6 col-sm-6 part"><p>Status</p></div><div class="col-md-6 col-sm-6 condition"><p>Online</p></div><div class="clearfix"></div></li>
									
								</ul>
										
								 </div>
								
							</div>
						</div>
					</div>
				</div>
            </div>
			<!-- //bottom-lost-->
				
		</div>
	</div>
		<!-- //sell-car -->
@endsection