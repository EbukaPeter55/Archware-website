@extends('layouts.app')

@section('description',
    'Archware - Africa\'s Leading Software Development Company
    Software development company helping businesses and individuals take advantage of the benefits of the global technology
    landscape.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')

    <div style=" background-image: url(../customImages/Group6700.png)" class="mt-5">
        <section
            class="container mt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center block-display-tab section-top">
            <div class="archware-text-justify archware-content-text archwarejo-width-bottom-head pt-2">
                <h2 style="font-weight: 700; font-size: 50px; line-height: 58px; color: #ffffff;" class="text-title-mobile">
                    Web Maintenance
                </h2>
                <p class="pt-3 text-body-mobile"
                    style="font-style: normal;font-weight: 400;font-size: 18px;line-height: 155%;color:#ffffff;">
                    Optimal customer experience on your website without downtime.
                </p>
            </div>
            <div class="archwarejo-width-top-head">
                <img class="img-fluid image-width-tab image-min-height-mobile float-to-end" src="/customImages/web maintenance right.png"
                alt="web maintainance">
            </div>
        </section>
    </div>


    <section class="container mt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center block-display-tab">
        <div class="archwarejo-width-top">
            <img class="img-fluid image-width-tab" src="/customImages/web maintenance left.png" alt="Responsive web design image">
        </div>
        <div class="archware-text-justify archware-content-text archwarejo-width-bottom padding-left-desktop ">
            <p class="col-lg-11">
            Having a responsive website involves a great deal of work that needs to be done to successfully scale your 
            business. The truth is: a website is never really complete due to the ever-evolving demands and changes 
            happening in the digital world. This is why it is important to make plans to periodically update the website 
            with fresh content to engage your growing audience. Without frequent maintenance, your website will start 
            looking stale and may develop errors due to technical environment changes.We add value to your business by 
            making sure you’re not missing out on traffic and revenue growth as a result of a sluggish website or website 
            downtime. Our value in performance extends to our web maintenance plan with our web maintenance team ensuring 
            that your website is up to date regarding design, content, regular backups, and protection against malicious 
            login attempts, spam, bugs, and malware.
            </p>
        </div>
    </section>

    <section class="my-3 py-3">
        <div class="container justify-content-center">
            <div class="row text-center justify-content-center">
                <a href="/contacts" class="py-3" style="text-align:center;">
                    <button class="small-mobile-long-button"
                        style="background: #1F3F95;border-radius: 4px;border:none; width:521px; color:#FFFFFF">
                        Let's Help Maintain Your Website
                    </button>
                </a>
                <h1 class="fw-bold archware_h1 text-title-mobile why-font"
                    style="font-weight: 700;  font-size: 46px;
                        line-height: 46.4px; color: #040856;">
                    Why do you need web maintenance?
                </h1>
                <hr class="container archware_header_underline text-title-mobile" />
            </div>
        </div>
    </section>


    <!--services-->
    <section class="container mt-3 pt-5">
        <div class="d-flex flex-row flex-wrap justify-content-center">
            <div class="card col-lg-3 mx-3 native remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0;">
                <img src="{{ asset('customImages/site security.png') }}" alt="" style="object-fit:cover;" alt="site and security image">
                <div class="archware-card-padding-left px-2 py-4">
                    <h2 class="archware-card-title text-align-left-body"
                        style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                        Site Security
                    </h2>
                    <p class="archware-card-paragraph-padding py-2 text-align-left-body"
                        style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        Your website’s scripts, security, and platforms must be functional to make it a success. Regular
                         updates are crucial to patch up or improve the possible vulnerabilities and security lapses.
                    </p>
                </div>
            </div>
            <div class="card col-lg-3 mx-3 native remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0 ;">
                <img src="/customImages/seo.png" alt="SEO image">
                <div class="archware-card-padding-left px-2 py-4">
                    <h2 class="archware-card-title text-align-left-body"
                        style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                        SEO
                    </h2>
                    <p class="archware-card-paragraph-padding py-2 text-align-left-body"
                        style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        The algorithm that supports SEO is rapidly evolving with the inclusion of new techniques and tools. Maintaining your website will 
                        help it stay on top of the result page on search engines and increase visibility to relevant customers.
                    </p>
                </div>
            </div>
            <div class="card col-lg-3 mx-3 native remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0 ;">
                <img src="/customImages/website speed.png" alt="Website speed image">
                <div class="archware-card-padding-left px-2 py-4">
                    <h2 class="archware-card-title text-align-left-body"
                        style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                        Website Speed
                    </h2>
                    <p class="archware-card-paragraph-padding py-2 text-align-left-body"
                        style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        Research has shown that customers are attuned to fast and easily accessible websites. Regularly improving the speed of your website
                         yields happy customers, increases click-through rate (CTR), and encourages customers to return to your website.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--END OF services-->

    <section
        class="container mt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center block-display-tab experience-body-with-pix-mobile"
        style="background: #1F3F95; border-radius: 20px 20px;">
        <div class="archwarejo-width-top">
            <img class="img-fluid image-width-tab p-5 archwarejo-image-fully-bottom image-padding-buttom"
                src="/customImages/effective communication.png" alt="Effective communication image">
        </div>
        <div
            class="archware-text-justify archware-content-text
                archwarejo-width-bottom middle-content-padding-right experience-body-mobile">
            <h2 class="text-white-header">Effective Communication</h2>
            <p class="text-white-paragraph">
            There is no greater breakdown in communicating with your audience than having a website 
            that is down, stuck or stale, and irrelevant.
            
            </p>
            <p class="text-white-paragraph">
            Our team uses the best technical practices with insights into customers’ changing realities 
            to deploy a responsive website that helps businesses grow. As part of our ethics, we consider web 
            maintenance an essential part of our toolbox to help you stay relevant and in touch with your target 
            audience.
            </p>
        </div>
    </section>

    <section class="my-3 py-3">
        <div class="container justify-content-center">
            <div class="row">
                <p class="text-label-mobile text-label-large-screen">
                    Get more out of your website today!
                </p>
                <a href="/contacts" class="py-3" style="text-align:center;">
                    <button class="small-mobile-long-button archware-button-default">
                        Contact Us
                    </button>
                </a>
            </div>
        </div>
    </section>


@endsection
