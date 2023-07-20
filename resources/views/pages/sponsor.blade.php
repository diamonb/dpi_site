@extends("template.masterother")
@section("content")




<div class="row ">

    <!--Grid column-->
    <div class="col-md-6">
        <img src="{{asset('images/sponsor.jpeg')}}" width="100%" alt="">
    </div>

    <div class="col-md-6">
    <h2 class="text-center w-responsive mx-auto h1">Join and support us!</h2>
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

        <form id="contact-form" name="contact-form" action="{{route('savesponsors')}}" method="POST">
        {{csrf_field()}}
            <div class="form-group">
                    <label for=""><strong>Type of Support *</strong></label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type"   value="1">
                                <label class="form-check-label">
                                    Donation
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" value="2">
                                <label class="form-check-label">
                                    Sponsorship
                                </label>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="form-group">
              <label for="amount"><strong>Amount/Value of Support ($) *</strong></label>
              <input type="number" name="amount" class="form-control" id="amount" placeholder="">
            </div>
            <div class="form-group">
              <label for="motivation"><strong>Purpose and Motivation </strong></label>
              <label for=""><small>Please briefly explain why you are interested in sponsoring/donating</small></label>
              <textarea class="form-control" name="motivation" id="motivation" placeholder=""></textarea>
            </div>
            <div class="form-group">
                    <label for=""><strong>Recognition and Visibility *</strong></label>
                    <label for=""><small>Are you seeking any form of recognition for your sponsorship or donation?</small></label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="recognition" id="duration" value="yes">
                                <label class="form-check-label" >
                                Yes
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="recognition" id="duration" value="no">
                                <label class="form-check-label" >
                                No
                                </label>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="form-group">
                    <label for=""><strong>If yes </strong></label>
                    <label for=""><small>What type of recognition would you prefer? </small></label>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="recognition_type"  value="Logo placement">
                                <label class="form-check-label" >
                                Logo placement
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="recognition_type" value="Acknowledgement in publications" >
                                <label class="form-check-label" >
                                Acknowledgement in publications
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="recognition_type" value="Social media mentions">
                                <label class="form-check-label" >
                                Social media mentions
                                </label>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="form-group">
              <label for="customized"><strong>Are you open to discussing customized recognition opportunities based on the project? *</strong></label>
              <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="discuss" value="yes">
                                <label class="form-check-label">
                                Yes
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="discuss" value="non">
                                <label class="form-check-label">
                                No
                                </label>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="form-group">
                    <label for=""><strong>Duration of Support *</strong></label>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="duration" value="One-time">
                                <label class="form-check-label" for="duration">
                                One-time
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="duration" value="Ongoing">
                                <label class="form-check-label" for="duration">
                                Ongoing
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="duration" value="Specific Duration">
                                <label class="form-check-label" for="duration">
                                Specific Duration
                                </label>
                            </div>
                        </div>
                    </div>
            </div>
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
            <fieldset class="scheduler-border">
                <legend class="scheduler-border">Sponsor Details</legend>
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