@extends('layout.secondary-navigation')

@section('page-title')
<div class="page-title">
                    <div class="container">
                        <h1 class="opacity-40 center">
                          Find</a> What You need
                        </h1>
                    </div>
                    <!--end container-->
                </div>
@endsection
@section('hero-form')
<form method='GET' action={{route('search')}} class="hero-form form">
                    <div class="container">
                        <!--Main Form-->
                        <div class="main-search-form">
                            <div class="form-row">
                                <div class="col-md-9 col-sm-9">
                                    <div class="form-group">
                                        <label for="what" class="col-form-label">What Are You Looking For?</label>
                                        <input name="value" type="text" class="form-control small" id="what" placeholder="What are you looking for?">
                                            <input hidden name="column" value="title">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-3-->
                                <div class="col-md-3 col-sm-3">
                                    <button type="submit" class="btn btn-primary width-100">Search</button>
                                </div>
                                <!--end col-md-3-->
                            </div>
                            <!--end form-row-->
                        </div>
                        <!--end main-search-form-->
                        <!--Alternative Form-->
                        <!--end alternative-search-form-->
                    </div>
                    <!--end container-->
                </form>
@endsection
@section('items')
<section class="content">
            <!--============ Featured Ads ===========================================================================-->
            <section class="block">
                <div class="container">
                    <h2>Featured Ads</h2>
                    <div class="items grid grid-xl-3-items grid-lg-3-items grid-md-2-items">
                       
                        @foreach ($randposts as $rand)
                           
                    
                        <div class="item">
                            <div class="wrapper">
                                <div class="image">
                                    <h3>
                                        <a href="#" class="tag category">{{$rand->category}}</a>
                                        <a href="single-listing-1.html" class="title">{{$rand->title}}</a>
                                        <span class="tag">Popular Products</span>
                                    </h3>
                                 <a href="single-listing-1.html" class="image-wrapper background-image">
                                                @php $images = json_decode($rand->filename,true); @endphp
                                                 @if(is_array($images) && !empty($images))
                                      
                                             <img src="{{ asset('images/posts/'.$images[0]) }}" alt="" >

                                            @endif
                                            </a>
                                </div>
                                <!--end image-->
                                <h4 class="location">
                                    <a href="#">{{$rand->location}}</a>
                                </h4>
                                <div class="price">${{$rand->price}}</div>
                                <div class="meta">
                                    <figure>
                                        <i class="fa fa-calendar-o"></i>{{$rand->created_at}}
                                    </figure>
                                     <figure>
                                        <a href="{{route('search.detail',$rand->id)}}">Detail</a>
                                    </figure>
                                 
                                </div>
                                <!--end meta-->
                                <div class="description">
                                    <p>{{$rand->description}}</p>
                                </div>
                                <!--end description--> 
                                <a href="{{route('cart.edit',$rand->id)}}" class="detail text-caps underline">Add To Cart</a>
                            </div>
                        </div>
                        <!--end item-->

                            @endforeach

                       

                    </div>
                </div>
            </section>
            <!--============ End Featured Ads =======================================================================-->
            <!--============ Features Steps =========================================================================-->
            <section class="block">
                <div class="container">
                    <div class="block">
                        <h2>Buying With Us Is Easy and Secure</h2>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="feature-box">
                                    <figure>
                                        <img src="{{asset('assets/icons/feature-user.png')}}"  alt="">
                                        <span>1</span>
                                    </figure>
                                    <h3>Create an Account</h3>
                                    <p>It's easy to register.Just fill the field and tap register required </p>
                                </div>
                                <!--end feature-box-->
                            </div>
                            <!--end col-->
                            <div class="col-md-3">
                                <div class="feature-box">
                                    <figure>
                                        <img src="assets/icons/feature-upload.png" alt="">
                                        <span>2</span>
                                    </figure>
                                    <h3>Add Product to Cart</h3>
                                    <p>Search the Product you want and add them to cart</p>
                                </div>
                                <!--end feature-box-->
                            </div>
                            <!--end col-->
                            <div class="col-md-3">
                                <div class="feature-box">
                                    <figure>
                                        <img src="assets/icons/feature-like.png" alt="">
                                        <span>3</span>
                                    </figure>
                                    <h3>Make secure Payment</h3>
                                    <p>Yes, you are safe and secure.We don't share your data</p>
                                </div>
                                <!--end feature-box-->
                            </div>
                            <!--end col-->
                            <div class="col-md-3">
                                <div class="feature-box">
                                    <figure>
                                        <img src="assets/icons/feature-wallet.png" alt="">
                                        <span>4</span>
                                    </figure>
                                    <h3>Enjoy the Product</h3>
                                    <p>We assure you the quality of product.Enjoy the product</p>
                                    
                                </div>
                                <!--end feature-box-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end block-->
                </div>
                <!--end container-->
                <div class="background" data-background-color="#fff"></div>
                <!--end background-->
            </section>
            <!--end block-->
            <!--============ End Features Steps =====================================================================-->
            <!--============ Recent Ads =============================================================================-->
            <section class="block">
                <div class="container">
                    <h2>Recent Ads</h2>
                    <div class="items grid grid-xl-4-items grid-lg-3-items grid-md-2-items">
                       
                       @foreach ($recentposts as $post)
                         

                        <div class="item">
                            <div class="wrapper">
                                <div class="image">
                                    <h3>
                                        <a href="#" class="tag category">{{$post->category}}</a>
                                        <a href="single-listing-1.html" class="title">{{$post->title}}</a>
                                        <span class="tag">Available</span>
                                    </h3>
                                    <a href="#" class="image-wrapper background-image">
                                       @php $images = json_decode($post->filename,true); @endphp
                                                 @if(is_array($images) && !empty($images))
                                      
                                             <img src="{{ asset('images/posts/'.$images[0]) }}" alt="" >

                                            @endif
                                    </a>
                                </div>
                                <!--end image-->
                                <h4 class="location">
                                    <a href="#">{{$post->location}}</a>
                                </h4>
                                <div class="price">{{$post->price}}</div>
                                <div class="meta">
                                    <figure>
                                        <i class="fa fa-calendar-o"></i>{{$post->created_at}}
                                    </figure>
                                     <figure>
                                        <a href="{{route('search.detail',$post->id)}}">Detail</a>
                                    </figure>
    
                                </div>
                                <!--end meta-->
                                <div class="description">
                                    <p>{{$post->description}}</p>
                                </div>
                            
                                <a href="{{route('cart.edit',$post->id)}}" class="detail text-caps underline">Add to cart</a>
                            </div>
                        </div>
                        <!--end item-->

                        @endforeach


                

                    </div>
                </div>
                <!--end container-->
            </section>
            <!--end block-->
            <!--============ End Recent Ads =========================================================================-->
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
                                        <a href="{{route('profile')}}">Home</a>
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


















