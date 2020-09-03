<div class="card-body">
  <div class="form-group">
  	<div class="row">
      @if(\Request::is('admin/roles/create'))
        <div class="col-md-3">
          <label for="exampleInputEmail1">Type</label>
          <input type="text" name="type" value="{{ $role->type }}" class="form-control" id="type" placeholder="Nhập type">
          @error('type')
                <span id="name-error" class="invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
        </div>
      @else
        <div class="col-md-3">
          <label for="exampleInputEmail1">Type</label>
          <select name="type" class="form-control select2" style="width: 100%;">
            @foreach($types as $item)
              <option value="{{$item->type}}" @if($role->type==$item->type){{'selected'}}@endif>{{$item->name}}</option>
            @endforeach
            
          </select>
          @error('type')
                <span id="name-error" class="invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
        </div>
      @endif
      
  		<div class="col-md-6">
  			<label for="exampleInputEmail1">Tên quyền</label>
		    <input type="text" name="name" value="{{ $role->name }}" class="form-control" id="name" placeholder="Nhập tên">
        @error('name')
              <span id="name-error" class="invalid-feedback" style="display: inline;">{{ $message }}</span>
        @enderror
  		</div>
  	</div> 
  </div>
<<<<<<< HEAD

=======
>>>>>>> 3b39ce8edd71136549de451d0854ec2d363c7db8
</div>
<!-- /.card-body -->
<div class="card-footer">
  <a href="{{ url('admin/roles') }}" class="btn btn-secondary" >Trở lại</a>
  <button type="submit"  class="btn btn-success float-right" style="width: 100px;">Lưu</button>
<<<<<<< HEAD

</div> 

=======
</div> 
>>>>>>> 3b39ce8edd71136549de451d0854ec2d363c7db8
</div>
@section('scripts')
<script type="text/javascript">
$(document).ready(function () {
  $('#createRole').validate({
    rules: {
      name: {
        required: true,
        minlength: 2
      }
    },
    messages: {
      name: {
        required: "Vui lòng nhập vào",
        minlength: "Tên quá ngắn",
        unique: "Quyền đã tồn tại"
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
<<<<<<< HEAD

=======
>>>>>>> 3b39ce8edd71136549de451d0854ec2d363c7db8
					