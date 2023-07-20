@extends("template.masterother")
@section("content")
  <div class="banniere">

  </div>

  <div class="container">
    <div class="row">
      <div class="col">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      </div>
      <div class="col">
        <!-- Pills navs -->
</div>
      <div class="col">

      </div>
    </div>
  </div>
      <div class="container ">
          <div class="row">
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
    <form>
      <div class="text-center mb-3">
        <p>Sign in with:</p>
        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-facebook-f"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-google"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-twitter"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-github"></i>
        </button>
      </div>

      <p class="text-center">or:</p>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" id="loginName" class="form-control" />
        <label class="form-label" for="loginName">Email or username</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="loginPassword" class="form-control" />
        <label class="form-label" for="loginPassword">Password</label>
      </div>

      <!-- 2 column grid layout -->
      <div class="row mb-4">
        <div class="col-md-6 d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check mb-3 mb-md-0">
            <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
            <label class="form-check-label" for="loginCheck"> Remember me </label>
          </div>
        </div>

        <div class="col-md-6 d-flex justify-content-center">
          <!-- Simple link -->
          <a href="#!">Forgot password?</a>
        </div>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

      <!-- Register buttons -->
      <div class="text-center">
        <p>Not a member? <a href="#!">Register</a></p>
      </div>
    </form>
  </div>
  <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
    <form>
      <div class="text-center mb-3">
        <p>Sign up with:</p>
        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-facebook-f"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-google"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-twitter"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-github"></i>
        </button>
      </div>

      <p class="text-center">or:</p>

      <!-- Name input -->
      <div class="form-outline mb-4">
        <input type="text" id="registerName" class="form-control" />
        <label class="form-label" for="registerName">Name</label>
      </div>

      <!-- Username input -->
      <div class="form-outline mb-4">
        <input type="text" id="registerUsername" class="form-control" />
        <label class="form-label" for="registerUsername">Username</label>
      </div>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" id="registerEmail" class="form-control" />
        <label class="form-label" for="registerEmail">Email</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="registerPassword" class="form-control" />
        <label class="form-label" for="registerPassword">Password</label>
      </div>

      <!-- Repeat Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="registerRepeatPassword" class="form-control" />
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

  <div class="bar_titre mb-4">
    <h3 class="text-center t-w">SIGN IN</h3>
  </div>
  <div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">CLIENT</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">PARTENER</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">INVESTOR</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">CONSULTANT</button>
    </li>
    </ul>
    <div class="tab-content" id="myTabContent">

      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <span class="h3">Client registration</span>
        <form class="mt-5">
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form6Example1" class="form-control" />
                <label class="form-label" for="form6Example1">First name</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form6Example2" class="form-control" />
                <label class="form-label" for="form6Example2">Last name</label>
              </div>
            </div>
          </div>

          <div class="col">
              <div class="form-outline">
                <input type="text" id="form6Example1" class="form-control" />
                <label class="form-label" for="form6Example1">Country</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form6Example2" class="form-control" />
                <label class="form-label" for="form6Example2">State</label>
              </div>
            </div>
          </div>
          <div class="col">
              <div class="form-outline">
                <input type="text" id="form6Example1" class="form-control" />
                <label class="form-label" for="form6Example1">City</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form6Example2" class="form-control" />
                <label class="form-label" for="form6Example2">Address</label>
              </div>
            </div>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form6Example5" class="form-control" />
            <label class="form-label" for="form6Example5">Email</label>
          </div>

          <!-- Number input -->
          <div class="form-outline mb-4">
            <input type="number" id="form6Example6" class="form-control" />
            <label class="form-label" for="form6Example6">Phone</label>
          </div>

          <div class="form-outline mb-4">
            <select class="form-select" id="domain" aria-label="Default select example">
              <option selected>Open this select menu</option>
              <option value="1">MARKETING</option>
              <option value="2">FINANCE</option>
              <option value="3">DIGITAL</option>
            </select>
            <label class="form-label" for="domain">Domain</label>
          </div>
          <div class="form-outline mb-4">
            <select class="form-select" id="domain" aria-label="Default select example">
              <option selected>Open this select menu</option>
              <option value="1">MARKETING</option>
              <option value="2">FINANCE</option>
              <option value="3">DIGITAL</option>
            </select>
            <label class="form-label" for="domain">Domain</label>
          </div>
          <!-- Message input -->
          <div class="form-outline mb-4">
            <textarea class="form-control" id="form6Example7" rows="4"></textarea>
            <label class="form-label" for="form6Example7">Additional information</label>
          </div>

          <!-- Checkbox -->
          <div class="form-check d-flex justify-content-center mb-4">
            <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
            <label class="form-check-label" for="form6Example8"> Create an account? </label>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4">SUBMIT</button>
        </form>
      </div>


      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

      </div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

      </div>
    </div>



  </div>


  <footer>
    @include('partials/foot')
</footer>
@endsection