<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    	<link rel="icon" href="{{asset('frontend/images/favicon12.png')}}" type="image/png" />


    <title>LabelsWorld</title>

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
<style>
    .section--padding{
    padding-top: 20px !important;
    padding-bottom: 67px  !important;
    }
    .section-padding{
    padding-top: 50px !important;
    padding-bottom: 67px  !important;
    }
    .menu-wrapper{
    padding-top: 10px !important;
    padding-bottom: 10px  !important;

    }
    .feature-area{
        padding-bottom: 0px !important;
    }

    .red-btn-home{
        color: red;
    }
    .card-item{
        background-color: transparent !important;
        border: none !important;
        background-color: #f8f9fa !important;
    }
    .img-fluid {
        max-width: 70% !important;
    }
    .list-group-item{
        background-color: #f7f7f7;
    }
</style>
<body>

<!-- start cssload-loader -->
<div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

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
                            <a href="#" class="logo"><img src="{{asset('frontend/images/logo2.png')}}" style="width: 100px;" alt="logo"></a>
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
                                        <a href="#about-area-select">ABOUT </a>
                                        
                                    </li>
                                    <li>
                                        <a href="#recharge-area-select">RECHARGE </a>
                                        
                                    </li>
                                     <li>
                                        <a href="#" class="red-btn-home"> </a>
                                        
                                    </li>
                                    <li>
                                        <a href="{{route('login')}}">LOGIN </a>
                                        
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





<div class="section-block"></div>

<!--======================================
        START ABOUT AREA
