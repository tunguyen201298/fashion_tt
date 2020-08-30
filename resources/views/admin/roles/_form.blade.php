<div class="card-body">
  <div class="form-group">
  	<div class="row">
  		<div class="col-md-6">
  			<label for="exampleInputEmail1">Tên quyền</label>
		    <input type="text" name="nameRole" class="form-control" id="nameRole" placeholder="Nhập tên">
  		</div>
  	</div> 
  </div>
<<<<<<< HEAD
  
=======
>>>>>>> d1c754d914ac085a3ffc5abe9b9e08f37b8a7dd7
</div>
<!-- /.card-body -->
<div class="card-footer">
  <a href="{{ url('admin/roles') }}" class="btn btn-secondary" >Trở lại</a>
  <button type="submit"  class="btn btn-success float-right" style="width: 100px;">Lưu</button>
<<<<<<< HEAD
</div> 
=======
</div>
@section('scripts')
<script type="text/javascript">
$(document).ready(function () {
  
  $('#createRole').validate({
    rules: {
      nameRole: {
        required: true,
        minlength: 2
      }
    },
    messages: {
      nameRole: {
        required: "Vui lòng nhập vào",
        minlength: "Tên quá ngắn"
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
@stop
>>>>>>> d1c754d914ac085a3ffc5abe9b9e08f37b8a7dd7
					