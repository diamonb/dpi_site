@extends("template.masterother")
@section("content")




<div class="row ">

    <!--Grid column-->
    <div class="col-md-6">
        <img src="{{asset('images/career.png')}}" width="100%" alt="">
    </div>

    <div class="col-md-6">
    <h2 class="text-center w-responsive mx-auto h1">Join our great family!</h2>
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

        <form id="contact-form" name="contact-form" action="{{route('savecareer')}}" method="POST">
        {{csrf_field()}}
            <div class="form-group">
                <label for="education_level"><strong> Highest level of education you have completed</strong></label>
                <input type="text" class="form-control" id="education_level" name="education_level" placeholder="">
            </div>
            <div class="form-group">
                <label for="Field"><strong>Field *</strong></label>
                <input type="text" class="form-control" id="Field" name="field" placeholder="">
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>Background experience *</strong></label>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="experience" id="duration" value="- 3 years" >
                            <label class="form-check-label" for="duration">
                                - 3 years
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="experience" id="duration" value="3 - 5 years" >
                            <label class="form-check-label" for="duration">
                                3 - 5 years
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="experience" id="duration" value="5 - 10 years" >
                            <label class="form-check-label" for="duration">
                                5 - 10 years
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="experience" id="duration" value="10 - 15 years" >
                            <label class="form-check-label" for="duration">
                                10 - 15 years
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="experience" id="duration" value="15 years +" >
                            <label class="form-check-label" for="duration">
                                15 years +
                            </label>
                        </div>
                    </div>

                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="tell_us"><strong>Tell us about your experience and motivations *</strong></label>
                <input type="text" class="form-control" id="tell_us" name="tell_us" placeholder="">
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>Preferred language *</strong></label>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="language" id="language" value="1" >
                            <label class="form-check-label" for="">
                            English
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="language" id="language" value="2" >
                            <label class="form-check-label" for="">
                            Spanish
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="language" id="language" value="3" >
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
                            <input class="form-check-input" type="radio" name="hear" id="hear" value="1">
                            <label class="form-check-label" for="">
                            Facebook/WhatsApp
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" id="hear" value="2">
                            <label class="form-check-label" for="">
                            Linkedin
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" id="hear" value="3">
                            <label class="form-check-label" for="">
                            Website
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" id="hear" value="4">
                            <label class="form-check-label" for="">
                            Current Business
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" id="hear" value="5">
                            <label class="form-check-label" for="">
                            Previous Business
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" id="hear" value="6">
                            <label class="form-check-label" for="">
                            Friend (word of mouth)
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" id="hear" value="7">
                            <label class="form-check-label" for="">
                            Walk in
                            </label>
                        </div>
                    </div>
                </div>
                
            </div>
            <fieldset class="scheduler-border">
                <legend class="scheduler-border">Candidate details</legend>
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
            <div class="row">
            <div class="form-group mt-2">
                <label for="linkedin"><strong>Linkedin </strong></label>
                <input type="text" name="linkedin" class="form-control" id="linkedin" placeholder="">
            </div>
            </div>
            <div class="form-group mt-2">
                <label for=""><strong>Resume* </strong></label>
                <input type="file" name="resume_link" class="form-control" id="">
            </div>
            <div class="text-center text-md-left">
                <button class="mt-1 btn btn-dpi" >Send</button>
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