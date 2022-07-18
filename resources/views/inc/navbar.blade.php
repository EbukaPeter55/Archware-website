<?php
    use \App\Http\Controllers\HelperFunctionsController;
?>

<div class="container-fluid navbar-dark" style="background: #ffffff; color: black;">

    <header class="blog-header py-1">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-2 pt-1">
                <a class="navbar-brand link-archware text-dark" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Archware') }} -->
                    <img src="{{ asset('customImages/archwareIcon.png') }}">
                </a>
            </div>
            <div class="col-8">
                {{--
                    <a class="blog-header-logo link-archware nav-link text-dark" id="post_content_nav" href="#">POST</a>

                    <input type="text" id="search" name="search" placeholder="Search for contents"
                        class="form-control form-control-md @error('password') border border-danger @enderror" style="background: white;"/>
                    <div id="search_result" class="col-md-8" style="position: absolute; z-index:1;"></div>

                    <button type="button" class="btn btn-outline-archware" id="show_add_contents"
                            data-bs-toggle="modal" data-bs-target="#content">
                        <i style="font-size:15px">✍🏽</i> Content</button>
                    @include('content.add-content.content')
                --}}
                <div class="TopHeader">
                    <div class="InputBox">
                        <input type="search" placeholder="Search archwareLog" id="SearchInput">
                        <div class="SearchIcon">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                        <ul class="SearchResult" id="SearchResult"></ul>
                    </div>
                </div>
            </div>

            <div class="col-2 d-flex justify-content-end align-items-center">
                @auth
                    <li class="navbar-nav nav-item dropdown">
                        <a href="#" id="UserNameDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @if (Storage::exists("public/profile/$logged_in_user->username/profile_location/$logged_in_user->profile_location"))
                                {{-- <img src="/storage/profile/{{Auth::user()->username}}/profile_location/{{Auth::user()->profile_location}}"
                                        alt="{{ Auth::user()->username }} - archwareLog" class="user__photo"
                                        style="border-radius: 50%; height: 1.5rem; width: 1.5rem; margin-right: 0.2rem"> --}}
                                <div class="container" style="position: relative">
                                    <img src="/storage/profile/{{Auth::user()->username}}/profile_location/{{Auth::user()->profile_location}}"
                                            alt="{{ Auth::user()->username }} - archwareLog" class="user__photo"
                                            style="border-radius: 50%; height: 1.5rem; width: 1.5rem; margin-right: 0.2rem">
                                    @if (Auth::user()->unreadNotifications->count())
                                        <span class="badge" style="background:#3d1540; position:absolute;
                                                top: -2px; left: 36px; font-size:10px; border-radius: 50%">
                                            {{ Auth::user()->unreadNotifications->count() <=9  ? Auth::user()->unreadNotifications->count() : '9+' }}
                                        </span>
                                    @endif
                                </div>
                            @else
                                @if (isset(Auth::user()->profile_pix) && !empty(Auth::user()->profile_pix))
                                    <div class="container" style="position: relative">
                                        <img src="{{ Auth::user()->profile_pix }}"
                                            alt="{{ Auth::user()->username }} - archwareLog" class="user__photo"
                                            style="border-radius: 50%; height: 1.5rem; width: 1.5rem; margin-right: 0.2rem">
                                        @if (Auth::user()->unreadNotifications->count())
                                            <span class="badge" style="background:#3d1540; position:absolute;
                                                    top: -2px; left: 36px; font-size:10px; border-radius: 50%">
                                                {{ Auth::user()->unreadNotifications->count() <=9  ? Auth::user()->unreadNotifications->count() : '9+' }}
                                            </span>
                                        @endif
                                    </div>
                                @else
                                    <div class="container" style="position: relative">
                                        <img src="{{ asset('images/default_user picture icon.png') }}"
                                            alt="archwareLog default profile pix" class="user__photo"
                                            style="border-radius: 50%; height: 1.5rem; width: 1.5rem; margin-right: 0.2rem">
                                        @if (Auth::user()->unreadNotifications->count())
                                            <span class="badge" style="background:#3d1540; position:absolute;
                                                    top: -2px; left: 36px; font-size:10px; border-radius: 50%">
                                                {{ Auth::user()->unreadNotifications->count() <=9  ? Auth::user()->unreadNotifications->count() : '9+' }}
                                            </span>
                                        @endif
                                    </div>
                                @endif
                            @endif
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="UserNameDropdown">
                            <li>
                                <a class="dropdown-item" href="">
                                    @if (Storage::exists("public/profile/$logged_in_user->username/profile_location/$logged_in_user->profile_location"))
                                        <img src="/storage/profile/{{Auth::user()->username}}/profile_location/{{Auth::user()->profile_location}}"
                                                alt="{{ Auth::user()->username }} - archwareLog" class="user__photo"
                                                style="border-radius: 50%; height: 1.5rem; width: 1.5rem; margin-right: 0.2rem">
                                    @else
                                        @if (isset(Auth::user()->profile_pix) && !empty(Auth::user()->profile_pix))
                                            <img src="{{ Auth::user()->profile_pix }}"
                                                alt="{{ Auth::user()->username }} - archwareLog" class="user__photo"
                                                style="border-radius: 50%; height: 1.5rem; width: 1.5rem; margin-right: 0.2rem">
                                        @else
                                            <img src="{{ asset('images/default_user picture icon.png') }}"
                                                alt="archwareLog default profile pix" class="user__photo"
                                                style="border-radius: 50%; height: 1.5rem; width: 1.5rem; margin-right: 0.2rem">
                                        @endif
                                    @endif
                                    {{ HelperFunctionsController::text_resize(auth()->user()->username, 18,'') }}
                                </a>
                            </li>
                            @if (Auth::user()->unreadNotifications->count())
                                <li>
                                    <a class="dropdown-item" href=""><i class="fa fa-solid fa-bell"></i>
                                        {{ Auth::user()->unreadNotifications->count() <=9  ? Auth::user()->unreadNotifications->count() : '9+' }} Notification
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a class="dropdown-item" href=""><i class="fa fa-solid fa-bell"></i> 0 Notification</a>
                                </li>
                            @endif
                            <li>
                                <a class="dropdown-item" href=""><i class="fa fa-solid fa-door-open"></i> Logout</a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href=""><i class="fa fa-solid fa-book"></i> About archwareLog</a>
                            </li>
                        </ul>
                    </li>
                @endauth

                @guest
                    <li class="navbar-nav nav-item dropdown">
                        <a href="#" id="LoginDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- <a class="link-archware text-dark nav-link dropdown-toggle" href="" id="LoginDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> -->
                            <!-- My Account -->
                            <img src="{{ asset('images/default_user picture icon.png') }}"
                                    alt="archwareLog default profile pix" class="user__photo"
                                    style="border-radius: 50%; height: 1.5rem; width: 1.5rem; margin-right: 0.2rem">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="LoginDropdown">
                            <li>
                                <a class="dropdown-item" href="">Login</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="">Register</a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href=""><i class="fa fa-solid fa-book"></i> About archwareLog</a>
                            </li>
                        </ul>
                    </li>

                @endguest

            </div>
        </div>
    </header>

</div>

{{-- <div class="container">

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav justify-content-between">
            <a class="btn btn-sm btn-outline-archware p-1" href="#">World</a>
            <a class="btn btn-sm btn-outline-archware p-1" href="#">U.S.</a>
            <a class="btn btn-sm btn-outline-archware p-1" href="#">Technology</a>
            <a class="btn btn-sm btn-outline-archware p-1" href="#">Design</a>
            <a class="btn btn-sm btn-outline-archware p-1" href="#">Culture</a>
            <a class="btn btn-sm btn-outline-archware p-1" href="#">Business</a>
            <a class="btn btn-sm btn-outline-archware p-1" href="#">Politics</a>
            <a class="btn btn-sm btn-outline-archware p-1" href="#">Opinion</a>
            <a class="btn btn-sm btn-outline-archware p-1" href="#">Science</a>
            <a class="btn btn-sm btn-outline-archware p-1" href="#">Health</a>
            <a class="btn btn-sm btn-outline-archware p-1" href="#">Style</a>
            <a class="btn btn-sm btn-outline-archware p-1" href="#">Travel</a>
        </nav>
    </div>

</div> --}}
