@extends("template.masterother")
@section("content")




<div class="row ">

    <!--Grid column-->
    <div class="col-md-6">
        <img src="{{asset('images/snowside.jpeg')}}" alt="" width="100%">
    </div>

    <div class="col-md-6">
    <h2 class="text-center w-responsive mx-auto h5">Join the World’s greatest IT platform that works for the world of work NOW!</h2>
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

        <form id="contact-form" name="contact-form" action="{{route('saveservicenowservice')}}" method="POST">
        {{csrf_field()}}
            <div class="form-group">
                <label for="name"><strong>First & Last Name *</strong></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="">
            </div>
            <br>
            
            <div class="form-group">
        @error('experience_it')
        <span class="text-danger">{{$message}}</span> <br>
        @enderror
                <label for=""><strong>Are you experienced in IT? *</strong></label>
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
        @error('session')
        <span class="text-danger">{{$message}}</span><br>
        @enderror
            <div class="form-group">
                <label for=""><strong>When do you plan to start? *</strong></label>
                <input class="form-control" type="date" name="session" id="" >
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>What's your preferred time? *</strong></label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="prefer_time" id="time1" value="1">
                            <label class="form-check-label" for="time1">
                            Weekdays 
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="prefer_time" id="time2" value="2">
                            <label class="form-check-label" for="time2">
                            Weekends
                            </label>
                        </div>
                    </div>
                </div>   
            </div>
            <div class="form-group">
                <label for=""><strong>Do you need an On Demand (customized date and time) Session? *</strong></label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="customization" id="customized" value="yes">
                            <label class="form-check-label" for="">
                            Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="customization" id="customized2" value="no">
                            <label class="form-check-label" for="">
                            No
                            </label>
                        </div>
                    </div>
                </div>  
                <div class="form-group">
                    <label for="note"><strong>Note</strong></label>
                    <Textarea  class="form-control" name="note" id="note" placeholder=""> </textarea>
                </div>
            </div>
            <br>
            <fieldset class="scheduler-border">
                <legend class="scheduler-border">Contact & Location Information</legend>
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