@extends("template.masterother")
@section("content")




<div class="row ">

    <!--Grid column-->
    <div class="col-lg-6">
        <img src="{{asset('images/consultant.jpg')}}" width="100%" alt="">
    </div>

    <div class="col-lg-6">
    <h2 class="text-center w-responsive mx-auto h1">Become a Consultant</h2>
    <cite>Embrace new opportunities as a Consultant with us! This application is your pathway to join our valued Consultant network. Showcase your expertise, background, and expectations, as we collaborate to create exceptional solutions for our clients. Let's make a difference together. Apply now and take the next step in your consulting career!</cite>
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

        <form action="{{route('become_consultant')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <br>
        <div class="row">
        <div class="form-group col-md-6">
                <label for="industry"><strong>Industry *</strong></label>
                <input type="text" class="form-control" id="industry" name="industry" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="business_area"><strong>Business Area *</strong></label>
                <input type="text" class="form-control" id="business_area" name="business_area" placeholder="">
            </div>
        </div>
        <br>  
        <div class="form-group">
            <label for=""><strong>How long have you been in business? *</strong></label>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="business_long" id="duration" value="-3 years" >
                        <label class="form-check-label" for="duration">
                            -3 years
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="business_long" id="duration" value="3 - 5 years" >
                        <label class="form-check-label" for="duration">
                            3 - 5 years
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="business_long" id="duration" value="5 - 10 years" >
                        <label class="form-check-label" for="duration">
                            5 - 10 years
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="business_long" id="duration" value="10 - 15 years" >
                        <label class="form-check-label" for="duration">
                            10 - 15 years
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="business_long" id="duration" value="15 years +" >
                        <label class="form-check-label" for="duration">
                            15 years +
                        </label>
                    </div>
                </div>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="first_name"><strong>First name</strong></label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="last_name"><strong>Last name</strong></label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="">
                </div>
        
            </div>
        </div>
        <br>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="number"><strong>Phone Number*</strong></label>
                <input type="number" class="form-control" name="number" id="number" placeholder="">
            </div>

            <div class="form-group col-md-6">
                <label for="email"><strong>Email address*</strong></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="">
            </div>
        </div>
        <br>
        <div class="form-group ">
            <label for="Website"><strong>Website URL</strong></label>
            <input type="text" class="form-control" id="Website" name="website" placeholder="">
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
                <label for="state"><strong>State / Province *</strong></label>
                <input type="text" class="form-control" id="state" name="state" placeholder="">
            </div>

            <div class="form-group col-md-6">
                <label for="adress"><strong>Address*</strong></label>
                <input type="text" class="form-control" name="address" id="adress" placeholder="">
            </div>

        </div>
        <br>
        <div class="row">
        <div class="form-group col-md-6">
            <label for="zip"><strong>Zip code</strong></label>
            <input type="zip" class="form-control" name="zip" id="zip" placeholder="">
        </div>
            <div class="form-group  col-md-6">
                <label for=""><strong>Which business are you interested in? *</strong></label>
                <select class="form-control" name="business" placeholder="">
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
        </div>

            <br>
            <div class="form-group">
                <label for="yourproject"><strong>Tell us  about your background and collaboration motivations</strong></label>
                <textarea class="form-control" name="tell_us" id="yourproject"></textarea>
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
                            <input class="form-check-input" type="radio" name="language" value="Spanish" >
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
                            <input class="form-check-input" type="radio" name="hear" value="Facebook/WhatsApp" >
                            <label class="form-check-label" for="">
                            Facebook/WhatsApp
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="Linkedin" >
                            <label class="form-check-label" for="">
                            Linkedin
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear"  value="Website" >
                            <label class="form-check-label" for="">
                            Website
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="Current Consultant">
                            <label class="form-check-label" for="">
                            Current Consultant
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear"  value="Previous Consultant" >
                            <label class="form-check-label" for="">
                            Previous Consultant
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
                
            </div>
            <br>
            <div class="form-group mt-2">
                        <label for="linkedin"><strong>Resume </strong></label>
                        <input type="file" name="attachement" class="form-control" id="image">
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