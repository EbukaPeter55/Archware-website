@extends('layouts.app')

@section('description',
'Archware - Africa\'s Leading Software Development Company
Software development company helping businesses and individuals take advantage of the benefits of the global technology landscape.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')


<div style=" background-image: url(../customImages/Group6700.png); background-repeat:repeat-x; background-size:cover" class="mt-5">
    <section class="container mt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center block-display-tab section-top">
        <div class="archware-content-text archwarejo-width-bottom-head pt-2">
            <h2 style="font-weight: 700; font-size: 50px; line-height: 58px; color: #ffffff; margin:auto" class="text-title-mobile">
                Food Bank
            </h2>
            <p class="pt-3 text-body-mobile archware-text-justify" style="font-style: normal;font-weight: 400;font-size: 18px;line-height: 155%;color:#ffffff;">
                Connect for a bigger impact
            </p>
        </div>
        <div class="archwarejo-width-top-head">
            <img class="img-fluid image-width-tab image-min-height-mobile" src="/customImages/Rectangle 651k.png">
        </div>
    </section>
</div>




<section class="container mt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center block-display-tab">
    <div class="archwarejo-width-top">
        <img class="img-fluid image-width-tab" src="/customImages/Group 74 (1).png">
    </div>
    <div class="archware-text-justify archware-content-text archwarejo-width-bottom padding-left-desktop">
        <p>Maslow, in his hierarchy of needs, categorizes the need for food as the most basic physiological need critical
            or crucial to human existence. Suffice it to say that a hungry man or woman, for instance, cannot think of
            entrepreneurship or education, or national development until that basic need is met.</p>

           <p> All over the world, an estimated 821 million people struggle with habitual hunger. That’s 44 million further
            than the expected projection despite the relinquishment of the sustainable development goals to end hunger by
            2030. Multidimensional poverty and hunger are intertwined. Multidimensional poverty is significant in all the
            major regions across Africa.</p>

            <p>This calls for rapid action by food bank organisations across the world to intensify efforts in pulling Africa
            out of multidimensional poverty and hunger. We strongly believe Food is essential to human existence, which is
            why we are determined to create tech-based platforms that will allow food to get to those that need it.</p>

            <p>Our tech-based food bank seeks to alleviate hunger and combat aspects of
            multidimensional poverty by delivering food savings, partnerships, loans, and markets.</p>

    </div>
</section>

<section class="my-5 py-5">
    <div class="container justify-content-center">
        <div class="row">

            <a href="/contacts" class="py-3" style="text-align:center;">
                <button class="small-mobile-long-button archware-button-default" style="background: #1F3F95;border-radius: 4px;border:none; width:429px; height: 56px; color:#FFFFFF">
                    Become a partner with us today!
                </button>
            </a>
        </div>
    </div>
</section>

<section class="container">
    <div class="row row-reverse">
        <div class="col-lg-6 mt-4">
            <h2 style="font-weight: 700;font-size: 35px;line-height: 42px;color: #040856;">
                We Believe Every Home Should Have Basic Three Square Meals</h2>
            <p class="pt-2 " style="font-weight: 400;font-size: 16px;line-height: 172%;text-align: justify;color: rgba(4, 8, 86, 0.7);">
                That’s why, at Archware Food Bank, our initiatives are designed to cater for the needs of your home,
                the broader food needs of the African communities and the planet – by working to provide billion-dollar investments
                in sustainable storage systems to reduce produce waste, rural infrastructure, transportation and Urban access to
                fresh food directly from farm and more.
            </p>
        </div>
        <div class="col-lg-6 d-flex">
            <img class="img-fluid" src="/customImages/Group 76.png">

        </div>
    </div>
</section>

<section class="container justify-content-center">
    <div>
        <h2 class="" style="font-weight: 600;font-size: 30px;line-height: 72px;text-align: center;color: #0D2158;">
            OUR PROGRAMS
        </h2>
        <p style="font-weight: 400;font-size: 18px;line-height: 172%;text-align: center;color: rgba(4, 8, 86, 0.7);">
            Causes That Need Your Help
        </p>
        <div class="row justify-content-center pt-3">
            <p style="width: 72px;height: 5px;justify-content: center;background: #A6CE39;border-radius: 9000px;"></p>
        </div>
    </div>


    <div class="d-flex flex-wrap mt-5">
        <div class="image-foodbank col-lg-3">
            <img src="/customImages/Rectangle 688 (1).png" alt="" style="align-items:center ;">
        </div>
        <div class="col-lg-9">
            <h2 class="pt-3" style="font-weight: 700;font-size: 26px;line-height: 155%;color: #0D2158;">Food Partnership</h2>
            <p style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: justify;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                Archware food bank is committed to fighting multi-level poverty, malnutrition, and hunger, through targeted programs
                that seek to improve the accessibility of food in underserved communities in Africa. As a dynamic partnership organization, we partner with individuals, religious organizations, corporate entities, and countries across Africa to open food banks across the continent.
                Working with these unique stakeholders helps us take on some of the pressing regional challenges of hunger and poverty.</p>
        </div>
    </div>

    <div class="d-flex flex-wrap-reverse mt-5">
        <div class="col-lg-9">
            <h2 class="pt-3" style="font-weight: 700;font-size: 26px;line-height: 155%;color: #0D2158;">Food Loans</h2>
            <p style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: justify;color: #0D2158;mix-blend-mode: normal;opacity: 0.6;">
                Part of our initiative is to source food loans to strengthen critical supply chains and food systems across Africa.
                This program guarantees loans of up to $40 million for qualified organisations and individuals to finance food systems
                projects, specifically for the start-up or expansion of activities in the middle of the food supply chain.</p>
        </div>

        <div class="image-foodbank col-lg-3 px-4">
            <img class="" src="/customImages/Rectangle 691.png" alt="" style="align-items:center ;">
        </div>
    </div>

    <div class="d-flex flex-wrap mt-5">
        <div class="image-foodbank col-lg-3">
            <img src="/customImages/Rectangle 690.png" alt="" style="align-items:center ;">
        </div>
        <div class="col-lg-9">
            <h2 class="pt-3" style="font-weight: 700;font-size: 26px;line-height: 155%;color: #0D2158;">Food Market</h2>
            <p style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: justify;color: #0D2158;mix-blend-mode: normal;opacity: 0.8;">
                Different research has proven that Africa can feed its region's fast-growing urban population if it can expand its
                farmer's access to more capital, electricity, a good transportation system, better technology, and irrigated land
                to grow high-value nutritious food. Our food banking network across Africa targets the immediate short and long-term
                needs of vulnerable communities in major regions across the continent.</p>
            <p style="font-weight: 400;font-size: 17px;line-height: 28px;text-align: justify;color: #0D2158;mix-blend-mode: normal;opacity: 0.8;">We are currently building a database of over 20,000 registered volunteers to help us with our work across Africa.
                Our work also focuses on organizing entrepreneurship training and job placement programs that help our beneficiaries
                become more self-reliant.</p>
        </div>
    </div>
</section>




<section class="container mt-5 pt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center block-display-tab experience-body-with-pix-mobile" style="background: #1F3F95; border-radius: 20px 20px;">

    <div class="archwarejo-width-top">
        <img class="img-fluid image-width-tab p-5 archwarejo-image-fully-bottom image-padding-buttom" src="/customImages/Rectangle (2).png">
    </div>
    <div class="archware-text-justify archware-content-text archwarejo-width-bottom middle-content-padding-right experience-body-mobile">
        <h2 class="tech-based-solution" style="font-weight: 700;font-size: 35px;line-height: 72px;color: #FFFFFF;">Tech-Based Food Solutions</h2>
        <p class="tech-based-solution2 px-3" style="font-weight: 400;font-size: 20px;line-height: 36px;text-align: justify;color: #FFFFFF;mix-blend-mode: normal;opacity: 0.6;">
            With the going global warming and constant mutating pandemic outbreaks, the need for healthy, convenient, minimally processed,
            and varied food products are increasingly on the rise. Our food innovation service is targeted at using robots, GPS technology,
            and Smartphone apps to improve food production processes. To assist farmers to maximize their capacity, we introduce Moisture
            and temperature sensors which help monitor the soil for farmers to make the best decisions on planting and watering.
            We also help with the use of aerial images to monitor the health of the crops from above to find areas of concern for
            a quick fix.
        </p>
    </div>

</section>
</div>
<section class="my-3 py-3">
    <div class="container justify-content-center">
        <div class="row">
            <p class="text-label-mobile text-label-large-screen">
                Ready To Be Part of a Global Food Initiative?
            </p>
            <a href="/contacts" class="py-3" style="text-align:center;">
                <button class="small-mobile-long-button archware-button-default">
                    Join Us
                </button>
            </a>
        </div>
    </div>
</section>



@endsection