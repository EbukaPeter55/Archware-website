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
    <div>
        <div style=" background-image: url(../customImages/Group68.png)" class="mt-5">
            <section
                class="container mt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center block-display-tab section-top">
                <div class="archware-content-text archwarejo-width-bottom-head pt-2">
                    <h2 style="font-weight: 700; font-size: 50px; line-height: 58px; color: #040856;"
                        class="text-title-mobile">
                        Mobile App Development
                    </h2>
                    <p class="archware-text-justify pt-3 text-body-mobile"
                        style="font-style: normal;font-weight: 400;font-size: 18px;line-height: 155%;color: rgba(4, 8, 86, 0.7);">
                        Let's Translate Your Ideas To Mobile Apps.
                    </p>
                </div>
                <div class="archwarejo-width-top-head">
                    <img class="img-fluid image-width-tab image-min-height-mobile" src="/customImages/Rectangle6512.svg">
                </div>
            </section>
        </div>


        <section
            class="container mt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center block-display-tab">
            <div class="archwarejo-width-top">
                <img class="img-fluid image-width-tab" src="/customImages/Rectangle 675.png">
            </div>
            <div class="archware-text-justify archware-content-text archwarejo-width-bottom padding-left-desktop">
                <p>
                    We provide quality full-cycle services for mobile application design, development, integration, testing,
                    maintenance, and management. Using top-of-the-line technologies, we help businesses build, manage, and
                    modernize custom applications, enabling seamless user experiences across all modern platforms
                    and devices. Our mobile apps help deliver an excellent digital experience that extends the value of
                    your services to your customers.
                </p>
            </div>
        </section>


        <div style="background-color: #1F3F95" class="mt-5">
            <section class="container mt-5 d-flex flex-flow flex-wrap
                    justify-content-center align-items-center block-display-tab section-top">
                <p class="text-label-mobile py-5"
                    style="font-weight: 500;font-size: 25px;line-height: 34px;text-align: center;color: #FFFFFF;mix-blend-mode: normal;">
                    <img src="/customImages/Vector.png" class="px-5">
                    <img src="/customImages/Vector (1).png" class="px-5">
                    <img src="/customImages/Group 65.png" class="px-5">
                    <img src="/customImages/Vector (3).png" class="px-5">
                </p>
            </section>

            <div style="background-image: linear-gradient(to right, #7CB142, #63A148); height: 137px;
                margin-right:310px; margin-top: -50px;"
                class="d-flex justify-content-center align-items-center flex-wrap">

                <span
                    style="margin-left: auto; margin-right: 0; font-weight: 700; font-size: 30px; line-height: 36.31px; color: #ffffff;">
                    Got a Project? Tell us about it!
                    <p style="font-weight: 400;font-size: 19px;line-height: 172%;color: #FFFFFF;">
                        No matter your budget and timeline, we're available to deliver without compromising quality.
                    </p>
                </span>

                <button type="submit" class=""
                        style="width: 160px;height: 137px;background: #040856;border: none;
                        font-weight: 700;font-size: 39px;line-height: 38px;
                        color: #ffffff; margin-left: auto; margin-right: 0;">
                    LET'S WORK TOGETHER
                </button>
            </div>
        </div>

        {{--
        <!--LET’S WORK TOGETHER-->
        <section class="mt-4 pt-5">
            <div class="my-4">
                <div style="background: #1F3F95; height: 246px;"
                    class="mt-5 d-flex justify-content-center align-items-center flex-wrap">
                    <div style="margin-top: -70px;">
                        <img src="/customImages/Vector.png" class="px-5">
                        <img src="/customImages/Vector (1).png" class="px-5">
                        <img src="/customImages/Group 65.png" class="px-5">
                        <img src="/customImages/Vector (3).png" class="px-5">
                    </div>
                </div>

                <div style="background-image: linear-gradient(to right, #7CB142, #63A148); height: 137px;
            margin-right:310px; margin-top: -50px;"
                    class="d-flex justify-content-center align-items-center flex-wrap">

                    <span
                        style="margin-left: auto; margin-right: 0; font-weight: 700; font-size: 30px; line-height: 36.31px; color: #ffffff;">
                        Got a Project? Tell us about it !
                        <p style="font-weight: 400;font-size: 19px;line-height: 172%;color: #FFFFFF;">No matter your budget
                            and timeline, we're available to deliver without compromising quality.</p>
                    </span>


                    <button type="submit" class=""
                            style="width: 291px;height: 137px;background: #040856;border: none;
                            font-weight: 700;font-size: 39px;line-height: 38px;
                            color: #ffffff; margin-left: auto; margin-right: 0;">
                        LET'S WORK TOGETHER
                    </button>
                </div>
            </div>
        </section>
        <!--END OF LET’S WORK TOGETHER-->
        --}}



        <!--services-->
    <section class="container mt-3 pt-5">
        <div class="d-flex flex-row flex-wrap justify-content-center">
            <div class="card col-md-3 mx-3 native remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0;">
                <img src="{{ asset('customImages/site security.png') }}" alt="" style="object-fit:cover;">
                <div class="archware-card-padding-left px-2 py-4">
                    <h2 class="archware-card-title"
                        style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                        Site Security
                    </h2>
                    <p class="archware-card-paragraph-padding py-2"
                        style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        Your website's scripts, security, and platforms must be functional to make it a success. Regular
                        updates are crucial to patch up or improve the possible vulnerabilities and security lapses.
                    </p>
                </div>
            </div>
            <div class="card col-md-3 mx-3 native remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0 ;">
                <img src="/customImages/seo.png" alt="">
                <div class="archware-card-padding-left px-2 py-4">
                    <h2 class="archware-card-title"
                        style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                        SEO
                    </h2>
                    <p class="archware-card-paragraph-padding py-2"
                        style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        The algorithm that supports SEO is rapidly evolving with the inclusion of new techniques and
                        tools. Maintaining your website will help it stay on top of the result page on search engines
                        and increase visibility to relevant customers.
                    </p>
                </div>
            </div>
            <div class="card col-md-3 mx-3 native remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0 ;">
                <img src="/customImages/website speed.png" alt="">
                <div class="archware-card-padding-left px-2 py-4">
                    <h2 class="archware-card-title"
                        style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                        Website Speed
                    </h2>
                    <p class="archware-card-paragraph-padding py-2"
                        style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        Research has shown that customers are attuned to fast and easily accessible websites. Regularly
                        improving the speed of your website yields happy customers, increases click-through rate (CTR),
                        and encourages customers to return to your website.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--END OF services-->




        <div class="container mt-5">
            <div class="p-5 row mobile-padding">

                <div class="col-md-4 p-3 inner-padding">
                    <div class="card card-height-mobile"
                        style="border-radius: 20px; box-shadow: 0 5px 10px #e6e6e6; height: 37em;">
                        <img src="/customImages/Rectangle661.png" class="card-img-top" alt="...">
                        <div class="archware-card-padding-left card-body d-flex justify-content-center align-items-center flex-wrap p-4">
                            <div class="pt-1 text-title-mobile archware-card-title"
                                style="font-weight: 700; font-size:26px; line-height: 40.3px; color: #0D2158; text-align: center;">
                                Native Mobile App
                            </div>
                            <p class="archware-card-paragraph-padding card-text archware-text-dull"
                                style="color: #0d2158; font-size: 15px; text-align: center; margin-bottom: auto;">
                                We build fully responsive and scalable mobile apps that can withstand the test of time.
                                We create native Android and iOS applications that make the most of the features offered by the
                                mobile platforms, support extensive feature sets, and have a distinctive look and feel.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-3 inner-padding">
                    <div class="card card-height-mobile"
                        style="border-radius: 20px; box-shadow: 0 5px 10px #e6e6e6; height: 37em;">
                        <img src="/customImages/Rectangle 661 (1).png" class="card-img-top" alt="...">
                        <div class="archware-card-padding-left card-body d-flex justify-content-center align-items-center flex-wrap p-4">
                            <div class="pt-1 text-title-mobile archware-card-title"
                                style="font-weight: 700; font-size:26px; line-height: 40.3px; color: #0D2158; text-align: center;">
                                Cross Platform App Development
                            </div>
                            <p class="archware-card-paragraph-padding card-text archware-text-dull"
                                style="color: #0d2158; font-size: 15px; text-align: center; margin-bottom: auto;">
                                We are skilled in delivering the best cross-platform app development services to our clients,
                                including the creation of UI/UX design, wearable applications, web-based apps, and apps with AI integration.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-3 inner-padding">
                    <div class="card card-height-mobile"
                        style="border-radius: 20px; box-shadow: 0 5px 10px #e6e6e6; height: 37em;">
                        <img src="/customImages/Rectangle 661 (2).png" class="card-img-top" alt="...">
                        <div class="archware-card-padding-left card-body d-flex justify-content-center align-items-center flex-wrap p-4">
                            <div class="pt-1 text-title-mobile archware-card-title"
                                style="font-weight: 700; font-size:26px; line-height: 40.3px; color: #0D2158; text-align: center;">
                                Hybrid App Development
                            </div>
                            <p class="archware-card-paragraph-padding card-text archware-text-dull"
                                style="color: #0d2158; font-size: 15px; text-align: center; margin-bottom: auto;">
                                We provide specialized hybrid app development services that are built to function
                                flawlessly across several operating systems. Our team has extensive knowledge of
                                cutting-edge mobile web development technology.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <section class="my-3 py-3">
            <div class="container justify-content-center">
                <div class="row">
                    <p class="text-label-mobile text-label-large-screen">
                        Ready to begin your mobile app project?
                    </p>
                    <a class="py-3" style="text-align:center;">
                        <button class="small-mobile-long-button archware-button-default">
                            Let's Get Started!
                        </button>
                    </a>
                </div>
            </div>
        </section>

    </div>


@endsection
