@extends("template.dashboard")
@section("content")
    <div class="row">
        <div class="col-lg-12">
            <h2 class="m-lg-4">FAQs</i></h2>

        </div>

    </div>
    <div class="row">
            <table class="table table-responsive">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Question</th>
                <th scope="col">Response</th>

                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($faqs as $faq)
                <tr>
                    <td>{{$faq->question}}</td>
                    <td>{{$faq->response}}</td>
                    <td><button class="btn btn-warning">delete</button>&nbsp;&nbsp;<button class="btn btn-success">update</button></td>
                </tr>
                @endforeach
            </tbody>
            </table>

    </div>
@endsection