======================================-->
<section class="about-area section--padding overflow-hidden" >
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content ">
                    <div class="section-heading pt-5">
                        <h1 class="section__title">GET FLAT RATE </h2>
                        <h1 class="section__title">SHIPPING LABELS</h2>

                        <span class="section-divider"></span>
                        <p class="section__desc">
                            Simplify shipping with our flat rate shipping labels. Enjoy consistent and predictable pricing, regardless of package size or destination. Streamline your shipping process and eliminate the guesswork. Get your flat rate labels today for a hassle-free experience.
                        </p>
                    </div><!-- end section-heading -->
                    <div class="row pt-4 pb-3">
                        <div class="col-lg-3 responsive-column-half">
                            <div class="info-icon-box mb-3">
                                <div class="icon-element icon-element-md shadow-sm">
                                    <svg class="svg-icon-color-1" width="32" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m181.022 142.59-8.659 3.138c-13.364 4.846-23.334 16.536-26.021 30.517l-2.938 15.396c-1.466 7.626.53 15.436 5.479 21.425 4.951 5.995 12.251 9.433 20.025 9.433h75.057c7.714 0 14.977-3.393 19.927-9.309 4.946-5.911 7.004-13.65 5.646-21.233l-2.74-15.315c-2.539-14.201-12.542-26.081-26.108-31.004l-9.18-3.327v-13.53c0-.38-.037-.75-.092-1.115 6.697-6.818 10.533-16.115 10.533-25.627v-20.159c0-19.678-16.01-35.687-35.689-35.687s-35.692 16.009-35.692 35.687v20.787c0 9.778 4.032 18.705 10.515 25.188-.038.304-.063.611-.063.925zm71.008 36.692 2.74 15.317c.574 3.201-.295 6.468-2.384 8.964-2.092 2.5-5.162 3.935-8.423 3.935h-75.057c-3.285 0-6.369-1.452-8.461-3.985-2.088-2.528-2.931-5.823-2.311-9.05l2.938-15.396c1.693-8.812 7.979-16.183 16.4-19.236l5.672-2.055c.142.146.285.293.439.428 6.463 5.651 14.57 8.477 22.682 8.476 8.102 0 16.207-2.82 22.671-8.46.233-.203.447-.422.651-.65l5.983 2.169c8.554 3.102 14.86 10.59 16.46 19.543zm-66.46-97.402c0-11.406 9.281-20.687 20.689-20.687 9.628 0 17.718 6.62 20.015 15.54-.964.471-1.953.916-2.966 1.321-9.222 3.692-16.671 3.202-18.8 1.71-3.392-2.378-8.068-1.558-10.447 1.834-2.378 3.392-1.557 8.068 1.834 10.447 3.663 2.569 8.635 3.853 14.309 3.853 5.155 0 10.89-1.071 16.745-3.19v9.329c0 5.733-2.371 11.347-6.506 15.402-1.914 1.878-4.107 3.333-6.462 4.337-.165.063-.327.131-.486.205-2.419.957-5.003 1.438-7.644 1.369-11.184-.215-20.281-9.494-20.281-20.684zm19.993 56.469c.229.004.456.006.685.006 3.519 0 6.967-.529 10.261-1.544v11.999c-6.251 3.854-14.242 3.852-20.485-.006v-11.971c3.034.919 6.231 1.452 9.539 1.516z"></path><path d="m88.264 350.904h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z"></path><path d="m88.264 391.345h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z"></path><path d="m88.264 431.784h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z"></path><path d="m88.264 472.225h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z"></path><path d="m80.764 262.524c0 4.143 3.357 7.5 7.5 7.5h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.358-7.5 7.5z"></path><path d="m88.264 310.464h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z"></path><path d="m60.569 350.932c4.158 0 7.529-3.37 7.529-7.528 0-4.157-3.371-7.528-7.529-7.528s-7.528 3.37-7.528 7.528 3.371 7.528 7.528 7.528z"></path><path d="m60.569 270.052c4.158 0 7.529-3.37 7.529-7.528s-3.371-7.528-7.529-7.528-7.528 3.37-7.528 7.528 3.371 7.528 7.528 7.528z"></path><path d="m60.569 310.492c4.158 0 7.529-3.37 7.529-7.528s-3.371-7.528-7.529-7.528-7.528 3.37-7.528 7.528 3.371 7.528 7.528 7.528z"></path><path d="m60.569 391.372c4.158 0 7.529-3.37 7.529-7.528s-3.371-7.528-7.529-7.528-7.528 3.37-7.528 7.528 3.371 7.528 7.528 7.528z"></path><path d="m60.569 431.813c4.158 0 7.529-3.37 7.529-7.528s-3.371-7.528-7.529-7.528-7.528 3.37-7.528 7.528c0 4.157 3.371 7.528 7.528 7.528z"></path><path d="m60.569 472.253c4.158 0 7.529-3.37 7.529-7.528 0-4.157-3.371-7.528-7.529-7.528s-7.528 3.37-7.528 7.528c0 4.157 3.371 7.528 7.528 7.528z"></path><path d="m485.63 118.121c-3.026-3.83-5.886-7.449-7.269-10.783-1.492-3.599-2.08-8.354-2.702-13.39-1.091-8.822-2.327-18.821-9.305-25.798s-16.978-8.213-25.8-9.304c-5.037-.622-9.794-1.21-13.393-2.702-3.335-1.383-6.953-4.241-10.784-7.268-5.271-4.165-11.068-8.738-17.922-10.813v-2.269c.001-19.736-16.058-35.794-35.797-35.794h-312.444c-19.739 0-35.798 16.058-35.798 35.795v28.949c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-28.949c0-11.467 9.33-20.795 20.798-20.795h312.444c11.468 0 20.798 9.328 20.798 20.795v2.27c-6.852 2.076-12.647 6.647-17.918 10.812-3.831 3.026-7.449 5.885-10.783 7.268-3.599 1.491-8.356 2.079-13.393 2.702-8.822 1.09-18.821 2.326-25.8 9.303-6.979 6.978-8.215 16.977-9.306 25.799-.622 5.035-1.21 9.791-2.702 13.39-1.383 3.334-4.242 6.953-7.269 10.783-5.604 7.091-11.954 15.128-11.954 25.417s6.351 18.326 11.954 25.417c3.026 3.83 5.886 7.449 7.269 10.783 1.492 3.599 2.08 8.354 2.702 13.391 1.091 8.821 2.327 18.82 9.305 25.797 6.978 6.978 16.978 8.213 25.8 9.304 2.63.325 5.179.644 7.532 1.084v113.367c0 4.443 2.48 8.411 6.473 10.355 3.992 1.947 8.645 1.453 12.146-1.288l15.943-12.483v136.94c0 11.467-9.33 20.795-20.798 20.795h-312.443c-11.468 0-20.798-9.328-20.798-20.795v-378.435c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v378.434c0 19.737 16.059 35.795 35.798 35.795h312.444c19.739 0 35.798-16.058 35.798-35.795v-136.94l15.943 12.482c2.081 1.63 4.571 2.466 7.089 2.466 1.716 0 3.444-.389 5.064-1.178 3.994-1.944 6.476-5.912 6.476-10.354v-83.697c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v76.555l-19.937-15.609c-2.015-1.595-4.549-2.474-7.136-2.474s-5.121.879-7.104 2.448l-19.959 15.627v-98.625c.544.426 1.091.857 1.645 1.294 7.092 5.604 15.13 11.953 25.42 11.953 10.289 0 18.327-6.35 25.419-11.952 3.831-3.026 7.45-5.886 10.784-7.269 3.599-1.491 8.356-2.079 13.393-2.702 8.822-1.09 18.821-2.326 25.801-9.303 6.977-6.978 8.213-16.977 9.304-25.798.623-5.036 1.211-9.792 2.703-13.391 1.383-3.334 4.242-6.953 7.269-10.783 5.604-7.091 11.954-15.128 11.954-25.417s-6.351-18.326-11.954-25.417zm-11.769 41.534c-3.528 4.465-7.176 9.081-9.355 14.337-2.273 5.48-3.016 11.487-3.734 17.296-.871 7.046-1.693 13.701-5.023 17.031-3.331 3.33-9.987 4.152-17.034 5.023-5.81.718-11.816 1.46-17.298 3.733-5.256 2.179-9.872 5.826-14.337 9.354-5.679 4.485-11.042 8.723-16.121 8.723s-10.442-4.237-16.121-8.723c-4.465-3.527-9.081-7.175-14.337-9.354-.362-.15-1.618-.628-1.889-.712-4.957-1.724-10.26-2.385-15.41-3.021-7.047-.871-13.703-1.694-17.034-5.024-3.329-3.329-4.152-9.984-5.023-17.029-.718-5.81-1.46-11.815-3.733-17.297-2.18-5.256-5.827-9.872-9.355-14.337-4.485-5.678-8.723-11.04-8.723-16.117s4.237-10.439 8.723-16.117c3.528-4.465 7.176-9.081 9.355-14.337 2.273-5.48 3.016-11.487 3.733-17.296.871-7.046 1.694-13.701 5.024-17.031 3.331-3.33 9.987-4.152 17.034-5.023 5.81-.718 11.816-1.46 17.298-3.733 5.256-2.179 9.872-5.826 14.337-9.354 5.667-4.477 11.021-8.705 16.091-8.721.009 0 .019.001.028.001.01 0 .02-.001.03-.001 5.071.015 10.425 4.244 16.093 8.721 4.465 3.527 9.081 7.175 14.337 9.354 5.481 2.273 11.489 3.016 17.299 3.733 7.047.871 13.703 1.694 17.033 5.024s4.153 9.984 5.024 17.03c.718 5.809 1.46 11.815 3.733 17.296 2.18 5.256 5.827 9.872 9.355 14.337 4.485 5.678 8.723 11.04 8.723 16.117s-4.237 10.44-8.723 16.117z"></path><path d="m439.109 119.704-25.522-7.221-14.757-22.04c-1.763-2.632-4.705-4.202-7.872-4.202s-6.11 1.571-7.872 4.202l-14.757 22.04-25.524 7.222c-3.048.863-5.452 3.178-6.43 6.19s-.392 6.297 1.566 8.783l16.403 20.843-1.018 26.497c-.123 3.166 1.333 6.168 3.896 8.031 1.645 1.195 3.594 1.813 5.565 1.813 1.102 0 2.21-.193 3.274-.585l24.895-9.158 24.893 9.157c2.973 1.096 6.276.636 8.839-1.225s4.021-4.862 3.899-8.029l-1.018-26.502 16.404-20.843c1.958-2.489 2.543-5.772 1.564-8.784-.975-3.012-3.379-5.326-6.428-6.189zm-24.587 28.143c-1.386 1.764-2.103 3.97-2.018 6.219l.778 20.284-19.053-7.009c-2.111-.777-4.436-.776-6.543-.001l-19.055 7.01.779-20.291c.084-2.241-.634-4.447-2.023-6.217l-12.554-15.952 19.539-5.527c2.161-.613 4.04-1.979 5.289-3.845l11.295-16.87 11.294 16.868c1.25 1.867 3.129 3.233 5.294 3.848l19.535 5.526z"></path></g></svg>
                                </div>
                                <h4 class="fs-20 font-weight-semi-bold pt-3">Easy reference</h4>
                            </div><!-- end info-icon-box -->
                        </div><!-- end col-lg-4 -->
                        <div class="col-lg-3 responsive-column-half">
                            <div class="info-icon-box mb-3">
                                <div class="icon-element icon-element-md shadow-sm">
                                    <svg class="svg-icon-color-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                                    <path d="M12 2C8.134 2 5 5.134 5 9c0 5.25 7 11 7 11s7-5.75 7-11c0-3.866-3.134-7-7-7zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/>
                                    </svg>
                                </div>
                                <h4 class="fs-20 font-weight-semi-bold pt-3">Instant tracking</h4>
                            </div><!-- end info-icon-box -->
                        </div><!-- end col-lg-4 -->
                        <div class="col-lg-3 responsive-column-half">
                            <div class="info-icon-box mb-3">
                                <div class="icon-element icon-element-md shadow-sm">
                                    <svg class="svg-icon-color-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM5 19V5h14v14H5zm6-7c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zm0 2c-2.67 0-8 1.34-8 4v1h16v-1c0-2.66-5.33-4-8-4z"/>
                                    </svg>
                                    <g>
                                        <g>
                                            <path d="M245.333,85.333c-41.173,0-74.667,33.493-74.667,74.667s33.493,74.667,74.667,74.667S320,201.173,320,160
                                                C320,118.827,286.507,85.333,245.333,85.333z M245.333,213.333C215.936,213.333,192,189.397,192,160
                                                c0-29.397,23.936-53.333,53.333-53.333s53.333,23.936,53.333,53.333S274.731,213.333,245.333,213.333z"></path>
                                        </g>
                                    </g>
                                        <g>
                                        <g>
                                            <path d="M394.667,170.667c-29.397,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333S448,253.397,448,224
                                                S424.064,170.667,394.667,170.667z M394.667,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32s32,14.357,32,32
                                                C426.667,241.643,412.309,256,394.667,256z"></path>
                                        </g>
                                    </g>
                                        <g>
                                        <g>
                                            <path d="M97.515,170.667c-29.419,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333s53.333-23.936,53.333-53.333
                                                S126.933,170.667,97.515,170.667z M97.515,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32c17.643,0,32,14.357,32,32
                                                C129.515,241.643,115.157,256,97.515,256z"></path>
                                        </g>
                                    </g>
                                        <g>
                                        <g>
                                            <path d="M245.333,256c-76.459,0-138.667,62.208-138.667,138.667c0,5.888,4.779,10.667,10.667,10.667S128,400.555,128,394.667
                                                c0-64.704,52.629-117.333,117.333-117.333s117.333,52.629,117.333,117.333c0,5.888,4.779,10.667,10.667,10.667
                                                c5.888,0,10.667-4.779,10.667-10.667C384,318.208,321.792,256,245.333,256z"></path>
                                        </g>
                                    </g>
                                        <g>
                                        <g>
                                            <path d="M394.667,298.667c-17.557,0-34.752,4.8-49.728,13.867c-5.013,3.072-6.635,9.621-3.584,14.656
                                                c3.093,5.035,9.621,6.635,14.656,3.584C367.637,323.712,380.992,320,394.667,320c41.173,0,74.667,33.493,74.667,74.667
                                                c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667C490.667,341.739,447.595,298.667,394.667,298.667z"></path>
                                        </g>
                                    </g>
                                        <g>
                                        <g>
                                            <path d="M145.707,312.512c-14.955-9.045-32.149-13.845-49.707-13.845c-52.928,0-96,43.072-96,96
                                                c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667C21.333,353.493,54.827,320,96,320
                                                c13.675,0,27.029,3.712,38.635,10.752c5.013,3.051,11.584,1.451,14.656-3.584C152.363,322.133,150.741,315.584,145.707,312.512z"></path>
                                        </g>
                                    </g>
                                    </svg>
                                </div>
                                <h4 class="fs-20 font-weight-semi-bold pt-3">Quick identification</h4>
                            </div><!-- end info-icon-box -->
                        </div><!-- end col-lg-4 -->
                    </div><!-- end row -->
                    <div class="btn-box">
                        <a href="#" class="btn theme-btn">SINGUP <i class="la la-arrow-right icon ml-1"></i></a>
                    </div><!-- end btn-box -->
                </div><!-- end about-content -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-5 ml-auto">
                <div class="generic-img-box">
                    <img src="{{asset('frontend/images/hero.png')}}" data-src="images/img13.jpg" alt="About image" class="img__item img__item-1 lazy">
                </div><!-- end generic-img-box -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end about-area -->
