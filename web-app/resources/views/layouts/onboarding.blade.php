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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="h-screen md:flex">
        <!-- Fixed sidebar -->
        <div class="background-svg w-2/12 hidden md:block"></div>
        <!-- Scroll wrapper -->
        <div class="flex-1 flex overflow-hidden">
            <!-- Scrollable container -->
            <div class="flex-1 overflow-y-scroll">
                <div class="flex h-screen px-4">
                    <div class="p-10 mx-auto">
                        <div class="flex space-x-10 justify-center my-10">
                            <a href="/onboarding/social-media">
                                <div class="h-1 w-56 bg-gray-500 @if($step >= 1) bg-indigo-600 @endif"></div>
                                <div>
                                    <span class="block uppercase font-bold text-gray-700 @if($step >= 1) text-indigo-800 @endif">step 1</span>
                                    <p class="text-gray-500">Connect social media</p>
                                </div>
                            </a>
                            <a href="/onboarding/invite">
                                <div class="h-1 w-56 bg-gray-500 @if($step >= 2) bg-indigo-600 @endif"></div>
                                <div>
                                    <span class="block uppercase font-bold text-gray-700 @if($step >= 2) text-indigo-800 @endif">step 2</span>
                                    <p class="text-gray-500">Invite your colleagues</p>
                                </div>
                            </a>
                            <a href="/onboarding/keywords">
                                <div class="h-1 w-56 bg-gray-500 @if($step >= 3) bg-indigo-600 @endif"></div>
                                <div>
                                    <span class="block uppercase font-bold text-gray-700 @if($step >= 3) text-indigo-800 @endif">step 3</span>
                                    <p class="text-gray-500">Setup keywords</p>
                                </div>
                            </a>
                        </div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
