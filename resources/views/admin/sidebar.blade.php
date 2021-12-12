<div class="container-scroller">
		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar sidebar-offcanvas" id="sidebar">
			<div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
				<a class="sidebar-brand brand-logo" href="{{url('/redirect')}}" style="color:white;">BABY'S SHOPPING</a>
			</div>
			<ul class="nav">
				<li class="nav-item profile">
					<div class="profile-desc">
						<div class="profile-pic">
							<div class="count-indicator">
								<img class="img-xs rounded-circle " src="admin/assets/images/bs.png" alt="">
								<span class="count bg-success"></span>
							</div>
							<div class="profile-name">
								<h5 class="mb-0 font-weight-normal">Md. Rubel Hossain</h5>
								<span>Admin</span>
							</div>
						</div>
						
					</div>
				</li>
				<li class="nav-item nav-category">
					<span class="nav-link">Navigation</span>
				</li>
				<li class="nav-item menu-items">
					<a class="nav-link" href="{{url('/redirect')}}">
						<span class="menu-icon">
							<i class="mdi mdi-speedometer"></i>
						</span>
						<span class="menu-title">Dashboard</span>
					</a>
				</li>
				
				<li class="nav-item menu-items">
					<a class="nav-link" href="{{route('admin.products.create')}}">
						<span class="menu-icon">
							<i class="mdi mdi-file-document-box"></i>
						</span>
						<span class="menu-title">Add Products</span>
					</a>
				</li>

				<li class="nav-item menu-items">
					<a class="nav-link" href="{{route('admin.products.show')}}">
						<span class="menu-icon">
							<i class="mdi mdi-file-document-box"></i>
						</span>
						<span class="menu-title">Show Products</span>
					</a>
				</li>

				<li class="nav-item menu-items">
					<a class="nav-link" href="{{route('admin.order.show')}}">
						<span class="menu-icon">
							<i class="mdi mdi-file-document-box"></i>
						</span>
						<span class="menu-title">Ordered Products</span>
					</a>
				</li>

					<li class="nav-item menu-items">
					<a class="nav-link" href="{{route('admin.message.show')}}">
						<span class="menu-icon">
							<i class="mdi mdi-file-document-box"></i>
						</span>
						<span class="menu-title">Show All Message</span>
					</a>
				</li>
			</ul>
		</nav>