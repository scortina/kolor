<div class="clearfix">
</div>
<!-- INICIA CONTAINER -->
<div class="page-container">
	<!-- INICIA SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- INICIA SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="sidebar-toggler-wrapper" style="margin-bottom:10px;">
					<div class="sidebar-toggler"></div>
				</li>
				<li class="start active open">
					<a href="<?php echo site_url('user/dashboard') ?>">
					<i class="icon-bar-chart"></i>
					<span class="title"> Dashboard </span>
					<span class="selected"></span></a>
				</li>
                
				<li>
					<a href="javascript:;">
					<i class="icon-basket"></i>
					<span class="title"> Ventas </span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
                        <a href="<?php echo site_url('ventas/promedio_mensual') ?>">
                        <i class="icon-bar-chart"></i>
                        <span class="title"> Promedio Mensual </span></a>
						</li>
                      <li>
                        <a href="<?php echo site_url('ventas/promedio_facturado') ?>">
                        <i class="icon-bar-chart"></i>
                        <span class="title"> Promedio Facturado </span></a>
						</li>
                      <li>
                        <a href="<?php echo site_url('ventas/productos_facturados') ?>">
                        <i class="icon-bar-chart"></i>
                        <span class="title"> Productos Facturados </span></a>
						</li>
					</ul>
				</li>
                
				<li>
					<a href="javascript:;">
					<i class="icon-rocket"></i>
					<span class="title"> Cotizaciones </span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
                        <a href="<?php echo site_url('cotizaciones/abiertas') ?>">
                        <i class="fa fa-dashboard"></i>
                        <span class="title"> Abiertas</span></a>
						</li>
                      <li>
                        <a href="<?php echo site_url('cotizaciones/cerradas') ?>">
                        <i class="fa fa-dashboard"></i>
                        <span class="title"> Cerradas</span></a>
						</li>
                  </ul>
				</li>
                
              <li>
					<a href="<?php echo site_url('cobranza/index') ?>">
					<i class="icon-credit-card"></i>
					<span class="title"> Cobranza </span></a>
				</li>
                
				<li>
					<a href="<?php echo site_url('clientes/datos_generales') ?>">
					<i class="icon-diamond"></i>
					<span class="title"> Clientes </span>
					</a>
				</li>
                
               <li>
					<a href="javascript:;">
					<i class="fa fa-cubes"></i>
					<span class="title"> Productos </span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
                        <a href="<?php echo site_url('productos/comprados') ?>">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="title"> Comprados </span></a>
						</li>
                      <li>
                        <a href="<?php echo site_url('productos/no_comprados') ?>">
                        <i class="fa fa-thumbs-down"></i>
                        <span class="title"> No Comprados</span></a>
						</li>
					</ul>
				</li>
                
				<li>
					<a href="javascript:;">
					<i class="icon-settings"></i>
					<span class="title"> Configuración</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo site_url('configuracion/usuarios') ?>"> Usuarios</a>
						</li>
						<li>
							<a href="<?php echo site_url('configuracion/niveles') ?>"> Niveles</a>
						</li>
						<li>
							<a href="<?php echo site_url('configuracion/accesos') ?>"> Accesos</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- TERMINA SIDEBAR MENU -->
		</div>
	</div>
	<!-- TERMINA SIDEBAR -->