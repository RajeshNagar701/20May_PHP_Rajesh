<?php
include_once('subheader.php');
?>



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
				<!-- /location-->
				<div class="modal ab fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog sign" role="document">
					<div class="modal-content about">
						<div class="modal-header one">
							<button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
								<div class="discount one">
									<h3>To Find more cars...</h3>
									
								</div>							
						</div>
						 <div class="modal-body about">
								<div class="login-top cars sign-top one">
		                            <h4>FORD MUSTANG</h4>
								   <h5>$36000</h5>
								  
			                        <img src="images/4.jpg" alt="Catchy Carz">
									<div class="car-form-pop">
										<p>Starts from <span>$36000</span></p>
										<div class="location">
											<h3>Car Location: <span>Dallas</span></h3>
										</div>
										<form action="#" method="post">
									
									<input type="text" class="email" placeholder="Email" required="">
									<input type="password" class="password" placeholder="Password" required="">		
									<input type="checkbox" id="brand2" value="">
									<label for="brand2"><span></span>Get updates on email</label>
										<div class="send-button">
											<input type="submit" value="GET SELLER DETAILS">
										</div>
									</form>
								
										<a href="#">Ask dealer a question</a>
										<h6>Your contact details are safe with us.</h6>
									</div>
							    </div>
							
							
						 </div>

								
					</div>
				</div>
			</div>
			<!-- //location-->
			<!-- //search-car-->
		<!--//banner-section-->
				<!--/breadcrumb-->
		    <div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="index.html">Home</a> <i>|</i></li>
							<li>Search Cars</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Search Cars</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
		   <!--/search-car -->
		<div class="search-car w3l">
			<div class="container">
			    <!--/search-car-inner -->
					<div class="search-car-inner w3l">
					<!--/search-car-left-nav -->
						<div class="col-md-3 search-car-left-sidebar">
						   <section class="sky-form">
							   <h4>Price range</h4>
							 <div class="range">
					
								<ul class="dropdown-menu6">
									<li>
									                
										<div id="slider-range"></div>							
											<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
									</li>			
									</ul>
		
							
								</div>
								 </section>
									<div class="w_nav1">
										<h4>Select City</h4>
											<select id="country12" onchange="change_country(this.value)" class="frm-field required">
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
										</select>
									</div>
										<div class="w_nav1 two">
										<h4>Select Budget</h4>
											<select id="country19" onchange="change_country(this.value)" class="frm-field required">
											<option value="null"> Budget</option>
											<option value="null">0</option>     
											<option value="AX">50,000</option>
											<option value="AX">10,00,000</option>
											<option value="AX">13,00,000</option>
											<option value="AX">20,00,000</option>
											<option value="AX">30,00,000</option>
											<option value="AX">40,00,000</option>
											<option value="AX">50,00,000</option>
										</select>
									</div>
									
									<h3>filter by</h3>
									<section class="sky-form">
												<h4>Car Details</h4>
													<div class="scrollbar" id="style-2">
														
												      <div class="form-inner">
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Audi</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>AMG</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>BMW</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Caddilac</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Caparo</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Dacia</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Daewoo</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Datsun</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Eagle</label>	
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Ford</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Force</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>GTA Motors</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Geely</label>	
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Healey</label>	
														</div>
												    </div>

									 </section>
									<section class="sky-form">
												<h4>brand</h4>
													
													<div class="scrollbar" id="style-2">
														
												        <div class="form-inner">
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Audi</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>AMG</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>BMW</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Caddilac</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Caparo</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Dacia</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Daewoo</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Datsun</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Eagle</label>	
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Ford</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Force</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>GTA Motors</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Geely</label>	
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Healey</label>	
														</div>
													</div>
										
													
									</section>
									<section class="sky-form">
										<h4>colour</h4>
										<ul class="w_nav2">
											<li><a class="color1" href="#"></a></li>
											<li><a class="color2" href="#"></a></li>
											<li><a class="color3" href="#"></a></li>
											<li><a class="color4" href="#"></a></li>
											<li><a class="color5" href="#"></a></li>
											<li><a class="color6" href="#"></a></li>
											<li><a class="color10" href="#"></a></li>
											<li><a class="color12" href="#"></a></li>
											<li><a class="color13" href="#"></a></li>
											<li><a class="color14" href="#"></a></li>
											<li><a class="color15" href="#"></a></li>
											<li><a class="color5" href="#"></a></li>
											<li><a class="color9" href="#"></a></li>
										</ul>
									</section>
									<section class="sky-form">
										<h4>Seller type</h4>
										 <div class="form-inner">
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Individual</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Dealer</label>
																
														</div>
									</section>
									<section class="sky-form">
										<h4>Transmission</h4>
										 <div class="form-inner">
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Manual</label>
															<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Automatic</label>
																
														</div>
									</section>
									<section class="sky-form">
											<h4>Fuel Type</h4>
											   <div class="scrollbar" id="style-2">
														
												 <div class="form-inner">
													<label class="radio"><input type="radio" name="radio"><i></i>Petrol</label>
													<label class="radio"><input type="radio" name="radio"><i></i>Diesel</label>
													<label class="radio"><input type="radio" name="radio"><i></i>CNG</label>
													<label class="radio"><input type="radio" name="radio"><i></i>LPG</label>
													<label class="radio"><input type="radio" name="radio"><i></i>Eletric</label>
												<label class="radio"><input type="radio" name="radio"><i></i>Petrol</label>
												</div>
											</div>		
							   </section>
							
								<!---->	
						</div>
						<!--//search-car-left-nav -->
						<!--/search-car-right-text -->
						<div class="col-md-9 search-car-right-text w3">
							<div class="well well-sm">
								<strong>Display</strong>
								<div class="btn-group">
									<a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
									</span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm two"><span
										class="glyphicon glyphicon-th"></span>Grid</a>
								</div>
							</div>
							<div id="products" class="row list-group">
								<div class="item  col-xs-4 col-lg-4">
									<div class="thumbnail">
										 <a href="#" data-toggle="modal" data-target="#myModal6"><img class="group list-group-image" src="images/f2.jpg" alt="Catchy Carz"></a>
		                                       <div class="table-text">
                                                                <h4 ><a href="used_cars.html" title="Maruti Suzuki 800 AC" class="click-search"><span class="spancarname">Audi A4 2.0 TDI</span></a></h4>
                                                                <p class="gridViewPrice hide">
                                                                    <a href="used_cars.html">
                                                                        <span class="rupee-lac">$30,000</span> 
                                                                    </a>
                                                                </p>
                                                                <div class="other-details">
                                                                    <a href="used_cars.html">
                                                                      <span class="rupee-lac slprice"> $ 30,000</span> 
                                                                    </a>  
																<div class="clearfix"></div>																	
                                                                    <a href="used_cars.html">
                                                                        <p class="listing-item-kms"><span class="slkms">35,000&nbsp;km</span><span class="margin-left5 margin-right5">|</span><span class="fuel">Petrol</span><span class="margin-left5 margin-right5">|</span><span>2016</span></p>
                                                                        <p class="listing-item-area"><span class="cityname">G.O.P London</span></p>
                                                                        <p class="text-light-grey deliverytext"></p>
                                                                    </a>
                                                                </div>
         
                                                               <div class="clearfix"></div>
                                                                <div class="list-form">
                                                                    <div class="phone-info">
																	   <form action="used_cars.html" method="post">
																	     <input type="text" class="phone" placeholder="Phone" required="">
																	   </form>
																	</div>
																	<div class="get-one"><a href="used_cars.html">GET SELLER DETAILS<a></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                               
                                                            </div>
										
									</div>
								</div>
								<div class="item  col-xs-4 col-lg-4">
									<div class="thumbnail">
										 <a href="#" data-toggle="modal" data-target="#myModal6"><img class="group list-group-image" src="images/f3.jpg" alt="Catchy Carz"></a>
		                                       <div class="table-text">
                                                                <h4 ><a href="used_cars.html" title="Maruti Suzuki 800 AC" class="click-search"><span class="spancarname">Ford Mustang GT 500</span></a></h4>
                                                                <p class="gridViewPrice hide">
                                                                    <a href="used_cars.html">
                                                                        <span class="rupee-lac">$34,000</span> 
                                                                    </a>
                                                                </p>
                                                                <div class="other-details">
                                                                    <a href="used_cars.html">
                                                                      <span class="rupee-lac slprice"> $ 34,000</span> 
                                                                    </a>  
																<div class="clearfix"></div>																	
                                                                    <a href="used_cars.html">
                                                                        <p class="listing-item-kms"><span class="slkms">35,000&nbsp;km</span><span class="margin-left5 margin-right5">|</span><span class="fuel">Petrol</span><span class="margin-left5 margin-right5">|</span><span>2016</span></p>
                                                                        <p class="listing-item-area"><span class="cityname">G.O.P Parries</span></p>
                                                                        <p class="text-light-grey deliverytext"></p>
                                                                    </a>
                                                                </div>
         
                                                               <div class="clearfix"></div>
                                                                <div class="list-form">
                                                                    <div class="phone-info">
																	   <form action="used_cars.html" method="post">
																	     <input type="text" class="phone" placeholder="Phone" required="">
																	   </form>
																	</div>
																	<div class="get-one"><a href="used_cars.html">GET SELLER DETAILS<a></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                               
                                                            </div>
										
									</div>
								</div>
								<div class="item  col-xs-4 col-lg-4">
									<div class="thumbnail">
										 <a href="#" data-toggle="modal" data-target="#myModal6"><img class="group list-group-image" src="images/f1.jpg" alt="Catchy Carz"></a>
		                                       <div class="table-text">
                                                                <h4 ><a href="used_cars.html" title="Maruti Suzuki 800 AC" class="click-search"><span class="spancarname">Mercedes-Benz C250 CDI</span></a></h4>
                                                                <p class="gridViewPrice hide">
                                                                    <a href="used_cars.html">
                                                                        <span class="rupee-lac">$ 36,000</span> 
                                                                    </a>
                                                                </p>
                                                                <div class="other-details">
                                                                     <a href="used_cars.html">
                                                                      <span class="rupee-lac slprice"> $ 36,000</span> 
                                                                    </a>  
																<div class="clearfix"></div>																	
                                                                    <a href="used_cars.html">
                                                                        <p class="listing-item-kms"><span class="slkms">35,000&nbsp;km</span><span class="margin-left5 margin-right5">|</span><span class="fuel">Petrol</span><span class="margin-left5 margin-right5">|</span><span>2016</span></p>
                                                                        <p class="listing-item-area"><span class="cityname">G.O.P New York</span></p>
                                                                        <p class="text-light-grey deliverytext"></p>
                                                                    </a>
                                                                </div>
         
                                                               <div class="clearfix"></div>
                                                                <div class="list-form">
                                                                    <div class="phone-info">
																	   <form action="used_cars.html" method="post">
																	     <input type="text" class="phone" placeholder="Phone" required="">
																	   </form>
																	</div>
																	<div class="get-one"><a href="used_cars.html">GET SELLER DETAILS<a></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                               
                                                            </div>
										
														</div>
								</div>
								<div class="item  col-xs-4 col-lg-4">
									<div class="thumbnail">
										 <a href="#" data-toggle="modal" data-target="#myModal6"><img class="group list-group-image" src="images/f4.jpg" alt="Catchy Carz"></a>
		                                       <div class="table-text">
                                                                <h4 ><a href="used_cars.html" title="Maruti Suzuki 800 AC" class="click-search"><span class="spancarname">Ford Mustang GT 350</span></a></h4>
                                                                <p class="gridViewPrice hide">
                                                                    <a href="used_cars.html">
                                                                        <span class="rupee-lac">$ 35,000</span> 
                                                                    </a>
                                                                </p>
                                                                <div class="other-details">
                                                                    <a href="used_cars.html">
                                                                      <span class="rupee-lac slprice"> $ 35,000</span> 
                                                                    </a>  
																<div class="clearfix"></div>																	
                                                                    <a href="used_cars.html">
                                                                        <p class="listing-item-kms"><span class="slkms">35,000&nbsp;km</span><span class="margin-left5 margin-right5">|</span><span class="fuel">Petrol</span><span class="margin-left5 margin-right5">|</span><span>2016</span></p>
                                                                        <p class="listing-item-area"><span class="cityname">G.O.P Netherlands</span></p>
                                                                        <p class="text-light-grey deliverytext"></p>
                                                                    </a>
                                                                </div>
         
                                                               <div class="clearfix"></div>
                                                                <div class="list-form">
                                                                    <div class="phone-info">
																	   <form action="used_cars.html" method="post">
																	     <input type="text" class="phone" placeholder="Phone" required="">
																	   </form>
																	</div>
																	<div class="get-one"><a href="used_cars.html">GET SELLER DETAILS<a></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                               
                                                            </div>
										
														</div>
								</div>
								<div class="item  col-xs-4 col-lg-4">
									<div class="thumbnail">
										 <a href="#" data-toggle="modal" data-target="#myModal6"><img class="group list-group-image" src="images/f5.jpeg" alt="Catchy Carz"></a>
		                                       <div class="table-text">
                                                                <h4 ><a href="used_cars.html" title="Maruti Suzuki 800 AC" class="click-search"><span class="spancarname">Ferrari F430</span></a></h4>
                                                                <p class="gridViewPrice hide">
                                                                    <a href="used_cars.html">
                                                                        <span class="rupee-lac">$37,000</span> 
                                                                    </a>
                                                                </p>
                                                                <div class="other-details">
                                                                    <a href="used_cars.html">
                                                                      <span class="rupee-lac slprice"> $ 30,000</span> 
                                                                    </a>  
																<div class="clearfix"></div>																	
                                                                    <a href="used_cars.html">
                                                                        <p class="listing-item-kms"><span class="slkms">35,000&nbsp;km</span><span class="margin-left5 margin-right5">|</span><span class="fuel">Petrol</span><span class="margin-left5 margin-right5">|</span><span>2016</span></p>
                                                                        <p class="listing-item-area"><span class="cityname">G.O.P France</span></p>
                                                                        <p class="text-light-grey deliverytext"></p>
                                                                    </a>
                                                                </div>
         
                                                               <div class="clearfix"></div>
                                                                <div class="list-form">
                                                                    <div class="phone-info">
																	   <form action="used_cars.html" method="post">
																	     <input type="text" class="phone" placeholder="Phone" required="">
																	   </form>
																	</div>
																	<div class="get-one"><a href="used_cars.html">GET SELLER DETAILS<a></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                               
                                                            </div>
										
														</div>
								</div>
								<div class="item  col-xs-4 col-lg-4">
									<div class="thumbnail">
										 <a href="#" data-toggle="modal" data-target="#myModal6"><img class="group list-group-image" src="images/f8.jpg" alt="Catchy Carz"></a>
		                                       <div class="table-text">
                                                                <h4 ><a href="used_cars.html" title="Maruti Suzuki 800 AC" class="click-search"><span class="spancarname">BMW X4 M Sport</span></a></h4>
                                                                <p class="gridViewPrice hide">
                                                                    <a href="used_cars.html">
                                                                        <span class="rupee-lac">$ 38,000</span> 
                                                                    </a>
                                                                </p>
                                                                <div class="other-details">
                                                                    <a href="used_cars.html">
                                                                      <span class="rupee-lac slprice"> $ 38,000</span> 
                                                                    </a>  
																<div class="clearfix"></div>																	
                                                                    <a href="used_cars.html">
                                                                        <p class="listing-item-kms"><span class="slkms">35,000&nbsp;km</span><span class="margin-left5 margin-right5">|</span><span class="fuel">Petrol</span><span class="margin-left5 margin-right5">|</span><span>2016</span></p>
                                                                        <p class="listing-item-area"><span class="cityname">G.O.P Switzerland</span></p>
                                                                        <p class="text-light-grey deliverytext"></p>
                                                                    </a>
                                                                </div>
         
                                                               <div class="clearfix"></div>
                                                                <div class="list-form">
                                                                    <div class="phone-info">
																	   <form action="used_cars.html" method="post">
																	     <input type="text" class="phone" placeholder="Phone" required="">
																	   </form>
																	</div>
																	<div class="get-one"><a href="used_cars.html">GET SELLER DETAILS<a></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                               
                                                            </div>
									 	
									                  </div>
								</div>
							</div>
						 </div>
				            
						<!--//search-car-right-text -->
						<div class="clearfix"></div>
					</div>
				 <!--//search-car-inner -->
			</div>
		</div>
		 <!--//search-car -->
<?php
include_once('footer.php');
?>	
<!---->
		<script type="text/javascript" src="js/jquery-ui.js"></script>
		<script type='text/javascript'>//<![CDATA[ 
		$(window).load(function(){
		 $( "#slider-range" ).slider({
					range: true,
					min: 0,
					max: 200000,
					values: [ 5000, 100000 ],
					slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
					}
		 });
		$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

		});//]]>  
		</script>
<script>
$(document).ready(function() {
$('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
$('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
</script>


</body>
</html>