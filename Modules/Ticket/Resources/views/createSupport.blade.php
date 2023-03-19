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
		<link rel="icon" href="../assets/img/brand/favicon.ico" type="image/x-icon">

		<!-- Title -->
		<title>Dashlead - Admin Panel HTML Dashboard Template</title>

		<!---bootstrap css-->
		<link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!--- FONT-ICONS CSS -->
		<link href="../assets/css/icons.css" rel="stylesheet">

		<!---Style css-->
		<link href="../assets/css/style.css" rel="stylesheet">

		<!---Plugins css-->
		<link href="../assets/css/plugins.css" rel="stylesheet">

		<!-- Switcher css -->
		<link href="../assets/switcher/css/switcher.css" rel="stylesheet">
		<link href="../assets/switcher/demo.css" rel="stylesheet">

	</head>

	<body class="app sidebar-mini">

		<!-- Loader -->
		<div id="global-loader">
			<img src="../assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- End Loader -->

		<!-- Page -->
		<div class="page">
			<div>
				<!--Main Header -->

				<div class="container-fluid main-container">
<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5">Destek</h2>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0);">Uygulamalar</a></li>
							<li class="breadcrumb-item active" aria-current="page">Yeni Destek Talebi</li>
						</ol>
					</div>
					<div class="btn-list"> 
						<a class="btn ripple btn-secondary" href="http://127.0.0.1:8000/ticket/user/create_support"><i class="fa fa-plus"></i> Yeni Destek Talebi</a>
						<a class="btn ripple btn-info" href="http://127.0.0.1:8000/ticket/user" ><i class="fe fe-help-circle"></i> Taleplerim</a>
						<a class="btn ripple btn-danger "  href="index.html" ><i class="fe fe-power"></i> SSS</a>
						 
					</div>
				</div>
					<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Yeni Destek Talebi</h6>
									<p class="text-muted card-sub-title mt-1">Lütfen Tüm açıklamalarını belirtiniz</p>
								</div>
								<form enctype="multipart/form-data" action="http://127.0.0.1:8000/ticket/user/save_support" method="post" class="needs-validation was-validated">
									{{ csrf_field() }}
                                    <div class="row row-sm">
										
										<div class="col-lg-12 mg-t-20 mg-lg-t-0">
											<div class="form-group has-danger mg-b-0">
												<input name='brief' class="form-control" placeholder="Soru Başlığı" required="" type="text">
												<textarea name='explaining' class="form-control mg-t-20" placeholder="Detaylı açıklama" required="" rows="3"></textarea>
											</div>
										</div>
										
										<div class="col-sm-12 col-md-12 col-lg-12 mt-3">
											<div class="form-group">
												<input name='file' class="form-control" type="file" id="file">
											</div>
										</div>
									 
										<button type="submit" name="submit" class="btn btn-primary" style="width: 50%;"> Oluştur </button>
									 
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
	<div class="modal fade" id="modaldemo5">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content tx-size-sm">
					<div class="modal-body tx-center pd-y-20 pd-x-20">
						<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
								aria-hidden="true">&times;</span></button> <i
							class="icon ion-ios-checkmark-circle-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
						<h4 class="tx-success tx-semibold mg-b-20">Talebiniz oluştu!</h4>
						<p class="mg-b-20 mg-x-20">Size en kısa sürede mail yolu ile dönüş yapılacaktır. Spam kutunuzu kontrol etmeyi unutmayın!</p><button aria-label="Close"
							class="btn ripple btn-success pd-x-25" data-bs-dismiss="modal"
							type="button">Devam Et</button>
					</div>
				</div>
			</div>
		</div>
			<!-- End Page -->

			<!-- Back-to-top -->
			<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

			<!-- Jquery js-->
			<script src="../assets/plugins/jquery/jquery.min.js"></script>

			<!-- Bootstrap js-->
			<script src="../assets/plugins/bootstrap/popper.min.js"></script>
			<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

			<!-- Perfect-scrollbar js-->
			<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
			<script src="../assets/plugins/perfect-scrollbar/p-scroll-1.js"></script>

			<!-- Sidemenu js-->
			<script src="../assets/plugins/sidemenu/sidemenu.js"></script>

			<!-- Sidebar js-->
			<script src="../assets/plugins/sidebar/sidebar.js"></script>

			<!-- Sticky js-->
			<script src="../assets/js/sticky.js"></script>

			<!-- Custom-Switcher js -->
			<script src="../assets/js/custom-switcher.js"></script>

			<!-- Custom js-->
			<script src="../assets/js/custom.js"></script>

			<!-- Switcher js -->
			<script src="../assets/switcher/js/switcher.js"></script>

	</body>

</html>

