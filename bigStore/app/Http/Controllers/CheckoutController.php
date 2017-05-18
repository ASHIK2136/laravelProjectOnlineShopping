<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;
use App\shipping;
use App\payment;
use App\order;
use App\orderDetails;
use Cart;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('frontEnd.checkout.showCheckoutForm');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCustomer(Request $request)
    {
        $customer = new Customer();
        $customer->firstName=$request->firstName;
        $customer->lastName=$request->lastName;
        $customer->emailAddress=$request->emailAddress;
        $customer->password= bcrypt($request->password);
        $customer->address=$request->address;
        $customer->phoneNumber=$request->phoneNumber;
        $customer->districtName=$request->districtName;
        $customer->save();
        Session::put('customerId',$customer->id);
        return redirect('/shippingInfo');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showShippingForm()
    {
        $customerId=Session::get('customerId'); 
        $customerById=Customer::find($customerId);
       return view('frontEnd.checkout.showShippingForm',['customerById'=>$customerById]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function saveShippingInfo(Request $request)
    {
        $shipping = new Shipping();
        $shipping->fullName=$request->fullName;
        $shipping->emailAddress=$request->emailAddress;
        $shipping->address=$request->address;
        $shipping->phoneNumber=$request->phoneNumber;
        $shipping->districtName=$request->districtName;
        $shipping->save();
        Session::put('shippingId',$shipping->id);
        return redirect('/paymentInfo');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function showPaymentForm()
    {
       return view('frontEnd.checkout.showPaymentForm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function saveOrderInfo(Request $request)
    {
        $paymentType = $request->paymentType;
        if($paymentType =='cashOnDelivery'){
            $order = new order();
            $order->customerId=Session::get('customerId');
            $order->shippingId=Session::get('shippingId');
            $order->orderTotal=Session::get('orderTotal');
            $order->save();
            Session::put('orderId',$order->id);
            $payment = new payment();
            $payment->orderId=Session::get('orderId');
            $payment->paymentType=$request->paymentType;
            $payment->save();
            
           
           $cartProducts = Cart::content();
           foreach ($cartProducts as $cartProduct){
                $orderDetails = new orderDetails();
                $orderDetails->orderId=Session::get('orderId'); 
                $orderDetails->productId=$cartProduct->id; 
                $orderDetails->productName=$cartProduct->name; 
                $orderDetails->productPrice=$cartProduct->price; 
                $orderDetails->productQuantity=$cartProduct->qty; 
                $orderDetails->save();
           }
              return redirect('/myHome'); 
            
        }elseif ($paymentType=='paypel') {
            
        }elseif ($paymentType=='Bkash') {
            
        }
    }
    public function customerHome(){
        return view('frontEnd.checkout.customerHome');
    }
}
