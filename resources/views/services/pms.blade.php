@extends('layouts.app')

@section('description',
    'Archware - Africa\'s Leading Software Development Company
Software development company helping businesses and individuals take advantage of the benefits of the global technology landscape.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')
<div>
    <!--Let's Translate Your Ideas To Mobile -->
    <!-- <section style=" background-image: url(../customImages/Group68.png); background-repeat:no-repeat;" ; class="">
        <div class="container-fluid justify-items-center">
            <div class="d-flex flex-row">
                <div class="col-md-5 mt-5 pt-5 mx-5">
                    <h1 class="mt-3 mx-5" style="font-weight: 700;font-size: 45px;line-height: 116%;color: #040856;">Project Management</h1>
                    <p class="mx-5 pt-3" style="font-style: normal;font-weight: 400;font-size: 18px;line-height: 155%;color: rgba(4, 8, 86, 0.7);">
                        We Plan. We Execute. We Manage.
                    </p>
                </div>
                <div class="col">
                    <p class="img-fluid" style="width:747px; height:350px; background-image: url(../customImages/Rectangle651pms.png); background-repeat:no-repeat; background-size:118%;align-items:flex-end">
                </div>
            </div>
        </div>
    </section> -->

                    

    <section class="container-fluid d-sm-flex flex-row 
    justify-content-between align-items-center flex-wrap projec-hero-section">
    <div class="proj-manage-left proj-left-desktop">
        <h1>Project <br>Management</h1>
        <p>We Plan. We Execute. We Manage.<p>
    </div>
    <div class="proj-manage-left proj-left-mobile">
        <h1>Project Management</h1>
        <p>We Plan. We Execute. We Manage.<p>
    </div>
    <div class="proj-manage-right">
        <img class="img-fluid" src="../customImages/Rectangle651pms.png" />   
    </div>
    </section>
    <!--END OF Let's Translate Your Ideas To Mobile-->

    <!--We provide quality full-cycle services-->
    <section class="container pt-5">
        <div class="row">
            <div class="col-md-5">
                <img class="img-fluid" src="{{ asset('customImages/Rectangle 673.png') }}" alt="">
            </div>
            <div class="col-md-7">
                <p class="pt-3 px-4" style="font-weight: 400;font-size: 18px;line-height: 172%;color: rgba(4, 8, 86, 0.7);">
                    To guarantee quality outcome, projects must be planned, managed, and possess seamless systems of
                    multiple but simultaneous integrations of other facets. By leveraging our expertise across industries,
                    markets and geographies, we deliver result-driven tasks with clear measurable social, economic and
                    environmental values.<br><br>
                    We are hands-on on projects with critical business goals, national impact value and reckonable
                    economic significance that have shaped many of the world’s major businesses and systems.<br><br>
                    We partner with private and public owners as Development and Execution Partners; we develop tight-watered
                    project frameworks to deliver transformational results. In our commitment to serve you and to uphold
                    the legacies of the programs we manage, we are with you from the birth of your project, through the
                    project lifecycle and beyond.<br><br>
                    We are valued for completing projects and programs on schedule. Our operations take into cognisance our partner's basic principles and budget lines as we advise, coordinate tasks and execute operational changes that maximize values.

                </p>
            </div>
        </div>
    </section>
    <!--END OF We provide quality full-cycle services-->

    <!--LET’S WORK TOGETHER-->
    <section class=" mt-4 pt-5">
        <div class="my-4">
            <div style="background: #1F3F95; height: 246px;" class="mt-5 d-flex justify-content-center align-items-center flex-wrap">
                <div style="margin-top: -70px;">
                    <img src="/customImages/pmsVector.png" class="px-5">
                    <img src="/customImages/pmsVector (1).png" class="px-5">
                    <img src="/customImages/pmsVector (2).png" class="px-5">
                    <img src="/customImages/pmsVector (4).png" class="px-5">
                    <img src="/customImages/pmsVector (5).png" class="px-5">
                    <img src="/customImages/pmsVector (6).png" class="px-5">
                </div>
            </div>

            <div style="text-align:center;margin-top: -47px">
                <button type="submit" class="" style="max-width: 33.0625rem; height: 73px; background: linear-gradient(95.08deg, #7CB142 16.79%, #63A148 67.93%);
            box-shadow: 0px -23px 50px rgba(0, 0, 0, 0.08);border-radius: 5px;border:none;font-weight: 500;font-size: 25px;line-height: 30px;text-align: center;
            color: #FFFFFF;margin-left: auto; margin-right: 0; padding-left: 2rem; padding-right: 2rem;">
            Let’s Manage Your Project</button>
            </div>
        </div>
    </section>
    <!--END OF LET’S WORK TOGETHER-->

    <!--services-->
    <section class="container mt-3 pt-5">
        <div class="d-flex flex-row flex-wrap justify-content-center">

            <div class="card col-md-3 mx-3 native" style="box-shadow:13px 13px 13px #e0e0e0;">
                <img src="{{ asset('customImages/Rectangle 661 (3).png') }}" alt="" style="object-fit:cover;">
                <div class="px-2 py-4">
                    <h2 style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                        Programme And Time Management
                    </h2>
                    <p class="py-2" style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        We integrate several tools and techniques to assist businesses to deliver successful projects at the right time.
                        We organise and implement strategies about the deadline assigned to the project.
                    </p>
                </div>
            </div>
            <div class="card col-md-3 mx-3 native" style="box-shadow:13px 13px 13px #e0e0e0 ;">
                <img src="{{ asset('customImages/Rectangle 661 (4).png') }}" alt="">
                <div class="px-2 py-4">
                    <h2 style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                        Project Management Consulting
                    </h2>
                    <p class="py-2" style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        Our consultants have extensive knowledge and are intellectual leaders in the fields of marketing and sales for medium- and large-sized businesses.
                        They are skilled in providing strategies that help businesses stand out.
                    </p>
                </div>
            </div>
            <div class="card col-md-3 mx-3 native" style="box-shadow:13px 13px 13px #e0e0e0 ;">
                <img src="{{ asset('customImages/Rectangle 661 (5).png') }}" alt="">
                <div class="px-2 py-4">
                    <h2 style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                        Project management Outsourcing
                    </h2>
                    <p class="py-2" style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        We assist businesses in strengthening their internal operations
                        and overall performance by spotting new possibilities and enhancing output, service quality, and customer loyalty.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--END OF services-->
    <section class="mt-5">
        <div class="container col-md-10">
            <div style="background: #1F3F95;border-radius: 20px;">
                <div class="d-flex flex-row mt-5 pt-5">
                    <div class="col-md-4 mt-4 pt-4" style="margin-left:5%" ><img class="img-fluid" src="{{ asset('customImages/pmsRectangle.png') }}"></div>
                    <div class="col-md-7 pt-5 mt-5 px-5">
                        <p style="font-weight: 700;font-size: 35px;line-height: 72px;color: #FFFFFF;">Why Choose Us?</p>
                        <p style="font-weight: 400;font-size: 20px;line-height: 36px;color: #FFFFFF;">Archware Tech utilizes process, discipline, and leadership to break down functional silos, engage stakeholders,
                         and ensure your initiatives are completed within budget, scope, and schedule. We have successfully managed several groundbreaking projects from initiation to completion. If your active project is missing milestones or is lacking momentum,
                        contact us and we will deploy project management consultants to get your project back on track.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add value comment -->
    <section class="my-3 py-3">
        <div class="container justify-content-center">
            <div class="row">
                <p class="text-label-mobile text-label-large-screen">
                    Let's add value to your operations today
                </p>
                <a class="py-3" style="text-align:center;">
                    <button class="small-mobile-long-button archware-button-default">
                        Get In Touch
                    </button>
                </a>
            </div>
        </div>
    </section>


</div>


@endsection
