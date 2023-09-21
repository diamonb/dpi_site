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
        <div class="row">
        @error('session')
        <span class="text-danger">{{$message}}</span><br>
        @enderror
            <div class="form-group col-md-6">
                <label for="email"><strong>Email address*</strong></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="">
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
                    <label for=""><strong>Age *</strong></label>
                    <input class="form-control" type="number" name="age" id="" >
                </div>
        
            </div>
            <div class="form-group col-md-6">
                <label for=""><strong>Gender *</strong></label>
                <select class="form-control" name="gender" id="">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
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
                <label for=""><strong>Occupation *</strong></label>
                <input class="form-control" type="text" name="occupation" id="" >
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
                            <input class="form-check-input" type="radio" name="participate"  value="yes">
                            <label class="form-check-label" for="experience">
                            Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="participate" value="no">
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
                <select class="form-control" name="survey" id="">
                    <option value="Online survey">Online survey</option>
                    <option value="In-person interview">In-person interview</option>
                    <option value="Phone interview">Phone interview</option>
                    <option value="Other">Other (please specify)</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>Specify *</strong></label>
                <textarea class="form-control" name="specify" id="" > </textarea>
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
                            <input class="form-check-input" type="radio" name="available" value="yes">
                            <label class="form-check-label" >
                            Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="available"  value="no">
                            <label class="form-check-label" >
                            No
                            </label>
                        </div>
                    </div>
                </div>   
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>Specify *</strong></label>
                <textarea class="form-control" name="specify_available" id="" > </textarea>
            </div>
            <br>
            <div class="form-group">
            @error('experience_it')
            <span class="text-danger">{{$message}}</span> <br>
            @enderror
                <label for=""><strong>What is your level of familiarity with surveys? *</strong></label>
                    <select class="form-control" name="level" id="">
                        <option value="Very familiar">Very familiar</option>
                        <option value="somewhat familiar">somewhat familiar</option>
                        <option value="not familiar at all">not familiar at all</option>
                    </select>
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
                            <input class="form-check-input" type="radio" name="comfortable" value="yes">
                            <label class="form-check-label" for="experience">
                            Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="comfortable" value="no">
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
                            <input class="form-check-input" type="radio" name="considered"  value="yes">
                            <label class="form-check-label" for="experience">
                            Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="considered" value="no">
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
                            <input class="form-check-input" type="radio" name="hear" value="Email invitation " >
                            <label class="form-check-label" for="duration">
                            Email invitation 
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="Social media c." >
                            <label class="form-check-label" for="duration">
                            Social media
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="Website" >
                            <label class="form-check-label" for="duration">
                            Website
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="Online advertisement" >
                            <label class="form-check-label" for="duration">
                            Online advertisement
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="Word of mouth" >
                            <label class="form-check-label" for="duration">
                            Word of mouth
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" id="duration" value="Other" >
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
                <input class="form-control" type="text" name="specify_hear" id="" >
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>Is there any additional information you would like to provide? *</strong></label>
                <textarea class="form-control" name="additional_information" id=""  ></textarea>
            </div>
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