@extends('layouts.app')

@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')

    <div style=" background-image: url(../customImages/Group6700.png);" class="mt-5">
        <section
            class="container mt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center block-display-tab section-top">
            <div class="archware-content-text archwarejo-width-bottom-head pt-2">
                <h2 style="font-weight: 700; font-size: 50px; line-height: 58px; color: #ffffff;" class="text-title-mobile">
                    Website Design and Development
                </h2>
                <p class="pt-3 text-body-mobile archware-text-justify"
                    style="font-style: normal;font-weight: 400;font-size: 18px;line-height: 155%;color:#ffffff;">
                    Appealing web design, development with value added tools for better ROI.
                </p>
            </div>
            <div class="archwarejo-width-top-head">
                <img class="img-fluid image-width-tab image-min-height-mobile float-to-end" src="/customImages/web design right.png"
                alt="website design image">
            </div>
        </section>
    </div>


    <section class="container mt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center block-display-tab">
        <div class="archwarejo-width-top">
            <img class="img-fluid image-width-tab" src="/customImages/Group 66.png" alt="website design image"/>
        </div>
        <div class="archware-text-justify archware-content-text archwarejo-width-bottom padding-left-desktop">
            <p>
            Archware technologies provide web development solutions to meet your business needs. 
            Our skilled developers incorporate distinctive functional tools into brands, businesses, 
            and enterprise websites using cutting-edge technology solutions to provide consumers with a 
            superior experience.</p>
            <p>We offer 360 degrees solutions to web development as a one-stop provider of innovative web
                solutions. Every website designed and built by our team of professional web designers comes 
                with a full content management system so that you can update your website when necessary. 
                With our web development services, businesses of all types and sizes can get better returns from online 
                activities.
            </p>
        </div>
    </section>

    <div style="background: #f7f7f7" class="p-1">
        <div class="text-center justify-content-center title-style">
            <h1 class="fw-bold archware_h1 text-title-mobile"
                style="font-weight: 700;  font-size: 46px;
                        line-height: 46.4px; color: #040856;">
                WE OFFER
            </h1>
            <hr class="container archware_header_underline text-title-mobile"/>


            <span class="fw-bold p-3 text-body-mobile"
                style="font-weight: 400;  font-size: 26px;
                        line-height: 40.3px; color: #040856;">
                <img src="/customImages/radio.svg" style="width: 12px; height: 12px;" alt="web development">
                Web App Development
            </span>
            <span class="fw-bold p-3 text-body-mobile"
                style="font-weight: 400;  font-size: 26px;
                        line-height: 40.3px; color: #040856;">
                <img src="/customImages/radio.svg" style="width: 12px; height: 12px;" alt="B2B and B2C">
                B2B & B2C Portals
            </span>



            <span class="fw-bold p-3 text-body-mobile"
                style="font-weight: 400;  font-size: 26px;
                        line-height: 40.3px; color: #040856;">
                <img src="/customImages/radio.svg" style="width: 12px; height: 12px;" alt="wordpress development">
                WordPress Development
            </span>

            <span class="fw-bold p-3 text-body-mobile"
                style="font-weight: 400;  font-size: 26px;
                        line-height: 40.3px; color: #040856;">
                <img src="/customImages/radio.svg" style="width: 12px; height: 12px;" alt="e-commerce dev">
                Ecommerce
            </span>

            <span class="fw-bold p-3 text-body-mobile"
                style="font-weight: 400;  font-size: 26px;
                        line-height: 40.3px; color: #040856;">
                <img src="/customImages/radio.svg" style="width: 12px; height: 12px;" alt="Single page application">
                Single Page Application
            </span>

            <br>
            <span class="fw-bold p-3 text-body-mobile"
                style="font-weight: 400;  font-size: 26px;
                        line-height: 40.3px; color: #040856;">
                <img src="/customImages/radio.svg" style="width: 12px; height: 12px;" alt="CMS">
                Content Management System (CMS) Website
            </span>
        </div>
    </div>


    <div style="background-color: #1F3F95" class="mt-5">
        <section class="container mt-5 d-flex flex-flow flex-wrap
                justify-content-center align-items-center block-display-tab section-top">
            <p class="text-label-mobile py-5"
                style="font-weight: 500;font-size: 25px;line-height: 34px;text-align: center;color: #FFFFFF;mix-blend-mode: normal;">
                <img src="/customImages/js.png" class="px-5" alt="Javascript">
                <img src="/customImages/php.png" class="px-5" alt="PHP">
                <img src="/customImages/html5.png" class="px-5" alt="HTML">
                <img src="/customImages/shopify.png" class="px-5" alt="S">
                <img src="/customImages/dotnet.png" class="px-5" alt=".Net">
                <img src="/customImages/wordpress.png" class="px-5" alt="Wordpress">
                <img src="/customImages/a logo.png" class="px-5" alt="A">
                <img src="/customImages/mysql.png" class="px-5" alt="Mysql">
            </p>
        </section>

        <div style="background-image: linear-gradient(to right, #7CB142, #63A148); height: 137px;
            margin-right:310px; margin-top: -50px;"
            class="d-flex justify-content-center align-items-center flex-wrap lettalk-mobile">

            <span
                style="margin-left: 0; margin-right: 0; font-weight: 700; font-size: 30px; line-height: 36.31px; color: #ffffff;" class="web-big-font">
                Ready to start your Web Development project?
                <p style="font-weight: 400;font-size: 19px;line-height: 172%;color: #FFFFFF;" class="web-small-font">
                    No matter your budget and timeline, we're available to deliver without compromising quality.
                </p>
            </span>

            <a href="/contacts" ><button type="submit" class="large-button-mobile">
                LET'S TALK
            </button></a>
        </div>
    </div>



    <section class="container mt-3 pt-5">
        <div class=" d-flex flex-row flex-wrap justify-content-center">

            <div class=" card col-lg-3 mx-3 native remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0;">
                <img src="/customImages/Rectangle 661.jpg" alt="" style="object-fit:cover;" alt="web development">
                <div class="archware-card-padding-left px-2 py-4">
                    <h2 class="archware-card-title text-align-left-body" style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                        Web App Develppment
                    </h2>
                    <p class="py-2 archware-card-paragraph-padding text-align-left-body"
                        style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        Beyond design, we offer a full stack development approach to developing a massive range of solutions, most of which are customized to your 
                        business needs. Our team employs a holistic approach to ensure your website is visually appealing and easy to 
                        navigate.
                    </p>
                </div>
            </div>
            <div class="card col-lg-3 mx-3 native remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0 ;">
                <img src="/customImages/Rectangle Ecommerce.jpg" alt="E-commerce">
                <div class="archware-card-padding-left px-2 py-4 ">
                    <h2 class="archware-card-title text-align-left-body" style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                        Ecommerce
                    </h2>
                    <p class="py-2 archware-card-paragraph-padding text-align-left-body"
                        style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        Get your products in front of your customers with our e-commerce website design and development
                        service. With a well-designed e commerce website, you can target your customers and reach them
                        when they???re ready to shop. We offer a range of e-commerce website development packages to help your company succeed.
                    </p>
                </div>
            </div>
            <div class="card col-lg-3 mx-3 native remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0 ;">
                <img src="/customImages/Rectangle b2b.jpg" alt="B2B & B2C portals">
                <div class="archware-card-padding-left px-2 py-4">
                    <h2 class="archware-card-title text-align-left-body" style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                        B2B & B2C Portals
                    </h2>
                    <p class="py-2 archware-card-paragraph-padding text-align-left-body"
                        style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        By combining the leading edge technologies, we develop B2B and B2C portals and connect you with your
                        manufacturers, wholesalers, distributors, and end-users. With these highly scalable portal solutions, we will assist 
                        you in strengthening your customer relationships and streamlining operational efficiency.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section
        class="container mt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center block-display-tab experience-body-with-pix-mobile"
        style="background: #1F3F95; border-radius: 20px 20px;">
        <div class="archwarejo-width-top">
            <img class="img-fluid image-width-tab p-5 archwarejo-image-fully-bottom image-padding-buttom"
                src="/customImages/Rectangle corporate.jpg" alt="Corporate website solution">
        </div>
        <div
            class="archware-content-text archwarejo-width-bottom middle-content-padding-right experience-body-mobile">
            <h2 class="text-white-header">Corporate Website Solutions</h2>
            <p class="text-white-paragraph archware-text-justify">
            With the use of any web development technology, including wooCommerce, WordPress, Shopify, Angular, ReactJS, 
            Laravel, Lumen, PHP, MySQL, JAVA, .Net, JavaScript, Node.js, and HTML, our team of skilled web developers can 
            construct a great website for your company that is sure to draw in new clients.
            </p>
        </div>
    </section>

    <section class="my-5 py-5">
        <div class="container justify-content-center">
            <div class="row">
                <p class="text-label-mobile"
                    style="font-weight: 600;font-size: 30px;line-height: 72px;color: #0D2158; text-align:center">
                    Got a Project? Tell us about it!
                </p>
                <a href="/contacts" class="py-3" style="text-align:center;">
                    <button class="small-mobile-long-button"
                        style="background: #1F3F95;border-radius: 4px;border:none; width:312px; color:#FFFFFF">
                        Contact Us
                    </button>
                </a>
            </div>
        </div>
    </section>

@endsection
