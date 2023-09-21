@extends("template.dashboard")
@section("content")
<div class="row">
        <div class="col-lg-12">
            <h2 class="m-lg-4">Add insight</h2>

        </div>

    </div>
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card card-primary">
            <form role="form" method="post" enctype="multipart/form-data" action="{{route('store_insight')}}">
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
                        <label for="title">Survey</label>
                        <select name="title" id="" class="form-control">
                        <option value="">Aucun</option>
                            @foreach($surveys as $survey)
                            <option value="{{$survey->title}}">{{$survey->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mt-4">
                        <label for="file">Choose file fr</label>
                        <input type="file" name="file_fr" class="form-control" id="file">
                    </div>
                    <div class="form-group mt-4">
                        <label for="file">Choose file en</label>
                        <input type="file" name="file_en" class="form-control" id="file">
                    </div>
                    <div class="form-group mt-4">
                        <label for="file">Choose file esp</label>
                        <input type="file" name="file_esp" class="form-control" id="file">
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