@extends('layout.secondary-navigation')

@section('page-title')
<div class="page-title">
                    <div class="container">
                        <h1 >MY Profile</h1>
                    </div>
                    <!--end container-->
                </div>
@endsection
@section('background')
<div class="background">
                    <div class="background-image original-size">
                        <img src="{{asset('public/assets/img/hero-background-image-03.jpg')}}" alt="">
                    </div>
                    <!--end background-image-->
                </div>
@endsection
@section('items')

       <section class="content">
            <section class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <nav class="nav flex-column side-nav">
                                <a class="nav-link active icon" href="{{route('profile')}}">
                                    <i class="fa fa-user"></i>My Profile
                                </a>
                             
                                  <a class="nav-link icon" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-sign-out"></i>

                                        {{ __('Logout') }}   
                                 </a>
                                 <form  id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                            </nav>
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-9">
                            <form class="form" class="row" method="POST" action="{{-- {{ route('profile.update',$merchant->id) }} --}}">
                            {{csrf_field()}}
                            {{ method_field('PUT') }}
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2>Personal Information</h2>
                                             <section >
                                                    <div class="form-group">
                                                        <label for="name" class="col-form-label required">Name</label>
                                                        <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" value="{{$user->name}}" required>
                                                    </div>
                                                  
                                                    <div class="form-group">
                                                        <label for="lastname" class="col-form-label required">lastname</label>
                                                        <input name="lastname" type="text" class="form-control" id="name" placeholder="lastname" value="{{$user->lastname}}" required>
                                                    </div>  
                                              </section>
                                            <section>
                                               <h2>Contact</h2>
                                                
                                               <!--end form-group-->
                                                 <div class="form-group">
                                                     <label for="email" class="col-form-label">Email</label>
                                                     <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" value="{{$user->email}}">
                                                 </div>
                                              <!--end form-group-->
                                            </section>                                       
                                    </div>
                                    <!--end col-md-8-->
                                    <div class="col-md-4">
                                        <div class="profile-image">
                                            <div class="image background-image">
                                                <img src="assets/img/author-09.jpg" alt="">
                                            </div>
                                            <div class="single-file-input">
                                                <input type="file" id="user_image" name="image">
                                                <div class="btn btn-framed btn-primary small">Upload a picture</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-md-3-->
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
@endsection
@section('footer')
<section class="footer">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <a href="#" class="brand">
                        <img src="{{asset('assets/img/logo.png')}}"alt="">
                    </a>
                    <p>
                        This is a task to qualify of Ecommerce project
                    </p>
                </div>
                <!--end col-md-5-->
                <div class="col-md-3">
                    <h2>Navigation</h2>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <nav>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
        
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <nav>
                                <ul class="list-unstyled">
                                   
                                    <li>
                                        <a href="{{route('register')}}">Register</a>
                                    </li>
                                    <li>
                                        <a href="{{route('login')}}">Sign In</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--end col-md-3-->
                <div class="col-md-4">
                    <h2>Contact</h2>
                    <address>
                        <figure>
                            Balaju<br>
                            Kathmandu, Nepal
                        </figure>
                        <br>
                        <strong>Email:</strong> <a href="#">suraj.adhikari80@gmail.com</a>
                        <br>
                        <strong>Facebook: </strong> Suraj jung Adhikary
                        <br>
                        <br>
                        <a href="contact.html" class="btn btn-primary text-caps btn-framed">Contact Us</a>
                    </address>
                </div>
                <!--end col-md-4-->
            </div>
            <!--end row-->
        </div>
        <div class="background">
            <div class="background-image original-size">
                <img src="{{asset('assets/img/footer-background-icons.jpg')}}" alt="">
            </div>
            <!--end background-image-->
        </div>
        <!--end background-->
    </div>
</section>
@endsection