@extends('layouts.app')

@section('description', 'Archware - Our agile approach to problem-solving and strategic planning helps you achieve better results for your business.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/archware.png') }}@stop

@section('content')


{{-- @gbolahan --}}


<div id="homepage">
    <section id="section1">
        <div>
            <h1 id="section1-text"><b>Excellent Tech-Based Solution For Your <br>Business</b></h1>
            <p id="section1-text2">our agile approach to problem solving helps you build a better result and achieve
                better result in your Business</p>
            <button id="OurServicesbtn">our services </button>
        </div>

        <div><img id="section1-img" src="{{ asset('customImages/Beside header.svg') }}"> </div>
    </section>

    <section id="section2">
        <div id="section2text">We Provides Support For Public And Private Enterprise</div>
        <div id="section2text2">Archwareltd promotes the growth of small and medium
            enterprises at the local and global business environments. Through its professionals
            with proven experience in different fields of infrastructure, Archwareltd facilitates new markets entry and
            consolidation, minimizing time and costs in the process of expansion.</div>
        <div>
            <img id="section2-img" src="{{ asset('customImages/Pictures.svg') }}">
        </div>
    </section>

    <section>
        <div id="section3background">
            {{-- <img id="section3-img" src="{{ asset('customImages/Macbook Pro.svg') }}"> --}}
            <img id="section3-img" src="{{ asset('customImages/down.png') }}">
            <h1 id="section3-text1">About Us</h1>
            <p id="section3-text2">Archware Tech Group is a result-driven tech company in Lagos, Nigeria, established to
                provide technological
                innovations that help improve the quality of work and lives of people across several business sectors.
                We are a team of creative thinkers that render excellent services that add value to you and your
                business. Our
                company comprises five subsidiaries created to contribute to the technological enhancement of different
                business
                sectors in Africa.</p>
        </div>
    </section>

    <section id="section4">
        <div>
            {{-- <img id="section4-img" src="{{ asset('customImages/Image.svg') }}"> --}}
            <img id="section3-img" src="{{ asset('customImages/down.png') }}">
        </div>
        <div>
            <h1 id="section4-text1">Our Mission</h1>
            <p id="section4-text2">We provide a technology-based innovative
                solutions ecosystem that automates, empowers,
                and enables the growth of businesses across
                Africa
            </p>
        </div>

        <div>
            <h1 id="section4-text3">Our Vision</h1>
            <p id="section4-text4">To become a leading technology solution provider in Africa.</p>
        </div>

        <div>
            <h1 id="section4-text5">Our Core Values</h1>
            <div id="section4-text6">
                <p>
                    <li> Value Creation: We believe in creating long-lasting value for our clients.</li>
                    <li>Empathy: Understanding is a key to our success as a team. </li>
                    <li>Innovation: We are more than simply a team; we are innovative thinkers that strive to provide
                        fresh concepts.</li>
                    <li>Resilience: We do not believe in defeat. We’re a team of resilient individuals who persevere
                        through difficulties.</li>
                </p>
            </div>
        </div>
    </section>

    <section>
        <div>
            <p id="section5-background"></p>
            <p id="section5-background1"></p>
            <p id="section5-background2"></p>
            <p id="section5-background3"></p>
        </div>
        <div>
            <h1 id="section5-text"> Subsidiaries</h1>
            <p id="blank"></p>
            <p id="blank1"></p>
            <p id="blank2"></p>
            <p id="blank3"></p>
            <p id="blank4"></p>
            <p id="blank5"></p>
        </div>
    </section>

    <section>
        <h1 id="section6-text1">Contact Us</h1>
        <p id="section6-text2">We'd like to handle your business</p>

        <div>
            <form>
                <div id="section6-formA">
                    <label id="section6-form1" class="f001">Name</label>
                    <input id="section6-form2" type="text" placeholder="fullname">
                </div>

                <div id="section6-formB">
                    <label id="section6-form3" class="f002">Email address</label>
                    <input id="section6-form4" type="email" placeholder="hello@dummie.com">
                </div>

                <div id="section6-formC">
                    <label id="section6-form5" class="f003">What can we help you with? </label>
                    <input id="section6-form6" type="text" placeholder="Your Message...">
                </div>

                <button type="submit" class="msgbtn">Submit</button>
            </form>
        </div>

        <div>
            {{-- <img id="section6-img" src="{{ asset('customImages/Background.svg') }}"> --}}
            <img id="section3-img" src="{{ asset('customImages/down.png') }}">
        </div>

        <div>
            <h1 id="section6-text3">Contact Information<h1>
            <p id="section6-text4">Fill up the form and our Team will get back to you within 24 hours.</p>
        </div>

        <div>
            <p><img id=info_arch1 src="{{ asset('customImages/Phone Icon.svg') }}" alt="">
                <br>
                <a id=info_arch1B>+234709154822</a><br>
            </p>
            <p><img id=info_arch2 src="{{ asset('customImages/Envelope Icon.svg') }}" alt="">
                <a id=info_arch2B>info@archwareltd.com</a>
                <br>
            </p>
            <p><img id=info_arch3 src="{{ asset('customImages/Map Marker Icon.svg') }}" alt="">
                <a id=info_arch3B>3, Ayangboye Street, Anthony Village, Lagos</a>
            </p>
            <p><img id=info_arch4 src="{{ asset('customImages/White.svg') }}"> </p>
            <p> <img id="info_arch5" src="{{ asset('customImages/White (1).svg') }}"></p>
            <p><img id="info_arch6" src="{{ asset('customImages/White (2).svg') }}"></p>
            <p><img id="info_arch7" src="{{ asset('customImages/White (3).svg') }}"></p>
        </div>

    </section>
</div>


<script type="text/javascript">


</script>

@endsection
