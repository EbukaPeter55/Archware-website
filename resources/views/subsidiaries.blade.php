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
            <div class="col-md-9">

                @include('errors.error_message')

                <!-- SUBSIDIARIES BEGINNING SECTION -->
                <div class="text-center justify-content-center p-4 title-style">
                    <h1 class="fw-bold archware_h1">Subsidiaries</h1>
                    <hr class="container archware_header_underline" />
                </div>

                <div class="container mx-auto mt-4" style='margin-bottom: 12%'>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="card" style="border-radius: 20px; box-shadow: 0 5px 10px #e6e6e6; height: 34em;">
                                <img src="/customImages/Foremost.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="pt-2"><strong>Formost Eyeclinic</strong></h5>
                                    <p class="card-text my-4 archware-text-dull" style="color: #0d2158; font-size: 17px;">
                                        In purus at morbi magna in in maecenas. <br>
                                        Nunc nulla magna elit, varius phasellus <br>
                                        blandit convallis.
                                    </p>
                                    <a href="#" class="text-decoration-none p-1 archware-text-yellow"><strong>Visit website</strong></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card" style="border-radius: 20px; box-shadow: 0 5px 10px #e6e6e6; height: 34em;">
                                <img src="/customImages/hi.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="pt-2"><strong>Youhi Media & Communications Ltd.</strong></h5>
                                    <p class="card-text my-4 archware-text-dull" style="color: #0d2158; font-size: 17px;">
                                        Established to make an impact in africa by providing innovative media and
                                        communication solutions to brands.
                                    </p>
                                    <a href="#" class="text-decoration-none p-1 archware-text-yellow"><strong>Visit website</strong></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card" style="border-radius: 20px; box-shadow: 0 5px 10px #e6e6e6; height: 34em;">
                                <img src="/customImages/hi.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="pt-2"><strong>Youhi Media & Communications Ltd.</strong></h5>
                                    <p class="card-text my-4 archware-text-dull" style="color: #0d2158; font-size: 17px;">
                                        Established to make an impact in africa by providing innovative media and
                                        communication solutions to brands.
                                    </p>
                                    <a href="#" class="text-decoration-none p-1 archware-text-yellow"><strong>Visit website</strong></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card" style="border-radius: 20px; box-shadow: 0 5px 10px #e6e6e6; height: 34em;">
                                <img src="/customImages/hi.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="pt-2"><strong>Youhi Media & Communications Ltd.</strong></h5>
                                    <p class="card-text my-4 archware-text-dull" style="color: #0d2158; font-size: 17px;">
                                        Established to make an impact in africa by providing innovative media and
                                        communication solutions to brands.
                                    </p>
                                    <a href="#" class="text-decoration-none p-1 archware-text-yellow"><strong>Visit website</strong></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card" style="border-radius: 20px; box-shadow: 0 5px 10px #e6e6e6; height: 34em;">
                                <img src="/customImages/Queenshield.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="pt-2"><strong>Youhi Media & Communications Ltd.</strong></h5>
                                    <p class="card-text my-4 archware-text-dull" style="color: #0d2158; font-size: 17px;">
                                        Established to make an impact in africa by providing innovative media and
                                        communication solutions to brands.
                                    </p>
                                    <a href="#" class="text-decoration-none p-1 archware-text-yellow"><strong>Visit website</strong></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card" style="border-radius: 20px; box-shadow: 0 5px 10px #e6e6e6; height: 34em;">
                                <img src="/customImages/hi.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="pt-2"><strong>Youhi Media & Communications Ltd.</strong></h5>
                                    <p class="card-text my-4 archware-text-dull" style="color: #0d2158; font-size: 17px;">
                                        Established to make an impact in africa by providing innovative media and
                                        communication solutions to brands.
                                    </p>
                                    <a href="#" class="text-decoration-none p-1 archware-text-yellow"><strong>Visit website</strong></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card" style="border-radius: 20px; box-shadow: 0 5px 10px #e6e6e6; height: 34em;">
                                <img src="/customImages/D&RM.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="pt-2"><strong>Youhi Media & Communications Ltd.</strong></h5>
                                    <p class="card-text my-4 archware-text-dull" style="color: #0d2158; font-size: 17px;">
                                        Established to make an impact in africa by providing innovative media and
                                        communication solutions to brands.
                                    </p>
                                    <a href="#" class="text-decoration-none p-1 archware-text-yellow"><strong>Visit website</strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript"></script>

@endsection
