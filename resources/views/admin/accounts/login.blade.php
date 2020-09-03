@extends('admin.accounts.master')
@section('content')
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Fashion</b>T&T</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Đăng nhập để bắt đầu phiên làm việc.</p>

      <form action="{{route('accounts.check-login')}}" id="formlogin" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input type="email" id="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('email')
            <span id="name-error" class="invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" id="password" name="password" class="form-control" placeholder="Mật khẩu">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
            <span id="name-error" class="invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
        </div>
        <div class="row">
          <div class="col-7">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember">
              <label for="remember">
                Nhớ tôi
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-5">
            <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- HOẶC -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Đăng nhập bằng Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Đăng nhập bằng Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="{{route('accounts.forgot-password')}}">Quên mật khẩu</a>
      </p>
      <p class="mb-0">
        <a href="{{ route('accounts.register') }}" class="text-center">Đăng ký tài khoản</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</body>
@stop
@section('scripts')
<script type="text/javascript">
$(document).ready(function () {
  
  $('#formlogin').validate({
    rules: {
      email: {
        email: true,
        required: true,
        minlength: 2
      },
      password: {
        required: true
      }
    },
    messages: {
      email: {
        email: "Mail sai",
        required: "Vui lòng nhập vào",
        minlength: "Tên quá ngắn"
      },
      password: {
        required: "Vui lòng nhập vào",
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
