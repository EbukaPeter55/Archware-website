@extends('layouts.app')
{{-- The loading spinner --}}
<div class="loader-container">
    <div class="spinner"></div>
</div>

@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')


{{-- @gbolahan --}}

<section class="container-fluid">
    <!-- MOBILE HERO SECTION -->
    <div class="mobile-hero" style="">
        <div class="d-sm-flex flex-row flex-wrap justify-content-center align-items-center mobile-hero-wrapper">
            <div style="margin-top: .8rem">
                <img class="img-fluid" src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_374/v1660914041/Frame_44.png" alt="hero image">
            </div>
            <div class="mobile-copy-hero">
                <h1 class="mobile-hero-title" style="font-weight: 700; color: #040856; font-size: 3.125rem;">
                    <br><br><b>Excellent Tech-Based <br>Solutions
                        For Your Business</b>
                </h1>
                <p class="mt-3" style="font-weight: 400;font-size: 1rem;
                                color: rgba(4, 8, 86, 0.7);">
                    Our agile approach to problem-solving and strategic planning
                    helps you build a better structure and achieve better results in
                    your business.</p>
                <a href="/project-management">
                    <button class="small-mobile-long-button mt-3">
                        Read More
                    </button></a>
            </div>
        </div>
    </div>
    <!-- END OF MOBILE HERO SECTION -->

    <!-- HERO SECTION -->
    <section class="container-fluid hero-wrapper" style="background: #F5F5F5!important; margin-top: 5rem; height: auto;">
        @include('errors.error_message')
        <!-- THE CAROUSEL -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <!-- The slideshow/carousel -->
            <div class="carousel-inner" style="max-height:70vh">
                <!-- First slide -->
                <div class="carousel-item active" style="height:70vh">
                    <div class="d-sm-flex flex-row flex-wrap justify-content-center align-items-center">
                        <div>
                            <h1 class="" style="font-weight: 700; color: #040856; font-size: 3.125rem; margin-top: -1rem">
                                <br><br><b>Excellent Tech-based <br> Solutions for Businesses</b>
                            </h1>
                            <p class="mt-3" style="font-weight: 400;font-size: 16px;
        color: rgba(4, 8, 86, 0.7);">
                                Our agile approach to problem-solving and strategic planning helps you build
                                a<br> better structure and achieve better results in your business.</p>
                            <a href="/project-management">
                                <button class="small-mobile-long-button mt-3" style="font-weight: 500;font-size: 16px; width: 161px; height: 44px;
                        border: none;color: #ffffff;border-radius: 8px;
                        background: #1F3F95;">
                                    Read More
                                </button></a>
                        </div>
                        <div style="margin-top: 7rem">
                            <img class="img-fluid" src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_374/v1660914041/Frame_44.png" alt="hero section middle image">
                        </div>
                    </div>
                </div>

                <!-- Second slide -->
                <div class="carousel-item hide-mobile" style="height:70vh">
                    <!-- Review card -->
                    <div class="d-sm-flex flex-row flex-wrap justify-content-evenly align-items-center" style="max-height:70vh">
                        <div style="margin-top: 2rem">
                            <img class="img-fluid" src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,w_406/v1660900289/Group_63_1.png" alt="hero section second image">
                        </div>

                        <div>
                            <h1 class="pt-4" style="font-weight: 700; color: #040856; font-size: 3.12rem;">
                                Acquire Tech Skills for <br> a Borderless Career
                            </h1>
                            <p class="mt-4" style="font-weight: 400;font-size: 1rem; color: rgba(4, 8, 86, 0.7);
                                            max-width: 36.25rem; line-height: 155%;">
                                Become an expert in tech without prior knowledge and stay ahead of the <br> global market and competition.
                            </p>
                            <a href="#">
                                <button class="small-mobile-long-button mt-5" style="font-weight: 500;font-size: 16px; width: 161px; height: 44px;
                        border: none;color: #ffffff;border-radius: 8px;
                        background: #1F3F95;">
                                    Read More
                                </button></a>
                        </div>
                    </div>
                </div>

                <!-- Third slide -->
                <div class="carousel-item hide-mobile" style="height:70vh">
                    <div class="d-sm-flex flex-row flex-wrap justify-content-between" style="padding-left: 12%;">
                        <div style="padding-bottom: 2%;">
                            <h1 class="" style="font-weight: 700; color: #040856; font-size: 50px;">
                                <br><br>Top-notch Website<br> Designs and Development
                            </h1>
                            <p class="mt-4" style="font-weight: 400;font-size: 16px;
        color: rgba(4, 8, 86, 0.7);">
                                Get fully optimised and responsive website designs that give your business the<br>
                                visibility it requires to compete effectively in the global market space.</p>
                            <a href="/website-design-and-development">
                                <button class="small-mobile-long-button mt-5" style="font-weight: 500;font-size: 16px; width: 161px; height: 44px;
                        border: none;color: #ffffff;border-radius: 8px;
                        background: #1F3F95;">
                                    Read more
                                </button></a>
                        </div>
                        <div>
                            <img class="img-fluid" style="height: 70vh;" src="{{ asset('customImages/Rectangle 651.svg') }}" alt="hero section third slide" alt="hero section third slide">
                        </div>
                    </div>

                </div>

                <!-- Left and right controls/icons -->
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <img class="img-fluid" src="{{ asset('customImages/Vector.svg') }}">
                    </button> -->
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <img class="img-fluid" src="{{ asset('customImages/Vector (1).svg') }}" alt="left and right control slider image">
                    <!-- <span class="carousel-control-next-icon"></span> -->
                </button>
            </div>
        </div>

    </section>

