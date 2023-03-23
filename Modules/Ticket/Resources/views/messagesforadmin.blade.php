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
		<link src="{{url('assets/img/brand/favicon.ico')}}">
		

		<!-- Title -->
		
		<title>Dashlead - Admin Panel HTML Dashboard Template</title>

		<!---bootstrap css-->
		<link src="{{url('assets/plugins/bootstrap/css/bootstrap.min.css')}}"rel="stylesheet">

		<!--- FONT-ICONS CSS -->
		<link src="{{url('assets/css/icons.css')}}"rel="stylesheet">
		

		<!---Style css-->
		<link src="{{url('assets/css/style.css')}}"rel="stylesheet">
		

		<!---Plugins css-->
		<link src="{{url('assets/css/plugins.css')}}"rel="stylesheet">
		

		<!-- Switcher css -->
		<link src="{{url('assets/switcher/css/switcher.css')}}"rel="stylesheet">
		<link src="{{url('assets/switcher/demo.css')}}"rel="stylesheet">
		

	</head>

	<body class="app sidebar-mini">

		

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
							<li class="breadcrumb-item active" aria-current="page">Destekler</li>
						</ol>
					</div>
					<div class="btn-list"> 
						<a class="btn ripple btn-info"  href="http://127.0.0.1:8000/ticket/admin/mesajlarforadmin" ><i class="fe fe-help-circle"></i> Gelen Sorular</a>
						<a class="btn ripple btn-danger "  href="http://127.0.0.1:8000/ticket/admin" ><i class="fe fe-power"></i> Ticketlar</a>
						 
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
										<div class="main-chat-list ps ps--active-y" id="ChatList">
											@foreach($mesajlar as $mesaj)
											<div class="media">
												<div class="main-img-user">
													<img alt="avatar" src="{{url('assets/img/users/3.png')}}">
												</div>
												<div class="media-body">
													<div class="media-contact-name">
														<span></span> <span>{{$mesaj->created_at}}</span>
													</div>
													<p>{{$mesaj->text}}</p>
												</div>
											</div>
											<a href="http://127.0.0.1:8000/ticket/admin/mesajlarforadmin/{{ $mesaj->id }}/{{ $mesaj->sender_id }}">Cevap Yaz</a>
											@endforeach
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
											<div class="main-img-user online"><img alt="avatar" src="{{url('assets/img/users/1.jpg')}}"></div>
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
											<div class="content-inner">
												
												
												@foreach($mesajlar as $mesaj)
												<div class="media">
													<div class="main-img-user online"><img alt="avatar" src="{{url('assets/img/users/1.jpg')}}"></div>
													<div class="media-body">
														<div class="main-msg-wrapper">
															{{$mesaj->text}}
														</div>
														<div>
															<span>{{$mesaj->created_at}}</span> <a href="javascript:void(0);"><i class="icon ion-android-more-horizontal"></i></a>
														</div>
													</div>
												</div>
												@endforeach
												
												
												
											</div>
										<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 608px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 351px;"></div></div></div>
										
										<form action="http://127.0.0.1:8000/ticket/admin/sendMessageFromAdmin/{{$mesaj->sender_id}}" method="post">
											{{ csrf_field() }}
											<div class="main-chat-footer rounded-top-0">
											<nav class="nav">
												<a class="nav-link" data-bs-toggle="tooltip" href="javascript:void(0);" aria-label="Add Photo" data-bs-original-title="Add Photo"><i class="fe fe-image"></i></a>
												<a class="nav-link" data-bs-toggle="tooltip" href="javascript:void(0);" aria-label="Attach a File" data-bs-original-title="Attach a File"><i class="fe fe-paperclip"></i></a>
											 </nav>
											<input class="form-control" name="text" placeholder="Type your message here..." type="text">
											<button type="submit" class="main-msg-send" ><i class="fa fa-paper-plane"></i></button>
										</div>
										</form>

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

