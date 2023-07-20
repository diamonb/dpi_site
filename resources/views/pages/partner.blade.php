@extends("template.masterother")
@section("content")
  <div class="banniere_contact">
        <p class="h1 text-center pt-5">ABOUT</p>
  </div>

<div class="" id="vmvo">
        <p  class="h2 text-center pt-5">VMVO</p>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <img class="rounded" src="{{asset('images/mission.jpg')}}" alt="" width="100%">
            
        </div>
        <div class="col">
            
            <p> <b>Our Vision:</b>    Empowering Peoples and Communities’ day-to-day’s Lives, by providing adapted and quality added value Services and Solutions they need.</p>
                    <p> <b>Our Mission:</b>  Combining the utilization of Digital, Finance and Marketing Services and Solutions to leverage both Customers and Business experiences, while improving Organizations’ Productivity, Performance and Profitability.</p>
                    <p> <b>Our values :</b> 
                        <ul>
                            <li>Human & Diversity </li>
                            <li>Integrity & Commitment </li>
                            <li>Innovation & Creativity</li>
                            <li>Quality of service & Excellence</li>
                            <li>Ecological & sustainability</li>
                        </ul>	 
                    </p>
                    <p> <b>Our Objective:</b>  Empowering Peoples and Communities’ day-to-day’s Lives, by providing adapted and quality added value Services and Solutions they need.</p>
        </div>
    </div>
</div>
<p class="h2 text-center pt-5">COMPANY</p>
<div class="container digital_class" >
          <div class="row justify-content-center">
            <div class="col-4 digital_text" data-aos="fade-right">
              <div class="row justify-content-center">
                  <div class="col-10 mt-5 text-white">
                    <p>DIEL Partners International (DPI) is a Business Consulting & Services Firm, providing tailored high added value Services and Solutions in Marketing, Finance & Digital. We help our Clients with their project development, implementation, and support, while improving their Productivity, Profitability, and Performance.</p>
                  </div>
              </div>
             
            </div>
            <div class="col-8" data-aos="fade-left">
              <img class="" src="{{asset('images/company.jpg')}}" alt="" width="100%">
            </div>
            
          </div>
        </div>
    
</div>
<p id="when_call" class="h2 text-center pt-5">WHEN CALL FOR DPI</p>

<div class="container-fluid mb-5 finance_class" >
          <div class="row justify-content-center">
            <div class="col-6" data-aos="fade-right">

                  <img class="rounded" src="{{asset('images/call.jpg')}}" alt="" width="100%">

            </div>
            <div class="col-4 when_call_text" data-aos="fade-left">
              <div class="row justify-content-center">
                  <div class="col-10 mt-5 text-white">
                    <p>We do <b> Marketing, Finance & Digital Business</b> Consulting & Services</p>
                    <p>We are a Creative, Agile and Iterative Team, focus on both Customer and Business experiences success.
                    We have been helping Small, Medium Businesses with their Marketing, Finance & Digital related projects development, implementations, and support for years.
                    We combine Marketing, Finance & Digital Services and Solutions approach to addressing our clients’ must painfully challenges, while transforming them in Great Growth opportunities…
                    </p>
                    <p>Call DPI for your Marketing, Finance and Digital related project needs. </p>
                    <ul>
                        <li>Business Consulting </li>
                        <li>Marketing Services</li>
                        <li>Growth & Development Strategy></li>
                        <li>Intermediation & Representation (US & Africa)</li>
                        <li>Commodities Trading intermediation </li>
                        <li>Business Development Representative</li>
                        <li>French speaking market Business Development Representative</li>
                        <li>Investment & Funding Services</li>
                        <li>Financial Services & Solutions</li>
                        <li>Loan Services</li>
                        <li>Technical & Financial Partnership</li>
                        <li>Investing in Africa Assistance Services</li>
                        <li>Digital Consulting</li>
                        <li>Digital Services</li>
                        <li>Digital projects Design</li>
                        <li>Digital transition & Integration</li>
                        <li>Digital project development </li>
                        <li>Digital projects implementation and support </li>
                        <li>And more</li>
                    </ul>
                    <p class="text-end"> <a href="{{route('contact')}}"> Let's get started a free DPI consultancy now <i class="fas fa-arrow-right"></i></a></p>
                  </div>
              </div>
          </div>
        </div>
<p id="leadership" class="h2 text-center pt-5">LEADERSHIP</p>

<div class="container marketing_class" id="marketing">
          <div class="row justify-content-center">
            <div class="col-4 marketing_text" data-aos="fade-right">
              <div class="row justify-content-center">
                  <div class="col-10 mt-5 text-white">
                    <p>
                        Our committed, experienced, and great team is focus on both customer and business experiences success. We put together our strong technical, management and leadership, background, while working closely with our customers and stakeholders to outstand. 
                    </p>
                    <p><b>William F. Clark</b>, General Managing Partner </p>
                    <p><img src="{{asset('images/williams.jpg')}}" width="50%" alt="">of experience in both trade and project finance. Having worked for
                      the Export import Bank of the United States (EXIM) an Export Credit Agency (ECA) recognized
                      by the Organization for Economic Co Operation &amp; Development (OECD) and as an EDN Loan
                      Originator with Overseas Private Investment Corporation (OPIC) Now known as the US
                      International Development Finance Corporation (US BUILD). (www.dfc.gov), both are agencies
                    </p>
                    <p><b>Willi-Fryd Magnima</b>,Managing Partner </p>
                    <p><b>Will</b> has an experienced background in both Marketing, Finance, and Digital industries for years.
                    Risks Taker, he is committed in providing added value services to leveraging Business solutions, empowering people, and community Lifestyles, combining the use of Marketing, Finance & Digital.
                    </p>
                  </div>
              </div>
             
            </div>
            <div class="col-8" data-aos="fade-left">
              <img class="" src="{{asset('images/leadership.jpg')}}" alt="" width="100%">
            </div>
            
          </div>
        </div>
<footer>
    @include('partials/foot')
</footer>
@endsection