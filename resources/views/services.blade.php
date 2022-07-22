@extends('layouts.app')

@section('description',
    'Archware - Our agile approach to problem-solving and strategic planning helps you achieve
    better results for your business.',)
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/archware.png') }}@stop

@section('content')
    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-10">

                @include('errors.error_message')

                <div class="text-center justify-content-center p-4">
                    <h1 class="fw-bold archware_h1">Our Services</h1>
                    <hr class="container archware_header_underline" />
                </div>

                <div class="card p-4"
                    style="background: #ffffff; color:#040856; border-radius: 20px;
                         height: 20em; box-shadow: 0 3px 10px #e3efe6;">
                    <div class="row">
                        <div class="col-sm-3">
                            <img class="d-block w-100" src="/customImages/up.png" alt="">
                        </div>
                        <div class="col-sm-9">
                            <div class="card-block">
                                <!--           <h4 class="card-title">Small card</h4> -->
                                <h3 class="pt-4"><strong>Archware training institute</strong></h3>
                                <p style="font-size: 16px" class="pb-4">
                                    We are commited to helping you build successful careers and promote continous learning in the tech
                                    industry.<br>
                                    We design our courses in line with the tech industry's current demands, which will help
                                    you acquire the
                                    necessary skills <br> to perform excellently on a job and prepare you for professional
                                    certification exams.
                                </p>
                                <a href="#" class="text-decoration-none"><p style="color: #0ad147; font-size: 18px"><strong>View our courses and syllabus >></strong><p></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card float-left p-4"
                    style="background: #ffffff; color:#040856; border-radius: 20px;
                        height: 20em; box-shadow: 0 3px 10px #e3efe6;">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="card-block">
                                <h3 class="pt-4"><strong>Website Design & Development</strong></h3>
                                <p style="font-size: 16px" class="pb-4">
                                    We offer excellent website design and development services for individuals by constantly evaluating <br>
                                    the latest trends in the development community to ensure we give you the best. We build highly optimize website <br>
                                    that will give your business the proper online visibility it needs.
                                </p>
                                <a href="#" class="text-decoration-none"><p style="color: #0ad147; font-size: 18px"><strong>Contact us for this service >></strong><p></a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <img class="d-block w-100" src="/customImages/down.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="card p-4"
                    style="background: #ffffff; color:#040856; border-radius: 20px;
                         height: 20em; box-shadow: 0 3px 10px #e3efe6;">
                    <div class="row">
                        <div class="col-sm-3">
                            <img class="d-block w-100" src="/customImages/up.png" alt="">
                        </div>
                        <div class="col-sm-9">
                            <div class="card-block">
                                <!--           <h4 class="card-title">Small card</h4> -->
                                <h3 class="pt-4"><strong>Archware training institute</strong></h3>
                                <p style="font-size: 16px" class="pb-4">
                                    We are commited to helping you build successful careers and promote continous learning in the tech
                                    industry.<br>
                                    We design our courses in line with the tech industry's current demands, which will help
                                    you acquire the
                                    necessary skills <br> to perform excellently on a job and prepare you for professional
                                    certification exams.
                                </p>
                                <a href="#" class="text-decoration-none"><p style="color: #0ad147; font-size: 18px"><strong>View our courses and syllabus >></strong><p></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card float-left p-4"
                    style="background: #ffffff; color:#040856; border-radius: 20px;
                        height: 20em; box-shadow: 0 3px 10px #e3efe6;">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="card-block">
                                <h3 class="pt-4"><strong>Website Design & Development</strong></h3>
                                <p style="font-size: 16px" class="pb-4">
                                    We offer excellent website design and development services for individuals by constantly evaluating <br>
                                    the latest trends in the development community to ensure we give you the best. We build highly optimize website <br>
                                    that will give your business the proper online visibility it needs.
                                </p>
                                <a href="#" class="text-decoration-none"><p style="color: #0ad147; font-size: 18px"><strong>Contact us for this service >></strong><p></a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <img class="d-block w-100" src="/customImages/down.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="card p-4"
                    style="background: #ffffff; color:#040856; border-radius: 20px;
                         height: 20em; box-shadow: 0 3px 10px #e3efe6;">
                    <div class="row">
                        <div class="col-sm-3">
                            <img class="d-block w-100" src="/customImages/up.png" alt="">
                        </div>
                        <div class="col-sm-9">
                            <div class="card-block">
                                <!--           <h4 class="card-title">Small card</h4> -->
                                <h3 class="pt-4"><strong>Archware training institute</strong></h3>
                                <p style="font-size: 16px" class="pb-4">
                                    We are commited to helping you build successful careers and promote continous learning in the tech
                                    industry.<br>
                                    We design our courses in line with the tech industry's current demands, which will help
                                    you acquire the
                                    necessary skills <br> to perform excellently on a job and prepare you for professional
                                    certification exams.
                                </p>
                                <a href="#" class="text-decoration-none"><p style="color: #0ad147; font-size: 18px"><strong>View our courses and syllabus >></strong><p></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card float-left p-4"
                    style="background: #ffffff; color:#040856; border-radius: 20px;
                        height: 20em; box-shadow: 0 3px 10px #e3efe6;">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="card-block">
                                <h3 class="pt-4"><strong>Website Design & Development</strong></h3>
                                <p style="font-size: 16px" class="pb-4">
                                    We offer excellent website design and development services for individuals by constantly evaluating <br>
                                    the latest trends in the development community to ensure we give you the best. We build highly optimize website <br>
                                    that will give your business the proper online visibility it needs.
                                </p>
                                <a href="#" class="text-decoration-none"><p style="color: #0ad147; font-size: 18px"><strong>Contact us for this service >></strong><p></a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <img class="d-block w-100" src="/customImages/down.png" alt="">
                        </div>
                    </div>
                </div>

            </div>


            <br>
            <br>





        </div>
    </div>

    <script type="text/javascript"></script>

@endsection
