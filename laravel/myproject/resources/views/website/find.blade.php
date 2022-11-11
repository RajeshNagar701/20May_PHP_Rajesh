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
		<!-- /search-car-->
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
			<!-- //search-car-->
		<!--//banner-section-->
				<!--/breadcrumb-->
		    <div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left w3">
						<ul>
							<li><a href="index.html">Home</a> <i>|</i></li>
							<li>Find New Cars</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Find New Cars</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
			<!-- /find new cars -->
		<!-- Services -->
	<div class="updates-agile">
	     <div class="container">
		      <h3 class="tittle">FIND NEW CARS</h3>
		<div class="inner_tabs">
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class=""><a href="#updates1" id="updates-tab1" role="tab" data-toggle="tab" aria-controls="updates" aria-expanded="false">Brand</a></li>
							<li role="presentation" class=""><a href="#expert1" role="tab" id="expert-tab1" data-toggle="tab" aria-controls="expert" aria-expanded="true">Budget</a></li>
							<li role="presentation" class="active"><a href="#video-text1" role="tab" id="video-text-tab1" data-toggle="tab" aria-controls="video-text" aria-expanded="false">Body Type</a></li>
							
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade" id="updates1" aria-labelledby="updates-tab1">
							<div class="news-updates car">
											
										<ul class="cars-list">
										 <li>
											<a class="img-car" href="upcoming.html">
											  <img src="{{url('Frontend/images/cl1.png')}}" alt=" " class="img-responsive">
											   <h5>Audi</h5>
											</a>
										
										</li>
										
										 <li>
											<a class="img-car" href="upcoming.html">
											  <img src="{{url('Frontend/images/cl7.png')}}" alt=" " class="img-responsive">
											   <h5>Suzuki</h5>
											</a>
										</li>
										<li>
											<a class="img-car" href="upcoming.html">
											  <img src="{{url('Frontend/images/cl3.png')}}" alt=" " class="img-responsive">
											   <h5>Ford</h5>
											</a>
										</li>
									 <li>
										   <a class="img-car" href="upcoming.html">
											  <img src="{{url('Frontend/images/cl6.png')}}" alt=" " class="img-responsive">
											   <h5>Volkswagen</h5>
											</a>
										</li>
										<li>
											<a class="img-car" href="upcoming.html">
											  <img src="{{url('Frontend/images/cl5.png')}}" alt=" " class="img-responsive">
											   <h5>Honda</h5>
											</a>
										</li>
										
									</ul>
									<ul class="cars-list">
										 <li>
											<a class="img-car" href="upcoming.html">
											  <img src="{{url('Frontend/images/cl2.png')}}" alt=" " class="img-responsive">
											   <h5>Toyota</h5>
											</a>
										
										</li>
										
										 <li>
											<a class="img-car" href="upcoming.html">
											  <img src="{{url('Frontend/images/cl4.png')}}" alt=" " class="img-responsive">
											   <h5>Mahindra</h5>
											</a>
										</li>
										<li>
											<a class="img-car" href="upcoming.html">
											  <img src="{{url('Frontend/images/cl8.png')}}" alt=" " class="img-responsive">
											   <h5>Tata</h5>
											</a>
										</li>
									 <li>
										   <a class="img-car" href="upcoming.html">
											  <img src="{{url('Frontend/images/cl9.png')}}" alt=" " class="img-responsive">
											   <h5>Hyundai</h5>
											</a>
										</li>
										<li>
											<a class="img-car" href="upcoming.html">
											  <img src="{{url('Frontend/images/cl10.png')}}" alt=" " class="img-responsive">
											   <h5>Renault</h5>
											</a>
										</li>
										
									</ul>
										
								 </div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="expert1" aria-labelledby="expert-tab1">
								<div class="news-updates">
											<ul class="text-center">
                        <li>
                             <a href="cars.html">
                                <span class="budget-title-box">
                                    Upto
                                </span>
                                <span class="budget-amount-box">
                                    
                                    <span class="amount-text">$ 4</span>
                                    <span class="budget-amount-text-box">000</span>
                                </span>
                            </a>
                        </li>
                        <li>
                             <a href="cars.html">
                                <span class="budget-title-box">
                                    Between
                                </span>
                                <span class="budget-amount-box">
                                   
                                    <span class="amount-text">$ 4-12</span>
                                    <span class="budget-amount-text-box">000</span>
                                </span>
                            </a>
                        </li>
                        <li>
                             <a href="cars.html">
                                <span class="budget-title-box">
                                    Between
                                </span>
                                <span class="budget-amount-box">
                                   
                                    <span class="amount-text">$ 12-25</span>
                                    <span class="budget-amount-text-box font16">000</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="cars.html">
                                <span class="budget-title-box">
                                    Between
                                </span>
                                <span class="budget-amount-box">
                                   
                                    <span class="amount-text">$ 25-40</span>
                                    <span class="budget-amount-text-box font16">000</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="cars.html">
                                <span class="budget-title-box">
                                    Above
                                </span>
                                <span class="budget-amount-box">
                                    <span class="amount-text">$ 40</span>
                                    <span class="budget-amount-text-box font16">000</span>
                                </span>
                            </a>
                        </li>
                    </ul>
										
								 </div>
							</div>
							<div role="tabpanel" class="tab-pane fade active in" id="video-text1" aria-labelledby="video-text-tab1">
								
								<div class="news-updates car">
											
										<ul class="cars-list">
										 <li>
											<a class="img-car" href="cars.html">
											  <img src="{{url('Frontend/images/b1.png')}}" alt=" " class="img-responsive">
											   <h5>Coupe</h5>
											</a>
										
										</li>
										
										 <li>
											<a class="img-car" href="cars.html">
											  <img src="{{url('Frontend/images/b2.png')}}" alt=" " class="img-responsive">
											   <h5>Suv/Muv</h5>
											</a>
										</li>
										<li>
											<a class="img-car" href="cars.html">
											  <img src="{{url('Frontend/images/b3.png')}}" alt=" " class="img-responsive">
											   <h5>Convertible</h5>
											</a>
										</li>
									 <li>
										   <a class="img-car" href="cars.html">
											  <img src="{{url('Frontend/images/b4.png')}}" alt=" " class="img-responsive">
											   <h5>Truck</h5>
											</a>
										</li>
										<li>
											<a class="img-car" href="cars.html">
											  <img src="{{url('Frontend/images/b5.png')}}" alt=" " class="img-responsive">
											   <h5>Minivan/ Van</h5>
											</a>
										</li>
											</ul>
										
								 </div>
								
							</div>
						
						
						</div>
					</div>
				</div>
            </div>
		</div>
		<div class="clearfix"></div>
		<!-- //Services -->
	        <!-- //find new cars -->
		@endsection