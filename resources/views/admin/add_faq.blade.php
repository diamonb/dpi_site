@extends("template.dashboard")
@section("content")
<div class="row">
        <div class="col-lg-12">
            <h2 class="m-lg-4">Add<i> Team member</i></h2>

        </div>

    </div>
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" enctype="multipart/form-data" action="{{route('store_faq')}}">
                    {{csrf_field()}}
                    <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Question</label>
                        <textarea id="editor" name="question" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Response</label>
                        <textarea id="editor" name="response" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection