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


<div class="container-fluid" id="homepage_section1">
    <section>
        <div class="d-flex flex-wrap-reverse justify-items-center" style="margin-left:10%;padding-top:3em;margin-top:5em ">
            <div class="" style="color:#040856;">
                <h1 class="pt-4" style="font-weight: 700;font-size: 50px;"><br><br><b>Excellent Tech-Based <br>Solution For Your
                        <br>Business</b></h1>
                <p class="pt-4" style="font-weight: 400;font-size: 16px;">
                    Our agile approach to problem-solving and strategic planning<br>
                    helps you build a better structure and achieve better results in<br>
                    your business.</p>
                <button class="mt-4" style="font-weight: 500;font-size: 16px; width: 161px; height: 44px;
                                border: none;color: #ffffff;border-radius: 8px;
                                background: #A6CE39">
                    Our Services
                </button>
            </div>
            <div id="section1-picture" class="mx-4 px-3">
                <img class="img-fluid" src="{{ asset('customImages/Man.svg') }}">
            </div>
        </div>
    </section>

    <section class="mt-5 pt-5" style="margin-left:10% ;">
        <div class="row justify-items-center">
            <div class="col-md-5" class="w-50">
                <img style="width: 500px; " class="img-fluid" src="{{ asset('customImages/Pictures.svg') }}">
            </div>
            <div class="col-md-6 px-4">
                <div class="py-5 px-2" style="font-weight: 700;font-size: 35px;line-height: 42px;color: #040856"> We
                    Provides Support For<br> Public And Private<br> Enterprise</div>
                <div class="py-2 px-2" style="font-weight: 400;font-size: 16px;line-height: 172%;color: rgba(4, 8, 86, 0.7);">Archwareltd
                    promotes the growth of small and medium
                    enterprises at the local and global business environments. Through its professionals
                    with proven experience in different fields of infrastructure, Archwareltd facilitates new markets
                    entry and
                    consolidation, minimizing time and costs in the process of expansion.</div>
            </div>
        </div>

    </section>

    <section class="mt-5 pt-5" >
        <div class="row justify-items-center" >
            <div class="mt-5" id="greenbg" style="width:85%; height: auto;;
                background: linear-gradient(90.18deg, #A6CE39 -27.2%, #0A655F 248.97%);
                border-top-right-radius: 21px;border-bottom-right-radius: 21px;;">
                <div class="row justify-items-center" style="margin-left:11% ;">
                    <div class="col-md-6" id="textgrn">
                        <h1 class="mt-5 pt-2" style="font-weight: 700;font-size: 50px;line-height: 61px;color: #FFFFFF;">About Us</h1>
                        <p class="mt-2" style="font-weight: 400;font-size: 16px;line-height: 172%;color: #FFFFFF;">
                            Archware Tech Group is a result-driven tech company in Lagos,
                            Nigeria,established to provide technological innovations that help
                            improve the quality of work and lives of people across several
                            business sectors.<br>
                            We are a team of creative thinkers that render excellent services
                            that add value to you and your business. Our company comprises
                            five subsidiaries created to contribute to the technological
                            enhancement of different business sectors in Africa.</p>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" id="laptop" style="height: 300px;margin-top: 15%; margin-left:12em" src="{{ asset('customImages/Macbook Pro.svg') }}" >
                    </div>
                </div>
            </div>

    </section>

    <section class="container-fluid mt-5 pt-5">
        <div class="d-flex flex-wrap justify-items-center">
            <div class="col-md-4 mt-5 mx-4">
                <img class="img-fluid" class="section4-img" src="{{ asset('customImages/Image.svg') }}">
            </div>
            <div class="col-md-6 mt-5 pt-5" style="margin-left:7% ;" id="missionstatment">
                <h1 style="font-weight: 700;font-size: 35px;line-height: 42px;color: #040856;">Our Mission</h1>
                <p style="font-weight: 400;font-size: 16px;;color: rgba(4, 8, 86, 0.7);">
                    We provide a technology-based innovative
                    solutions ecosystem that automates, empowers,
                    and enables the growth of businesses across
                    Africa
                </p>
                <h1 style="font-weight: 700;font-size: 35px;line-height: 42px;color: #040856;">Our Vision</h1>
                <p style="font-weight: 400;font-size: 16px;line-height: 172%;color: rgba(4, 8, 86, 0.7);">To become a leading technology solution provider in Africa.</p>
                <h1 style="font-weight: 700;font-size: 35px;line-height: 42px;color: #040856;">Our Core Values</h1>
                <p>
                    <li style="font-weight: 400;font-size: 16px;line-height: 172%;color: rgba(4, 8, 86, 0.7)";><b> Value Creation</b>: We believe in creating long-lasting value for our clients.</li><br>
                    <li style="font-weight: 400;font-size: 16px;line-height: 172%;color: rgba(4, 8, 86, 0.7)";><b>Empathy</b>: Understanding is a key to our success as a team. </li><br>
                    <li style="font-weight: 400;font-size: 16px;line-height: 172%;color: rgba(4, 8, 86, 0.7)";><b>Innovation</b>: We are more than simply a team; we are innovative thinkers that strive to
                        provide
                        fresh concepts.</li><br>
                    <li style="font-weight: 400;font-size: 16px;line-height: 172%;color: rgba(4, 8, 86, 0.7)";><b>Resilience</b>: We do not believe in defeat. We're a team of resilient individuals who
                        persevere
                        through difficulties.</li>
                </p>
            </div>
        </div>
    </section>

    <section class="container justify-content-center mt-5 pt-5">
        <div style="height: 270px;right: 153px;top: 2576px;
        background: linear-gradient(180deg, #063480 0%, #076567 100%);
        border-radius: 21px;">
            <div>
                <h1 class="row justify-content-center pt-5" style="font-weight: 700;font-size: 35px; line-height: 116%;text-align: center;color: #FFFFFF;"> Subsidiaries</h1>
            </div>
            <div class="row justify-content-center pt-3">
                <p   style="width: 72px;height: 5px;justify-content: center;background: #FFFFFF;border-radius: 9000px;"></p>
            </div>
            <div class="row justify-content-center pt-3">
                <p  style="margin: 9px;width: 11%;height: 41px;background: #FFFFFF;border-radius: 6px;"></p>
                <p style="margin: 9px;width: 11%;height: 41px;background: #FFFFFF;border-radius: 6px;"></p>
                <p style="margin: 9px;width: 11%;height: 41px;background: #FFFFFF;border-radius: 6px;"></p>
                <p style="margin: 9px;width: 11%;height: 41px;background: #FFFFFF;border-radius: 6px;"></p>
                <p style="margin: 9px;width: 11%;height: 41px;background: #FFFFFF;border-radius: 6px;"></p>
            </div>
        </div>


    </section>

    <section class="container card mt-5">
    <div class="row justify-content-center">
            <div class="col-md-7 pt-5 px-3">
                <h1 style="font-weight: 700;font-size: 35px;letter-spacing: -0.02222em;color: #040856;">Contact Us</h1>
                <p style="font-weight: 400;font-size: 16px;color: rgba(4, 8, 86, 0.7);">We'd like to handle your business</p>
                <form>
                    <div>
                        <label style="font-weight: 500;font-size: 12px;color: #040856">Name</label>
                        <input class="" type="text" style="padding: 10px;opacity:70%;" placeholder="fullname">
                        <p>
                    </div>
                    <div>
                        <label style="font-weight: 500;font-size: 12px;color: #040856">Email address</label>
                        <input class="section6-form4" style="padding: 10px;opacity:70%;" type="email" placeholder="hello@dummie.com">
                        <p>
                    </div>
                    <div>
                        <label style="font-weight: 500;font-size: 12px;color: #040856">What can we help you with? </label>
                        <input style="height: 150px;padding: 10px;opacity:70%;" type="text" placeholder="Your Message...">

                    </div>
                    <div class="text-end pt-3">
                        <button type="submit" class="my-4" style=" width: 155px;height: 40px;background: #A6CE39;border: none;
                        box-shadow: 0px 4px 7px -1px rgba(0, 0, 0, 0.11), 0px 2px 4px -1px rgba(0, 0, 0, 0.07);
                        border-radius: 8px;font-weight: 500;font-size: 12px;line-height: 12px;align-items: right;
                        text-align: center; color: #ffffff;">Submit</button>
                    </div>
                </form>
            </div>
    
        <div class="col-md-5" style=" background-image: url(../customImages/Backgroundcard.svg);  background-repeat: no-repeat; background-size: 160%;">
            <div class="sec6itext">
                <div class="mx-5 mt-5 pt-5">
                    <h1 style="font-weight: 700;font-size: 30px;color: #FFFFFF;">Contact Information<h1>
                            <p class="pt-3" style="font-weight: 400;font-size: 16px;color: #FFFFFF;">Fill up the form and our Team will get back to you within 24
                                hours.</p>
                </div>
                <div class="pt-3 mx-5">
                    <p><img class=info_arch1 src="{{ asset('customImages/Phone Icon.svg') }}" alt="">
                        <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;" >+234709154822</a>
                    </p>
                    <p class="pt-3"><img id=info_arch2 src="{{ asset('customImages/Envelope Icon.svg') }}" alt="">
                        <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">info@archwareltd.com</a>
                    </p>
                    <p class="pt-3"><img id=info_arch3 src="{{ asset('customImages/Map Marker Icon.svg') }}" alt="">
                        <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">3, Ayangboye Street, Anthony Village, Lagos</a>
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
    </section>
</div>


    <script type="text/javascript"></script>

    @endsection