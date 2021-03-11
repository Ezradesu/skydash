<!-- SECTION -->
@include('template-blog.head')
	<div class="section">
		<!-- container -->
		<div class="container">
						<!-- row -->
			<div id="hot-post" class="row hot-post">
				
				@yield('isi')
				
				@include('template-blog.widget')
	

		</div>
	</div>
	
	@include('template-blog.footer')