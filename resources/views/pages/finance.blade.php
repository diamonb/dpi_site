@extends("template.masterother")
@section("content")

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

              <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('images/bannieres/finance.jpg')}}" alt="First slide">
                <div class="carousel-caption d-md-block">
                  <span style="font-size:50px;">DPI FIN.</span>
                </div>
              </div>
</div>
  <div class="container">
  <div class="row">
      <div class="col">
          <p class="text-center mt-4"><strong>Our Financial services for your growth.</strong></p>
          <p class="text-center mt-4">Embark on a journey of financial opportunities with DPI Fin. We are dedicated to helping individuals and businesses achieve their financial goals, fostering growth and success.</p>
      </div>
    </div>
  </div>


  <div class="container mb-5 finance_class" id="finance">
    <div class="row">
   
          @foreach($services as $service)

          <div class="col-lg-4">
            <div class="accordion mb-5" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo{{$service->id_service}}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo{{$service->id_service}}" aria-expanded="false" aria-controls="collapseTwo{{$service->id_service}}">
                        <strong>{{$service->libelle}}</strong>
                    </button>
                    </h2>
                    <div id="collapseTwo{{$service->id_service}}" class="accordion-collapse collapse" aria-labelledby="headingTwo{{$service->id_service}}" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        {!!$service->description!!}
                        <p>
                            <form action="{{ route('service_choose',$service->id_service) }}" method ="POST">
                            @csrf
                                <button class="btn btn-primary">Order now</button>
                            </form>
                        </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
          @endforeach

      </div>
</div>

<footer>
    @include('partials/foot')
</footer>
@endsection