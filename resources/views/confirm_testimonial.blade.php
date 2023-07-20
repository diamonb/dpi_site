@extends("template.master")
@section("content")

<div class="row">
<div class="col-md-3 side_1">

</div>
<div class="col-md-6  side_2">
            <div class="col text-center">
              <img src="{{asset('images/icons/icons_done.gif')}}" alt="">
            </div>
            
            <div class="text-center mt-3 ">
                <h1><span class="badge rounded-pill bg-success">Thank you for sharing your testimonial with us... </span></h1>
                <span><a href="{{route('accueildpi')}}"><i class="fas fa-long-arrow-alt-left"></i> Go back to Home</a></span>
            </div>

</div>
<div class="col-md-3 side_1">

</div>
</div>


  @include('partials/foot')
@endsection
