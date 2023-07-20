@extends("template.masterother")
@section("content")
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

              <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('images/bannieres/contact.jpg')}}" alt="First slide">
                <div class="carousel-caption d-md-block">
                  <span style="font-size:50px;" class="">CONTACT</span>
                </div>
              </div>
</div>

  <div class="container">
    <div class="row">
<section class="mb-4 mt-4">

<!--Section description-->
<p class="text-center w-responsive mx-auto mb-5"><strong>Feel free to contact our committed team to assist with your need now.</strong></p>

<div class="row justify_context_center">

    <div class="col col-md-12 col-lg-12 mb-md-0 mb-5">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if ($message = Session::get('succes'))

        <div class="alert alert-success ">

            <button type="button" class="close" data-dismiss="alert">×</button>

            <strong>{{ $message }}</strong>

        </div>

        @endif
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <form id="contact-form" name="contact-form" action="{{route('savecontact')}}" method="POST">
        {{csrf_field()}}
            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <label for="name" class=""><strong>Full name</strong></label>
                        <input type="text" id="name" name="full_name" class="form-control @error('title') is-invalid @enderror">
                        @error('required')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <label for="email" class=""><strong>Email</strong></label>
                        <input type="text" id="email" name="email" class="form-control">
                        
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <label for="subject" class=""><strong>Subject</strong></label>
                        <input type="text" id="subject" name="subject" class="form-control">
                    </div>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <div class="md-form">
                    <label for="message"><strong>Message</strong></label>
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        
                    </div>

                </div>
            </div>
            <!--Grid row-->

        </form>
        <br>
        <div class="text-center text-md-left">
            <a class="btn btn-dpi" onclick="document.getElementById('contact-form').submit();">Send</a>
        </div>
        <div class="status"></div>
    </div>

</div>
<div class="row rowcontacticone mt-5 justify-content-center">

            <div class="col col-md-12 col-lg-12">
                <div class="row">
                    <div class="col">
                    <i class="fas fa-map-marker-alt fa-2x"></i> <br>
                        <span><strong> Houston,Texas (US)</strong></span><br>
                        <span><strong>Libreville, Gabon</strong></span>
                    </div>

                    <div class="col text-center">
                        <i class="fas fa-phone fa-2x "></i> <br>
                            <span><strong>+1 713-292-4421</strong></span>
                    </div>

                    <div class="col text-end">
                        <i class="fas fa-envelope fa-2x text-end"></i><br>
                        
                            <span><strong>contact@dielpi.com</strong></span> <br>
                    </div>
                </div>
            </div>
            

</div>

</section>
<!--Section: Contact v.2-->
        </div>
    </div>
 
  </div>


<footer>
    @include('partials/foot')
</footer>
@endsection