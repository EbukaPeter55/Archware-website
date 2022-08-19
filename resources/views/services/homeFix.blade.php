@extends('layouts.app')

@section('description',
    'Archware - Our agile approach to problem-solving and strategic planning helps you achieve
    better results for your business.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')


<section class="container-fluid">
 <!-- MOBILE HERO SECTION -->
 <div class="mobile-hero" style="">
                        <div class="d-sm-flex flex-row flex-wrap justify-content-center align-items-center mobile-hero-wrapper">
                            <div class="mobile-copy-hero">
                                <h1 class="mobile-hero-title" style="font-weight: 700; color: #040856; font-size: 3.125rem;">
                                    <br><br><b>Excellent Tech-Based <br>Solutions
                                        For Your Business</b>
                                </h1>
                                <p class="mt-3"
                                    style="font-weight: 400;font-size: 1rem;
                                color: rgba(4, 8, 86, 0.7);">
                                    Our agile approach to problem-solving and strategic planning<br>
                                    helps you build a better structure and achieve better results in<br>
                                    your business.</p>
                                <a href="/services">
                                    <button class="mt-3"
                                        style="font-weight: 500;font-size: 16px; width: 161px; height: 44px;
                        border: none;color: #ffffff;border-radius: 8px;
                        background: #1F3F95;">
                                        Read More
                                    </button></a>
                            </div>
                            <div style="margin-top: .8rem">
                                <img class="img-fluid" src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_374/v1660914041/Frame_44.png">
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
                                <h1 class="" style="font-weight: 700; color: #040856; font-size: 3.125rem; margin-top: -3rem">
                                    <br><br><b>Excellent Tech-Based <br>Solutions
                                        For Your Business</b>
                                </h1>
                                <p class="mt-3"
                                    style="font-weight: 400;font-size: 16px;
        color: rgba(4, 8, 86, 0.7);">
                                    Our agile approach to problem-solving and strategic planning<br>
                                    helps you build a better structure and achieve better results in<br>
                                    your business.</p>
                                <a href="/services">
                                    <button class="mt-3"
                                        style="font-weight: 500;font-size: 16px; width: 161px; height: 44px;
                        border: none;color: #ffffff;border-radius: 8px;
                        background: #1F3F95;">
                                        Read More
                                    </button></a>
                            </div>
                            <div style="margin-top: 5rem">
                                <img class="img-fluid" src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_374/v1660914041/Frame_44.png">
                            </div>
                        </div>
                    </div>

                    <!-- Second slide -->
                    <div class="carousel-item hide-mobile" style="height:70vh">
                        <!-- Review card -->
                        <div class="d-sm-flex flex-row flex-wrap justify-content-evenly align-items-center"
                        style="max-height:70vh">
                            <div>
                                <img class="img-fluid"
                                    src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,w_406/v1660900289/Group_63_1.png">
                            </div>

                            <div>
                                <h1 class="pt-4" style="font-weight: 700; color: #040856; font-size: 3.12rem;">Acquire
                                    Tech Skills For <br>
                                    A Borderless Career
                                </h1>
                                <p class="mt-4"
                                    style="font-weight: 400;font-size: 1rem; color: rgba(4, 8, 86, 0.7);
                                            max-width: 36.25rem; line-height: 155%;">
                                    Become an expert in tech without prior knowledge and stay ahead of the global market.
                                </p>
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
                    <div class="carousel-item hide-mobile" style="height:70vh">
                        <div class="d-sm-flex flex-row flex-wrap justify-content-between" style="padding-left: 12%;">
                            <div style="padding-botton: 2%;">
                                <h1 class="" style="font-weight: 700; color: #040856; font-size: 50px;">
                                    <br><br>Top-notch Website<br>
                                    Design And Development
                                </h1>
                                <p class="mt-4"
                                    style="font-weight: 400;font-size: 16px;
        color: rgba(4, 8, 86, 0.7);">
                                    Get a fully optimised and responsive website design <br>that can give your
                                    business the visibility it needs.</p>
                                <a href="/services">
                                    <button class="mt-5"
                                        style="font-weight: 500;font-size: 16px; width: 161px; height: 44px;
                        border: none;color: #ffffff;border-radius: 8px;
                        background: #1F3F95;">
                                        Read more
                                    </button></a>
                            </div>
                            <div>
                                <img class="img-fluid" style="height: 70vh;"
                                    src="{{ asset('customImages/Rectangle 651.svg') }}">
                            </div>
                        </div>

                    </div>

                    <!-- Left and right controls/icons -->
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <img class="img-fluid" src="{{ asset('customImages/Vector.svg') }}">
                    </button> -->
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <img class="img-fluid" src="{{ asset('customImages/Vector (1).svg') }}">
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
            <img class="img-fluid"
                src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_347/v1660830314/core-values-4_1.svg"/>
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
        <div class="d-sm-flex flex-wrap proof-of-work-child justify-content-around">
            <div class="web">
                <h1 class="incrementTimer" akhi="25">0</h1>
                <p>Websites</p>
            </div>
            <div class="web">
                <h1 class="incrementTimer" akhi="40">0</h1>
                <p>Completed Projects</p>
            </div>
            <div class="customers">
                <h1 class="incrementTimer" akhi="20">0</h1>
                <p>Happy customers</p>
            </div>
        </div>

    </section>
    <!-- END OF PROOF OF WORK -->

     <!-- SERVICES BRIEF SECTION -->
     <section class="container-fluid service-section">
        <div class="d-sm-flex flex-row align-items-center flex-wrap justify-items-center service-wrapper">
            <div class="service-section-right">
                <h2>Mobile App Development</h2>
                <p>
                    Over the years, we have developed responsive mobile apps across
                    industries such as Fin-tech, Banking, Medical science, and many more.
                    Our team of experts is well skilled in different mobile app development
                    tools such as Atom, Git hub, Ninox, MobiLoud, React Native, Xcode, Ionic, Android Studio, etc. With core
                    competence in mobile app design and development, we have developed world-class Android and iOs apps.
                </p>
                <button type='button'>Read More
                </button>
            </div>
            <img class="img-fluid"
                src="https://res.cloudinary.com/peterdbrainy/image/upload/c_scale,q_auto:good,w_371/v1660455795/Rectangle_648.svg" />
        </div>
    </section>
    <!--END OF SERVICES BRIEF SECTION -->


    <!-- SCRIPT FOR THE DOM  -->
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