@extends("template.master")
@section("content")

<div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-6  text-center mb-2">
            <h2><span class="badge rounded-pill bg-success">Welcome back !</span></h2>
            <h2><span class="">Please click next to configure your accompt!</span></h2>
            <form name="register" id="register" method="post" action="{{route('resgister_start_configuration')}}">
            @csrf 
            <button type="submit" class="btn btn-success">Next</button>
            </form>
    </div>

    <div class="col-md-3">

    </div>
</div>

  @include('partials/foot')
@endsection
