@extends("template.masterother")
@section("content")

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

              <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('images/bannieres/terms_of_use.jpg')}}" alt="First slide">
                <div class="carousel-caption d-md-block">
                  <span style="font-size:50px;">TERMS OF USE </span>
                </div>
              </div>
</div>
  
<div class="container mt-5">
    {!!$page->description!!}
</div>

<footer>
    @include('partials/foot')
</footer>
@endsection