

$(function(){
    $("input[name=phone]")[0].oninvalid = function () {
        !this.setCustomValidity("Vui lòng nhập kiểu số.");
    };
});
$('#name').on('blur change keyup', function(){
	var regexname = /^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]{2,}$/g;
	var name = $("#name").val();
	if(name.length == 0){
		$(".erorrName").text("Tên không được để trông!!!");
	}else if (!name.match(regexname)) {
		$(".erorrName").text("Tên không đúng!!!");
	}else{
		$(".erorrName").text(" ");
	}
});
function checkemail(){
	const re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
	var email = $("#email").val();
	if(email.length == 0){
		$(".erorrName").text("Email không được để trông!!!");
	}else if (!email.match(re)) {
		$(".erorrName").text("Email không đúng!!!");
	}else{
		$(".erorrName").text(" ");
	}
}
function checkphone(){
	var phone = $("#phone").val();
	if (phone.length == 0){
		$(".erorrName").text("SĐT không được để trông!!!");
	}else if(phone.length < 10 || phone.length > 15){
		$(".erorrName").text("SĐT không đúng!!!");
	}else{
		$(".erorrName").text(" ");
	}
}