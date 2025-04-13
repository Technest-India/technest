@extends('welcome')

@section('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Technest India</title>
@endsection

@section('content')
    <header>
        @include('layouts.navbar')
        @include('layouts.asideNavbar')
    </header>
    <section class="under-nav-section">
        <div class="background-top-section gradient-top-bottom start-gradient end-gradient">
            <div class="container mx-auto px-4 d-flex flex-wrap text-center flex-column justify-content-center">
                <div class="describe-section py-5">
                    <h1 class="fs-1 fw-bold mb-2 text-white">Fast, Free way to get experts</h1>
                    <div class="mb-2 text-white fs-3">Discover Top Experts in <span class="fw-bold">Chennai</span>
                    </div>
                    <div class="position-relative">
                        <p class="text-focus fw-bold p-0 m-0 fs-4">Skilled, Trusted, Reliable!</p>
                        <img alt="" width="100" height="6" class=""
                            src="/images/brushfocus.svg">
                    </div>
                </div>
                <div class="search-section mx-auto w-100 dropdown">
                    <div class="search-form" data-bs-toggle="dropdown">
                        <i class="bi bi-search text-dark-emphasis"></i>
                        <input type="text" class="form-control form-input" placeholder="Find your service" ng-model="home.searchCategoryName">
                    </div>
                    <div class="dropdown-menu w-100">
                        <div class="search-show px-3 pb-1 text-dark-emphasis" ng-if="home.checkSearch()">No Result</div>
                        <div class="recent-search-list" ng-if="home.searchCategoryList.length">
                            <div class="search-show px-3 pb-1 text-dark-emphasis">Recent Searches</div>
                            <div  class="dropdown-item py-2 cursor-pointer" ng-repeat="search in home.searchCategoryList track by $index" ng-click="home.viewCategory(search);">
                                @{{search.title}}
                            </div>
                        </div>
                        <div class="popuplar-list">
                            <div class="search-show px-3 pb-1 text-dark-emphasis">Popular Catogories</div>
                            <div class="dropdown-item py-2 popuplarCatogoryList" ng-repeat="category in home.popuplarCategoryList | filter : home.searchCategoryName track by $index" ng-click="home.viewCategory(category);">
                                @{{category.title}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="background-center-section container w-100 d-flex align-items-center p-3">
            <div class="card" ng-repeat="category in home.homeCategoryList track by category.id"
                style="background-color: @{{ category.backgroundColor }}">
                <a class="d-block cursor-pointer text-decoration-none font-18px" href="@{{ category.url }}">
                    <h2 class="fs-bold text-center p-3 rounded font-19px text-black">@{{ category.title }}</h2>
                </a>
                <ul class="d-flex align-items-center list-container pt-4 pb-4">
                    <li class="d-flex align-items-center flex-wrap flex-column cursor-pointer" ng-repeat="list in category.lists track by $index">
                        <a title="@{{ link.name }}" href="@{{ list.link }}" class="d-flex flex-column align-items-center cursor-pointer text-decoration-none text-black">
                            <img ng-src="@{{ list.image }}" height="50" width="50" class="duration-300 img-fluid category-image margin-bottom-5px" alt="Business Categories">
                            <div class="font-13px text-center d-flex justify-content-between link-title">
                                @{{ list.name }}
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="pb-3 text-center view-all-btn">
                    <a href="@{{ category.url }}" class="text-decoration-none text-primary">
                        <button class="button py-2 px-4">View all</button>
                    </a>
                </div>
            </div>

        </div>

    </section>
    @include('layouts.footer')
@endsection

@section('script')
    <script src="{{ mix('js/app.js') }}" defer></script>
@endsection
