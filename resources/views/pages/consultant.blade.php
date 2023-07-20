@extends("template.masterother")
@section("content")




<div class="row ">

    <!--Grid column-->
    <div class="col-md-6">
        <img src="{{asset('images/beconsultant.jpeg')}}" width="100%" alt="">
    </div>

    <div class="col-md-6">
    <h2 class="text-center w-responsive mx-auto h1">Become a Consultant!</h2>
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

        <form action="{{route('become_consultant')}}" method="POST">
        @csrf
            <div class="form-group">
                <label for="industry"><strong>Industry *</strong></label>
                <input type="text" class="form-control" id="industry" name="industry" placeholder="">
            </div>
            <div class="form-group">
                <label for="business_area"><strong>Business Area *</strong></label>
                <input type="text" class="form-control" id="business_area" name="business_area" placeholder="">
            </div>
            <div class="form-group">
                <label for=""><strong>How long have you been in business? *</strong></label>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration" value="duration" >
                            <label class="form-check-label" for="duration">
                                -3 years
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration" value="duration" >
                            <label class="form-check-label" for="duration">
                                3 - 5 years
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration" value="duration" >
                            <label class="form-check-label" for="duration">
                                5 - 10 years
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration" value="duration" >
                            <label class="form-check-label" for="duration">
                                10 - 15 years
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration" value="duration" >
                            <label class="form-check-label" for="duration">
                                15 years +
                            </label>
                        </div>
                    </div>

                </div>
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>Which business are you interested in? *</strong></label>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="">
                            DPI MS - Marketing service & solutions
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="">
                            DPI Fin. - Financial service & solutions
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="">
                            DPI Digital – Digital service & solutions
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="">
                            DIELtoPub
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
                            DIELShop
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
                            DPI (All BU)
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="yourproject">Tell us  about your background and collaboration motivations</label>
                <textarea class="form-control" id="yourproject" rows="3"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>Preferred language *</strong></label>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration" value="duration" checked>
                            <label class="form-check-label" for="">
                            English
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration" value="duration" checked>
                            <label class="form-check-label" for="">
                            Spanish
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration" value="duration" checked>
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
                            <input class="form-check-input" type="radio" name="duration" id="duration" value="duration" checked>
                            <label class="form-check-label" for="">
                            Facebook/WhatsApp
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration" value="duration" checked>
                            <label class="form-check-label" for="">
                            Linkedin
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration" value="duration" checked>
                            <label class="form-check-label" for="">
                            Website
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration" value="duration" checked>
                            <label class="form-check-label" for="">
                            Current Partener
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration" value="duration" checked>
                            <label class="form-check-label" for="">
                            Previous Partener
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration" value="duration" checked>
                            <label class="form-check-label" for="">
                            Friend (word of mouth)
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration" value="duration" checked>
                            <label class="form-check-label" for="">
                            Walk in
                            </label>
                        </div>
                    </div>
                </div>
                
            </div>
            <fieldset class="scheduler-border">
                <legend class="scheduler-border">Consultant information</legend>
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
                                <input type="text" class="form-control" name="adress" id="adresse" placeholder="">
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
            <div class="form-group mt-2">
                        <label for="linkedin"><strong>Resume </strong></label>
                        <input type="file" name="image" class="form-control" id="image">
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