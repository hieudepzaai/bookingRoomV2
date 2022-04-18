<nav class="navbar navbar-expand-lg navbar-light bg-yl">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="/client/resources/img/rb.png" height="100px" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end w-100 my-navlink">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-door-fill"></i>
                        Home</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="/createPost"> <i class="bi bi-file-text"></i> New post</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/createPost"> <i class="bi bi-file-text"></i>Post Management</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> <i class="bi bi-bell-fill"></i> notification</a>
                </li>
                @endauth

                @if(!auth()->check())
                <li class="">
                    <a class="nav-link btn btn-success text-white nav-btn" href="/login">
                        <i class="fa-regular fa-user"></i> Login</a>
                </li>
                <li class="">
                    <a class="nav-link btn btn-danger text-white nav-btn" href="/login">
                        <i class="fa-solid fa-right-to-bracket"></i> Register</a>
                </li>
                @endif

                @auth

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  btn btn-success text-white " href="#" id="navbarDropdown"
                           role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-regular fa-user"></i> {{auth()->user()->name}}
                        </a>
                        <ul class="dropdown-menu custom-dropdown" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item fw-bold" href="/">Balance: {{auth()->user()->balancePretty}} VND</a></li>
                            <li><a class="dropdown-item text-danger" target="_blank" href="/payment/addCredit">Add Credits</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">For selling Post</a></li>
                            <li><a class="dropdown-item" href="#">For Renting Post</a></li>
                            <li><a class="dropdown-item" href="#">Find Post</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class=""><a class="dropdown-item text-white bg-danger" href="/logout">Log out</a></li>
                        </ul>
                    </li>
                @endauth
            </ul>

        </div>

    </div>
</nav>
