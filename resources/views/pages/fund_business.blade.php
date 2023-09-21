@extends("template.masterother")
@section("content")




<div class="row ">

    <!--Grid column-->
    <div class="col-lg-6">
        <img src="{{asset('images/fund.png')}}" width="100%" alt="">
    </div>

    <div class="col-lg-6">
    <h2 class="text-center w-responsive mx-auto h1">Fund your business</h2>
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

        <form id="do_business-form" name="fund_business-form" action="{{route('fund_business')}}" method="POST">
        {{csrf_field()}}
        <br>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="company"><strong>Full name*</strong></label>
                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="business_name"><strong>Business name*</strong></label>
                <input type="text" class="form-control" id="business_name" name="business_name" placeholder="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="form-group col-md-6">
                    <label for="Website"><strong>Pone number*</strong></label>
                    <input type="number" class="form-control" id="number" name="phone_number" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label for="email"><strong>Contact Email*</strong></label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="">
                </div>
        </div>
        <br>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="industry"><strong>Time in business*</strong></label>
                <select class="form-control" name="time_business" placeholder="">
                        <option value="-3 months">-3 months</option>
                        <option value="3-6 months">3-6 months</option>
                        <option value="6-12 months">6-12 months</option>
                        <option value="1-2 years">1-2 years</option>
                        <option value="2-5 years">2-5 years</option>
                        <option value="5 years +">5 years +</option>
                    </select>
            </div>
            <div class="form-group col-md-6">
                <label for="industry"><strong>Gross Monthly Sales*</strong></label>
                <select class="form-control" name="gross_monthly" placeholder="">
                        <option value="-$5,000">-$5,000</option>
                        <option value="$5,000-$10,000">$5,000-$10,000</option>
                        <option value="$10,000-$20,000">$10,000-$20,000</option>
                        <option value="$20,000-$50,000">$20,000-$50,000</option>
                        <option value="$50,000-$75,000">$50,000-$75,000s</option>
                        <option value="$75,000-$100,000">$75,000-$100,000</option>
                        <option value="$100,000-$500,000">$100,000-$500,000</option>
                        <option value="$500,000+">$500,000+</option>
                    </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="industry"><strong>Approximate FICO Score*</strong></label>
                <select class="form-control" name="fisco" placeholder="">
                        <option value="-550">-550</option>
                        <option value="550-600">550-600</option>
                        <option value="600-650">600-650</option>
                        <option value="650-700">650-700</option>
                        <option value="2-5 years">700-750</option>
                        <option value="5 years +">750+</option>
                    </select>
            </div>
            <div class="form-group col-md-6">
                <label for=""><strong>Loan Type*</strong></label>
                <select class="form-control" name="loan_type" placeholder="">
                        <option value="Start Up / Personal">Start Up / Personal</option>
                        <option value="Working Capital / Line of Credit">Working Capital / Line of Credit</option>
                        <option value="Term Business Loan">Term Business Loan</option>
                        <option value="Equipment Loan">Equipment Loan</option>
                        <option value="Real Estate / Commercial Loan">Real Estate / Commercial Loan</option>
                </select>
            </div>
        </div>
        <br>
        <div class="form-group">
                <label for=""><strong>Loan amount*</strong></label>
                <select class="form-control" name="loan_amount" placeholder="">
                        <option value="$5-10k">$5-10k</option>
                        <option value="550-600">$10-15k</option>
                        <option value="$15-20k">$15-20k</option>
                        <option value="$20-30k">$20-30k</option>
                        <option value="$30-50k">$30-50k</option>
                        <option value="$50-100k">$50-100k</option>
                        <option value="$100-250k">$100-250k</option>
                        <option value="$250-500k">$250-500k</option>
                        <option value="$50-100k">$500-1M</option>
                        <option value="$1-5M">$1-5M</option>
                        <option value="$5-10M">$5-10M</option>
                        <option value="$10+">$10+</option>
                    </select>
        </div>
        <br>
        <div class="form-group">
            <label for=""><strong>Tell us about your project*</strong></label>
            <textarea class="form-control" name="tell_us" placeholder=""></textarea>
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
        </div>
        <br>
        <div class="form-group mt-2">
                <label for=""><strong>Attachement* </strong></label>
                <input type="file" name="attachement_link" class="form-control" id="">
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