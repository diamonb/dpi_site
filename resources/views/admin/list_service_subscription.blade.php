@extends("template.dashboard")
@section("content")
    <div class="row">
        <div class="col-lg-12">
            <h2 class="m-lg-4">List of Servicenow subscription</i></h2>

        </div>

    </div>
    <div class="row">
            <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">name</th>
                <th scope="col">It experience</th>
                <th scope="col">session</th>
                <th scope="col">prefer time</th>
                <th scope="col">customization</th>
                <th scope="col">country</th>
                <th scope="col">email</th>
                <th scope="col">number</th>
                <th scope="col">town</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($servicenows as $service)
                <tr>
                    <td>{{$service->name}}</td>
                    <td>{{$service->experience_it}}</td>
                    <td>{{$service->session}}</td>
                    <td>{{$service->prefer_time}}</td>
                    <td>{{$service->customization}}</td>
                    <td>
                    <select disabled class="form-select" id="country" name="country">
                                    @foreach($countries as $country)
                                    <option value="{{$country->id}}" <?= ($service->country == $country->id) ? "selected": ""   ?> >{{$country->name}}</option>
                                    @endforeach
                    </select>
                    </td>
                    <td>{{$service->email}}</td>

                    <td>{{$service->number}}</td>
                    <td>{{$service->town}}</td>
                    <td><button class="btn btn-danger">Send mail</button></td>
                </tr>
                @endforeach
            </tbody>
            </table>

    </div>
@endsection