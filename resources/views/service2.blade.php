@extends('layouts.app')

@section('description',
    'Archware - Our agile approach to problem-solving and strategic planning helps you achieve
    better results for your business.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')

    <section class="container-fluid">

        <section class="container-fluid service-section">
            <div class="d-flex flex-row align-items-center flex-wrap justify-items-center service-wrapper">
                <div class="service-section-right">
                    <h2 style="font-weight: 700; font-size: 50px; line-height: 58px">Website Design<br>and development</h2>
                    <p>
                        Over the years we have developed responsive mobile apps across
                        industries such as Fin-tech, Banking, Medical science, and many more.
                        Our team of experts is well skilled in different mobile app development
                        tools such as Atom, Git hub, Ninox, MobiLoud, React Native, Xcode, Ionic, Android Studio, etc. With
                        core competence in mobile app design and development, we have developed world-class Andriod
                    </p>
                    <button type='button'>Read More</button>
                </div>
                <img class="img-fluid"
                    src="/customImages/side.png" />
            </div>
        </section>

    </section>

@endsection
