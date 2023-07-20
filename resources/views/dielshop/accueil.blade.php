@extends("template.masterother")
@section("content")
  <div class="banniere_shop">
    <p class="h1 text-center pt-5">DIELShop  </p>
    
  </div>
  <div class="container">
    <div class="row">
      <div class="col-2">
      <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Marketing
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <ul>
                  <li>on details</li>
                  <li>on details</li>
                  <li>on details</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Finance
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
              <ul>
                  <li>on details</li>
                  <li>on details</li>
                  <li>on details</li>
              </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Digital
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
              <ul>
                  <li>on details</li>
                  <li>on details</li>
                  <li>on details</li>
              </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-10">

        <div class="row mt-4">
          <div class="col">

          </div>
          <div class="col">
            <div class="input-group">
            <div class="form-outline">
              <input type="search" id="form1" class="form-control" />
              <label class="form-label" for="form1">Search a DIELShop item here</label>
            </div>
            <button type="button" class="btn btn-primary">
              <i class="fas fa-search"></i>
            </button>
            </div>
            </div>
          </div>
        
        <div class="row">

          @for ($i = 0; $i < 10; $i++)
              <div class="col-3 mt-5">
                <div class="card" style="">
                  <img class="card-img-top" src="{{asset('images/produits/default.jpg')}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Product title</h5>
                    <p class="card-text">Product brief description...</p>
                    <a href="#" class="btn btn-outline-secondary btn-sm">Contact suplier</a> <i data-mdb-toggle="tooltip" title="Add to card"  class="fas fa-shopping-cart fa-sm ms-2 "></i>
                  </div>
                </div>
              </div>
          @endfor

        </div>
      </div>
    </div>
  </div>

<footer>
    @include('partials/foot')
</footer>
@endsection