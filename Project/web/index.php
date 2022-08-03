<?php
include_once('header.php');
?>
					
		    <!--banner-info-->
			<div class="banner-info">
			  <h1><a href="index.html">Catchy <span class="logo-sub">Carz</span> </a></h1>
			    <h2><span>COME LOOK </span> <span>AT THE SELECTION! </span></h2>
				<p>Eye it – try it – buy it!</p>
			       <form action="#" method="post">
					<div class="search-two">
					<select id="country" onchange="change_country(this.value)" class="frm-field required">
						<option value="null"><img src="images/rupee.png" alt=" " class="img-responsive" />Brands</option>

							<option value="abt">ABT</option>
							<option value="ac">AC</option>
							<option value="amc">AMC</option>
							<option value="amg">AMG</option>
							<option value="abarth">Abarth</option>
							<option value="acura">Acura</option>
							<option value="alfa romeo">Alfa Romeo</option>
							<option value="arial">Ariel</option>
							<option value="armstrong siddeley">Armstrong Siddeley</option>
							<option value="ascari">Ascari</option>
							<option value="aston martin">Aston Martin</option>
							<option value="audi">Audi</option>
							<option value="austin">Austin</option>
							<option value="bac">BAC</option>
							<option value="bmw">BMW</option>
							<option value="byd">BYD</option>
							<option value="bentley">Bentley</option>
							<option value="bertone">Bertone</option>
							<option value="brilliance">Brilliance</option>
							<option value="bristol">Bristol</option>
							<option value="bufori">Bufori</option>
							<option value="bugatti">Bugatti</option>
							<option value="buick">Buick</option>
							<option value="caddilac">Caddilac</option>
							<option value="caparo">Caparo</option>
							<option value="carbon motors">Carbon Motors</option>
							<option value="caterham">Caterham</option>
							<option value="cheri">Cheri</option>
							<option value="chevrolet">Chevrolet</option>
							<option value="chrysler">Chrysler</option>
							<option value="citroen">Citroën</option>
							<option value="continental">Continental</option>
							<option value="dacia">Dacia</option>
							<option value="daewoo">Daewoo</option>
							<option value="daihatsu">Daihatsu</option>
							<option value="daimler">Daimler</option>
							<option value="datsun">Datsun</option>
							<option value="de lorean">De Lorean</option>
							<option value="de tomaso">De Tomaso</option>
							<option value="dodge">Dodge</option>
							<option value="eagle">Eagle</option>
							<option value="ferrari">Ferrari</option>
							<option value="fiat">Fiat</option>
							<option value="">Fisker</option>
							<option value="force">Force</option>
							<option value="ford">Ford</option>
							<option value="gmc">GMC</option>
							<option value="">GTA Motors</option>
							<option value="geely">Geely</option>
							<option value="general motors">General Motors</option>
							<option value="ghia">Ghia</option>
							<option value="ginetta">Ginetta</option>
							<option value="gumpert">Gumpert</option>
							<option value="hsv">HSV</option>
							<option value="healey">Healey</option>
							<option value="hennessey motors">Hennessey Motors</option>
							<option value="holden">Holden</option>
							<option value="honda">Honda</option>
							<option value="hummer">Hummer</option>
							<option value="hyundai">Hyundai</option>
							<option value="infinity">Infinty</option>
							<option value="isuzu">Isuzu</option>
							<option value="italdesign">Italdesign</option>
							<option value="jaguar">Jaguar</option>
							<option value="jeep">Jeep</option>
							<option value="jensen motors">Jensen Motors</option>
							<option value="kia motors">Kia Motors</option>
							<option value="koenig">Koeing</option>
							<option value="koenigsegg">Koenigsegg</option>
							<option value="lada">Lada</option>
							<option value="lamborghini">Lamborghini</option>
							<option value="lancia">Lancia</option>
							<option value="land rover">Land Rover</option>
							<option value="lexus">Lexus</option>
							<option value="lincoln">Lincoln</option>
							<option value="lotus">Lotus</option>
							<option value="marussia">Marussia</option>
							<option value="mclaren">McLaren</option>
							<option value="mgb">MG Motor</option>
							<option value="mini">MINI</option>
							<option value="mahindra">Mahindra</option>
							<option value="maruti suzuki">Maruti Suzuki</option>
							<option value="maserati">Maserati</option>
							<option value="maybach">Maybach</option>
							<option value="mazda">Mazda</option>
							<option value="mercedes-benz">Mercedes-Benz</option>
							<option value="mercury">Mercury</option>
							<option value="mitsubishi">Mitsubishi</option>
							<option value="morgan">Morgan</option>
							<option value="mosler">Mosler</option>
							<option value="nsu">NSU</option>
							<option value="noble">Noble</option>
							<option value="nissan">Nissan</option>
							<option value="oldsmobile">Oldsmobile</option>
							<option value="opel">Opel</option>
							<option value="packard">Packard</option>
							<option value="pagani">Pagani</option>
							<option value="panoz">Panoz</option>
							<option value="peugeot">Peugeot</option>
							<option value="plymouth">Plymouth</option>
							<option value="pontiac">Pontiac</option>
							<option value="porsche">Porsche</option>
							<option value="proton">Proton</option>
							<option value="ram">RAM</option>
							<option value="ruf automobile">RUF Automobile</option>
							<option value="radical">Radical</option>
							<option value="reliant">Reliant</option>
							<option value="renault">Renault</option>
							<option value="rimac">Rimac</option>
							<option value="rinspeed">Rinspeed</option>
							<option value="rolls royce">Rolls Royce</option>
							<option value="rover">Rover</option>
							<option value="srt">SRT</option>
							<option value="ssc">SSC</option>
							<option value="saab">SAAB</option>
							<option value="saleen">Saleen</option>
							<option value="saturn">Saturn</option>
							<option value="scion">Scion</option>
							<option value="seat">SEAT</option>
							<option value="shelby">Shelby</option>
							<option value="skoda">Škoda</option>
							<option value="smart">Smart</option>
							<option value="spyker">Spyker</option>
							<option value="ssangyong">Ssangyong</option>
							<option value="studebaker">Studebaker</option>
							<option value="subaru">Subaru</option>
							<option value="sunbeam">Sunbeam</option>
							<option value="suzuki">Suzuki</option>
							<option value="tata motors">TATA Motors</option>
							<option value="tvr">TVR</option>
							<option value="tesla">Tesla</option>
							<option value="toyota">Toyota</option>
							<option value="triumph">Triumph</option>
							<option value="vauxhall">Vauxhall</option>
							<option value="Vector">Vector</option>
							<option value="venturi">Venturi</option>
							<option value="volkswagen">Volkswagen</option>
							<option value="volvo">Volvo</option>
							<option value="w motors">W Motors</option>
							<option value="webasto">Webasto</option>
							<option value="zagato">Zagato</option>
							<option value="zenos">Zenos</option>
							<option value="zenvo">Zenvo</option>
					</select>
				</div>
				<div class="section_room">
					<select id="country" onchange="change_country(this.value)" class="frm-field required">
						<option value="null"><img src="images/rupee.png" alt=" " class="img-responsive" /> Budget</option>
						<option value="null">0</option>     
						<option value="AX">10,000</option>
						<option value="AX">12,000</option>
						<option value="AX">13,000</option>
						<option value="AX">15,000</option>
						<option value="AX">17,000</option>
						<option value="AX">21,000</option>
						<option value="AX">22,000</option>
					    <option value="AX">25,000</option>
						<option value="AX">32,000</option>
						<option value="AX">34,000</option>
						<option value="AX">36,000</option>
						<option value="AX">38,000</option>
						<option value="AX">40,000</option>
						<option value="AX">42,000</option>
						<option value="AX">44,000</option>
						<option value="AX">36,000</option>
						<option value="AX">50,000</option>
					</select>
				</div>

					<input type="submit" value="Find Car">
					<div class="clearfix"></div>
				</form>
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
											<input type="text" name="pin code" class="Pin code" placeholder="Pin code" required="">
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
									<input type="text" name="email "class="email" placeholder="Email" required="">
									<input type="password" name="password" class="password" placeholder="Password" required="">		
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span> Remember me?</label>
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
<!--//banner-section-->
	<!--/featured_section-->
	<div class="featured_section_w3l">
		<div class="container">
		      <h3 class="tittle">FEATURED CARS</h3>
	               <div class="inner_tabs">
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">UpComing cars</a></li>
							<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Popular</a></li>
							<li role="presentation"><a href="#tree" role="tab" id="tree-tab" data-toggle="tab" aria-controls="tree">Just Launched</a></li>
							
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
							   <div class="section__content clearfix">
							   <!-- /card1 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/f1.jpg" alt="Catchy Carz">
													<div class="car_description">
														 <h4><a href="single.html">Mercedes-Benz C250 CDI</a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25">$ 8000 - $ 12000</span></div>
														 <p>Estimated Price</p>
														 <div class="date">Mar 2017</div>
														 <p>Expected Launch</p>
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4>Be the first to know</h4>
											<div class="login-top sign-top">
												<form>
													<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<input type="text" name="phone" class="phone" placeholder="Phone" required=""/>
													<div class="section_drop">
													<select id="country1" onchange="change_country(this.value)" class="frm-field required">
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
												   </div>	
													<input type="submit" value="Done">
													
													</div>
												</form>
											
													</div>
									  </span>
									</div>
								  </div>
								    <!-- //card1 -->
									<!-- /card2 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/f2.jpg" alt="Catchy Carz">
													<div class="car_description">
														 <h4><a href="single.html">Audi A4 2.0 TDI</a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25">$ 6000 - $ 10000</span></div>
														 <p>Estimated Price</p>
														 <div class="date">Mar 2017</div>
														 <p>Expected Launch</p>
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4>Be the first to know</h4>
											<div class="login-top sign-top">
												<form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<input type="text" name="phone" class="phone" placeholder="Phone" required=""/>
													<div class="section_drop">
													<select id="country1" onchange="change_country(this.value)" class="frm-field required">
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
												   </div>	
													<input type="submit" value="Done">
													
													</div>
												</form>
											
													</div>
									  </span>
									</div>
								  </div>
								    <!-- //card2 -->
									<!-- /card3 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/f3.jpg" alt="Catchy Carz">
													<div class="car_description">
														 <h4><a href="single.html">Foed Mustang GT 500</a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25">$ 9000 - $ 12000</span></div>
														 <p>Estimated Price</p>
														 <div class="date">Mar 2017</div>
														 <p>Expected Launch</p>
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4>Be the first to know</h4>
											<div class="login-top sign-top">
												 <form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<input type="text" name="phone" class="phone" placeholder="Phone" required=""/>
													<div class="section_drop">
													<select id="country1" onchange="change_country(this.value)" class="frm-field required">
														<option value="null"> Select City</option>
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
												   </div>		
													<input type="submit" value="Done">
													
													</div>
												</form>
											
													</div>
									  </span>
									</div>
								  </div>
								    <!-- //card3 -->
								 </div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
								   <div class="section__content clearfix">
							   <!-- /card1 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/f4.jpg" alt="Catchy Carz">
													<div class="car_description">
														 <h4><a href="single.html"> Ford Mustang GT 350</a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25">$ 8000 - $ 11000</span></div>
														 <p>Estimated Price</p>
														 <div class="date">June 2016</div>
														 <p>Expected Launch</p>
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/rupee.png" alt="Catchy Carz"> Check On-Road Price</h4>
											<div class="login-top sign-top">
												 <form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<div class="section_drop">
													<select id="country1" onchange="change_country(this.value)" class="frm-field required">
														<option value="null"> Select City</option>
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
													</div>
													<input type="password" name="password" class="password" placeholder="Password" required=""/>		
													<input type="submit" value="Check Now">
													
													
												</form>
											</div>
											
													</div>
									  </span>
									</div>
								  </div>
								    <!-- //card1 -->
									<!-- /card2 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/f5.jpeg" alt="Catchy Carz">
													<div class="car_description">
														 <h4><a href="#">Ferrari F430</a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25">$ 7000 - $ 13000</span></div>
														 <p>Estimated Price</p>
														 <div class="date">July 2016</div>
														 <p>Expected Launch</p>
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/rupee.png" alt="Catchy Carz">  Check On-Road Price</h4>
											<div class="login-top sign-top">
												 <form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<div class="section_drop">
													<select id="country1" onchange="change_country(this.value)" class="frm-field required">
														<option value="null"> Select City</option>
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
												   </div>
													<input type="password" name="password" class="password" placeholder="Password" required=""/>		
													<input type="submit" value="Check Now">
													
													
												</form>
											</div>
													</div>
									  </span>
									</div>
								  </div>
								    <!-- //card2 -->
									<!-- /card3 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/f6.jpeg" alt="Catchy Carz">
													<div class="car_description">
														 <h4><a href="single.html"> Mercedes-Benz C250 CDI</a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25">$ 5000 - $ 10000</span></div>
														 <p>Estimated Price</p>
														 <div class="date">Aug 2016</div>
														 <p>Expected Launch</p>
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/rupee.png" alt="Catchy Carz">  Check On-Road Price</h4>
											<div class="login-top sign-top">
											   <form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<div class="section_drop">
													<select id="country1" onchange="change_country(this.value)" class="frm-field required">
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
												   </div>
													<input type="password" name="password" class="password" placeholder="Password" required=""/>		
													<input type="submit" value="Check Now">
													
													
												</form>
											</div>
										</div>
									  </span>
									</div>
								  </div>
								    <!-- //card3 -->
								 </div>
								
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tree" aria-labelledby="tree-tab">
								
								<div class="section__content clearfix">
							   <!-- /card1 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/f7.jpg" alt="Catchy Carz">
													<div class="car_description">
														 <h4><a href="single.html">BMW M4</a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25">$ 6000 - $ 11000</span></div>
														 <p>Estimated Price</p>
														 <div class="date">Mar 2017</div>
														 <p>Expected Launch</p>
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/rupee.png" alt="Catchy Carz"> Check On-Road Price</h4>
											<div class="login-top sign-top">
												 <form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<div class="section_drop">
													<select id="country1" onchange="change_country(this.value)" class="frm-field required">
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
													</div>
													<input type="password" name="password" class="password" placeholder="Password" required=""/>		
													<input type="submit" value="Check Now">
													
													
												</form>
											</div>
										</div>
									  </span>
									</div>
								  </div>
								    <!-- //card1 -->
									<!-- /card2 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/f8.jpg" alt="Catchy Carz">
													<div class="car_description">
														 <h4><a href="single.html"> BMW X4 M Sport</a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25">$ 7000 - $ 12000</span></div>
														 <p>Estimated Price</p>
														 <div class="date">Mar 2017</div>
														 <p>Expected Launch</p>
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/rupee.png" alt="Catchy Carz">  Check On-Road Price</h4>
											<div class="login-top sign-top">
												 <form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<div class="section_drop">
													<select id="country1" onchange="change_country(this.value)" class="frm-field required">
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
												   </div>
													<input type="password" name="password" class="password" placeholder="Password" required=""/>		
													<input type="submit" value="Check Now">
													
													
												</form>
											</div>
										</div>
									  </span>
									</div>
								  </div>
								    <!-- //card2 -->
									<!-- /card3 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/f9.jpg" alt="Catchy Carz">
													<div class="car_description">
														 <h4><a href="single.html">BMW M3 </a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25">&nbsp;$ 5000 - $ 10000</span></div>
														 <p>Estimated Price</p>
														 <div class="date">Mar 2017</div>
														 <p>Expected Launch</p>
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/rupee.png" alt="Catchy Carz">  Check On-Road Price</h4>
											<div class="login-top sign-top">
											 <form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<div class="section_drop">
													<select id="country1" onchange="change_country(this.value)" class="frm-field required">
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
												   </div>
													<input type="password" name="password" class="password" placeholder="Password" required=""/>		
													<input type="submit" value="Check Now">
													
													
												</form>
											</div>
										</div>
									  </span>
									</div>
								  </div>
								    <!-- //card3 -->
								 </div>
								
							</div>
						</div>
					</div>
				</div>
					
			</div>
		</div>
	<!--//featured_section-->
	<!--/select-cars-agile-->
	<div class="select-cars-agile">
	   <div class="container">
	         <div class="grid cars-main">
			  <div class="col-md-7 slide-show-w3l">
			     <!--//screen-gallery-->
				 <h3 class="tittle top">NEW CARS</h3>
				 <h6 class="sub">Great Prices. Great Vehicles. Great Service.</h6>
							<div class="car-view-slider">
					          <ul id="flexiselDemo">
							 <li>
								 <a href="upcoming.html"><img src="images/n2.jpg" alt=""/>
								  <div class="caption">
										<h3><a href="upcoming.html">Ford Mustang GT 500</a></h3>
										<span>Catchy Carz</span>
										
									</div>
								 </a>
								
							 </li>
							 <li>
								 <a href="upcoming.html"><img src="images/n1.jpeg" alt=""/>
								 <div class="caption">
										<h3><a href="upcoming.html">Acura TLX</a></h3>
										<span>Catchy Carz</span>
										
									</div>
								 </a>
							 </li>
							 <li>
								 <a href="upcoming.html"><img src="images/n3.jpg" alt=""/>
								  <div class="caption">
										<h3><a href="upcoming.html"> McLaren MP4-12c</a></h3>
										<span>Catchy Carz</span>
										
									</div>
								 </a>
							 </li>
							 <li>
								 <a href="upcoming.html"><img src="images/n4.jpg" alt=""/>
									<div class="caption">
										<h3><a href="upcoming.html">BMW Z4</a></h3>
									<span>Catchy Carz</span>
										
									</div>
								 </a>
							 </li>
							</ul>
						</div>
						<!--//screen-gallery-->

					</div>
					<div class="col-md-5 new-car-used">
					  <h3 class="tittle top">USED CARS</h3>
					  <h6 class="sub">Used Cars at Shocking Prices.</h6>
					  <div class="used-one">
					     <figure class="effect-zoe">
							 <a href="used.html"><img src="images/used_car.jpg" alt="Used Car"></a>
							<figcaption>
								<h4>CATCHY <span>CARZ</span></h4>
								<p class="icon-links">
									<a href="#"><i class="glyphicon glyphicon-heart-empty"></i></a>
									<a href="#"><i class="glyphicon glyphicon-eye-open"></i></a>
									<a href="#"><i class="glyphicon glyphicon-paperclip"></i></a>
								</p>
							<p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</figcaption>			
						</figure>
					  </div>
					  <div class="clearfix"> </div>
					   <div class="used-one second">
					     <figure class="effect-zoe">
							<a href="used.html"><img src="images/used_car1.jpg" alt="Used Car"></a>
							<figcaption>
								<h4>CATCHY <span>CARZ</span></h4>
								<p class="icon-links">
									<a href="#"><i class="glyphicon glyphicon-heart-empty"></i></a>
									<a href="#"><i class="glyphicon glyphicon-eye-open"></i></a>
									<a href="#"><i class="glyphicon glyphicon-paperclip"></i></a>
								</p>
							<p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</figcaption>			
						</figure>
					  </div>
					</div>
					<div class="clearfix"> </div>
				</div>
	   </div>
	</div>
	<!-- /bottom-banner -->
	<div class="banner-bottom">
	   <div class="container">
          <div class="bottom-form">
			<div class="inner-text">
				
			 <form action="#" method="post">
				<h3>Choose Your Best Car</h3>
					<div class="best-hot">
						<h5>Name</h5>
						<input type="text" class="name active" placeholder="Name" required="">
					</div>
					<div class="best-hot">
						<h5>Email</h5>
						<input type="text" class="email" placeholder="Email" required="">
					</div>
					<div class="section_drop2">
					<h5>City</h5>
						<select id="country6" onchange="change_country(this.value)" class="frm-field required">
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
												   </div>
					<input type="submit" value="Book Now">
				</form>
			</div>
		</div>
	</div>
