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
        
        <div class="col-lg-12">
            <div class="accordion mb-5" id="accordionExample">
            @foreach($faqs as $faq)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo{{$faq->id_faq}}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo{{$faq->id_faq}}" aria-expanded="false" aria-controls="collapseTwo{{$faq->id_faq}}">
                        <strong>{{$faq->question}}</strong>
                    </button>
                    </h2>
                    <div id="collapseTwo{{$faq->id_faq}}" class="accordion-collapse collapse" aria-labelledby="headingTwo{{$faq->id_faq}}" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        {!!$faq->response!!}
                    </div>
                    </div>              
                </div>
                @endforeach
            </div>
        </div>
        

    </div>

</div>


<footer>
    @include('partials/foot')
</footer>
@endsection