<!--======================================
        END ABOUT AREA
======================================-->


<div class="section-block"></div>
<!--======================================
        START CTA AREA
======================================-->
<!--======================================
        START FEATURE AREA
 ======================================-->
<section class="feature-area  theme-btn pt-30px pb-90px">
    <div class="container">
        <div class="row feature-content-wrap">
            <div class="col-lg-3 responsive-column-half">
                <div class="info-box">
                    <div class="info-overlay"></div>
                    <div class="icon-element mx-auto shadow-sm">
                        
                        <svg class="svg-icon-color-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="45" height="45">
                        <path d="M13 2L3 14h8v8l10-12h-8V2z"/>
                        </svg>
                    </div>
                    <h3 class="info__title">Instant Creation</h3>
                </div><!-- end info-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="info-box">
                    <div class="info-overlay"></div>
                    <div class="icon-element mx-auto shadow-sm">
                            <svg class="svg-icon-color-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="45" height="45">
                            <path d="M12 2l2.09 4.26L18.18 7l-3.09 3.01L15.64 14 12 12.27 8.36 14l.55-3.99L5.82 7l4.09-.74L12 2z"/>
                            <path d="M4 22l4-2 4 2 4-2 4 2v-3l-4-2-4 2-4-2-4 2v3z"/>
                            </svg>
                    </div>
                    <h3 class="info__title">Perfect Quality</h3>
                </div><!-- end info-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="info-box">
                    <div class="info-overlay"></div>
                    <div class="icon-element mx-auto shadow-sm">
                        <svg class="svg-icon-color-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50" height="50">
                        <path d="M12 2C8.134 2 5 5.134 5 9c0 4.5 5.5 10.75 6.686 12.014a1 1 0 0 0 1.627 0C13.5 19.75 19 13.5 19 9c0-3.866-3.134-7-7-7zm0 15.485c-1.125-1.431-5-6.85-5-8.485a5 5 0 1 1 10 0c0 1.635-3.875 7.054-5 8.485z"/>
                        <circle cx="12" cy="9" r="2.5"/>
                        </svg>
                    </div>
                    <h3 class="info__title">Tracking System</h3>
                </div><!-- end info-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="info-box">
                    <div class="info-overlay"></div>
                    <div class="icon-element mx-auto shadow-sm">
                        <svg class="svg-icon-color-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50" height="50">
                        <path d="M12 2l7 3v5c0 5.5-3.5 10.75-7 13-3.5-2.25-7-7.5-7-13V5l7-3zm0 2.18L7 5.6v4.32c0 4.5 2.75 8.75 5 10.68 2.25-1.93 5-6.18 5-10.68V5.6l-5-1.42zm0 8.32a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm-1.25-2.5a1.25 1.25 0 1 0 2.5 0 1.25 1.25 0 0 0-2.5 0z"/>
                        </svg>
                    </div>
                    <h3 class="info__title">Premium Support</h3>
                </div><!-- end info-box -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end feature-area -->
