@extends("template.masterother")
@section("content")




<div class="row ">

    <!--Grid column-->
    <div class="col-md-6">
        <img src="{{asset('images/founder.jpeg')}}" width="100%" alt="">
    </div>

    <div class="col-md-6">
    <h2 class="text-center w-responsive mx-auto h1">Become a Founder!</h2>
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

        <form id="" name="founder-form" action="{{route('savefounder')}}" method="POST">
        {{csrf_field()}}
            <div class="form-group">
              <label for="founding"><strong>Your founding motivation and expectations *</strong></label>
              <input type="text" name="expectation" class="form-control" id="founding" placeholder="">
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>Become a Founder *</strong></label>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" name="" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="">
                            DPI (All BU)
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="">
                            DPI MS (Marketing & Services)
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="">
                            DPI Fin. (Financial Services)
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="">
                            DPI Digital
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="">
                            DIELShop
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="">
                            DIELtoPub
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="">
                            DIELSurvey
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="">
                            DIELBNews
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="">
                            DIELDelivery
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="">
                            DIELVANDIEL
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="">
                            ISSINE
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="">
                            ISSINEVANISSINE
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="">
                            ISSINE Beauty
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="">
                            ISSINE Foods
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="">
                            ISSINE eTire Shop
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>Preferred language *</strong></label>
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
                            <input class="form-check-input" type="radio" name="hear" value="Facebook_WhatsApp" checked>
                            <label class="form-check-label" for="">
                            Facebook/WhatsApp
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="linkedin" checked>
                            <label class="form-check-label" for="">
                            Linkedin
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="website" checked>
                            <label class="form-check-label" for="">
                            Website
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="c_investor" checked>
                            <label class="form-check-label" for="">
                            Current Investor
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="p_investor" checked>
                            <label class="form-check-label" for="">
                            Previous Investor
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="friend" checked>
                            <label class="form-check-label" for="">
                            Friend (word of mouth)
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="Walk in" checked>
                            <label class="form-check-label" for="">
                            Walk in
                            </label>
                        </div>
                    </div>
                </div>
                
            </div>
            <fieldset class="scheduler-border">
                <legend class="scheduler-border">Partner informations</legend>
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
                    <div class="row">
                            <div class="form-group">
                                <label for="email"><strong>Email *</strong></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="number"><strong>Number *</strong></label>
                                <input type="number" class="form-control" name="number" id="number" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="zip"><strong>Zip/Postal code</strong></label>
                                <input type="zip" class="form-control" name="zip" id="zip" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="adress"><strong>Address *</strong></label>
                                <input type="text" class="form-control" name="address" id="adresse" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="adresse_deux"><strong>Address 2</strong></label>
                                <input type="text" class="form-control" name="adresse_deux"  id="adresse_deux" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="city"><strong>City/town *</strong></label>
                                <input type="text" class="form-control" name="city" id="city" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="state"><strong>State / Province *</strong></label>
                                <input type="text" class="form-control" id="state" name="state" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="" for="country"><strong>Country</strong></label>
                                <select name="country" class="form-select" id="country">
                                    @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div>
            </fieldset>
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