</section>
<!-- End OF CAROUSEL -->

<!-- WHY CHOOSE ARCHWARE TEAM SECTION -->
<section class="container-fluid team-section" style="margin-top: 12%">
    <div class="d-sm-flex flex-row flex-wrap justify-content-center team-wrapper">
        <img class="col-lg-5 img-fluid" src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_347/v1660830314/core-values-4_1.svg" alt="why choose archware team" />

        <div class="team-section-right">
            <h2>Why Choose Archware Team?</h2>
            <p>
                Our goal is to assist our partners in overturning challenges into an
                advantage. We offer a diverse and unique set of tools and prioritise resources
                in view of our partners' budgets and in line with their vision and project objectives.</p>

            <p>Our multidisciplinary and cross-functional teams, comprising data analysts,
                software developers, and UI/UX designers are equipped and motivated towards
                building unique products that service growth-focused businesses. </p>

            <p>We offer a bouquet of services which are tailored to achieving sustainable
                profitability goals for our clients. Hence, we are committed to delivering
                scalable solutions at all times.
            </p>
        </div>
    </div>
</section>
<!--END OF WHY CHOOSE ARCHWARE TEAM SECTION -->

<!-- PROOF OF WORK -->
<section class="container-fluid  proof-of-work">
    <div class="d-md-flex flex-wrap proof-of-work-child justify-content-around web-pow">
        <div class="web col-md-3 pow-web">
            <h1 class="incrementTimer website-number" akhi="25">0</h1>
            <p class="incre pow-body website-number wee-b" style="margin-left: 40px;">Websites</p>
        </div>

        <div class="web col-md-3 pow-web">
            <h1 class="incrementTimer website-number" akhi="40">0</h1>
            <p class="pow-body website-number completed-p" style="margin-left: 0px ; text-align:center">Completed Projects</p>
        </div>

        <div class="customers col-md-3 pow-web">
            <h1 class="incrementTimer" akhi="20">0</h1>
            <p class="pow-body" style="margin-left: -10px; ;">Happy customers</p>
        </div>
    </div>

</section>
<!-- END OF PROOF OF WORK -->

<!-- SERVICES BRIEF SECTION -->
</section>
<section class="container-fluid proj-man" style="margin-top: 4%">
    <div class="d-flex flex-row align-items-center flex-wrap justify-content-evenly proj-wrapper">
        <div class="proj-man-right text-and-pictures">
            <h2>Mobile App Development</h2>
            <p>
                Over the years, we have developed responsive mobile apps across industries
                such as Fin-tech, Banking, Health and many more. Our team of experts is well skilled in
                different mobile app development tools such as Atom, Github, Ninox, MobiLoud, React Native, Xcode,
                Ionic, Android Studio, etc. With core competence in mobile app design and development, we have developed world-class
                Android, and iOS apps.
            </p>
            <a href="/project-management"><button class="small-mobile-long-button" type='button'>Read More
                </button></a>
        </div>
        <img class="img-fluid" style="width:620px" src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_371/v1660455795/Rectangle_648.svg" alt="over the years image" />
    </div>
