@extends('layouts.app')

@section('description',
    'Archware - Our agile approach to problem-solving and strategic planning helps you achieve
    better results for your business.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')
    <div>
        <section style=" background: rgba(255, 255, 255, 0.95)" ; class="mt-5 pt-5">
            <div class="container justify-content-center">
                <div class="row">
                    <div class="col-md-5 mt-2 pt-4">
                        <h1 style="font-weight: 700;font-size: 45px;line-height: 116%;color: #040856;">Let's Translate Your
                            Ideas To Mobile Apps</h1>
                        <p class="pt-3"
                            style="font-style: normal;font-weight: 400;font-size: 18px;line-height: 155%;color: rgba(4, 8, 86, 0.7);">
                            We make sure that your idea is translated
                            into a beautifully developed, user-friendly, and mobile solution across all modern platforms and
                            devices.
                        </p>
                    </div>
                    <div class="col-md-7 px-5">
                        <img src="{{ asset('customImages/Rectangle 6512.svg') }}">
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('customImages/Rectangle 678.png') }}" alt="">
                    <img class="px-2" src="{{ asset('customImages/Rectangle 675.png') }}" alt="">
                </div>
                <div class="col-md-6">
                    <p class="pt-3 px-5"
                        style="font-weight: 400;font-size: 18px;line-height: 172%;color: rgba(4, 8, 86, 0.7);">
                        We provide quality full-cycle services for mobile application design, development, integration,
                        testing,
                        maintenance, and management. Using top-of-the-line technologies, we help businesses build, manage,
                        and modernize
                        custom applications, enabling seamless user experiences across all modern platforms and devices.Our
                        mobile apps
                        help deliver an excellent digital experience that extends the value of your services to your
                        customers.
                    </p>
                </div>
            </div>

        </section>
        <section>
            <div style="background: #1F3F95;">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
            </div>
        </section>
    </div>

@endsection
