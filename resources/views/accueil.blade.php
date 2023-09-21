@extends("template.master")
@section("content")
<!-- carousel-->

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

              <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('images/bannieres/snow.jpg')}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5> <span class="bg-dark"><a target="_blank" href="{{route('take_service')}}" class="text-warning ">To apply, click here<i class="fas fa-arrow-right"></i></a>  </span></h5>
                  <p>...</p>
                </div>
              </div>

              <div class="carousel-item ">
                <img class="d-block w-100" src="{{asset('images/bannieres/snow_fr.jpg')}}" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5> <span class="bg-dark"><a target="_blank" href="{{route('take_service_fr')}}" class="text-success ">Cliquez ici pour souscrire <i class="fas fa-arrow-right"></i></a>  </span></h5>
                  <p>...</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/bannieres/fund.jpg')}}" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5> <span class="bg-dark"><a target="_blank" href="{{route('fund')}}"  class="text-warning ">To apply, click here<i class="fas fa-arrow-right"></i></a>  </span></h5>
                  <p>...</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/bannieres/corporate.jpg')}}" alt="...">
              </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="" aria-hidden="true"><i class="fas fa-angle-left fa-5x text-warning"></i></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="" aria-hidden="true"><i class="fas fa-angle-right fa-5x text-warning"></i></span>
              <span class="visually-hidden">Next</span>
            </button>