<!--======================================
       END FEATURE AREA
======================================-->
<div class="section-block"></div>


<!--======================================
        START ABOUT AREA
======================================-->
<section class="register-area section-padding dot-bg overflow-hidden" id="about-area-select">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="card card-item">
                <div class="generic-img-box">
                    <img src="{{asset('frontend/images/about.png')}}" data-src="images/img13.jpg" alt="About image" class="img__item img__item-1 lazy">
                </div><!-- end generic-img-box -->
                </div><!-- end card -->
            </div><!-- end col-lg-5 -->
            <div class="col-lg-6 ml-auto">
                <div class="register-content">
                    <div class="section-heading">
                        <h3 class="ribbon ribbon-lg mb-2">About</h3>
                        <h2 class="section__title">WHY CHOOSE US</h2>
                        <span class="section-divider"></span>
                        <p class="section__desc">Choose us because we offer a hassle-free experience with our flat rate shipping labels. With straightforward pricing, transparent system for tracking, and flexibility for packages of all sizes, you can trust us to simplify your shipping process and provide a cost-effective solution without any hidden surprises.</p>
                    </div><!-- end section-heading -->
                    <div class="btn-box pt-35px">
                        <a href="#" class="btn theme-btn"><i class="la la-money mr-1"></i>Recharge</a>
                    </div>
                </div><!-- end register-content -->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end ABOUT-area -->
