@extends("template.masterother")
@section("content")

<div class="container">
      <p class="mt-3 text-center"><strong>We are currently processing your order.</strong></p>
      <div class="row mt-4">
            <div class="col-md-12 table-responsive ">
                <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col"><b>Service</b></th>
                    <th scope="col"><b>Service description</b></th>
                    <th scope="col"><b>Application fee</b></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>{{$service->libelle}}</strong></td>
                        <td>{!!$service->description!!}</td>
                        <td>${{$service->application_fee}}</td>
                    </tr>
                </tbody>
                </table>
            </div>
         
            </div>
      </div>
</div>

  <div class="container">
  <div class="row ">

<!--Grid column-->
<div class="col-md-6">
    <img src="{{asset('images/20943993.jpg')}}" alt="" width="80%">
</div>

<div class="col-md-6 pb-5">
<h2 class="text-center w-responsive mx-auto h5"> Custumer details</h2>
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

    <form id="" name="order-form" action="{{route('save_order')}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="service" value="{{$service->id_service}}">
        <div class="form-group">
            <label for="name"><strong>Ful name*</strong></label>
            <input type="text" class="form-control" id="name" name="full_name" placeholder="">
        </div>
    @error('email')
    <span class="text-danger">{{$message}}</span>
    @enderror
    <div class="form-group">
        <label for="email"><strong>Email *</strong></label>
        <input type="email" class="form-control" name="email" id="email" placeholder="">
    </div>
    <div class="form-group">
    </div>
    <div class="form-group">
        <label for="number"><strong>Number *</strong></label>
        <input type="number" class="form-control" name="number" id="number" placeholder="">
    </div>
    <div class="form-group">
        <label for="town"><strong>State/Town</strong></label>
        <input type="text" class="form-control" name="town" id="town" placeholder="">
    </div>
    <div class="form-group">
        <label for="note"><strong>Note</strong></label>
        <input type="text" class="form-control" name="note" id="note" placeholder="">
    </div>
    <br>
    <div class="text-center text-md-left">
        <button type="submit" class="btn btn-dpi" >Submit</button>
    </div>

    </form>
    <br>

    <div class="status"></div>
</div>

</div>
  </div>

<footer>
    @include('partials/foot')
</footer>
@endsection