<nav class="navbar bg-primary drop-showdow sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/images/mainlogo.png" alt="Logo" width="110"
                height="40" class="d-inline-block align-text-top">
        </a>
        <div class="nav-part">
            <div class="d-flex align-items-center gap-4 text-white nav">
                <div class="cursor-pointer">
                    <a class="text-decoration-none text-white {{ request()->route()->uri == '/' ? 'active' : ''}}" aria-current="page" href="/">Home</a>
                </div>
                {{-- <div class="cursor-pointer">
                    <a class="text-decoration-none text-white {{ request()->route()->uri == 'about' ? 'active' : ''}}" aria-current="page" href="/about">About</a>
                </div> --}}
                <div class="cursor-pointer">
                    <a class="text-decoration-none text-white {{ request()->route()->uri == 'contact-us' ? 'active' : '' }}" aria-current="page" href="/contact-us">Contact Us</a>
                </div>
                <div class="cursor-pointer"  type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <i class="bi bi-list fs-2 text-white"></i>
                </div>
            </div>
        </div>
    </div>
</nav>
