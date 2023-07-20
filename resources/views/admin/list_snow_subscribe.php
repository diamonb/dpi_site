@extends("template.dashboard")
@section("content")
    <div class="row">
        <div class="col-lg-12">
            <h2 class="m-lg-4">Snow Training List</i></h2>

        </div>

    </div>
    <div class="row">
            <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Mail</th>
                <th scope="col">Session</th>
                <th scope="col">Experience in It</th>
                <th scope="col">Time</th>
                <th scope="col">customization</th>
                <th scope="col">prefer_time</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
     
                @foreach($testimonials as $testimonial)
                <tr>
                    <td>{{$testimonial->first_name}}</td>
                    <td>{{$testimonial->last_name}}</td>
                    <td>{{$testimonial->domain}}</td>
                    <td>{{$testimonial->testimonial}} </td>
                    <td><img src="{{asset($testimonial->photo)}}" alt="photo"></td>
                    <td><form method="POST" action="{{route('share_testimonial')}}">
                    {{csrf_field()}}
                    <input type="hidden" name="id_testimonial" value="{{$testimonial->id_testimonial}}"/>
                        <button class="btn btn-success">Share</button>
                    </form>
                    <form action=""><button class="btn btn-danger">Delete</button></form>
                    </td>
                @endforeach
            </tbody>
            </table>

    </div>
@endsection