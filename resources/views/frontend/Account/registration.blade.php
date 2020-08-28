@extends('frontend.master')
@section('title','Đăng ký và Đăng nhập')
@section('main')
	<!-- MAIN-CONTENT-SECTION START -->
	<section class="main-content-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<!-- BSTORE-BREADCRUMB START -->
					<div class="bstore-breadcrumb">
						<a href="index.html">HOMe</a>
						<span><i class="fa fa-caret-right"></i></span>
						<span>Sign in / Register</span>
					</div>
					<!-- BSTORE-BREADCRUMB END -->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2 class="page-title">Sign in / Register</h2>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<!-- CREATE-NEW-ACCOUNT START -->
					<div class="create-new-account">
						<form class="primari-box personal-info-box" id="check" method="post" action="#">
							<h3 class="box-subheading">Your personal information</h3>
							<div class="personal-info-content">
								
								<div class="form-group primary-form-group p-info-group">
									<span class="required-field"></span>
									<label for="firstname">Name <sup>*</sup></label>
									<input  type="text" value="" name="name" id="name" class="form-control input-feild" class="nameid" placeholder="Vui lòng nhập họ tên" required>
									
								</div>
								
								<div class="form-group primary-form-group p-info-group">
									<span class="checkemail"></span>
									<label for="email">Email<sup>*</sup></label>
									<input type="email" value="" name="email" id="email" class="form-control input-feild">

								</div>
								<div class="form-group primary-form-group p-info-group">
									<label for="email">Phone<sup>*</sup></label>
									<input type="email" value="" name="phone" id="email" class="form-control input-feild">
								</div>
								<div class="form-group primary-form-group p-info-group">
									<label for="password">Password <sup>*</sup></label>
									<input type="password" value="" name="password" id="password" class="form-control input-feild">
									<span class="min-pass">(Five characters minimum)</span> -->
								</div>
								<div class="form-group primary-form-group p-info-group">
									<label for="password">Confirm Password <sup>*</sup></label>
									<input type="password" value="" name="confirmpasswword" id="password" class="form-control input-feild">
								</div>
								<div class="form-group primary-form-group p-info-group">
									<label for="password">Date of birth<sup>*</sup></label>
									<input type="Date" value="" name="confirmpasswword" id="password" class="form-control input-feild">
								</div>
								 
								<div class="form-group primary-form-group p-info-group">
									<label class="cheker">
										<input type="checkbox" name="checkbox">
										<span></span>
									</label>
									<a href="#">Sign up for our newsletter!</a>
								</div>
								<div class="form-group primary-form-group p-info-group">
									<label class="cheker">
										<input type="checkbox" name="checkbox">
										<span></span>
									</label>
									<a href="#">Receive special offers from our partners!</a>
								</div>
								<div class="submit-button p-info-submit-button">
								<button type="submit" id="SubmitCreate" class="btn main-btn">
									<span>
										Register
										<i class="fa fa-chevron-right"></i>
									</span>											
								</button>
									
								</div>
							</div>
						</form>	
						<!-- <form class="new-account-box primari-box" id="create-new-account" method="post" action="#">
							<h3 class="box-subheading">Create an account</h3>
							<div class="form-content">
								<p>Please enter your email address to create an account.</p>
								<div class="form-group primary-form-group">
									<label for="email">Email address</label>
									<input type="text" value="" name="email" id="email" class="form-control input-feild" required>
								</div>
								<div class="submit-button">
									<a href="checkout-registration.html" id="SubmitCreate" class="btn main-btn">
										<span>
											<i class="fa fa-user submit-icon"></i>
											Create an account
										</span>											
									</a>
								</div>
							</div>
						</form>	 -->						
					</div>
					<!-- CREATE-NEW-ACCOUNT END -->
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<!-- REGISTERED-ACCOUNT START -->
					<div class="primari-box registered-account">
						<form class="new-account-box" id="accountLogin" method="post" action="#">
							<h3 class="box-subheading">Already registered?</h3>
							<div class="form-content">
								<div class="form-group primary-form-group">
									<label for="loginemail">Email address</label>
									<input type="text" value="" name="email" id="loginemail" class="form-control input-feild">
								</div>
								<div class="form-group primary-form-group">
									<label for="password">Password</label>
									<input type="password" value="" name="password" id="password" class="form-control input-feild">
								</div>
								<div class="forget-password">
									<p><a href="#">Forgot your password?</a></p>
								</div>
								<div class="submit-button">
									<a href="my-account.html" id="signinCreate" class="btn main-btn">
									<span>
										<i class="fa fa-lock submit-icon"></i>
										 Sign in
									</span>
									</a>
								</div>
							</div>
						</form>							
					</div>
					<!-- REGISTERED-ACCOUNT END -->
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
	<script type="text/javascript" src="jquery-1.11.3.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
	<script type="text/javascript">
		$('#name').on('blur change keyup', function(){
			var regexname = /^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]{3,}$/g;
			var name = $('#name').val();
			if (name.length == 0) {
				$('.required-field').text('Không được để trống');
			}else if (!name.match(regexname)) {
				$('.required-field').text('Tên không đúng');
			}else{
				$('.required-field').text(' ');
			}
		});
		$('#email').on('blur change keyup', function(){
			var regexemail = /^[a-z0-9]+([-._][a-z0-9]+)*@([a-z0-9]+(-[a-z0-9]+)*\.)+[a-z]{1,5}$/g;
			if (name.length == 0) {
				$('.checkemail').text('Không được để trống');
			}else if (!name.match(regexemail)) {
				$('.checkemail').text('Email không đúng');
			}else{
				$('.checkemail').text(' ');
			}
		});
		//cái này là jquery đây ời mà ren hắn k chạy cái jquery ni hị
	</script>
@stop	