</section>


<!-- ACCOUNT AND EXPENSE MANAGEMENT SECTION -->
<section class="container-fluid support" style="margin-top: 4%">
    <div class="d-sm-flex flex-row flex-wrap align-items-center justify-content-evenly support-section">
        <div class="">
            <img style="width: 100%; " class="img-fluid" src="{{ asset('customImages/Pictures.png') }}" alt="account and expense image /">
        </div>
        <div class="support-section-right text-and-pictures">
            <h2 class="" style="font-weight: 700; font-size: 35px;line-height: 42px;color: #040856">
                Account & Expenses<br> Management</h2>
            <p class="" style="font-weight: 400; margin-top: -2rem; font-size: 1rem; line-height: 172%; color: rgba(4, 8, 86, 0.7);">
                A major concern for most businesses is to ensure they obtain value for every spend. With our automated expense management software,
                tracking your operational expenses is made easy. The accuracy of our system's extensive data helps ensure that all expenses are
                accounted for and accurate reimbursement claims are made to prevent fraud.</p>
            <a href="/account-expense-system"><button type='button' class="read-more small-mobile-long-button">Read More </button> </a>
        </div>
    </div>
</section>
<!--END OF ACCOUNT AND EXPENSE MANAGEMENT SECTION -->

<!-- PROJECT MANAGEMENT -->
<section class="container-fluid proj-man" style="margin-top: 4%">
    <div class="d-flex flex-row align-items-center flex-wrap justify-content-evenly proj-wrapper">
        <div class="proj-man-right text-and-pictures">
            <h2>Project Management</h2>
            <p>
                We collaborate effectively with clients to apply tactics, methods, skills, knowledge, and
                experience to achieve specific project objectives within agreed timelines and budgets. Our team
                is adept in proper planning, coordination, and execution of projects that meet global standards.
                Using project management tools such as Jira, Slack, Trello, Basecamp, Zoho Projects, Liquid Planner,
                etc, we manage multiple projects simultaneously and deliver within the project timeframe. We are always
                available to help you allocate the right resources needed to achieve your business goals.
            </p>
            <a href="/project-management"><button class="small-mobile-long-button" type='button'>Read More
                </button></a>
        </div>
        <img class="img-fluid" src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_350/v1660497641/Rectangle_650.svg" alt="project management image" />
    </div>
</section>
<!--END OF SERVICES BRIEF SECTION -->

<!-- ABOUT US SECTION -->
<section id="aboutus" class="container-fluid about-us" id="greenbg" style="margin-top: 8%">
    <div class="row">
        <div class="mt-5 aboutus-background">
            <div class="d-sm-flex flex-row flex-wrap justify-content-evenly align-items-center aboutus-left" style="text-align:justify">
                <div class="about-left-child about-us-flex">
                    <h1 class="mt-3 " style="font-weight: 700; font-size: 3.125rem; line-height: 61px;color: #FFFFFF;">About Us</h1>
                    <p class="section3-text2">
                        Archware Technologies is a renowned technologies company that delivers innovative, customized and scalable
                        digital solutions to individuals and organizations across multiple industries and platforms.
                        As a groundbreaking and reliable tech company for top-tier and emerging businesses, we provide critical support through
                        innovative technology offerings that propel our clients??? businesses on a continuous growth trajectory.
                        Our team (software engineers, data scientists, designers, and product managers) aggregates decades of industry experience
                        and focuses extensively on developing scalable and world-class software that provides end-to-end solutions for our clients.
                        At Archware Technologies, innovation, efficiency, ease of use, and sustainability are the building blocks of our solutions.
                        For these, we earned the trust of our clients as a dependable ally.
                    </p>
                </div>
                <div class="" style="width: 45%; height: auto; margin-right: -15rem">
                    <img class="img-fluid" id="laptop" style=" margin-top: 6.2rem; width: 100%;  " src="{{ asset('customImages/Macbook Pro.svg') }}" alt="about us image">
                </div>
            </div>
        </div>

