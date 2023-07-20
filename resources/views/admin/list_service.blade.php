@extends("template.dashboard")
@section("content")
    <div class="row">
        <div class="col-lg-12">
            <h2 class="m-lg-4">List of services</i></h2>

        </div>

    </div>
    <div class="row">
            <table class="table table-responsive">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Service</th>
                <th scope="col">Service description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($services as $service)
                <tr>
                    <td>{{$service->libelle}}</td>
                    <td>{!!$service->description!!}</td>
                    <td>
                        <form method="POST" action="{{route('edit_service')}}">
                            @csrf
                            <input type="hidden" name="service" value="{{$service->id_service}}">
                            <button class="btn btn-success">Update</button>
                        </form>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>

    </div>
@endsection