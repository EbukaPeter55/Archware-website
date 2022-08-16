@extends('layouts.app')

@section('description',
    'Archware - Our agile approach to problem-solving and strategic planning helps you achieve
    better results for your business.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')

    <section class="container-fluid">

        <section class="container-fluid service-section">
            <div class="d-flex flex-row align-items-center flex-wrap justify-items-center service-wrapper">
                <div class="service-section-right">
                    <h2 style="font-weight: 700; font-size: 50px; line-height: 58px">Website Design<br>and development</h2>
                    <p>
                        Over the years we have developed responsive mobile apps across
                        industries such as Fin-tech, Banking, Medical science, and many more.
                        Our team of experts is well skilled in different mobile app development
                        tools such as Atom, Git hub, Ninox, MobiLoud, React Native, Xcode, Ionic, Android Studio, etc. With
                        core competence in mobile app design and development, we have developed world-class Andriod
                    </p>
                    <button type='button'>Read More</button>
                </div>
                <img class="img-fluid"
                    src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_371/v1660455795/Rectangle_648.svg" />
            </div>
        </section>

    </section>

    <div style="background: #f7f7f7" class="p-1">
        <div class="text-center justify-content-center title-style">
            <h1 class="fw-bold archware_h1"
                style="font-weight: 700;  font-size: 46px;
                        line-height: 46.4px; color: #040856;">WE
                OFFER</h1>
            <hr class="container archware_header_underline" />


            <span class="fw-bold p-3"
                style="font-weight: 400;  font-size: 26px;
                        line-height: 40.3px; color: #040856;">
                <img src="/customImages/radio.svg">
                Web App Development
            </span>
            <span class="fw-bold p-3"
                style="font-weight: 400;  font-size: 26px;
                        line-height: 40.3px; color: #040856;">
                <img src="/customImages/radio.svg">
                B2B & B2C Portals
            </span>

            <br>

            <span class="fw-bold p-3"
                style="font-weight: 400;  font-size: 26px;
                        line-height: 40.3px; color: #040856;">
                <img src="/customImages/radio.svg">
                WordPress Development
            </span>

            <span class="fw-bold p-3"
                style="font-weight: 400;  font-size: 26px;
                        line-height: 40.3px; color: #040856;">
                <img src="/customImages/radio.svg">
                Ecommerce
            </span>

            <span class="fw-bold p-3"
                style="font-weight: 400;  font-size: 26px;
                        line-height: 40.3px; color: #040856;">
                <img src="/customImages/radio.svg">
                Single Page Application
            </span>

            <br>
            <span class="fw-bold p-3"
                style="font-weight: 400;  font-size: 26px;
                        line-height: 40.3px; color: #040856;">
                <img src="/customImages/radio.svg">
                Content Management System (CMS) Website
            </span>
        </div>
    </div>


@endsection
