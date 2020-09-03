<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <link rel="icon" href="{{asset('public/images/admin/logo/tt_favicon.png')}}" type="image/png">
  <base href="{{ asset('public/admin') }}/">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
  @yield('content')
<!-- jQuery -->

<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="js/admin-js.js"></script>
<script src="js/bootstrap-validate.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  
  $('#registration').validate({
    rules: {
      email: {
        required: true,
        
      },
      name: {
        required: true,
        minlength: 2
      },
      password: {
        required: true,
        minlength: 6
      },
      password_confirm: {
        required: true,
        equalTo: "#password"
      },
      phone: {
        required: true,
        number: true
      },
      birthday: {
        required: true,
      }
    },
    messages: {
      email: {
        required: "Vui lòng nhập email vào",
      },
      name: {
        required: "Vui lòng nhập tên vào",
        minlength: "Tên quá ngắn",
      },
      password: {
        required: "Vui lòng nhập mật khẩu vào",
        minlength: "Mật khẩu quá ngắn"
      },
      password_confirm: {
        required: "Vui lòng nhập nật khẩu vào",
        equalTo: "Mật khẩu không trùng",
      },
      phone: {
        required: "Vui lòng nhập số điện thoại vào",
        number: " Vui lòng nhập kiểu số"
      },
      birthday: {
        required: "Vui lòng nhập ngày sinh vào"
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
</html>