<!--======================================
        END ABOUT AREA
======================================-->

<div class="section-block"></div>

<!-- ================================
       START HOW TO WORK AREA
================================= -->
<section class="client-logo-area section-padding position-relative overflow-hidden text-center">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    
    
    <div class="container">
        <div class="section-heading">
            <h2 class="section__title">How It Works </h2>
            <span class="section-divider"></span>
            <p class="section__desc ">
            Our operational approach involves procuring preferential-rate labels from prominent carriers,
            </p>
            <p class="section__desc ">
            which we subsequently extend to our valued customers.             </p>
        </div><!-- end section-heading -->
         <div class="row">
            <div class="col-lg-4 responsive-column-half">
                <div class="card card-item hover-s text-center">
                    <div class="card-body">
                        <img src="{{asset('frontend/images/step-3.png')}}" data-src="images/small-img-2.jpg" alt="card image" class="img-fluid rounded-full lazy">
                        <h5 class="card-title pt-4 pb-2">Create Shipping Label</h5>
                        <p class="card-text">You have the option to create shipping labels easily either by filling out a form or by uploading a CSV file.</p>
                        <div class="btn-box mt-20px">
                            <a href="become-a-teacher.html" class="btn theme-btn theme-btn-sm theme-btn-white lh-30"><i class="la la-user mr-1"></i>Start Label</a>
                        </div><!-- end btn-box -->
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column-half">
                <div class="card card-item hover-s text-center">
                    <div class="card-body">
                        <img src="{{asset('frontend/images/step-2.png')}}" data-src="images/small-img-3.jpg" alt="card image" class="img-fluid rounded-full lazy">
                        <h5 class="card-title pt-4 pb-2">Download Shipping Label</h5>
                        <p class="card-text">Subsequently, you can acquire the shipping label directly from your dashboard by clicking on download link.</p>
                        <div class="btn-box mt-20px">
                            <a href="admission.html" class="btn theme-btn theme-btn-sm theme-btn-white lh-30"><i class="la la-file-text-o mr-1"></i>Download Label</a>
                        </div><!-- end btn-box -->
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column-half">
                <div class="card card-item hover-s text-center">
                    <div class="card-body">
                        <img src="{{asset('frontend/images/step-3.png')}}" data-src="images/small-img-4.jpg" alt="card image" class="img-fluid rounded-full lazy">
                        <h5 class="card-title pt-4 pb-2">Ready to Ship</h5>
                        <p class="card-text">Affix the label onto your parcel/Package so it can be shipped using specific courier service.</p>
                        <div class="btn-box mt-20px">
                            <a href="for-business.html" class="btn theme-btn theme-btn-sm theme-btn-white lh-30"><i class="la la-briefcase mr-1"></i>Ready to Ship Label</a>
                        </div><!-- end btn-box -->
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
       
    </div><!-- end container -->
