<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;
use App\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class CheckoutController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');

	}


    public function shipping()
    {
    	return view('frontend.shipout');
    }

    public function paymentproceed()
    {
    	return view('frontend.payment');
    }

     public function paypalsuccess(Request $request)
    {
    		$provider = new ExpressCheckout;
    		$token=$request->token;
    		$PayerID=$request->PayerID;
            $response = $provider->getExpressCheckoutDetails($token);
    	    $invoiceID=$response['INVNUM']??uniqid();
    		$data = $this->cartData($invoiceID);
    		$response = $provider->doExpressCheckoutPayment($data,$token,$PayerID);
    		//create order
    		Order::createOrder();
            
    		return view('frontend.paymentsuccess');
    }

    public function paywitpaypal()
    {
    	$provider = new ExpressCheckout;
    	$invoiceId=uniqid();
    	$data = $this->cartData($invoiceId);
    	$response = $provider->setExpressCheckout($data);
    	return redirect($response['paypal_link']);
    	 }

   protected function cartData($invoiceID)
{
	$data = [];
    $data['items'] = [];

foreach(Cart::content() as $key=>$cart)
{
   $itemDetail=
    [
        'name' => $cart->name,
        'price' => $cart->price,
        'qty' => $cart->qty
    ];
    $data['items'][]=$itemDetail;
    }
    $data['invoice_id'] = $invoiceID;
    $data['invoice_description'] = "Test invoice";
    $data['return_url'] = route('payment.paypalsuccess');
    $data['cancel_url'] = url('/test');
     $total = 0;
    foreach($data['items'] as $item) {
    	$total += $item['price']*$item['qty'];
    }

    $data['total'] = $total;

    return $data;
 }

   
}
