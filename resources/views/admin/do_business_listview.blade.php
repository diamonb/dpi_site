@extends("template.dashboard")
@section("content")
    <div class="row">
        <div class="col-lg-12">
            <h2 class="m-lg-4">Do business listview</i></h2>

        </div>

    </div>
    <div class="row">
            <table class="table table-responsive">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Company</th>
                <th scope="col">Industry</th>
                <th scope="col">business_adress</th>
                <th scope="col">Year etablished</th>
                <th scope="col">Contact person</th>
                <th scope="col">Number</th>
                <th scope="col">Website URL</th>
                <th scope="col">Country</th>
                <th scope="col">City/Town</th>            
                <th scope="col">Address</th>
                <th scope="col">Zip code</th>
                <th scope="col">Core value</th>
                <th scope="col">Interest</th>
                <th scope="col">strength</th> 
                <th scope="col">Goals</th> 
                <th scope="col">Primary field</th> 
                <th scope="col">Expectation</th>  
                <th scope="col">Hear</th>
                <th scope="col">Date</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
     
                @foreach($dobusinesses as $dobusinesse)
                <tr>
                    <td>{{$dobusinesse->company}}</td>
                    <td>{{$dobusinesse->industry}}</td>
                    <td>{{$dobusinesse->business_adress}}</td>
                    <td>{{$dobusinesse->year_etablished}}</td>
                    <td>{{$dobusinesse->contact_person}} </td>
                    <td>{{$dobusinesse->number}} </td>
                    <td>{{$dobusinesse->website}} </td>
                    <td>{{$dobusinesse->name}}</td>
                    <td>{{$dobusinesse->city}}</td>
                    <td>{{$dobusinesse->address}} </td>               
                    <td>{{$dobusinesse->zip}}</td>               
                    <td>{{$dobusinesse->core_value}} </td>goals
                    <td>{{$dobusinesse->interest}}</td>
                    <td>{{$dobusinesse->strength}}</td>
                    <td>{{$dobusinesse->goals}}</td>
                    <td>{{$dobusinesse->primary_field}}</td>
                    <td>{{$dobusinesse->expectation}}</td>
                    <td>{{$dobusinesse->hear}} </td>
                    <td>{{$dobusinesse->created_at}} </td>
                    <td>
                        --------
                    </td>
                @endforeach
            </tbody>
            </table>

    </div>
@endsection