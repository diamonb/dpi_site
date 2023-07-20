@extends("template.masterother")
@section("content")

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

              <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('images/bannieres/about.jpg')}}" alt="First slide">
                <div class="carousel-caption d-md-block">
                  <span style="font-size:50px;">ABOUT</span>
                </div>
              </div>
</div>

<div class="container mt-2">
          <div class="row justify-content-center">

            <div class="col-md-6 col-lg-6 p-1" id="company">
              <img class="img-thumbnail" src="{{asset('images/vision.png')}}" alt="" width="100%">       
              <div style="">
                <p class="fs-4"> <strong>Vision - Mission - Values - Objective</strong></p>
                <p> <b>Vision:</b> Enriching the Everyday Lives of Individuals and Communities by Delivering Tailored and High-Quality Services and Solutions they Require.</p>
                      <p> <b>Mission:</b>  Integrating Digital, Financial, and Marketing Services and Solutions to Enhance Customer and Business Experiences, while impacting Organizational Productivity, Performance, and Profitability.</p>
                      <p> <b>Values:</b> 
                          <ul>
                              <li>Embracing Humanity and Diversity</li>
                              <li>Upholding Integrity and Dedication</li>
                              <li>Fostering Innovation and Creativity</li>
                              <li>Delivering Quality Service and Pursuing Excellence</li>
                              <li>Promoting Ecology and Sustainability</li>
                          </ul>	 
                      </p>
                      <p> <b>Objective:</b>  Driving Transformation, Empowerment, and Impact for Individuals, Organizations, and Communities through Customized, Value-Added Services and Solutions.</p>
               </div>  
            </div>

            <div class="col-md-6 col-lg-6 p-1">
              <img class="img-thumbnail" src="{{asset('images/company.png')}}" alt="" width="100%">       
              <div style="">
                <p class="fs-4" id="when_call"><strong>Company</strong></p>
                <p><strong>DIEL Partners International USA LLC (DPI USA LLC) </strong> is a distinguished Business Consulting Firm that specializes in providing customized, high-value services and solutions in Marketing, Finance, and Digital. Our expertise lies in assisting clients with project development and implementation, while simultaneously enhancing their productivity, profitability, and overall performance. With a focus on delivering tangible results, we strive to empower our clients and drive their success in the ever-evolving business landscape.</p>
                <p><strong>DPI USA LLC</strong> is a legally registered company in the state of Texas, United States of America. Additionally, we operate as DIEL Partners International SARL in Libreville, Gabon.</p>
              </div>            
              </div>
          </div>
          <div class="row mb-2 bg-light p-1" >

              <div class="col-md-12 col-lg-12">    
                <div style="">
                <p class="fs-4 text-center" ><strong>When should you call DPI?</strong></p>
                <p><b> Call DPI for Marketing, Financial, and Digital Business Consulting & Services. </b></p>
                      <p>
                      With years of experience helping small and medium-sized businesses with their Marketing, Finance, and Digital projects, we have developed a unique approach to combining our expertise to address your most painful challenges and transform them into great growth opportunities.
                      </p>
                      <p>We offer a comprehensive range of services to support your business growth:</p>
                </div>            
                  <div class="accordion" id="accordionExample">

                      <div class="accordion-item"  id="leadership">
                          <h2 class="accordion-header" id="headingun">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetrois" aria-expanded="false" aria-controls="collapseun">
                              <strong>We offer a comprehensive range of services to support your business growth:</strong>
                          </button>
                          </h2>
                            <div id="collapsetrois" class="accordion-collapse collapse" aria-labelledby="headingtrois" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Call DPI MS for all your marketing consulting, assistance, and services.</p>
                                <ul>
                                  <li><b>Business Consulting:</b> Benefit from our expertise in providing strategic guidance and solutions to help your business thrive.</li>
                                  <li><b>Marketing Service & Solutions:</b> Elevate your marketing efforts with our tailored services and innovative solutions.</li>
                                  <li><b>Intermediation & Representation (US & Africa):</b> Access our network and expertise for trade and business representation in the US and Africa.</li>
                                  <li><b>Trading Intermediation:</b> Facilitate successful trading ventures with our intermediation services.</li>
                                  <li><b>Business Development Representation:</b> Gain a competitive edge with our business development representation services.</li>
                                  <li><b>Investment & Funding Services:</b> Explore investment opportunities and secure funding with our specialized services.</li>
                                  <li><b>Financial Service & Solutions:</b> Optimize your financial operations with our comprehensive service offerings.</li>
                                  <li><b>Loan Service & Solutions:</b> Access customized loan solutions that align with your business objectives.</li>
                                  <li><b>Technical & Financial Partnership Assistance:</b> Benefit from our support in establishing strategic partnerships for technical and financial growth.</li>
                                  <li><b>Investing in Africa Assistance Services:</b> Receive expert guidance and assistance for investing in Africa.</li>
                                  <li><b>Digital Consulting:</b> Leverage our digital expertise to develop effective strategies for your digital transformation.</li>
                                  <li><b>Digital Service & Solutions:</b> Access a wide range of digital services and solutions to enhance your online presence.</li>
                                  <li><b>Digital Project Design:</b> Let us bring your digital projects to life with our innovative design services.</li>
                                  <li><b>Digital Transition & Integration:</b> Seamlessly transition to digital platforms and integrate digital solutions into your operations.</li>
                                  <li><b>Digital Project Development:</b> Collaborate with us to develop customized digital projects tailored to your specific needs.</li>
                                  <li><b>Digital Project Implementation and Support:</b> Rely on our expertise for smooth implementation and ongoing support of your digital projects.</li>
                                  <li>And more</li>
                              </ul>
                              <p class="text-end"> <a href="{{route('contact')}}"> Let's get started a free DPI consultancy now <i class="fas fa-arrow-right"></i></a></p>
                              </div>
                              
                            </div>
                      </div> 

                    </div>
             
                  </div>
        </div>
