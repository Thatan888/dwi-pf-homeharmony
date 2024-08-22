<style>
    .nav-item-hover {
        position: relative;
        display: inline-block;
        color: #fff;
        text-decoration: none;
        overflow: hidden;
        transition: color 0.4s;
    }

    .nav-item-hover::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        background-color: #fff;
        bottom: 0;
        left: -100%;
        transition: left 0.4s ease;
    }

    .nav-item-hover:hover::before {
        left: 0;
    }

    .nav-item-hover:hover {
        color: #ffeb3b;
    }
</style>

<header class="p-3 text-white" style="background-color: #3B5D50;">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <a>
                    <img src="{{ url('images/navharmony.png') }}" alt="Logo" style="height: 100px" />
                </a>

                <a class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    @if (auth()->check())
                        <li>
                            <a href="{{ route('home.app') }}"
                                class="nav-link pt-3 fw-bold text-white nav-item-hover">Home</a>
                        </li>
                    @else
                        <li>
                            <a href="/" class="nav-link pt-3 fw-bold text-white nav-item-hover">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('articles.view') }}" class="nav-link pt-3 fw-bold text-white nav-item-hover">Articles</a>
                        </li>
                        
                        
                        

                    @endif

                    @auth
                        <div class="menu ms-3 pt-1">
                            <div class="item">
                                <a class="link text-light fw-bold">
                                    <span>catalog</span>
                                    <svg viewBox="0 0 360 360" xml:space="preserve">
                                        <g id="SVGRepo_iconCarrier">
                                            <path id="XMLID_225_"
                                                d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                                <div class="submenu">
                                    <div class="submenu-item">
                                        <li><a href="{{ route('articles.index') }}"
                                                class="submenu-link text-light">Articles</a></li>
                                    </div>
                                    <div class="submenu-item">
                                        <li><a href="{{ route('categories.index') }}"
                                                class="submenu-link text-light">Categories</a></li>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endauth
                    <li><a href="{{ route('about') }}" class="nav-link pt-3 fw-bold text-white nav-item-hover">About
                            Us</a>
                    </li>
                </ul>
            </div>

            @auth
                <div class="d-flex align-items-center fw-bold">
                    <span
                        class="text-white me-3">{{ auth()->user()->username . ' - ' . auth()->user()->fatherlastname }}</span>
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

<style>
    .menu {
        font-size: 16px;
        line-height: 1.6;
        color: #000000;
        width: fit-content;
        display: flex;
        list-style: none;
    }

    .menu a {
        text-decoration: none;
        color: inherit;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }

    .menu .link {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        padding: 12px 36px;
        border-radius: 16px;
        overflow: hidden;
        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .menu .link::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #0a3cff;
        z-index: -1;
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .menu .link svg {
        width: 14px;
        height: 14px;
        fill: #000000;
        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .menu .item {
        position: relative;
    }

    .menu .item .submenu {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: absolute;
        top: 100%;
        border-radius: 0 0 16px 16px;
        left: 0;
        width: 100%;
        overflow: hidden;
        border: 1px solid #cccccc;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-12px);
        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
        z-index: 1;
        pointer-events: none;
        list-style: none;
        background-color: #3B5D50;
    }


    .menu .item:hover .submenu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
        pointer-events: auto;
        border-top: transparent;
        border-color: #ffffff;
    }

    .menu .item:hover .link {
        color: #ffffff;
        border-radius: 16px 16px 0 0;
    }

    .menu .item:hover .link::after {
        transform: scaleX(1);
        transform-origin: right;
    }

    .menu .item:hover .link svg {
        fill: #ffffff;
        transform: rotate(-180deg);
    }

    .submenu .submenu-item {
        width: 100%;
        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .submenu .submenu-link {
        display: block;
        padding: 12px 24px;
        width: 100%;
        position: relative;
        text-align: center;
        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .submenu .submenu-item:last-child .submenu-link {
        border-bottom: none;
    }

    .submenu .submenu-link::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        transform: scaleX(0);
        width: 100%;
        height: 100%;
        background-color: #6b9c89;
        z-index: -1;
        transform-origin: left;
        transition: transform 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .submenu .submenu-link:hover:before {
        transform: scaleX(1);
        transform-origin: right;
    }

    .submenu .submenu-link:hover {
        color: #ffffff;
    }
</style>
