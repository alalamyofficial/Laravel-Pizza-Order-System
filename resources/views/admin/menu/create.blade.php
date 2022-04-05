@extends('admin.layout')
@section('content')

<form action="{{route('admin.order.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Plate Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Plate Name">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image" id="">
    </div>

    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" name="price" class="form-control" placeholder="$">
    </div>

    <label class="control control-checkbox">Publish
        <input type="checkbox" name="is_published">
        <div class="control-indicator"></div>
    </label>

    <div>
        <button type="submit" class="mb-1 btn btn-pill btn-primary">
            <i class="mr-1 fa fa-star-o"></i> Submit
        </button>
    </div>
</form>


@endsection