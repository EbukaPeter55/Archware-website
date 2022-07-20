@extends('layouts.app')

@section('description', 'Archware - Our agile approach to problem-solving and strategic planning helps you achieve better results for your business.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/archware.png') }}@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- <div class="col-md-12"> -->
            <div class="card">

                @include('errors.error_message')

                <div class="card-body" style="background-color: #078164;">
                    <div class="tab-content" id="myTabContent">

                        {{-- @include('content.main_content') --}}

                        <h1>Content will be here</h1>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">



</script>

@endsection
