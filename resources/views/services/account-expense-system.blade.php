@extends('layouts.app')

@section('description',
'Archware - Africa\'s Leading Software Development Company Software development
company helping businesses and individuals take advantage of the benefits of
the global technology landscape.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')


<div style=" background-image: url(../customImages/Group6700.png)" class="mt-5">
    <section class="container mt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center block-display-tab section-top">
        <div class="archware-text-justify archware-content-text archwarejo-width-bottom-head pt-2">
            <h2 style="font-weight: 700; font-size: 50px; line-height: 58px; color: #ffffff;" class="text-title-mobile">
                Account & Expenses Management System
            </h2>
            <p class="pt-3 text-body-mobile" style="font-style: normal;font-weight: 400;font-size: 18px;line-height: 155%;color:#ffffff;">
                Enjoy a One-stop Cost Management System

            </p>
        </div>
        <div class="archwarejo-width-top-head">
            <img class="img-fluid image-width-tab image-min-height-mobile float-to-end" style=" display:flex;align-items:right;" src="/customImages/account expense right.png">
        </div>
    </section>
</div>

<section class="container mt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center block-display-tab">
    <div class="archwarejo-width-top">
        <img class="img-fluid image-width-tab" src="/customImages/account expence down.png">
    </div>
    <div class="archware-text-justify archware-content-text archwarejo-width-bottom padding-left-desktop">
        <p>
            Capturing your company’s expenses in one location is a technique you can deploy to ensure the money set
            aside for your business is well spent. It is becoming a trend for top-tier businesses to utilize cost
            management software to streamline their expenditure reimbursement and reconciliation process.</p>

        <p> With our automated expense management software, tracking your operational spending is made easy.
            We automate the gathering and reconciliation of your expenses as well as the capturing of audit trails of
            all transactions in one location, saving you time if you require further information about a certain purchase.
        </p>
        <p>The accuracy and extensive data which our system generates ensure that all expenses are accounted for and
            accurate reimbursement claims are made to prevent fraud. We adapt to the changing market with ease to give you
            the best account and expense management system experience.
        </p>
        <p>With the aid of our software, you can quickly modify your company’s regulations and change the direction of your 
            operational spending thus allowing you to respond to shifting market and economic situations.
            We have developed a strong tracking, monitoring, and reporting system along with practical tools &amp; workflows 
            to speed up your field operations app features.
        </p>
    </div>
</section>


<section class="my-3 py-3">
    <div class="container justify-content-center">
        <div class="row">
            <p class="text-label-mobile" style="font-weight: 600;font-size: 30px;line-height: 72px;color: #0D2158; text-align:center">
                Ready To Deploy Our Account & Expenses Management System?
            </p>
            <a href="/contacts" class="py-3" style="text-align:center;">
                <button class="small-mobile-long-button archware-button-default">
                    Let's Discuss
                </button>
            </a>
        </div>
    </div>
</section>

<section class="container mt-3 pt-5">
        <div class=" d-flex flex-row flex-wrap justify-content-center">

            <div class=" card col-lg-3 mx-3 native remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0;">
                <img src="/customImages/Rectangle 661 (12).png" alt="" style="object-fit:cover;">
                <div class="archware-card-padding-left px-2 py-4">
                    <h2 class="archware-card-title text-align-left-body" style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                    Expenses Management
                    </h2>
                    <p class="py-2 archware-card-paragraph-padding text-align-left-body"
                        style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        Our expenditure management experience can assist you in scaling and automating
                        spending and data gathering, providing greater financial insights and improved forecasts, 
                        since operations expenses are among the most challenging to control.
                    </p>
                </div>
            </div>
            <div class="card col-lg-3 mx-3 native remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0 ;">
                <img src="/customImages/Rectangle 661 (15).png" alt="">
                <div class="archware-card-padding-left px-2 py-4 ">
                    <h2 class="archware-card-title text-align-left-body" style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                    Mobile Expense<br> System App
                    </h2>
                    <p class="py-2 archware-card-paragraph-padding text-align-left-body"
                        style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        We can create mobile apps that can help you submit and approve staff costs in real time. We develop the app to help 
                        you record receipts by taking a picture as expenses are incurred, allowing processing to start right away. This way, 
                        you can remain on top of staff demands.
                    </p>
                </div>
            </div>
            <div class="card col-lg-3 mx-3 native remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0 ;">
                <img src="/customImages/Rectangle 661 (14).png" alt="">
                <div class="archware-card-padding-left px-2 py-4">
                    <h2 class="archware-card-title text-align-left-body" style="font-weight: 700;font-size: 26px;line-height: 155%;text-align: center;color: #0D2158;">
                    Analytics & Reporting for Expenses
                    </h2>
                    <p class="py-2 archware-card-paragraph-padding text-align-left-body"
                        style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: center;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                        We do not only let you track your account and expenses,but we also make reporting easy for you. 
                        Our software gives you accurate reports for real-time analysis, and
                        operational indicators and this helps to reduce the rate of fraud in an organisation.
                    </p>
                </div>
            </div>
        </div>
    </section>


<section class="container mt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center block-display-tab experience-body-with-pix-mobile" style="background: #1F3F95; border-radius: 20px 20px;">
    <div class="archwarejo-width-top">
        <img class="img-fluid image-width-tab p-5 archwarejo-image-fully-bottom image-padding-buttom" src="/customImages/Rectangle (3).png">
    </div>
    <div class="archware-text-justify archware-content-text archwarejo-width-bottom middle-content-padding-right experience-body-mobile">
        <h2 class="text-white-header">Why You Need Us</h2>
        <p class="text-white-paragraph">
        We develop thorough expense management systems that can integrate with your
        current corporate infrastructure. Also, our management software permits you as a manager to design rules that 
        specify and set staff spending limitations utilizing a clear, unambiguous control strategy. This way, you can 
        easily regulate transaction limits and ensure the smooth running of your business.
        </p>
    </div>
</section>

<section class="my-3 py-3">
    <div class="container justify-content-center">
        <div class="row">
            <p class="text-label-mobile text-label-large-screen">
                Get Started With Account & Expenses Management System For Your Business
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