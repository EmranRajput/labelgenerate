<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    	<link rel="icon" href="{{asset('backend/images/labelworldlogo.png')}}" type="image/png" />


    <title>Label Shipping</title>

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
                                        <a href="#" class="red-btn-home"> </a>
                                        
                                    </li>
                                   
                                   
                                </ul><!-- end ul -->
                            </nav><!-- end main-menu -->
                            
                            <div class="nav-right-button">
                                <a href="{{route('login')}}" class="btn theme-btn d-none d-lg-inline-block"><i class="la la-user-plus mr-1"></i> LOGIN</a>
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
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="card-header bg-danger py-3 mb-5">
            <h3 class="card-title text-white text-uppercase text-center">Create Account </h3>
            <h5 class="card-price text-white text-center">Please fill the below details to create your account</h5>
        </div>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
