@extends("template.masterother")
@section("content")

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

              <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('images/bannieres/faq.jpg')}}" alt="First slide">
                <div class="carousel-caption d-md-block">
                  <span style="font-size:50px;" class="ms-5">FAQ</span>
                </div>
              </div>
</div>


<div class="">
        <p class="text-center mt-4"><strong>Frequently Asked Questions (FAQ)</strong></p>
</div>



<div class="container mt-2">

    <div class="row">
        <div class="col-lg-2">
            <div class="card">
                <div class="card-heading">
                    FAQ CATEGORIES
                </div>
            </div>
            
            <br>
            @foreach($cfaqs as $faq)

            <p><a href="">{{$faq->libelle}}</a></p>
            <hr>
            
            @endforeach
        </div>
        <div class="col-lg-10">
            <div class="accordion mb-5" id="accordionExample">
           
            </div>
        </div>
        

    </div>

</div>


<footer>
    @include('partials/foot')
</footer>
@endsection