@extends('frontend.master')
@section('title','Giới thiệu')
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
						<span>Shipping:</span>
					</div>
					<!-- BSTORE-BREADCRUMB END -->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2 class="page-title">Shipping:</h2>
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
							<li class="step-todo third step-done">
								<span><a href="checkout-address.html">03. Address</a></span>
							</li>
							<li class="step-current four">
								<span>04. Shipping</span>
							</li>
							<li class="step-todo last" id="step_end">
								<span>05. Payment</span>
							</li>
						</ul>									
					</div>
					<!-- SHOPING-CART-MENU END -->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<!-- PRODUCT-DELIVERY-OPTION START -->
					<div class="product-delivery-option">
						<div class="product-delivery-address">
							<p>Choose a shipping option for this address: My address</p>
						</div>
						<!-- PRODUCT-DELIVERY-ITEM START -->
						<div class="product-delivery-item">
							<div class="product-delivery-single-item">
								<div class="table-responsive">
									<!-- PRODUCT-DELIVERY SINGLE OPTION START -->
								    <table class="table table-bordered delivery-table">
										<tr>
											<td class="delivery-option-radio">
												<div class="dalivery-radio">
													<span class="radio-box">
														<input type="radio" value="1" name="deliverymethod">
													</span>
												</div>
											</td>											
											<td class="delivery-method-icon">
												<img src="img/bank.png" alt="" />
											</td>
											<td class="carrey-info">
												<strong>BootExperts</strong><br>
												Delivery time: Pick up in-store <br />
												The best price and speed
											</td>
											<td class="carrey-cost">Free</td>
										</tr>
								    </table>
									<!-- PRODUCT-DELIVERY SINGLE OPTION END -->
								</div>
								<div class="table-responsive">
									<!-- PRODUCT-DELIVERY SINGLE OPTION START -->
								    <table class="table table-bordered delivery-table">
										<tr>
											<td class="delivery-option-radio">
												<div class="dalivery-radio">
													<span class="radio-box">
														<input type="radio" value="1" name="deliverymethod">
													</span>
												</div>
											</td>											
											<td class="delivery-method-icon">
												<img src="img/delivery-method.jpg" alt="" />
											</td>
											<td class="carrey-info">
												<strong>BootExperts</strong><br>
												Delivery time: Pick up in-store
											</td>
											<td class="carrey-cost">
												$2.00 (tax.) 
											</td>
										</tr>
								    </table>
									<!-- PRODUCT-DELIVERY SINGLE OPTION END -->
								</div>
							</div>
						</div>
						<!-- PRODUCT-DELIVERY-ITEM START -->
						<!-- TERMS-OF-SERVICE START -->
						<div class="terms-of-service">
							<p>Terms of service</p>
							<div class="form-group new-ac-form-group p-info-group ">
								<label class="cheker">
									<input type="checkbox" name="checkbox">
									<span></span>
								</label>
								<span class="agree">I agree to the terms of service and will adhere to them unconditionally.<a href="#">(Read the Terms of Service)</a></span>
							</div>								
						</div>
						<!-- TERMS-OF-SERVICE END -->
					</div>
					<!-- PRODUCT-DELIVERY-OPTION END -->
					<!-- RETURNE-CONTINUE-SHOP START -->
					<div class="returne-continue-shop">
						<a href="index.html" class="continueshoping"><i class="fa fa-chevron-left"></i>Continue shopping</a>
						<a href="checkout.html" class="procedtocheckout">Proceed to checkout<i class="fa fa-chevron-right"></i></a>
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
@stop	