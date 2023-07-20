@extends("template.dashboard")
@section("content")
    <div class="row">
        <div class="col-lg-12">
            <h2 class="m-lg-4">List of surveys</i></h2>

        </div>

    </div>
    <div class="row">
            <table class="table table-responsive">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Survey title</th>
                <th scope="col">Survey description</th>
                <th scope="col">Survey link</th>
                <th scope="col">Survey image</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($surveys as $survey)
                <tr>
                    <td>{{$survey->title}}</td>
                    <td>{!!$survey->description!!}</td>
                    <td>{{$survey->link}}</td>
                    <td><img src="{{asset($survey->image)}}" alt="photo" class="img img-thumbnail"></td>
                    <td>
                        <form action="{{route('delete_survey')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$survey->id_survey}}" name="id_survey">
                        <button class="btn btn-danger"  onclick="return confirm('Are you sure you want to delete?');">Delete </button>
                        </form>
                        
                       <button class="btn btn-success">Update</button></td>
                </tr>
                @endforeach
            </tbody>
            </table>

    </div>
    <script>
        function conf() {
            return confirm("You are going to delete this survey");
        }
        
    </script>
@endsection