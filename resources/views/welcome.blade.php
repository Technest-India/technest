<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" ng-app="myApp">
    <head>
        @yield("meta")
        
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body ng-controller="homeController as home">
        <h1>TECH NEST INDIA</h1>
        @yield('content')
        @yield('script')
    </body>
</html>
