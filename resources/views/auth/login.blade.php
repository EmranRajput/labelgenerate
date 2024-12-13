<!DOCTYPE html>
<html lang="en">
<head>
 
    <link rel="icon" href="{{asset('backend/images/labelworldlogo.png')}}" type="image/png" />


    <title>LabelsWorld | Login</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/css/line-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/css/fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/css/tooltipster.bundle.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/css/style.css')}}">

    <!-- end inject -->
    <style>
        .welcome-back{
            font-size: 20px !important;
            justify-content: center;
            color: solid red !important;
        }
        .welcome{
            background-color: red;
        }
    </style>
</head>


<body>



<!--======================================
        START HEADER AREA
    ======================================-->
<header class="header-menu-area bg-white">
    
    <div class="header-menu-content pr-150px pl-150px bg-white">
        <div class="container-fluid">
            <div class="main-menu-content">
                <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo-box">
                            <a href="#" class="logo"><img src="{{asset('frontend/images/labelworldlogo.png')}}" style="width: 150px;" alt="logo"></a>
                            <div class="user-btn-action">
                                
                                <div class="off-canvas-menu-toggle main-menu-toggle icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="top" title="Main menu">
                                    <i class="la la-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-lg-2 -->
                    <div class="col-lg-10">
                        <div class="menu-wrapper">
                           
                            
                            <nav class="main-menu">
                                <ul>
                                    <li>
                                        <a href="{{route('web.dashboard')}}" class="red-btn-home">HOME </a>
                                        
                                    </li>
                                    
                                    
                                    <li>
                                        
                                    </li>
                                   
                                </ul><!-- end ul -->
                            </nav><!-- end main-menu -->
                            
                            <div class="nav-right-button">
                                <a href="{{route('register')}}" class="btn theme-btn d-none d-lg-inline-block"><i class="la la-user-plus mr-1"></i> SINGUP</a>
                            </div><!-- end nav-right-button -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
    <div class="off-canvas-menu custom-scrollbar-styled main-off-canvas-menu">
        <div class="off-canvas-menu-close main-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <ul class="generic-list-item off-canvas-menu-list pt-90px">
            <li>
                <a href="#">HOME</a>
                
            </li>
            <li>
                <a href="#about-area-select">ABOUT</a>
                
            </li>
            <li>
                <a href="#recharge-area-select">RECHARGE</a>
                
            </li>
            <li>
                <a href="#">LOGIN</a>
                
            </li>
           
        </ul>
    </div><!-- end off-canvas-menu -->
    <div class="off-canvas-menu custom-scrollbar-styled category-off-canvas-menu">
        <div class="off-canvas-menu-close cat-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        
    </div><!-- end off-canvas-menu -->
    <div class="body-overlay"></div>
</header><!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->


<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 " :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

       <div class="card-header bg-danger py-3 mb-5">
            <h5 class="card-title text-white text-uppercase text-center">Welcome Back </h5>
            <h6 class="card-price text-white text-center">Please Enter Your Details</h6>
        </div>
        
         <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <div class="flex justify-center mt-4">
            <a href="{{ route('google.login') }}"
                class="flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm bg-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition ease-in-out duration-150">
                <img src="{{ asset('frontend/images/google.svg') }}" alt="Google Logo" class="w-5 h-5 mr-2">
                <span class="text-gray-700 font-medium">Sign in with Google</span>
            </a>
        </div>


        <div class="col-12">
            <div class="text-center mt-5">
                <h5 class="mb-0">Don't have an account yet? <a href="{{route('register')}}">Sign up here</a>
                </h5>
            </div>
        </div>
									
    </form>
</x-guest-layout>
        @include('notification.notification_alert')



<!-- template js files -->
<script src="{{asset('/frontend/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('/frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/frontend/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('/frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('/frontend/js/isotope.js')}}"></script>
<script src="{{asset('/frontend/js/waypoint.min.js')}}"></script>
<script src="{{asset('/frontend/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('/frontend/js/fancybox.js')}}"></script>
<script src="{{asset('/frontend/js/datedropper.min.js')}}"></script>
<script src="{{asset('/frontend/js/emojionearea.min.js')}}"></script>
<script src="{{asset('/frontend/js/tooltipster.bundle.min.js')}}"></script>
<script src="{{asset('/frontend/js/jquery.lazy.min.js')}}"></script>
<script src="{{asset('/frontend/js/main.js')}}"></script>
</body>
</html>
