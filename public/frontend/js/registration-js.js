<script type="text/javascript">
		$('#name').on('blur change keyup', function(){
			var regexname = /^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]{3,}$/g;
			var name = $('#name').val();
			if (name.length == 0) {
				$('.required-field').text('Tên không được để trống');
				$("#name").css('border-color', 'red');
			}else if (!name.match(regexname)) {
				$('.required-field').text('Tên không đúng');
				$("#name").css('border-color', 'red');
			}else{
				$('.required-field').text(' ');
				$("#name").css('border-color', 'green');
			}
		});

		$('#email').on('blur change keyup', function(){
			const regexemail = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
			var name = $('#email').val();
			if (name.length == 0) {
				$('.checkemail').text('Email không được để trống');
				$("#email").css('border-color', 'red');
			}else if (!name.match(regexemail)) {
				$('.checkemail').text('Email không đúng');
				$("#email").css('border-color', 'red');
			}else{
				$('.checkemail').text(' ');
				$("#email").css('border-color', 'green');
			}
		});

		$('#phone').on('blur change keyup', function(){
			var phone = $("#phone").val();
			if (phone.length == 0){
				$(".checkphone").text("SĐT không được để trông!!!");
				$("#phone").css('border-color', 'red');
			}else if(phone.length < 10 || phone.length > 15){
				$(".checkphone").text("SĐT không đúng!!!");
				$("#phone").css('border-color', 'red');
			}else{
				$(".checkphone").text(" ");
				$("#phone").css('border-color', 'green');
			}
		});

		$('#password').on('blur change keyup', function(){
			var password = $("#password").val();
			if (password.length == 0){
				$(".checkpass").text("Password không được để trông!!!");
				$("#password").css('border-color', 'red');
			}else if(password.length < 5){
				$(".checkpass").text("Password quá ngắn!!");
				$("#password").css('border-color', 'red');
			}else{
				$(".checkpass").text(" ");
				$("#password").css('border-color', 'green');
			}
		});

		$(document).ready(function(){
		  $('#showPassword').on('click', function(){
		    
		    var passwordField = $('#password');
		    var passwordFieldType = passwordField.attr('type');
		    if(passwordFieldType == 'password')
		    {
		        passwordField.attr('type', 'text');
		        $(this).val('Hide');
		    } else {
		        passwordField.attr('type', 'password');
		        $(this).val('Show');
		    }
		  });
		});
		
			$('#confirmpassword').on('blur change keyup', function(){
			
				var password = $("#password").val();
				var confirmpassword = $("#confirmpassword").val();
				if (confirmpassword.length == 0){
					$(".checkconfirm").text("Password không được để trống!!!");
					$("#confirmpassword").css('border-color', 'red');
				}else if(confirmpassword != password){
					$(".checkconfirm").text("Password k khớp");
					$("#confirmpassword").css('border-color', 'red');
				}else{
					$(".checkconfirm").text(" ");
					$("#confirmpassword").css('border-color', 'green');
				}
			});
	</script>