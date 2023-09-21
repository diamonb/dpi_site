<!-- Modal testimonial -->
<div class="modal fade" id="testimonialModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TESTIMONIAL</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" enctype="multipart/form-data" action="{{route('testimonial')}}">
        @csrf 
            <div class="row">
              <div class="col">
                <input type="text" name="first_name" class="form-control" placeholder="First name">
              </div>
              <div class="col">
                <input type="text" name="last_name" class="form-control" placeholder="Last name">
              </div>
            </div>
            <div class="row mt-4">
            <div class="form-group">
              <input type="text" name="domain" class="form-control" id="exampleFormControlInput1" placeholder="Domain">
            </div>
            <div class="form-group mt-4">
            <textarea class="form-control" name="testimonial" id="exampleFormControlTextarea1" rows="3">Your testimonial...</textarea>
            </div>
            <div class="form-group mt-4">
              <label for="exampleFormControlFile1">Photo</label>
              <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1">
            </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-3 mt-4">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal connexion -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">LOGIN</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
      aria-controls="pills-login" aria-selected="true">Login</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
      aria-controls="pills-register" aria-selected="false">Register</a>
  </li>
</ul>
<!-- Pills navs -->

<!-- Pills content -->
<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
      <div class="text-center mb-3">
        <p>Sign in with:</p>
        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-facebook-f"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-google"></i>
        </button>
      </div>

      <p class="text-center">or:</p>
      <form action="{{route('login')}}" method="POST">
      @csrf 
      <div class="form-outline mt-4">
            
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-label for="email" class="form-label" :value="__('Email')" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>

      <div class="form-outline  mt-4">
            

            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-label for="password" class="form-label" :value="__('Password')" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
            <div class="col-md-6 d-flex justify-content-center">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
              </div>
        </div>
        


            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
      </form>
      

      <!-- Register buttons -->
      <div class="text-center">
        <p>Not a member? <span href="#!" id="tab-register"  data-mdb-toggle="pill" href="#pills-register" role="tab"
      aria-controls="pills-register" aria-selected="false">Register</span></p>
      </div>
  </div>
  <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
    <form name="register" id="register" method="post" action="{{route('register')}}">
    @csrf 
      <div class="text-center mb-3">
        <p>Sign up with:</p>
        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-facebook-f"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-google"></i>
        </button>

      </div>

      <p class="text-center">or:</p>

      <!-- Name input -->
      <div class="form-outline mb-4">
        <input type="text" name="name" id="registerName" class="form-control" />
        <label class="form-label"  for="registerName">Name</label>
      </div>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="text" name="email"  id="registerEmail" class="form-control" />
        <label class="form-label" for="registerEmail">Email</label>
      </div>
      @error('email')
      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
      @enderror

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" name="password"  id="registerPassword" class="form-control" />
        <label class="form-label" for="registerPassword">Password</label>
      </div>
      @error('password')
      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
      @enderror

      <!-- Repeat Password input -->
      <div class="form-outline mb-4">
        <input type="password" name="password_confirmation" id="registerRepeatPassword" class="form-control" />
        <label class="form-label" for="registerRepeatPassword">Repeat password</label>
      </div>

      <!-- Checkbox -->
      <div class="form-check d-flex justify-content-center mb-4">
        <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
          aria-describedby="registerCheckHelpText" />
        <label class="form-check-label" for="registerCheck">
          I have read and agree to the terms
        </label>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
    </form>
  </div>
</div>
<!-- Pills content -->
      </div>
    </div>
  </div>
</div>

<div id="top-bar">
    
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar_top">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="{{route('accueildpi')}}">
      <img
        src="{{asset('images/logo.jpeg')}}"
        height="52"
        alt="DPI Logo"
        loading="lazy"
        style="margin-top: -1px;"
      />
    </a>

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          
        </li>
      </ul>
      <!-- Left links -->

      <div class="d-flex align-items-center">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{route('accueilreference')}}" tabindex="-1" >Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{route('marketing')}}">Marketing</a></li>
                <li><a class="dropdown-item" href="{{route('finance')}}">Financial</a></li>
                <li><a class="dropdown-item" href="{{route('digital')}}">Digital</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="https://dielshop.printify.me/products" tabindex="-1" >Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('accueilreference')}}" tabindex="-1" >References</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              About
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{route('about_vmvo')}}">Vision - Mission - Values - Objective</a></li>
                <li><a class="dropdown-item" href="{{route('about_company')}}">Company</a></li>
                <li><a class="dropdown-item" href="{{route('about_when_call')}}">When should you call DPI?</a></li>
                <li><a class="dropdown-item" href="{{route('about_leadership')}}">Leadership</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Applications
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" target="_blank" href="{{route('becomeclient')}}"> Client Application</a></li>
                <li><a class="dropdown-item" target="_blank" href="{{route('dobusiness')}}"> Do bussiness with us</a></li>
                <li><a class="dropdown-item" target="_blank" href="{{route('consultant')}}"> Become a Consultant</a></li>
                <li><a class="dropdown-item"  target="_blank" href="{{route('partner')}}">Partner with us</a></li>
                <li><a class="dropdown-item" target="_blank" href="{{route('founder')}}">Become a Founder</a></li>
                <li><a class="dropdown-item" target="_blank" href="{{route('investwithus')}}">Invest with us</a></li>
                <li><a class="dropdown-item" target="_blank" href="{{route('sponsor')}}">Sponsor/Donate</a></li>
                <li><a class="dropdown-item" target="_blank" href="{{route('fund')}}">Fund your business</a></li>
                <li><a class="dropdown-item" target="_blank" href="{{route('career')}}">Career</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('dielsurvey')}}" tabindex="-1" >DIELSurvey</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact')}}" tabindex="-1" >Contact</a>
            </li>
          </ul>
        <i data-mdb-toggle="tooltip" title="Login" data-bs-toggle="modal" data-bs-target="#loginModal"  class="fas fa-sign-in-alt  fa-lg ms-5 text-white"></i>   
        
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
@if(session('erreur_registration'))
  
  <div id="toast_registration" class="toast align-items-center text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="d-flex">
    <div class="toast-body">
    {{ session('erreur_registration') }}
    </div>
    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  </div>
  <script>

  document.addEventListener('DOMContentLoaded', e => {
  var myAlert =document.getElementById('toast_registration');//select id of toast
        var bsAlert = new bootstrap.Toast(myAlert);//inizialize it
        bsAlert.show();//show it

  </script>

  @endif