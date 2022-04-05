@extends('site.body')
@section('content')


<div class="container">

    <div class="row justify-content-center">
        
        <div class="owl-item active mb-5" style="width: 1007px;"><div class="slider-item" style="background-image: url({{asset('site/images/bg_3.jpg')}});">
            <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate fadeInUp ftco-animated">
                        <h1 class="mb-3 mt-5 bread">Our Menu</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p>
                    </div>

                    </div>
                </div>
            </div>
        </div>


        
        <div class="container-wrap">
            <div class="row no-gutters d-flex">
                @foreach($plates as $plate)
                <div class="col-lg-4 d-flex ftco-animate p-3">
                    <div class="services-wrap d-flex">
                        <img width="210px" src="{{asset($plate->image)}}" alt="">
                        <div class="text p-4">
                            <h3>{{$plate->name}}</h3>
                            <p>{{Str::limit($plate->description,60)}} </p>
                            <p class="price"><span>$ {{$plate->price}}</span> 
                            <a href="{{route('add_to_cart', $plate->id)}}" 
                            class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>

</div> 



@endsection