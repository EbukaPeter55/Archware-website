@extends('layouts.app')

@section('description',
    'Archware - Africa's Leading Software Development Company
Software development company helping businesses and individuals take advantage of the benefits of the global technology landscape.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')

<div>
    <!--Website Redesign -->
    <section style=" background-image: url(../customImages/Group68.png); background-repeat:no-repeat;" ; class="">
        <div class="container-fluid justify-items-center">
            <div class="d-flex flex-row">
                <div class="col-md-5 mt-5 pt-5 mx-5">
                    <h1 class="mt-3 mx-5" style="font-weight: 700;font-size: 45px;line-height: 116%;color: #040856;">Website Redesign</h1>
                    <p class="mx-5 pt-3" style="font-style: normal;font-weight: 400;font-size: 18px;line-height: 155%;color: rgba(4, 8, 86, 0.7);">
                        Improving Business Efficiency Through Innovation
                    </p>
                </div>
                <div class="col">
                    <p class="img-fluid" style="width:747px; height:350px; background-image: url(../customImages/webRectangle651.png); background-repeat:no-repeat; background-size:118%;align-items:flex-end">
                </div>
            </div>
        </div>
    </section>
    <!--END OF Website Redesign-->

    <!--We provide quality full-cycle services-->
    <section class="container pt-5">
        <div class="d-flex flex-row">
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset('customImages/Rectangle 673 (1).png') }}" alt="">
                <img class="img-fluid py-4" src="{{ asset('customImages/Rectangle 674.png') }}" alt="">
            </div>
            <div class="col-md-6">
                <p class="pt-3 px-5 mx-4" style="font-weight: 400;font-size: 18px;line-height: 172%;color: rgba(4, 8, 86, 0.7);">
                    You need the best tech company for your website makeover.<br> We deploy a systematic approach to website
                    upgrades with apt attention to site performance indices. In addition to design and content, we provide
                    search engine optimization, database integration, e-commerce functionality, and more.
                    With Archware tech website redesign experts, Your website is one click away from getting noticed.<br>
                    We have a team of professional copywriters who create content in line with your brand, business objectives,
                    and web marketing plan. We also integrate a Content Management System (CMS) as part of our redesigning
                    process to help improve the quality of your website’s content.<br>
                    Our team of experts efficiently analyses your existing page to determine the techniques that would be
                    involved in upgrading your website.<br>
                    Let’s help you maintain a professional tone and appearance that can help you build credibility in your
                    industry.</p>
            </div>
        </div>
    </section>
    <!--END OF We provide quality full-cycle services-->

    <!--LET’S WORK TOGETHER-->
    <section class="my-5 py-5">
        <div class="container justify-content-center">
            <div class="row">
                <p style="font-weight: 600;font-size: 30px;line-height: 72px;color: #0D2158; text-align:center">
                    Get started with revamping your website!
                </p>
                <a class="py-3" style="text-align:center;"><button style="background: #1F3F95;border-radius: 4px;border:none; width:225px; height: 56px; color:#FFFFFF">Click Here</button></a>
            </div>
        </div>
    </section>

    <!--END OF LET’S WORK TOGETHER-->

    <!--LET’S WORK TOGETHER-->
    <section class="mt-4 pt-5">
        <div class="my-4">
            <div style="background-image: url(../customImages/Group72.png); background-repeat:no-repeat; background-size:cover ; height: 246px;" class="mt-5 d-flex justify-content-center align-items-center flex-wrap">
                <div class="mx-5 px-5">
                    <p class="mx-3 px-5" style="font-weight: 500;font-size: 25px;line-height: 34px;text-align: center;color: #FFFFFF;mix-blend-mode: normal;">
                        An outstanding brand purpose becomes an inextricable part of people’s lives. We assist businesses to retrace, articulate and reconnect to their purpose in the world.</p>
                </div>
            </div>
        </div>
    </section>
    <!--END OF LET’S WORK TOGETHER-->


    <!--services-->
    <section class="container mt-3 pt-5">
        <div class="d-flex flex-row flex-wrap justify-content-center">

            <div class="card col-md-3 mx-3 native" style="box-shadow:13px 13px 13px #e0e0e0;">
                <img src="{{ asset('customImages/Rectangle 661 (6).png') }}" alt="" style="object-fit:cover;">
                <div class="px-2 py-4">
                    <h2 style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                        B2B Website Redesign
                    </h2>
                    <p class="py-2" style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        We carry out audits on your website to identify gaps that need to be bridged. We help you redesign an optimized website that would rank better
                        on the search engine's result page and is also customer-focused.
                    </p>
                </div>
            </div>
            <div class="card col-md-3 mx-3 native" style="box-shadow:13px 13px 13px #e0e0e0 ;">
                <img src="{{ asset('customImages/Rectangle 661 (7).png') }}" alt="">
                <div class="px-2 py-4">
                    <h2 style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                        B2C Website Redesign
                    </h2>
                    <p class="py-2" style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        The ever changing customers’ interests are some of the reasons your website should be updated from time to time. We test, analyze and revamp
                        your existing website pages to ensure it meets the dynamic demands of your customers and search engines indices.
                    </p>
                </div>
            </div>
            <div class="card col-md-3 mx-3 native" style="box-shadow:13px 13px 13px #e0e0e0 ;">
                <img src="{{ asset('customImages/Rectangle 661 (8).png') }}" alt="">
                <div class="px-2 py-4">
                    <h2 style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                        Ecommerce <br> Website Redesign
                    </h2>
                    <p class="py-2" style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        We offer tech solutions to your e-commerce websites by revamping your website and ensuring it is responsive to all devices.
                        We create a consistent and smooth brand experience for your business, thereby, increasing conversion rates.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--END OF services-->

    <section class="my-5 py-5">
        <div class="container justify-content-center">
            <div class="row">
                <p style="font-weight: 600;font-size: 30px;line-height: 72px;color: #0D2158; text-align:center">
                    Let’s talk about revamping your website
                </p>
                <a class="py-3" style="text-align:center;"><button style="background: #1F3F95;border-radius: 4px;border:none; width:225px; height: 56px; color:#FFFFFF">Get In Touch </button></a>
            </div>
        </div>
    </section>


</div>

@endsection