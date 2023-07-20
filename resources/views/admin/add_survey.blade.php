@extends("template.dashboard")
@section("content")
<div class="row">
        <div class="col-lg-12">
            <h2 class="m-lg-4">Add<i> survey</i></h2>

        </div>

    </div>
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" enctype="multipart/form-data" action="{{route('store_survey')}}">
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
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea id="editor" name="description" class="form-control" rows="3"></textarea>
                        <script>
                            ClassicEditor
                                    .create( document.querySelector( '#editor' ) )
                                    .then( editor => {
                                            console.log( editor );
                                    } )
                                    .catch( error => {
                                            console.error( error );
                                    } );
                        </script>
                    </div>

                    <div class="form-group mt-4">
                        <label for="image">Choose image</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>

                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" id="link" name="link">
                    </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection