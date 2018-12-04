@extends('layout.secondary-navigation')
@section('items')

<div class="container">
<div class="box">
            <div class="box-header">
              <a  href="{{route('main')}}">
<button style="margin-left:750px" class="btn-primary">Continue Shopping</button></a>
              <h3 class="box-title">cart items Details </h3>
            </div>
            <!-- /.box-header -->
            <br>
            
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">price</th>
      <th scope="col">qty</th>
      <th scope="col">size</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
         @foreach ($cartitems as $cart)    
    <tr>
 
      <td>{{$cart->name}}</td>
      <td>{{$cart->price}}</td>
      <td width="75px">
      	<form action="{{ route('cart.update',$cart->rowId)}}" method="post">
	{{csrf_field()}}
	 {{method_field('Put')}}
  <fieldset>
  
  	<div class="form-group">
  		<input type="number" class="form-control" name="qty" value={{$cart->qty}} >
  	</div>
  	<input type="submit" name="submit" value="ok">
  </fieldset>

</form>
      	</td>

      <td>{{$cart->options->has('size')?$cart->options->size:''}}</td>

    
<td>



<form id="delete-form-{{$cart->rowId}}" method="post" action="{{route('cart.destroy',$cart->rowId)}}" style="display: none;">
                      {{csrf_field()}}
                      {{method_field('Delete')}}
                    </form>

                    <a onclick="
                    if(confirm('You are about to delete'))
                      {
                        event.preventDefault(); document.getElementById('delete-form-{{$cart->rowId}}').submit();
                      }
                      else
                        {
                          event.preventDefault();
                        }" class="btn btn-primary">Delete
                       
                     </a>
	
</td>

    </tr>
        @endforeach
  <tr>
  	<td></td>

  	<td>
  		Tax:&nbsp  $ {{Cart::tax()}}<br>
  		Sub Total:&nbsp  $ {{Cart::subtotal()}}<br>
  	    Grand Total:&nbsp $ {{Cart::total()}}
  </td>
  	<td>Total Items:{{Cart::count()}}</td>
  	<td></td>
  	<td></td>


  </tr>

  </tbody>



</table>

<a  href="{{route('checkout')}}">
<button style="margin-left:950px" class="btn-primary">Checkout</button></a>



    </div>
 </div>

@endsection

