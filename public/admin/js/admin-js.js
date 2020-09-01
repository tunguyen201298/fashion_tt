
var root = 'http://localhost:81/fashion_tt/';

/*$(function(){
    $("input[name=phone]")[0].oninvalid = function () {
        !this.setCustomValidity("Vui lòng nhập kiểu số.");
    };
});
$('#name').on('blur change keyup', function(){
	var regexname = /^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]{3,}$/g;
	var name = $("#name").val();
	if (!name.match(regexname)) {
		$(".erorrName").text("Tên không đúng!!!");
		$("#name").css('border-color', 'red');
	}else{
		$(".erorrName").text(" ");
		$("#name").css('border-color', 'green');
	}
});
$('#email').on('blur change keyup', function(){
	const re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
	var email = $("#email").val();
	if(!email.match(re)) {
		$(".erorrName").text("Email không đúng!!!");
		$("#email").css('border-color', 'red');
	}else{
		$(".erorrName").text(" ");
		$("#email").css('border-color', 'green');
	}
});
$('#phone').on('blur change keyup', function(){
	var phone = $("#phone").val();
	if(phone.length < 10 || phone.length > 13){
		$(".erorrName").text("Số điện thoại không đúng!!!");
		$("#phone").css('border-color', 'red');
	}else{
		$(".erorrName").text(" ");
		$("#phone").css('border-color', 'green');
	}
});
$('#password').on('blur change keyup', function(){
	var password = $("#password").val();
	if(password.length < 6){
		$(".erorrName").text(" Mật khẩu quá ngắn!!!");
		$("#phone").css('border-color', 'red');
	}else if(password.length > 30){
		$(".erorrName").text("Mật khẩu quá dài!!!");
		$("#phone").css('border-color', 'red');
	}else{
		$(".erorrName").text(" ");
		$("#phone").css('border-color', 'green');
	}
});
$('#password_confirm').on('blur change keyup', function(){
	var password_confirm = $("#password_confirm").val();
	var password = $("#password").val();
	if(password_confirm != password){
		$(".erorrName").text("Mật khẩu không khớp!!!");
		$("#password_confirm").css('border-color', 'red');
	}else{
		$(".erorrName").text(" ");
		$("#password_confirm").css('border-color', 'green');
	}
});
$('#birthday').on('blur change keyup', function(){
	var birthday = $("#birthday").val();
	if(birthday.length != 0){
		$(".erorrName").text(" ");
		$("#birthday").css('border-color', 'green');
	}
});*/
function deleteModal(id, route) {
    $('#form_modal_delete').attr('action', root + route);
    $('#del_modal_id').val(id);
}