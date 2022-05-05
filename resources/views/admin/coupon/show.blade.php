@extends('admin.layout')
@section('content')

@include('admin.alert')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            
            <div class="d-flex">
                <h2 class="mr-5">Coupons</h2>
                <a href="{{route('admin.coupon.create')}}" class="mb-1 btn btn-sm btn-success">
                    Add New
                </a>
            </div>

        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Code</th>
                        <th scope="col">Type</th>
                        <th scope="col">Value</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    @foreach($coupons as $coupon)
                    <tr>
                        <td scope="row">{{$loop->index+1}}</td>
                        <td>{{$coupon->name}}</td>
                        <td>{{$coupon->type}}</td>
                        <td>{{$coupon->code}}</td>
                        <td>{{$coupon->value}}</td>
                        <td>{{$coupon->description}}</td>

                        <td>
                            <form action="{{route('admin.coupon.destroy',$coupon->id)}}" >
                            @csrf 
                            @method('delete')

                                <a href="{{route('admin.coupon.edit',$coupon->id)}}" class="mb-1 btn btn-sm btn-success">
                                Edit
                                </a>
                                <button type="button" class="mb-1 btn btn-sm btn-danger">
                                Delete
                                </button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
 
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection