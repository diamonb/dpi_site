@extends("template.dashboard")
@section("content")
    <div class="row">
        <div class="col-lg-12">
            <h2 class="m-lg-4">List of surveys</i></h2>

        </div>

    </div>
    <div class="row">
            <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Insight title</th>
                <th scope="col">Insight description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($insights as $insight)
                <tr>
                    <td>{{$insight->title}}</td>
                    <td>{!!$insight->description!!}</td>
                    <td><button class="btn btn-danger">Delete</button>&nbsp;&nbsp;<button class="btn btn-success">Update</button></td>
                </tr>
                @endforeach
            </tbody>
            </table>

    </div>
@endsection