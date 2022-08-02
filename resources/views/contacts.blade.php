@extends('layouts.app')

@section('description',
'Archware - Our agile approach to problem-solving and strategic planning helps you achieve
better results for your business.',)
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')
<section>
<h1 class="row justify-content-center" style="font-weight: 700;font-size: 35px;letter-spacing: -0.02222em;color: #040856;">Contact Us</h1>
<div class="row justify-content-center pt-3">
                <p   style="width: 72px;height: 5px;justify-content: center;background: #A6CE39;border-radius: 9000px;"></p>
            </div>
</section>
<section class="container card mt-5">

    <div class="row justify-content-center">
        <div class="col-md-7 pt-5 px-3"> 
            <form>
                <div class="row">
                    <div class="col">
                        <label style="font-weight: 500;font-size: 12px;color: #040856">First Name</label>
                        <input class="" type="text" style="padding: 10px;opacity:70%;" placeholder="">
                        <p>
                    </div>
                    <div class="col">
                        <label style="font-weight: 500;font-size: 12px;color: #040856">Last Name</label>
                        <input class="" type="text" style="padding: 10px;opacity:70%;" placeholder="">
                        <p>
                    </div>
                </div>
                <div>
                    <label style="font-weight: 500;font-size: 12px;color: #040856">Email address</label>
                    <input class="section6-form4" style="padding: 10px;opacity:70%;" type="email" placeholder="hello@dummie.com">
                    <p>
                </div>
                <div>
                    <label style="font-weight: 500;font-size: 12px;color: #040856">Service you are interested in</label>
                    <input class="section6-form4" style="padding: 10px;opacity:70%;" type="email" placeholder="e.g. Web Development">
                    <p>
                </div>
                <div>
                    <label style="font-weight: 500;font-size: 12px;color: #040856">What can we help you with? </label>
                    <input class="section6-form6" style="height: 150px;padding: 10px;opacity:70%;" type="text" placeholder="Your Message...">

                </div>
                <div class="text-end pt-3">
                    <button type="submit" class="my-4" style=" width: 155px;height: 40px;background: #A6CE39;border: none;
                        box-shadow: 0px 4px 7px -1px rgba(0, 0, 0, 0.11), 0px 2px 4px -1px rgba(0, 0, 0, 0.07);
                        border-radius: 8px;font-weight: 500;font-size: 12px;line-height: 12px;align-items: right;
                        text-align: center; color: #ffffff;">Submit</button>
                </div>
            </form>
        </div>

        <div class="col-md-5" style=" background-image: url(../customImages/Backgroundcard.svg);  background-repeat: no-repeat; background-size: 100%; height:inherit">
            <div class="sec6itext">
                <div class="mx-5 mt-5 pt-5">
                    <h1 class="mt-5 pt-4" style="font-weight: 700;font-size: 30px;color: #FFFFFF;">Contact Information<h1>
                            <p class="pt-3" style="font-weight: 400;font-size: 16px;color: #FFFFFF;">Fill up the form and our Team will get back to you within 24
                                hours.</p>
                </div>
                <div class="pt-3 mx-5">
                    <p><img class=info_arch1 src="{{ asset('customImages/Phone Icon.svg') }}" alt="">
                        <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">+234709154822</a>
                    </p>
                    <p class="pt-3"><img id=info_arch2 src="{{ asset('customImages/Envelope Icon.svg') }}" alt="">
                        <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">info@archwareltd.com</a>
                    </p>
                    <p class="pt-3"><img id=info_arch3 src="{{ asset('customImages/Map Marker Icon.svg') }}" alt="">
                        <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">3, Ayangboye Street, Anthony Village, Lagos</a>
                    </p>
                    <p>
                    <p class="pt-4"><img class="px-2" src="{{ asset('customImages/White.svg') }}">
                        <img class="px-2" src="{{ asset('customImages/White (1).svg') }}">
                        <img class="px-2" src="{{ asset('customImages/White (2).svg') }}">
                        <img class="px-2" src="{{ asset('customImages/White (3).svg') }}">
                    <p class="mx-5 pt-5 mt-5 px-5">.</p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript"></script>

@endsection