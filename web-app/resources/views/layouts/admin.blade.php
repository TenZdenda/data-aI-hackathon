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
                <span class="text-2xl font-bold">Administrace.</span>
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
                        d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"
                    />
                </svg>
                <span class="text-md">Dashboard</span>
            </a>
            <a
                href="/admin/foods"
                class="flex items-center space-x-5 rounded transition duration-200 hover:bg-white hover:bg-opacity-20 hover:text-gray-100 hover:shadow-xl px-4 py-2.5 {{ (request()->is('admin/foods')) ? 'bg-white bg-opacity-20 text-gray-100 shadow-xl' : '' }}"
            >
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19 2C18.7348 2 18.4804 2.10536 18.2929 2.29289C18.1054 2.48043 18 2.73478 18 3V8.46L17 9.13V3C17 2.73478 16.8946 2.48043 16.7071 2.29289C16.5196 2.10536 16.2652 2 16 2C15.7348 2 15.4804 2.10536 15.2929 2.29289C15.1054 2.48043 15 2.73478 15 3V9.13L14 8.46V3C14 2.73478 13.8946 2.48043 13.7071 2.29289C13.5196 2.10536 13.2652 2 13 2C12.7348 2 12.4804 2.10536 12.2929 2.29289C12.1054 2.48043 12 2.73478 12 3V9C12.0009 9.16471 12.0424 9.32665 12.1209 9.47145C12.1994 9.61625 12.3124 9.73941 12.45 9.83L15 11.54V21C15 21.2652 15.1054 21.5196 15.2929 21.7071C15.4804 21.8946 15.7348 22 16 22C16.2652 22 16.5196 21.8946 16.7071 21.7071C16.8946 21.5196 17 21.2652 17 21V11.54L19.55 9.83C19.6876 9.73941 19.8006 9.61625 19.8791 9.47145C19.9576 9.32665 19.9991 9.16471 20 9V3C20 2.73478 19.8946 2.48043 19.7071 2.29289C19.5196 2.10536 19.2652 2 19 2ZM9 2C7.67392 2 6.40215 2.52678 5.46447 3.46447C4.52678 4.40215 4 5.67392 4 7V13C4 13.2652 4.10536 13.5196 4.29289 13.7071C4.48043 13.8946 4.73478 14 5 14H8V21C8 21.2652 8.10536 21.5196 8.29289 21.7071C8.48043 21.8946 8.73478 22 9 22C9.26522 22 9.51957 21.8946 9.70711 21.7071C9.89464 21.5196 10 21.2652 10 21V3C10 2.73478 9.89464 2.48043 9.70711 2.29289C9.51957 2.10536 9.26522 2 9 2ZM8 12H6V7C5.99967 6.37935 6.19186 5.77387 6.55006 5.26702C6.90826 4.76016 7.41484 4.37688 8 4.17V12Z"
                        fill="white"/>
                </svg>
                <span class="text-md">Správa jídel</span>
            </a>
            <a
                href="/admin/orders"
                class="flex items-center space-x-5 rounded transition duration-200 hover:bg-white hover:bg-opacity-20 hover:text-gray-100 hover:shadow-xl px-4 py-2.5 {{ (request()->is('admin/orders')) ? 'bg-white bg-opacity-20 text-gray-100 shadow-xl' : '' }}"
            >
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13 16H7.00001C6.73479 16 6.48044 16.1054 6.2929 16.2929C6.10537 16.4804 6.00001 16.7348 6.00001 17C6.00001 17.2652 6.10537 17.5196 6.2929 17.7071C6.48044 17.8947 6.73479 18 7.00001 18H13C13.2652 18 13.5196 17.8947 13.7071 17.7071C13.8947 17.5196 14 17.2652 14 17C14 16.7348 13.8947 16.4804 13.7071 16.2929C13.5196 16.1054 13.2652 16 13 16ZM9.00001 10H11C11.2652 10 11.5196 9.89465 11.7071 9.70711C11.8947 9.51958 12 9.26522 12 9.00001C12 8.73479 11.8947 8.48044 11.7071 8.2929C11.5196 8.10536 11.2652 8.00001 11 8.00001H9.00001C8.73479 8.00001 8.48044 8.10536 8.2929 8.2929C8.10537 8.48044 8.00001 8.73479 8.00001 9.00001C8.00001 9.26522 8.10537 9.51958 8.2929 9.70711C8.48044 9.89465 8.73479 10 9.00001 10ZM21 12H18V3.00001C18.0007 2.8238 17.9548 2.65053 17.867 2.49775C17.7792 2.34498 17.6526 2.21811 17.5 2.13001C17.348 2.04224 17.1755 1.99603 17 1.99603C16.8245 1.99603 16.652 2.04224 16.5 2.13001L13.5 3.85001L10.5 2.13001C10.348 2.04224 10.1755 1.99603 10 1.99603C9.82447 1.99603 9.65203 2.04224 9.50001 2.13001L6.50001 3.85001L3.50001 2.13001C3.34799 2.04224 3.17554 1.99603 3.00001 1.99603C2.82447 1.99603 2.65203 2.04224 2.50001 2.13001C2.3474 2.21811 2.22079 2.34498 2.13299 2.49775C2.04518 2.65053 1.99931 2.8238 2.00001 3.00001V19C2.00001 19.7957 2.31608 20.5587 2.87869 21.1213C3.4413 21.6839 4.20436 22 5.00001 22H19C19.7957 22 20.5587 21.6839 21.1213 21.1213C21.6839 20.5587 22 19.7957 22 19V13C22 12.7348 21.8947 12.4804 21.7071 12.2929C21.5196 12.1054 21.2652 12 21 12ZM5.00001 20C4.73479 20 4.48044 19.8947 4.2929 19.7071C4.10536 19.5196 4.00001 19.2652 4.00001 19V4.73001L6.00001 5.87001C6.15435 5.95062 6.32589 5.99272 6.50001 5.99272C6.67413 5.99272 6.84567 5.95062 7.00001 5.87001L10 4.15001L13 5.87001C13.1543 5.95062 13.3259 5.99272 13.5 5.99272C13.6741 5.99272 13.8457 5.95062 14 5.87001L16 4.73001V19C16.0027 19.3412 16.0636 19.6793 16.18 20H5.00001ZM20 19C20 19.2652 19.8947 19.5196 19.7071 19.7071C19.5196 19.8947 19.2652 20 19 20C18.7348 20 18.4804 19.8947 18.2929 19.7071C18.1054 19.5196 18 19.2652 18 19V14H20V19ZM13 12H7.00001C6.73479 12 6.48044 12.1054 6.2929 12.2929C6.10537 12.4804 6.00001 12.7348 6.00001 13C6.00001 13.2652 6.10537 13.5196 6.2929 13.7071C6.48044 13.8947 6.73479 14 7.00001 14H13C13.2652 14 13.5196 13.8947 13.7071 13.7071C13.8947 13.5196 14 13.2652 14 13C14 12.7348 13.8947 12.4804 13.7071 12.2929C13.5196 12.1054 13.2652 12 13 12Z"
                        fill="white"/>
                </svg>
                <span class="text-md">Správa objednávek</span>
            </a>
            <a
                href="/admin/users"
                class="flex items-center space-x-5 rounded transition duration-200 hover:bg-white hover:bg-opacity-20 hover:text-gray-100 hover:shadow-xl px-4 py-2.5 {{ (request()->is('admin/users')) ? 'bg-white bg-opacity-20 text-gray-100 shadow-xl' : '' }}"
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
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
                    />
                </svg>
                <span class="text-md">Správa uživatelů</span>
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
                <span>Odhlásit se</span>
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
