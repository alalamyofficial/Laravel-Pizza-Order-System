@extends('admin.layout')
@section('content')

<form action="{{route('admin.blog.update',$blog->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
        <div class="form-group">
            <label for="name">Blog Title</label>
            <input type="text" name="title" value="{{$blog->title}}" class="form-control" placeholder="Enter Blog Title">
        </div>

        <div class="d-flex">
            <div class="form-group">
                <label for="name">Blog Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="rounded">
                <img class="mt-4 ml-2 rounded-circle" src="{{asset($blog->image)}}" width="100px" alt="">
            </div>
        </div>


        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="body" class="form-control" cols="30" rows="10">
                {{$blog->body}}
            </textarea>
        </div>


        <div>
            <button type="submit" class="mb-1 btn btn-pill btn-success">
                <i class="mr-1 fa fa-star-o"></i> Update
            </button>
        </div>
</form>


@endsection