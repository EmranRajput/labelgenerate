<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('backend/images/labelworldlogo.png')}}" type="image/png" />
	<!--plugins-->
	<link href="{{asset('backend/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('backend/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('backend/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{asset('backend/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/icons.css')}}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('backend/css/dark-theme.css')}}" />
	<link rel="stylesheet" href="{{asset('backend/css/semi-dark.css')}}" />
	<link rel="stylesheet" href="{{asset('backend/css/header-colors.css')}}" />
    <title> @yield('title') | LabelsWorld</title></head>
<style>
    .logo-text{
        color: #ec5252;
    }
</style>




<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
        @include('user.body.sidebar')
	
		<!--end sidebar wrapper -->
		<!--start header -->
         @include('user.body.header')
		
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
             @yield('user')
			
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
         @include('user.body.footer')


        @include('notification.notification_alert')

		
	</div>
	<!--end wrapper-->

	



	
	<!-- Bootstrap JS -->
	<script src="{{asset('backend/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{asset('backend/js/jquery.min.js')}}"></script>
	<script src="{{asset('backend/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('backend/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('backend/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{asset('backend/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
	<script src="{{asset('backend/js/widgets.js')}}"></script>
	<!--app JS-->
	<script src="{{asset('backend/js/app.js')}}"></script>
</body>

</html>