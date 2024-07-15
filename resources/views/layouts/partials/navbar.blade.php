<header class="p-3 text-white" style="background-color: #53ACAF;">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a>
                <img src="{{ url('images/Logo HomeHarmony Azul.png') }}" alt="Logo" style="height: 100px" />
            </a>

            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('home.app') }}" class="nav-link px-2 fw-bold text-secondary">Home</a></li>
            </ul>



            @auth
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('articles.index') }}" class="nav-link fw-bold px-2 text-white">Articles</a></li>
                <li><a href="{{ route('categories.index') }}" class="nav-link fw-bold px-2 text-white">Categories</a></li>
            </ul>
            <div class="d-flex align-items-center fw-bold">
                <span class="text-white me-3">{{ auth()->user()->name }}</span>
                <a href="{{ route('logout.perform') }}" class="btn btn-outline-light">Logout</a>
            </div>
        @endauth


            @guest
                <div class="text-end">
                    <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
                    <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
                </div>


            @endguest
        </div>
    </div>
</header>

