<nav class="sidebar sidebar-offcanvas" id="sidebar">
				<ul class="nav">
					@if(auth()->user()->role == 'Administrator') 
					<li class="nav-item">
						<a class="nav-link" href="/dashboard">
							<i class="icon-grid menu-icon"></i>
							<span class="menu-title">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false"
							aria-controls="user">
							<i class="icon-layout menu-icon"></i>
							<span class="menu-title">User</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="user">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link"
										href="/dashboard/user">List User</a></li>
								<li class="nav-item"> <a class="nav-link"
										href="/dashboard/user/create">Tambah User</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
							aria-controls="ui-basic">
							<i class="icon-layout menu-icon"></i>
							<span class="menu-title">Category</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="ui-basic">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link"
										href="/dashboard/category">List Category</a></li>
								<li class="nav-item"> <a class="nav-link"
										href="/dashboard/category/create">Tambah Category</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#tag" aria-expanded="false"
							aria-controls="tag">
							<i class="icon-layout menu-icon"></i>
							<span class="menu-title">Tag</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="tag">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link"
										href="/dashboard/tag">List Tag</a></li>
								<li class="nav-item"> <a class="nav-link"
										href="/dashboard/tag/create">Tambah Tag</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#post" aria-expanded="false"
							aria-controls="post">
							<i class="icon-layout menu-icon"></i>
							<span class="menu-title">Post</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="post">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link"
										href="/dashboard/post">List Post</a></li>
								<li class="nav-item"> <a class="nav-link"
										href="/dashboard/post/create">Tambah Post</a></li>
								<li class="nav-item"> <a class="nav-link"
										href="/dashboard/post/hapus">List Post Trashed</a></li>
							</ul>
						</div>
					</li>
					@endif
					@if(auth()->user()->role == 'Author') 
					<li class="nav-item">
						<a class="nav-link" href="/dashboard">
							<i class="icon-grid menu-icon"></i>
							<span class="menu-title">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#post" aria-expanded="false"
							aria-controls="post">
							<i class="icon-layout menu-icon"></i>
							<span class="menu-title">Post</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="post">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link"
										href="/dashboard/author/post">List Post</a></li>
								<li class="nav-item"> <a class="nav-link"
										href="/dashboard/author/post/create">Tambah Post</a></li>
							</ul>
						</div>
					</li>
					@endif
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#halaman" aria-expanded="false"
							aria-controls="halaman">
							<i class="icon-layout menu-icon"></i>
							<span class="menu-title">Halaman</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="halaman">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link"
										href="/akun">Akun</a></li>
								<li class="nav-item"> <a class="nav-link"
										href="/">Homepage</a></li>
								<li class="nav-item"> <a class="nav-link"
										href="/blog">Blog List</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</nav>