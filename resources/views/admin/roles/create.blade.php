@extends('admin.layouts.app')
@section('title', $title)
@section('content')
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">@yield('title')</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  method="post" action="{{url('admin/roles/store')}}" role="form" id="createRole">
                @csrf
                @include('admin.roles._form')
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@stop
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