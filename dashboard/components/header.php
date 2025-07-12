<header class="nxl-header">
	<div class="header-wrapper">
		<div class="header-left d-flex align-items-center gap-4">
			<a href="javascript:void(0);" class="nxl-head-mobile-toggler" id="mobile-collapse">
				<div class="hamburger hamburger--arrowturn">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</a>
			<div class="nxl-navigation-toggle">
				<a href="javascript:void(0);" id="menu-mini-button">
					<i class="feather-align-left"></i>
				</a>
				<a href="javascript:void(0);" id="menu-expend-button" style="display: none">
					<i class="feather-arrow-right"></i>
				</a>
			</div>
			<div class="nxl-lavel-mega-menu-toggle d-flex d-lg-none">
				<a href="javascript:void(0);" id="nxl-lavel-mega-menu-open">
					<i class="feather-align-left"></i>
				</a>
			</div>
			<div class="nxl-drp-link nxl-lavel-mega-menu">
				<div class="nxl-lavel-mega-menu-toggle d-flex d-lg-none">
					<a href="javascript:void(0)" id="nxl-lavel-mega-menu-hide">
						<i class="feather-arrow-left me-2"></i>
						<span>Back</span>
					</a>
				</div>
			</div>
		</div>
		<div class="header-right ms-auto">
			<div class="d-flex align-items-center">
				<div class="dropdown nxl-h-item">
					<a class="nxl-head-link me-3" data-bs-toggle="dropdown" href="#" role="button" data-bs-auto-close="outside">
						<i class="feather-bell"></i>
						<span class="badge bg-danger nxl-h-badge"></span>
					</a>
				</div>
				<div class="dropdown nxl-h-item">
					<div class="d-flex align-items-center mx-3">
						<div><h6 class="text-dark mb-0"><?=$userObj->nombres?>, <?=$userObj->apellidos?></h6></div>
					</div>
					<a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" data-bs-auto-close="outside">
						<img src="assets/images/avatar/1.png" alt="user-image" class="img-fluid user-avtar me-0" />
					</a>
					<div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-user-dropdown">
						<div class="dropdown-header">
							
							<div class="d-flex align-items-center">
								<!-- <img src="assets/images/avatar/1.png" alt="user-image" class="img-fluid user-avtar" /> -->
								<div>
									<div><h6 class="text-dark mb-0"><span class="badge bg-soft-success text-success ms-1">ADMINISTRADOR</span></h6></div>
									<span class="fs-12 fw-medium text-muted"><?=$userObj->correo?></span>
								</div>
							</div>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
</header>