<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Pannel</title>

    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('backend/assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')  }}">



</head>
<body class=" ">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->

	<!-- [ navigation menu ] start -->

@include('admin.layouts.navigation')


	<!-- [ navigation menu ] end -->


	<!-- [ Header ] start -->

@include('admin.layouts.header')

	<!-- [ Header ] end -->



<!-- [ Main Content ] start -->




@include('admin.layouts.dashboard')


<!-- [ Main Content ] end -->





    <!-- Required Js -->
    <script src="{{ asset('backend/assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/ripple.js') }}"></script>
    <script src="{{ asset('backend/assets/js/pcoded.min.js') }}"></script>

<!-- Apex Chart -->
<script src="{{ asset('backend/assets/js/plugins/apexcharts.min.js') }}"></script>


<!-- custom-chart js -->
<script src="{{ asset('backend/assets/js/pages/dashboard-main.js') }}"></script>
</body>

</html>
