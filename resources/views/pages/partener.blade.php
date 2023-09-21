@extends("template.masterother")
@section("content")




<div class="row ">

    <!--Grid column-->
    <div class="col-lg-6">
        <img src="{{asset('images/partener.jpeg')}}" width="100%" alt="">
    </div>

    <div class="col-lg-6">
    <h2 class="text-center w-responsive mx-auto h1">Partner with us</h2>
    <cite>Unlock the power of partnership! This application invites you to collaborate with us and establish a strong business alliance. Share your interest, goals, and potential contributions as we work together to achieve mutual success. Let's leverage each other's strengths and create a thriving partnership. Apply now and embark on a journey of growth and prosperity!</cite>
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

        <form id="contact-form" enctype="multipart/form-data" action="{{route('savepartner')}}" method="POST">
        @csrf
        <br>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="company"><strong>Company name*</strong></label>
                <input type="text" class="form-control" name="company" id="company" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for=""><strong>Business Address*</strong></label>
                <input type="text" class="form-control" name="business_address" placeholder="">
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
                <label for="number"><strong>Contact Person/Title</strong></label>
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
                    <label for="email"><strong>Contact Email *</strong></label>
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
            <div class="row">

            <div class="form-group col-md-6">
                <label for="zip"><strong>Zip code</strong></label>
                <input type="zip" class="form-control" name="zip" id="zip" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="state"><strong>State / Province *</strong></label>
                <input type="text" class="form-control" id="state" name="state" placeholder="">
            </div>

             </div>
           
            <br>
            <div class="form-group">
                <label for=""><strong>What are the core values that guide your company's decisions and actions?*</strong></label>
                <textarea class="form-control" name="core_value" placeholder=""></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>What interests you in partnering with our company?*</strong></label>
                <textarea class="form-control" name="interest" placeholder=""></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>How do you see your company's strengths complementing our business?*</strong></label>
                <textarea class="form-control" name="strength" placeholder=""></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>What specific goals or objectives do you aim to achieve through this partnership?*</strong></label>
                <textarea class="form-control" name="goals" placeholder=""></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>Type*</strong></label>
                <select class="form-control" name="type" placeholder="">
                    <option value="Strategic Alliance">Strategic Alliance</option>
                    <option value="Joint Venture">Joint Venture</option>
                    <option value="Distributorship/Reseller">Distributorship/Reseller</option>
                    <option value="Technology Partnership">Technology Partnership</option>
                    <option value="Supplier/Vendor Partnership">Supplier/Vendor Partnership</option>
                    <option value="Channel Partner/Reseller">Channel Partner/Reseller</option>
                    <option value="Strategic Customer/Client Partnership">Strategic Customer/Client Partnership</option>
                    <option value="Marketing/Co-Marketing Partnership">Marketing/Co-Marketing Partnership</option>
                    <option value="Research and Development (R&D) Collaboration">Research and Development (R&D) Collaboration</option>
                    <option value="Franchise Partnership">Franchise Partnership</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>What are your expectations from our company as a potential partner?*</strong></label>
                <textarea class="form-control" name="expectations" placeholder=""></textarea>
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
                            <input class="form-check-input" type="radio" name="hear" value="Current Partner">
                            <label class="form-check-label" for="">
                            Current Partner
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hear" value="Previous Partner">
                            <label class="form-check-label" for="">
                            Previous Partner
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
            <div class="form-group">
                    <label for=""><strong>Attachement*</strong></label>
                    <input type="file" class="form-control" name="attachement">
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