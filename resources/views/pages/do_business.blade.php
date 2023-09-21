@extends("template.masterother")
@section("content")




<div class="row ">

    <!--Grid column-->
    <div class="col-lg-6">
        <img src="{{asset('images/dobusiness.jpeg')}}" width="100%" alt="">
    </div>

    <div class="col-lg-6">
    <h2 class="text-center w-responsive mx-auto h1">Do business with us</h2>
    <cite>Open doors to new possibilities! This application welcomes you to do business with us. Share your interests and needs as we seek to understand how we can best serve you. Let's forge a rewarding business relationship together. Apply now and let's explore the potential of working together for mutual success!</cite>
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

        <form id="do_business-form" enctype="multipart/form-data" action="{{route('do_business')}}" method="POST">
        {{csrf_field()}}
        <br>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="company"><strong>Company name *</strong></label>
                <input type="text" class="form-control" id="company" name="company" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="business_adress"><strong>Business Address *</strong></label>
                <input type="text" class="form-control" id="business_adress" name="business_adress" placeholder="">
            </div>
        </div>
        <br>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="industry"><strong>Industry/Niche *</strong></label>
                    <input type="text" class="form-control" id="industry" name="industry" placeholder="">
                </div>

                <div class="form-group col-md-6">
                <label for=""><strong>Year Etablished</strong></label>
                    <select name="year_etablished" class="form-control" id="">

                    @for ($i = 0; $i < 224; $i++)
                    <option value="{{1800 +$i}}">{{1800 +$i}}</option>
                    @endfor
                    </select>
                    
                </div>
            </div>
            <br>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="number"><strong>Contact Person/Title*</strong></label>
                <input type="text" class="form-control" name="contact_person"  placeholder="">
            </div>
            <div class="form-group col-md-6">
                    <label for="number"><strong>Phone Phone Number *</strong></label>
                    <input type="number" class="form-control" name="number" id="number" placeholder="">                  
            </div>


        </div>
        <br>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="email"><strong>Contact Email*</strong></label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="">
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
            <div class="form-group">
                <label for="zip"><strong>Zip code</strong></label>
                <input type="zip" class="form-control" name="zip" id="zip" placeholder="">
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>What are the core values that guide your company's decisions and actions?</strong></label>
                <textarea class="form-control" name="core_value" placeholder=""></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>What interests you in partnering with our company?</strong></label>
                <textarea class="form-control" name="interest" placeholder=""></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>How do you see your company's strengths complementing our business?</strong></label>
                <textarea class="form-control" name="strength" placeholder=""></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>What specific goals or objectives do you aim to achieve through this partnership?</strong></label>
                <textarea class="form-control" name="goals" placeholder=""></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>What is your primary field of interest for conducting business with us?</strong></label>
                <select class="form-control" name="primary_field" placeholder="">
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
                <label for=""><strong>What are your expectations from our company as a potential partner?</strong></label>
                <textarea class="form-control" name="expectation" placeholder=""></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>How did you hear about us *</strong></label>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" id="hear" value="Facebook/WhatsApp">
                            <label class="form-check-label" for="">
                            Facebook/WhatsApp
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" id="hear" value="Linkedin">
                            <label class="form-check-label" for="">
                            Linkedin
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" id="hear" value="Website">
                            <label class="form-check-label" for="">
                            Website
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" id="hear" value="Current Business">
                            <label class="form-check-label" for="">
                            Current Business
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" id="hear" value="Previous Business">
                            <label class="form-check-label" for="">
                            Previous Business
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" id="hear" value="Friend (word of mouth)">
                            <label class="form-check-label" for="">
                            Friend (word of mouth)
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" id="hear" value="Walk in">
                            <label class="form-check-label" for="">
                            Walk in
                            </label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for=""><strong>Attachement</strong></label>
                    <input type="file" class="form-control" name="attachement">
                </div>
                
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