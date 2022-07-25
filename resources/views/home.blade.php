@extends('layouts.app')

@section('description', 'Archware - Our agile approach to problem-solving and strategic planning helps you achieve better results for your business.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/archware.png') }}@stop

@section('content')


{{-- @gbolahan --}}


<div id="homepage">
    <section id="section1" class="container-fluid">
        <div>
            <h1 class="section1-text"><b>Excellent Tech-Based Solution For Your <br>Business</b></h1>
            <p class="section1-text2">our agile approach to problem solving helps you build a better result and achieve
                better result in your Business</p>
            <button class="OurServicesbtn">our services </button>
        </div>

        <!--<div><img id="section1-img" src="{{ asset('customImages/Beside header.svg') }}"> </div>-->
    </section>

    <section class="section2" class="container-fluid">
        <div class="container-fluid">
            <img class="container-fluid" id="section2-img" src="{{ asset('customImages/Pictures.svg') }}">
        </div>
        <div class="section2-text" class="container-fluid">
            <div class="section2text">We Provides Support For Public And Private Enterprise</div>
            <div class="section2text2">Archwareltd promotes the growth of small and medium
                enterprises at the local and global business environments. Through its professionals
                with proven experience in different fields of infrastructure, Archwareltd facilitates new markets entry and
                consolidation, minimizing time and costs in the process of expansion.</div>
        </div>

    </section>

    <section>
        <div class="section3">
            <div class="section3background">
                <div class="sec3">
                    <div>
                        <h1 class="section3-text1">About Us</h1>
                        <p class="section3-text2">Archware Tech Group is a result-driven tech company in Lagos, Nigeria, established to
                            provide technological
                            innovations that help improve the quality of work and lives of people across several business sectors.
                            We are a team of creative thinkers that render excellent services that add value to you and your
                            business. Our
                            company comprises five subsidiaries created to contribute to the technological enhancement of different
                            business
                            sectors in Africa.</p>
                    </div>
                    <img class="section3-img" src="{{ asset('customImages/Macbook Pro.svg') }}">
                </div>
            </div>
        </div>
    </section>

    <section class="section4">
        <div>
            <img class="container-sm" class="section4-img" src="{{ asset('customImages/Image.svg') }}">
        </div>
        <div class="sec4texts">
            <div>
                <h1 class="section4-text1">Our Mission</h1>
                <p class="section4-text2">We provide a technology-based innovative
                    solutions ecosystem that automates, empowers,
                    and enables the growth of businesses across
                    Africa
                </p>
            </div>

            <div>
                <h1 class="section4-text3">Our Vision</h1>
                <p class="section4-text4">To become a leading technology solution provider in Africa.</p>
            </div>

            <div>
                <h1 class="section4-text5">Our Core Values</h1>

                <p>
                <div class="sec4t6">
                    <li><b> Value Creation</b>: We believe in creating long-lasting value for our clients.</li><br>
                    <li><b>Empathy</b>: Understanding is a key to our success as a team. </li><br>
                    <li><b>Innovation</b>: We are more than simply a team; we are innovative thinkers that strive to provide
                        fresh concepts.</li><br>
                    <li><b>Resilience</b>: We do not believe in defeat. We're a team of resilient individuals who persevere
                        through difficulties.</li>
                </div>
                </p>
            </div>
        </div>
    </section>

    <section class="section5-background">
        <div>
            <div>
                <h1 class="section5-text"> Subsidiaries</h1>
            </div>
            <div class="toptop">
                <p class="blank"></p>
            </div>
            <div class="theblanks">
                <p class="blank1"></p>
                <p class="blank2"></p>
                <p class="blank3"></p>
                <p class="blank4"></p>
                <p class="blank5"></p>
            </div>
        </div>

        <!-- <div id="backgroundlines5">
            <p id="section5-background2"></p>
            <p id="section5-background1"></p>
           
            <p id="section5-background3"></p>
        </div>-->

    </section>

    <section class="section6">
        <div class="section6partA">
            <h1 class="section6-text1">Contact Us</h1>
            <p class="section6-text2">We'd like to handle your business</p>

            <div>
                <form>
                    <div class="section6-formA">
                        <label class="section6-form1" class="f001">Name</label>
                        <input class="section6-form2" type="text" placeholder="fullname">
                        <p>
                    </div>

                    <div id="section6-formB">
                        <label class="section6-form3" class="f002">Email address</label>
                        <input class="section6-form4" type="email" placeholder="hello@dummie.com">
                        <p>
                    </div>

                    <div id="section6-formC">
                        <label class="section6-form5" class="f003">What can we help you with? </label>
                        <input class="section6-form6" type="text" placeholder="Your Message...">
                        
                    </div>

                    <div class="msgbtnA">
                        <button type="submit" class="msgbtn">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="section6partB">
            <div class="sec6itext">
                <div>
                    <h1 class="section6-text3">Contact Information<h1>
                            <p class="section6-text4">Fill up the form and our Team will get back to you within 24 hours.</p>
                </div>

                <div>
                <p><p>
                    <p class="phno"><img class=info_arch1 src="{{ asset('customImages/Phone Icon.svg') }}" alt="">

                        <b class=info_arch1B>+234709154822</b></p>
                    <p class="phno"><img id=info_arch2 src="{{ asset('customImages/Envelope Icon.svg') }}" alt="">
                        <a id=info_arch2B>info@archwareltd.com</a>
                    
                    </p>
                    <p class="phno"><img id=info_arch3 src="{{ asset('customImages/Map Marker Icon.svg') }}" alt="">
                        <a id=info_arch3B>3, Ayangboye Street, Anthony Village, Lagos</a>
                    </p><p>
                    <p class="phno"><img id=info_arch4 src="{{ asset('customImages/White.svg') }}">
                     <img id="info_arch5" src="{{ asset('customImages/White (1).svg') }}">
                    <img id="info_arch6" src="{{ asset('customImages/White (2).svg') }}">
                    <img id="info_arch7" src="{{ asset('customImages/White (3).svg') }}"></p>
                </div>
            </div>
        </div>

    </section>
</div>


<script type="text/javascript">



</script>

@endsection