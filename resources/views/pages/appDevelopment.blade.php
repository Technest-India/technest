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
                        <i class="fas fa-mobile-alt fa-3x text-primary"></i>
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
                        <i class="fab fa-android fa-3x text-primary"></i>
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
                        <i class="fas fa-code fa-3x text-primary"></i>
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
                        <i class="fas fa-paint-brush fa-3x text-primary"></i>
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
                        <i class="fas fa-cogs fa-3x text-primary"></i>
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
                        <i class="fas fa-chart-line fa-3x text-primary"></i>
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
@endsection

@section('script')
    <script src="{{ mix('js/app.js') }}" defer></script>
@endsection
