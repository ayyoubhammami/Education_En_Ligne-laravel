@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> connexion</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/admin/adminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admin/adminLTE/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/admin/adminLTE/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin/adminLTE/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/admin/adminLTE/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page ">
  <body style=" background-image:url(/images/bkg.jpg); background-size: 2000px; background-repeat: no-repeat;">
    <div class="container">
    <div class="" style=" margin-top:100px ;width:1200px; height:200px ;">
      <div class="" style=" margin left:100px; width:1200px; height:200px ;">     
        <div class="col-md-6 pul-left";>
          <div class="card" style=" color: #FFF;background-color: rgba(0, 0, 0, 0.22);">
            <div class="card-header">{{ __('Login') }}</div>
              <div class="card-body col-lg-offset-1" style="margin-bottom: 20px;">
                <div class="social-auth-links col-md-10 col-lg-10  ">
                  
                      
                </div> 
               
                    <form method="POST" action="{{ route('login') }}" class="col-md-10 col-lg-10">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Adreese mail') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                  @if($errors->has('email'))
                                  <p style="color: red;"> {{ $errors->first('email') }}</p>

                                  @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right ">{{ __('mot de passe') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                 @if($errors->has('password'))
                                  <p style="color: red;"> {{ $errors->first('password') }}</p>

                                  @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('connexion') }}
                                </button>
                                                 
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Mot de passe oublié?') }}
                                </a>
            
                            </div>
                        </div>
                    </form>
                </div>
            </div>
             <!-- /.social-auth-links -->
        </div>
  <!-- /.login-box-body -->
        <div class="col-md-4  col-md-offset-1 pul-right">
            <div class="">
                <div class="" style="margin-left:10px; width:300px; height:380px;margin-top:13px;">
                  <div>
                    <div class="form-group row mb-0"  style=" margin-left:8; width:370px; height:380px;margin-top:13px;">
                      <div class="col-md-8 offset-md-2">
                        <div class="login-logo col-lg-12">
                          <div class="login-logo col-lg-10">
          
                            <img src="/utilisateur/img/logo.png" style="width: 250px; align_right:300px;">
                             <div style="color:#ffffff;">
                               <h3> Register dans WecodeLAND </h3>
                             </div>
                              <div class=" col-md-8 offset-md-3">
                               <a class="btn btn-primary Text-center"  href="/inscription"  style=" width:110px; height:55px;">
                                   <h4 style="color:#ffffff;"> S'inscrire</h4>
                                </a><br>
                              </div>
                          </div>
                        </div>
                     </div>
                   </div>
               </div>
            </div>
        </div>
      </div>
  </div>


<!-- /.login-box -->
<!-- jQuery 3 -->
<script src="/admin/adminLTE//bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/admin/adminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/admin/adminLTE/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
    
@endsection
