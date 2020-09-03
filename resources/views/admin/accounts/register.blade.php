@extends('admin.accounts.master')
@section('content')
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Fashion</b>T&T</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Đăng ký tài khoản.</p>

      <form action="{{ route('accounts.register-store') }}" method="POST" class="validatedForm" id="registration" name="registration">
        @csrf
        <input type="hidden" name="role_id" value="3">
        <div class="form-group input-group mb-3">
          <input type="text" class="form-control" placeholder="*Họ tên" id="name" name="name" minlength="3" required >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          @error('name')
              <span id="name-error" class="invalid-feedback" style="display: inline;">{{ $message }}</span>
        @enderror
        </div>

        <div class="form-group input-group mb-3">
          <input type="email" class="form-control" name="email" id="email" placeholder="*Email" required >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
            @error('email')
              <span id="name-error" class="invalid-feedback" style="display: inline;">{{ $message }}</span>
        @enderror
          </div>
        </div>
        <div class="form-group input-group mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="*Mật khẩu"  minlength="6" maxlength="30" required >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
              <span id="name-error" class="invalid-feedback" style="display: inline;">{{ $message }}</span>
        @enderror
        </div>
        <div class="form-group input-group mb-3">
          <input type="password" class="form-control" name="password_confirm" id="password_confirm"  placeholder="*Nhập lại mật khẩu" maxlength="30" minlength="6" required >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password_confirm')
              <span id="name-error" class="invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
        </div>
        <div class="form-group input-group mb-3">
          <input type="number" class="form-control" name="phone" id="phone" placeholder="*Số điện thoại"  minlength="10" maxlength="13" required >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
          @error('phone')
              <span id="name-error" class="invalid-feedback" style="display: inline;">{{ $message }}</span>
        @enderror
        </div>
        <div class="form-group input-group mb-3">
          <input type="date" class="form-control birthday" name="birth_date" id="birthday" placeholder="*Ngày sinh" min="1990-01-01" max="2020-01-01" required >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-birthday-cake"></span>
            </div>
          </div>
          @error('birthday')
              <span id="name-error" class="invalid-feedback" style="display: inline;">{{ $message }}</span>
        @enderror
        </div>
        <div class="row">
          <div class="col-7">
            <div class="icheck-primary">
              <!-- <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label> -->
            </div>
          </div>
          <!-- /.col -->
          <div class="col-5">
            <button type="submit" class="btn btn-primary btn-block center">Đăng ký</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- HOẶC -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Tài khoản Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Tài khoản Google+
        </a>
      </div>

      <a href="{{ route('accounts.login') }}" class="text-center">Đã có tài khoản</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->


</body>
@stop
