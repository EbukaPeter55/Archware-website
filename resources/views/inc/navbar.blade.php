        <nav id="body" class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <img id="archware_image" src="{{ asset('customImages/logo.svg') }}">
                <div class="navbarz">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a id="nav1" class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a id="nav2" class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                            <a id="nav3" class="nav-link" href="#">Services</a>
                        </li>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a id="nav1" class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a id="nav2" class="nav-link" href="#">About us</a>
                            </li>
                            <li class="nav-item">
                                <a id="nav3" class="nav-link" href="/services">Services</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="nav4" class="nav-link dropdown-toggle" href="/subsidiaries" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

                        </ul>
                </div>
                <button class="button" class="btn btn-outline-success" type="submit">Contact Us </button>

            </div>
        </nav>