@extends('layout.frontend')
@section('secondary-navigation')

<div class="container">
                      
                        <!--end left-->
                        <ul class="right">
                         <a class="nav-link icon" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-sign-out"></i>

                                        {{ __('Logout') }}   
                                 </a>
                                 <form  id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
           
                        </ul>
                        <!--end right-->
                    </div>

@endsection
@section('items')

<center>
	<br>
	<h2>Status:paid</h2>
 <a href="{{route('main')}}" class="btn btn-primary text-caps btn-rounded btn-framed">Return to home</a>
	
<h1>Payment successful</h1>
	
</center>


@endsection