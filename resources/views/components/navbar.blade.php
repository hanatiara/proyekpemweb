<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Webverse</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<nav class="mb-70 navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">
            <img src="/images/logo.svg" style="height: 30px; width: 30px" alt="">
            <img src="/images/logo-title.svg" style="height: 50px; width: 100px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}" aria-current="page" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('landing.kategori') ? 'active' : '' }}" href="{{ route('landing.kategori') }}">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('landing.ourteams') ? 'active' : '' }}" href="{{ route('landing.ourteams') }}">Our Team</a>
                </li>
            </ul>

            <ul class="navbar-nav mb-2 mb-lg-0">
                @if (Route::has('login'))
                    <li class="nav-item">
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                                <!-- Tambahkan ikon keranjang -->
                                <a href="{{route('landing.cart')}}" class="btn btn-secondary rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    <img src="/images/cart.png" alt="Keranjang" style="width: 24px; height: 24px;">
                                </a>
                                <div class="dropdown">
                                    <a
                                        class="btn btn-secondary rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        onclick="toggleDropdown(event)"
                                    >
                                        <div>{{ Auth::user()->name }}</div>
                                    </a>
                                    <div class="dropdown-content" id="myDropdown">
                                        <x-dropdown-link :href="route('profile.edit')">
                                            {{ __('Profile') }}
                                        </x-dropdown-link>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-dropdown-link :href="route('logout')"
                                                             onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </div>
                                </div>
                                <script>
                                    function toggleDropdown(event) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                        var dropdown = document.getElementById("myDropdown");
                                        dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block";
                                    }

                                    // Close the dropdown if the user clicks outside of it
                                    window.onclick = function(event) {
                                        if (!event.target.matches('.btn, .btn *')) {
                                            var dropdowns = document.getElementsByClassName("dropdown-content");
                                            for (var i = 0; i < dropdowns.length; i++) {
                                                var openDropdown = dropdowns[i];
                                                if (openDropdown.style.display === "block") {
                                                    openDropdown.style.display = "none";
                                                }
                                            }
                                        }
                                    }
                                </script>
                                <style>
                                    .dropdown {
                                        position: relative;
                                        display: inline-block;
                                    }

                                    .dropdown-content {
                                        display: none;
                                        position: absolute;
                                        background-color: #f9f9f9;
                                        min-width: 160px;
                                        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                                        z-index: 1;
                                    }

                                    .dropdown-content a {
                                        color: black;
                                        padding: 12px 16px;
                                        text-decoration: none;
                                        display: block;
                                    }

                                    .dropdown-content a:hover {
                                        background-color: #f1f1f1;
                                    }

                                </style>
                            @else
                                <!-- Tambahkan ikon keranjang -->
                                <a href="{{route('landing.cart')}}" class=" rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    <img src="/images/cart.png" alt="Keranjang" style="width: 24px; height: 24px;">
                                </a>
                                <a
                                    href="{{route('login')}}"
                                    class="btn btn-secondary rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Log in
                                </a>
                            @endauth
                        </nav>
                    </li>
                @endif
            </ul>

        </div>
    </div>
</nav>
