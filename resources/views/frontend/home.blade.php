@extends('layout.frontend')

@section('items')
<section class="content">
            <section class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <nav class="nav flex-column side-nav">
                                <a class="nav-link icon" href="{{route('profile')}}">
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
                            <!--============ Section Title===================================================================-->
                            <div class="section-title clearfix">
                                <div class="float-left float-xs-none">
                                    <a href="{{route('main')}}">Continue Shopping</a>
                              

                                </div>
                                <div class="float-right d-xs-none thumbnail-toggle">
                                    <a href="#" class="change-class" data-change-from-class="list" data-change-to-class="grid" data-parent-class="items">
                                        <i class="fa fa-th"></i>
                                    </a>
                                    <a href="#" class="change-class active" data-change-from-class="grid" data-change-to-class="list" data-parent-class="items">
                                        <i class="fa fa-th-list"></i>
                                    </a>
                                </div>
                            </div>
                            <!--============ Items ==========================================================================-->
                            <div class="items list compact grid-xl-3-items grid-lg-2-items grid-md-2-items">
                           {{--  @foreach( $posts as $post) --}}
                            
                             {{--   @include('merchant.layouts.post') --}}

                    
                           {{--   @endforeach --}}
                            <!--end items-->
                        </div>
                        <!--end col-md-9-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>

@endsection