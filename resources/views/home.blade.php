@extends('layouts.app')

@section('description',
'Archware - Our agile approach to problem-solving and strategic planning helps you achieve
better results for your business.',)
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')


{{-- @gbolahan --}}

    <section class="container-fluid">

        <!-- HERO SECTION -->
        <section class="container-fluid hero-wrapper" style="background: #F5F5F5!important; margin-top: 5rem; height: 65vh;">
            @include('errors.error_message')


            <!-- THE CAROUSEL -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
            <!-- First slide -->
            <div class="carousel-item active">
            <div class="d-flex flex-row flex-wrap justify-content-center align-items-center">
        <div>
            <h1 class="" style="font-weight: 700; color: #040856; font-size: 3.125rem;"><br><br><b>Excellent Tech-Based <br>Solutions
                    For Your Business</b></h1>
            <p class="mt-3" style="font-weight: 400;font-size: 16px;
        color: rgba(4, 8, 86, 0.7);">
                    Our agile approach to problem-solving and strategic planning<br>
                    helps you build a better structure and achieve better results in<br>
                    your business.</p>
                <a href="/services">
                    <button class="mt-3" style="font-weight: 500;font-size: 16px; width: 161px; height: 44px;
                        border: none;color: #ffffff;border-radius: 8px;
                        background: #1F3F95;">
                Read More
            </button></a>
            </div>
            <div style="margin-top: .8rem">
                <img class="img-fluid" src="{{ asset('customImages/heroImage.svg') }}">
            </div>
                </div>
            </div>

            <!-- Second slide -->
            <div class="carousel-item hide-mobile">
                <!-- Review card -->
                <div class="d-flex flex-row flex-wrap justify-content-evenly align-items-center" style="padding: 3rem 9% 0 9%; width: 100%;">
                <div>
                    <img class="img-fluid" style="width: 358px; height: 58.2vh;" src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_294/v1660632877/Group_63.png">
                </div>

                <div>
            <h1 class="pt-4" style="font-weight: 700; color: #040856; font-size: 3.12rem;">Acquire Tech Skills For <br>
            A Borderless Career
            </h1>
            <p class="mt-4" style="font-weight: 400;font-size: 1rem;
        color: rgba(4, 8, 86, 0.7); max-width: 36.25rem; line-height: 155%;">
               Become an expert in tech without prior knowledge and stay ahead of the global market.</p>
            <a href="/#">
            <button class="mt-5"
                style="font-weight: 500;font-size: 16px; width: 161px; height: 44px;
                        border: none;color: #ffffff;border-radius: 8px;
                        background: #1F3F95;">
                        Read More
                    </button></a>
                </div>
                </div>
            </div>

            <!-- Third slide -->
            <div class="carousel-item hide-mobile">
            <div class="d-flex flex-row flex-wrap justify-content-between" style="padding-left: 12%;">
        <div style="">
            <h1 class="" style="font-weight: 700; color: #040856; font-size: 50px;"><br><br>Top-notch Website<br>
                    Design And Development</h1>
            <p class="mt-4" style="font-weight: 400;font-size: 16px;
        color: rgba(4, 8, 86, 0.7);">
                    Get a fully optimised and responsive website design <br>that can give your
                    business the visibility it needs.</p>
                <a href="/services">
                    <button class="mt-5" style="font-weight: 500;font-size: 16px; width: 161px; height: 44px;
                        border: none;color: #ffffff;border-radius: 8px;
                        background: #1F3F95;">
                Read more
            </button></a>
        </div>
        <div>
            <img class="img-fluid" style="height: 65vh;" src="{{ asset('customImages/Rectangle 651.svg') }}">
        </div>
        </div>
            <!-- End of review card -->
            </div>

            <!-- Left and right controls/icons -->
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            </button>
            </div> -->

            </section>
</section>
            <!-- End OF CAROUSEL -->

    <!-- WHY CHOOSE ARCHWARE TEAM SECTION -->
    <section class="container-fluid team-section">
        <div class="d-flex flex-row flex-wrap justify-items-center team-wrapper">
            <img class="img-fluid" src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_251/v1660425506/core-values-4.svg">
            <div class="team-section-right">
                <h2>Why choose Archware Team</h2>
                <p>
                    Our goal is to assist our partners to overturn challenges to their advantage.
                    We bring diverse and unique set of values and prioritise resources
                    in view of our partners' budgets linked to their vision and project
                    objectives as we divulge business opportunities in order to achieve
                    sustainable profitability goals.</p>
                <p>
                    Hence, we are committed to delivering scalable solutions
                    to our partners. With over a decade of experience,
                    we understand that platform growth and development
                    capacity is a pain point for many clients and how software works across
                    a multitude of industries.
                </p>
                <p>
                    Our multidisciplinary teams, comprising tech enthusiasts such as data analysts,
                    software developers,
                    and UI/UX designers with elite and varied development expertise, are geared towards building
                    reliable products that service growth-focused businesses.
                    We strive to deliver bespoke solutions that innovate using cutting-edge technologies and cloud software
                    at competitive and flexible rates.
                </p>
            </div>
        </div>
    </section>
    <!--END OF WHY CHOOSE ARCHWARE TEAM SECTION -->

    <!-- PROOF OF WORK -->
    <section class="container-fluid  proof-of-work">
        <div class="d-flex flex-wrap proof-of-work-child justify-content-around">
            <div class="web">
                <h1>25+</h1>
                <p>Websites</p>
            </div>
            <div class="web">
                <h1>40+</h1>
                <p>Completed Projects</p>
            </div>
            <div class="customers">
                <h1>20+</h1>
                <p>Happy customers</p>
            </div>
        </div>
    </section>
    <!-- END OF PROOF OF WORK -->

    <!-- SERVICES BRIEF SECTION -->
    <section class="container-fluid service-section">
        <div class="d-flex flex-row align-items-center flex-wrap justify-items-center service-wrapper">
            <div class="service-section-right">
                <h2>Mobile App Development</h2>
                <p>
                    Over the years we have developed responsive mobile apps across
                    industries such as Fin-tech, Banking, Medical science, and many more.
                    Our team of experts is well skilled in different mobile app development
                    tools such as Atom, Git hub, Ninox, MobiLoud, React Native, Xcode, Ionic, Android Studio, etc. With core competence in mobile app design and development, we have developed world-class Andriod
                </p>
                <button type='button'>Read More
                </button>
            </div>
            <img class="img-fluid" src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_371/v1660455795/Rectangle_648.svg" />
        </div>
    </section>
    <!--END OF SERVICES BRIEF SECTION -->

    <!-- SUPPORT SECTION -->
    <section style="margin-left:10%; margin-top: 8%">
        <div class="row justify-items-center">
            <div class="col-md-5" class="w-50">
                <img style="width: 500px; " class="img-fluid" src="{{ asset('customImages/Pictures.svg') }}">
            </div>
            <div class="col-md-6 px-4">
                <h2 class="py-4 px-2" style="font-weight: 700; font-size: 35px;line-height: 42px;color: #040856">
                    Account & Expenses Management</h2>
                <p class="px-2 py-4" style="font-weight: 400; margin-top: -2rem; font-size: 16px;line-height: 172%;color: rgba(4, 8, 86, 0.7);">
                    A major concern for most businesses is to ensure their money is well spent. With our automated expense management software,
                    tracking your employees' spending is made easy.The accuracy and extensive data generated from our system
                    have been able to ensure that all expenses are accounted for and accurate reimbursement claims are made to prevent fraud.</p>
                <button type='button' class="read-more">Read More</button>
            </div>
        </div>
    </section>
    <!--END OF SUPPORT SECTION -->

    <!-- PROJECT MANAGEMENT -->
    <section class="container-fluid service-section" style="margin-top: 8%">
        <div class="d-flex flex-row align-items-center flex-wrap justify-items-center service-wrapper">
            <div class="service-section-right">
                <h2>Project Management</h2>
                <p>
                    We collaborate with clients to apply tactics, methods, skills, knowledge, and experience to achieve specific project objectives within agreed parameters. Our team specializes in proper planning, coordination, and execution of projects that meet global standards. Using project management tools such as Jira, Slack, Trello, Basecamp, Zoho Projects, Liquid Planner, etc, we can manage multiple projects and deliver within the project timeline.
                    We are here to help you allocate the right resources needed to achieve
                    your business goals.
                </p>
                <button type='button'>Read More
                </button>
            </div>
            <img class="img-fluid" src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_350/v1660497641/Rectangle_650.svg" />
        </div>
    </section>
    <!--END OF SERVICES BRIEF SECTION -->


    <!-- ABOUT US SECTION -->
    <section id="aboutus" class="container-fluid" id="greenbg" style="margin-top: 12%">
        <div class="row">
            <div class="mt-5" id="green-background" style="width: 1288px;height: auto; margin-left: -74px;
                background: linear-gradient(90.18deg, #A6CE39 -27.2%, #0A655F 248.97%);
                border-top-right-radius: 21px;border-bottom-right-radius: 21px;;">
                <div class="row justify-items-center" style="margin-left:11% ;">
                    <div class="col-md-6">
                        <h1 class="mt-5 pt-5" style="font-weight: 700;font-size: 50px;line-height: 61px;color: #FFFFFF;">About Us</h1>
                        <p class="section3-text2" style="font-weight: 400;font-size: 1rem;line-height: 179%; color: #FFFFFF;">
                            Archware Tech Group is a result-driven tech company in Lagos,<br>
                            Nigeria, established to provide technological innovations that help<br>
                            improve the quality of work and lives of people across several<br>
                            business sectors.
                            We are a team of creative thinkers that render excellent services<br>
                            that add value to you and your business. Our company comprises<br>
                            five subsidiaries created to contribute to the technological<br>
                            enhancement of different business sectors in Africa.</p>
                    </div>
                    <div class="col-md-5" style="width: 50%; height: auto;">
                        <img class="img-fluid" id="laptop" style="margin-left:6em; margin-top: 6.2rem; width: 100%;  " src="{{ asset('customImages/Macbook Pro.svg') }}">
                    </div>
                </div>
            </div>

    </section>
    <!-- END OF ABOUT US SECTION -->

    <!-- MISSION AND VISION SECTION -->
    <section class="container-fluid" style="margin-top: 12%">
        <div class="row justify-content-center alignt-items-center" style="padding-left: 9%; padding-right: 9%;">
            <div class="col-md-5">
                <img class="img-fluid" class="section4-img" src="{{ asset('customImages/Image.svg') }}">
            </div>
            <div class="col-md-7" style="margin-top: 5%">
                <h1 style="font-weight: 700;font-size: 35px;line-height: 42px;color: #040856;">Our Mission</h1>
                <p style="font-weight: 400;font-size: 16px;;color: rgba(4, 8, 86, 0.7);">
                    We provide a technology-based innovative
                    solutions ecosystem that automates, empowers,
                    and enables the growth of businesses across
                    Africa
                </p>
                <h1 style="font-weight: 700;font-size: 35px;line-height: 42px;color: #040856;">Our Vision</h1>
                <p style="font-weight: 400;font-size: 16px;line-height: 172%;color: rgba(4, 8, 86, 0.7);">To become a
                    leading technology solution provider in Africa.</p>
                <h1 style="font-weight: 700;font-size: 35px;line-height: 42px;color: #040856;">Our Core Values</h1>
                <p>
                    <li style="font-weight: 400;font-size: 16px;line-height: 172%;color: rgba(4, 8, 86, 0.7)" ;><b>
                            Value
                            Creation</b>: We believe in creating long-lasting value for our clients.</li><br>
                    <li style="font-weight: 400;font-size: 16px;line-height: 172%;color: rgba(4, 8, 86, 0.7)" ;>
                        <b>Empathy</b>: Understanding is a key to our success as a team.
                    </li><br>
                    <li style="font-weight: 400;font-size: 16px;line-height: 172%;color: rgba(4, 8, 86, 0.7)" ;>
                        <b>Innovation</b>: We are more than simply a team; we are innovative thinkers that strive to
                        provide
                        fresh concepts.
                    </li><br>
                    <li style="font-weight: 400;font-size: 16px;line-height: 172%;color: rgba(4, 8, 86, 0.7)" ;>
                        <b>Resilience</b>: We do not believe in defeat. We're a team of resilient individuals who
                        persevere
                        through difficulties.
                    </li>
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
    <section class="container-fluid" style="margin-top: 12%">
        <div>
            <div class="brands-heading-wrapper">
                <div class="brands-heading-title justify-content-center text-center">
                    <h2>Brands That Trust Us</h2>
                    <hr class="brands-line">
                </div>
                <p class="text-center">
                    Made up of a dynamic and passionate team of tech enthusiasts we continuously strive to implement
                    the very best software innovations, adapting cutting-edge technologies to suit
                    our client's unique business needs
                </p>
            </div>
            <div class="brand-logo d-flex flex-row flex-wrap justify-content-evenly">
                <img class="img-fluid" src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_107/v1660507527/YOUHI_Brand_Manual_4_1.svg">
                <img class="img-fluid" src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_141/v1660507975/Layer_1.svg">
                <img class="img-fluid" src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_98/v1660508122/Layer_3.svg">
                <img class="img-fluid" src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_108/v1660508646/Fore_1_2x_1.svg">
            </div>
        </div>
    </section>
    <!-- END OF BRANDS THAT TRUST US -->




        <section class="container-fluid" style="">
        <div class="text-center justify-content-center title-style">
            <h1 class="fw-bold archware_h1">Reviews</h1>
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
                <img class="img-fluid" id="laptop"
                src="{{ asset('customImages/icomoon-free_quotes-left.svg') }}">
                </div>

                <div class="d-flex flex-flow flex-wrap justify-content-center align-items-center card-content">

                <div class="card-text">
                    <p>
                    Team Archware has been quite impressive in delivering
                    for us at Youhi Media & Communications,
                     a modern, clean, and standard website that suits our
                      business type.
                    </p>
                    <p>
                        Tosin Adebayo
                    </p>
                </div>

                <img class="img-fluid"
                src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_86/v1660541967/unsplash_-QJvYDTCwAg.svg"
                style="margin-top: -.5rem">
            </div>

            </div>

            <!-- End of review card -->
        </div>

        <!-- Second slide -->
        <div class="carousel-item">
             <!-- Review card -->
             <div class="reviews-card">

                <div class="d-flex flex-row quote-icon-wrapper">
                <img class="img-fluid" id="laptop"
                src="{{ asset('customImages/icomoon-free_quotes-left.svg') }}">
                </div>

                <div class="d-flex flex-flow flex-wrap justify-content-center align-items-center card-content">

                <div class="card-text">
                    <p>
                    Team Archware has been quite impressive in delivering
                    for us at Youhi Media & Communications,
                     a modern, clean, and standard website that suits our
                      business type.
                    </p>
                    <p>
                        Mr. Peterson
                    </p>
                </div>

                <img class="img-fluid"
                src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_86/v1660541967/unsplash_-QJvYDTCwAg.svg"
                style="margin-top: -.5rem">
            </div>

            </div>

            <!-- End of review card -->
        </div>
        <!-- Third slide -->
        <div class="carousel-item">
            <!-- Review card -->
            <div class="reviews-card">

            <div class="d-flex flex-row quote-icon-wrapper">
            <img class="img-fluid" id="laptop"
            src="{{ asset('customImages/icomoon-free_quotes-left.svg') }}">
            </div>

            <div class="d-flex flex-flow flex-wrap justify-content-center align-items-center card-content">

            <div class="card-text">
                <p>
                Team Archware has been quite impressive in delivering
                for us at Youhi Media & Communications,
                 a modern, clean, and standard website that suits our
                  business type.
                </p>
                <p>
                    Tolu Adebayo
                </p>
            </div>

            <img class="img-fluid"
            src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_86/v1660541967/unsplash_-QJvYDTCwAg.svg"
            style="margin-top: -.5rem">
        </div>

        </div>

        <!-- End of review card -->
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demoTwo" data-bs-slide="prev">
        <!-- <span class="carousel-control-prev-icon" style="color: blue;"></span> -->
        <img class="img-fluid"
            src="{{ asset('customImages/Vector.svg') }}">
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demoTwo" data-bs-slide="next">
        <img class="img-fluid"
            src="{{ asset('customImages/Vector (1).svg') }}">
        <!-- <span class="carousel-control-next-icon"></span> -->
        </button>
        </div>

        </section>
        <!-- End OF CAROUSEL -->

        <!-- END OF REVIEWS SECTION -->

<!-- CONTACT US SECTION -->
<section class="container card" style="margin-top: 12%; margin-bottom: 12%">
    <div class="row justify-content-center">
        <div class="col-md-7 pt-5 px-3">
            <h1 class="px-3" style="font-weight: 700;font-size: 35px;letter-spacing: -0.02222em;color: #040856;">Contact Us</h1>
            <p class="px-3" style="font-weight: 400;font-size: 16px;color: rgba(4, 8, 86, 0.7);">We'd like to handle your
                business</p>


            <form id="sendData">
                <div class="row px-3 pt-2">
                    <div class="col">
                        <label style="font-weight: 500;font-size: 14px;color: #040856 ">First Name</label>
                        <input type="text" id="Firstname" required style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA;" placeholder="">
                    </div>
                    <div class="col">
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
                    <button type="submit" class="my-4" style=" width: 155px;height: 40px;background: #A6CE39;border: none;
                        box-shadow: 0px 4px 7px -1px rgba(0, 0, 0, 0.11), 0px 2px 4px -1px rgba(0, 0, 0, 0.07);
                        border-radius: 8px;font-weight: 500;font-size: 12px;line-height: 12px;align-items: right;
                        text-align: center; color: #ffffff;">Submit</button>
                </div>
            </form>
        </div>

        <div class="col-md-5" style=" background-image: url(../customImages/Backgroundcard.svg);  background-repeat: no-repeat; background-size: 160%; height:inherit">
            <div class="sec6itext">
                <div class="mx-5 mt-5 pt-5">
                    <h1 class="mt-5 pt-4" style="font-weight: 700;font-size: 30px;color: #FFFFFF;">Contact
                        Information<h1>
                            <p class="pt-3" style="font-weight: 400;font-size: 16px;color: #FFFFFF;">Fill up the
                                form and our Team will get back to you within 24
                                hours.</p>
                </div>
                <div class="pt-3 mx-5">
                    <p><img class=info_arch1 src="{{ asset('customImages/Phone Icon.svg') }}" alt="">
                        <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">+234-709-154-822</a>
                    </p>
                    <p class="pt-3"><img id=info_arch2 src="{{ asset('customImages/Envelope Icon.svg') }}" alt="">
                        <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">info@archwaretechgroup.com</a>
                    </p>
                    <p class="pt-3"><img id=info_arch3 src="{{ asset('customImages/Map Marker Icon.svg') }}" alt="">
                        <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">3, Ayangboye Street, Anthony
                            Village, Lagos</a>
                    </p>
                    <p>
                    <p class="pt-4"><img class="px-2" src="{{ asset('customImages/White.svg') }}">
                        <img class="px-2" src="{{ asset('customImages/White (1).svg') }}">
                        <img class="px-2" src="{{ asset('customImages/White (2).svg') }}">
                        <img class="px-2" src="{{ asset('customImages/White (3).svg') }}">
                    </p>
                </div>
            </div>

        </div>
    </div>
    </div>
    <!-- END OF CONTACT US SECTION -->
</section>
</div>

<script type="text/javascript">
    document.getElementById('sendData').addEventListener('submit', handleSumbit);

    function handleSumbit(event) {
        event.preventDefault();

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
                console.log(error, 'wrong')
                Swal.fire({
                    icon: 'error',
                    title: 'Message not sent, something went wrong!',
                    showConfirmButton: false,
                    timer: 1500,

                })

            });

    }
</script>


@endsection
