@extends('layouts.app')

@section('description',
    'Archware - Our agile approach to problem-solving and strategic planning helps you achieve
    better results for your business.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')

    <div style="background: #eaebec;" class="p-3 mt-5">
        <section style="margin-left:20%;">
            <div class="row justify-items-center">
                <div class="col-md-6 px-4">
                    <h2 style="font-weight: 700; font-size: 50px; line-height: 58px; color: #040856;">Website Design<br>and development
                    </h2>
                    <p class="px-2 py-4"
                        style="font-weight: 400;  font-size: 16px;line-height: 172%;color: rgba(4, 8, 86, 0.7);">
                        Appealing Web design, development, and value added tools<br>
                        for better ROI.
                    </p>
                </div>

                <div class="col-md-5" class="w-50">
                    <img style="width: 500px; " class="img-fluid" src="/customImages/Rectangle 651.png">
                </div>
            </div>
        </section>
    </div>

    <section style="margin-left:20%;" class="mt-5">
        <div class="row justify-items-center">
            <div class="col-md-5" class="w-50">
                <img style="width: 500px; " class="img-fluid" src="/customImages/Group 66.png">
            </div>
            <div class="col-md-6 px-4">
                <p class="px-2 py-4"
                    style="font-weight: 400;  font-size: 16px;line-height: 172%;color: rgba(4, 8, 86, 0.7);">
                    Archware technologies provide web development solutions <br>
                    to meet your business needs. Our skilled developers <br>
                    incorporate distinctive functional tools into brands, <br>
                    businesses, and enterprise websites using cutting-edge <br>
                    technology solutions to provide consumers with a superior <br>
                    experience.<br>
                    We offer a complete solution for web development, so your <br>
                    hunt for the best web development services is done. <br>
                    As your trustworthy website building company, we promise <br>
                    that for your company's maximum profitability, the rate of <br>
                    your pleasure will be as high as the rate of your client <br>
                    conversion.<br>
                    We design and build responsive websites that can be used <br>
                    on multiple platforms.
                </p>
            </div>
        </div>
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

    <div style="background: #f7f7f7" class="p-1">
    </div>


@endsection
