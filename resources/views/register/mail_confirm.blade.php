@extends("template.master")
@section("content")

<div class="row">
<div class="col-md-3">

</div>
<div class="col-md-6 ">
            <div class="text-center mt-3">
                <h5>We have sent you an email on <span class="badge badge-secondary">{{session('email')}}</span> check it out to confirm your registration.</h5>
            </div>
            <p class="text-center"><span><a href="{{route('accueildpi')}}"><i class="fas fa-long-arrow-alt-left"></i> Go back to Home</a></span></p>
</div>
<div class="col-md-3 ">

</div>
</div>

  @include('partials/foot')
@endsection
