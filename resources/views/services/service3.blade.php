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
    <!--Let's Translate Your Ideas To Mobile -->
    <section style=" background-image: url(../customImages/Group68.png); background-repeat:no-repeat;" ; class="">
        <div class="container-fluid justify-items-center">
            <div class="d-flex flex-row">
                <div class="col-md-5 mt-5 pt-5 mx-5">
                    <h1 class="mt-3 mx-5" style="font-weight: 700;font-size: 45px;line-height: 116%;color: #040856;">Mobile App Development</h1>
                    <p class="mx-5 pt-3" style="font-style: normal;font-weight: 400;font-size: 18px;line-height: 155%;color: rgba(4, 8, 86, 0.7);">
                    Let’s Translate Your Ideas To Mobile Apps.
                    </p>
                </div>
                <div class="col">
                    <p class="img-fluid"  style="width:747px; height:350px; background-image: url(../customImages/Rectangle6512.svg); background-repeat:no-repeat; background-size:118%;align-items:flex-end">
                </div>
            </div>
        </div>
    </section>
    <!--END OF Let's Translate Your Ideas To Mobile-->

    <!--We provide quality full-cycle services-->
    <section class="container pt-5">
        <div class="d-flex flex-row">
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset('customImages/Rectangle 678.png') }}" alt="">
                <img class="img-fluid px-2" src="{{ asset('customImages/Rectangle 675.png') }}" alt="">
            </div>
            <div class="col-md-6">
                <p class="pt-3 px-5" style="font-weight: 400;font-size: 18px;line-height: 172%;color: rgba(4, 8, 86, 0.7);">
                    We provide quality full-cycle services for mobile application design, development, integration, testing,
                    maintenance, and management. Using top-of-the-line technologies, we help businesses build, manage, and modernize
                    custom applications, enabling seamless user experiences across all modern platforms and devices.Our mobile apps
                    help deliver an excellent digital experience that extends the value of your services to your customers.
                </p>
            </div>
        </div>
    </section>
    <!--END OF We provide quality full-cycle services-->

    <!--LET’S WORK TOGETHER-->
    <section class="mt-4 pt-5">
        <div class="my-4">
            <div style="background: #1F3F95; height: 246px;" class="mt-5 d-flex justify-content-center align-items-center flex-wrap">
                <div style="margin-top: -70px;">
                    <img src="/customImages/Vector.png" class="px-5">
                    <img src="/customImages/Vector (1).png" class="px-5">
                    <img src="/customImages/Group 65.png" class="px-5">
                    <img src="/customImages/Vector (3).png" class="px-5">
                </div>
            </div>

            <div style="background-image: linear-gradient(to right, #7CB142, #63A148); height: 137px;
            margin-right:310px; margin-top: -50px;" class="d-flex justify-content-center align-items-center flex-wrap">

                <span style="margin-left: auto; margin-right: 0; font-weight: 700; font-size: 30px; line-height: 36.31px; color: #ffffff;">Got a Project? Tell us about it!
                <p style="font-weight: 400;font-size: 19px;line-height: 172%;color: #FFFFFF;">No matter your budget and timeline, we're available to deliver without compromising quality.</p>
                </span>
                

                <button type="submit" class="" style="width: 291px;height: 137px;background: #040856;border: none;
            font-weight: 700;font-size: 39px;line-height: 38px;
            color: #ffffff; margin-left: auto; margin-right: 0;">LET'S WORK
                    TOGETHER</button>
            </div>
        </div>
    </section>
    <!--END OF LET’S WORK TOGETHER-->

    <!--services-->
    <section class="container mt-3 pt-5">
        <div class="d-flex flex-row flex-wrap justify-content-center">

            <div class="card col-md-3 mx-3 native" style="box-shadow:13px 13px 13px #e0e0e0;">
                <img src="{{ asset('customImages/Rectangle661.png') }}" alt="" style="object-fit:cover;">
                <div class="px-2 py-4">
                    <h2 style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                        Native Mobile App
                    </h2>
                    <p class="py-2" style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        We build fully responsive and scalable mobile apps that can withstand the test of time.
                        We create native Android and iOS applications that make the most of the features offered by the mobile platforms,
                        support extensive feature sets, and have a distinctive look and feel.
                    </p>
                </div>
            </div>
            <div class="card col-md-3 mx-3 native" style="box-shadow:13px 13px 13px #e0e0e0 ;">
                <img src="{{ asset('customImages/Rectangle 661 (1).png') }}" alt="">
                <div class="px-2 py-4">
                    <h2 style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                        Cross Platform App Development
                    </h2>
                    <p class="py-2" style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        We are skilled in delivering the best cross-platform app development services to our clients,
                        including the creation of UI/UX design,
                        wearable applications, web-based apps, and apps with AI integration.
                    </p>
                </div>
            </div>
            <div class="card col-md-3 mx-3 native" style="box-shadow:13px 13px 13px #e0e0e0 ;">
                <img src="{{ asset('customImages/Rectangle 661 (2).png') }}" alt="">
                <div class="px-2 py-4">
                    <h2 style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                        Hybrid App Development
                    </h2>
                    <p class="py-2" style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        We provide specialized hybrid app development services that are built to function
                        flawlessly across several operating systems.
                        Our team has extensive knowledge of cutting-edge mobile web development technology.
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
                    Ready to begin your mobile app project?
                </p>
                <a class="py-3" style="text-align:center;"><button style="background: #1F3F95;border-radius: 4px;border:none; width:225px; height: 56px; color:#FFFFFF">Let's Get Started!</button></a>
            </div>
        </div>
    </section>


</div>


@endsection