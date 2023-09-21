@extends("template.dashboard")
@section("content")
<div class="row">
        <div class="col-lg-12">
            <h2 class="m-lg-4">Add news</h2>

        </div>

    </div>
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card card-primary">
            <form role="form" method="post" enctype="multipart/form-data" action="{{route('add_news')}}">
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
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">Description</label>
                        <textarea id="editor" name="description" class="form-control"></textarea>
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
                        <label for="file">Image*</label>
                        <input type="file" name="file1" class="form-control">
                    </div>
                    <div class="form-group mt-4">
                        <label for="file2">Image</label>
                        <input type="file" name="file2" class="form-control">
                    </div>
                    <div class="form-group mt-4">
                        <label for="file3">Image</label>
                        <input type="file" name="file3" class="form-control">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
</div>
    </div>
@endsection