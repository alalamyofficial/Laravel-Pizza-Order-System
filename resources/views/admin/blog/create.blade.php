@extends('admin.layout')
@section('content')

<form action="{{route('admin.blog.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Blog Title</label>
        <input type="text" name="title" class="form-control" placeholder="Enter Blog Title">
    </div>

    <div class="form-group">
        <label for="name">Blog Image</label>
        <input type="file" name="image" class="form-control">
    </div>


    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="body" class="form-control" cols="30" rows="10"></textarea>
    </div>


    <div>
        <button type="submit" class="mb-1 btn btn-pill btn-primary">
            <i class="mr-1 fa fa-star-o"></i> Submit
        </button>
    </div>
</form>


@endsection