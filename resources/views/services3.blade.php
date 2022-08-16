@extends('layouts.app')

@section('description',
'Archware - Our agile approach to problem-solving and strategic planning helps you achieve
better results for your business.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')
<div>
    <section class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Let's Translate Your Ideas To Mobile Apps</h1>
                <p>We make sure that your idea is translated
                    into a beautifully developed, user-friendly, and mobile solution across all modern platforms and devices.</p>

            </div>
            <div class="col-md-6">
                <img src="{{ asset('customImages/Rectangle 6512.svg') }}">
            </div>
        </div>
    </section>
</div>



@endsection