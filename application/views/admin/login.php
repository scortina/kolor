<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es"> <!--<![endif]-->
<!-- INICIA HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<!-- INICIA GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $this->config->base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $this->config->base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $this->config->base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $this->config->base_url();?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- TERMINA GLOBAL MANDATORY STYLES -->
	<!-- INICIA PAGE LEVEL STYLES -->
	<link href="<?php echo $this->config->base_url();?>assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $this->config->base_url();?>assets/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>
	<!-- TERMINA PAGE LEVEL SCRIPTS -->
	<!-- INICIA THEME STYLES -->
	<link href="<?php echo $this->config->base_url();?>assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $this->config->base_url();?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $this->config->base_url();?>assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
	<link id="style_color" href="<?php echo $this->config->base_url();?>assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $this->config->base_url();?>assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- TERMINA THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico"/>
	<!-- TERMINA PAGE LEVEL STYLES -->

</head>
<!-- TERMINA HEAD -->

<!-- INICIA BODY -->
<body class="login">
	<!-- INICIA LOGO -->
	<div class="logo">
		<img src="<?php echo $this->config->base_url();?>assets/admin/layout/img/logo.png" width="225" hight="182" alt="" /> 
	</div>
	<!-- TERMINA LOGO -->
    
	<!-- INICIA LOGIN -->
	<div class="content">
		<!-- INICIA LOGIN FORM -->

        <form class="login-form" action="<?php echo site_url('user/login')?>" method="post">
		<h3 class="form-title">Dashboard</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			Entra tu usuario y Clave. </span>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Usuario</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Clave</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
			</div>
		</div>
		<div class="form-actions">
			<label class="checkbox">
			<input type="checkbox" name="remember" value="1"/> Recuerdame </label>
			<button type="submit" class="btn red pull-right">
			Entrar <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	</form>
		<!-- TERMINA REGISTRATION FORM -->
</div>
<!-- TERMINA LOGIN -->

<!-- INICIA COPYRIGHT -->
<div class="copyright">
	 2015 &copy; Atomoclip Developer.
</div>
<!-- TERMINA COPYRIGHT -->

<!-- INICIA CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo $this->config->base_url();?>assets/global/plugins/respond.min.js"></script>
<script src="<?php echo $this->config->base_url();?>assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?php echo $this->config->base_url();?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $this->config->base_url();?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo $this->config->base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $this->config->base_url();?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo $this->config->base_url();?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo $this->config->base_url();?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- TERMINA CORE PLUGINS -->

<!-- INICIA PAGE LEVEL PLUGINS -->
<script src="<?php echo $this->config->base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo $this->config->base_url();?>assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $this->config->base_url();?>assets/global/plugins/select2/select2.min.js"></script>
<!-- TERMINA PAGE LEVEL PLUGINS -->

<!-- INICIA PAGE LEVEL SCRIPTS -->
<script src="<?php echo $this->config->base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo $this->config->base_url();?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo $this->config->base_url();?>assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo $this->config->base_url();?>assets/admin/pages/scripts/login-soft.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
  Login.init();
  Demo.init();
       // init background slide images
       $.backstretch([
        "<?php echo $this->config->base_url();?>assets/admin/pages/media/bg/1.jpg",
        "<?php echo $this->config->base_url();?>assets/admin/pages/media/bg/2.jpg",
        "<?php echo $this->config->base_url();?>assets/admin/pages/media/bg/3.jpg",
        "<?php echo $this->config->base_url();?>assets/admin/pages/media/bg/4.jpg"
        ], {
          fade: 1000,
          duration: 8000
    }
    );
});
</script>
<!-- TERMINA JAVASCRIPTS -->
</body>
<!-- TERMINA BODY -->
</html>