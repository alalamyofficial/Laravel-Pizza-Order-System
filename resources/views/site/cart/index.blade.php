@extends('site.body')
@section('content')

<div class="container">

    <div class="row justify-content-center">
    
        <table class="table table-warning mt-5 mb-5">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Remove</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartItems as $item)
            <tr>
                <td scope="row">{{$item->name}}</td>
                <td>$ {{$item->price}}</td>
                <td>
                    <form method="get" action="{{route('cart.update',$item->id)}}">
                        <div class="d-flex">
                            <div class="mr-2">
                                <input name="quantity" value="{{$item->quantity}}" type="number">
                            </div>

                            <div class="">
                                <input class="button" 
                                value="save" type="submit">
                            </div>
                        </div>
                    </form>
                </td>

                <td class="product-remove">
                    <a href="{{route('cart.destroy',$item->id)}}">
                        <!-- <i class="pe-7s-close"></i> -->X
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    </div>

    <div class="coupon mb-5">
        <form action="{{route('cart.coupon')}}" method='get'>
            <input id="coupon_code" class="input-text" name="coupon_code" value=""
                placeholder="Coupon code" type="text" required>
            <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
        </form>                                
    </div>


    <div class="row ">
        <!-- <div class="col-md-5 ml-auto"> -->
            <div class="cart-page-total">
                <h2>Cart Totals</h2>
                <ul>
                    <li class="mr-3">Total <span>$ {{Cart::session(auth()->user()->id)->getTotal()}}</span></li>
                </ul>
                <a href="{{route('cart.checkout')}}">Proceed to checkout</a>
            </div>
        <!-- </div> -->
    </div>

</div>



@endsection