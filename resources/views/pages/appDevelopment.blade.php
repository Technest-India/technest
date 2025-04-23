@extends('welcome')

@section('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Development</title>
@endsection

@section('content')
        @include('layouts.navbar')
        @include('layouts.asideNavbar')

        <!-- Hero Section -->
        <section id="home" class="hero-section">
            <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6 mb-5 mb-lg-0 reveal fade-left">
                <h1 class="display-4 fw-bold mb-4">
                    Transform Ideas Into <span class="gradient-text">Mobile Experiences</span>
                </h1>
                <p class="lead text-secondary mb-5">
                    Our expert team of app developers creates innovative, user-friendly applications
                    for iOS and Android that elevate your brand and engage your audience.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3">
                    {{-- <a href="#contact" class="btn btn-primary btn-lg px-4 py-3">Get a Free Consultation</a> --}}
                    <a href="#process" class="btn btn-primary btn-lg px-4 py-3">See Our Work</a>
                </div>
                </div>
                <div class="col-lg-6 reveal fade-right">
                <img
                    src="https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?auto=format&fit=crop&q=80&w=800&h=600"
                    alt="Mobile App Development"
                    class="img-fluid rounded shadow-lg"
                >
                </div>
            </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-5">
            <div class="container py-5">
            <div class="text-center mb-5 reveal fade-up">
                <h2 class="display-5 fw-bold">Our Services</h2>
                <p class="lead text-secondary">Comprehensive mobile app solutions tailored to your business needs</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4 reveal fade-up" data-delay="100">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4 text-center">
                    <div class="service-icon mb-4">
                        {{-- <i class="fas fa-mobile-alt fa-3x text-primary"></i> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" style="width: 45px;fill: #306deb;"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M80 0C44.7 0 16 28.7 16 64l0 384c0 35.3 28.7 64 64 64l224 0c35.3 0 64-28.7 64-64l0-384c0-35.3-28.7-64-64-64L80 0zm80 432l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
                    </div>
                    <h3 class="h4 mb-3">iOS Development</h3>
                    <p class="text-secondary">Native iOS applications built with Swift for optimal performance and seamless Apple ecosystem integration.</p>
                    </div>
                </div>
                </div>

                <div class="col-md-6 col-lg-4 reveal fade-up" data-delay="200">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4 text-center">
                    <div class="service-icon mb-4">
                        {{-- <i class="fab fa-android fa-3x text-primary"></i> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width: 65px;fill: #306deb;"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M420.6 301.9a24 24 0 1 1 24-24 24 24 0 0 1 -24 24m-265.1 0a24 24 0 1 1 24-24 24 24 0 0 1 -24 24m273.7-144.5 47.9-83a10 10 0 1 0 -17.3-10h0l-48.5 84.1a301.3 301.3 0 0 0 -246.6 0L116.2 64.5a10 10 0 1 0 -17.3 10h0l47.9 83C64.5 202.2 8.2 285.6 0 384H576c-8.2-98.5-64.5-181.8-146.9-226.6"/></svg>
                    </div>
                    <h3 class="h4 mb-3">Android Development</h3>
                    <p class="text-secondary">Native Android apps developed with Kotlin or Java, optimized for the diverse range of Android devices.</p>
                    </div>
                </div>
                </div>

                <div class="col-md-6 col-lg-4 reveal fade-up" data-delay="300">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4 text-center">
                    <div class="service-icon mb-4">
                        {{-- <i class="fas fa-code fa-3x text-primary"></i> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" style="width: 65px;fill: #306deb;"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M392.8 1.2c-17-4.9-34.7 5-39.6 22l-128 448c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l128-448c4.9-17-5-34.7-22-39.6zm80.6 120.1c-12.5 12.5-12.5 32.8 0 45.3L562.7 256l-89.4 89.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l112-112c12.5-12.5 12.5-32.8 0-45.3l-112-112c-12.5-12.5-32.8-12.5-45.3 0zm-306.7 0c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3l112 112c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256l89.4-89.4c12.5-12.5 12.5-32.8 0-45.3z"/></svg>
                    </div>
                    <h3 class="h4 mb-3">Cross-Platform Apps</h3>
                    <p class="text-secondary">Cost-effective solutions using React Native or Flutter to build apps that run seamlessly across multiple platforms.</p>
                    </div>
                </div>
                </div>

                <div class="col-md-6 col-lg-4 reveal fade-up" data-delay="400">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4 text-center">
                    <div class="service-icon mb-4">
                        {{-- <i class="fas fa-paint-brush fa-3x text-primary"></i> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width: 55px;fill: #306deb;"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M339.3 367.1c27.3-3.9 51.9-19.4 67.2-42.9L568.2 74.1c12.6-19.5 9.4-45.3-7.6-61.2S517.7-4.4 499.1 9.6L262.4 187.2c-24 18-38.2 46.1-38.4 76.1L339.3 367.1zm-19.6 25.4l-116-104.4C143.9 290.3 96 339.6 96 400c0 3.9 .2 7.8 .6 11.6C98.4 429.1 86.4 448 68.8 448L64 448c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0c61.9 0 112-50.1 112-112c0-2.5-.1-5-.2-7.5z"/></svg>
                    </div>
                    <h3 class="h4 mb-3">UI/UX Design</h3>
                    <p class="text-secondary">User-centered design with intuitive interfaces that enhance user experience and drive engagement.</p>
                    </div>
                </div>
                </div>

                <div class="col-md-6 col-lg-4 reveal fade-up" data-delay="500">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4 text-center">
                    <div class="service-icon mb-4">
                        {{-- <i class="fas fa-cogs fa-3x text-primary"></i> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" style="width: 65px;fill: #306deb;"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M308.5 135.3c7.1-6.3 9.9-16.2 6.2-25c-2.3-5.3-4.8-10.5-7.6-15.5L304 89.4c-3-5-6.3-9.9-9.8-14.6c-5.7-7.6-15.7-10.1-24.7-7.1l-28.2 9.3c-10.7-8.8-23-16-36.2-20.9L199 27.1c-1.9-9.3-9.1-16.7-18.5-17.8C173.9 8.4 167.2 8 160.4 8l-.7 0c-6.8 0-13.5 .4-20.1 1.2c-9.4 1.1-16.6 8.6-18.5 17.8L115 56.1c-13.3 5-25.5 12.1-36.2 20.9L50.5 67.8c-9-3-19-.5-24.7 7.1c-3.5 4.7-6.8 9.6-9.9 14.6l-3 5.3c-2.8 5-5.3 10.2-7.6 15.6c-3.7 8.7-.9 18.6 6.2 25l22.2 19.8C32.6 161.9 32 168.9 32 176s.6 14.1 1.7 20.9L11.5 216.7c-7.1 6.3-9.9 16.2-6.2 25c2.3 5.3 4.8 10.5 7.6 15.6l3 5.2c3 5.1 6.3 9.9 9.9 14.6c5.7 7.6 15.7 10.1 24.7 7.1l28.2-9.3c10.7 8.8 23 16 36.2 20.9l6.1 29.1c1.9 9.3 9.1 16.7 18.5 17.8c6.7 .8 13.5 1.2 20.4 1.2s13.7-.4 20.4-1.2c9.4-1.1 16.6-8.6 18.5-17.8l6.1-29.1c13.3-5 25.5-12.1 36.2-20.9l28.2 9.3c9 3 19 .5 24.7-7.1c3.5-4.7 6.8-9.5 9.8-14.6l3.1-5.4c2.8-5 5.3-10.2 7.6-15.5c3.7-8.7 .9-18.6-6.2-25l-22.2-19.8c1.1-6.8 1.7-13.8 1.7-20.9s-.6-14.1-1.7-20.9l22.2-19.8zM112 176a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM504.7 500.5c6.3 7.1 16.2 9.9 25 6.2c5.3-2.3 10.5-4.8 15.5-7.6l5.4-3.1c5-3 9.9-6.3 14.6-9.8c7.6-5.7 10.1-15.7 7.1-24.7l-9.3-28.2c8.8-10.7 16-23 20.9-36.2l29.1-6.1c9.3-1.9 16.7-9.1 17.8-18.5c.8-6.7 1.2-13.5 1.2-20.4s-.4-13.7-1.2-20.4c-1.1-9.4-8.6-16.6-17.8-18.5L583.9 307c-5-13.3-12.1-25.5-20.9-36.2l9.3-28.2c3-9 .5-19-7.1-24.7c-4.7-3.5-9.6-6.8-14.6-9.9l-5.3-3c-5-2.8-10.2-5.3-15.6-7.6c-8.7-3.7-18.6-.9-25 6.2l-19.8 22.2c-6.8-1.1-13.8-1.7-20.9-1.7s-14.1 .6-20.9 1.7l-19.8-22.2c-6.3-7.1-16.2-9.9-25-6.2c-5.3 2.3-10.5 4.8-15.6 7.6l-5.2 3c-5.1 3-9.9 6.3-14.6 9.9c-7.6 5.7-10.1 15.7-7.1 24.7l9.3 28.2c-8.8 10.7-16 23-20.9 36.2L315.1 313c-9.3 1.9-16.7 9.1-17.8 18.5c-.8 6.7-1.2 13.5-1.2 20.4s.4 13.7 1.2 20.4c1.1 9.4 8.6 16.6 17.8 18.5l29.1 6.1c5 13.3 12.1 25.5 20.9 36.2l-9.3 28.2c-3 9-.5 19 7.1 24.7c4.7 3.5 9.5 6.8 14.6 9.8l5.4 3.1c5 2.8 10.2 5.3 15.5 7.6c8.7 3.7 18.6 .9 25-6.2l19.8-22.2c6.8 1.1 13.8 1.7 20.9 1.7s14.1-.6 20.9-1.7l19.8 22.2zM464 304a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                    </div>
                    <h3 class="h4 mb-3">App Maintenance</h3>
                    <p class="text-secondary">Ongoing support, bug fixes, and updates to ensure your app remains compatible with the latest OS versions.</p>
                    </div>
                </div>
                </div>

                <div class="col-md-6 col-lg-4 reveal fade-up" data-delay="600">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4 text-center">
                    <div class="service-icon mb-4">
                        {{-- <i class="fas fa-chart-line fa-3x text-primary"></i> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 55px;fill: #306deb;"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64L0 400c0 44.2 35.8 80 80 80l400 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 416c-8.8 0-16-7.2-16-16L64 64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z"/></svg>
                    </div>
                    <h3 class="h4 mb-3">App Marketing</h3>
                    <p class="text-secondary">ASO, user acquisition strategies, and analytics to grow your app's user base and increase engagement.</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>

        <!-- Development Process Section -->
        <section id="process" class="py-5">
            <div class="container py-5">
            <div class="text-center mb-5 reveal fade-up">
                <h2 class="display-5 fw-bold">Our Development Process</h2>
                <p class="lead text-secondary">A transparent and efficient approach to bring your app to life</p>
            </div>
            <div class="tab process-list-tab">
                <ul class="tabs active">
                    <li class="current" ng-click="home.appDevWorkprocess($event)">
                        <a href="#"><span>1. Discovery & Planning</span></a>
                    </li>
                    <li class="design-stage" ng-click="home.appDevWorkprocess($event)">
                        <a href="#"><span>2. Design</span></a>
                    </li>
                    <li class="" ng-click="home.appDevWorkprocess($event)">
                        <a href="#"><span>3. Development</span></a>
                    </li>
                    <li class="" ng-click="home.appDevWorkprocess($event)">
                        <a href="#"><span>4. Launch & Support</span></a>
                    </li>
                </ul>
                <div class="tab_content">
                    <div class="tabs_item" style="display: block;">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="tab-solution-content">
                                    <h3>Discovery Workshop & planning</h3>
                                    <p>We work with you to understand your business goals, target audience, and app requirements to create a comprehensive plan.</p>
                                    <ul class="tab-list">
                                        <li>
                                            <i class="fa fa-check-circle"></i> We start by getting to know your business, your goals, and your target audience.
                                        </li>
                                        <li>
                                            <i class="fa fa-check-circle"></i> Once we’re aligned on the vision, we move into gathering detailed functional and technical requirements.
                                        </li>
                                        <li>
                                            <i class="fa fa-check-circle"></i> We create basic wireframes and workflows to visualize how users will interact with the app.
                                        </li>
                                    </ul>
                                    <p>The Discovery and Planning phase is the cornerstone of successful app development. Our goal in this stage is to gain a deep understanding of your vision, your users, and your business needs—so we can build the right solution, the right way.</p>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="tab-image">
                                    <img src="/images/dis_plan.jpg" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs_item" style="display: none;">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="tab-solution-content">
                                    <h3>Design</h3>
                                    <p>Our designers create intuitive user interfaces and smooth user flows that align with your brand identity.</p>
                                    <ul class="tab-list">
                                        <li>
                                            <i class="fa fa-check-circle"></i> Our first priority is ensuring the app is easy to use, intuitive, and functional.
                                        </li>
                                        <li>
                                            <i class="fa fa-check-circle"></i> Once the structure is in place, we shift our focus to crafting a beautiful and cohesive interface.
                                        </li>
                                        <li>
                                            <i class="fa fa-check-circle"></i> We develop interactive prototypes to simulate the app’s functionality before any code is written.
                                        </li>
                                    </ul>
                                    <p>Once the foundation has been laid during Discovery and Planning, we transition into the Design Phase—where ideas are brought to life through intuitive, user-centered design. </p>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="tab-image">
                                    <img src="/images/design.jpg" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs_item" style="display: none;">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="tab-solution-content">
                                    <h3>Development</h3>
                                    <p>Our engineers build your app with clean, maintainable code using the latest development practices and technologies.</p>
                                    <ul class="tab-list">
                                        <li>
                                            <i class="fa fa-check-circle"></i> This is where the user interface (UI) is built based on the approved designs.
                                        </li>
                                        <li>
                                            <i class="fa fa-check-circle"></i> Behind the scenes, our back-end team sets up the server-side logic, APIs, and databases that power your app.
                                        </li>
                                        <li>
                                            <i class="fa fa-check-circle"></i> Delivering IT solutions that enable you to work smarter
                                        </li>
                                    </ul>
                                    <p>The Development Phase is where your app starts to come to life. With the design finalized and requirements clearly defined, our engineering team begins transforming prototypes into a fully functional product.</p>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="tab-image">
                                    <img src="/images/dev.jpg" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs_item" style="display: none;">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="tab-solution-content">
                                    <h3>Launch & Support</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.There are many variations of passages Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                    <ul class="tab-list">
                                        <li>
                                            <i class="fa fa-check-circle"></i> We handle the complete launch process, ensuring your app is deployed in a secure, stable, and optimized environment.
                                        </li>
                                        <li>
                                            <i class="fa fa-check-circle"></i> Once your app is live, we closely monitor its performance and user behavior to catch any issues early and ensure a flawless user experience.
                                        </li>
                                        <li>
                                            <i class="fa fa-check-circle"></i> Even the best apps need updates. Whether it's fixing bugs, enhancing performance, or adapting to OS updates, we provide ongoing support tailored to your needs.
                                        </li>
                                    </ul>
                                    <p>The Launch & Support Phase ensures a smooth deployment, monitors performance in real-time, and keeps your app running flawlessly as you scale and grow.</p>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="tab-image">
                                    <img src="/images/design.jpg" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



            {{-- <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                <img
                    src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=800&h=600"
                    alt="App Development Process"
                    class="img-fluid rounded shadow-lg reveal fade-right"
                >
                </div>

                <div class="col-lg-6">
                <div class="process-step d-flex reveal fade-left" data-delay="100">
                    <div class="step-icon me-4">1</div>
                    <div class="step-content">
                    <h3 class="h4 mb-2">Discovery & Planning</h3>
                    <p class="text-secondary">We work with you to understand your business goals, target audience, and app requirements to create a comprehensive plan.</p>
                    </div>
                </div>

                <div class="process-step d-flex reveal fade-left" data-delay="200">
                    <div class="step-icon me-4">2</div>
                    <div class="step-content">
                    <h3 class="h4 mb-2">UI/UX Design</h3>
                    <p class="text-secondary">Our designers create intuitive user interfaces and smooth user flows that align with your brand identity.</p>
                    </div>
                </div>

                <div class="process-step d-flex reveal fade-left" data-delay="300">
                    <div class="step-icon me-4">3</div>
                    <div class="step-content">
                    <h3 class="h4 mb-2">Development</h3>
                    <p class="text-secondary">Our engineers build your app with clean, maintainable code using the latest development practices and technologies.</p>
                    </div>
                </div>

                <div class="process-step d-flex reveal fade-left" data-delay="400">
                    <div class="step-icon me-4">4</div>
                    <div class="step-content">
                    <h3 class="h4 mb-2">Testing & QA</h3>
                    <p class="text-secondary">Rigorous testing across devices and platforms ensures your app is bug-free and performs optimally.</p>
                    </div>
                </div>

                <div class="process-step d-flex reveal fade-left" data-delay="500">
                    <div class="step-icon me-4">5</div>
                    <div class="step-content">
                    <h3 class="h4 mb-2">Launch & Support</h3>
                    <p class="text-secondary">We handle the app store submission process and provide ongoing maintenance and updates after launch.</p>
                    </div>
                </div>
                </div>
            </div> --}}
            </div>
        </section>

        @include('layouts.footer')
@endsection

@section('script')
    <script src="{{ mix('js/app.js') }}" defer></script>
@endsection
