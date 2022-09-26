@extends('layouts.app')

@section('description',
    'Archware - Africa\'s Leading Software Development Company
    Software development company helping businesses and individuals take advantage of the benefits of the global technology
    landscape.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')
    <main>
        <section class="container-fluid hero-section" style="">
            {{-- <img src="customImages/heroImage.png" alt="heroImage"> --}}
            <div class="hero-section-copy container-xxl col-lg-7" style="">
                <h1 class="ik_stir">Empowering young Africans <br> with skills for the future </h1>
                <p>Master a specific skill to run your business better, solve a business problem, begin a career, advance
                    your skill set or simply stay current – the choice is yours.</p>
            </div>
            <div class="ik-sst">
                <input type="search" placeholder="Search for courses" class="ik-search ">

            </div>

        </section>
        <div class=" mt-5 ik-train-h1">
            <h1>Top Categories</h1>

        </div>
        <div>
            <h3>Software Development Account & Finance Design Business Development Marketing</h3>
        </div>
        <br>
        <div>
            <h2 class="ik-acc">Account & Finance Master Class</h2>
        </div>
        <div>
            <h2 class="ik-acc2">Account & Finance courses engage learners in applying the principles of corporate finance and accounting to business decision- <br> making. Gain beginner to advanced knowledge of account and finance management that is required in today’s work environment.</h2>
        </div>
    </main>

@endsection
