@extends('layouts.app')

@section('description',
    'Archware - Africa\'s Leading Software Development Company
Software development company helping businesses and individuals take advantage of the benefits of the global technology landscape.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')

    <section style=" background-image: url(../customImages/Group68.png)" ; class="mt-5">
        <div class="container justify-content-center">
            <div class="row">
                <div class="col-md-5 mt-5 pt-3">
                    <h2 style="font-weight: 700; font-size: 50px; line-height: 58px; color: #040856;">
                        Website Design<br>and development
                    </h2>
                    <p class="pt-3"
                        style="font-style: normal;font-weight: 400;font-size: 18px;line-height: 155%;color: rgba(4, 8, 86, 0.7);">
                        Appealing Web design, development, and value added tools<br>
                        for better ROI.
                    </p>
                </div>
                <div class="col-md-7 px-2" style="">
                    <img class="img-fluid" src="{{ asset('/customImages/web design right.png') }}">
                </div>
            </div>
        </div>
    </section>


    <section class="container mt-5">
        <div class="row">
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
                <img src="/customImages/radio.svg" style="width: 12px; height: 12px;">
                Web App Development
            </span>
            <span class="fw-bold p-3"
                style="font-weight: 400;  font-size: 26px;
                        line-height: 40.3px; color: #040856;">
                <img src="/customImages/radio.svg" style="width: 12px; height: 12px;">
                B2B & B2C Portals
            </span>

            <br>

            <span class="fw-bold p-3"
                style="font-weight: 400;  font-size: 26px;
                        line-height: 40.3px; color: #040856;">
                <img src="/customImages/radio.svg" style="width: 12px; height: 12px;">
                WordPress Development
            </span>

            <span class="fw-bold p-3"
                style="font-weight: 400;  font-size: 26px;
                        line-height: 40.3px; color: #040856;">
                <img src="/customImages/radio.svg" style="width: 12px; height: 12px;">
                Ecommerce
            </span>

            <span class="fw-bold p-3"
                style="font-weight: 400;  font-size: 26px;
                        line-height: 40.3px; color: #040856;">
                <img src="/customImages/radio.svg" style="width: 12px; height: 12px;">
                Single Page Application
            </span>

            <br>
            <span class="fw-bold p-3"
                style="font-weight: 400;  font-size: 26px;
                        line-height: 40.3px; color: #040856;">
                <img src="/customImages/radio.svg" style="width: 12px; height: 12px;">
                Content Management System (CMS) Website
            </span>
        </div>
    </div>

    <div class="my-4">
        <div style="background: #1F3F95; height: 246px;"
            class="mt-5 d-flex justify-content-center align-items-center flex-wrap">
            <div style="margin-top: -70px;">
                <img src="/customImages/js.png" class="px-5">
                <img src="/customImages/php.png" class="px-5">
                <img src="/customImages/html5.png" class="px-5">
                <img src="/customImages/shopify.png" class="px-5">
                <img src="/customImages/dotnet.png" class="px-5">
                <img src="/customImages/wordpress.png" class="px-5">
                <img src="/customImages/a logo.png" class="px-5">
                <img src="/customImages/mysql.png" class="px-5">
            </div>
        </div>

        <div style="background-image: linear-gradient(to right, #7CB142, #63A148); height: 137px;
            margin-right:310px; margin-top: -50px;"
            class="d-flex justify-content-center align-items-center flex-wrap">

            <span
                style="margin-left: auto; margin-right: 0; font-weight: 700; font-size: 30px; line-height: 36.31px; color: #ffffff;">
                Ready to start your Web Development project?
                <p style="font-weight: 400;font-size: 19px;line-height: 172%;color: #FFFFFF;">
                    No matter your budget and timeline, we're available to deliver without compromising quality.
                </p>
            </span>

            <button type="submit" class=""
                style="width: 160px;height: 137px;background: #040856;border: none;
            font-weight: 700;font-size: 39px;line-height: 38px;
            color: #ffffff; margin-left: auto; margin-right: 0;">LET’S
                TALK</button>
        </div>
    </div>

    <div class="container mt-5">
        <div class="p-5 row">

            <div class="col-md-4">
                <div class="card" style="border-radius: 20px; box-shadow: 0 5px 10px #e6e6e6; height: 37em;">
                    <img src="/customImages/Rectangle 661.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-wrap p-4">
                        <div class="pt-1" style="font-weight: 700; font-size:26px; line-height: 40.3px; color: #0D2158;">
                            Web App Develppment
                        </div>
                        <p class="card-text archware-text-dull"
                            style="color: #0d2158; font-size: 15px; text-align: center;">
                            Beyond design, we offer a full stack development approach to developing a massive range of
                            solutions,
                            most of which are customized to your business needs. Our team employs a holistic approach to
                            ensure your
                            website is visually appealing and easy to navigate.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="border-radius: 20px; box-shadow: 0 5px 10px #e6e6e6; height: 37em;">
                    <img src="/customImages/Rectangle Ecommerce.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-wrap p-4">
                        <div class="pt-1"
                            style="font-weight: 700; font-size:26px; line-height: 40.3px; color: #0D2158;">
                            Ecommerce
                        </div>
                        <p class="card-text archware-text-dull"
                            style="color: #0d2158; font-size: 15px; text-align: center;">
                            Get your products in front of your customers with our e-commerce website design and development
                            service. We offer a range of
                            e-commerce website development packages to help your company succeed.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="border-radius: 20px; box-shadow: 0 5px 10px #e6e6e6; height: 37em;">
                    <img src="/customImages/Rectangle b2b.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-wrap p-4">
                        <div class="pt-1"
                            style="font-weight: 700; font-size:26px; line-height: 40.3px; color: #0D2158;">
                            B2B & B2C Portals
                        </div>
                        <p class="card-text archware-text-dull"
                            style="color: #0d2158; font-size: 15px; text-align: center;">
                            We develop B2B and B2C portals
                            and connect your manufacturers, wholesalers, distributors, and end-users. With these highly
                            scalable portal solutions, we will aid you in strengthening your customer relationships and
                            streamlining operational efficiency.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <section class="container-fluid team-section">
        <div class="d-flex flex-row flex-wrap justify-items-center team-wrapper"
            style="background: #1F3F95; border-radius: 20px 20px;">
            <img class="img-fluid p-5" style="margin-bottom: -48px; margin-top: auto; border-radius: 70px 70px 30px 50px;"
                src="/customImages/Rectangle corporate.jpg">
            <div class="team-section-right">
                <h2>Corporate Website Solutions</h2>
                <p>
                    When using any web development technology, including <br>
                    wooCommerce, WordPress, Shopify, Angular, ReactJS, <br>
                    Laravel, Lumen, PHP, MySQL, JAVA, .Net, JavaScript, <br>
                    Node.js, and HTML, our team of skilled web developers can <br>
                    construct a great website for your company that is sure to <br>
                    draw in new clients.
                </p>
            </div>
        </div>
    </section>

    <section class="my-5 py-5">
        <div class="container justify-content-center">
            <div class="row">
                <p style="font-weight: 600;font-size: 30px;line-height: 72px;color: #0D2158; text-align:center">
                    Got a Project? Tell us about it!
                </p>
                <a class="py-3" style="text-align:center;">
                    <button
                        style="background: #1F3F95;border-radius: 4px;border:none; width:165px; height: 56px; color:#FFFFFF">
                        Contact Us
                    </button>
                </a>
            </div>
        </div>
    </section>


@endsection
