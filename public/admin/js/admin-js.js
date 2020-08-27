function checkname(){

	var name = $("#name").val().length;
	if(name == 0){
		$(".erorrName").text("Email không được để trông!!!");
	}else{
		$(".erorrName").text("ok");
	}
}