<nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0" id="navMain" style="padding-top: 1.2rem">
    <div class="container col-md-11">
        <a class="navbar-brand colored-logo" href="#!" style="margin-left: 7%;">
            <img src="{{ asset('customImages/Logo.svg') }}">
        </a>
        <a class="navbar-brand light-logo" href="#!" style="margin-left: 7%;">
            <img src="{{ asset('customImages/Archware-logo-light-variation.svg') }}">
        </a>
        <button class="navbar-toggler hamburger-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top: .5rem">
            <ul class="navbar-nav me-auto nav-links-a" style="margin-left: 8%;">
                <li class="nav-item px-3">
                    <a class="nav-link archware-nav-title" href="/">Home</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link archware-nav-title" href="#!">About Us</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link archware-nav-title" href="/services">Services</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link archware-nav-title" href="/subsidiaries">Subsidiaries</a>
                </li>
                <!-- <div class="dropdown" style="margin-top: .1rem">
                <li class="btn btn-white archware-nav-title dropdown-toggle" data-bs-toggle="dropdown">
                    Subsidiaries
                </li>
                <ul class="dropdown-menu dropdown-style">
                    <li><a class="dropdown-item" href="#">Youhi Media</a></li>
                    <li><a class="dropdown-item" href="#">Formost Eyeclinic</a></li>
                    <li><a class="dropdown-item" href="#">Archware Foodbank</a></li>
                    <li><a class="dropdown-item" href="#">Archware Consulting</a></li>
                    <li><a class="dropdown-item" href="#">Farm Management</a></li>
                </ul>
                </div> -->
                <li class="nav-item px-3">
                    <a class="nav-link archware-nav-title" href="#!">Franchise</a>
                </li>
            </ul>
            <ul class="navbar-nav d-flex flex-row mb-3 right-btn-container" style="margin-right: 9%; margin-top: .5rem">
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

<!-- THE SCRIPT TO CONTROL THE STATE OF THE NAVBAR -->
<script type="text/javascript">
        const getNav = document.querySelector('#navMain');
        const topOfNav = getNav.offsetTop;
       

        const triggerNav = (event) => {
            console.log(event);
            if(window.scrollY >= topOfNav){
            //    console.log('You have passed the nav bottom!')
            // console.log(event);
            getNav.classList.add('navbar-trigger');
            // console.log(navLinks);
            const logoManipulation = document.querySelector('.light-logo');
            const normalLogo = document.querySelector('.colored-logo');
            const navLinks = document.querySelectorAll('.nav-link');
            const normalButton = document.querySelector('#normal-button');
            const changedButton = document.querySelector('#changed-button');

            // Hide button on scroll
            normalButton.style.display = 'none';
            changedButton.style.display = 'block'

            // Change the colours of the nav link text to white
            Array.from(navLinks).map((nav)=>{
                // console.log(nav);
                nav.classList.add('nav-link-text');
            })
              
            logoManipulation.style.display = 'block';
            normalLogo.style.display = 'none'
          
            }else {
            getNav.classList.remove('navbar-trigger');

            // Display normal button on a scroll to the top
            normalButton.style.display = 'block';
            changedButton.style.display = 'none'
            }
        }
        window.addEventListener('scroll', triggerNav);

     
    </script>
