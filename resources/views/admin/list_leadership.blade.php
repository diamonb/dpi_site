@extends("template.dashboard")
@section("content")
    <div class="row">
        <div class="col-lg-12">
            <h2 class="m-lg-4">List of members</i></h2>

        </div>

    </div>
    <div class="row">
        <div class="table-responsive">
            <table class="table align-middle">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Full name</th>
                    <th scope="col">profile</th>
                    <th scope="col">description</th>
                    <th scope="col">linkedin link</th>
                    <th scope="col">twitter link</th>
                    <th scope="col">facebook link</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teams as $team)
                    <tr>
                        <td>{{$team->full_name}}</td>
                        <td>{{$team->profil}}</td>
                        <td>{!!$team->description!!}</td>
                        <td>{{$team->linkedin}}</td>
                        <td>{{$team->twitter}}</td>
                        <td>{{$team->facebook}}</td>
                        <td><form action="{{route('delete_member')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$team->id_team}}" name="id_team">
                        <button class="btn btn-danger"  onclick="return confirm('Are you sure you want to delete?');">Delete </button> </form> &nbsp;&nbsp;<button class="btn btn-success">Update</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
            

    </div>
@endsection