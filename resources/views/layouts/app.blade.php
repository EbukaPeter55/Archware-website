<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta name="google-site-verification" content="QMYalbMERpysCPLNASiQrKU0nrVzvD4uhKrIRADWipA"/>
    <meta http-equiv="content-language" content="en">
    <meta name="author" content="Archware">
    <meta name="generator" content="Archware">
    <meta name="description" content="@yield('description')">
    <meta property="article:published_time" content="@yield('published_time')">
    <meta property="article:section" content="@yield('article:section')">
    <link rel="icon" href="{{ asset('customImages/archware.png') }}" type="image/x-icon">
    <meta property="article:tag" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')"/>
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:url" content="@yield('url')"/>
    <meta property="twitter:card" content="summary_large_image"/>
    <meta property="twitter:image:alt" content="@yield('title')"/>
    <meta property="og:type" content="website"/>
    <meta property="og:locale" content="en_GB"/>
    <meta property="og:image" content="@yield('image')"/>
    <meta property="og:site_name" content="Archware"/>


    <title>@yield('title', 'Archware')</title>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('customCSS/archware_style.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('customJS/jquery.js') }}"></script>

</head>
<body>
  <div id="app">
    @include('inc.navbar')

    <main class="py-1">
      <div class="container">
        @yield('content')
      </div>
    </main>


    @include('inc.footer')
  </div>

  @yield('scripts')
</body>
</html>

