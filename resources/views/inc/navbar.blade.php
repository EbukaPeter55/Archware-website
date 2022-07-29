<div class="nav">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
        <div class="nav-title">
            <img src="{{ asset('customImages/Logo.svg') }}">
        </div>
    </div>
    <div class="nav-btn">
        <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
        </label>
    </div>

    <div class="nav-links">
        <ul>
            <li><a href="#" target="/">Home</a></li>
            <li><a href="#" target="_blank">About</a></li>
            <li><a href="#" target="/services">Services</a></li>
            <li class="nav-item dropdown">
                <a id="nav4" class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Subsidiaries
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/subsidiaries">Subsidiaries</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li><a href="#" target="_blank">Franchise</a></li>

            <button class="btn">contact us</button>

        </ul>
    </div>
</div>