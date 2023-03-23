


<!DOCTYPE html>
<html lang="en">

	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Dashlead - Admin Panel HTML Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords"
		content="sales dashboard, admin dashboard, bootstrap 5 admin template, html admin template, admin panel design, admin panel design, bootstrap 5 dashboard, admin panel template, html dashboard template, bootstrap admin panel, sales dashboard design, best sales dashboards, sales performance dashboard, html5 template, dashboard template">

		<!-- Favicon -->
		<link rel="icon" href="{{url('assets/img/brand/favicon.ico')}}" type="image/x-icon">

		<!-- Title -->
		<title>Dashlead - Admin Panel HTML Dashboard Template</title>

		<!---bootstrap css-->
		<link id="style" href="{{ url('assets/img/brand/favicon.ico')}}" rel="stylesheet">

		<!--- FONT-ICONS CSS -->
		<link href="{{url('assets/css/icons.css')}}" rel="stylesheet">

		<!---Style css-->
		<link href="{{url('assets/css/style.css') }}" rel="stylesheet">

		<!---Plugins css-->
		<link href="{{url('assets/css/plugins.css')}}" rel="stylesheet">

		<!-- Switcher css -->
		<link href=" {{url('assets/switcher/css/switcher.css')}}" rel="stylesheet">
		<link href=" {{url('assets/switcher/demo.css')}}" rel="stylesheet">

	</head>

	<body class="app sidebar-mini">

		<!-- Loader -->
		<div id="global-loader">
			<img src="{{url('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- End Loader -->

		<!-- Page -->
			<div class="page">
			
				<!--Main Header -->

				<div class="container-fluid main-container">

					<div>
						<h2 class="main-content-title tx-24 mg-b-5">Destek</h2>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0);">Uygulamalar</a></li>
							<li class="breadcrumb-item active" aria-current="page">Destekler</li>
						</ol>
					</div>
					<div class="btn-list"> 
						<a class="btn ripple btn-info" href="http://127.0.0.1:8000/ticket/admin/mesajlarforadmin" ><i class="fe fe-help-circle"></i> Gelen Sorular</a>
						<a class="btn ripple btn-danger "  href="http://127.0.0.1:8000/ticket/admin" ><i class="fe fe-power"></i> Ticketlar</a>

					</div>
				</div>
					<div class="row">
						@foreach($tickets as $tickets)
						<div class="col-lg-6">
							<div class="card card-aside custom-card">
								<div class="card-body">
									<div class="card-header custom-card-header">
										<h5 class="card-title tx-dark tx-medium mb-0">{{$tickets->brief}}</h5>
									</div>

									<div class="card-body">
										<blockquote class="blockquote mb-0 text-start">
											<p>
												{{$tickets->explaining}}
											</p>
											
										</blockquote>

										<div class="d-flex align-items-center pt-3 mt-auto">

											<div class="ms-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-thumbs-up"></i></a>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>

			<!-- End Page -->

			<!-- Back-to-top -->
			<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

			<!-- Jquery js-->
			<script src="{{url('assets/plugins/jquery/jquery.min.js')}}"></script>

			<!-- Bootstrap js-->
			<script src="{{url('assets/plugins/bootstrap/popper.min.js')}}"></script>
			<script src="{{url('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
			

			<!-- Perfect-scrollbar js-->
			<script src="{{url('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
			<script src="{{url('assets/plugins/perfect-scrollbar/p-scroll-1.js')}}"></script>
			

			<!-- Sidemenu js-->
			<script src="{{url('assets/plugins/sidemenu/sidemenu.js')}}"></script>
			

			<!-- Sidebar js-->
			<script src="{{url('assets/plugins/sidebar/sidebar.js')}}"></script>
			

			<!-- Sticky js-->
			<script src="{{url('assets/js/sticky.js')}}"></script>
			

			<!-- Custom-Switcher js -->
			<script src="{{url('assets/js/custom-switcher.js')}}"></script>
			

			<!-- Custom js-->
			<script src="{{url('assets/js/custom.js')}}"></script>
			

			<!-- Switcher js -->
			<script src="{{url('assets/switcher/js/switcher.js')}}"></script>

	</body>

</html>


