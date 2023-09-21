@extends("template.dashboard")
@section("content")
    <div class="row">
        <div class="col-lg-12">
            <h2 class="m-lg-4">Snow Training List</i></h2>

        </div>

    </div>
    <div class="row">
            <table class="table table-responsive">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Full name</th>
                <th scope="col">Email</th>
                <th scope="col">Number</th>
                <th scope="col">State/Town</th>
                <th scope="col">Note</th>
                <th scope="col">Order reference</th>
                <th scope="col">Service name</th>
                <th scope="col">Date</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
     
                @foreach($orders as $order)
                <tr>
                    <td>{{$order->full_name}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->number}}</td>
                    <td>{{$order->town}}</td>
                    <td>{{$order->note}} </td>
                    <td>{{$order->reference}} </td>
                    <td>{{$order->libelle}} </td>
                    <td>{{$order->created_at}} </td>
                    <td>
                        --------
                    </td>
                @endforeach
            </tbody>
            </table>

    </div>
@endsection