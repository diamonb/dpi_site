@extends("template.dashboard")
@section("content")
    <div class="row">
        <div class="col-lg-12">
            <h2 class="m-lg-4">Newsletters</i></h2>

        </div>

    </div>
    <div class="row">
    <div class="col-md-10 mb-3">

        </div>
        <div class="col-md-2 justfy-context-center mb-3">
            <form action="{{route('subscibe_newsletter')}}" method="POST">
            <!--Grid row-->
            
            {{csrf_field()}}
                <button type="submit" class="btn btn-outline-success">
                Send mails
                </button>
            </form>
        </div>
    
    </div>
    <div class="row">
            <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">N°</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($newsletters as $newsletter)
                <tr>
                    <td>{{$newsletter->id_newsletter}}</td>
                    <td>{{$newsletter->email}}</td>
                    <td><button class="btn btn-warning">Contact</button></td>
                </tr>
                @endforeach
            </tbody>
            </table>

    </div>
@endsection