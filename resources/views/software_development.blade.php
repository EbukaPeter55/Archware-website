@extends('layouts.app')

@section('description',
'Archware - Africa\'s Leading Software Development Company
Software development company helping businesses and individuals take advantage of the benefits of the global technology landscape.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')

<section class="py-3 mt-5" style="background: #1F3F95;">
    <div class="container d-flex justify-content-between">
        <a class="white-text-link-gb" href="">Software Development</a>
        <a class="white-text-link-gb" href="">Data Analystics</a>
        <a class="white-text-link-gb" href="">Account & Finance</a>
        <a class="white-text-link-gb" href="">Leadership</a>
        <a class="white-text-link-gb" href="">Design</a>
        <a class="white-text-link-gb" href="">Business Development</a>
        <a class="white-text-link-gb" href="">Sales</a>
        <a class="white-text-link-gb" href="">Marketing</a>
        <a class="white-text-link-gb" href="">HR Management</a>
        <a class="white-text-link-gb" href="">Administration Management</a>
        <a class="white-text-link-gb" href="">Customer service</a>
    </div>
</section>

<section class="d-flex">
    <div class="">
    <img  style="max-width: 918px; height: 33em;" src="{{ asset('customImages/Group46-inst.png') }}" alt="">
    </div>
    <div class="">
    <img class="" style="margin-left:-172px; max-width:760px; height: 33em" src="{{ asset('customImages/Group 45.png') }}">
    </div>
</section>

<section class="container d-flex flex-row">
    <div class="col-lg-3 card">
        <img class="img-fluid" src="{{ asset('customImages/institute-gen-pic.png') }}" alt="">
        <div class="container">
            <h4>Introduction to Finance and Accounting Specialization</h4>
            <p>Joy Fajendagba, Gbolahan Adekoya</p>
            <p>Updated July 2022</p>
            <div class="d-flex">
                <p>4.4</p>
                <img class="img-fluid mt-1 mx-1" style="height: 12px;" src="{{ asset('customImages/star.png') }}" alt="">
                <img class="img-fluid mt-1 mx-1" style="height: 12px;" src="{{ asset('customImages/star.png') }}" alt="">
                <img class="img-fluid mt-1 mx-1" style="height: 12px;" src="{{ asset('customImages/star.png') }}" alt="">
                <img class="img-fluid mt-1 mx-1" style="height: 12px;" src="{{ asset('customImages/star.png') }}" alt="">
            </div>
            <p>₦4,999</p>
        </div>
    </div>
</section>

@endsection