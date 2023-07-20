@extends("template.masterother")
@section("content")




<div class="row ">

    <!--Grid column-->
    <div class="col-md-6">
        <img src="{{asset('images/participent.jpeg')}}" alt="" width="100%">
    </div>

    <div class="col-md-6">
    <h2 class="text-center w-responsive mx-auto h5">Become a part of our DIELSurvey participants network and contribute to empowering our communities with your valuable opinions on a wide range of topics.</h2>
        @if ($errors->any())
        <div class="alert alert-danger">
            <span>Mandatory field must be completed</span>
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

        <form id=""  action="{{route('saveparticipent')}}" method="POST">
        {{csrf_field()}}
            <div class="form-group">
                <label for="name"><strong>Full Name *</strong></label>
                <input type="text" class="form-control" id="name" name="full_name" placeholder="">
            </div>
            <br>
            
        @error('session')
        <span class="text-danger">{{$message}}</span><br>
        @enderror
            <div class="form-group">
                <label for=""><strong>Age *</strong></label>
                <input class="form-control" type="number" name="age" id="" >
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>Gender *</strong></label>
                <select class="form-control" name="sexe" id="">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>Occupation *</strong></label>
                <input class="form-control" type="text" name="age" id="" >
            </div>
            <br>
            <div class="form-group">
            @error('experience_it')
            <span class="text-danger">{{$message}}</span> <br>
            @enderror
                <label for=""><strong>Are you willing to participate in a research survey? *</strong></label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="experience_it" id="experience" value="yes">
                            <label class="form-check-label" for="experience">
                            Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="experience_it" id="experience2" value="no">
                            <label class="form-check-label" for="experience2">
                            No
                            </label>
                        </div>
                    </div>
                </div>   
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>Which method of survey participation would you prefer? *</strong></label>
                <select class="form-control" name="sexe" id="">
                    <option value="M">Online survey</option>
                    <option value="F">In-person interview</option>
                    <option value="M">Phone interview</option>
                    <option value="F">Other (please specify)</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>Specify *</strong></label>
                <input class="form-control" type="text" name="other" id="" >
            </div>
            <br>
            <div class="form-group">
            @error('experience_it')
            <span class="text-danger">{{$message}}</span> <br>
            @enderror
                <label for=""><strong>Are you available to participate in the survey during specific dates or times? If yes, please provide details *</strong></label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="experience_it" id="experience" value="yes">
                            <label class="form-check-label" for="experience">
                            Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="experience_it" id="experience2" value="no">
                            <label class="form-check-label" for="experience2">
                            No
                            </label>
                        </div>
                    </div>
                </div>   
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>Specify *</strong></label>
                <input class="form-control" type="text" name="other" id="" >
            </div>
            <br>
            <div class="form-group">
            @error('experience_it')
            <span class="text-danger">{{$message}}</span> <br>
            @enderror
                <label for=""><strong>What is your level of familiarity with surveys? *</strong></label>
                <div class="row">
                    <select class="form-control" name="sexe" id="">
                        <option value="M">Very familiar</option>
                        <option value="F">somewhat familiar</option>
                        <option value="M">not familiar at all</option>
                    </select>
                </div>   
            </div>
            <br>
            <div class="form-group">
            @error('experience_it')
            <span class="text-danger">{{$message}}</span> <br>
            @enderror
                <label for=""><strong>Are you comfortable providing your opinions and personal experiences related to the survey topic? *</strong></label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="experience_it" id="experience" value="yes">
                            <label class="form-check-label" for="experience">
                            Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="experience_it" id="experience2" value="no">
                            <label class="form-check-label" for="experience2">
                            No
                            </label>
                        </div>
                    </div>
                </div>   
            </div>
            <br>
            <div class="form-group">
            @error('experience_it')
            <span class="text-danger">{{$message}}</span> <br>
            @enderror
                <label for=""><strong>Would you like to be considered for future research studies or surveys? *</strong></label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="experience_it" id="experience" value="yes">
                            <label class="form-check-label" for="experience">
                            Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="experience_it" id="experience2" value="no">
                            <label class="form-check-label" for="experience2">
                            No
                            </label>
                        </div>
                    </div>
                </div>   
            </div>
            <br>
            <div class="form-group">
            @error('experience_it')
            <span class="text-danger">{{$message}}</span> <br>
            @enderror
                <label for=""><strong>How did you hear about this survey recruitment? *</strong></label>
                <div class="row">
                <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration" value="duration" >
                            <label class="form-check-label" for="duration">
                            Email invitation 
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration" value="duration" >
                            <label class="form-check-label" for="duration">
                            Social media c.
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration" value="duration" >
                            <label class="form-check-label" for="duration">
                            Website
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration" value="duration" >
                            <label class="form-check-label" for="duration">
                            Online advertisement
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration" value="duration" >
                            <label class="form-check-label" for="duration">
                            Word of mouth
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration" value="duration" >
                            <label class="form-check-label" for="duration">
                            Other (please specify)
                            </label>
                        </div>
                    </div>
                </div>   
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>Specify *</strong></label>
                <input class="form-control" type="text" name="other" id="" >
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>Is there any additional information you would like to provide? *</strong></label>
                <textarea class="form-control" name="" id=""  ></textarea>
            </div>
            <br>
            <fieldset class="scheduler-border">
                <legend class="scheduler-border">Contact Informations</legend>
                    <div class="row">
        @error('email')
        <span class="text-danger">{{$message}}</span>
        @enderror
                            <div class="form-group">
                                <label for="email"><strong>Email *</strong></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="number"><strong>Number *</strong></label>
                                <input type="number" class="form-control" name="number" id="number" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="" for="country"><strong>Country</strong></label>
                                <select class="form-select" id="country" name="country">
                                    @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                         <div class="form-group">
                                <label for="town"><strong>City/Town </strong></label>
                                <input type="text" class="form-control" name="town" id="town" placeholder="">
                            </div>
                            
                    </div>
            </fieldset>
            <br>
            <div class="text-center text-md-left">
                <button type="submit" class="btn btn-dpi" type=>Send</button>
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