@extends('admin.layout')
@section('content')

@include('admin.alert')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            
            <div class="d-flex">
                <h2 class="mr-5">Orders</h2>
                <a href="{{route('admin.order.create')}}" class="mb-1 btn btn-sm btn-success">
                    Add New
                </a>
            </div>

        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
  
                        <th scope="col">ID</th>
                        <th scope="col">Order Number</th>
                        <th scope="col">User</th>
                        <th scope="col">Grand Total</th>
                        <th scope="col">Status</th>
                        <th scope="col">Item Count</th>
                        <th scope="col">Paid</th>
                        <th scope="col">Payment Method</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    @foreach($orders as $order)
                    <tr>
                        <td scope="row">{{$loop->index+1}}</td>
                        <td>{{$order->order_number}}</td>
                        <td>{{$order->user->name}}</td>
                        <td>${{$order->grand_total}}</td>
                        <td>{{$order->status}}</td>
                        <td>{{$order->item_count}}</td>
                        <td>
                            @if($order->is_paid == 0)
                                <span class="mb-2 mr-2 badge badge-pill badge-success">
                                    Yes
                                </span>
                            @else
                            <span class="mb-2 mr-2 badge badge-pill badge-danger">
                                No
                            </span>
                            @endif   
                        </td>

                        <td>{{$order->payment_method}}</td>


                        <td>
                            <a href="{{route('admin.order.view',$order->id)}}" class="mb-1 btn btn-sm btn-primary">
                                View
                            </a>

                            <form action="{{route('admin.order.destroy',$order->id)}}" >
                            @csrf 
                            @method('delete')

                                <a href="{{route('admin.order.edit',$order->id)}}" class="mb-1 btn btn-sm btn-success">
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