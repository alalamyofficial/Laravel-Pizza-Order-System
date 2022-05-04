<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function create(){

        if(Auth::user()->role_as == 1){
            return view('admin.blog.create');
        }else{
            abort(404);
        }

    }

    public function store(Request $request){

        $this->validate($request,[

            'title' => 'required',
            'body' => 'required',

        ]);

        $image = $request->file('image');
        $new_image = time().$image->getClientOriginalName();

        $blog = Blog::create([

            'title' => $request->title,
            'body' => $request->body,
            "image"  => 'public/uploads/posts/'.$new_image,
        ]);

        $image->move('public/uploads/posts',$new_image);
        $blog->save();

        return redirect()->route('admin.blog.show');

    }

    public function show(){
        $blogs = Blog::latest()->get(); 

        if(Auth::user()->role_as == 1){
            return view('admin.blog.show',compact('blogs'));
        }else{
            abort(404);
        }    
    }


    public function edit($id){

        $blog = Blog::find($id);

        if(Auth::user()->role_as == 1){
            return view('admin.blog.edit',compact('blog'));
        }else{
            abort(404);
        }    

    }

    public function update(Request $request,$id){

        $this->validate($request,[

            'title' => 'required',
            'body' => 'required',

        ]);

        $blog = Blog::find($id);
        
        $image = $request->file('image');
        $new_image = time().$image->getClientOriginalName();
        $image->move('public/uploads/posts',$new_image);

        $blog_update = [

            'title' => $request->title,
            'body' => $request->body,
            "image"  => 'public/uploads/posts/'.$new_image,

        ];

        $blog->update($blog_update);

        return back();

    }

    public function destroy($id){

        $blog = Blog::find($id);

        if(Auth::user()->role_as == 1){
            $blog->destroy($id);
        }else{
            abort(404);
        }    

        return back();

    }
}