</section>
<!-- END OF ABOUT US SECTION -->

<!-- MISSION AND VISION SECTION -->
<section class="container-fluid mission" style="margin-top: 10%">
    <div class="row justify-content-center alignt-items-center mission-wrapper" style="padding-left: 9%; padding-right: 9%;">
        <div class="col-md-5">
            <img class="img-fluid section4-img" src="{{ asset('customImages/Image.svg') }}" alt="mission and vision image">
        </div>
        <div class="col-md-7" style="margin-top: 5%">
            <h1 class="mission-titles px-2" style="font-weight: 700;font-size: 35px;line-height: 42px;color: #040856;">Our Mission</h1>
            <p class="px-2" style="font-weight: 400;font-size: 16px;;color: rgba(4, 8, 86, 0.7);">
                We provide a technology-based innovative solutions ecosystem that automates, empowers,
                and enables the growth of businesses across Africa
            </p>
            <h1 class="mission-titles px-2" style="font-weight: 700;font-size: 35px;line-height: 42px;color: #040856;">Our Vision</h1>
            <p class="px-2" style="font-weight: 400;font-size: 16px;line-height: 172%;color: rgba(4, 8, 86, 0.7);">To become a
                leading technology solution provider in Africa.</p>
            <h1 class="mission-titles px-2" style="font-weight: 700;font-size: 35px;line-height: 42px;color: #040856;">Our Core Values</h1>
            <p>
            <ul>
                <li class="vceir" style="font-weight: 600;font-size: 16px;line-height: 172%;color: rgba(4, 8, 86, 0.7)" ;>
                    Value
                    Creation
                </li><br>
                <li class="vceir" style="font-weight: 400;font-size: 16px;line-height: 172%;color: rgba(4, 8, 86, 0.7)" ;>
                    <b>Empathy</b>
                </li><br>
                <li class="vceir" style="font-weight: 400;font-size: 16px;line-height: 172%;color: rgba(4, 8, 86, 0.7)" ;>
                    <b>Innovation</b>
                </li><br>
                <li class="vceir" style="font-weight: 400;font-size: 16px;line-height: 172%;color: rgba(4, 8, 86, 0.7)" ;>
                    <b>Resilience</b>
                </li>
            </ul>
            </p>
        </div>
    </div>
</section>
<!-- END OF MISSION AND VISION SECTION -->

