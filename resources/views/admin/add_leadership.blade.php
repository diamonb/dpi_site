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
                <form role="form" method="post" enctype="multipart/form-data" action="{{route('store_team_member')}}">
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
                        <label for="full_name">Full Name</label>
                        <input type="text" class="form-control" id="full_name" name="full_name">
                    </div>
                    <div class="form-group">
                        <label for="profil">Pofile</label>
                        <input type="text" class="form-control" id="profil" name="profil">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea id="editor" name="description" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="form-group mt-4">
                        <label for="photo">Choose image</label>
                        <input type="file" name="photo" class="form-control" id="photo">
                    </div>

                    <div class="form-group">
                        <label for="link">Linkedin Link</label>
                        <input type="text" class="form-control" id="linkedin_link" name="linkedin_link">
                    </div>
                    <div class="form-group">
                        <label for="link">Twitter Link</label>
                        <input type="text" class="form-control" id="twitter_link" name="twitter_link">
                    </div>
                    <div class="form-group">
                        <label for="link">Facebook Link</label>
                        <input type="text" class="form-control" id="facebook_link" name="facebook_link">
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