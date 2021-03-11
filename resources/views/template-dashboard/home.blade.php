<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Skydash Admin</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="{{asset('skydash/vendors/feather/feather.css')}}">
	<link rel="stylesheet" href="{{asset('skydash/vendors/ti-icons/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('skydash/vendors/css/vendor.bundle.base.css')}}">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="{{asset('skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
	<link rel="stylesheet" href="{{asset('skydash/vendors/ti-icons/css/themify-icons.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('skydash/js/select.dataTables.min.css')}}">
	<link rel="stylesheet" href="{{asset('skydash/vendors/select2/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('skydash/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="{{asset('skydash/css/vertical-layout-light/style.css')}}">
	<!-- endinject -->
	<link rel="shortcut icon" href="{{asset('skydash/images/favicon.png')}}" />
</head>

<body>
	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		@include('template-dashboard.navbar')
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:partials/_settings-panel.html -->
			@include('template-dashboard.setting')
			<!-- partial -->
			<!-- partial:partials/_sidebar.html -->
			@include('template-dashboard.sidebar')
			<!-- partial -->
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="row">
						<div class="col-md-12 grid-margin">
							<div class="row">
								<div class="col-12 col-xl-8 mb-4 mb-xl-0">
									<h3 class="font-weight-bold">@yield('judul')</h3>
									<h6 class="font-weight-normal mb-0">All systems are running smoothly! Hopefuly you have <span
											class="text-primary">a great day!</span></h6>
								</div>
							</div>
						</div>
					</div>
					@yield('content') 
				</div>
				<!-- content-wrapper ends -->
				<!-- partial:partials/_footer.html -->
				@include('template-dashboard.footer')
				<!-- partial -->
				@include('sweetalert::alert')
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->

	<!-- plugins:js -->
	<script src="{{asset('skydash/vendors/js/vendor.bundle.base.js')}}"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<script src="{{asset('skydash/vendors/chart.js/Chart.min.js')}}"></script>
	<script src="{{asset('skydash/vendors/datatables.net/jquery.dataTables.js')}}"></script>
	<script src="{{asset('skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
	<script src="{{asset('skydash/js/dataTables.select.min.js')}}"></script>

	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="{{asset('skydash/js/off-canvas.js')}}"></script>
	<script src="{{asset('skydash/js/hoverable-collapse.js')}}"></script>
	<script src="{{asset('skydash/js/template.js')}}"></script>
	<script src="{{asset('skydash/js/settings.js')}}"></script>
	<script src="{{asset('skydash/js/todolist.js')}}"></script>
	<!-- endinject -->
	<!-- Custom js for this page-->
	<script src="{{asset('skydash/js/dashboard.js')}}"></script>
	<script src="{{asset('skydash/js/Chart.roundedBarCharts.js')}}"></script>
	<script src="{{asset('skydash/vendors/select2/select2.min.js')}}"></script>
	<script src="{{asset('skydash/js/select2.js')}}"></script>
	<script src="{{asset('skydash/js/file-upload.js')}}"></script>
	<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
	<script>
			CKEDITOR.replace( 'content' );
	</script>
	<!-- End custom js for this page-->
</body>

</html>