<!-- SUBSIDIARIES SECTION -->
<!--
                        <section class="container justify-content-center" style="margin-top: 12%">
                            <div
                                style="height: 270px;right: 153px;top: 2576px;
        background: linear-gradient(180deg, #063480 0%, #076567 100%);
        border-radius: 21px;">
                                <div>
                                    <h1 class="row justify-content-center pt-5"
                                        style="font-weight: 700;font-size: 35px; line-height: 116%;text-align: center;color: #FFFFFF;">
                                        Subsidiaries</h1>
                                </div>
                                <div class="row justify-content-center pt-3">
                                    <p style="width: 72px;height: 5px;justify-content: center;background: #FFFFFF;border-radius: 9000px;">
                                    </p>
                                </div>
                                <div class="row justify-content-center pt-3">
                                    <p style="margin: 9px;width: 11%;height: 41px;background: #FFFFFF;border-radius: 6px;"></p>
                                    <p style="margin: 9px;width: 11%;height: 41px;background: #FFFFFF;border-radius: 6px;"></p>
                                    <p style="margin: 9px;width: 11%;height: 41px;background: #FFFFFF;border-radius: 6px;"></p>
                                    <p style="margin: 9px;width: 11%;height: 41px;background: #FFFFFF;border-radius: 6px;"></p>
                                    <p style="margin: 9px;width: 11%;height: 41px;background: #FFFFFF;border-radius: 6px;"></p>
                                </div>
                            </div>
                        </section> -->
<!-- END OF SUBSIDIARIES SECTION -->

<!-- BRANDS THAT TRUST US -->
<section class="container-fluid brands" style="margin-top: 12%">
    <div>
        <div class="brands-heading-wrapper">
            <div class="brands-heading-title justify-content-center text-center">
                <h2>Brands That Trust Us</h2>
                <hr class="brands-line">
            </div>
            <p class="text-center">
                Made up of a dynamic and passionate team of tech enthusiasts, we continuously strive to implement the
                very best software innovations, adapting cutting-edge technologies to suit our client's unique business needs.
            </p>
        </div>
        <div class="brand-logo d-flex flex-row flex-wrap justify-content-evenly">
            <img class="img-fluid" src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_107/v1660507527/YOUHI_Brand_Manual_4_1.svg" alt="brands that trust us image " />
            <img class="img-fluid" src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_141/v1660507975/Layer_1.svg" alt="brands that trust us image " />

            <div class="bottom-logo">
                <img class="img-fluid" src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_98/v1660508122/Layer_3.svg" alt="brands that trust us image ">
                <img class="img-fluid" src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_108/v1660508646/Fore_1_2x_1.svg" alt="brands that trust us image ">
            </div>
        </div>
    </div>
</section>
<!-- END OF BRANDS THAT TRUST US -->

<!-- REVIEWS SECTION -->
<section class="container-fluid reviews">
    <div class="text-center justify-content-center title-style">
        <h1 class="fw-bold archware_h1 reviews-heading">Reviews</h1>
        <hr class="container archware_header_underline" />
    </div>

    <!-- THE CAROUSEL -->
    <div id="demoTwo" class="carousel slide" data-bs-ride="carousel">

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <!-- First slide -->
            <div class="carousel-item active">
                <!-- Review card -->
                <div class="reviews-card">

                    <div class="d-flex flex-row quote-icon-wrapper">
                        <img class="img-fluid" id="laptop" src="{{ asset('customImages/icomoon-free_quotes-left.svg') }}" alt="review section image">
                    </div>

                    <div class="d-flex flex-flow flex-wrap justify-content-center align-items-center card-content">

                        <div class="card-text">
                            <p>
                                Team Archware has been quite impressive in delivering
                                for us at Youhi Media & Communications,
                                a modern, clean, and standard website that suits our
                                business type.
                            </p>
                            <p class="desktop-text">
                                Tosin Adebayo
                            </p>
                        </div>
                        <div>
                            <img class="img-fluid" src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_86/v1660541967/unsplash_-QJvYDTCwAg.svg" style="margin-top: -.5rem" alt="avatar image /">
                            <p class="mobile-text">
                                Tosin Adebayo
                            </p>
                        </div>
                    </div>

                </div>

                <!-- End of review card -->
            </div>

            <!-- Second slide -->
            <div class="carousel-item">
                <!-- Review card -->
                <div class="reviews-card">

                    <div class="d-flex flex-row quote-icon-wrapper">
                        <img class="img-fluid" id="laptop" src="{{ asset('customImages/icomoon-free_quotes-left.svg') }}" alt="laptop image">
                    </div>

                    <div class="d-flex flex-flow flex-wrap justify-content-center align-items-center card-content">

                        <div class="card-text">
                            <p>
                                "I've been using Archware's software for a few months now and I am extremely
                                impressed with its capabilities. It has greatly streamlined my workflow and I
                                highly recommend it to others in my industry."
                            </p>
                            <p class="desktop-text">
                                Mr. Peterson
                            </p>
                        </div>

                        <div>
                            <img class="img-fluid" src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_86/v1660541967/unsplash_-QJvYDTCwAg.svg" style="margin-top: -.5rem" alt="avatar image">
                            <p class="mobile-text">
                                Mr. Peterson </p>
                        </div>
                    </div>

                </div>

                <!-- End of review card -->
            </div>
            <!-- Third slide -->
            <div class="carousel-item">
                <!-- Review card -->
                <div class="reviews-card">

                    <div class="d-flex flex-row quote-icon-wrapper">
                        <img class="img-fluid" id="laptop" src="{{ asset('customImages/icomoon-free_quotes-left.svg') }}" alt="review image">
                    </div>

                    <div class="d-flex flex-flow flex-wrap justify-content-center align-items-center card-content">

                        <div class="card-text">
                            <p>
                            "Archware's customer support team is top-notch. 
                            They were able to quickly resolve any issues I had and were always available to answer my questions."
                            </p>
                            <p class="desktop-text">
                                Tolu Adebayo
                            </p>
                        </div>

                        <div>
                            <img class="img-fluid" src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_86/v1660541967/unsplash_-QJvYDTCwAg.svg" style="margin-top: -.5rem" alt="avatar image">
                            <p class="mobile-text">
                                Tolu Adebayo </p>
                        </div>
                    </div>

                </div>

                <!-- End of review card -->
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demoTwo" data-bs-slide="prev">
                <!-- <span class="carousel-control-prev-icon" style="color: blue;"></span> -->
                <img class="img-fluid" src="{{ asset('customImages/Vector.svg') }}" alt="left control image">
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demoTwo" data-bs-slide="next">
                <img class="img-fluid" src="{{ asset('customImages/Vector (1).svg') }}" alt="Right control image">
                <!-- <span class="carousel-control-next-icon"></span> -->
            </button>
        </div>

</section>
<!-- End OF CAROUSEL -->

<!-- END OF REVIEWS SECTION -->

<!-- CONTACT US SECTION -->
<section class="container-fluid contact-us-wrapper" style="margin-top: 12%; margin-bottom: 9%">
    <div class="row contact-form-section">
        <div class="col-lg-7 col-md col-sm-6 pt-5 px-3">
            <h1 class="px-3" style="font-weight: 700;font-size: 35px;letter-spacing: -0.02222em;color: #040856;">
                Contact Us</h1>
            <p class="px-3" style="font-weight: 400;font-size: 16px;color: rgba(4, 8, 86, 0.7);">We'd like to handle
                your
                business</p>


            <form id="sendData">
                <div class="row px-3 pt-2">
                    <div class="col-sm first-name">
                        <label style="font-weight: 500;font-size: 14px;color: #040856 ">First Name</label>
                        <input type="text" id="Firstname" class="input-style" required style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA;" placeholder="">
                    </div>
                    <div class="col-sm last-name">
                        <label style="font-weight: 500;font-size: 14px;color: #040856">Last Name</label>
                        <input id="Lastname" required type="text" style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" placeholder="">
                    </div>
                </div>

                <div class="px-3 pt-2">
                    <label style="font-weight: 500;font-size: 14px;color: #040856">Email address</label>
                    <input id="Email" required class="section6-form4" style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" type="email" placeholder="hello@dummie.com">
                </div>
                <div class="px-3 pt-2">
                    <label style="font-weight: 500;font-size: 14px;color: #040856">Service you are interested
                        in</label>
                    <input id="Services" required class="section6-form4" style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" type="text" placeholder="e.g. Web Development">
                </div>
                <div class="px-3 pt-2">
                    <label name="helpnote" style="font-weight: 500;font-size: 14px;color: #040856">What can we
                        help you with?
                    </label>
                    <textarea id="Message" required class="form-control" id="exampleFormControlTextarea1" placeholder="Your Message" style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" rows="5"></textarea>

                </div>
                <div class="text-end pt-3 px-3">
                    <button type="submit" class="small-mobile-long-button my-4" style=" width: 155px;height: 40px;background: #A6CE39;border: none;
                        box-shadow: 0px 4px 7px -1px rgba(0, 0, 0, 0.11), 0px 2px 4px -1px rgba(0, 0, 0, 0.07);
                        border-radius: 8px;font-weight: 500;font-size: 12px;line-height: 12px;align-items: right;
                        text-align: center; color: #ffffff;">Submit</button>
                </div>
            </form>
        </div>

        <div class="contact-info col-md-5 col-sm-6 contact-information-colum" style=" background-image: url(../customImages/Backgroundcard.svg);  background-repeat: no-repeat; background-size: 160%; height:inherit">
            <div class="sec6itext">
                <div class="mx-5 mt-5 pt-5">
                    <h1 class="mt-5 pt-4" style="font-weight: 700;font-size: 30px;color: #FFFFFF;">Contact
                        Information<h1>
                            <p class="pt-3" style="font-weight: 400;font-size: 16px;color: #FFFFFF;">Fill up the
                                form and our Team will get back to you within 24
                                hours.</p>
                </div>
                <div class="pt-3 mx-5">
                    <p><img class=info_arch1 src="{{ asset('customImages/Phone Icon.svg') }}" alt="phone icon image">
                        <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">+234-807-266-3033, +234-912-207-4233</a>
                    </p>
                    <p class="pt-3"><img id=info_arch2 src="{{ asset('customImages/Envelope Icon.svg') }}" alt="image icon">
                        <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">info@archwaretechgroup.com</a>
                    </p>
                    <p class="pt-3"><img id=info_arch3 src="{{ asset('customImages/Map Marker Icon.svg') }}" alt="address icon">
                        <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">3, Ayanboye Street, Anthony
                            Village, Lagos</a>
                    </p>
                    <p>
                    <p class="pt-4"><img class="px-2" src="{{ asset('customImages/White.svg') }}" alt="social icon" />
                        <img class="px-2" src="{{ asset('customImages/White (1).svg') }}" alt="social icon" />
                        <img class="px-2" src="{{ asset('customImages/White (2).svg') }}" alt="social icon" />
                        <img class="px-2" src="{{ asset('customImages/White (3).svg') }}" alt="social icon" />
                    </p>
                </div>
            </div>

        </div>
    </div>
    </div>
    <!-- END OF CONTACT US SECTION -->
</section>

{{-- FAQ SECTION --}}
<section class="container" id="faq" style="margin-bottom: 9%">
    <div class="text-center justify-content-center title-style">
        <h1 class="fw-bold archware_h1 reviews-heading">Frequently Asked Questions</h1>
        <hr class="container archware_header_underline" />
    </div>
    <div class="accordion mt-5" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Where is Archware Tech located?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Archware Tech is the closest software development company in your area.
                    This is due to the fact that we live in a global village and that it is our
                    goal to completely inundate Africa with technological solutions.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    How often should I revamp my website?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Redesigning your website once every two to three years is generally a good idea.
                    The reason for this is simple: chances are good that your website is out-of-date if it has been up for three years???a lifetime in the digital world.

                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    How long will it take to get a modern website design?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    You also have to consider how long your site will take to plan out and design.
                    In our experience, building a website usually takes anywhere between two to four months
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Why am I finding it difficult to optimise my website and how can you help?
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    A page one position in the Google search results is like gold dust.
                    Not so long ago, it was relatively easy to achieve. These days, it???s a
                    lot more challenging, and getting it wrong can affect your reputation. Thankfully, we have all the SEO tools and know-how to maximise your chances and some happy customers to vouch for us.

                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Do you redesign existing websites?
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    We certainly can do it! It???s important to redesign websites that are no longer producing
                    the expected results. This could be due to varying problems and software changes.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    How much does a website cost?
                </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    The age-old question! It completely depends on what you need, but you can rest
                    assured we deliver the best possible value for money and it won???t break the bank. Why not ask for a quote?
                    There???s no obligation and we won???t sulk if you say "no"!
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    What if I want to get trained as a software developer?
                </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    As part of our endeavours to empower the youths of Africa through education,
                    we are developing a learning management system
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    Do you work internationally?
                </button>
            </h2>
            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Of course! The advent of online conference tools such as Zoom, Google Meet,
                    and Skype, just to name a few, makes working with businesses anywhere in the world straightforward.
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingNine">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                Should I create a mobile or a web app?
            </button>
        </h2>
        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                Mobile apps are more expensive but can provide you with many more data-collecting and
                monetisation capabilities than web applications. Progressive Web Apps are a good compromise between mobile and web apps. However, keep in mind that you might require both mobile and web apps at some point,
                and we are here for you when that time comes.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                What is your process for product design?
            </button>
        </h2>
        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                During the product design phase, we focus on understanding your idea and
                how it can be effectively realised. We begin with strategy sessions that help
                us find out what your needs and expectations are. We also prepare market and competition analyses as well as point you towards the best solutions.

            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingEleven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                What are the advantages of outsourcing your project to us?
            </button>
        </h2>
        <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                1. More time to stay focused on the development of your business.
                By outsourcing your projects to us, you'll free up enough time to concentrate on expanding your business while we handle things in the most effective manner possible for your company and without stressing you in the process.

                2.Highly Developed Professional Team
                You can rely on having access to highly skilled IT professionals when working with our development team. For your project, we will only deploy those engineers who meet your project requirements.

                3. The product-oriented approach in software development
                We put your business objectives and how our digital solutions will help you achieve them at the forefront of our efforts as we provide our software development services.

                4. Cost Efficient Solution
                If you choose to outsource your project to Archware, you only pay for the software development services we offer. You are not required to cover any recruiting fees or extra expenses for team support.

                5. Control Over Your IT Costs
                Your operating costs will be lower as a result of outsourcing your IT projects because you have complete control over your IT expenses. We will establish a fixed price for our service to make it easier for you to allocate money properly.

            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwelve">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                What technologies does the Archware team use in software development?
            </button>
        </h2>
        <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                Our team includes only high-experienced professionals in different software development fields:

                Ruby on Rails,
                PHP,
                Node.js,
                C#,
                JavaScript,
                AngularJS to Angular 6,
                React JS,
                Bootstrap,
                HTML5, CSS3
                Web API Services,
                Swift,
                Laravel,
                Kotlin,
                Java,
                React Native.
                So, hiring our experts in that field will be your best bet if you want to incorporate some modern
                technologies into your project for current and future functionality.

            </div>
        </div>
    </div>
</section>
{{-- </div> --}}

<script type="text/javascript">
    const counters = document.querySelectorAll('.incrementTimer');
    const speed = 100;

    counters.forEach(counter => {
        const animate = () => {
            const value = +counter.getAttribute('akhi');
            const data = +counter.innerText;

            const time = value / speed;
            if (data < value) {
                counter.innerText = Math.ceil(data + time);
                setTimeout(animate, 200);
            } else {
                counter.innerText = value + '+';
            }
        }
        animate();
    });

    // Hide and show a loader logic
    const loaderContainer = document.querySelector('.loader-container');

    const displayLoading = () => {
        loaderContainer.style.display = 'block';
    };

    const hideLoading = () => {
        loaderContainer.style.display = 'none';
    };

    document.getElementById('sendData').addEventListener('submit', handleSumbit);

    function handleSumbit(event) {
        event.preventDefault();
        displayLoading();


        // Get all the input field and store them in their unique variable each
        let firstname = document.getElementById('Firstname').value;
        let lastname = document.getElementById('Lastname').value;
        let email = document.getElementById('Email').value;
        let service = document.getElementById('Services').value;
        let message = document.getElementById('Message').value;

        let contactData = {
            firstname,
            lastname,
            email,
            service,
            message
        }
        // alert(JSON.stringify(contactData));
        // alert(`${firstName} and ${lastName}`);
        console.log(contactData);
        isLoading = true;

        function handleErrors(response) {
            if (!response.ok) {
                throw Error(response.statusText);
            }
            return response;
        }
        fetch("http://127.0.0.1:8000/api/contactus/message", {
                method: 'POST',
                headers: {
                    'Accept': 'application/json, text/plain, */*',
                    'content-type': 'application/json'
                },
                body: JSON.stringify(contactData)
            })
            .then(handleErrors)
            .then(response => {
                console.log("ok")
                hideLoading();

                Swal.fire({
                    icon: 'success',
                    title: 'Message sent, We will get back shortly!',
                    showConfirmButton: false,
                    timer: 1500,

                })
                let res = document.getElementById("sendData");
                res.reset();
            })
            .catch(error => {
                hideLoading();
                console.log(error, 'wrong')
                Swal.fire({
                    icon: 'error',
                    title: 'Message not sent, something went wrong!',
                    showConfirmButton: false,
                    timer: 1500,

                })

            });

    }

    // Remove the column class on mobile screen viewport

    // let firstNameDiv = document.querySelector(.first-name);
    // let lastNameDiv = document.querySelector(.last-name);
    // firstNameDiv.addEventListener('click', console.log('working!'));
</script>


<!-- INITIALIZE AOS ANIMATE -->
<!-- <script>
        AOS.init();
        </script> -->

@endsection