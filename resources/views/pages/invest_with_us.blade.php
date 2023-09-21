@extends("template.masterother")
@section("content")




<div class="row ">

    <!--Grid column-->
    <div class="col-lg-6">
        <img src="{{asset('images/invest.png')}}" width="100%" alt="">
    </div>

    <div class="col-md-6">
    <h2 class="text-center w-responsive mx-auto h1">Invest with us</h2>
    <cite>Join us and invest in our vision! This application allows you to express your interest in becoming an investor with our company. Together, we can seize exciting opportunities and achieve remarkable growth. Let's make a positive impact on the market and reap the rewards of our successful partnership. Invest with us today!</cite>
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

        <form name="invest-form" action="{{route('saveinvest')}}" method="POST">
        {{csrf_field()}}
            <!--Grid row-->
            <br>
            <div class="form-group">
                <label for=""><strong>Invest with us *</strong></label>
                <select class="form-control" name="primary_fiel" placeholder="">
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
                    <label for="state"><strong>State / Province*</strong></label>
                    <input type="text" class="form-control" id="state" name="state" placeholder="">
                </div>

                <div class="form-group col-md-6">
                    <label for="adress"><strong>Address*</strong></label>
                    <input type="text" class="form-control" name="address" id="adresse" placeholder="">
                </div>

            </div>
            <br>
            <div class="form-group">
                <label for="zip"><strong>Zip code</strong></label>
                <input type="zip" class="form-control" name="zip" id="zip" placeholder="">
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>How much?($)*</strong></label>
                <input type="number" name="amont" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="yourproject">Tell us  about your investment motivation and expectations *</label>
                <textarea class="form-control" id="yourproject" name="expectation" rows="3"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="Website">Website</label>
                <input type="text" class="form-control" id="Website" placeholder="">
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>Preferred language*</strong></label>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="language" id="duration" value="en" checked>
                            <label class="form-check-label" for="">
                            English
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="language" id="duration" value="spa" checked>
                            <label class="form-check-label" for="">
                            Spanish
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="language" id="duration" value="fr" checked>
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
                            <input class="form-check-input" type="radio" name="hear" value="Facebook_WhatsApp">
                            <label class="form-check-label" for="">
                            Facebook/WhatsApp
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="linkedin">
                            <label class="form-check-label" for="">
                            Linkedin
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="website">
                            <label class="form-check-label" for="">
                            Website
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="c_investor">
                            <label class="form-check-label" for="">
                            Current Investor
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="p_investor">
                            <label class="form-check-label" for="">
                            Previous Investor
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="friend">
                            <label class="form-check-label" for="">
                            Friend (word of mouth)
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="Walk in">
                            <label class="form-check-label" for="">
                            Walk in
                            </label>
                        </div>
                    </div>
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