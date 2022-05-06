@extends('admin.layout')
@section('content')

<form class="text-warning" action="{{route('admin.order.update',$order->id)}}" method="post">
    @csrf
    @method('patch')

    <div class="form-group">
        <label for="">Full Name</label>
        <input type="text" name="shipping_fullname" 
                value="{{$order->shipping_fullname}}"   
                class="form-control">
    </div>

    <div class="form-group">
        <label for="">State</label>
        <input type="text" name="shipping_state"  
                    value="{{$order->shipping_state}}"
                    class="form-control">
    </div>

    <div class="form-group">
        <label for="">City</label>
        <input type="text" name="shipping_city"  
                value="{{$order->shipping_city}}"
                class="form-control">
    </div>

    <div class="form-group">
        <label for="">Zip</label>
        <input type="number" name="shipping_zipcode"  
                value="{{$order->shipping_zipcode}}"
                class="form-control">
    </div>

    <div class="form-group">
        <label for="">Full Address</label>
        <input type="text" name="shipping_address"  
                value="{{$order->shipping_address}}"
                class="form-control">
    </div>

    <div class="form-group">
        <label for="">Mobile</label>
        <input type="text" name="shipping_phone"  
                value="{{$order->shipping_phone}}"
                class="form-control">
    </div>


    <div class="form-group">
        <label for="">Status</label>
        <select name="state" class="form-control">
            <option value="pending" selected="selected">Pending</option>
            <option value="processing">Processing</option>
            <option value="completed">Completed</option>
            <option value="decline">Decline</option>
        </select>
    </div>


    <div class="form-group">
        <label for="">Payment Method</label>
        <select name="payment_method" class="form-control">
            <option value="cash_on_delivery" 
                    selected="selected">
                    Cash On Delivery
            </option>
            <option value="paypal">Paypal</option>
            <option value="stripe">Stripe</option>
            <option value="card">Card</option>
        </select>
     </div>   

     <div class="form-group">
        <label for="">Paid</label>
        <select name="is_paid" class="form-control">
            <option value="yes" selected="selected">Yes</option>
            <option value="no">No</option>

        </select>
     </div>  

     <div class="form-group">
        <label for="">Grand Total</label>
        <input type="number" name="grand_total"  
                value="{{$order->grand_total}}"
                class="form-control">
    </div>

    <div class="form-group">
        <label for="">Item Count</label>
        <input type="number" name="item_count"  
                value="{{$order->item_count}}"
                class="form-control">
    </div>


    <h4>Payment option</h4>

    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" checked class="form-check-input" name="payment_method" id="" value="cash_on_delivery">
            Cash on delivery

        </label>

    </div>

    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="payment_method" id="" value="paypal">
            Paypal
        </label>
    </div>


    <button type="submit" class="btn btn-primary mt-3">Update Order</button>


</form>


@endsection