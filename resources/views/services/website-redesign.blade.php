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

    <div style=" background-image: url(../customImages/Group6700.png)" class="mt-5">
        <section
            class="container mt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center block-display-tab section-top">
            <div class="archware-text-justify archware-content-text archwarejo-width-bottom-head pt-2">
                <h2 style="font-weight: 700; font-size: 50px; line-height: 58px; color: #ffffff;" class="text-title-mobile">
                    Website Redesign
                </h2>
                <p class="pt-3 text-body-mobile"
                    style="font-style: normal;font-weight: 400;font-size: 18px;line-height: 155%;color:#ffffff;">
                    Improving Business Efficiency Through Innovation
                </p>
            </div>
            <div class="archwarejo-width-top-head">
                <img class="img-fluid image-width-tab image-min-height-mobile" src="/customImages/webRectangle651.png">
            </div>
        </section>
    </div>


    <section class="container mt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center block-display-tab">
        <div class="archwarejo-width-top">
            <img class="img-fluid image-width-tab" src="/customImages/Rectangle 674.png">
        </div>
        <div class="archware-text-justify archware-content-text archwarejo-width-bottom padding-left-desktop">
            <p>
                You need the best tech company for your website makeover. We deploy a systematic approach to website
                upgrades with apt attention to site performance indices. In addition to design and content, we provide
                search engine optimization, database integration, e-commerce functionality, and more.
                With Archware tech website redesign experts, Your website is one click away from getting noticed.
            </p>
            <p>
                We have a team of professional copywriters who create content in line with your brand, business
                objectives,
                and web marketing plan. We also integrate a Content Management System (CMS) as part of our redesigning
                process to help improve the quality of your website’s content.
            </p>
            <p>
                Our team of experts efficiently analyses your existing page to determine the techniques that would be
                involved in upgrading your website.
            </p>
            <p>
                Let’s help you maintain a professional tone and appearance that can help you build credibility in your
                industry.
            </p>
        </div>
    </section>


    <!--LET’S WORK TOGETHER-->
    <section class="my-5 py-5">
        <div class="container justify-content-center">
            <div class="row">
                <p class="text-label-mobile"
                    style="font-weight: 600;font-size: 30px;line-height: 72px;color: #0D2158; text-align:center">
                    Get started with revamping your website!
                </p>
                <a href="/contacts" class="py-3" style="text-align:center;"><button
                        style="background: #1F3F95;border-radius: 4px;border:none; width:225px; color:#FFFFFF">Click
                        Here</button></a>
            </div>
        </div>
    </section>

    <!--END OF LET’S WORK TOGETHER-->

    <!--LET’S WORK TOGETHER-->

    <div style=" background-image: url(../customImages/Group72.png)" class="mt-5">
        <section
            class="container mt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center block-display-tab section-top">
            <p class="text-label-mobile py-5"
                style="font-weight: 500;font-size: 25px;line-height: 34px;text-align: center;color: #FFFFFF;mix-blend-mode: normal;">
                An outstanding brand purpose becomes an inextricable part of people’s lives. We assist businesses to
                retrace, articulate and reconnect to their purpose in the world.
            </p>
        </section>
    </div>
    <!--END OF LET’S WORK TOGETHER-->


    <!--services-->
    <section class="container mt-3 pt-5">
        <div class="d-flex flex-row flex-wrap justify-content-center">
            <div class="card col-lg-3 mx-3 native remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0;">
                <img src="{{ asset('customImages/Rectangle 661 (6).png') }}" alt="" style="object-fit:cover;">
                <div class="archware-card-padding-left px-2 py-4">
                    <h2 class="archware-card-title" style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                        B2B Website Redesign
                    </h2>
                    <p class="archware-card-paragraph-padding py-2"
                        style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        We carry out audits on your website to identify gaps that need to be bridged. We help you redesign
                        an optimized website that would rank better
                        on the search engine's result page and is also customer-focused.
                    </p>
                </div>
            </div>
            <div class="card col-lg-3 mx-3 native remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0 ;">
                <img src="{{ asset('customImages/Rectangle 661 (7).png') }}" alt="">
                <div class="archware-card-padding-left px-2 py-4">
                    <h2 class="archware-card-title" style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                        B2C Website Redesign
                    </h2>
                    <p class="archware-card-paragraph-padding py-2"
                        style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        The ever changing customers’ interests are some of the reasons your website should be updated from
                        time to time. We test, analyze and revamp
                        your existing website pages to ensure it meets the dynamic demands of your customers and search
                        engines indices.
                    </p>
                </div>
            </div>
            <div class="card col-lg-3 mx-3 native remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0 ;">
                <img src="{{ asset('customImages/Rectangle 661 (8).png') }}" alt="">
                <div class="archware-card-padding-left px-2 py-4">
                    <h2 class="archware-card-title" style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                        Ecommerce Website Redesign
                    </h2>
                    <p class="archware-card-paragraph-padding py-2"
                        style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        We offer tech solutions to your e-commerce websites by revamping your website and ensuring it is
                        responsive to all devices.
                        We create a consistent and smooth brand experience for your business, thereby, increasing conversion
                        rates.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--END OF services-->

    <section class="my-3 py-3">
        <div class="container justify-content-center">
            <div class="row">
                <p class="text-label-mobile text-label-large-screen">
                    Let's talk about revamping your website
                </p>
                <a href="/contacts" class="py-3" style="text-align:center;">
                    <button class="small-mobile-long-button archware-button-default">
                        Get In Touch
                    </button>
                </a>
            </div>
        </div>
    </section>


@endsection
