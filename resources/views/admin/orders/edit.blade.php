@extends('admin.layout')
@section('content')

<form action="{{route('admin.plate.update',$plate->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="form-group">
        <label for="name">Plate Name</label>
        <input type="text" name="name" class="form-control" value="{{$plate->name}}" placeholder="Enter Plate Name">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" 
        cols="30" rows="10">{{$plate->description}}</textarea>
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image" id="">
    </div>

    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" value="{{$plate->price}}" name="price" class="form-control" placeholder="$">
    </div>

    <label class="control control-checkbox">Publish
        @if($plate->is_published == 1)
            <input type="checkbox" name="is_published" checked="checked">
        @else
            <input type="checkbox" name="is_published">
        @endif       

        <div class="control-indicator"></div>
    </label>

    <div>
        <button type="submit" class="mb-1 btn btn-pill btn-success">
            <i class="mr-1 fa fa-star-o"></i> Update
        </button>
    </div>
</form>


@endsection