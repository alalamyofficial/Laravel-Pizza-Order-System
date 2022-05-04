@extends('admin.layout')
@section('content')

<div class="container">
    <h2 class="mb-3">Order Details</h2>
</div>

<ul class="list-group">
    <div class="d-flex">
        <div>
            <li class="list-group-item text-dark">
                <div class="d-flex">
                    <h3 class="mb-2 text-dark">
                        <span class="badge badge-secondary ">Order Number</span>
                    </h3>
                    <span class="ml-3 mt-2">
                        {{$order->order_number}}
                    </span>
                </div>
            </li>
            <li class="list-group-item text-dark">
                <div class="d-flex">
                    <h3 class="mb-2 text-dark">
                        <span class="badge badge-secondary ">Username</span>
                    </h3>
                    <span class="ml-3 mt-2">
                        {{$order->user->name}}
                    </span>
                </div>
            </li>

            <li class="list-group-item text-dark">
                <div class="d-flex">
                    <h3 class="mb-2 text-dark">
                        <span class="badge badge-secondary ">Total Price</span>
                    </h3>
                    <span class="ml-3 mt-2">
                        ${{$order->grand_total}}
                    </span>
                </div>
            </li>
            <li class="list-group-item text-dark">
                <div class="d-flex">
                    <h3 class="mb-2 text-dark">
                        <span class="badge badge-secondary ">Status</span>
                    </h3>
                    <span class="ml-3 mt-2">
                        {{$order->status}}
                    </span>
                </div>
            </li>
            <li class="list-group-item text-dark">
                <div class="d-flex">
                    <h3 class="mb-2 text-dark">
                        <span class="badge badge-secondary ">Item Count</span>
                    </h3>
                    <span class="ml-3 mt-2">
                        {{$order->item_count}}
                    </span>
                </div>
            </li>

            <li class="list-group-item text-dark">
                <div class="d-flex">
                    <h3 class="mb-2 text-dark">
                        <span class="badge badge-secondary ">Payment Method</span>
                    </h3>
                    <span class="ml-3 mt-2">
                        {{$order->payment_method}}
                    </span>
                </div>
            </li>

            <li class="list-group-item text-dark">
                <div class="d-flex">
                    <h3 class="mb-2 text-dark">
                        <span class="badge badge-secondary ">Paid</span>
                    </h3>
                    <span class="ml-3 mt-2">
                        @if($order->is_paid == 1)
                            <span class="text-success">Yes</span>
                        @else
                            <span class="text-danger">No</span>
                        @endif        
                    </span>
                </div>
            </li>

            <li class="list-group-item text-dark">
                <div class="d-flex">
                    <h3 class="mb-2 text-dark">
                        <span class="badge badge-secondary ">Shipping User</span>
                    </h3>
                    <span class="ml-3 mt-2">
                        {{$order->shipping_fullname}}
                    </span>
                </div>
            </li>
            <li class="list-group-item text-dark">
                <div class="d-flex">
                    <h3 class="mb-2 text-dark">
                        <span class="badge badge-secondary ">Shipping Adress</span>
                    </h3>
                    <span class="ml-3 mt-2">
                        {{$order->shipping_address}}
                    </span>
                </div>
            </li>
            <li class="list-group-item text-dark">
                <div class="d-flex">
                    <h3 class="mb-2 text-dark">
                        <span class="badge badge-secondary ">Shipping City</span>
                    </h3>
                    <span class="ml-3 mt-2">
                        {{$order->shipping_city}}
                    </span>
                </div>
            </li>
            <li class="list-group-item text-dark">
                <div class="d-flex">
                    <h3 class="mb-2 text-dark">
                        <span class="badge badge-secondary ">Shipping State</span>
                    </h3>
                    <span class="ml-3 mt-2">
                        {{$order->shipping_state}}
                    </span>
                </div>
            </li>
            <li class="list-group-item text-dark">  
                <div class="d-flex">
                    <h3 class="mb-2 text-dark">
                        <span class="badge badge-secondary ">Shipping ZipCode</span>
                    </h3>
                    <span class="ml-3 mt-2">
                        {{$order->shipping_zipcode}}
                    </span>
                </div>
            </li>

            <li class="list-group-item text-dark">
                <div class="d-flex">
                    <h3 class="mb-2 text-dark">
                        <span class="badge badge-secondary ">Shipping Phone</span>
                    </h3>
                    <span class="ml-3 mt-2">
                        {{$order->shipping_phone}}
                    </span>
                </div>
            </li>
        </div>

        <div class="list-group mt-3 ml-5 mb-3">
            @foreach($order->items as $item)
            <div class="mb-3">
                <li class="list-group-item text-dark">
                    <div class="d-flex">
                        <h3 class="mb-2 text-dark">
                            <span class="badge badge-secondary ">Item Name</span>
                        </h3>
                        <span class="ml-3 mt-2">
                            {{$item->name}}
                        </span>
                    </div>
                </li>

                <li class="list-group-item text-dark">
                    <div class="d-flex">
                        <h3 class="mb-2 text-dark">
                            <span class="badge badge-secondary ">Item Image</span>
                        </h3>
                        <span class="ml-3 mt-2">
                            <img 
                                src="{{asset($item->image)}}" 
                                alt="{{$item->name}}"
                                width="150px"
                                class="img-thumbnail">
                        </span>
                    </div>
                </li>

                <li class="list-group-item text-dark">
                    <div class="d-flex">
                        <h3 class="mb-2 text-dark">
                            <span class="badge badge-secondary ">Item Price</span>
                        </h3>
                        <span class="ml-3 mt-2">
                            ${{$item->price}}
                        </span>
                    </div>
                </li>
            </div>

            @endforeach
        </div>
    </div>

</ul>


@endsection