</div>
	<!-- //bottom-banner -->
	<!-- /slider1 -->
			<div class="slider1">
		<div class="arrival-grids">			 
			 <ul id="flexiselDemo1">
				 <li>
					 <a href="single.html"><img src="images/f1.jpg" alt=""/>
					  <div class="caption">
							<h3><a href="single.html">Mercedes-Benz C250 CDI</a></h3>
							<span>Catchy Carz</span>
							
						</div>
					 </a>
					
				 </li>
				 <li>
					 <a href="single.html"><img src="images/f2.jpg" alt=""/>
					 <div class="caption">
							<h3><a href="single.html">Audi A4 2.0 TDI</a></h3>
							<span>Catchy Carz</span>
							
						</div>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/f3.jpg" alt=""/>
					  <div class="caption">
							<h3><a href="single.html">Ford Mustang GT 500</a></h3>
							<span>Catchy Carz</span>
							
						</div>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/f4.jpg" alt=""/>
					    <div class="caption">
							<h3><a href="single.html">Ford Mustang GT 350</a></h3>
						<span>Catchy Carz</span>
							
						</div>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/f7.jpg" alt=""/>
					    <div class="caption">
							<h3><a href="single.html">BMW M4</a></h3>
							<span>Catchy Carz</span>
							
						</div>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/f5.jpeg" alt=""/>
					 <div class="caption">
							<h3><a href="single.html">Ferrari F430</a></h3>
							<span>Catchy Carz</span>
							
						</div>
					 </a>
				 </li>
				  <li>
					 <a href="single.html"><img src="images/f8.jpg" alt=""/>
					    <div class="caption">
							<h3><a href="single.html">BMW X4 M Sport</a></h3>
							<span>Catchy Carz</span>
					    </div>
					 </a>
				 </li>
				</ul>
		  </div>
	  </div>
	<!-- //slider -->
	<!-- Services -->
	<div class="updates-agile">
		<div class="container">
		      <h3 class="tittle">LATEST CAR UPDATES</h3>
		<div class="inner_tabs">
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class=""><a href="#updates" id="updates-tab" role="tab" data-toggle="tab" aria-controls="updates" aria-expanded="false">Car News</a></li>
							<li role="presentation" class=""><a href="#expert" role="tab" id="expert-tab" data-toggle="tab" aria-controls="expert" aria-expanded="false">Expert Reviews</a></li>
							<li role="presentation" class="active"><a href="#video-text" role="tab" id="video-text-tab" data-toggle="tab" aria-controls="video-text" aria-expanded="true">Videos</a></li>
							
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade" id="updates" aria-labelledby="updates-tab">
							 <div class="news-updates">
									<div class="update-info-w3l">
										<div class="col-md-5 tab-image">
											<div class="view second-effect">
												<a href="single.html" title="Catchy Carz">
													<img src="images/u1.jpeg" alt="" class="img-responsive">
													<div class="mask">
														<p>Catchy <span>Carz</span> </p>
													</div>
												</a>	
											</div>
											
										</div>
										<div class="col-md-7 tab-info one">
										<h4><a href="single.html">Lorem Ipsum is simply dummy text of the printing </a></h4>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
											<a href="single.html" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="update-info-w3l two">
										<div class="col-md-7 tab-info two">
										<h4><a href="single.html">Lorem Ipsum is simply dummy text of the printing </a></h4>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
											<a href="single.html" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="col-md-5 tab-image">
											<div class="view second-effect">
												<a href="single.html" title="Catchy Carz">
													<img src="images/u2.jpg" alt="" class="img-responsive">
													<div class="mask">
														<p>Catchy <span>Carz</span> </p>
													</div>
												</a>	
											</div>
										</div>
										
										<div class="clearfix"></div>
									</div>
										
								 </div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="expert" aria-labelledby="expert-tab">
								<div class="news-updates">
									<div class="update-info-w3l">
										<div class="col-md-5 tab-image">
											<div class="view second-effect">
												<a href="single.html" title="Catchy Carz">
													<img src="images/u3.jpg" alt="" class="img-responsive">
													<div class="mask">
														<p>Catchy <span>Carz</span> </p>
													</div>
												</a>	
											</div>
										</div>
										<div class="col-md-7 tab-info">
										<h4><a href="single.html">Lorem Ipsum is simply dummy text of the printing </a></h4>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
											<a href="single.html" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="update-info-w3l two">
										<div class="col-md-7 tab-info one">
										<h4><a href="single.html">Lorem Ipsum is simply dummy text of the printing </a></h4>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
											<a href="single.html" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="col-md-5 tab-image">
											<div class="view second-effect">
											<a href="single.html" title="Catchy Carz">
													<img src="images/u4.jpeg" alt="" class="img-responsive">
													<div class="mask">
														<p>Catchy <span>Carz</span> </p>
													</div>
												</a>	
											</div>
										</div>
										
										<div class="clearfix"></div>
									</div>
										
								 </div>
								
							</div>
							<div role="tabpanel" class="tab-pane fade active in" id="video-text" aria-labelledby="video-text-tab">
								
								<div class="news-updates">
									<div class="update-info-w3l">
										<div class="col-md-5 tab-image">
											<iframe src="https://www.youtube.com/embed/XoXHwhADS4k" frameborder="0" allowfullscreen></iframe>
										</div>
										<div class="col-md-7 tab-info">
										<h4><a href="single.html">Audi A4 2016 review - Car Keys </a></h4>
											  							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
											<a href="single.html" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="update-info-w3l two">
										<div class="col-md-7 tab-info two">
										    <h4><a href="single.html">Volvo V90 review: is Volvo s new estate car </a></h4>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
											<a href="single.html" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="col-md-5 tab-image">
											<iframe src="https://www.youtube.com/embed/NcoCLc0MNdA" frameborder="0" allowfullscreen></iframe>
										</div>
										
										<div class="clearfix"></div>
									</div>
										
								 </div>
								
							</div>
						
						
						</div>
					</div>
				</div>
            </div>
		</div>
		<div class="clearfix"></div>
		<!-- //Services -->
<?php
include_once('footer.php');
?>		