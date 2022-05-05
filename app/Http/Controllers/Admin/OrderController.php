<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function show(){
        $orders = Order::latest()->get();

        if(Auth::user()->role_as == 1){
            return view('admin.orders.show',compact('orders'));
        }else{
            abort(404);
        }    
    }

    public function create(){
        if(Auth::user()->role_as == 1){
            return view('admin.orders.create');
        }else{
            abort(404);
        }    
    }

    public function store(Request $request){

        $request->validate([
            'shipping_fullname' => 'required',
            'shipping_state' => 'required',
            'shipping_city' => 'required',
            'shipping_address' => 'required',
            'shipping_phone' => 'required',
            'shipping_zipcode' => 'required',
            'payment_method' => 'required',
        ]);



        $order = new Order();

        $order->order_number = uniqid('OrderNumber-');

        $order->shipping_fullname = $request->input('shipping_fullname');
        $order->shipping_state = $request->input('shipping_state');
        $order->shipping_city = $request->input('shipping_city');
        $order->shipping_address = $request->input('shipping_address');
        $order->shipping_phone = $request->input('shipping_phone');
        $order->shipping_zipcode = $request->input('shipping_zipcode');

        if(!$request->has('billing_fullname')) {
            $order->billing_fullname = $request->input('shipping_fullname');
            $order->billing_state = $request->input('shipping_state');
            $order->billing_city = $request->input('shipping_city');
            $order->billing_address = $request->input('shipping_address');
            $order->billing_phone = $request->input('shipping_phone');
            $order->billing_zipcode = $request->input('shipping_zipcode');
        }else {
            $order->billing_fullname = $request->input('billing_fullname');
            $order->billing_state = $request->input('billing_state');
            $order->billing_city = $request->input('billing_city');
            $order->billing_address = $request->input('billing_address');
            $order->billing_phone = $request->input('billing_phone');
            $order->billing_zipcode = $request->input('billing_zipcode');
        }

        $order->grand_total = $request->grand_total;
        $order->item_count = $request->item_count;

        $order->user_id = auth()->id();


        if (request('payment_method') == 'paypal') {
            $order->payment_method = 'paypal';
        }

        $order->save();
        return redirect()
                    ->route('admin.plate.show')
                    ->with('message','Order Created Successfully');

    }

    public function edit($id){

        $order = Order::find($id);

        if(Auth::user()->role_as == 1){
            return view('admin.orders.edit',compact('order'));
        }else{
            abort(404);
        }    

    }

    public function update(Request $request , $id){

        $order = Order::find($id);        

        $request->validate([
            'shipping_fullname' => 'required',
            'shipping_state' => 'required',
            'shipping_city' => 'required',
            'shipping_address' => 'required',
            'shipping_phone' => 'required',
            'shipping_zipcode' => 'required',
            'payment_method' => 'required',
        ]);


        $image = $request->file('image');
        $new_image = time().$image->getClientOriginalName();
        $image->move('public/uploads/posts',$new_image);

        $update_menu = [

            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            "image"  => 'public/uploads/posts/'.$new_image,
            'is_published' => $request->input('is_published') ? true : false
        ];
        
        $plate->update($update_menu);
        $plate->save();

        return redirect()
                        ->route('admin.orders.show')
                        ->with('message','Order Updated Successfully');

    }

    public function destroy($id){

        $order = Order::find($id); 

        if(Auth::user()->role_as == 1){
            $order->destroy($id);
            return redirect()
                        ->route('admin.orders.show')
                        ->with('message','Order Deleted Successfully');
        }else{
            abort(404);
        }    
 
    }

    public function view($id){

        $order = Order::find($id); 

        if(Auth::user()->role_as == 1){
            return view('admin.orders.order',compact('order'));
        }else{
            abort(404);
        }    
    }
}
