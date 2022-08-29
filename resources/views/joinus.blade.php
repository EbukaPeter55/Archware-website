@extends('layouts.app')

@section('description',
'Archware - Africa\'s Leading Software Development Company
Software development company helping businesses and individuals take advantage of the benefits of the global technology landscape.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')

<section class="pt-5">
    <div class="py-5 img-fluid" style="background-image: url(../customImages/Group6700.png); background-repeat:no-repeat; background-size:cover;">
        <div class="container col-md-8 py-5">
            <p class="px-5" style="font-style: normal;font-weight: 700;font-size: 40px;line-height: 116%;text-align: center;color: #FFFFFF;">Joining us means growth. It also means great responsibility.</p>
            <p style="font-weight: 400;font-size: 18px;line-height: 155%;text-align: center;color: #FFFFFF;">
                We are constantly on the look out for distinctive
                individuals with exceptional skill sets who are passionate about changing Africa through tech-based innovations and dedicated to becoming a part of the new African story.
            </p>
        </div>
    </div>
</section>

<section class="container pt-5">
    <div class=" d-flex flex-row flex-wrap pt-5">
        <div class="col-md-5">
            <img class="join-us-img img-fluid pt-4" src="/customImages/Rectangle 682.png">

        </div>
        <div class="col-md-7 px-3 pt-3" style="font-weight: 400;font-size: 18px;line-height: 172%;text-align: justify;color: rgba(4, 8, 86, 0.7);">
            We operate a culture that encourages everyone to think creatively and offer innovations that can move our Group
            forward and, by extension, our nation and continent. Collectively, we are responsible for living our corporate values
            and ethics, being the bedrock of our organisation.<br>
            With impeccable employee development programs to support you through life's transitions, we care for our own like
            family. We also consider our employees as investments in a better society. We respect our ties with them and keep
            in touch as they traverse through life.
        </div>
    </div>
</section>
<section class="container pt-5">
    <div class="d-flex flex-wrap-reverse pt-5">
        <div class="col-md-7 pt-3" style="font-weight: 400;font-size: 18px;line-height: 172%;text-align: justify;color: rgba(4, 8, 86, 0.7);">
            All of our employees receive specialized training, coaching, and mentorship that is created with their interest in mind and in accordance
            with their peculiar individual needs. Our strong succession plan and career progression framework guarantees growth opportunities with clearly
            defined eligibility criteria, as well as a solid foundation to take on new responsibilities.<br>
            We value our employees' overall well-being, and our compensation philosophy is thorough and well-rounded, incorporating our core values.
            Our base benefits package is extremely competitive and includes full family health plans, life insurance, paid time off, competitive salaries,
            and more.
        </div>
        <div class="col-md-5 pt-4 px-2">
            <img class="img-fluid" src="/customImages/Rectangle 684.png" style="float:right;">

        </div>

    </div>
</section>

<section class="container-fluid">
    <div class="basic-skills mt-5" style="height: auto;margin-left: 9em;margin-right:auto;
                background: linear-gradient(90.18deg, #A6CE39 -27.2%, #0A655F 248.97%);border-radius:21px 0px 0px 21px
                ">
        <div class="d-flex flex-row flex-wrap align-items-center">
            <div class="col-md-4">
                <img class="img-fluid" src="{{ asset('customImages/Rectangle 683.png') }}" alt="" style="width:451px; align-items:center">
            </div>
            <div class=" col-md-8 pr-5">
                <div class="container-fluid">
                    <div class="basic-skill-sect mx-5">
                    <img src="{{ asset('customImages/quote.png') }}" style="position:absolute; margin-top:0px">
                        <h1 class="basic-skill-text mt-3 pt-3 " style="font-style: normal;font-weight: 600;font-size: 23px;line-height: 164%;text-align: justify;color: #FFFFFF;">
                            Basic Skill, Ability To Work Hard, Determination And Honesty Towards The Craft Are The Four Simple Things Needed To
                            Excel At Work. You Know The Rest Of It (Which Is Quite A Lot) Just Happen To Fall In Place. At Archware Group, we
                            provide you with an enabling environment to reach your maximum potential, surrounded by intelligent forward looking
                            people who share the same passion for making impact</h1>
                        <img src="{{ asset('customImages/quotation.png') }}" style="float:right;">
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<section class="mt-5 pt-5">
    <div class="container col-md-4 pt-5 px-3">
        <div>
            <p style="font-weight: 700;font-size: 40px;line-height: 60px;color: #040856;">Ready To Join Us?</p>
        </div>
        <div class="pt-2" style="width: 54px; height: 5px; background: #A6CE39; border-radius: 9000px;"></div>
        <form>
            <div class="pt-5">
                <input class="pt-3" required type="text" id="Firstname" style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA;" placeholder="Your Full Name">
            </div>

            <div class="pt-3">
                <input class="section6-form4" required id="Email" style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" type="email" placeholder="Your Email Address">
            </div>

            <div class="pt-3">
                <input class="section6-form4" required id="Services" style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" type="text" placeholder="Interested Position">
                <p>
            </div>
            <div class="pt-3">
                <label style="font-weight: 400;font-size: 16px;line-height: 155%;color: #A6A0A0;">Why should we choose you? </label>

                <div class="pt-3">
                    <textarea class="form-control" class="" required id="Message" placeholder="" style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" rows="5"></textarea>
                </div>
                <div class="d-flex flex-row flex-wrap">
                    <div class="col-md-4" style="font-weight: 600;font-size: 17px;line-height: 72px;color: #0D2158;">Upload Your CV</div>
                    <div class="col-md-4 TopHeader mx-2">
                        <div class="InputBox">
                            <input type="file" placeholder="" id="SearchInput" style=" position:absolute;width:94px; height:24px; opacity:0; margin:0rem 5rem">
                            <div style="margin-left: 4rem;">
                            <p class="btn btn-outline-light my-1 mx-3" style="padding: 0px 9px 3px 8px;font-weight: 500;font-size: 11px;align-items:center;text-align:center; line-height: 26px;background: #1F3F95;border-radius: 6px; width: 83px;height: 30px;">
                                Choose File
                            </p></div>

                            <ul class="SearchResult" id="SearchResult"></ul>
                        </div>
                    </div>

                </div>
            </div>


        </form>
        <div class="container mt-5 pt-5">
            <a class="py-3" style="text-align:center;">
                <button class="small-mobile-long-button" style="display: flex;justify-content: center;align-items: center;padding: 14px 16px;gap: 4px;width: 440px;height: 52px;background: #1F3F95;border-radius: 8px; color:#FFFFFF">
                    Submit
                </button>
            </a>
        </div>
    </div>
</section>
@endsection