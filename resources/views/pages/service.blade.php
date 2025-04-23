@extends('welcome')

@section('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service</title>
@endsection

@section('content')
    @include('layouts.navbar')
    @include('layouts.asideNavbar')
    <h3>Services</h3>
@endsection

@section('script')
    <script src="{{ mix('js/app.js') }}" defer></script>
@endsection
