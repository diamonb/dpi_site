@extends("template.master_new")
@section("content")
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

              <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('images/bannieres/bnew.jpg')}}" alt="First slide">
                <div class="carousel-caption d-md-block">
                  <span style="font-size:50px;">DIELBNews</span>
                </div>
              </div>
</div>
  <div class="container">
    <br>
    <div class="row">
        <div class="col-lg-8">

        @foreach($news as $anews)
        <div class="row">
            <div class="d-flex">
                
                @if($anews->image_un!=null)
                <img class="d-block w-100" src="{{asset($anews->image_un)}}">
                @endif
                @if($anews->image_deux!=null)
                <img class="d-block w-100" src="{{asset($anews->image_deux)}}">
                @endif
                @if($anews->image_trois!=null)
                <img class="d-block w-100" src="{{asset($anews->image_trois)}}">
                @endif
            </div>
            <div>
                {!!$anews->description!!}
            </div>
        </div>
                
        @endforeach

        </div>
        
        <div class="col-lg-4 bg-gray">
            <div class="bg-dark text-white text-center">
                NEWS 
            </div>
            <br>
            <div class="row">
                <div class="col-md-4"><img class="d-block w-100" src="{{asset('images/gm.jpg')}}"></div>
                <div class="col-md-8">hello world!!</div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4"><img class="d-block w-100" src="{{asset('images/gm.jpg')}}"></div>
                <div class="col-md-8">hello world!!</div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4"><img class="d-block w-100" src="{{asset('images/gm.jpg')}}"></div>
                <div class="col-md-8">hello world!!</div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4"><img class="d-block w-100" src="{{asset('images/gm.jpg')}}"></div>
                <div class="col-md-8">hello world!!</div>
            </div>

        </div>
    </div>    
  </div>
<footer>
    @include('partials/foot')
</footer>
@endsection