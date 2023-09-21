@extends("template.dashboard")
@section("content")
    <div class="row">
        <div class="col-lg-12">
            <h2 class="m-lg-4">Clients listview</i></h2>

        </div>

    </div>
    <div class="row">
            <table class="table table-responsive">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Company/Organization</th>
                <th scope="col">Industry sector</th>
                <th scope="col">Full name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Website URL</th>
                <th scope="col">Country</th>
                <th scope="col">City/Town</th>            
                <th scope="col">Address</th>
                <th scope="col">Zip code</th>
                <th scope="col">Project</th>
                <th scope="col">Specific requirement</th>
                <th scope="col">Business unit</th>
                <th scope="col">Language</th>
                <th scope="col">Hear</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
     
                @foreach($clients as $client)
                <tr>
                    <td>{{$client->compagnie}}</td>
                    <td>{{$client->insdustry}}</td>
                    <td>{{$client->full_name}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->number}} </td>
                    <td>{{$client->website}} </td>
                    <td>{{$client->name}}</td>
                    <td>{{$client->city}}</td>
                    <td>{{$client->address}} </td>               
                    <td>{{$client->zip}}</td>               
                    <td>{{$client->project}} </td>
                    <td>{{$client->requirement}}</td>
                    <td>{{$client->business_unit}}</td>
                    <td>{{$client->language}}</td>
                    <td>{{$client->hear}} </td>
                    <td>{{$client->created_at}} </td>
                    <td>
                        --------
                    </td>
                @endforeach
            </tbody>
            </table>

    </div>
@endsection