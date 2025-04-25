<footer class="bg-dark text-white py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-4">
          <h3 class="h4 mb-4">
            <span class="" style="color: #ff8a00 !important">Tech</span><span class="margin-3px" style="color:green">Nest</span>
          </h3>
          <p class="mb-4 text-white-50">
            Creating exceptional digital experiences for businesses of all sizes. Our team of experts is dedicated to delivering high-quality web solutions.
          </p>
          <div class="social-icons">
            <a href="#" class="text-white-50 me-3 fs-5">
                <img src="/images/instagram.png" alt="">
            </a>
            <a href="#" class="text-white-50 me-3 fs-5">
                <img src="/images/facebook.png" alt="" srcset="">
            </a>
            <a href="#" class="text-white-50 me-3 fs-5">
                <img src="/images/twitter.png" alt="">
            </a>
            {{-- <a href="#" class="text-white-50 fs-5"><i class="fab fa-linkedin"></i></a> --}}
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <h5 class="mb-4">Services</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="/web-development" class="text-white-50 text-decoration-none">Web Development</a></li>
            <li class="mb-2"><a href="/app-development" class="text-white-50 text-decoration-none">App Development</a></li>
            <li class="mb-2"><a href="/cctv-install" class="text-white-50 text-decoration-none">CCTV sales and services</a></li>
            <li class="mb-2"><a href="/computer" class="text-white-50 text-decoration-none">Computer & Laptop Sales</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-lg-2">
          <h5 class="mb-4">Company</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="/" class="text-white-50 text-decoration-none">Home</a></li>
            <li class="mb-2"><a href="/about" class="text-white-50 text-decoration-none">About</a></li>
            <li class="mb-2"><a href="/contact-us" class="text-white-50 text-decoration-none">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-lg-4">
          <h5 class="mb-4">Contact Info</h5>
            <div class="mb-3">
                <div class="d-flex align-content-center gap-2">
                   @include('layouts.phone')
                    <span>Phone</span>
                </div>
                <span>8610508846</span>
            </div>
            <div class="mb-3">
                <div class="d-flex align-content-center gap-2">
                   @include('layouts.email')
                    <span>Email</span>
                </div>
                <span>kamal@technestindia.in</span>
                <span>technestindiasolutions@gmail.com</span>
            </div>
            <div class="mb-3">
                <div class="d-flex align-content-center gap-2">
                   @include('layouts.address')
                    <span>Address</span>
                </div>
                <span>11 12,near 5th cross road,MG PALAYA,sector 7</span>
                <span>Bommanahalli,Bengaluru,Karnataka 560068</span>
            </div>
        </div>
      </div>
      <hr class="my-4 bg-secondary">
      <div class="row">
        <div class="text-center">
          <p class="text-white-50 mb-0 text-center">© 2025 Technest. All rights reserved.</p>
        </div>
        {{-- <div class="col-md-6 text-center text-md-end">
          <a href="#" class="text-white-50 text-decoration-none me-3">Privacy Policy</a>
          <a href="#" class="text-white-50 text-decoration-none">Terms of Service</a>
        </div> --}}
      </div>
    </div>
  </footer>

