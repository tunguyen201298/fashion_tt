@extends('frontend.master')
@section('title','Liên Hệ')
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
						<span>Contact</span>
					</div>
					<!-- BSTORE-BREADCRUMB END -->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2 class="page-title contant-page-title">Customer service - Contact us</h2>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<!-- CONTACT-US-FORM START -->
					<div class="contact-us-form">
						<div class="contact-form-center">
							<h3 class="contact-subheading">send a message</h3>
							<!-- CONTACT-FORM START -->
							<form class="contact-form" id="contactForm" method="post" action="#">
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
										<div class="form-group primary-form-group">
											<label>Subject Heading</label>
											<div class="con-form-select">
												<select id="conForm" name="conform">
													<option value="">Customar Service</option>
													<option value="">Webmaster</option>
												</select>												
											</div>
										</div>		
										<div class="form-group primary-form-group">
											<label>Email address</label>
											<input type="text" class="form-control input-feild" id="contactEmail" name="contactemail" value="">
										</div>	
										<div class="form-group primary-form-group">
											<label>Order reference</label>
											<div class="con-form-select">
												<select id="orderRef" name="orderref">
													<option value="">Bootexpert</option>
													<option value="">Ohter</option>
												</select>												
											</div>
										</div>	
										<div class="form-group primary-form-group">
											<div class="file-uploader">
												<label>Attach File</label>
												<input type="file" class="form-control" name="fileUpload">
												<span class="filename">No file selected</span>
												<span class="action">Choose File</span>
											</div>
										</div>	
										<button type="submit" name="submit" id="sendMessage" class="send-message main-btn">Send <i class="fa fa-chevron-right"></i></button>
									</div>
									<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
										<div class="type-of-text">
											<div class="form-group primary-form-group">
												<label>Message</label>
												<textarea class="contact-text" name="ContactMessage"></textarea>
											</div>													
										</div>
									</div>
								</div>
							</form>
							<!-- CONTACT-FORM END -->
						</div>
					</div>
					<!-- CONTACT-US-FORM END -->
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