<html>
  <head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading">Ecommerce Admin login </h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
   <p>Please enter your email and password</p>
   </div>
   <form id="Login" method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('Admin Login') }}">
    @csrf

        <div class="form-group">

            <input type="email" name="email" value="{{ old('email') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="inputEmail" placeholder="Email Address">
            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif

        </div>


        <div class="form-group">

            <input type="password" name="password"  id="inputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password">
         @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif

        </div>
        <div class="forgot">
        <a href="{{ route('admin.password.request') }}">  {{ __('Forgot Your Password?') }}</a>
</div>
        <button type="submit" class="btn btn-primary">  {{ __('Login') }}</button>

    </form>
    </div>
</div></div></div>


</body>
</html>
