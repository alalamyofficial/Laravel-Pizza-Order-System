<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function show(){
        $plates = Menu::latest()->get();

        if(Auth::user()->role_as == 1){
            return view('admin.menu.show',compact('plates'));
        }else{
            abort(404);
        }    
    }

    public function create(){
        if(Auth::user()->role_as == 1){
            return view('admin.menu.create');
        }else{
            abort(404);
        }    
    }

    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'price' => 'required',
        ]);

        $image = $request->file('image');
        $new_image = time().$image->getClientOriginalName();

        $menu = Menu::create([

            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            "image"  => 'public/uploads/posts/'.$new_image,
            'is_published' => $request->input('is_published') ? true : false
        ]);
        
        $image->move('public/uploads/posts',$new_image);
        return redirect()->route('admin.plate.show');

    }

    public function edit($id){

        $plate = Menu::find($id);

        if(Auth::user()->role_as == 1){
            return view('admin.menu.edit',compact('plate'));
        }else{
            abort(404);
        }    

    }

    public function update(Request $request , $id){

        $plate = Menu::find($id);        

        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'price' => 'required',
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

        return redirect()->route('admin.plate.show');

    }

    public function destroy($id){

        $plate = Menu::find($id); 

        if(Auth::user()->role_as == 1){
            $plate->destroy($id);
        }else{
            abort(404);
        }    

        return redirect()->route('admin.plate.show');
 
    }
}