</section><!-- end client-logo-area -->
<!-- ================================
       START  HOW TO WORK  AREA
================================= -->


<!-- ================================
       START PLAN AREA
================================= -->
<section class="client-logo-area section--padding position-relative overflow-hidden text-center" id="recharge-area-select">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    
    
    <div class="container">
        <div class="section-heading">
            <h3 class="ribbon ribbon-lg mb-2">Recharge Options</h3>
            <h2 class="section__title">Recharge Your Balance </h2>
            <span class="section-divider "></span>
            <p class="section__desc pb-4">
                Discover the perfect solution for your shipping needs, and explore our range of recharge options to suit you best.
            </p>
            
        </div><!-- end section-heading -->
            <div class="row row-cols-1 row-cols-lg-3">
                <!-- Free Tier -->
                <div class="col">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-header bg-danger py-3">
                            <h5 class="card-title text-white text-uppercase text-center">Free</h5>
                            <h6 class="card-price text-white text-center">$0<span class="term">/month</span></h6>
                        </div>
                        <div class="card-body" style="background-color: #f7f7f7;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>We offer 0% discount.</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>You get $20.00</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>No Additional Fees</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>Premium Support</li>
                                <li class="list-group-item text-secondary"><i class='bx bx-x me-2 font-18'></i>Flat Rate Shipping Labels</li>
                            </ul>
                            <div class="d-grid"> <a href="#" class="btn btn-danger my-2 radius-30">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Plus Tier -->
                <div class="col">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-header bg-primary py-3">
                            <h5 class="card-title text-white text-uppercase text-center">Plus</h5>
                            <h6 class="card-price text-white text-center">$9<span class="term">/month</span></h6>
                        </div>
                        <div class="card-body " style="background-color: #f7f7f7;">
                            <ul class="list-group list-group-flush" >
                               <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>We offer 0% discount.</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>You get $20.00</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>No Additional Fees</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>Premium Support</li>
                                <li class="list-group-item text-secondary"><i class='bx bx-x me-2 font-18'></i>Flat Rate Shipping Labels</li>
                            </ul>
                            <div class="d-grid"> <a href="#" class="btn btn-primary my-2 radius-30">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pro Tier -->
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-warning py-3">
                            <h5 class="card-title text-dark text-uppercase text-center">Pro</h5>
                            <h6 class="card-price text-center">$49<span class="term">/month</span></h6>
                        </div>
                        <div class="card-body" style="background-color: #f7f7f7;">
                            <ul class="list-group list-group-flush">
                               <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>We offer 0% discount.</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>You get $20.00</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>No Additional Fees</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>Premium Support</li>
                                <li class="list-group-item text-secondary"><i class='bx bx-x me-2 font-18'></i>Flat Rate Shipping Labels</li>
                            </ul>
                            <div class="d-grid"> <a href="#" class="btn btn-warning my-2 radius-30">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 pt-30px row-cols-lg-3">
                <!-- Free Tier -->
                <div class="col">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-header bg-danger py-3">
                            <h5 class="card-title text-white text-uppercase text-center">Free</h5>
                            <h6 class="card-price text-white text-center">$0<span class="term">/month</span></h6>
                        </div>
                        <div class="card-body" style="background-color: #f7f7f7;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>We offer 0% discount.</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>You get $20.00</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>No Additional Fees</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>Premium Support</li>
                                <li class="list-group-item text-secondary"><i class='bx bx-x me-2 font-18'></i>Flat Rate Shipping Labels</li>
                                
                            </ul>
                            <div class="d-grid"> <a href="#" class="btn btn-danger my-2 radius-30">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Plus Tier -->
                <div class="col">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-header bg-primary py-3">
                            <h5 class="card-title text-white text-uppercase text-center">Plus</h5>
                            <h6 class="card-price text-white text-center">$9<span class="term">/month</span></h6>
                        </div>
                        <div class="card-body" style="background-color: #f7f7f7;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>We offer 0% discount.</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>You get $20.00</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>No Additional Fees</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>Premium Support</li>
                                <li class="list-group-item text-secondary"><i class='bx bx-x me-2 font-18'></i>Flat Rate Shipping Labels</li>
                            </ul>
                            <div class="d-grid"> <a href="#" class="btn btn-primary my-2 radius-30">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pro Tier -->
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-warning py-3">
                            <h5 class="card-title text-dark text-uppercase text-center">Pro</h5>
                            <h6 class="card-price text-center">$49<span class="term">/month</span></h6>
                        </div>
                        <div class="card-body" style="background-color: #f7f7f7;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>We offer 0% discount.</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>You get $20.00</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>No Additional Fees</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>Premium Support</li>
                                <li class="list-group-item text-secondary"><i class='bx bx-x me-2 font-18'></i>Flat Rate Shipping Labels</li>
                            </ul>
                            <div class="d-grid"> <a href="#" class="btn btn-warning my-2 radius-30">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
    </div><!-- end container -->
