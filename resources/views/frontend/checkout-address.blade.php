@extends('frontend.master')
@section('title','Cập nhật địa chỉ')
@section('main')
	<!-- MAIN-CONTENT-SECTION START -->
	<section class="main-content-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<!-- BSTORE-BREADCRUMB START -->
					<div class="bstore-breadcrumb">
						<a href="index.html">HOMe</a>
						<span><i class="fa fa-caret-right	"></i></span>
						<span>Addresses</span>
					</div>
					<!-- BSTORE-BREADCRUMB END -->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2 class="page-title">Addresses</h2>
				</div>	
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<!-- SHOPING-CART-MENU START -->
					<div class="shoping-cart-menu">
						<ul class="step">
							<li class="step-todo first step-done">
								<span><a href="cart.html">01. Summary</a></span>
							</li>
							<li class="step-todo second step-done">
								<span><a href="checkout-signin.html">02. Sign in</a></span>
							</li>
							<li class="step-current third">
								<span>03. Address</span>
							</li>
							<li class="step-todo four">
								<span>04. Shipping</span>
							</li>
							<li class="step-todo last" id="step_end">
								<span>05. Payment</span>
							</li>
						</ul>									
					</div>
					<!-- SHOPING-CART-MENU END -->
				</div>
				<!-- ADDRESS AREA START --> 
				<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
					<div class="form-group primary-form-group p-info-group deli-address-group">
						<label>Choose a delivery address:</label>
						<div class="birth-day delivery-address">
							<select id="deli-address" name="deliveryaddress">
								<option value="">Your Office Address</option>
								<option value="">Your Office Address</option>
								<option value="">Other Address</option>
							</select>												
						</div>
					</div>	
					<div class="form-group primary-form-group p-info-group chose-address">
						<label class="cheker">
							<input type="checkbox" name="checkbox">
							<span></span>
						</label>
						<a href="#">Use the delivery address as the billing address.</a>
					</div>							
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="first_item primari-box">
						<!-- DELIVERY ADDRESS START -->
						<ul class="address">
							<li>
								<h3 class="page-subheading box-subheading">
									Your delivery address
								</h3>
							</li>
							<li><span class="address_name">BootExperts</span></li>
							<li><span class="address_company">Web development Company</span></li>
							<li><span class="address_address1">Bonossri</span></li>
							<li><span class="address_address2">D-Block</span></li>
							<li><span class="">Rampura</span></li>
							<li><span class="">Dhaka</span></li>
							<li><span class="address_phone">+880 1735161598</span></li>
							<li><span class="address_phone_mobile">+880 1975161598</span></li>
							<li class="update-button">
								<a href="my-cart-step-2-info.html">Update<i class="fa fa-chevron-right"></i></a>
							</li>								
						</ul>	
						<!-- DELIVERY ADDRESS END -->
					</div>						
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="second_item primari-box">
						<!-- BILLING ADDRESS START -->
						<ul class="address">
							<li>
								<h3 class="page-subheading box-subheading">
									Your billing address
								</h3>
							</li>
							<li><span class="address_name">BootExperts</span></li>
							<li><span class="address_company">Web development Company</span></li>
							<li><span class="address_address1">Dhaka</span></li>
							<li><span class="address_address2">Bonossri</span></li>
							<li><span class="">Dhaka-1205</span></li>
							<li><span class="">Rampura</span></li>
							<li><span class="address_phone">+880 1735161598</span></li>
							<li><span class="address_phone_mobile">+880 1975161598</span></li>
							<li class="update-button">
								<a href="my-cart-step-2-info.html">Update<i class="fa fa-chevron-right"></i></a>
							</li>									
						</ul>	
						<!-- BILLING ADDRESS END -->
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="add-new-address">
						<a href="my-cart-step-2-info.html" class="new-address-link">Add a new address<i class="fa fa-chevron-right"></i></a>
						<div class="form-group p-info-group type-address-group">
							<label>If you would like to add a comment about your order, please write it in the field below.</label>
							<textarea class="form-control input-feild " name="addcomment"></textarea>
						</div>							
					</div>
					<!-- ADDRESS AREA START --> 
					<!-- RETURNE-CONTINUE-SHOP START -->
					<div class="returne-continue-shop ship-address">
						<a href="index.html" class="continueshoping"><i class="fa fa-chevron-left"></i>Continue shopping</a>
						<a href="checkout-shipping.html" class="procedtocheckout">Proceed to checkout<i class="fa fa-chevron-right"></i></a>
					</div>	
					<!-- RETURNE-CONTINUE-SHOP END -->		
				</div>					
			</div>
		</div>
	</section>
	<!-- MAIN-CONTENT-SECTION END -->
	<!-- BRAND-CLIENT-AREA START -->
	<section class="brand-client-area">
		<div class="container">
			<div class="row">
				<!-- BRAND-CLIENT-ROW START -->
				<div class="brand-client-row">
					<div class="center-title-area">
						<h2 class="center-title">BRAND & CLIENTS</h2>
					</div>
					<div class="col-xs-12">
						<div class="row">
							<!-- CLIENT-CAROUSEL START -->
							<div class="client-carousel">
								<!-- CLIENT-SINGLE START -->
								<div class="item">
									<div class="single-client">
										<a href="#">
											<img src="img/brand/1.png" alt="brand-client" />
										</a>
									</div>									
								</div>
								<!-- CLIENT-SINGLE END -->
								<!-- CLIENT-SINGLE START -->
								<div class="item">
									<div class="single-client">
										<a href="#">
											<img src="img/brand/2.png" alt="brand-client" />
										</a>
									</div>									
								</div>
								<!-- CLIENT-SINGLE END -->
								<!-- CLIENT-SINGLE START -->								
								<div class="item">
									<div class="single-client">
										<a href="#">
											<img src="img/brand/3.png" alt="brand-client" />
										</a>
									</div>									
								</div>
								<!-- CLIENT-SINGLE END -->
								<!-- CLIENT-SINGLE START -->								
								<div class="item">
									<div class="single-client">
										<a href="#">
											<img src="img/brand/4.png" alt="brand-client" />
										</a>
									</div>									
								</div>
								<!-- CLIENT-SINGLE END -->
								<!-- CLIENT-SINGLE START -->								
								<div class="item">
									<div class="single-client">
										<a href="#">
											<img src="img/brand/5.png" alt="brand-client" />
										</a>
									</div>									
								</div>
								<!-- CLIENT-SINGLE END -->
								<!-- CLIENT-SINGLE START -->								
								<div class="item">
									<div class="single-client">
										<a href="#">
											<img src="img/brand/1.png" alt="brand-client" />
										</a>
									</div>									
								</div>
								<!-- CLIENT-SINGLE END -->									
								<!-- CLIENT-SINGLE START -->								
								<div class="item">
									<div class="single-client">
										<a href="#">
											<img src="img/brand/3.png" alt="brand-client" />
										</a>
									</div>									
								</div>
								<!-- CLIENT-SINGLE END -->
								<!-- CLIENT-SINGLE START -->
								<div class="item">
									<div class="single-client">
										<a href="#">
											<img src="img/brand/2.png" alt="brand-client" />
										</a>
									</div>									
								</div>
								<!-- CLIENT-SINGLE END -->
								<!-- CLIENT-SINGLE START -->								
								<div class="item">
									<div class="single-client">
										<a href="#">
											<img src="img/brand/3.png" alt="brand-client" />
										</a>
									</div>									
								</div>
								<!-- CLIENT-SINGLE END -->
								<!-- CLIENT-SINGLE START -->								
								<div class="item">
									<div class="single-client">
										<a href="#">
											<img src="img/brand/4.png" alt="brand-client" />
										</a>
									</div>									
								</div>
								<!-- CLIENT-SINGLE END -->
								<!-- CLIENT-SINGLE START -->								
								<div class="item">
									<div class="single-client">
										<a href="#">
											<img src="img/brand/5.png" alt="brand-client" />
										</a>
									</div>									
								</div>
								<!-- CLIENT-SINGLE END -->
								<!-- CLIENT-SINGLE START -->								
								<div class="item">
									<div class="single-client">
										<a href="#">
											<img src="img/brand/1.png" alt="brand-client" />
										</a>
									</div>									
								</div>
								<!-- CLIENT-SINGLE END -->									
								<!-- CLIENT-SINGLE START -->								
								<div class="item">
									<div class="single-client">
										<a href="#">
											<img src="img/brand/3.png" alt="brand-client" />
										</a>
									</div>									
								</div>
								<!-- CLIENT-SINGLE END -->
								<!-- CLIENT-SINGLE START -->								
								<div class="item">
									<div class="single-client">
										<a href="#">
											<img src="img/brand/4.png" alt="brand-client" />
										</a>
									</div>									
								</div>
								<!-- CLIENT-SINGLE END -->
								<!-- CLIENT-SINGLE START -->								
								<div class="item">
									<div class="single-client">
										<a href="#">
											<img src="img/brand/5.png" alt="brand-client" />
										</a>
									</div>									
								</div>
								<!-- CLIENT-SINGLE END -->									
							</div>
							<!-- CLIENT-CAROUSEL END -->
						</div>
					</div>
				</div>
				<!-- BRAND-CLIENT-ROW END -->
			</div>
		</div>
	</section>
	<!-- BRAND-CLIENT-AREA END -->
	<!-- COMPANY-FACALITY START -->
	<section class="company-facality">
		<div class="container">
			<div class="row">
				<div class="company-facality-row">
					<!-- SINGLE-FACALITY START -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="single-facality">
							<div class="facality-icon">
								<i class="fa fa-rocket"></i>
							</div>
							<div class="facality-text">
								<h3 class="facality-heading-text">FREE SHIPPING</h3>
								<span>on order over $100</span>
							</div>
						</div>
					</div>
					<!-- SINGLE-FACALITY END -->
					<!-- SINGLE-FACALITY START -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="single-facality">
							<div class="facality-icon">
								<i class="fa fa-umbrella"></i>
							</div>
							<div class="facality-text">
								<h3 class="facality-heading-text">24/7 SUPPORT</h3>
								<span>online consultations</span>
							</div>
						</div>
					</div>
					<!-- SINGLE-FACALITY END -->
					<!-- SINGLE-FACALITY START -->						
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="single-facality">
							<div class="facality-icon">
								<i class="fa fa-calendar"></i>
							</div>
							<div class="facality-text">
								<h3 class="facality-heading-text">DAILY UPDATES</h3>
								<span>Check out store for latest</span>
							</div>
						</div>
					</div>
					<!-- SINGLE-FACALITY END -->
					<!-- SINGLE-FACALITY START -->						
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="single-facality">
							<div class="facality-icon">
								<i class="fa fa-refresh"></i>
							</div>
							<div class="facality-text">
								<h3 class="facality-heading-text">30-DAY RETURNS</h3>
								<span>moneyback guarantee</span>
							</div>
						</div>
					</div>		
					<!-- SINGLE-FACALITY END -->					
				</div>
			</div>
		</div>
	</section>
	<!-- COMPANY-FACALITY END -->
	<!-- FOOTER-TOP-AREA START -->
@stop