</div>

<p class="fs-4 text-center pt-1"><strong>Leadership</strong></p>
<div class="container ">
          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-6 leadership_text text-white" data-aos="fade-right">
              <div class="row justify-content-center">
                  <div class="col-10 mt-5 ">
                    <p> <strong>
                    Our team is dedicated to ensuring the success of both our customers and our business. With a wealth of experience and a strong focus on customer satisfaction, we bring together our expertise in technical, management, and leadership domains. By collaborating closely with our customers and stakeholders, we strive to exceed expectations and deliver outstanding results.
                    </strong>
                    
                    </p>
              </div>
             
            </div>
        </div>
            <div class="col-md-6 col-lg-6" data-aos="fade-left">
              <img class="" src="{{asset('images/companyy.png')}}" alt="" width="100%">
            </div>
            
          </div>
        </div>
</div>
<div class="container-fluid">
<section class="" style="">
  <div class="container py-5 h-100">
    <div class="row">
    @foreach($teams as $team)
    <div class="col col-md-4 col-lg-3 col-xl-4 mb-1">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-4">
            <div class="row text-black">
              <div class="col col-md-4">
                <img data-mdb-toggle="tooltip" data-placement="top" data-html="true" title="{!!$team->description!!}" src="{{asset($team->photo)}}" alt="Generic placeholder image" class="img-fluid" style="width: 100%; border-radius: 10px;">
              </div>
              <div class="col col-md-8">
                <h5 data-mdb-toggle="tooltip" data-placement="top" data-html="true" title="{!!$team->description!!}" class="mb-1">{{$team->full_name}}</h5>
                <p class="mb-2 pb-1" style="color: #2b2a2a;">{{$team->profil}}</p>
                <div class="d-flex pt-1">

                <!-- Twitter -->
                <a target="_blank" data-mdb-toggle="tooltip" title="Twitter" class="btn btn-outline-light btn-floating m-1" href="{{$team->twitter}}" role="button"><i class="text-primary fab fa-twitter"></i></a>
                <!-- Linkedin -->
                <a target="_blank"   data-mdb-toggle="tooltip" title="Linkedin" class="btn btn-outline-light btn-floating m-1" href="{{$team->linkedin}}" role="button"><i class="text-primary fab fa-linkedin-in"></i></a>
              
                <a  data-mdb-toggle="tooltip" title="Facebook" class="btn btn-outline-light btn-floating m-1 text-black"  target="_blank" href="{{$team->facebook}}" role="button"><i class="text-primary fab fa-facebook-f"></i></a>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
      
    </div>    
    </div>
      
</section>

</div>
<footer>
    @include('partials/foot')
</footer>
@endsection