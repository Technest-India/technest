<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" ng-app="myApp">
    <head>
        @yield("meta")
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body ng-controller="homeController as home">
        @yield('content')
        @yield('script')
    </body>
</html>
