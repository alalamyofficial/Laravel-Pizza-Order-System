<?php

namespace App\Http\Controllers\Admin;

use App\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CouponController extends Controller
{
    public function create(){

        $coupons = Coupon::latest()->get(); 

        if(Auth::user()->role_as == 1){
            return view('admin.coupon.create',compact('coupons'));
        }else{
            abort(404);
        }    

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
        return back()->with('message','Coupon Created Successfully');

    }

    public function show(){
        
        $coupons = Coupon::latest()->get(); 

        if(Auth::user()->role_as == 1){
            return view('admin.coupon.show',compact('coupons'));
        }else{
            abort(404);
        }    

    }


    public function edit($id){

        $coupon = Coupon::find($id);

        if(Auth::user()->role_as == 1){
            return view('admin.coupon.edit',compact('coupon'));
        }else{
            abort(404);
        }    

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

        return back()->with('message','Coupon Updated Successfully');

    }

    public function destroy($id){

        $coupoun = Coupon::find($id);

        if(Auth::user()->role_as == 1){
            $coupon->destroy($id);
        }else{
            abort(404);
        }    

        return back()->with('message','Coupon Deleted Successfully');

    }
}
