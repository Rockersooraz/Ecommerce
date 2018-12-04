@extends('layout.frontend')
@section('secondary-navigation')

@if(Auth::guard()->check())
<div class="container">
                        <ul class="left">
                            <li>
                            <span>
                                <i class="fa fa-phone"></i>9861584465
                            </span>
                            </li>
                        </ul>
                        <!--end left-->
                        <ul class="right">
                          {{--    <li>
                            <a href="{{route('profile')}}">
                            <i class="fa fa-user"></i> {{$user->name}}
                             </a>
                         </li> --}}
                         <a class="nav-link icon" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-sign-out"></i>

                                        {{ __('Logout') }}   
                                 </a>
                                 <form  id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                           
                             <li>
                                <a href="{{route('cart.index')}}">
                            <i class="fa fa-shopping-cart" aria-hidden="true">
                            </i>
                            CART
                            <span class="alert badge">
                                {{Cart::count()}}
                            </span>
                        </a>
                            </li>
                        </ul>
                        <!--end right-->
                    </div>
                    <!--end container-->
                @else

                <div class="container">
                        <ul class="left">
                            <li>
                            <span>
                                <i class="fa fa-phone"></i>9861584465
                            </span>
                            </li>
                        </ul>
                        <!--end left-->
                        <ul class="right">
                           
                            <li>
                                <a href="{{route('login')}}">
                                    <i class="fa fa-sign-in"></i>Sign In
                                </a>
                            </li>
                            <li>
                                <a href="{{route('register')}}">
                                    <i class="fa fa-pencil-square-o"></i>Register
                                </a>
                            </li>
                             <li>
                                <a href="{{route('cart.index')}}">
                            <i class="fa fa-shopping-cart" aria-hidden="true">
                            </i>
                            CART
                            <span class="alert badge">
                                {{Cart::count()}}
                            </span>
                        </a>
                            </li>
                        </ul>
                        <!--end right-->
                    </div>
                    <!--end container-->
                    @endif

@endsection