@extends("template.dashboard")
@section("content")
    <div class="row">
        <div class="col-lg-12">
            <h2 class="m-lg-4">Contacts</i></h2>

        </div>

    </div>
    <div class="row">
            <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Full name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{$contact->full_name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->subject}}</td>
                    <td>{{$contact->message}}</td>
                    <td><button class="btn btn-warning">delete</button>&nbsp;&nbsp;<button class="btn btn-success">contact</button></td>
                </tr>
                @endforeach
            </tbody>
            </table>

    </div>
@endsection