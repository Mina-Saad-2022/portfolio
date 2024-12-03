<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@extends('dashboard.layouts.app')

@section('title')
    <title>Admin Home Page</title>
@endsection

@section('title_of_page')
    <h2>Admin Panel Home Page Dashboard</h2>
@endsection

<style>
    .ml11 {
        font-size: 2.5em !important;
    }

    .website_image img {
        position: revert !important;
        height: 100% !important;
    }
</style>
@section('content')
    @include('website.index')
@endsection
