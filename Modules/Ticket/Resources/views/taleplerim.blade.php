<!DOCTYPE html>
<html lang="en">

	<head>

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
    
					<div>
						<h2 class="main-content-title tx-24 mg-b-5">Destek</h2>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0);">Uygulamalar</a></li>
							<li class="breadcrumb-item active" aria-current="page">Destekler</li>
						</ol>
					</div>
					<div class="btn-list"> 
						<a class="btn ripple btn-secondary" href="create-support.html"><i class="fa fa-plus"></i> Yeni Destek Talebi</a>
						<a class="btn ripple btn-info"  href="my-supports.html" ><i class="fe fe-help-circle"></i> Taleplerim</a>
						<a class="btn ripple btn-danger "  href="index.html" ><i class="fe fe-power"></i> SSS</a>
						 
					</div>
				</div>
					<div class="row">

						 <div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-6  col-xxl-6 ">
							<div class="card custom-card">
								<div class="main-content-app pt-0">
									<div class="main-content-left main-content-left-chat">
										<div class="card-body">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Search ...">
												<span>
													<button class="btn ripple btn-primary" type="button">Search</button>
												</span>
											</div>
										</div>
										<nav class="nav main-nav-line main-nav-line-chat card-body flex-md-row" role="tablist">
											<a class="nav-link active" data-bs-toggle="tab" href="javascript:void(0);" aria-selected="true" role="tab">Açık Talepler</a> 
											<a class="nav-link " data-bs-toggle="tab" href="javascript:void(0);" aria-selected="true" role="tab">Sonuçlananlar</a> 
										</nav>
                                            <div>
                                                {{ csrf_field() }}
                                                @foreach($mesajlar as $mesajlar)
                                                <div class="media">
                                                    <div class="main-img-user"><img alt="avatar" src="../assets/img/users/3.jpg"></div>
                                                    <div class="media-body">
                                                        <div class="media-contact-name">
                                                            <span>{{$mesajlar->id}}</span> <span>{{$mesajlar->created_at}}</span>
                                                        </div>
                                                        <p>{{$mesajlar->text}}</p>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>

										<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 591px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 409px;"></div></div></div><!-- main-chat-list -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-6  col-xxl-6">
							<div class="card custom-card">
								<div class="main-content-app pt-0">
									<div class="main-content-body main-content-body-chat">
										<div class="main-chat-header pt-3">
											<div class="main-img-user online"><img alt="avatar" src="../assets/img/users/1.jpg"></div>
											<div class="main-chat-msg-name">
												<h6>Sonia Taylor</h6>
												<span class="dot-label bg-success"></span><small class="me-3">online</small>
											</div>
											<nav class="nav">
											 
												<a class="nav-link" data-bs-toggle="tooltip" href="javascript:void(0);" aria-label="Phone Call" data-bs-original-title="Phone Call"><i class="fe fe-phone-call"></i></a> 
												<a class="nav-link" data-bs-toggle="tooltip" href="javascript:void(0);" aria-label="Delete" data-bs-original-title="Talebim Sonuçlandı"><i class="fe fe-trash-2"></i> Talebim Sonuçlandı</a>
											</nav>
										</div><!-- main-chat-header -->


										<div class="main-chat-body ps ps--active-y" id="ChatBody">
                                            {{ csrf_field() }}
                                            @foreach($mesajlar as $mesajlar)
											<div class="content-inner">
												
												<div class="media flex-row-reverse">
													<div class="main-img-user online"><img alt="avatar" src="../assets/img/users/2.jpg"></div>
													<div class="media-body">
														<div class="main-msg-wrapper">
															{{$mesajlar-id}}
														</div>
														<div class="main-msg-wrapper-1">
															{{$mesajlar-text}}
														</div>
														<div>
															<span>$mesajlar-created_at</span> <a href="javascript:void(0);"><i class="icon ion-android-more-horizontal"></i></a>
														</div>
													</div>
												</div>
											</div>
                                        </div>    


										<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 608px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 351px;"></div></div></div>
										
                                        
                                        <div class="main-chat-footer rounded-top-0">
											<nav class="nav">
												<a class="nav-link" data-bs-toggle="tooltip" href="javascript:void(0);" aria-label="Add Photo" data-bs-original-title="Add Photo"><i class="fe fe-image"></i></a>
												<a class="nav-link" data-bs-toggle="tooltip" href="javascript:void(0);" aria-label="Attach a File" data-bs-original-title="Attach a File"><i class="fe fe-paperclip"></i></a>
											 </nav>
											<input class="form-control" placeholder="Type your message here..." type="text">
											<a class="main-msg-send" href="javascript:void(0);"><i class="fa fa-paper-plane"></i></a>
										</div>
									
                                    
                                    </div>
								</div>
							</div>
						</div>
				
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

