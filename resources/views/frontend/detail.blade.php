@extends('layout.secondary-navigation')
@section('page-title')
<div class="page-title">
    <div class="container">
         <h1>Detail</h1>
    </div>
@endsection
@section('items')
<section class="content">
            <section class="block">
                <div class="container">
                    <div class="row">
                        <!--============ Listing Detail =============================================================-->
                        <div class="col-md-9">
                            <!--Gallery Carousel-->
                            <section>
                                <h1></h1>
                         <a href="{{route('main')}}" class="btn btn-primary text-caps btn-rounded btn-framed">Continue Shopping</a>
                                <h2>Gallery</h2>
                                <!--end section-title-->
                                <div class="gallery-carousel owl-carousel">
                                    @php $images = json_decode($post->filename,true); @endphp
                                      @if(is_array($images) && !empty($images))
                                         @foreach ($images as $image)
                                            <img src="{{ asset('/images/posts/'.$image) }}" alt="" data-hash="#">
                                          @endforeach
                                     @endif
                                </div>

                                <div class="gallery-carousel-thumbs owl-carousel">
                                @php $images = json_decode($post->filename,true); @endphp
                                      @if(is_array($images) && !empty($images))
                                         @foreach ($images as $image )
                                             <img src="{{ asset('/images/posts/'.$image) }}" alt="" >
                                          @endforeach 
                                     @endif  
                                </div>
                            </section>
                            <!--end Gallery Carousel-->
                            <!--Description-->
                            <section>
                                <h2>Description</h2> 
                                <p>
                                {{$post->description}}
                                </p>
                            </section>
                           
                
                           
                            <!--End Author-->
                        </div>
                        <!--============ End Listing Detail =========================================================-->
                        <!--============ Sidebar ====================================================================-->
                        <div class="col-md-3">
                            <aside class="sidebar">
                                <section>
                                    <h2>Product you may like</h2>
                                    <div class="items compact">
                                        @foreach ($randposts as $rand)
                                        <div class="item">
                                            <div class="ribbon-featured">Featured</div>
                                            <!--end ribbon-->
                                            <div class="wrapper">
                                                <div class="image">
                                                    <h3>
                                                        <a href="#" class="tag category">{{$rand->category}}</a>
                                                        <a href="single-listing-1.html" class="title">{{$rand->title}}</a>
                                                        <span class="tag">Offer</span>
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
                                                  
                                                </div>

                                <!--end description--> 
                                <br>
                                <br>
                                <a href="{{route('cart.edit',$rand->id)}}" class="detail text-caps underline">Add To Cart</a>
                                                <!--end meta-->
                                            </div>
                                            <!--end wrapper-->
                                        </div>
                                        <!--end item-->
                                        @endforeach

                                  

                                      
            </div>
        </section>
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



