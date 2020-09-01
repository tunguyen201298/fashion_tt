<div class="card-body">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label>Thuộc loại</label>
        <select name="parent_id" class="form-control select2" style="width: 100%;">
          @if(!$parent_id->isEmpty())
            <option selected="selected"></option>
            @foreach($parent_id as $item)
              <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
          @endif
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">*Tên danh mục</label>
        <input type="text" name="name" value="{{ $category->name }}" class="form-control" id="name" placeholder="Nhập tên">
      </div>
    </div> 
    <div class="col-md-6">
      <div class="form-group">
  			<label for="exampleInputEmail1">Mô tả</label>
		    <textarea rows="6" name="description"  class="form-control" id="description" placeholder="Nhập mô tả"></textarea>
  		</div>
  	</div> 
  </div>
</div>
<!-- /.card-body -->
<div class="card-footer">
  <a href="{{ url('admin/categories') }}" class="btn btn-secondary" >Trở lại</a>
  <button type="submit"  class="btn btn-success float-right" style="width: 100px;">Lưu</button>
</div>
@section('scripts')
<script type="text/javascript">
$(document).ready(function () {
  
  $('#createCategory').validate({
    rules: {
      name: {
        required: true,
        minlength: 2
      }
    },
    messages: {
      name: {
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
					