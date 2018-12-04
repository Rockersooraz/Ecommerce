@extends('admin.layout.app')

@section('main-section')

    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table Of Orders</h3>
            </div>
            <!-- /.box-header -->

            <ul>
            	@foreach ($orders as $order)
            		
            	<li>
            		<center>
            		<h3>Order By  {{$order->user->name}}</h3>
            		<h3>Total Price  {{$order->total}}</h3>
            	</center>
            	<form action="{{route('toogle.deliver',$order->id)}}" method="POST" style="margin-left: 850px" >
            		@csrf
            		<label>Delivered</label>
            		<input type="checkbox" name="delivered" value="1" {{$order->delivered==1?"checked":""}}>
            		<input type="submit" value="submit">
            		
            	</form>

            		
              <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>qty</th>
                  <th>Price</th>
                  <th>Status</th>

                </tr>
                </thead>
                @foreach($order->orderItems as $item)
                 <tbody>
                <tr>
                  <td>{{$item->title}}</td>
                  <td>{{$item->pivot->qty}}</td>
                  <td>{{$item->pivot->total}}</td>
                  <td>Paid</td>
                 
                 
                </tr>
            </tbody>
                 @endforeach
             
              </table>
            </div>
            <!-- /.box-body -->
      
            </li>
          @endforeach
</ul>


          </div>

          @endsection