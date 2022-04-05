<?php

namespace App\Http\Controllers;

use Cart;
use App\Menu;
use App\Coupon;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Menu $menu){

        \Cart::session(auth()->user()->id)->add(array(
            // 'id' => uniqid($product->id),
            'id' => $menu->id,
            'name' => $menu->name,
            'price' => $menu->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $menu
        ));

        return redirect()->route('cart.index');

    }

    public function index(){
        $cartItems = \Cart::session(auth()->user()->id)->getContent();
        return view('site.cart.index',compact('cartItems'));
    }

    public function checkout(){
        
        return view('site.cart.checkout');
    }

    public function update($rowId){

        \Cart::session(auth()->user()->id)->update($rowId,[
            'quantity' => 
                    array(
                        'relative' => false,
                        'value' => request('quantity')
                    ),
        ]);
        return back();
    }

    public function applyCoupon()
    {
        $couponCode = request('coupon_code');

        $couponData = Coupon::where('code', $couponCode)->first();

        if(!$couponData) {
            return back()->withMessage('Sorry! Coupon does not exist');
        }

        //coupon logic
        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => $couponData->name,
            'type' => $couponData->type,
            'target' => 'total',
            'value' => $couponData->value,
        ));

        Cart::session(auth()->id())->condition($condition); // for a speicifc user's cart


        return back()->withMessage('coupon applied');

    }

    public function destroy($itemId){
        \Cart::session(auth()->user()->id)->remove($itemId);
        return back();
    }

}
