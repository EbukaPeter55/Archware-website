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
    <!--Let's Translate Your Ideas To Mobile -->
    <section style=" background: rgba(255, 255, 255, 0.95)" ; class="mt-5 pt-5">
        <div class="container justify-content-center">
            <div class="row">
                <div class="col-md-5 mt-2 pt-4">
                    <h1 style="font-weight: 700;font-size: 45px;line-height: 116%;color: #040856;">Let's Translate Your Ideas To Mobile</h1>
                    <p class="pt-3" style="font-style: normal;font-weight: 400;font-size: 18px;line-height: 155%;color: rgba(4, 8, 86, 0.7);">We make sure that your idea is translated
                        into a beautifully developed, user-friendly, and mobile solution across all modern platforms and devices.
                    </p>
                </div>
                <div class="col-md-7 px-5">
                    <img class="img-fluid" src="{{ asset('customImages/Rectangle 6512.svg') }}">
                </div>
            </div>
        </div>
    </section>
    <!--END OF Let's Translate Your Ideas To Mobile-->

    <!--We provide quality full-cycle services-->
    <section class="container">
        <div class="row">
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
        <div>
            <div style="background: #1F3F95;">
                <div class="row justify-content-center py-5">
                    <img class="col-md-2 pt-2 mx-5" style="width:110px; height: 78px;" src="{{ asset('customImages/Vector.png') }}" alt="">
                    <img class="col-md-2 pt-2 mx-5" style="width:110px; height: 78px" src="{{ asset('customImages/Vector (1).png') }}" alt="">
                    <img class="col-md-2 pt-2 mx-5" style="width:110px; height: 78px" src="{{ asset('customImages/Group 65.png') }}" alt="">
                    <img class="col-md-2 pt-2 mx-5" style="width:110px; height: 78px" src="{{ asset('customImages/Vector (3).png') }}" alt="">
                </div>
            </div>
            <div class="d-flex">
                <div style="background: linear-gradient(95.08deg, #7CB142 16.79%, #63A148 67.93%);box-shadow: 0px -23px 50px rgba(0, 0, 0, 0.08);border-radius: 0px;">
                    <p class="px-5 py-5" style="margin-top:-20px; font-weight: 700;font-size: 30px;line-height: 36px;color: #FFFFFF;"> Got a Project? Tell us about it!</p>
                </div>
                <div style="background: #040856;">
                    <p class="pt-2" style="font-weight: 700;font-size: 39px;line-height: 36px;color: #FFFFFF;">LET’S WORK <br> TOGETHER</p>
                </div>
            </div>
        </div>
    </section>
     <!--END OF LET’S WORK TOGETHER-->

    <!--services-->
    <section class="container mt-3 pt-5">
        <div class="d-flex flex-row flex-wrap justify-content-center">
            <div class="card col-md-3 mx-3" style="box-shadow:13px 13px 13px #e0e0e0;">
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
            <div class="card col-md-3 mx-3" style="box-shadow:13px 13px 13px #e0e0e0 ;">
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
            <div class="card col-md-3 mx-3" style="box-shadow:13px 13px 13px #e0e0e0 ;">
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