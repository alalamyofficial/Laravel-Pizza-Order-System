<?php

namespace App\Http\Controllers\Admin;

use App\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CouponController extends Controller
{
    public function create(){

        $coupons = Coupon::latest()->get(); 
        return view('admin.coupon.create',compact('coupons'));

    }

    public function store(Request $request){

        $this->validate($request,[

            'name' => 'required',
            'code' => 'required',
            'type' => 'required',
            'value' => 'required',
            'description' => 'required',

        ]);

        $coupoun = Coupon::create([

            'name' => $request->name,
            'code' => $request->code,
            'type' => $request->type,
            'value' => $request->value,
            'description' => $request->description,

        ]);

        $coupoun->save();
        return back();

    }

    public function show(){
        $coupons = Coupon::latest()->get(); 

        return view('admin.coupon.show',compact('coupons'));

    }


    public function edit($id){

        $coupon = Coupon::find($id);

        return view('admin.coupon.edit',compact('coupon'));

    }

    public function update(Request $request,$id){

        $this->validate($request,[

            'name' => 'required',
            'code' => 'required',
            'type' => 'required',
            'value' => 'required',
            'description' => 'required',

        ]);

        $coupoun = Coupon::find($id);


        $coupoun_update = [

            'name' => $request->name,
            'code' => $request->code,
            'type' => $request->type,
            'value' => $request->value,
            'description' => $request->description,

        ];

        $coupoun->update($coupoun_update);

        return back();

    }

    public function destroy($id){

        $coupoun = Coupon::find($id);

        $coupon->destroy($id);

        return back();

    }
}
