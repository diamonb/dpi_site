@extends("template.master")
@section("content")
<div class="banniere_contact">
        <p class="h1 text-center pt-5">Account Configuration</p>
  </div>


    <div class="row">
        <div class="col-md-3 side_1">

        </div>

        <div class="col-md-6 ">
            
        <div class="col text-center">
            <span class="h2 text-center"></span>
        </div>
            
            <form class="mt-5" name="register" id="register" method="post" action="{{route('activate_dashboard')}}">
                @csrf
                    <div class="form-outline mb-4">
                        <label class="form-label" for="domain">Category*</label>
                        <select class="form-select" id="domain" aria-label="Default select example">
                        <option selected>Open this select category</option>
                        <option value="">Client</option> 
                        <option value="">Business (Do business with us)</option>
                        <option value="">Consultant (Become a Consultant)</option>
                        <option value="">Investor (Invest with us)</option>
                        <option value="">Partener (Partner with us)</option>
                        </select>
                        
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="domain">Country</label>
                        <select class="form-select" id="domain" aria-label="Default select example">
                        @foreach($countries as $country)
                        <option value="{{$country->id}}">{{$country->name}}</option>
                        @endforeach
                        </select>
                        
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example2">State</label>
                        <input type="text" id="form6Example2" class="form-outline" />
                        
                    </div>
                    
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example1">City</label>
                        <input type="text" id="form6Example1" class="form-outline" />
                        
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example2">Address</label>
                        <input type="text" id="form6Example2" class="form-outline" />
                        
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example6">Phone</label>
                        <input type="number" id="form6Example6" class="form-outline" />
                    </div>

                    
                    <div class="form-outline mb-4">
                        <label class="form-label" for="domain">Primary need*</label>
                        <select class="form-select" id="domain" aria-label="Default select example">
                        <option selected>Open this to select domain</option>
                        @foreach($domains as $domain)
                        <option value="{{$domain->id_domain}}">{{$domain->title}}</option>
                        @endforeach
                        </select>
                        
                    </div>
                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example7">Tell us about your project</label>
                        <textarea class="form-outline" id="form6Example7" rows="4"></textarea>    
                    </div>

                    <div class=" mb-4">
                        <label class="" for="customFile">Tell us about your project - Add file</label> 
                        <input type="file" class="form-control" id="customFile" />                   
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="website">Website</label>
                        <input type="text" id="website" class="form-outline" />
                    </div>


                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">SUBMIT</button>
                </form>
        </div>

        <div class="col-md-3 side_1">

        </div>


    </div>
    

  @include('partials/foot')
@endsection
