@extends("template.dashboard")
@section("content")
<div class="row">
        <div class="col-lg-12">
            <h2 class="m-lg-4">Update page <i>return & refunds policy</i></h2>

        </div>

    </div>
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" enctype="multipart/form-data" action="{{route('edit_r_r_policy')}}">
                    {{csrf_field()}}
                    <div class="card-body">

                        <div class="form-group">
                            <input type="hidden" name="id_page" value="{{$page->id_page}}"/>
                            <textarea id="editor" name="description" class="form-control" rows="3">{{$page->description}}</textarea>
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

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Valider</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection