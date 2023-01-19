<nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0" id="navMain" style="padding-top: 1.2rem">
    <div class="container col-md-11">
        <a class="navbar-brand colored-logo" href="/" style="margin-left: 7%;">
            <img src="{{ asset('customImages/Logo.svg') }}" alt="logo">
        </a>
        <a class="navbar-brand light-logo" href="/" style="margin-left: 7%;">
            <img src="{{ asset('customImages/Logo.svg') }}" alt="logo image">
        </a>
        <!-- HAMBURGER -->
        <button class="navbar-toggler hamburger-icon hamburger-desktop" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars "></i>
        </button>
        <button class="navbar-toggler hamburger-icon hamburger-mobile" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background: white;">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse nav-postion  navbar-collapse" id="navbarSupportedContent" style="margin-top: .5rem">
            <ul class="navbar-nav me-auto nav-links-a" style="margin-left: 16%;">
                <!-- Remember to change the margin-left back to 8% when we want to host our team -->
                <li class="nav-item px-3">
                    <a class="nav-link archware-nav-title" href="/">Home</a>
                </li>
                {{-- <div class="dropdown" style="margin-top: .1rem">
                    <li class="btn btn-white archware-nav-title nav-drop dropdown-toggle" data-bs-toggle="dropdown">
                        Our Services
                    </li>
                    <ul class="dropdown-menu dropdown-style">
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle dropdown-item" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="multilevelDropdownMenu1">
                                Software Development
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">
                                        Web Development
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="/website-design-and-development">
                                                Responsive Website Design and Development
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/website-redesign">
                                                Website Redesign
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/ecommerce-online-web-stores">
                                                E-commerce/Online Web Stores
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/web-maintenance">
                                                Web Maintenance
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="/mobile-app-development">
                                        Mobile App Development
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--<li><a class="dropdown-item" href="#">Archware Training Institute</a></li>-->
                <!-- <li><a class="dropdown-item" href="/project-management">Project Management System</a></li>
                        <li><a class="dropdown-item" href="/account-expense-system">Account & Expenses Management
                                System</a></li>
                        <li><a class="dropdown-item" href="/food-bank">Food Bank</a></li>
                        <li><a class="dropdown-item" href="/farm-management">Farm Management</a></li>
                    </ul>
                </div> --}}

                {{-- Dropdown --}}
                {{-- <div> --}}
                <div id="menu" class="u-list drop-wrapper e-drop-desktop" style="margin-top: .3rem;">
                    <li class="parent-nav l-list top-level-width"><a href="#">Our Services</a>
                        <ul class="child-nav u-list">
                            <li class="parent-nav l-list"><a href="#">Software development <span class="expand">»</span></a>
                                <ul class="child-nav u-list">
                                    <li class="parent-nav l-list top-level-width"><a href="#">Web development <span class="expand">»</span></a>
                                        <ul class="child-nav u-list top-level-width-long">
                                            <li class="l-list"><a href="/website-design-and-development"> Responsive Website Design and Development</a></li>
                                            <li class="l-list"><a href="/website-redesign"> Website Redesign</a></li>
                                            <li class="l-list"><a href="/ecommerce-online-web-stores"> E-commerce/Online Web Stores</a></li>
                                            <li class="l-list"><a href="/web-maintenance"> Web Maintenance</a></li>
                                        </ul></li>
                                    <li class="l-list"><a href="/mobile-app-development">Mobile development</a></li>
                                </ul></li>
                            <li class="l-list"><a href="#">Archware Training Institute</a></li>
                            <li class="l-list"><a href="/project-management">Project Management System</a></li>
                            <li class="l-list"><a href="/account-expense-system">Account & Expenses Management</a></li>
                            <li class="l-list"><a href="/food-bank">Food Bank</a></li>
                            <li class="l-list"><a href="/farm-management">Farm Management</a></li>

                        </ul></li>
                    </div>
                {{-- </div> --}}

                {{-- Dropdown mobile --}}
                <div id="menu" class="u-list drop-wrapper e-drop-mobile" style="margin-top: .3rem;">
                    <li class="parent-nav l-list top-level-width"><a href="#">Our Services</a>
                        <ul class="child-nav u-list">
                                <li class="l-list"><a href="/website-design-and-development"> Responsive web Development</a></li>
                                <li class="l-list"><a href="/website-redesign"> Website Redesign</a></li>
                                <li class="l-list"><a href="/web-maintenance"> Web Maintenance</a></li>
                                <li class="l-list"><a href="/ecommerce-online-web-stores"> E-commerce/Online Web Stores</a></li>
                                <li class="l-list"><a href="#">Archware Training Institute</a></li>
                                <li class="l-list"><a href="/project-management">Project Management System</a></li>
                                <li class="l-list"><a href="/account-expense-system">Account & Expenses Management</a></li>
                                <li class="l-list"><a href="/food-bank">Food Bank</a></li>
                                <li class="l-list"><a href="/farm-management">Farm Management</a></li>
                        </ul></li>
                    </div>
                {{-- End of dropdown --}}
                <li class="nav-item e-about">
                    <a class="nav-link archware-nav-title" style="scroll-behavior: smooth;" href="/#aboutus">About
                        Us</a>
                </li>

                <li class="nav-item px-3">
                    <!--<a class="nav-link archware-nav-title" href="/">Our Team</a>-->
                </li>
                <!-- <li class="nav-item px-3">
                    <a class="nav-link archware-nav-title" href="/services">Services</a>
                </li> -->
                <li class="nav-item px-3">
                    <a class="nav-link archware-nav-title" href="/#faq">FAQ</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link archware-nav-title" href="/join-us">Join Us</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link archware-nav-title" href="{{ route('recruit') }}">Recruit</a>
                </li>

            </ul>
            <ul class="navbar-nav d-flex flex-row  right-btn-container" style="margin-right: 9%; margin-top: .5rem">
                <li class="nav-item me-3 me-lg-0">
                    <a href="/contacts" id="normal-button">
                        <button class="btnnav">Contact Us</button>
                    </a>
                    <a href="/contacts" id="changed-button">
                        <button class="btnnav-two">Contact Us</button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- <nav class="navbar navbar-expand-sm fixed-top navbar-light bg-light">
    <a class="navbar-brand" href="#">Brand</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
        data-target="#navbar1">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!--<div class="collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a href="#" id="menu" data-bs-toggle="dropdown" class="nav-link dropdown-toggle" data-display="static">Our Services</a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item dropdown-submenu">
                        <a data-bs-toggle="dropdown" class="dropdown-toggle">Software Development</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item dropdown-submenu">
                                <a data-bs-toggle="dropdown" class="dropdown-toggle test">Web Development</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                        <a href="#">Responsive Website Design and Development</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="#">Website Redesign</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="#">E-commerce/Online Web Stores</a>

                                    </li>
                                    <li class="dropdown-item">
                                        <a href="#">Web Maintenance</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="dropdown-item">
                                <a href="#">Mobile App Development</a>
                            </li>

                        </ul>
                    </li>
                    <li class="dropdown-item dropdown-submenu">
                        <a href="#" data-bs-toggle="dropdown" class="">Project Management System</a>
                    </li>
                    <li class="dropdown-item dropdown-submenu">
                        <a href="#" data-bs-toggle="dropdown" class="">Account & Expenses Management System</a>
                    </li>
                    <li class="dropdown-item dropdown-submenu">
                        <a href="#" data-bs-toggle="dropdown" class="">Food Bank</a>
                    </li>
                    <li class="dropdown-item dropdown-submenu">
                        <a href="#" data-bs-toggle="dropdown" class="">Farm Management</a>
                    </li>
                </ul>
            </li>

    </div>-->
