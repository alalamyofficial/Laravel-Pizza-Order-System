@extends('site.body')
@section('content')

    <section class="home-slider owl-carousel img" style="background-image: url({{asset('site/images/bg_1.jpg')}});">
      <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 ftco-animate">
            	<span class="subheading">Delicious</span>
              <h1 class="mb-4">Italian Cuizine</h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="{{asset('site/images/bg_1.png')}}" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
            	<span class="subheading">Crunchy</span>
              <h1 class="mb-4">Italian Pizza</h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="{{asset('site/images/bg_2.png')}}" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url({{asset('site/images/bg_3.jpg')}});">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Welcome</span>
              <h1 class="mb-4">We cooked your desired Pizza Recipe</h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>000 (123) 456 7890</h3>
	    						<p>A small river named Duden flows</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>198 West 21th Street</h3>
	    						<p>Suite 721 New York NY 10016</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Open Monday-Friday</h3>
	    						<p>8:00am - 9:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="social d-md-flex pl-md-5 p-4 align-items-center">
	    			<ul class="social-icon">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url({{asset('site/images/about.jpg')}});"></div>
    	<div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4">Welcome to <span class="flaticon-pizza">Pizza</span> A Restaurant</h2>
        </div>
        <div>
  				<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn???t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
  			</div>
    	</div>
    </section>

    <section class="ftco-section ftco-services">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Services</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Healthy Foods</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-bicycle"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Fastest Delivery</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
              <div class="media-body">
                <h3 class="heading">Original Recipes</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Hot Pizza Meals</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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

    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Our Menu Pricing</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{asset('site/images/pizza-1.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Italian Pizza</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
        			</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{asset('site/images/pizza-2.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Hawaiian Pizza</span></h3>
	        				<span class="price">$29.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{asset('site/images/pizza-3.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Greek Pizza</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{asset('site/images/pizza-4.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Bacon Crispy Thins</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        	</div>

        	<div class="col-md-6">
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{asset('site/images/pizza-5.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Hawaiian Special</span></h3>
	        				<span class="price">$49.91</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{asset('site/images/pizza-6.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Ultimate Overload</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{asset('site/images/pizza-7.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Bacon Pizza</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{asset('site/images/pizza-8.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Ham &amp; Pineapple</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        	</div>
        </div>
    	</div>
    </section>

    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url({{asset('site/images/gallery-1.jpg')}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url({{asset('site/images/gallery-2.jpg')}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url({{asset('site/images/gallery-3.jpg')}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url({{asset('site/images/gallery-4.jpg')}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>


	<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url({{asset('site/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-pizza-1"></span></div>
		              	<strong class="number" data-number="100">0</strong>
		              	<span>Pizza Branches</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-medal"></span></div>
		              	<strong class="number" data-number="85">0</strong>
		              	<span>Number of Awards</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-laugh"></span></div>
		              	<strong class="number" data-number="10567">0</strong>
		              	<span>Happy Customer</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-chef"></span></div>
		              	<strong class="number" data-number="900">0</strong>
		              	<span>Staff</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>

    <section class="ftco-menu">
    	<div class="container-fluid">
    		<div class="row d-md-flex">
	    		<div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url({{asset('site/images/about.jpg')}});">
	    		</div>
	    		<div class="col-lg-8 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Pizza</a>

		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Drinks</a>

		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Burgers</a>

		              <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Pasta</a>
		            </div>
		          </div>

		        </div>
		      </div>
		    </div>
    	</div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Recent from blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row d-flex">
	      @foreach($blogs as $blog)		
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" 
			  		class="block-20" 
				  style="background-image: url('{{asset($blog->image)}}');">
              </a>
              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a>{{$blog->created_at->diffForHumans()}}</a></div>
                </div>
                <h3 class="heading mt-2"><a>{{$blog->title}}</a></h3>
                <p>{{Str::limit($blog->body,40)}}</p>
              </div>
            </div>
          </div>
		  @endforeach
        </div>
      </div>
    </section>

		
	<section class="ftco-appointment">
	
    	<div class="container-fluid mt-5 mb-5">
			<div class="row justify-content-center">
				<div class="row no-gutters d-md-flex align-items-center">
					<form action="{{route('send_mail')}}" method="post" class="contact-form">
					@csrf
						<div class="row">
							<div class="col-md-6">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Your Name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Your Email">
							</div>
							</div>
						</div>
						<div class="form-group">
							<input type="text" name="subject" class="form-control" placeholder="Subject">
						</div>
						<div class="form-group">
							<textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
						</div>
					</form>
				</div>
			</div>
    	</div>
    </section>




@endsection