</section><!-- end PLAN-area -->




<!--======================================
        START HELP AREA
======================================-->
<section class="register-area section-padding dot-bg overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="card card-item">
                <div class="generic-img-box">
                    <img src="{{asset('frontend/images/pricing-support.png')}}" data-src="images/img13.jpg" alt="About image" class="img__item img__item-1 lazy">
                </div><!-- end generic-img-box -->
                </div><!-- end card -->
            </div><!-- end col-lg-5 -->
            <div class="col-lg-6 ml-auto">
                <div class="register-content">
                    <div class="section-heading">
                        <h3 class="ribbon ribbon-lg mb-2">Help</h3>
                        <h2 class="section__title"> Don't Know What Plan Fits your</h2>
                        <h2 class="section__title">need ! Don't Hesitate Email Us</h2>
                        <span class="section-divider"></span>
                        <p class="section__desc">Unsure about the ideal plan for your requirements? Feel free to reach out to us. Our team is here to assist you in finding the perfect fit. Don't hesitate to contact us – we're just a phone email away.</p>
                    </div><!-- end section-heading -->
                    <div class="btn-box pt-35px">
                        <a href="#" class="btn theme-btn"><i class="la la-envelope mr-1"></i>EMAIL US</a>
                    </div>
                </div><!-- end register-content -->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end HELP-area -->