</nav> --}}

<!-- navbar -->


<!-- THE SCRIPT TO CONTROL THE STATE OF THE NAVBAR -->
<script type="text/javascript">
    // The code commented out is for the the navbar dropdown
    // $('.dropdown-submenu > a').on("click", function(e) {
    //     var submenu = $(this);
    //     $('.dropdown-submenu .dropdown-menu').removeClass('show');
    //     submenu.next('.dropdown-menu').addClass('show');
    //     e.stopPropagation();
    // });

    // $('.dropdown').on("hidden.bs.dropdown", function() {
    //     // hide any open menus when parent closes
    //     $('.dropdown-menu.show').removeClass('show');
    // });


    const getNav = document.querySelector('#navMain');
    const topOfNav = getNav.offsetTop;


    const triggerNav = (event) => {
        // console.log(event);
        if (window.scrollY >= 20) {
            //    console.log('You have passed the nav bottom!')
            // console.log(event);
            getNav.classList.add('navbar-trigger');
            // console.log(navLinks);
            const logoManipulation = document.querySelector('.light-logo');
            const normalLogo = document.querySelector('.colored-logo');
            const navLinks = document.querySelectorAll('.nav-link');
            const navDrop = document.querySelector('.nav-drop');
            const normalButton = document.querySelector('#normal-button');
            const changedButton = document.querySelector('#changed-button');

            // Hide button on scroll
            normalButton.style.display = 'none';
            changedButton.style.display = 'block'

            // Change the colours of the nav link text to white
            Array.from(navLinks).map((nav) => {
                // console.log(nav);
                nav.classList.add('nav-link-text');
            })
            navDrop.classList.add('nav-link-text');

            logoManipulation.style.display = 'block';
            normalLogo.style.display = 'none'

        } else {
            const navLinks = document.querySelectorAll('.nav-link');
            const navDrop = document.querySelector('.nav-drop');
            const normalButton = document.querySelector('#normal-button');
            const changedButton = document.querySelector('#changed-button');
            getNav.classList.remove('navbar-trigger');
                // Display normal button on a scroll to the top
            normalButton.style.display = 'block';
            changedButton.style.display = 'none'

            // Change the colours of the nav link text to white
            Array.from(navLinks).map((nav) => {
                // console.log(nav);
                nav.classList.remove('nav-link-text');
            })

        }
    }
    window.addEventListener('scroll', triggerNav);
</script>

@include('analytics')
