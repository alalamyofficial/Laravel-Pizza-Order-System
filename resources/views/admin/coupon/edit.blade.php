@extends('admin.layout')
@section('content')

<form action="{{route('admin.coupon.update',$coupon->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="form-group">
        <label for="name">Coupon Name</label>
        <input type="text" value="{{$coupon->name}}" name="name" class="form-control" placeholder="Enter Plate Name">
    </div>

    <div class="form-group">
        <label for="name">Coupon Code</label>
        <input type="text" value="{{$coupon->code}}" name="code" class="form-control" placeholder="Enter Plate Name">
    </div>

    <div class="form-group">
        <label for="name">Coupon Type</label>
        <input type="text" value="{{$coupon->type}}" name="type" class="form-control" placeholder="Enter Plate Name">
    </div>

    <div class="form-group">
        <label for="price">Value</label>
        <input type="text" value="{{$coupon->value}}" name="value" class="form-control" placeholder="$">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" 
        cols="30" rows="10">
        {{$coupon->description}}
        </textarea>
    </div>


    <div>
        <button type="submit" class="mb-1 btn btn-pill btn-success">
            <i class="mr-1 fa fa-star-o"></i> Update
        </button>
    </div>
</form>


@endsection