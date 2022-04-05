@extends('site.body')
@section('content')


<div class="container">

    <div class="row justify-content-center">

    <div class="mt-5 mb-5 col-md-6 ftco-animate fadeInUp ftco-animated">
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



@endsection