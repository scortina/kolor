<!-- INICIA CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- INICIA PAGE HEADER-->
			<h3 class="page-title">
			Dashboard <small>reportes & estatisticas</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Inicio</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Dashboard</a>
					</li>
				</ul>
			</div>
			<!-- FIN HEADER-->
			<!-- INICIA DASHBOARD -->
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue-madison">
						<div class="visual">
							<i class="fa fa-comments"></i>
						</div>
						<div class="details">
							<div class="number">
                                                            $ <?php echo number_format($ventas);?>
							</div>
							<div class="desc">
								 Ventas
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="details">
							<div class="number">
                                                           <?php echo number_format($cotiza);?>
							</div>
							<div class="desc">
								 Cotizaciones
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
                                                        <div class="number">
                                                            <?php echo number_format($pedido);?>
							</div>
							<div class="desc">
								 Pedidos
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-plum">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="number">
								 +89%
							</div>
							<div class="desc">
								 Incremento
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<!-- BEGIN PORTLET-->
					<div class="portlet solid bordered grey-cararra">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-bar-chart-o"></i>Ventas
							</div>
						</div>
						<div class="portlet-body">
							<div id="site_statistics_loading">
								<img src="<?php echo $this->config->base_url();?>assets/admin/layout/img/loading.gif" alt="loading"/>
							</div>
							<div id="site_statistics_content" class="display-none">
								<div id="site_statistics" class="chart">
								</div>
							</div>
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
				<div class="col-md-6 col-sm-6">
					<!-- BEGIN PORTLET-->
					<div class="portlet solid grey-cararra bordered">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-bullhorn"></i>Cotizaciones
							</div>
						</div>
						<div class="portlet-body">
							<div id="site_activities_loading">
								<img src="<?php echo $this->config->base_url();?>assets/admin/layout/img/loading.gif" alt="loading"/>
							</div>
							<div id="site_activities_content" class="display-none">
								<div id="site_activities" class="chart">
								</div>
							</div>
							
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>
			<div class="clearfix">
			</div>
			
			<div class="row ">
				<div class="col-md-6 col-sm-6">
					<div class="portlet box purple-wisteria">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-calendar"></i>En el mes
							</div>
						</div>
						<div class="portlet-body">
							<div class="row">
<!--								<div class="col-md-4">
									<div class="easy-pie-chart">
										<div class="number transactions" data-percent="95">
											<span>+95 </span>%
										</div>
										<a class="title" href="#"> Junio </a>
									</div>
								</div>
								<div class="margin-bottom-10 visible-sm">
								</div>
								<div class="col-md-4">
									<div class="easy-pie-chart">
										<div class="number visits" data-percent="85">
											<span>
											+85 </span>
											%
										</div>
										<a class="title" href="#"> Julio </a>
									</div>
								</div>
								<div class="margin-bottom-10 visible-sm">
								</div>
								<div class="col-md-4">
									<div class="easy-pie-chart">
										<div class="number bounce" data-percent="46">
											<span>
											-46 </span>
											%
										</div>
										<a class="title" href="#"> Agosto </a>
									</div>
								</div>-->
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="portlet box red-sunglo">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-calendar"></i>En el año
							</div>
						</div>
						<div class="portlet-body">
							<div class="row">
								<div class="col-md-4">
									<div class="sparkline-chart">
										<div class="number" id="sparkline_bar"></div>
										<a class="title" href="#"> Ventas </a>
									</div>
								</div>
								<div class="margin-bottom-10 visible-sm">
								</div>
								<div class="col-md-4">
									<div class="sparkline-chart">
										<div class="number" id="sparkline_bar2"></div>
										<a class="title" href="#"> Cotizaciones </a>
									</div>
								</div>
								<div class="margin-bottom-10 visible-sm">
								</div>
								<div class="col-md-4">
									<div class="sparkline-chart">
										<div class="number" id="sparkline_line"></div>
										<a class="title" href="#"> Pedidos </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix">
			</div>
		</div>
	</div>
	<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->