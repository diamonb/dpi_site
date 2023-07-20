@extends("template.dashboard")
@section("content")
<div class="row">
        <div class="col-lg-12">
            <h2 class="m-lg-4">Add<i> service</i></h2>

        </div>

    </div>
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" enctype="multipart/form-data" action="{{route('update_service')}}">
                    @csrf
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
                            <label for="type_service">Type service</label>
                            <select name="typeservice" class="form-control" id="type_service">
                                @foreach($typeservices as $typeservice)
                                <option value="{{$typeservice->id_type_service}}" 
                                @if($typeservice->id_type_service===$service->id_type_service)
                                    {{"selected"}}
                                @endif
                                >{{$typeservice->libelle}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="libelle">Title</label>
                            <input type="text" class="form-control" value="{{$service->libelle}}" id="libelle" name="libelle">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea id="editor" name="description" class="form-control" rows="3">{{$service->description}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="app_fee">Application fee</label>
                            <input type="number" class="form-control" id="application_fee" value="{{$service->application_fee}}" name="application_fee">
                        </div>
                        <div class="form-group">
                            <label for="service_price">Service price</label>
                            <input type="number" class="form-control" id="service_price" value="{{$service->service_price}}" name="service_price">
                        </div>
                        <input type="hidden" class="form-control" value="{{$service->id_service}}"  name="id_service">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Valider</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script>
        ClassicEditor
                .create( document.querySelector( '#editor' ),{
                    ckfinder: {
                    uploadUrl: '{{route('image.upload').'?_token='.csrf_token()}}',
                    }
                })
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
    </script>
    @push('scripts')
   
    @endpush
@endsection