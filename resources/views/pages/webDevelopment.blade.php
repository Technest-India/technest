@extends('welcome')

@section('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Development</title>
@endsection

@section('content')
    @include('layouts.navbar')
    @include('layouts.asideNavbar')
    {{-- <h3>Web Development</h3> --}}

    <section id="home" class="hero-section">
      <div class="container">
        <div class="row align-items-center min-vh-100">
          <div class="col-lg-6 mb-5 mb-lg-0 reveal fade-left">
            <h1 class="display-4 fw-bold mb-4">
              We Build <span class="gradient-text">Digital Experiences</span> That Matter
            </h1>
            <p class="lead text-secondary mb-5">
              Transform your online presence with our expert web development and design services.
              We create stunning, high-performance websites tailored to your business needs.
            </p>
            <div class="d-flex flex-column flex-sm-row gap-3">
              {{-- <a href="#contact" class="btn btn-primary btn-lg px-4 py-3">Get a Free Quote</a> --}}
              <a href="" class="btn btn-outline-primary btn-lg px-4 py-3" ng-click="home.movetoprotfolio()">See Our Work</a>
            </div>
          </div>
          <div class="col-lg-6 reveal fade-right">
            <img src="/images/web_development_main_image.png" alt="Web Development"
              class="img-fluid rounded shadow-lg"
            >
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="py-5">
      <div class="container py-5">
        <div class="text-center mb-5 reveal fade-up">
          <h2 class="display-5 fw-bold">Our Services</h2>
          <p class="lead text-secondary">Comprehensive web solutions tailored to your business needs</p>
        </div>

        <div class="row g-4">
          <div class="col-md-6 col-lg-4 reveal fade-up" data-delay="100">
            <div class="card h-100 border-0 shadow-sm hover-card">
              <div class="card-body p-4 text-center">
                <div class="service-icon mb-4">
                  <img src="/images/code.png" alt="Web Development"
              class="img-fluid rounded">
                </div>
                <h3 class="mb-3">Web Development</h3>
                <p class="text-secondary">Custom websites built using modern technologies and best practices for optimal performance.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 reveal fade-up" data-delay="150">
            <div class="card h-100 border-0 shadow-sm hover-card">
              <div class="card-body p-4 text-center">
                <div class="service-icon mb-4">
                    <img src="/images/brush.png" alt="Web Development"
                    class="img-fluid rounded">
                </div>
                <h3 class="mb-3">UI/UX Design</h3>
                <p class="text-secondary">User-focused designs that enhance user experience and drive engagement with your brand.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 reveal fade-up" data-delay="200">
            <div class="card h-100 border-0 shadow-sm hover-card">
              <div class="card-body p-4 text-center">
                <div class="service-icon mb-4">
                    <img src="/images/iphone.png" alt="Web Development"
                    class="img-fluid rounded">
                </div>
                <h3 class="mb-3">Mobile Responsive</h3>
                <p class="text-secondary">Websites that look and function flawlessly across all devices and screen sizes.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 reveal fade-up" data-delay="300">
            <div class="card h-100 border-0 shadow-sm hover-card">
              <div class="card-body p-4 text-center">
                <div class="service-icon mb-4">
                    <img src="/images/search.png" alt="Web Development"
                    class="img-fluid rounded">
                </div>
                <h3 class="mb-3">SEO Optimization</h3>
                <p class="text-secondary">Improve your search engine rankings and drive organic traffic to your website.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 reveal fade-up" data-delay="400">
            <div class="card h-100 border-0 shadow-sm hover-card">
              <div class="card-body p-4 text-center">
                <div class="service-icon mb-4">
                    <img src="/images/cart.png" alt="Web Development"
                    class="img-fluid rounded">
                </div>
                <h3 class="mb-3">E-Commerce Solutions</h3>
                <p class="text-secondary">Custom online stores with secure payment gateways and inventory management systems.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 reveal fade-up" data-delay="500">
            <div class="card h-100 border-0 shadow-sm hover-card">
              <div class="card-body p-4 text-center">
                <div class="service-icon mb-4">
                    <img src="/images/database.png" alt="Web Development"
                    class="img-fluid rounded">
                </div>
                <h3 class="mb-3">Database & data management</h3>
                <p class="text-secondary">Data architecture and management.SQL (MySQL), NoSQL (MongoDB)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="portfolio" class="py-5 bg-light">
      <div class="container py-5">
        <div class="text-center mb-5 reveal fade-up">
          <h2 class="display-5 fw-bold">Our Portfolio</h2>
          <p class="lead text-secondary">Recent projects we've delivered for our clients</p>
        </div>

        <div class="row g-4">
          <div class="col-md-6 col-lg-6 reveal fade-up">
            <div class="portfolio-item card border-0 shadow-sm overflow-hidden">
                <a href="https://nearworker.netlify.app" style="text-decoration: none;color: rgb(10, 6, 6);" target="_blank">
                    <img src="/images/nearworker.png" class="card-img-top" alt="E-commerce Website">
                    <div class="card-body">
                      <h5 class="card-title">Nearworker</h5>
                      <p class="card-text text-secondary">One-stop destination to get trusted and expert professionals near you right at your doorstep.</p>
                      <span class="badge bg-primary me-1">React</span>
                      {{-- <span class="badge bg-info">MongoDB</span> --}}
                    </div>
                </a>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 reveal fade-up" data-delay="200">
            <div class="portfolio-item card border-0 shadow-sm overflow-hidden">
                <a href="https://gssysnet.com/" style="text-decoration: none;color: rgb(10, 6, 6);" target="_blank">
                    <img src="/images/gssysnet.png" class="card-img-top" alt="Corporate Website">
                    <div class="card-body">
                      <h5 class="card-title">Gs Sysnet</h5>
                      <p class="card-text text-secondary">We bring network to life.World-Class Hardware,Services & CCTV Security services</p>
                      <span class="badge bg-primary me-1">HTML</span>
                      <span class="badge bg-secondary me-1">Javascript</span>
                    </div>
                </a>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('script')
    <script src="{{ mix('js/app.js') }}" defer></script>
@endsection
