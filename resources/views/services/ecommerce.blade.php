@extends('layouts.app')

@section('description',
    'Archware - Our agile approach to problem-solving and strategic planning helps you achieve
    better results for your business.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')

    <section style=" background-image: url(../customImages/Group68.png)" ; class="mt-5">
        <div class="container justify-content-center">
            <div class="row">
                <div class="col-md-5 mt-5 pt-3">
                    <h2 style="font-weight: 700; font-size: 50px; line-height: 58px; color: #040856;">
                        E-commerce
                    </h2>
                    <p class="pt-3"
                        style="font-style: normal;font-weight: 400;font-size: 18px;line-height: 155%;color: rgba(4, 8, 86, 0.7);">
                        Get your products in front of your customers with our<br>
                        e-commerce website design and development service.
                    </p>
                </div>
                <div class="col-md-7 px-2" style="">
                    <img class="img-fluid" src="{{ asset('/customImages/ecommerce list.png') }}">
                </div>
            </div>
        </div>
    </section>


    <section class="container mt-5">
        <div class="row">
            <div class="col-md-5" class="w-50">
                <img style="width: 500px; " class="img-fluid" src="/customImages/ecommerce target client.png">
            </div>
            <div class="col-md-6 px-4">
                <p class="px-2 py-4"
                    style="font-weight: 400;  font-size: 16px;line-height: 172%;color: rgba(4, 8, 86, 0.7);">
                    Social Commerce continues its meteoric rise in popularity <br>across the globe with the recent prediction putting the <br> industry at the growing rate of $1.2 trillion dollars in e-<br>commer
                    <br>
Being the owner of a top-notch, user-friendly online store is <br>the first step in starting a highly successful online business.<br> With the best technical consultation and development<br> plans, we unlock the potential of e-commerce platforms to<br> provide you with a robust feature that is exclusive, and <br> dependable using your preferred tools such as Drupal,<br> Magento development, WooCommerce, Shopify,<br> BigCommerce.<br>
<br>
Our design and development of e-commerce websites <br>provide your business with a platform that connects,<br> enriches and is responsive to all devices for unforgettable <br>customer experiences.<br>
A great online store design not only helps customers trust <br> your brand but also helps you stand out from the  <br>competition.
               ce purchases by 2025.<br>
                </p>
            </div>
        </div>
    </section>

    <section class="my-3 py-3">
        <div class="container justify-content-center">
            <div class="row">
                <a class="py-3" style="text-align:center;">
                    <button
                        style="background: #1F3F95;border-radius: 4px;border:none; width:521px; height: 56px; color:#FFFFFF">
                        Let’s Talk About Your E-commerce Project
                    </button>
                </a>
            </div>
        </div>
    </section>


    <div class="container mt-5">
        <div class="p-5 row">

            <div class="col-md-4 p-3">
                <div class="card" style="border-radius: 20px; box-shadow: 0 5px 10px #e6e6e6; height: 37em;">
                    <img src="/customImages/Broaden Your Brand.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-wrap p-4">
                        <div class="pt-1" style="font-weight: 700; font-size:26px; line-height: 40.3px; color: #0D2158;">
                            Broaden Your Brand
                        </div>
                        <p class="card-text archware-text-dull"
                            style="color: #0d2158; font-size: 15px; text-align: center; margin-bottom: auto;">
                            Ecommerce is an ideal way you can take your brand from a traditional store to an innovative,
                            well-loved brand, and maintain exponential growth.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-3">
                <div class="card" style="border-radius: 20px; box-shadow: 0 5px 10px #e6e6e6; height: 37em;">
                    <img src="/customImages/More Convenience.png" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-wrap p-4">
                        <div class="pt-1" style="font-weight: 700; font-size:26px; line-height: 40.3px; color: #0D2158;">
                            More Convenience
                        </div>
                        <p class="card-text archware-text-dull"
                            style="color: #0d2158; font-size: 15px; text-align: center; margin-bottom: auto;">
                            An online store is available all day, every day meaning your customers can visit your store at
                            all times, no matter what their schedule might be. This means you can appeal to a wider range of
                            customers all looking for a convenient and flexible experience.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-3">
                <div class="card" style="border-radius: 20px; box-shadow: 0 5px 10px #e6e6e6; height: 37em;">
                    <img src="/customImages/Marketing Opportunities.png" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-wrap p-4">
                        <div class="pt-1" style="font-weight: 700; font-size:26px; line-height: 40.3px; color: #0D2158;">
                            Marketing Opportunities
                        </div>
                        <p class="card-text archware-text-dull"
                            style="color: #0d2158; font-size: 15px; text-align: center; margin-bottom: auto;">
                            Your website is one of the best marketing tools your business has. A great online store design not only help customers trust your brand but also helps you stand out from the competition.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <section class="container-fluid team-section">
        <div class="d-flex flex-row flex-wrap justify-items-center team-wrapper"
            style="background: #1F3F95; border-radius: 20px 20px;">
            <img class="img-fluid p-5" style="margin-bottom: -48px; margin-top: auto; border-radius: 70px 70px 30px 50px;"
                src="/customImages/Our Experience.png">
            <div class="team-section-right">
                <h2>Our Experience</h2>
                <p>
                    Our team of e-commerce web design experts will help you <br>
                    every step of the way to bring your vision to life with precise <br>
                    planning and execution to present an attractive display of <br>
                    your products to your customers and improve your sales.<br>
                    Our goal is to create an e-commerce website that is fast, and <br>
                    functional to keep your customers returning and converting <br>
                    from their first visit. All you have to do is let us know your <br>
                    goals, and we'll do the research for you.<br>
                    Our job isn't finished once your site is launched. We will also <br>
                    maintain and optimise your website, keeping it up to date <br>
                    and functioning so that you can get the most out of your new <br>
                    e-commerce website development.
                </p>
            </div>
        </div>
    </section>

    <section class="my-5 py-5">
        <div class="container justify-content-center">
            <div class="row">
                <p style="font-weight: 600;font-size: 30px;line-height: 72px;color: #0D2158; text-align:center">
                    Let's create an e-commerce store as great as your products
                </p>
                <a class="py-3" style="text-align:center;">
                    <button
                        style="background: #1F3F95;border-radius: 4px;border:none; width:312px; height: 56px; color:#FFFFFF">
                        Get In Touch For a Quote
                    </button>
                </a>
            </div>
        </div>
    </section>


@endsection
