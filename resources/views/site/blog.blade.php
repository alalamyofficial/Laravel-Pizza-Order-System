@extends('site.body')
@section('content')

<section class="home-slider owl-carousel img" 
    style="background-image: url({{asset('site/images/bg_1.jpg')}});">

    <div class="slider-item" style="background-image: url({{asset('site/images/bg_3.jpg')}});">
        <div class="overlay"></div>
    <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

        <div class="col-md-7 col-sm-12 text-center ftco-animate">
            <h1 class="mb-3 mt-5 bread">Read our Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
        </div>

        </div>
    </div>
    </div>

</section>



<section class="ftco-section">
      <div class="container">
        <div class="row">
            @foreach($blogs as $blog)

            <div class="col-md-4">
              <div class="card mb-4 box-shadow" style="background-color:black">
                <img class="card-img-top " 
                 width="150px" src="{{asset($blog->image)}}" data-holder-rendered="true">
                <div class="card-body">
                  <h2 class="text">{{$blog->title}}</h2><br>
                  <p class="card-text">{{Str::limit($blog->body,60)}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    </div>
                    <small class="text-muted">{{$blog->created_at->diffForHumans()}}</small>
                  </div>
                </div>
              </div>
            </div>

            @endforeach
        </div>
      </div>
</section>      


@endsection