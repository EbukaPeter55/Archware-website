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

    <div style=" background-image: url(../customImages/Group68.png)" class="mt-5">
        <section
            class="container mt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center block-display-tab section-top">
            <div class="archware-text-justify archware-content-text archwarejo-width-bottom-head p-2">
                <h2 style="font-weight: 700; font-size: 50px; line-height: 58px; color: #040856;" class="text-title-mobile">
                    Web Maintenance
                </h2>
                <p class="pt-3 text-body-mobile"
                    style="font-style: normal;font-weight: 400;font-size: 18px;line-height: 155%;color: rgba(4, 8, 86, 0.7);">
                    Optimal customer experience on your website without downtime.
                </p>
            </div>
            <div class="archwarejo-width-top-head">
                <img class="img-fluid image-width-tab image-min-height-mobile" src="/customImages/web maintenance right.png">
            </div>
        </section>
    </div>


    <section class="container mt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center block-display-tab">
        <div class="archwarejo-width-top">
            <img class="img-fluid image-width-tab" src="/customImages/web maintenance left.png">
        </div>
        <div class="archware-text-justify archware-content-text archwarejo-width-bottom padding-left-desktop">
            <p>
                Having a responsive website is a great deal of work that needs to be done to successfully scale your
                business. The truth is, a website is never really complete due to the ever-evolving demands and changes
                happening in the digital world. This is why it is important to periodically make plans to update the
                website with fresh content to engage your growing audience. Without frequent maintenance, your website
                will start looking stale and may develop errors due to technical environment changes.
                We add value to your business by making sure you're not missing out on traffic and revenue growth as a
                result of a sluggish website or website downtime. Our value in performance extends to our web
                maintenance plan with our web maintenance team ensuring that your website is up to date regarding
                design, content, regular backups, and protection against malicious login attempts, spam, bugs, and
                malware.
            </p>
        </div>
    </section>

    <section class="my-3 py-3">
        <div class="container justify-content-center">
            <div class="row text-center justify-content-center">
                <a class="py-3" style="text-align:center;">
                    <button class="small-mobile-long-button"
                        style="background: #1F3F95;border-radius: 4px;border:none; width:521px; height: 56px; color:#FFFFFF">
                        Let's Help Maintain Your Website
                    </button>
                </a>
                <h1 class="fw-bold archware_h1 text-title-mobile"
                    style="font-weight: 700;  font-size: 46px;
                        line-height: 46.4px; color: #040856;">
                    Why do you need web maintenance?
                </h1>
                <hr class="container archware_header_underline text-title-mobile" />
            </div>
        </div>
    </section>


    <div class="container mt-5">
        <div class="p-5 row mobile-padding">

            <div class="col-md-4 p-3 inner-padding">
                <div class="card card-height-mobile"
                    style="border-radius: 20px; box-shadow: 0 5px 10px #e6e6e6; height: 37em;">
                    <img src="/customImages/site security.png" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-wrap p-4">
                        <div class="pt-1 text-title-mobile"
                            style="font-weight: 700; font-size:26px; line-height: 40.3px; color: #0D2158; text-align: center;">
                            Site Security
                        </div>
                        <p class="card-text archware-text-dull"
                            style="color: #0d2158; font-size: 15px; text-align: center; margin-bottom: auto;">
                            Your website's scripts, security, and platforms must be functional to make it a success. Regular
                            updates are crucial to patch up or improve the possible vulnerabilities and security lapses.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-3 inner-padding">
                <div class="card card-height-mobile"
                    style="border-radius: 20px; box-shadow: 0 5px 10px #e6e6e6; height: 37em;">
                    <img src="/customImages/seo.png" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-wrap p-4">
                        <div class="pt-1 text-title-mobile"
                            style="font-weight: 700; font-size:26px; line-height: 40.3px; color: #0D2158; text-align: center;">
                            SEO
                        </div>
                        <p class="card-text archware-text-dull"
                            style="color: #0d2158; font-size: 15px; text-align: center; margin-bottom: auto;">
                            The algorithm that supports SEO is rapidly evolving with the inclusion of new techniques and
                            tools. Maintaining your website will help it stay on top of the result page on search engines
                            and increase visibility to relevant customers.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-3 inner-padding">
                <div class="card card-height-mobile"
                    style="border-radius: 20px; box-shadow: 0 5px 10px #e6e6e6; height: 37em;">
                    <img src="/customImages/website speed.png" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-wrap p-4">
                        <div class="pt-1 text-title-mobile"
                            style="font-weight: 700; font-size:26px; line-height: 40.3px; color: #0D2158; text-align: center;">
                            Website Speed
                        </div>
                        <p class="card-text archware-text-dull"
                            style="color: #0d2158; font-size: 15px; text-align: center; margin-bottom: auto;">
                            Research has shown that customers are attuned to fast and easily accessible websites. Regularly
                            improving the speed of your website yields happy customers, increases click-through rate (CTR),
                            and encourages customers to return to your website.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section
        class="container mt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center block-display-tab experience-body-with-pix-mobile"
        style="background: #1F3F95; border-radius: 20px 20px;">
        <div class="archwarejo-width-top">
            <img class="img-fluid image-width-tab p-5 archwarejo-image-fully-bottom image-padding-buttom"
                src="/customImages/effective communication.png">
        </div>
        <div class="archware-text-justify archware-content-text
                archwarejo-width-bottom middle-content-padding-right experience-body-mobile">
            <h2 class="text-white-header">Effective Communication</h2>
            <p class="text-white-paragraph">
                There is no greater breakdown in communicating with your audience
                than having a website that is down, stuck or stale,
                and irrelevant.
            </p>
            <p class="text-white-paragraph">
                Our team uses the best technical practices with insights into
                customers' changing realities to deploy a responsive website
                that helps businesses grow. As part of our ethics, we
                consider web maintenance an essential part of our toolbox
                to help you stay relevant and in touch with your target
                audience.
            </p>
        </div>
    </section>

    <section class="my-5 py-5">
        <div class="container justify-content-center">
            <div class="row">
                <p class="text-label-mobile" style="font-weight: 600;font-size: 30px;line-height: 72px;color: #0D2158; text-align:center">
                    Get more out of your website today!
                </p>
                <a class="py-3" style="text-align:center;">
                    <button class="small-mobile-long-button"
                        style="background: #1F3F95;border-radius: 4px;border:none; width:312px; height: 56px; color:#FFFFFF">
                        Contact Us
                    </button>
                </a>
            </div>
        </div>
    </section>


@endsection
