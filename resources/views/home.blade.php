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


    <div class="container-fluid">
        <!-- HERO SECTION -->
        <section class="container-fluid">

            @include('errors.error_message')

            <div class="d-flex flex-row flex-wrap justify-content-center" style="padding-top:3em;margin-top:5em ">
                <div style="color:#040856;">
                    <h1 class="pt-4" style="font-weight: 700;font-size: 50px;"><br><br><b>Excellent Tech-Based <br>Solution
                            For Your
                            <br>Business</b></h1>
                    <p class="mt-3" style="font-weight: 400;font-size: 16px;
                color: rgba(4, 8, 86, 0.7);">
                        Our agile approach to problem-solving and strategic planning<br>
                        helps you build a better structure and achieve better results in<br>
                        your business.</p>
                    <a href="/services">
                    <button class="mt-3"
                        style="font-weight: 500;font-size: 16px; width: 161px; height: 44px;
                                border: none;color: #ffffff;border-radius: 8px;
                                background: #A6CE39">
                        Our Services
                    </button></a>
                </div>
                <div style="margin-left: 4%">
                    <img class="img-fluid" src="{{ asset('customImages/Man.svg') }}">
                </div>
            </div>
        </section>
        <!-- END OF HERO SECTION -->

        <!-- SUPPORT SECTION -->
        <section style="margin-left:10%; margin-top: 12%">
            <div class="row justify-items-center">
                <div class="col-md-5" class="w-50">
                    <img style="width: 500px; " class="img-fluid" src="{{ asset('customImages/Pictures.svg') }}">
                </div>
                <div class="col-md-6 px-4">
                    <h2 class="py-5 px-2" style="font-weight: 700; font-size: 35px;line-height: 42px;color: #040856"> We
                        Provide Support For<br> Public And Private<br> Enterprise</h2>
                    <p class="px-2"
                        style="font-weight: 400; margin-top: -2rem; font-size: 16px;line-height: 172%;color: rgba(4, 8, 86, 0.7);">
                        Archwareltd
                        promotes the growth of small and medium
                        enterprises at the local and global business environments. Through its professionals
                        with proven experience in different fields of infrastructure, Archwareltd facilitates new markets
                        entry and
                        consolidation, minimizing time and costs in the process of expansion.</p>
                </div>
            </div>
        </section>
        <!--END OF SUPPORT SECTION -->

        <!-- ABOUT US SECTION -->
        <section id="aboutus" class="container-fluid" id="greenbg" style="margin-top: 12%">
            <div class="row">
                <div class="mt-5" id="green-background"
                    style="width: 1288px;height: auto; margin-left: -74px;
                background: linear-gradient(90.18deg, #A6CE39 -27.2%, #0A655F 248.97%);
                border-top-right-radius: 21px;border-bottom-right-radius: 21px;;">
                    <div class="row justify-items-center" style="margin-left:11% ;">
                        <div class="col-md-6">
                            <h1 class="mt-5 pt-5"
                                style="font-weight: 700;font-size: 50px;line-height: 61px;color: #FFFFFF;">About Us</h1>
                            <p class="section3-text2"
                                style="font-weight: 400;font-size: 1rem;line-height: 179%; color: #FFFFFF;">
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
                            <img class="img-fluid" id="laptop"
                                style="margin-left:6em; margin-top: 6.2rem; width: 100%;  "
                                src="{{ asset('customImages/Macbook Pro.svg') }}">
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
        </section>
        <!-- END OF SUBSIDIARIES SECTION -->

        <!-- CONTACT US SECTION -->
        <section class="container card" style="margin-top: 12%; margin-bottom: 12%">
            <div class="row justify-content-center">
                <div class="col-md-7 pt-5 px-3">
                    <h1  class="px-3" style="font-weight: 700;font-size: 35px;letter-spacing: -0.02222em;color: #040856;">Contact Us</h1>
                    <p class="px-3" style="font-weight: 400;font-size: 16px;color: rgba(4, 8, 86, 0.7);">We'd like to handle your
                        business</p>


                    <form method="post" action="{{ route('contact.message') }}">
                        @csrf
                        <div class="row px-3 pt-2">
                            <div class="col">
                                <label style="font-weight: 500;font-size: 14px;color: #040856 ">First Name</label>
                                <input name="firstname" type="text"
                                    style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA;" placeholder="">
                            </div>
                            <div class="col">
                                <label style="font-weight: 500;font-size: 14px;color: #040856">Last Name</label>
                                <input name="lastname" type="text"
                                    style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" placeholder="">
                            </div>
                        </div>
                        <div class="px-3 pt-2">
                            <label style="font-weight: 500;font-size: 14px;color: #040856">Email address</label>
                            <input name="email" class="section6-form4"
                                style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" type="email"
                                placeholder="hello@dummie.com">
                        </div>
                        <div class="px-3 pt-2">
                            <label style="font-weight: 500;font-size: 14px;color: #040856">Service you are interested
                                in</label>
                            <input name="service" class="section6-form4"
                                style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" type="text"
                                placeholder="e.g. Web Development">
                        </div>
                        <div class="px-3 pt-2">
                            <label name="helpnote" style="font-weight: 500;font-size: 14px;color: #040856">What can we
                                help you with?
                            </label>
                            <textarea name="message" class="form-control" id="exampleFormControlTextarea1" placeholder="Your Message"
                                style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" rows="5"></textarea>

                        </div>
                        <div class="text-end pt-3 px-3">
                            <button type="submit" class="my-4"
                                style=" width: 155px;height: 40px;background: #A6CE39;border: none;
                        box-shadow: 0px 4px 7px -1px rgba(0, 0, 0, 0.11), 0px 2px 4px -1px rgba(0, 0, 0, 0.07);
                        border-radius: 8px;font-weight: 500;font-size: 12px;line-height: 12px;align-items: right;
                        text-align: center; color: #ffffff;">Submit</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-5"
                    style=" background-image: url(../customImages/Backgroundcard.svg);  background-repeat: no-repeat; background-size: 160%; height:inherit">
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
                                <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">+234709154822</a>
                            </p>
                            <p class="pt-3"><img id=info_arch2 src="{{ asset('customImages/Envelope Icon.svg') }}"
                                    alt="">
                                <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">info@archwareltd.com</a>
                            </p>
                            <p class="pt-3"><img id=info_arch3 src="{{ asset('customImages/Map Marker Icon.svg') }}"
                                    alt="">
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

@endsection
