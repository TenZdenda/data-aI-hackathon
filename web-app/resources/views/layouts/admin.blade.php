<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BrandA') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="h-screen flex">
    <!-- Fixed sidebar -->
    <div
        class="
      sidebar
      w-80
      bg-black
      text-gray-100
      px-5
      py-8
      space-y-16
      absolute
      inset-y-0
      left-0
      transform
      -translate-x-full
      md:relative md:translate-x-0
      transition
      duration-200
      ease-in-out
      z-10
    ">
        <!--:class="{ '-translate-x-full': bool }"-->
        <div class="flex justify-between px-4">
            <div class="flex items-center space-x-5">
                <span class="text-2xl font-bold">Branda</span>
            </div>
            <button class="focus:outline-none md:hidden mobile-menu-button">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"
                    />
                </svg>
            </button>
        </div>
        <nav class="space-y-6 font-light">
            <a
                href="/admin/dashboard"
                class="flex items-center space-x-5 rounded transition duration-200 hover:bg-white hover:bg-opacity-20 hover:text-gray-100 hover:shadow-xl px-4 py-2.5 {{ (request()->is('admin/dashboard')) ? 'bg-white bg-opacity-20 text-gray-100 shadow-xl' : '' }}"
            >
                <span class="text-md">Dashboard</span>
            </a>
            <a
                href="#"
                class="flex items-center space-x-5 rounded transition duration-200 hover:bg-white hover:bg-opacity-20 hover:text-gray-100 hover:shadow-xl px-4 py-2.5 {{ (request()->is('admin/foods')) ? 'bg-white bg-opacity-20 text-gray-100 shadow-xl' : '' }}"
            >
                <span class="text-md">Social media</span>
            </a>
            <a
                href="#"
                class="flex items-center space-x-5 rounded transition duration-200 hover:bg-white hover:bg-opacity-20 hover:text-gray-100 hover:shadow-xl px-4 py-2.5 {{ (request()->is('admin/orders')) ? 'bg-white bg-opacity-20 text-gray-100 shadow-xl' : '' }}"
            >
                <span class="text-md">Teams</span>
            </a>
            <a
                href="#"
                class="flex items-center space-x-5 rounded transition duration-200 hover:bg-white hover:bg-opacity-20 hover:text-gray-100 hover:shadow-xl px-4 py-2.5 {{ (request()->is('admin/users')) ? 'bg-white bg-opacity-20 text-gray-100 shadow-xl' : '' }}"
            >
                <span class="text-md">Members</span>
            </a>
            <a
                href="#"
                class="flex items-center space-x-5 rounded transition duration-200 hover:bg-white hover:bg-opacity-20 hover:text-gray-100 hover:shadow-xl px-4 py-2.5 {{ (request()->is('admin/users')) ? 'bg-white bg-opacity-20 text-gray-100 shadow-xl' : '' }}"
            >
                <span class="text-md">Settings</span>
            </a>
            <!--<a
                href="/admin/settings"
                class="flex items-center space-x-5 rounded transition duration-200 hover:bg-white hover:bg-opacity-20 hover:text-gray-100 hover:shadow-xl px-4 py-2.5"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                    />
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                </svg>
                <span class="text-md">Nastavení</span>
            </a>-->
        </nav>
        <hr class="border-gray-700"/>
        <div>
            <a
                class="
          w-full
          px-4
          py-2.5
          text-left text-white
          flex
          space-x-5
          rounded
          transition
          duration-200
          hover:bg-white hover:bg-opacity-20 hover:text-gray-100 hover:shadow-xl
          focus:outline-none
        "

        href="{{ route('logout') }}"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                    />
                </svg>
                <span>Log out</span>
            </a>
        </div>
    </div>
    <!-- Scroll wrapper -->
    <div class="flex-1 flex overflow-hidden">
        <!-- Scrollable container -->
        <div class="flex-1 overflow-y-scroll">
            <div class="flex items-center justify-between md:justify-end px-6 py-4">
                <button class="focus:outline-none md:hidden" id="open-sidebar-menu">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7"
                        />
                    </svg>
                </button>
                <a
                    href="#"
                    class="flex items-center p-2 hover:bg-gray-100 rounded-full"
                >
                    <img
                        class="h-10 w-10 md:h-12 md:w-12 rounded-full"
                        src="{{ asset('images/profiledefault.jpg') }}"
                        alt="Profile image"
                    />
                    <div class="ml-4 hidden md:block">
                        <p class="font-bold">{{ \Illuminate\Support\Facades\Auth::user()->full_name }}</p>
                        <p class="text-gray-500">{{ \Illuminate\Support\Facades\Auth::user()->email }}</p>
                    </div>
                </a>
            </div>
            <div class="p-6">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<script>
    window.addEventListener("load", function(){
        const btn = document.querySelector(".mobile-menu-button");
        const sidebar = document.querySelector(".sidebar");
        const openSidebarMenu = document.getElementById("open-sidebar-menu");

        openSidebarMenu.addEventListener("click", () => {
            sidebar.classList.toggle("-translate-x-full");
        })

        // add our event listener for the click
        btn.addEventListener("click", () => {
            sidebar.classList.toggle("-translate-x-full");
        });
    });

</script>
@yield('scripts')
</body>
</html>
