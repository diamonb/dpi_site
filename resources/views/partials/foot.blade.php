<button onclick="topFunction()" id="myBtn" title="Go to top"> <i class="fas fa-angle-up fa-lg ms-4 text-white pe-4"></i></button>
<hr>
<div class="container" id="reference">
<p class="fs-4 text-center"><strong>Reference & Partners</strong></p>
   <section class="customer-logos slider">
      <div class="slide"><img src="{{asset('images/partenaires/logos.png')}}"></div>
      <div class="slide"><img src="{{asset('images/partenaires/logos2.png')}}"></div>
      <div class="slide"><img src="{{asset('images/partenaires/logos5.png')}}"></div>
      <div class="slide"><img src="{{asset('images/partenaires/logos7.png')}}"></div>
      <div class="slide"><img src="{{asset('images/partenaires/logos8.png')}}"></div>
      <div class="slide"><img src="{{asset('images/partenaires/logos9.png')}}"></div>
      <div class="slide"><img src="{{asset('images/partenaires/logos10.png')}}"></div>
      <div class="slide"><img src="{{asset('images/partenaires/logos11.png')}}"></div>
      <div class="slide"><img src="{{asset('images/partenaires/logos12.png')}}"></div>
      <div class="slide"><img src="{{asset('images/partenaires/logos13.png')}}"></div>
      <div class="slide"><img src="{{asset('images/partenaires/logos14.png')}}"></div>
      <div class="slide"><img src="{{asset('images/partenaires/logos16.png')}}"></div>
      <div class="slide"><img src="{{asset('images/partenaires/logos17.png')}}"></div>
      <div class="slide"><img src="{{asset('images/partenaires/issine_1.jpeg')}}"></div>
      <div class="slide"><img src="{{asset('images/partenaires/logos18.png')}}"></div>
      <div class="slide"><img src="{{asset('images/partenaires/logos19.png')}}"></div>
      <div class="slide"><img src="{{asset('images/partenaires/logos20.png')}}"></div>
      <div class="slide"><img src="{{asset('images/partenaires/logos21.png')}}"></div>
      <div class="slide"><img src="{{asset('images/partenaires/logos22.png')}}"></div>
      <div class="slide"><img src="{{asset('images/partenaires/logos23.png')}}"></div>
      <div class="slide"><img src="{{asset('images/partenaires/logos24.png')}}"></div>
      <div class="slide"><img src="{{asset('images/partenaires/logos25.png')}}"></div>
      <div class="slide"><img src="{{asset('images/partenaires/logos26.png')}}"></div>
      <div class="slide"><img src="{{asset('images/partenaires/jw.jpeg')}}"></div>
     
   </section>
</div>

<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">


    <section class="mt-4">
    <a class="text-white" href="{{route('accueilreference')}}">Home |</a>
    <a class="ms-1 text-white" href="{{route('marketing')}}">Marketing |</a>
    <a class="ms-1 text-white" href="{{route('finance')}}">Financial |</a>
    <a class="ms-1 text-white" href="{{route('digital')}}">Digital |</a>
    <a class="ms-1 text-white" target="_blank" href="https://dielshop.printify.me/products">Shop |</a>
    <a class="ms-1 text-white" href="{{route('dielsurvey')}}">DIELSurvey |</a>
    <a class="ms-1 text-white" href="{{route('about_vmvo')}}">Vision - Mission - Values - Objective |</a>
    <a class="ms-1 text-white" href="{{route('about_company')}}">Company |</a>
    <a class="ms-1 text-white" href="{{route('about_when_call')}}">When should you call DPI? |</a>
    <a class="ms-1 text-white" href="{{route('about_leadership')}}">Leadership |</a>  
    <a class="ms-1 text-white" href="{{route('contact')}}" >Contact</a>

    </section>

    <section class="mb-6 mt-2">
    <a class="text-white" target="_blank" href="{{route('dobusiness')}}">Do business with us |</a>
    <a class="text-white" target="_blank" href="{{route('consultant')}}"> Become a Consultant |</a>
    <a class="text-white" target="_blank" href="{{route('partner')}}">Partner with us |</a>
    <a class="text-white" target="_blank" href="{{route('founder')}}">Become a Founder |</a>
    <a class="text-white" target="_blank" href="{{route('investwithus')}}">Invest with us |</a>
    <a class="text-white" target="_blank" href="{{route('sponsor')}}">Sponsor/Donate |</a>
    <a class="text-white" target="_blank" href="{{route('career')}}">Career</a>
 



    </section>
    <section class="">
    <div class="row">
      <div class="col-md-12">
      @if($message = Session::get('erreur'))

      <div class="alert alert-danger ">

          <button type="button" class="close" data-dismiss="alert">×</button>

          <strong>{{ $message }}</strong>

      </div>

      @endif
      @if ($message = Session::get('success'))

      <div class="alert alert-success ">

          <button type="button" class="close" data-dismiss="alert">×</button>

          <strong>{{ $message }}</strong>

      </div>

      @endif
      </div>

    </div>
    
    </section>
    <!-- Section: Form -->
    <section class="">
      <form action="{{route('subscibe_newsletter')}}" method="POST">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Newsletter</strong>
            </p>
          </div>
          <!--Grid column-->
          {{csrf_field()}}
          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" name="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>

          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>

    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a  data-mdb-toggle="tooltip" title="Facebook" class="btn btn-outline-light btn-floating m-1"  target="_blank" href="https://www.facebook.com/dielpartnersinternational" role="button"
        ><i class="fab fa-facebook-f"></i>
      </a>
            <!-- whatsap -->
      <a  data-mdb-toggle="tooltip" title="Google" class="btn btn-outline-light btn-floating m-1"  target="_blank" href="https://g.page/r/CfksQ29PuHe_EAI/review" role="button"
      ><i class="fab fa-google"></i
      ></a>


      <!-- Twitter -->
      <a target="_blank" data-mdb-toggle="tooltip" title="Twitter" class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/DPIUSALLC" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a target="_blank"   data-mdb-toggle="tooltip" title="Youtube"class="btn btn-outline-light btn-floating m-1" href="https://www.youtube.com/channel/UCe5bcTViOxKYTvZQdoo7oZw" role="button"
        ><i class="fab fa-youtube"></i
      ></a>

      <!-- Instagram -->
      <a  target="_blank"  data-mdb-toggle="tooltip" title="Instagram" class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/dpiusallc/" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a target="_blank"   data-mdb-toggle="tooltip" title="Linkedin" class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/company/dpiusallc" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

    </section>
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    <a class="text-white" target="_blank" href="{{route('privacypolicy')}}">Privacy Policy |</a> 
    <a class="ms-1 text-white" target="_blank" href="{{route('shippingpolicy')}}">Shipping Policy |</a> 
    <a class="ms-1 text-white" target="_blank" href="{{route('returnpolicy')}}">Returns & Refunds Policy |</a>
    <a class="ms-1 text-white" target="_blank" href="{{route('termspolicy')}}">Terms of Use |</a>
    <a class="ms-1 text-white" target="_blank" href="{{route('faq')}}">FAQ</a>
  </div>
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 DPI. All rights reserved. Powered by <a class="text-white" href="{{route('digital')}}">DPI Digital</a>
  </div>
 
  <!-- Copyright -->
  
</footer>