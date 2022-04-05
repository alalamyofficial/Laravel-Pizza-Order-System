<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    public function show(){
        $plates = Menu::latest()->get();
        return view('admin.menu.show',compact('plates'));
    }

    public function create(){
        return view('admin.menu.create');
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
        return view('admin.menu.edit',compact('plate'));

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
        $plate->destroy($id);
        return redirect()->route('admin.plate.show');
 
    }
}
