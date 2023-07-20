@extends("template.masterother")
@section("content")
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

              <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('images/bannieres/survey.jpg')}}" alt="First slide">
                <div class="carousel-caption d-md-block">
                  <span style="font-size:50px;">DIELSurvey</span>
                </div>
              </div>
</div>
  <div class="container">
    <div class="row mt-4 mb-4">
          <div class="col">
          </div>
          <div class="col">
            <div class="input-group">
            <div class="form-outline">
              <input type="search" id="form1" class="form-control" />
              <label class="form-label" for="form1">Search a DIELSurvey here</label>
            </div>
            <button type="button" class="btn btn-primary">
              <i class="fas fa-search"></i>
            </button>
            </div>
          </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="entete_column">
              <p class="text-center h3">Insights</p>
        </div>
        @foreach($insights as $insight)
        <div class="row">
          <div class="col-md-10">
            <p><b>{{$insight->title}}</b></p>
            <p><small>{!!$insight->description!!}</small></p>
          </div>
          <div class="col-md-2">
            <a class="" href="{{asset($insight->file)}}" download><i data-mdb-toggle="tooltip" title="Download insight" class="justify-content-end fas fa-download"></i></a>
          </div>
        </div>         
          <hr>
        @endforeach
      </div>
      <div class="col-md-6">
      
        <div class="entete_column">
              <p class="text-center h3">Surveys</p>
        </div>
        @foreach($surveys as $survey)
        <div class="row">
          <div class="col-md-4">
          <img class="" src="{{asset($survey->image)}}" alt="" width="100%">
          <span class="" ><strong>Published:</strong> <time class="timeago" datetime="{{$survey->created_at}}">{{$survey->created_at}}</time> </span>
          </div>
          <div class="col-md-8">
              <p><b>{{$survey->title}}</b> </p>
              <p>{!!$survey->description!!}</p>
              <p class="text-end"><i data-mdb-toggle="tooltip" title="Share" class="fas fa-share fa-2x text-success"></i> 
              <button id="{{$survey->id_survey}}"
              shout-button
              class="btn btn-outline-primary"
              data-sh-form="{{$survey->link}}"
              data-sh-close-on-complete="false"
              data-sh-type="slideout"
              data-sh-direction="right"
              sh-initial-color="#2A98C6"> Take this DIELSurvey</button>
            </p>
          </div>
        </div>
        <hr>
        @endforeach
        {!! $surveys->links() !!}
      </div>
      <div class="col-md-3">
        <div class="entete_column">
              <p class="text-center h3">News</p>
        </div>
        <div class="row">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
            <div class="carousel-inner">

                <div class="carousel-item active text-end">
                  <img class="d-block w-100" src="{{asset('images/applaynow.jpeg')}}" alt="second slide">
                  <span class="bg-light animate__animated animate__rubberBand "><a target="_blank" href="https://apply.fundwise.com/dpifin" class="text-warning ">To apply, click here<i class="fas fa-arrow-right"></i></a>  </span>
                </div>

                <div class="carousel-item text-end">
                  <img class="d-block w-100" src="{{asset('images/snowform.png')}}" alt="First slide">
                  <span class="bg-light animate__animated animate__rubberBand "><a target="_blank" href="{{route('take_service')}}" class="text-success ">To apply, click here<i class="fas fa-arrow-right"></i></a>  </span>
                </div>
                <div class="carousel-item text-end">
                  <img class="d-block w-100" src="{{asset('images/snowform_fr.jpeg')}}" alt="First slide">
                  <span class="bg-light animate__animated animate__rubberBand "><a target="_blank" href="{{route('take_service_fr')}}" class="text-success ">Cliquez ici pour souscrire<i class="fas fa-arrow-right"></i></a>  </span>
                </div>

            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
            <div class="carousel-inner">

                <div class="carousel-item active text-end">
                  <img class="d-block w-100" src="{{asset('images/applaynow.jpeg')}}" alt="second slide">
                  <span class="bg-light animate__animated animate__rubberBand "><a target="_blank" href="https://apply.fundwise.com/dpifin" class="text-warning ">To apply, click here<i class="fas fa-arrow-right"></i></a>  </span>
                </div>

                <div class="carousel-item text-end">
                  <img class="d-block w-100" src="{{asset('images/snowform.png')}}" alt="First slide">
                  <span class="bg-light animate__animated animate__rubberBand "><a target="_blank" href="{{route('take_service')}}" class="text-success ">To apply, click here<i class="fas fa-arrow-right"></i></a>  </span>
                </div>
                <div class="carousel-item text-end">
                  <img class="d-block w-100" src="{{asset('images/snowform_fr.jpeg')}}" alt="First slide">
                  <span class="bg-light animate__animated animate__rubberBand "><a target="_blank" href="{{route('take_service_fr')}}" class="text-success ">Cliquez ici pour souscrire<i class="fas fa-arrow-right"></i></a>  </span>
                </div>

            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
            <div class="carousel-inner">

                <div class="carousel-item active text-end">
                  <img class="d-block w-100" src="{{asset('images/applaynow.jpeg')}}" alt="second slide">
                  <span class="bg-light animate__animated animate__rubberBand "><a target="_blank" href="https://apply.fundwise.com/dpifin" class="text-warning ">To apply, click here<i class="fas fa-arrow-right"></i></a>  </span>
                </div>

                <div class="carousel-item text-end">
                  <img class="d-block w-100" src="{{asset('images/snowform.png')}}" alt="First slide">
                  <span class="bg-light animate__animated animate__rubberBand "><a target="_blank" href="{{route('take_service')}}" class="text-success ">To apply, click here<i class="fas fa-arrow-right"></i></a>  </span>
                </div>
                <div class="carousel-item text-end">
                  <img class="d-block w-100" src="{{asset('images/snowform_fr.jpeg')}}" alt="First slide">
                  <span class="bg-light animate__animated animate__rubberBand "><a target="_blank" href="{{route('take_service_fr')}}" class="text-success ">Cliquez ici pour souscrire<i class="fas fa-arrow-right"></i></a>  </span>
                </div>

            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
  <form method="POST" action="{{route('becomeparticipent')}}">
    @csrf
    <button data-mdb-toggle="tooltip" title="Become a participent" id="myBtnParticipent" title="Become à participent"> <i class="fas fa-user-plus fa-sm ms-4 text-white pe-4"></i></button>
  </form>
<footer>
    @include('partials/foot')
</footer>
@endsection