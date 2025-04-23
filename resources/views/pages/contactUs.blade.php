@extends('welcome')

@section('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
@endsection

@section('content')
    @include('layouts.navbar')
    @include('layouts.asideNavbar')
    <section class="py-5 bg-primary text-white">
        <div class="container py-5 text-center">
          <h2 class="display-5 fw-bold mb-4 reveal fade-up">We're here to help you grow, secure, and innovate.</h2>
          <p class="lead mb-5 mx-auto" style="max-width: 700px;">
            Reach out to us today, and let's turn your ideas into impact.
          </p>
          <a href="#contact" class="btn btn-light btn-lg px-5 py-3">Get Started Now</a>
        </div>
    </section>

      <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container py-5">
          <div class="row">
            <div class="col-lg-5 mb-5 mb-lg-0 reveal fade-right">
              <h2 class="display-5 fw-bold mb-4">Let's Discuss Your Project</h2>
              <p class="lead text-secondary mb-4">
                Whether you're looking to build a powerful website, launch a custom mobile app, secure your premises with CCTV solutions, optimize your digital presence, or upgrade your tech setup—we’ve got you covered.
              </p>
              {{-- <div class="d-flex align-items-center mb-4">
                <i class="fas fa-map-marker-alt text-primary fa-2x me-3"></i>
                <div>
                  <h5 class="mb-0">Office</h5>
                  <p class="text-secondary mb-0">123 Tech Avenue, App City, AC 10101</p>
                </div>
              </div> --}}
              <div class="d-flex align-items-center mb-4">
                <i class="fas fa-envelope text-primary fa-2x me-3"></i>
                <div>
                  <h5 class="mb-0">Email</h5>
                  <a href="mailto:technestindiasolutions@gmail.com" class="text-secondary">technestindiasolutions@gmail.com</a>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <i class="fas fa-phone text-primary fa-2x me-3"></i>
                <div>
                  <h5 class="mb-0">Phone</h5>
                  <a href="tel:+918610508486" class="text-secondary">8610508486</a>
                </div>
              </div>
            </div>
            <div class="col-lg-7 reveal fade-left">
              <div class="card border-0 shadow-sm">
                <div class="card-body p-4 p-md-5">
                  <form id="contactForm">
                    <div class="row g-3">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label for="name" class="form-label">Name</label>
                          <input type="text" class="form-control" id="name" name="username" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control" id="email" name="mail" required>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="mb-3">
                          <label for="subject" class="form-label">Subject</label>
                          <input type="text" name="content" class="form-control" id="subject" required>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="mb-3">
                          <label for="message" class="form-label">Message</label>
                          <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                      </div>
                      <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-lg w-100" ng-click="home.sendMail($event)">Send Message</button>
                      </div>
                    </div>
                  </form>
                  <p id="status" class="mt-4"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    @include('layouts.footer')

@endsection

@section('script')
    <script src="{{ mix('js/app.js') }}" defer></script>
@endsection
