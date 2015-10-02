<!-- INICIA BODY -->
<body class="page-header-fixed page-quick-sidebar-over-content page-style-square"> 
<!-- INICIA HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- INICIA HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
			<img src="<?php echo $this->config->base_url();?>assets/admin/layout/img/logo.png" alt="logo" width="86px" height="14px" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler hide">
			</div>
		</div>
		<!-- TERMINA LOGO -->
		<!-- INICIA RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- TERMINA RESPONSIVE MENU TOGGLER -->
        
		<!-- INICIA TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<!-- INICIA USER LOGIN DROPDOWN -->
				<li class="dropdown dropdown-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle" src="<?php echo $this->config->base_url();?>assets/admin/layout/img/avatar3_small.jpg"/>
					<span class="username username-hide-on-mobile">
					Renny </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="<?php echo site_url('user/perfil/edit/'.$this->session->userdata('user_id'))?>">
							<i class="icon-user"></i> Mi Perfil </a>
						</li>
						
						<li>
							<a href="<?php echo site_url('user/user/pendientes/'.$this->session->userdata('user_id'))?>">
							<i class="icon-rocket"></i> Mis Pendientes <span class="badge badge-success">
							7 </span>
							</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="<?php echo site_url('user/logout')?>">
							<i class="icon-key"></i> Salir </a>
						</li>
					</ul>
				</li>
				<!-- TERMINA USER LOGIN DROPDOWN -->
			</ul>
		</div>
		<!-- TERMINA TOP NAVIGATION MENU -->
	</div>
	<!-- TERMINA HEADER INNER -->
</div>
<!-- TERMINA HEADER -->