<!--======================================
        END HELP AREA
======================================-->
























<!-- ======================================
        START SUBSCRIBER AREA
======================================-->
<section class="subscriber-area  position-relative overflow-hidden" style="background-color:#E5EEFD;">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="section-heading py-4">
                    <h5 class="ribbon ribbon-lg mb-2">Subscribe</h5>
                    <h2 class="section__title mb-1">  LABELS WORLD</h2>
                    <p class="section__desc">Stay in the know on new generate label</p>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-5 -->
            <div class="col-lg-4 ml-auto">
                <form method="post" class="subscriber-form">
                    <div class="input-group">
                        <input type="email" name="email" class="form-control form--control pl-3" placeholder="Enter email address">
                        <div class="input-group-append">
                            <button class="btn theme-btn" type="button">Subscribe <i class="la la-arrow-right icon ml-1"></i></button>
                        </div>
                    </div>
                    <p class="fs-14 mt-1">
                        <i class="la la-lock mr-1"></i>Your information is safe with us!
                    </p>
                </form>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-4 ml-auto">
                <img src="{{asset('frontend/images/usps_image.png')}}" alt="">
            </div><!-- end col-lg-6 -->

        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end subscriber-area -->
<!--======================================
        END SUBSCRIBER AREA
====================================== -->

<!-- ================================
         END FOOTER AREA
================================= -->
<section class="footer-area pt-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 responsive-column-half">
                <div class="footer-item">
                    <a href="#">
                        <img src="{{asset('frontend/images/logo2.png')}}" alt="footer logo" style="width: 200px;" class="footer__logo">
                    </a>
                    <ul class="generic-list-item pt-4">
                        <li><a href="#">Get your flat rate labels today for a hassle-free experience.</a></li>
                        <li><a href="mailto:support@wbsite.com">support@website.com</a></li>
                        
                    </ul>
                    <h3 class="fs-20 font-weight-semi-bold pt-4 pb-2">We are on</h3>
                    <ul class="social-icons social-icons-styled">
                        <li class="mr-1"><a href="#" class="facebook-bg"><i class="la la-facebook"></i></a></li>
                        <li class="mr-1"><a href="#" class="twitter-bg"><i class="la la-twitter"></i></a></li>
                        <li class="mr-1"><a href="#" class="instagram-bg"><i class="la la-instagram"></i></a></li>
                        <li class="mr-1"><a href="#" class="linkedin-bg"><i class="la la-linkedin"></i></a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-20 font-weight-semi-bold">Quick Links</h3>
                    <span class="section-divider section--divider"></span>
                    <ul class="generic-list-item">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Recharge</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-20 font-weight-semi-bold">Support</h3>
                    <span class="section-divider section--divider"></span>
                    <ul class="generic-list-item">
                        <li><a href="#">support@labelsbank.com</a></li>
                        
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
           
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="section-block"></div>
    <div class="copyright-content py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p class="copy-desc">&copy; 2021. All Rights Reserved. by <a href="https://techydevs.com/">M-Imran</a></p>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-end">
                        <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14">
                            <li class="mr-3"><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                            <li class="mr-3"><a href="privacy-policy.html">Privacy Policy</a></li>
                        </ul>
                        <div class="select-container select-container-sm">
                            <select class="select-container-select">
                                <option value="1">English</option>
                                <option value="2">Deutsch</option>
                                <option value="3">Español</option>
                                <option value="4">Français</option>
                                <option value="5">Bahasa Indonesia</option>
                                <option value="6">Bangla</option>
                                <option value="7">日本語</option>
                                <option value="8">한국어</option>
                                <option value="9">Nederlands</option>
                                <option value="10">Polski</option>
                                <option value="11">Português</option>
                                <option value="12">Română</option>
                                <option value="13">Русский</option>
                                <option value="14">ภาษาไทย</option>
                                <option value="15">Türkçe</option>
                                <option value="16">中文(简体)</option>
                                <option value="17">中文(繁體)</option>
                                <option value="17">Hindi</option>
                            </select>
                        </div>
                    </div>
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end copyright-content -->
</section><!-- end footer-area -->
<!-- ================================
          END FOOTER AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="la la-arrow-up" title="Go top"></i>
</div>

<!-- end scroll top -->




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