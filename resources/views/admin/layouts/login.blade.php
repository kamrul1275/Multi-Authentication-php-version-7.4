<!DOCTYPE html>
<html lang="en">

<head>

	<title>Admin Login</title>

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
	<link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">




</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Signin</h4>


                         {{--  show error msg start  --}}

                         @if ($errors->any())
                         <div class="alert alert-danger">
                             <ul>
                                 @foreach ($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                 @endforeach
                             </ul>
                         </div>
                     @endif



                     @if(Session::has('Message'))
                       <h4 class="text-danger">{{ Session::get('Message') }}</h4>
                     @endif
                         {{--  show error msg end  --}}

             <form action="{{ url('/admin/login') }}" method="POST">
                @csrf
						<div class="form-group mb-3">
							<label class="floating-label " for="Email">Email address</label>
							<input type="email" class="form-control" name="email"  id="Email" placeholder="email..">
						</div>

						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Password</label>
							<input type="password" class="form-control
                            mt-3" name="password" id="Password" placeholder="password..">
						</div>

						<div class="custom-control custom-checkbox text-left mb-4 mt-2">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1">Save credentials.</label>
						</div>

						<button class="btn btn-block btn-primary mb-4">Signin</button>
              </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="{{ asset('backend/assets/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/ripple.js') }}"></script>
<script src="{{ asset('backend/assets/js/pcoded.min.js') }}"></script>

</body>

</html>
