<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ThemeStarz">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/selectize.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/user.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" type="text/css">
	<title>Craigs - Easy Buy & Sell Listing HTML Template</title>

</head>
<body>
    <div class="page home-page">
        <!--*********************************************************************************************************-->
        <!--************ HERO ***************************************************************************************-->
        <!--*********************************************************************************************************-->
        <header class="hero">
            <div class="hero-wrapper">
                <!--============ Secondary Navigation ===============================================================-->
                <div class="secondary-navigation">
                
                    <!--end container-->
                   @yield('secondary-navigation')
                </div>
                <!--============ End Secondary Navigation ===========================================================-->
                <!--============ Main Navigation ====================================================================-->
               @yield('main-navigation')
                <!--============ End Main Navigation ================================================================-->
                <!--============ Page Title =========================================================================-->
                @yield('page-title')
                <!--============ End Page Title =====================================================================-->
                <!--============ Hero Form ==========================================================================-->
                @yield('hero-form')
                <!--============ End Hero Form ======================================================================-->
                <div class="background">
                    <div class="background-image original-size">
                        <img src="{{asset('assets/img/hero-background-image-03.jpg')}}" alt="">
                    </div>
                    <!--end background-image-->
                </div>
                <!--end background-->
            </div>
            <!--end hero-wrapper-->
        </header>
        <!--end hero-->
             @yield('items')
        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
          {{--  @yield('footer') --}}
         @section('footer')
         @show

    </div>
    <!--end page-->

	<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
    <!--<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>-->
	<script src="{{asset('assets/js/selectize.min.js')}}"></script>
	<script src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
	<script src="{{asset('assets/js/icheck.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
	<script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript">


$(document).ready(function() {

  $(".btn-success").click(function(){ 
      var html = $(".clone").html();
      $(".increment").after(html);
  });

  $("body").on("click",".btn-danger",function(){ 
      $(this).parents(".control-group").remove();
  });

});

 
</script>
</body>
</html>
