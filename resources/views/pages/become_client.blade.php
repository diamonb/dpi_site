@extends("template.masterother")
@section("content")




<div class="row ">

    <!--Grid column-->
    <div class="col-lg-6">
        <img src="{{asset('images/become_client.png')}}" width="100%" alt="">
    </div>

    <div class="col-lg-6">
    <h2 class="text-center w-responsive mx-auto h1">Client Application</h2>
    <cite>Experience exceptional service with us! This client application is your gateway to partnering with our company. Share your requirements and expectations as we strive to understand your needs better. Let's embark on a journey of collaboration to achieve your goals. Apply now and let us provide you with a personalized and tailored experience like never before!</cite>
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
        
        <form action="{{route('saveclient')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <br>
        <div class="row">
            <div class="form-group col-md-6">
                <label for=""><strong>Company/Organization*</strong></label>
                <input type="text" class="form-control" id="compagnie" name="compagnie" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for=""><strong>Industry sector*</strong></label>
                <input type="text" class="form-control" id="industry" name="insdustry" placeholder="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="first_name"><strong>Full name*</strong></label>
                    <input type="text" class="form-control" name="full_name" id="first_name" placeholder="">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="number"><strong>Phone Number*</strong></label>
                <input type="number" class="form-control" name="number" id="number" placeholder="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email"><strong>Email address*</strong></label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="">
                </div>
        
            </div>
            <div class="form-group col-md-6">
                <label for="Website"><strong>Website URL</strong></label>
                <input type="text" class="form-control" id="Website" name="website" placeholder="">
            </div>

        </div>
        <br>
        <div class="row">
            <div class="form-group col-md-6">
                <label class="" for="country"><strong>Country</strong></label>
                <select name="country" class="form-select" id="country">
                    @foreach($countries as $country)
                    <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="city"><strong>City/town *</strong></label>
                <input type="text" class="form-control" name="city" id="city" placeholder="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="adress"><strong>Address*</strong></label>
                <input type="text" class="form-control" name="address" id="adresse" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="zip"><strong>Zip code</strong></label>
                <input type="zip" class="form-control" name="zip" id="zip" placeholder="">
            </div>

        </div>
        <br>
        <div class="form-group">
            <label for="business_area"><strong>What is your project*</strong></label>
            <textarea  class="form-control" id="" name="project" placeholder=""> </textarea>
        </div>
        <br>
        <div class="form-group">
            <label for="business_area"><strong>What specific requirement do you have?*</strong></label>
            <textarea  class="form-control" id="" name="requirement" placeholder=""> </textarea>
        </div>

            <br>
            <div class="form-group">
                <label for=""><strong>Please choose a business unit*</strong></label>
                <select class="form-control" name="business_unit" placeholder="">
                    <option value="DPI (All)">DPI (All)</option>
                    <option value="DPI MS (Marketing & Services)">DPI MS (Marketing & Services)</option>
                    <option value="DPI Digital">DPI Digital</option>
                    <option value="DPI Fin. (Financial Services)">DPI Fin. (Financial Services)</option>
                    <option value="DIELShop">DIELShop</option>
                    <option value="DIELtoPub">DIELtoPub</option>
                    <option value="DIELSurvey">DIELSurvey</option>
                    <option value="DIELBnews">DIELBnews</option>
                    <option value="DIELDelivery">DIELDelivery</option>
                    <option value="DIELVANDIEL">DIELVANDIEL</option>
                    <option value="ISSINE">ISSINE</option>
                    <option value="ISSINE VANISSINE">ISSINE VANISSINE</option>
                    <option value="ISSINE Beauty">ISSINE Beauty</option>
                    <option value="ISSINE Foods">ISSINE Foods</option>
                    <option value="ISSINE Beauty">ISSINE RestO</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>Preferred language *</strong></label>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="language"  value="English" >
                            <label class="form-check-label" for="">
                            English
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="language"  value="Spanish" >
                            <label class="form-check-label" for="">
                            Spanish
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="language" value="French" >
                            <label class="form-check-label" for="">
                            French
                            </label>
                        </div>
                    </div>
                </div>   
            </div>
            <br>

            <div class="form-group">
                <label for=""><strong>How did you hear about us *</strong></label>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="Facebook/WhatsApp">
                            <label class="form-check-label" for="">
                            Facebook/WhatsApp
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="Linkedin">
                            <label class="form-check-label" for="">
                            Linkedin
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear"  value="Website">
                            <label class="form-check-label" for="">
                            Website
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="Current Partener">
                            <label class="form-check-label" for="">
                            Current Client
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear"  value="Previous Partener" >
                            <label class="form-check-label" for="">
                            Previous Client
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="Friend (word of mouth)" >
                            <label class="form-check-label" for="">
                            Friend (word of mouth)
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="Walk in" >
                            <label class="form-check-label" for="">
                            Walk in
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration" value="duration" >
                            <label class="form-check-label" for="">
                            Walk in
                            </label>
                        </div>
                    </div>
                </div>
                
            </div>
            <br>
            <div class="form-group mt-2">
                    <label for=""><strong>Attach file </strong></label>
                    <input type="file" name="attach" class="form-control" id="image">
            </div>

            <br>
            <div class="text-center text-md-left">
                <button class="btn btn-dpi" >Send</button>
            </div>

        </form>
        <br>

        <div class="status"></div>
    </div>

</div>

<footer>
    @include('partials/foot')
</footer>
@endsection