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
		<link rel="icon" href="/assets/img/brand/favicon.ico" type="image/x-icon">

		<!-- Title -->
		<title>Dashlead - Admin Panel HTML Dashboard Template</title>

		<!---bootstrap css-->
		<link id="style" href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!--- FONT-ICONS CSS -->
		<link href="/assets/css/icons.css" rel="stylesheet">

		<!---Style css-->
		<link href="/assets/css/style.css" rel="stylesheet">

		<!---Plugins css-->
		<link href="/assets/css/plugins.css" rel="stylesheet">

		<!-- Switcher css -->
		<link href="/assets/switcher/css/switcher.css" rel="stylesheet">
		<link href="/assets/switcher/demo.css" rel="stylesheet">

	</head>

	<body class="app sidebar-mini">

		<!-- Loader -->
		<div id="global-loader">
			<img src="/assets/img/loader.svg" class="loader-img" alt="Loader">
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
							<li class="breadcrumb-item active" aria-current="page">Destekler</li>
						</ol>
					</div>
					<div class="btn-list"> 
						<a class="btn ripple btn-secondary" href="http://127.0.0.1:8000/ticket/ticket/user/create_support"><i class="fa fa-plus"></i> Yeni Destek Talebi</a>
						<a class="btn ripple btn-info"  href="my-supports.html" ><i class="fe fe-help-circle"></i> Taleplerim</a>
						<a class="btn ripple btn-danger "  href="index.html" ><i class="fe fe-power"></i> SSS</a>
						 
					</div>
				</div>
					

						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-6  col-xxl-6 ">
							<div class="card custom-card notification-list cart-list">
								<div class="main-content-app pt-0">
									<div class="main-content-body main-content-body-chat">
										<!-- main-chat-header -->
										<div class="main-chat-body ps ps--active-y" id="ChatBody">
											<div class="content-inner" style="height:600px;white-space: nowrap;overflow-y:scroll" >
												
												
												
												<div class="media">
													<div class="main-img-user online"><img alt="avatar" src="/assets/img/users/1.jpg"></div>
													<div class="media-body">
														<div class="main-msg-wrapper ornek">
															
														</div>
														<div>
															<span></span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
														</div>
													</div>
												</div>
												
	
											</div>
										<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 608px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 351px;"></div></div></div>
										<form action="http://127.0.0.1:8000/ticket/user/message" method="post">
											{{ csrf_field() }}
										<div class="main-chat-footer rounded-top-0">
											<nav class="nav">
												<a class="nav-link" data-bs-toggle="tooltip" href="javascript:void(0);" aria-label="Add Photo" data-bs-original-title="Add Photo"><i class="fe fe-image"></i></a>
												<a class="nav-link" data-bs-toggle="tooltip" href="javascript:void(0);" aria-label="Attach a File" data-bs-original-title="Attach a File"><i class="fe fe-paperclip"></i></a>
											 </nav>
											<input name="text" id="text"class="form-control" placeholder="Type your message here..." type="text">
											<button type="submit" class="main-msg-send"><i class="fa fa-paper-plane"></i></button>
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
			</div>

			<!-- End Page -->

			<!-- Back-to-top -->
			<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

			<!-- Jquery js-->
			<script src="/assets/plugins/jquery/jquery.min.js"></script>

			<!-- Bootstrap js-->
			<script src="/assets/plugins/bootstrap/popper.min.js"></script>
			<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

			<!-- Perfect-scrollbar js-->
			<script src="/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
			<script src="/assets/plugins/perfect-scrollbar/p-scroll-1.js"></script>

			<!-- Sidemenu js-->
			<script src="/assets/plugins/sidemenu/sidemenu.js"></script>

			<!-- Sidebar js-->
			<script src="/assets/plugins/sidebar/sidebar.js"></script>

			<!-- Sticky js-->
			<script src="/assets/js/sticky.js"></script>

			<!-- Custom-Switcher js -->
			<script src="/assets/js/custom-switcher.js"></script>

			<!-- Custom js-->
			<script src="/assets/js/custom.js"></script>

			<!-- Switcher js -->
			<script src="/assets/switcher/js/switcher.js"></script>

			<script>
    			(function ($) {
				"use strict";

				//P-scrolling
				const ps5 = new PerfectScrollbar('.notification-list', {
					useBothWheelAxes: true,
					suppressScrollX: true,
				});

				//P-scrolling
				const ps6 = new PerfectScrollbar('.cart-list', {
					useBothWheelAxes: true,
					suppressScrollX: true,
				});

				//P-scrolling
				// const ps16 = new PerfectScrollbar('.slide-menu', {
				// 	useBothWheelAxes: true,
				// 	suppressScrollX: true,
				// });
	
				$('.tabs-menu-body').each(function () { const ps = new PerfectScrollbar($(this)[0]); });

				})(jQuery);
			</script>



			<script>

					$(document).ready(function (){
						console.log('document girdi');
					
						
						setInterval(function(){
							console.log('setinterval girdi');
							$.ajax({
							
								url: '{{ url("http://127.0.0.1:8000/ticket/user/mesajlarforuser") }}',
								type: 'GET',
								dataType: 'json',
								data: { 
									_token: '{{ csrf_token() }}',
									/*mesajId: $(thisfarlateruse).data('mesajid'),
									senderId: $(thisfarlateruse).data('senderid'),*/
								},
								success: function(data) {
									// do something with the data
									
									console.log('success');
									console.log(data);
									
									$('.ornek').html(data);

									var html='';
									for(var i=0;i<data.length;i++){
										html+= '<img alt="avatar" src="/assets/img/users/1.jpg">';
										html+= '<p>' + data[i].text + '</p>';
									}
									
									$('.ornek').html(html);
									//location.reload(500);
									
								},
								error: function (xhr, status, error) {
									console.log('Error fetching new responses:', error);
								}
							});
						},1500);
						
					});


			</script>


			

	</body>

</html>