</div>

    
        <div class="container mt-2">
          <div class="row p-1 bg-light text-black rounded ">
                <div class="col-md-4 col-lg-4" >
                  <b class="">We have been helping...</b></p>
                  <p>Small, Medium, Large company & organizations with their Marketing, Financial & Digital related projects development and implementations, for years.</p> 
                </div>
                <div class=" col-md-4 col-lg-4 " >
                  <b class="">We are a Creative, Agile and Iterative Team...</b></p>
                  <p>Focus on both customer and business experiences success.</p> 
                  <p>Our unique approach combines marketing, financial, and digital services, and solutions to effectively address our clients' challenges and transform them into exciting growth opportunities.</p>
                
                </div>
                <div class=" col-md-4 col-lg-4" >
                  <b class="">We are a dedicated partner...</b>
                  </p> 
                  <p>Focused on driving the transformation of the informal sector in Africa through the integration and utilization of technology services and solutions. Our goal is to empower and uplift 
                    businesses in the informal sector by leveraging the power of technology to unlock new opportunities and enhance their overall capabilities.</p>
                  
                </div>
          </div>
        </div>
        <div class="container mt-2">
          <div class="row">
            <div class="col-lg-4">
              <img class="img-thumbnail" src="{{asset('images/illustration/8294.jpg')}}" alt="">       
              <div style="">
                  <p class=""><strong>Your Trusted Marketing Business Consulting Partner!</strong></p>
                  <p class="">We are here to ensure that you become our next success story.
                    We understand the importance of effective marketing in driving business growth. We are committed to helping businesses like yours develop and extend their brands, products, and services throughout their lifecycle. Our goal is to empower and improve both your business and customer experiences.

                    </p>
                    <p>We offer a wide range of marketing services and solutions designed to elevate your brand and drive results. From crafting comprehensive marketing strategies to executing impactful campaigns, we provide end-to-end support to help you achieve your marketing objectives.

                    </p> <p>Join the ranks of our satisfied clients who have achieved remarkable success through our marketing services and solutions. Let us be your trusted partner in enhancing your brand, engaging your customers, and driving business growth.</p>
              </div>            
                  <div class="accordion" id="accordionExample">
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="headingun">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseun" aria-expanded="false" aria-controls="collapseun">
                              <strong>When should you reach out to DPI MS? </strong>
                          </button>
                          </h2>
                            <div id="collapseun" class="accordion-collapse collapse" aria-labelledby="headingun" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Call DPI MS for all your marketing consulting, assistance, and services.</p>
                              We offer a wide range of expertise and solutions to support your marketing needs. Here are some key areas where we can assist you:
                                <ul>
                                  <li>Proven marketing consultant</li>
                                  <li>Proven marketing consulting team</li>
                                  <li>New Ideas about your marketing</li>
                                  <li>Extra miles with your existing/new marketing project development support</li>
                                  <li>New/existing marketing project design, implementation, and support</li>
                                  <li>Insight about your market, research, studies & surveys</li>
                                  <li>New/existing products, services & solutions positioning and development. </li>
                                  <li>Branding & communication strategy </li>
                                  <li>Digital marketing</li>
                                  <li>Content edition and design</li>
                                  <li>And more</li>
                                </ul>
                                <a href="{{route('marketing')}}"><span class="fa fa-arrow-right fs-6">Learn more...</span></a>
                              </div>
                              
                            </div>
                      </div> 

                    </div>
              </div>

            <div class="col-lg-4">
                <img class="img-thumbnail" src="{{asset('images/illustration/11229.jpg')}}" alt="">
              <div style="">
                <p class=""><strong>Your Trusted Financial Business Consulting Partner!</strong></p>
                <p>We understand the unique challenges faced by business owners and individuals when it comes to securing funding and finding suitable financial solutions. Our commitment is to provide comprehensive assistance, tailored services, and innovative solutions that address your specific needs.</p>
                <p>Whether you are looking to fund a new project, expand your operations, or simply require financial guidance, our experienced team is here to help. We have a deep understanding of the financial landscape and access to a wide range of funding sources, allowing us to match you with the most suitable financing options available.</p>
                <p style="">Join the ranks of our satisfied clients who have benefited from our project funding assistance, financial services, and innovative solutions. Let us be your trusted partner in achieving your business and financial objectives. Together, we will navigate the financial landscape, overcome challenges, and pave the way for your success.</p>                 
             
              </div>                  
                  <div class="accordion mb-5" id="accordionExample">
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="heading">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                              <strong>When should you reach out to DPI Fin.? </strong>
                          </button>
                          </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Call DPI Fin. for all your financial and funding consulting needs. We offer a wide range of services and solutions to cater to your specific requirements. Here are some key areas where we can assist you:
                            <ul>
                              <li>Financial consulting</li>
                              <li>Financial service & solutions</li>
                              <li>Business loan services</li>
                              <li>Investment assistance & services</li>
                              <li>Investing in Africa assistance & services</li>
                              <li>Investing in the US assistance & services</li>
                              <li>Paiement service & solutions</li>
                              <li>And more</li>
                            </ul>
                            <a href="{{route('finance')}}"><span class="fa fa-arrow-right fs-6">Learn more...</span></a>
                          </div>
                        </div>
                      </div> 
                  </div>
            </div>
            <div class="col-lg-4">
                <img class="img-thumbnail" src="{{asset('images/illustration/13038.jpg')}}" alt="">
              <div style="">
                <p class=""><strong>Your Trusted Digital Business Consulting Partner!</strong></p>
                <p>We understand the critical role that digital plays in today's business landscape. We are committed to helping businesses like yours develop and extend your brand, products, and services throughout their lifecycle by leveraging the power of digital technology</p>
                <p>We offer a comprehensive range of services tailored to meet your specific needs. From website and mobile app development to e-commerce solutions, digital marketing campaigns, and data analytics, we provide end-to-end support in harnessing the potential of digital technologies.</p>
                <p style="">Join the ranks of our satisfied clients who have achieved success through our digital project development, implementation, and support. Let us be your trusted partner in harnessing the power of digital to elevate your business to new heights. Contact us now to begin your digital transformation journey with DPI Digital.</p>                 
              </div>      <br>            
                  <div class="accordion mb-5" id="accordionExample">
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="heading3">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                              <strong>When should you reach out to DPI Digital?  </strong>
                          </button>
                          </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                          Call DPI Digital for all your digital service and solutions project needs. We offer a wide range of services and expertise to support your digital transformation. Here are some key areas where we can assist you:
                            <ul>
                              <li>Digital consulting</li>
                              <li>Digital strategy design</li>
                              <li>Web design services</li>
                              <li>Digital service & solutions</li>
                              <li>Digital project development</li>
                              <li>Digital transition & Integration services</li>
                              <li>Digital Tool & solutions</li>
                              <li>Digital project implementation and support</li>
                              <li>Digital technical partnership assistance services</li>
                              <li>Training & certification programs services</li>
                              <li>And more</li>
                            </ul>
                            <a href="{{route('digital')}}"><span class="fa fa-arrow-right fs-6">Learn more...</span></a>
                          </div>
                        </div>
                      </div> 
                  </div>
            </div>
          </div>
        </div>
<div>

@include('partials/foot')
@endsection
