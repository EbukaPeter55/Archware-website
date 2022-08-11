@extends('layouts.app')

@section('description',
    'Archware - Our agile approach to problem-solving and strategic planning helps you achieve
    better results for your business.',)
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')
    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-10">

                @include('errors.error_message')

                <!-- OUR SERVICES BEGINNING SECTION -->
                <div class="text-center justify-content-center title-style">
                    <h1 class="fw-bold archware_h1">Our Services</h1>
                    <hr class="container archware_header_underline" />
                </div>

                <div class="card p-4"
                    style="background: #ffffff; color:#040856; border-radius: 5px;
                         box-shadow: 0 3px 10px #e3efe6; margin-top: 5rem;">
                    <div class="row">
                        <div class="col-md-3">
                            <img class="d-block w-60 container" src="/customImages/Layer 2.svg" alt="">
                        </div>
                        <div class="col-md-9">
                                <h3 class="pt-4"><strong>Archware training institute</strong></h3>
                                <p style="font-size: 16px" class="pb-4">
                                    We are commited to helping you build successful careers and promote continous learning in the tech
                                    industry.<br>
                                    We design our courses in line with the tech industry's current demands, which will help
                                    you acquire the
                                    necessary skills <br> to perform excellently on a job and prepare you for professional
                                    certification exams.
                                </p>
                                <a href="/contacts" class="text-decoration-none archware-text-yellow"><p>View our courses and syllabus >><p></a>
                        </div>
                    </div>
                </div>

                <div class="card float-left p-4"
                    style="background-image: linear-gradient(to right, #90bf3d , #5e9c48);; color:#ffffff; border-radius: 5px;
                        box-shadow: 0 3px 10px #e3efe6;  margin-top: 3rem;">
                    <div class="row">
                        <div class="col-md-9">
                                <h3 class="pt-4"><strong>Website Design & Development</strong></h3>
                                <p style="font-size: 16px" class="pb-4">
                                    We offer excellent website design and development services for individuals by constantly evaluating <br>
                                    the latest trends in the development community to ensure we give you the best. We build highly optimize website <br>
                                    that will give your business the proper online visibility it needs.
                                </p>
                                <a href="/contacts" class="text-decoration-none archware-text-light-yellow"><p>Contact us for this service >><p></a>
                        </div>
                        <div class="col-md-3">
                            <img class="d-block w-60 container" src="/customImages/Asset 3 2.svg" alt="">
                        </div>
                    </div>
                </div>

                <div class="card p-4"
                    style="background: #ffffff; color:#040856; border-radius: 5px;
                         box-shadow: 0 3px 10px #e3efe6; margin-top: 3rem;">
                    <div class="row">
                        <div class="col-md-3">
                            <img class="d-block w-60 container" src="/customImages/Group.svg" alt="">
                        </div>
                        <div class="col-md-9">
                                <h3 class="pt-4"><strong>Website Re-design</strong></h3>
                                <p style="font-size: 16px" class="pb-4">
                                    Our team does not only build new websites for brand; we also help you revamp your old website for better<br>
                                    performance in search engines. We update your content, improve navigation for better conversion, and also refresh <br>
                                    your page layout. We rebrand your business or upgrade your already existing website.
                                </p>
                                <a href="/contacts" class="text-decoration-none archware-text-yellow"><p>Contact us for this service >><p></a>
                        </div>
                    </div>
                </div>

                <div class="card float-left p-4"
                    style="background: #1f3f95; color:#ffffff; border-radius: 5px;
                        box-shadow: 0 3px 10px #e3efe6; margin-top: 3rem;">
                    <div class="row">
                        <div class="col-md-9">
                                <h3 class="pt-4"><strong>Mobile Website Design</strong></h3>
                                <p style="font-size: 16px" class="pb-4">
                                    Our team of experts is here to help you design a mobile website that can serve your users effectively. We unserstand <br>
                                    that most users prefer to use their smartphones to visit sites online and we are devoted to building a highly <br>
                                    responsive website for mobile phones.
                                </p>
                                <a href="/contacts" class="text-decoration-none archware-text-light-yellow"><p>Contact us for this service >><p></a>
                        </div>
                        <div class="col-md-3">
                            <img class="d-block w-60 container" src="/customImages/Asset 4 1.svg" alt="">
                        </div>
                    </div>
                </div>

                <div class="card p-4"
                    style="background: #ffffff; color:#040856; border-radius: 5px;
                         box-shadow: 0 3px 10px #e3efe6; margin-top: 3rem;">
                    <div class="row">
                        <div class="col-md-3">
                            <img class="d-block w-60 container" src="/customImages/Layer 2-1.svg" alt="">
                        </div>
                        <div class="col-md-9">
                                <h3 class="pt-4"><strong>Mobile App Development</strong></h3>
                                <p style="font-size: 16px" class="pb-4">
                                    We are commited to developing mobile apps for iOS. Android, etc that offer an excellent user experience. <br>
                                    <strong>iPhone: </strong> We build highly responsive mobile apps with an excellent UI/UX suitable for any Apple product. <br>
                                    <strong>Android: </strong>We develop optimizez apps for all android devices, ensuring that your users enjoy the best experience.
                                </p>
                                <a href="/contacts" class="text-decoration-none archware-text-yellow"><p>Contact us for this service >><p></a>
                        </div>
                    </div>
                </div>

                <div class="card float-left p-4"
                    style="background-image: linear-gradient(to right, #90bf3d , #5e9c48);; color:#ffffff; border-radius: 5px;
                        box-shadow: 0 3px 10px #e3efe6; margin-top: 3rem;">
                    <div class="row">
                        <div class="col-md-9">
                                <h3 class="pt-4"><strong>Ongoing Web Maintenance</strong></h3>
                                <p style="font-size: 16px" class="pb-4">
                                    We carry out ongoing web maintenance for individual and business websites. We help you audit your webpage to <br>
                                    identify gaps and proffer long-lasting solutions that can help keep your website up-to-date to ensure it continually <br> performs well.
                                </p>
                                <a href="/contacts" class="text-decoration-none archware-text-light-yellow"><p>Contact us for this service >><p></a>
                        </div>
                        <div class="col-md-3">
                            <img class="d-block w-60 container" src="/customImages/Layer 2-2.svg" alt="">
                        </div>
                    </div>
                </div>

                <div class="card p-4"
                    style="background: #ffffff; color:#040856; border-radius: 5px;
                         box-shadow: 0 3px 10px #e3efe6; margin-top: 3rem;">
                    <div class="row">
                        <div class="col-md-3">
                            <img class="d-block w-60 container" src="/customImages/Group-1.svg" alt="">
                        </div>
                        <div class="col-md-9">
                                <h3 class="pt-4"><strong>Project Management</strong></h3>
                                <p style="font-size: 16px" class="pb-4">
                                    We offer full-service project management. Our team specializes in proper planning, coordinating and execution of <br>
                                    projects till the end. We are here to help you allocate the right resources needed to achieve your business goals. <br>
                                    Let's help you take your project to another level!
                                </p>
                                <a href="/contacts" class="text-decoration-none archware-text-yellow"><p>Contact us for this service >><p></a>
                        </div>
                    </div>
                </div>

                <div class="card float-left p-4"
                    style="background: #1f3f95; color:#ffffff; border-radius: 5px;
                        box-shadow: 0 3px 10px #e3efe6; margin-top: 3rem;">
                    <div class="row">
                        <div class="col-md-9">
                                <h3 class="pt-4"><strong>Ecommerce/Online Web Stores</strong></h3>
                                <p style="font-size: 16px" class="pb-4">
                                    We will help you create a responsive e-commerce website that will enable you to connect with your customers, <br>
                                    process orders, and accept payments faster. We build mobile-friendly online stores with well-optimized product <br>
                                    landing pages.
                                </p>
                                <a href="/contacts" class="text-decoration-none archware-text-light-yellow"><p>Contact us for this service >><p></a>
                        </div>
                        <div class="col-md-3">
                            <img class="d-block w-60 container" src="/customImages/Layer 2-3.svg" alt="">
                        </div>
                    </div>
                </div>

                <div class="card p-4"
                    style="background: #ffffff; color:#040856; border-radius: 5px;
                         box-shadow: 0 3px 10px #e3efe6; margin-top: 3rem;  margin-bottom: 12%;">
                    <div class="row">
                        <div class="col-md-3">
                            <img class="d-block w-60 container" src="/customImages/Layer 1.svg" alt="">
                        </div>
                        <div class="col-md-9">
                                <h3 class="pt-4"><strong>Account & Expenses Management</strong></h3>
                                <p style="font-size: 16px" class="pb-4">
                                    With our automated expense management software, we can help you track your employees' spending to make sure all <br>
                                    expenses are accounted for and also ensure the submission of accurate reimbursement claims to prevent fraud.
                                </p>
                                <a href="/contacts" class="text-decoration-none archware-text-yellow"><p>Contact us for this service >><p></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script type="text/javascript"></script>

@endsection
