@extends('layout.secondary-navigation')


@section('items')
<section class="block">
                <div class="container">
                <h2>Search Results</h2>
                     <!--============ Items ======================================================================-->
                   @foreach($Posts as $Post)
                  {{--  @include('layout.search-post') --}}
                  <div class="items masonry grid-xl-4-items grid-lg-3-items grid-md-2-items">
                         <div class="item">
                             <div class="wrapper">
                             <div class="image">
                                    <h3>
                                        <a href="#" class="tag category">{{$Post->category}}</a>
                                        <a href="single-listing-1.html" class="title">{{$Post->title}}</a>
                                        <span class="tag">Offer</span>
                                    </h3>
                                   <a href="single-listing-1.html" class="image-wrapper background-image">
                                                {{-- <img src="{{ asset('images/posts'.$post->filename) }}" alt=""> --}}
                                                @php $images = json_decode($Post->filename,true); @endphp
                                                 @if(is_array($images) && !empty($images))
                                      
                                             <img src="{{ asset('images/posts/'.$images[0]) }}" alt="" >

                                            @endif
                                            </a>
                                </div>
                                <!--end image-->
                                <h4 class="location">
                                    <a href="#">{{$Post->location}}</a>
                                </h4>
                                <div class="price">${{$Post->price}}</div>
                                <div class="meta">
                                    <figure>
                                        <i class="fa fa-calendar-o"></i>{{$Post->created_at}}
                                    </figure>
                                    
                                </div>
                                <!--end meta-->
                                <div class="description">
                                    <p>{{$Post->description}}</p>
                                </div>
                                <!--end description-->
                              <a href="{{route('cart.edit',$Post->id)}}" class="detail text-caps underline">Add to Cart</a>
                             </div>
                         </div>
                     </div>
                   @endforeach
                    <!--============ End Items ======================================================================-->
                   {{--  <div class="center">
                        <a href="#" class="btn btn-primary btn-framed btn-rounded">Load More</a>
                    </div> --}}
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content--> 

@endsection
















